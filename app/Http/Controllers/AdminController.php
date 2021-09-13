<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pin;
use App\Models\memberlist;
use App\Models\pin_request;
use App\Models\User;
use App\Models\topup;
use App\Models\bank_detail;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminController extends Controller
{
  public function blockUser(Request $req)
  {
    $id = $req -> id;
    $value = User::find($id);
    if($value -> status == "Active"){
     $result = User::where('id','=',$id)
        ->limit(1) 
        ->update(['status' => 'Inactive']); 
    }else{
     $result = User::where('id','=', $id)
        ->limit(1) 
        ->update(['status' => 'Active']);
    }
    if($result){
      return response()->json(['status'=>'success','message'=>"Status Changed!"]);
    }else{
      return response()->json(['status'=>'error','error'=>"Status Not Changed!"]);;
    }
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
 
  public function issuepin($id)
  {
     $data = pin_request::find($id);
     // return $req;
    $mid = $data->user_id;
    // return $sponsor_id;
    //convert 'GF100000' to '1'
    $user_data = User::find($mid);
    $no_of_pins = $data->no_of_pins;
    //generate $no_of_pins pins for $sponsor_id random
    if ($mid < 10) {
      $member_id = 'GF1' . "0000" . $mid;
    } elseif ($mid < 100) {
      $member_id = 'GF1' . "000" . $mid;
    } else {
      $member_id = 'GF1' . "00" . $mid;
    }
    $pin_array = $this->generate_pins($no_of_pins);
    foreach ($pin_array as $pin){
      $pin_data = [
         'member_id' => $member_id,
         'pin_no' => $pin,
         'member_name' => $user_data->name,
         'used_by' => '',
         'issue_date' => date('Y-m-d'),
         'product' => $data -> product,
         'transfer_id' => '',
         'transfer_name' => '',
         'report_type' => '',
         'approvel_status' => 'Wait',
         'total_record' => '',
         'mobile_no' => $user_data->mobile_no,
         'reciept' => '',
         'amount' => '',
      ];
      $res = Pin::insert($pin_data);
    }
    //insert users table where id = $sponsor_id
    // $User = User::where('id', $sponsor_id)->first();
    // $User->pins = $pin_array;
    // $User->save();
    if($res){
      Session::flash('success', "Pin generated success and saved");
      return redirect('Admin/pinsrequest');
    }
  }
  public function deleterequest($id)
  {
    $res = pin_request::where('id', $id)->delete();
    if($res){
      Session::flash('success', 'Pin request deleted!');
      return redirect('Admin/pinsrequest');
    }else{
      Session::flash('error', 'Pin Request Not deleted!');
      return redirect('Admin/pinsrequest');
    }
  }
  public function sortpins(Request $req)
  {
    $member_id = $req -> post('member_id');
    $name = $req -> post('name');
    $report = $req -> post('report');
    $approval = $req -> post('approval');
    $from = $req -> post('from');
    $to = $req -> post('to');
    if($report == 'Available'){
      $data = Pin::where('member_id','=',$member_id)->where('member_name','=',$name)->where('used_by','=','')->where('approvel_status','=',$approval)->where('issue_date','<=',$to)->where('issue_date','>=',$from)->get();
    }else if($report == 'Used'){
      $data = Pin::where('member_id','=',$member_id)->where('member_name','=',$name)->where('used_by','!=','')->where('approvel_status','=',$approval)->where('issue_date','<=',$to)->where('issue_date','>=',$from)->get();
    }else{
      $data = Pin::where('member_id','=',$member_id)->where('member_name','=',$name)->where('approvel_status','=',$approval)->where('issue_date','<=',$to)->where('issue_date','>=',$from)->get();
    }
    $count = count($data);
    return view('Admin/pinsreport', ['Users' => $data,'count'=>$count]);
  }
  public function index()
  {

    return view('Admin.login');
  }


  public function auth(Request $request)
  {
    $email = $request->post('email');
    $password = $request->post('password');
    $password  = md5($password);
    $result = Admin::where('email', '=', $email)->where('password', '=', $password)->get();
    if (isset($result['0']->id)) {
      if ($request->checkbox == 'true') {
        Session::put('email', $request->email);
        Session::put('password', $request->password);
      }
      $request->session()->put('ADMIN_LOGIN', true);
      $request->session()->put('ADMIN_ID', $result['0']->id);
      return redirect('Admin/dashboard');
    } else {
      $request->session()->flash('error', 'Please enter the Valid login details');
      return redirect('Admin');
    }
  }
  public function dashboard()
  {
    return view('Admin/dashboard');
  }
  public function account_info(Request $request, $action = null, $id = null)
  {
    if ($action == 'add') {
      switch ($request->method()) {
        case 'GET':
          $admin = admin::all();
          return view('Admin/account-info', ['admin' => $admin]);
          break;
        case 'POST':
          $admin = new admin();
          $admin->name = $request->name;
          $admin->password = $request->password;
          $admin->role = $request->role;
          $admin->address = $request->address;
          $admin->email = $request->email;
          $admin->mobile_no = $request->mobile_no;
          $admin->save();
          return back();
      }
    } else if ($action == 'edit') {
      switch ($request->method()) {
        case 'GET':
          $admin = admin::all();
          return view('Admin/account-info', ['admin' => $admin]);
          break;
        case 'POST':
          $admin = Admin::where('id', $id)->first();
          $admin->name = $request->name;
          $admin->password = $request->password;
          $admin->role = $request->role;
          $admin->address = $request->address;
          $admin->email = $request->email;
          $admin->mobile_no = $request->mobile_no;
          $admin->save();
          return back();
      }
    } else if ($action == 'delete') {

      $admin = admin::find($id);
      $admin->delete();
      return back();
    } else {
      $admin = admin::all();
      return view('Admin/account-info', ['admin' => $admin]);
    }
  }
  public function logout()
  {
    return view('Admin/login');
  }


  public function generatepindirects()
  {
    return view('Admin/generatepindirects');
  }

  public function generatepindirects_show_name(Request $request)
  {
    $sponsor_id = $request->sponsor_id;

    //convert 'GF100000' to '1'
    $sponsor_id = $this->convert_to_id($sponsor_id);

    $Name = User::select('name')
      ->where('id', $sponsor_id)
      ->first();

    return json_encode($Name);
  }

  public function generatepindirects_issue(Request $req)
  {
    // return $req;
    $sponsor_id = $req->member_id;
    // return $sponsor_id;
    //convert 'GF100000' to '1'
    $mid = $this->convert_to_id($sponsor_id);
    $user_data = User::find($mid);
    $no_of_pins = $req->no_of_pins;
    //generate $no_of_pins pins for $sponsor_id random
    if ($mid < 10) {
      $member_id = 'GF1' . "0000" . $mid;
    } elseif ($mid < 100) {
      $member_id = 'GF1' . "000" . $mid;
    } else {
      $member_id = 'GF1' . "00" . $mid;
    }
    $pin_array = $this->generate_pins($no_of_pins);
    foreach ($pin_array as $pin){
      $pin_data = [
         'member_id' => $sponsor_id,
         'pin_no' => $pin,
         'member_name' => $user_data->name,
         'used_by' => '',
         'issue_date' => date('Y-m-d'),
         'product' => $req -> post('package'),
         'transfer_id' => '',
         'transfer_name' => '',
         'report_type' => '',
         'approvel_status' => 'Wait',
         'total_record' => '',
         'mobile_no' => $user_data->mobile_no,
         'reciept' => '',
         'amount' => '',
      ];
      $res = Pin::insert($pin_data);
    }
    //insert users table where id = $sponsor_id
    // $User = User::where('id', $sponsor_id)->first();
    // $User->pins = $pin_array;
    // $User->save();
    if($res){
      Session::flash('success', "Pin generated success and saved");
      return redirect('Admin/generatepindirects');
    }
  }
  public function  convert_to_id($sponsor_id)
  {
    $sponsor_id = substr($sponsor_id, 3);
    $sponsor_id = ltrim($sponsor_id, '0');
    return $sponsor_id;
  }
  public function generate_pins($no_of_pins)
  {
    $pin_array = array();
    for ($i = 0; $i < $no_of_pins; $i++) {
      $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz{}[]$!/+';
      $pin_array[$i] =  substr(str_shuffle($data), 0, 10);
    }
    return $pin_array;
  }
  public function pinsreport()
  {
    //join Pin and User table with member_id = id
    $Pin = Pin::get();
    $count = count($Pin);
    return view('Admin/pinsreport', ['Users' => $Pin,'count'=>$count]);
  }
  public function pinsreport_post(Request $request)
  {
    // dd($request->all());
    $member_id = $request->member_id;
 
    $member_id = $this->convert_to_id($member_id);
    $name = $request->name;
    $report = $request->report;
    $approval = $request->approval;
    $package = $request->package;
    $form = $request->form;
    $status = $request->status;
    $to = $request->to;
    $from = $request->from;

    //when all null except member_id
    if ($member_id != null) {
      $Pin = DB::table('users')
              ->join('pins', 'users.id', '=', 'pins.member_id')
              ->where('pins.member_id', $member_id)
              ->get();
      Session::put('name', $Pin[0]->name);

      if ($report != null) {
        $Pin = DB::table('users')
          ->join('pins', 'users.id', '=', 'pins.member_id')
          ->where('pins.member_id', $member_id)
          ->where('pins.report_type', $report)
          ->get();
        Session::flash('show', 'true');
        return view('Admin/pinsreport', ['Users' => $Pin]);
      }

      Session::flash('show', 'true');
      return view('Admin/pinsreport', ['Users' => $Pin]);
    }


    //for approval not null
    if ($approval != null) {
      $Pin = Pin::where('id', $member_id)
        ->where('approval', $approval)
        ->get();
      Session::flash('show', 'true');
      return view('Admin/pinsreport', ['Users' => $Pin]);
    }

    //for package not null
    if ($package != null) {
      $Pin = Pin::where('id', $member_id)
        ->where('package', $package)
        ->get();
      Session::flash('show', 'true');
      return view('Admin/pinsreport', ['Users' => $Pin]);
    }

    //for form and to not null 
    if ($form != null and $to != null) {
      //when between form and to
      $Pin = Pin::where('id', $member_id)
        ->whereBetween('created_at', [$from, $to])
        ->get();
    }
  }

  //editpins and deletepins function
  public function deletepins($id)
  {
    //soft deletepins
    $res = Pin::where('id', $id)->delete();
    if($res){
      Session::flash('success', 'Pin deleted!');
      return redirect('Admin/pinsreport');
    }else{
      Session::flash('error', 'Pin Not deleted!');
      return redirect('Admin/pinsreport');
    }
  }

  public function searchpins(Request $req)
  {
    $id = $this->convert_to_id($req -> post('track_id'));
    // return $id;
    $data = pin_request::where('user_id','=',$id)->join('users','pin_requests.user_id','=','users.id')
    ->get(['pin_requests.*','users.track_id','users.mobile_no']);
    $count = count($data);
    return view('Admin/pinsrequest')->with('data',$data)->with('count',$count);
  }
  public function pinsrequest()
  {
    // return "Hello";
    $data = pin_request::join('users','pin_requests.user_id','=','users.id')
    ->get(['pin_requests.*','users.track_id','users.mobile_no']);
    // return $data;
    $count = count($data);
    return view('Admin/pinsrequest')->with('data',$data)->with('count',$count);
  }
  public function memberslist()
  {
    $data =  $id = Session::get('id');
    $res = User::find($id);
    $result = User::get();
    return view('Admin/memberslist')->with('data',$result);
  }
  public function get_detail(Request $request)
  {
    dd($request);
    return view('Admin/memberslist', ['memberlist' => memberlist::all()]);
  }
  public function topupreport($mid)
  {
    if ($mid < 10) {
      $id = 'GF1' . "0000" . $mid;
    } elseif ($mid < 100) {
      $id = 'GF1' . "000" . $mid;
    } else {
      $id = 'GF1' . "00" . $mid;
    }
    return view('Admin/topup')->with('data',topup::where('track_id','=',$id)->get());
  }
  public function topup_2()
  {
    return view('Admin/topup-2');
  }
  public function member_profile()
  {
    return view('Admin/member-profile');
  }
  public function change_my_profile($id)
  {
    $data = User::where('id','=',$id)->join('bank_details','users.id','=','bank_details.user_id')
    ->get(['users.*','bank_details.*']);
    // return $data;
    return view('Admin/edit-profile')->with('data', $data);
  }
  public function update_user_profile(Request $request)
  {
    $id = $request->post('pid');
    // return $id;
    // return $request;
    $User = new User;
    $data = [
      'salutation' => $request->salutation,
      's_name' => $request->s_name,
      'guardian' => $request->guardian,
      'name' => $request->name,
      'password' => $request->password,
      'dob' => $request->dob,
      'gender' => $request->gender,
      'marital_status' => $request->marital_status,
      's_name' => $request->s_name,
      'pan_no' => $request->pan_no,
      'mobile_no' => $request->mobile,
      'area' => $request->area,
      'city' => $request->city,
      'pincode' => $request->pincode,
      'adhar_no' => $request->adhar_no,
      'state' => $request->state,
      'email' => $request->email,
      'nominee_name' => $request->nominee,
      'relationship' => $request->relationship,
    ];
    $user_res = User::where('id','=',$id)->update($data);
    $Bank = new bank_detail;
    $bank_data = [
      'bank_name' => $request->bank_name,
      'account_no' => $request->account_no,
      'branch_name' => $request->branch_name,
      'account_type' => $request->accountType,
      'ifsc' => $request->IFSC,
    ];
    $bank_res = bank_detail::where('user_id','=',$id)->update($bank_data);
    if($user_res && $bank_res){
        Session::flash('success','User updated!');
        return redirect('Admin/memberslist');
    }else{
        Session::flash('error','User Not updated!');
    }
  }
  public function manage_member()
  {
    return view('Admin/manage-member');
  }
  public function total_member()
  {
    return view('Admin/total-member');
  }
  public function welcome_letter()
  {
    return view('Admin/welcome-letter');
  }
  public function kyc()
  {
    return view('Admin/kyc');
  }
  public function new_registration()
  {

    return view('Admin/new-registration', ['User' => User::all()]);
  }
  public function level_tree_view()
  {
    return view('Admin/level-tree-view');
  }
  public function rank_level_tree_view_associate()
  {
    return view('Admin/rank-level-tree-view-associate');
  }
  public function rank_level_tree_view_supervisor()
  {
    return view('Admin/rank-level-tree-view-supervisor');
  }
  public function rank_level_tree_view_manager()
  {
    return view('Admin/rank-level-tree-view-manager');
  }
  public function rank_level_tree_view_chief_manager()
  {
    return view('Admin/rank-level-tree-view-chief-manager');
  }
  public function rank_level_tree_view_ceo()
  {
    return view('Admin/rank-level-tree-view-ceo');
  }
  public function rank_level_tree_view_vice_president()
  {
    return view('Admin/rank-level-tree-view-vice-president');
  }
  public function rank_level_tree_view_president()
  {
    return view('Admin/rank-level-tree-view-president');
  }
  // public function auto_pool_tree_views_level1()
  // {
  //   return view('Admin/auto-pool-tree-views-level1');
  // }
  // public function auto_pool_tree_views_level2()
  // {
  //   return view('Admin/auto-pool-tree-views-level2');
  // }
  // public function auto_pool_tree_views_level3()
  // {
  //   return view('Admin/auto-pool-tree-views-level3');
  // }
  // public function auto_pool_tree_views_level4()
  // {
  //   return view('Admin/auto-pool-tree-views-level4');
  // }
  // public function auto_pool_tree_views_level5()
  // {
  //   return view('Admin/auto-pool-tree-views-level5');
  // }
  // public function auto_pool_tree_views_level6()
  // {
  //   return view('Admin/auto-pool-tree-views-level6');
  // }
  // public function auto_pool_tree_views_level7()
  // {
  //   return view('Admin/auto-pool-tree-views-level7');
  // }
  public function product_details()
  {
    return view('Admin/product-details');
  }
  public function product_wise_sales()
  {
    return view('Admin/product-wise-sales');
  }
  public function direct_income()
  {
    return view('Admin/direct-income');
  }
  public function level_income()
  {
    return view('Admin/level-income');
  }
  public function rank_level_income()
  {
    return view('Admin/rank-level-income');
  }
  public function auto_pool_income()
  {
    return view('Admin/auto-pool-income');
  }
  public function rank_level_process()
  {
    return view('Admin/rank-level-process');
  }
  public function auto_pool_process()
  {
    return view('Admin/auto-pool-process');
  }
  public function wallet_report()
  {
    return view('Admin/wallet-report');
  }
  public function weekly_payment_report()
  {
    return view('Admin/weekly-payment-report');
  }
  public function paid_payment_report()
  {
    return view('Admin/paid-payment-report');
  }
  public function transaction_report()
  {
    return view('Admin/transaction-report');
  }
  public function add_wallet_amount()
  {
    return view('Admin/add-wallet-amount');
  }
  public function deduct_wallet_amount()
  {
    return view('Admin/deduct-wallet-amount');
  }
  public function ticket_list()
  {
    return view('Admin/ticket-list');
  }
  public function news()
  {
    return view('Admin/news');
  }
  public function volunteer_details()
  {
    return view('Admin/volunteer_details');
  }
  public function popup()
  {
    return view('Admin/popup');
  }
}
