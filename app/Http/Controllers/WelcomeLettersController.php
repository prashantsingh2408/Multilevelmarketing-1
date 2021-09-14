<?php

namespace App\Http\Controllers;

use App\Models\welcome_letters;
use Illuminate\Http\Request;
use Session;
class WelcomeLettersController extends Controller
{
    public function store(Request $request)
    {
        $res = new welcome_letters;
        $res -> member_id = $request -> post('track_id');
        $res -> member_name = $request -> post('member_name');
        $res -> address = $request -> post('address');
        $res -> city = $request -> post('city');
        $res -> distict = $request -> post('district');
        $res -> state = $request -> post('state');
        $res -> sponsored_by = $request -> post('sponsered_by');
        $res -> DOJ = $request -> post('doj');
        $res -> membership = $request -> post('membership');
        $res -> save();
        if($res -> save()){
            Session::flash('success', 'Welcome Letter Created!');
            return redirect('Admin/welcome-letter');
        }else{
            Session::flash('error', 'Welcome Letter Not Created!');
            return redirect('Admin/welcome-letter');
        }
    }
}
