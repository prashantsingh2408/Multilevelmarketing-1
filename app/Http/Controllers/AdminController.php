<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Validator;
use App\Models\kyc;
use App\Models\pin;
use App\Models\User;
use App\Models\Admin;
use App\Models\topup;
use App\Models\product;
use App\Models\memberlist;
use App\Models\bank_detail;
use App\Models\pin_request;
use App\Models\adminsetup;
use App\Models\User;
use App\Models\user_parent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;

class AdminController extends Controller
{
  public function assignepin($id)
  {
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pin = substr(str_shuffle($data), 0, 10);
    $res = User::where('id','=',$id)->update(['pin'=>$pin]);
    if($res){
      Session::flash('success', 'E-PIN Generated Successfully!E-PIN -'.$pin);
      return redirect('Admin/new-registration');
    }else{
      Session::flash('error', 'E-PIN Not Generated!');
      return redirect('Admin/new-registration');
    }
  }
  public function admin_setup(Request $req)
  {
     return view('Admin/admin_setup')->with('User',adminsetup::get());
  }
  public function add_setup(Request $req)
  {
    $count = adminsetup::get();
    foreach ($count as $da){}
    if(count($count)== 1){
      $data = [
        'tds_deduction_with_pan'=>$req -> post('tds_deduction'),
        'admin_charge_with_pan' =>$req -> post('admin_charge'),
        'payout_limit'=>$req -> post('payout_limit'),
        'tds_deduction_without_pan'=>$req -> post('tds_deductionwp'),
        'admin_charge_without_pan'=>$req -> post('admin_chargewp'),
      ];
      $result = adminsetup::where('id','=',$da->id)->update($data);
    }else{
      $res = new adminsetup;
      $res->tds_deduction_with_pan=$req -> post('tds_deduction');
      $res->admin_charge_with_pan =$req -> post('admin_charge');
      $res->payout_limit=$req -> post('payout_limit');
      $res->tds_deduction_without_pan=$req -> post('tds_deductionwp');
      $res->admin_charge_without_pan=$req -> post('admin_chargewp');
      $result = $res -> save();
    }
    if($result){
      Session::flash('success', 'Setup Added!');
      return redirect('Admin/admin_setup');
    }else{
      Session::flash('error', 'Setup Not Added!');
      return redirect('Admin/admin_setup');
    }
  }
  public function getleveltree(Request $req)
  {    
      $sid = $req->member_id;
      $id = $this->convert_to_id($sid);
      // return $id;
      function getCategoryTree($id)
      {
          $sql=user_parent::where('parent_id','=',$id)
          ->join('users','users.id','=','user_parents.member_id')
          ->join('products','users.product','=','products.id')
          ->get(['users.id','users.name','users.member_id','users.sponsor_id','users.joining_date_from','products.product']);
          return $sql;
      }
      $role = getCategoryTree($id);
      return view("Admin/level-tree-view")->with('data',$role);
  }
  public function getkycdetails(Request $request)
  {
    $track_id = $request->post('track_id');
    $data = kyc::where('member_id','=',$track_id)->get();
    if(count($data) > 0){
      foreach ($data as $value){}
      return response() -> json(['status'=>'success','member_id'=>$value->member_id,'pan_number'=>$value->pan_number,'pan_file'=>$value->pan_file,
      'adhar_file'=>$value->adhar_file,'photo'=>$value->photo,'cheque_file'=>$value->cheque_file,'remarks'=>$value->remarks]);
    }else{
      return response() -> json(['status'=>'error','error'=>'User not Found!']);
    }
  }
  public function searchtopup(Request $req)
  {
    $member_id = $req->post('member_id');
    $from = date("Y-m-d H:i:s",strtotime($req->post('from')));
    $to = date("Y-m-d H:i:s",strtotime($req->post('to')));
    $data = topup::where('track_id','=',$member_id)->where('created_at','>=',$from)->where('created_at','<=',$to)->get();
    return view('Admin/topup')->with('data',$data);
  }
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
    // return $data;
    return view('Admin/pinsreport', ['Users' => $data,'count'=>$count,'data'=>product::get()]);
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
          $admin->password = md5($request->password);
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
    return view('Admin/generatepindirects')->with('data',product::get());
  }

  public function generatepindirects_show_name(Request $request)
  {
    $sponsor_id = $request->sponsor_id;
    //convert 'GF100000' to '1'
    $sponsor_id = $this->convert_to_id($sponsor_id);
    $name = User::select('name')
      ->where('id', $sponsor_id)
      ->first();
    
    $data= pin::select('mobile_no','product','pin_no')
        ->where('id', $sponsor_id)->first();
    $mobile = $data->mobile_no;
    $product = $data->product;
    $pin_no = $data->pin_no;
    
    //fetch all pins
    $data = pin::select('pin')
                ->where('memeber_id', $sponsor_id)->get();

    if($name == null) {
      return json_encode(null);
    }
    return json_encode([$name->name,$mobile,$product,$pin_no]);
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
      $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $pin_array[$i] =  substr(str_shuffle($data), 0, 10);
    }
    return $pin_array;
  }
  public function pinsreport()
  {
    //join Pin and User table with member_id = id
    $Pin = Pin::get();
    $count = count($Pin);
    return view('Admin/pinsreport', ['Users' => $Pin,'count'=>$count])->with('data',product::get());
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
    ->get(['pin_requests.*','users.member_id','users.mobile_no']);
    $count = count($data);
    return view('Admin/pinsrequest')->with('data',$data)->with('count',$count);
  }
  public function pinsrequest()
  {
    // return "Hello";
    $data = pin_request::join('users','pin_requests.user_id','=','users.id')
    ->get(['pin_requests.*','users.member_id','users.mobile_no']);
    // return $data;
    $count = count($data);
    return view('Admin/pinsrequest')->with('data',$data)->with('count',$count);
  }
  public function memberslist()
  {
    // $id = Session::get('id');
    // $res = User::find($id);
    // $result = User::get();
    // $data = DB::table("users as child")
    // ->join("users as parent", function($join){
    //   $join->on("child.sponsor_id", "=", "parent.id");
    //   $join->on("products.id", "=", "users.product");
    // })
    // ->select("child.*","products.*", "parent.name as parentname")
    // ->get();
    $id = Session::get('id');
    $res = User::find($id);
    $result = User::get();
    return view('Admin/memberslist')->with('data',$result)->with('datas',product::get());
  }
  public function get_detail(Request $request)
  {
    dd($request);
    return view('Admin/memberslist', ['memberlist' => memberlist::all()]);
  }
  public function topupreport()
  {
    return view('Admin/topup')->with('data',topup::get());
  }
  public function topup_2()
  {
    return view('Admin/topup-2');
  }
  public function member_profile()
  {
    return view('Admin/member-profile');
  }
  public function getprofile(Request $req)
  {
    $data = User::where('member_id','=',$req->track_id)->get();
    return view('Admin/member-profile')->with('data',$data);
  }
  public function change_my_profile($id)
  {
    $data = User::where('id','=',$id)->leftjoin('bank_details','users.id','=','bank_details.member_id')
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
    $res = bank_detail::where('member_id','=',$id)->get();
    if (count($res) > 0) {
      $bank_data = [
        'bank_name' => $request->bank_name,
        'account_no' => $request->account_no,
        'branch_name' => $request->branch_name,
        'account_type' => $request->accountType,
        'ifsc' => $request->IFSC,
      ];
      $bank_res = bank_detail::where('member_id','=',$id)->update($bank_data);
    }else{
      $Bank = new bank_detail;
      $Bank->member_id = $id;
      $Bank->bank_name = $request->bank_name;
      $Bank->account_no = $request->account_no;
      $Bank->branch_name = $request->branch_name;
      $Bank->account_type = $request->accountType;
      $Bank->ifsc = $request->IFSC;
      $bank_res = $Bank->save();

    }
    if($user_res && $bank_res){
        Session::flash('success','User updated!');
        return redirect('Admin/manage-member');
    }else{
        Session::flash('error','User Not updated!');
    }
  }
  public function searchMember(Request $req)
  {
    $track_id = $req -> post('track_id');
    $name = $req -> post('name');
    $data = User::where('member_id','=',$track_id)->where('name','=',$name)->get();
    return view('Admin/manage-member')->with('data',$data);
  }
  public function memberSearch(Request $req)
  {
    // return $req;
    $package = $req-> post('package');
    $from = date("Y-m-d H:i:s",strtotime($req->post('from')));
    $to = date("Y-m-d H:i:s",strtotime($req->post('to')));
    $data = User::where('product','=',$package)->where('joining_date_from','>=',$from)->where('joining_date_from','<=',$to)->get();
    $datas = User::where('status' , '=' , 'Active')->where('product','=',$package)->where('joining_date_from','>=',$from)->where('joining_date_from','<=',$to)->get();
    return view('Admin/total-member')->with('data', $data)->with('count_active',count($datas))->with('total',count($data));
  
  }
  
  public function manage_member()
  {
    $data = User::get();
    return view('Admin/manage-member')->with('data', $data);
  }
  public function total_member()
  {
    $data = User::get();
    $datas = User::where('status' , '=' , 'Active')->get();
    return view('Admin/total-member')->with('data', $data)->with('count_active',count($datas))->with('total',count($data));
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
    $data = User::join('users as user','users.sponsor_id','=','user.id')
            ->get(['users.*','user.name as parent']);
    return view('Admin/new-registration', ['User' => $data]);
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
  public function product_wise_sales()
  {
    $data = User::join('products','users.product','=','products.id')->get(['users.*','products.product as product_name']);
    return view('Admin/product-wise-sales')->with('data',$data)->with('count',count($data))->with('package',product::get());
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
  public function volunteer_details()
  {
    return view('Admin/volunteer-details');
  }
}
