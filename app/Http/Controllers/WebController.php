<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\user_parent;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
class WebController extends Controller
{
    public function getUser(Request $request)
    {
        $data = User::where('member_id','=',$request->data)->get();
        foreach($data as $value){}
        return response()->json(['id'=>$value->id,'name'=>$value->name]);
    }
    public function index(){
        return view('web.register');
    }
    public function post(Request $request){
        // return $request;
        $request->validate([
            'sponsor_id' => 'required',
            'sponsor_name' => 'required',
            'name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        $mid = User::max('id');
        // return $mid+1;
        if($mid < 10){
        $member_id = 'GF1' . "0000" . $mid+1;
        }
        elseif($mid < 100){
            $member_id = 'GF1' . "000" . $mid+1;
        } 
        else{
            $member_id = 'GF1' . "00" . $mid+1;
        }
        $User = new User();
        $User->member_id = $member_id;
        $User->sponsor_id = $request->pid;
        $User->name = $request->name;
        $User->mobile_no = $request->mobile_no;
        $User->status = 'Inactive';
        $User->top_up = "no";
        $User -> joining_date_from=date('Y-m-d H:i:s');
        $User->email = $request->email;
        $User->password = md5($request->password);
        $User->save();
        if($User->save()){
            $max = User::max('id');
            $data = user_parent::where('parent_id','=',$request->pid)->get();
            if(count($data) > 0){
                $res = DB::insert("INSERT INTO user_parents (member_id, parent_id) SELECT $max, member_id FROM user_parents WHERE parent_id=$request->pid");
                // return $res;
            }else{
                $res = DB::insert("INSERT INTO user_parents (member_id, parent_id) VALUES($max,$request->pid)");
                // return $res;
            }
            return redirect('User');
        }
    }
    public function edit($id)
    {
        // return $id;
        // return User::find($id);
        return view('Admin/edit_user')->with('data',User::find($id));
    }
    public function edit_by_user($id)
    {
        return view('User/edit_user')->with('data',User::find($id));
    }
    public function update(Request $req)
    {
        // return $req;
        $id = $req -> post('pid');
        $sponser_id = $req -> post('sponser_id');
        $member_id = $req -> post('member_id');
        $data = User::find($id);
        // return [$member_id,$sponser_id,$id];
        // return $data -> member_id;
        if($data -> top_up == 'Paid' && $data -> member_id == $member_id){
             $result =  DB::table('users') 
             ->where('id', $id)
             ->limit(1) 
             ->update(['status'=>'Active','activation_date_from'=>date('d-m-Y H:i:s')]);
             if($result){
                 Session::flash('message','User Activated successfully!');
                 return redirect('Admin/new-registration');
             }else{
                Session::flash('error','User Not Activated!');
                 return redirect('Admin/new-registration');
             }
        }else{
            return "No";
        }
       
    }
    public function update_by_user(Request $req)
    {
        $id = $req -> post('pid');
        $sponser_id = $req -> post('sponsor_id');
        $member_id = $req -> post('member_id');
        $data = User::find($id);
        // return [$member_id,$sponser_id,$id];
        // return $data -> member_id;
        if($data -> top_up == 'Paid' && $data -> member_id == $member_id){
             $result =  DB::table('users') 
             ->where('id', $id)
             ->limit(1) 
             ->update(['status'=>'Active','activation_date_from'=>date('d-m-Y H:i:s')]);
             if($result){
                 Session::flash('message','User Activated successfully!');
                 return redirect('User/new-registration');
             }else{
                Session::flash('error','User Not Activated!');
                 return redirect('User/new-registration');
             }
        }else{
            return "No";
        }
       
    }
}
