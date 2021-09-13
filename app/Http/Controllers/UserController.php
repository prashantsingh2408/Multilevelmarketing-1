<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Validator;
use App\Models\kyc;
use App\Models\pin;
use App\Models\User;
use App\Models\bank_detail;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('User.login');
  }

  public function auth(Request $request)
  {
    $email = $request->post('email');
    $password = $request->post('password');
    $password = md5($password);

    $result = User::where('email', '=', $email)->where('password', '=', $password)->get();
    foreach ($result as  $value) {
      Session::put('id', $value->id);
    }
    if (isset($result['0']->id)) {
      if ($request->checkbox == 'true') {
        Session::put('email', $request->email);
        Session::put('password', $request->password);
      }
      $request->session()->put('user', true);
      $request->session()->put('USER_LOGIN', true);
      $request->session()->put('USER_ID', $result['0']->id);
      return redirect('User/dashboard');
    } else {
      $request->session()->flash('error', 'Please enter the Valid login details');
      return redirect('User');
    }
  }

  public function dashboard(Request $request) 
  {
    if ($request->method() == 'POST') {
      
      //validation
      $validator = Validator::make($request->all(), [ 
        'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      //save file
      $image = $request->file('file');
      $input['picname'] = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/images');
      $image->move($destinationPath, $input['picname']);

      $user = User::find($request->session()->get('USER_ID'));
      $user->pic = $input['picname'];
      $user->save();
      //save data
      
    }
    
    $id = Session::get('id');
    $result = User::find($id);
    return view('User/dashboard')->with('data', $result);
  }

  public function logout()
  {
    Session::forget('user', false);
    return view('User/login');
  }


  public function profile()
  {
    $id = Session::get('id');
    $result = User::find($id);
    return view('User/profile', ['result' => $result]);
  }

  public function change_my_profile(Request $request)
  {
    if ($request->method() == 'POST') {

      $dob = $request->dob . $request->dob_day . $request->dob_month;
      // dd($request->name);
      $User = User::find($request->id);
      // dd($User);
      $User->name = $request->name;
      $User->dob = $dob;
      $User->gender = $request->gender;
      $User->marital_status = $request->marital_status;
      $User->s_name = $request->s_name;
      $User->pan_no = $request->pan_no;
      $User->mobile_no = $request->mobile_no;
      $User->area = $request->area;
      $User->city = $request->city;
      $User->pincode = $request->pincode;
      $User->adhar_no = $request->adhar_no;
      $User->state = $request->state;
      $User->email = $request->email;
      $User->nominee_name = $request->nominee_name;
      $User->relationship = $request->relationship;
      $User->save();
    }
    $id = Session::get('id');
    $result = User::find($id);
    return view('User/change-my-profile', ['result' => $result]);
  }

    public function new_registration()
  {
    $id = Session::get('id');
    $res = User::find($id);
    $result = User::where('sponsor_id','=',$res->member_id)->get();
    return view('User/new-registration')->with('User', $result);
  }

  public function change_password()
  {
    return view('User/change-password');
  }

  public function update_password(Request $request)
  {
    $validated = $request->validate([
      'current_password' => 'required',
      'new_password' => 'required|required_with:confirm_password|same:confirm_password',
    ]);
    $user_id = Session::get('id');
    $old = md5($request->post('current_password'));
    $new = $request->post('new_password');
    $data = User::where('id', '=', $user_id)->where('password', '=', $old)->get();
    if (count($data) == 1) {
    } else {
      Session::flash('errormsg', 'Old password not matched!');
      return redirect('User/change-password');
    }
  }

  public function bank_details(Request $request)
  {

    if ($request->method() == 'POST') {
        $user_id = Session::get('id');

      //updateOrCreate
      $bank_detail = bank_detail::updateOrCreate(
        ['id' => $user_id],
        [
          'bank_name' => 'dsfsd',
          'branch_name' => $request->branch_name,
          'ifsc' => $request->ifsc_code,
          'account_number' => $request->account_no,
          'account_type' => $request->account_type,
        ],  
      );

      if ($bank_detail) {
          Session::flash('success', 'Bank Details Added Successfully');
          return redirect('User/bank-details');
      }
    }

    $id = Session::get('id');
    $result = User::find($id);
    return view('User/bank-details', ['result' => $result]);
  }

  public function kyc(Request $request)
  {
    if ($request->method() == 'POST') {
      //save panfile
      $result = $request->file('panfile');
      $filename = $result->getClientOriginalName();
      $result->move(public_path('uploads'), $filename);

      //save adharfile
      $result = $request->file('adharfile');
      $filename = $result->getClientOriginalName();
      $result->move(public_path('uploads'), $filename);

      //save photo
      $result = $request->file('photofile');
      $filename = $result->getClientOriginalName();
      $result->move(public_path('uploads'), $filename);

      //save chequefile
      $result = $request->file('chequefile');
      $filename = $result->getClientOriginalName();
      $result->move(public_path('uploads'), $filename);

      $user_id = Session::get('id');

      $kyc = kyc::updateOrCreate(
        ['id' => $user_id],
        [
          'pan_number' => $request->pan_no,
          'pan_file' => $filename,
          'adhar_file' => $filename,
          'photo' => $filename,
          'cheque_file' => $filename,
          'remarks' => $request->remarks
        ],
      );
    }
    return view('User/kyc');
  }
  public function welcome_letter()
  {
    
    return view('User/welcome-letter');
  }
  public function transferpin()
  {
    return view('User/transferpin');
  }
   public function transferpin_show_name(Request $request)
  {
    $sponsor_id = $request->sponsor_id;

    //convert 'GF100000' to '1'
    $sponsor_id = $this->convert_to_id($sponsor_id);

    $Name = User::select('name')
      ->where('id', $sponsor_id)
      ->first();

    return json_encode($Name);
  }

  public function transfer_pin(Request $req)
  {
     //if post
    if ($req->method() == 'POST') {
        $sponsor_id = $req->member_id;

        //convert 'GF100000' to '1'
        $sponsor_id = $this->convert_to_id($sponsor_id);

        //if current user pin are enough to transfer to $sponsor_id user
        //current user form session 
        $user_id = Session::get('id');
        //no of pin $user_id have
        $no_of_pin = Pin::where('member_id', $user_id)->count();

        //pin to trasfer
        $pin_to_transfer = $req->pin_to_transfer;

        //if no of pin is less than pin to transfer
        if ($no_of_pin < $pin_to_transfer) {
            Session::flash('error', 'No of pin is less than pin to transfer');
            return redirect('User/transferpin');
        }
        else{
            //if no of pin is greater or equal to than pin to transfer
            //update 'trasfer_pin' column to $sponser_id where member_id = $user_id
            $pin = Pin::where('member_id', $user_id)
                      ->update(['transfer_id' => $sponsor_id]);
                      // ->limit($pin_to_transfer);
            
        }
        //insert users table where id = $sponsor_id
        Session::flash('success', "Pin transfer successfully");
        return view('User/transfer-pin');  
    }
    return view('User/transfer-pin');
  }

  public function  convert_to_id($sponsor_id)
  {
    $sponsor_id = substr($sponsor_id, 3);
    $sponsor_id = ltrim($sponsor_id, '0');
    return $sponsor_id;
  }
  public function pins_request()
  {
    $id = Session::get('id');
    $result = User::find($id);
    return view('User/pins-request', ['result' => $result]);
  }
  public function pins_report()
  {
    $mid = Session::get('id');
    // return $mid;
    if ($mid < 10) {
      $member_id = 'GF1' . "0000" . $mid;
    } elseif ($mid < 100) {
      $member_id = 'GF1' . "000" . $mid;
    } else {
      $member_id = 'GF1' . "00" . $mid;
    }
    // return $member_id;
    $data = pin::where('member_id', '=', $member_id)->get();
    // return $data;
    return view('User/pins-report')->with('data', $data);
  }
  public function transfer_pin_report()
  {
    return view('User/transfer-pin-report');
  }
  public function top_up()
  {
    return view('User/top-up');
  }
  public function direct_team()
  {
    return view('User/direct-team');
  }
  public function level_tree_views()
  {
    return view('User/level-tree-views');
  }
  public function rank_level_tree_view_associate()
  {
    return view('User/rank-level-tree-view-associate');
  }
  public function rank_level_tree_view_supervisor()
  {
    return view('User/rank-level-tree-view-supervisor');
  }
  public function rank_level_tree_view_manager()
  {
    return view('User/rank-level-tree-view-manager');
  }
  public function rank_level_tree_view_cheif_manager()
  {
    return view('User/rank-level-tree-view-chief-manager');
  }
  public function rank_level_tree_view_ceo()
  {
    return view('User/rank-level-tree-view-ceo');
  }
  public function rank_level_tree_view_vice_president()
  {
    return view('User/rank-level-tree-view-vice-president');
  }
  public function rank_level_tree_view_president()
  {
    return view('User/rank-level-tree-view-president');
  }
  public function transaction_report()
  {
    return view('User/transaction-report');
  }
  public function direct_income()
  {
    return view('User/direct-income');
  }
  public function level_income()
  {
    return view('User/level-income');
  }
  public function rank_level_income()
  {
    return view('User/rank-level-income');
  }
  public function my_rewards()
  {
    return view('User/my-rewards');
  }
  public function cash_wallet()
  {
    return view('User/cash-wallet');
  }
  public function payout_report()
  {
    return view('User/payout-report');
  }
  public function transfer_wallet_amount()
  {
    return view('User/transfer-wallet-amount');
  }
  public function generate_ticket()
  {
    return view('User/generate-ticket');
  } 
  public function ticket_list()
  {
    return view('User/ticket-list');
  }
}
