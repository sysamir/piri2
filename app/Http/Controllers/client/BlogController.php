<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BlogNews;
use App\BlogCategories;

class BlogController extends Controller
{
    public function index()
    {
      $blog = BlogNews::with('blogcat')->orderBy('blog_id','desc')->paginate(5);
      return view('client.Blog.index',compact('blog'));
    }
}
