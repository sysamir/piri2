<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Categories;
use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat =  Categories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
        return view('admin.Categories.index',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cat =  Categories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
      return view('admin.Categories.create',compact('cat'));
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

      Categories::create([
          'cat_name' => $request['cat_name'],
          'cat_slug' => str_slug($request['cat_name'], '-'),
          'cat_parent' => $request['cat_parent']
      ]);

      Session::flash('mesaj', 'Yeni kateqoriya əlavə edildi!');
      return redirect()->route('kateqoriya.index');
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
      $cat_selected = Categories::with('parent','children')->findOrFail($id);
      $cat =  Categories::with('parent','children')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();

      return view('admin.Categories.edit',compact('cat','cat_selected'));

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
        'cat_name' => 'required',
      ]);

      $cat = Categories::where('cat_id', $id)->first();
      $request->merge([ 'cat_slug' => str_slug($request['cat_name']) ]);
      $cat->fill($request->all())->save();

      Session::flash('mesaj', 'Kateqoriya redaktə edildi!');
      return redirect()->route('kateqoriya.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cat = Categories::where('cat_id', $id)->first();
      $cat_childs = Categories::where('cat_parent', $id)->get();

      if (isset($cat_childs)) {
        foreach ($cat_childs as $key) {
          $key->delete();
        }
      }
        $cat->delete();

        Session::flash('mesaj', 'Kateqoriya və alt kateqoriyaları silidi!');
        return redirect()->route('kateqoriya.index');

    }
}
