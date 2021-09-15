<?php

namespace App\Http\Controllers;

use App\Models\wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        $data = wallet::join('users','wallets.member_id','=','users.member_id')->get(['users.name','users.pan_no','wallets.*']);
        // return $data;
        return view('Admin/wallet-report')->with('data', $data);
    }

    public function show(Request $req)
    {
        $member_id = $req -> post('member_id');
        $data = wallet::join('users','wallets.member_id','=','users.member_id')
        ->where('wallets.member_id','=', $member_id)
        ->get(['users.name','users.pan_no','wallets.*']);
        // return $data;
        return view('Admin/wallet-report')->with('data', $data);
    }

}
