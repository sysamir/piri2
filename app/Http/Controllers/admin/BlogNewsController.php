<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Session;
use Auth;
use App\BlogNews;
use App\BlogCategories;
use DB;
use Illuminate\Support\Facades\Input;
use Storage;
use File;

class BlogNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogNews = BlogNews::with('blogcat')->orderBy('blog_id','desc')->get();
        return view('admin.BlogNews.index',compact('blogNews'));
    }


    public function getSearch()
    {
      $keyword =  Input::get('key');
      $blogNews =  BlogNews::where('blog_title', 'LIKE', '%'.$keyword.'%')->get();
      return view('admin.BlogNews.index',compact('blogNews','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $blogNewsCreate = BlogNews::with('blogcat')->get();
        $blognewsCatCreate =  BlogCategories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
        return view('admin.BlogNews.create',compact('blogNewsCreate','blognewsCatCreate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              $this->validate($request, [
                'blog_title' => 'required',
                'blog_descp' => 'required',
                'blog_cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'blog_cat_id' => 'required',
              ]);

              $path = $request->file('blog_cover')->store('BlogNews','public');
              $login = Auth::user()->id;
              $id = BlogNews::create([
                  'blog_title' => $request['blog_title'],
                  'blog_descp' => $request['blog_descp'],
                  'blog_cover_picture' => $path,
                  'blog_cat_id' => $request['blog_cat_id'],
                  'blog_slug' => str_slug($request['blog_title'], '-'),
                  'blog_user_id' =>   $login

              ])->blog_id;

              Session::flash('mesaj', 'Yeni xəbər əlavə olundu!');
              return redirect()->route('blog-news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // DB::enableQueryLog();
        $blogEdit = BlogNews::with('blogcat')->findOrFail($id);
        // dd(DB::getQueryLog());
        $blognewsCatEdit =  BlogCategories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
        return view('admin.BlogNews.edit',compact('blogEdit','blognewsCatEdit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $this->validate($request, [
        'blog_title' => 'required',
        'blog_descp' => 'required',
        'blog_cover' =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'blog_cat_id' => 'required',


      ]);

        $blg = BlogNews::where('blog_id', $id)->first();;
      $del = public_path('uploads').'/'.$blg->blog_cover_picture;

      if ($request->file('blog_cover')) {
        $path = $request->file('blog_cover')->store('BlogNews','public');
        File::delete($del);
        $request->merge([
          'blog_cover_picture' => $path,
        ]);

      }


      $request->merge([
          'blog_slug' => str_slug($request['blog_title'])
      ]);

      $blg->fill($request->all())->save();



      Session::flash('mesaj', 'Xəbər redaktə edildi!');
      return redirect()->route('blog-news.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $blog = BlogNews::where('blog_id', $id)->first();
      $delcover = public_path('uploads').'/'.$blog->blog_cover_picture;
      File::delete($delcover);
      $blog->delete();

      Session::flash('mesaj', 'Post silindi!');
      return redirect()->route('blog-news.index');
    }
}
