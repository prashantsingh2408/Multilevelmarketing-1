<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Session;
class NewsController extends Controller
{
    public function index()
    {
        return view('Admin/news');
    }

    public function store(Request $request)
    {
        $res = new news;
        $res -> title = $request -> post('title');
        $res -> news = $request -> post('news');
        $res -> save();
        if($res -> save()){
            Session::flash('success', 'News Created!');
            return redirect('Admin/news');
        }else{
            Session::flash('error', 'News Not Created!');
            return redirect('Admin/news');
        }
    }
}
