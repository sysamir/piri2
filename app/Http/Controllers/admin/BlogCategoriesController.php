<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BlogCategories;
use Session;

class BlogCategoriesController extends Controller
{

    public function index()
    {
        $cat =  BlogCategories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
        return view('admin.BlogCategories.index',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cat =  BlogCategories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
      return view('admin.BlogCategories.create',compact('cat'));
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
        'cat_name' => 'required'
      ]);

      BlogCategories::create([
          'cat_name' => $request['cat_name'],
          'cat_slug' => str_slug($request['cat_name'], '-'),
          'cat_parent' => $request['cat_parent']
      ]);

      Session::flash('mesaj', 'Yeni kateqoriya əlavə edildi!');
      return redirect()->route('blog-categories.index');
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
      $cat_selected = BlogCategories::with('parent','children')->findOrFail($id);
      $cat =  BlogCategories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();

      return view('admin.BlogCategories.edit',compact('cat','cat_selected'));

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
        'cat_name' => 'required'
      ]);

      $cat = BlogCategories::where('cat_id', $id)->first();
      $request->merge([
        'cat_slug' => str_slug($request['cat_name'])
      ]);
      $cat->fill($request->all())->save();

      Session::flash('mesaj', 'Kateqoriya məlumatları yeniləndi!');
      return redirect()->route('blog-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cat = BlogCategories::where('cat_id', $id)->first();
      $cat_childs = BlogCategories::where('cat_parent', $id)->get();

      if (isset($cat_childs)) {
        foreach ($cat_childs as $key) {
          $key->delete();
        }
      }
        $cat->delete();

        Session::flash('mesaj', 'Kateqoriya (alt kateqoriya) silindi!');
        return redirect()->route('blog-categories.index');

    }
}
