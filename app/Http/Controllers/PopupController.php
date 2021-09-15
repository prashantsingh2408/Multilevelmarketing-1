<?php

namespace App\Http\Controllers;

use App\Models\popup;
use Illuminate\Http\Request;
use Session;
class PopupController extends Controller
{
    public function index()
    {
        return view('Admin/popup');
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
}
