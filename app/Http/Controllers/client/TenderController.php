<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
use App\Tender;

use Auth;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.tender.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category = Categories::with('children','parent')->whereNull('cat_parent')->orderBy('cat_id','desc')->get();
      return view('client.tender.create',compact('category'));
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
      'tender_name' => 'required',
       'tender_desc' => 'required',
      'tender_address' => 'required',
       'tender_mail' => 'required',
      'tender_phone' => 'required',
      'tender_cost_value' => 'required',
        'tender_cost_currency' => 'required',
      'tender_deadline' => 'required',
        'tender_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'tender_category_id' => 'required',
      ]);


      if($request['tender_private'] == 1){

          $private = 1;

      }else{

        $private = 0;

      }


      $path = $request->file('tender_image')->store('Tender','public');
      $user = Auth::guard()->user()->id;
      Tender::create([
          'tender_name' => $request['tender_name'],
          'tender_desc' => $request['tender_desc'],
          'tender_address' => $request['tender_address'],
          'tender_image' => $path,
          'tender_category_id' => $request['tender_category_id'],
          'tender_slug' => str_slug($request['tender_name'], '-'),
          'tender_phone' => $request['tender_phone'],
          'tender_mail' => $request['tender_mail'],
          'tender_cost_value' => $request['tender_cost_value'],
          'tender_cost_currency' => $request['tender_cost_currency'],
          'tender_deadline' => $request['tender_deadline'],
          'tender_private' => $private,
          'tender_created_by_id' => $user,
      ]);


      return redirect()->to('/profile');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
