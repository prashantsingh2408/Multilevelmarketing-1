<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tds;

class TdsController extends Controller
{
    public function tds()
    {
        return view('Admin/tds', ['tds' => tds::all()]);
    }
    public function tds_post(Request  $request)
    {
        $tds = new tds();
        $tds->tds = $request->tds;
        $tds->maintenance = $request->maintenance;
        $tds->with_pan = $request->with_pan;
        $tds->save();

        return view('Admin/tds', ['tds' => tds::all()]);
    }
}