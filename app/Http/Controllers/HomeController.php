<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogNews;
use App\BlogCategories;
use App\Tender;
use App\Categories;

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
        $tenderSearch = Tender::with('category','username','person','company')->orderBy('tender_id','DESC')->get();
        $tenderCATE = Categories::with('parent','children')->whereNull('cat_parent')->get();
        return view('client.index',compact('blog','tenderSearch','tenderCATE'));
    }
}
