<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogNews;
use App\BlogCategories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = BlogNews::with('blogcat')->orderBy('blog_id','desc')->limit(3)->get();
        return view('client.index',compact('blog'));
    }
}
