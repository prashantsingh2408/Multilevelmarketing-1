<?php

namespace App\Http\Controllers;

use App\Models\popup;
use Illuminate\Http\Request;
use Session;
class PopupController extends Controller
{
    public function getpopup()
    {
        $data = popup::where('screen','=','member')->get();
        return response()->json(['status'=>'success','data'=>$data]);
    }
    public function getpopupadmin()
    {
        $data = popup::where('screen','=','home')->get();
        return response()->json(['status'=>'success','data'=>$data]);
    }
    
    public function index()
    {
        return view('Admin/popup')->with('data',popup::get());
    }

    public function store(Request $request)
    {
        // return time();
        $res = new popup;
        $res -> title = $request-> post('title');
        $res -> screen = $request-> post('screen');
        $file = $request-> file('filename');
        $file_name = time().'.'.$file->getClientOriginalExtension();
        $res -> file = $file_name;
        $res -> save();
        if($res -> save()){
            $file->move('uploads', $file_name);
            Session::flash('success', 'Popup Created!');
            return redirect('Admin/pop-up');
        }else{
            Session::flash('error', 'Popup Not Created!');
            return redirect('Admin/pop-up');
        }
    }

    public function destroy($id)
    {
        $res = popup::destroy($id);
        if($res){
            Session::flash('success', 'Popup Deleted!');
            return redirect('Admin/pop-up');
        }else{
            Session::flash('error', 'Popup Not Deleted!');
            return redirect('Admin/pop-up');
        }
    }
}
