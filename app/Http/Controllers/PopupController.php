<?php

namespace App\Http\Controllers;

use App\Models\popup;
use Illuminate\Http\Request;
use Session;
class PopupController extends Controller
{
    public function index()
    {
        return view('Admin/popup')->with('data',popup::get());
    }

    public function store(Request $request)
    {
        // return time();
        $res = new popup;
        $res -> screen = $request-> post('title');
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
