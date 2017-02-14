<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BlogNews;
use App\BlogCategories;

use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{
    public function index()
    {
      $blog = BlogNews::with('blogcat')->orderBy('blog_id','desc')->paginate(5);
      $cat =  BlogCategories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
      return view('client.Blog.index',compact('blog','cat'));
    }

    public function post($id)
    {
      $blog = BlogNews::with('blogcat')->findOrFail($id);
      $cat =  BlogCategories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
      return view('client.Blog.post',compact('blog','cat'));
    }

    public function category($id)
    {
      $cat =  BlogCategories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
      $blogcat = BlogCategories::find($id)->news();
      $blog = BlogNews::with('blogcat')->whereIn('blog_cat_id', $blogcat)->orderBy('blog_id','desc')->paginate(5);
      return view('client.Blog.index',compact('blog','cat'));
    }

    public function search()
    {
      $keyword =  Input::get('key');
      $cat =  BlogCategories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
      $blog =  BlogNews::where('blog_title', 'LIKE', '%'.$keyword.'%')->paginate(5);
      return view('client.Blog.index',compact('blog','keyword','cat'));
    }
}
