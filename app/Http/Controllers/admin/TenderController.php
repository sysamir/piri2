<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
use App\Tender;
use Illuminate\Support\Facades\Input;
use Session;
use File;


class TenderController extends Controller
{
   public function index(){

     $tender = Tender::with('category','username','person','company')->orderBy('tender_id','DESC')->get();


     return view('admin.Tender.index',compact('tender'));

   }

   public function destroy(){

    $delid =  Input::get('delid');

    $tenderDelete = Tender::findOrFail($delid);

    $tenderDelete->delete();

      Session::flash('mesaj', 'Tender silindi!');
      return redirect()->route('tenders');


   }


   public function edit($id){
      $tenderEdit = Tender::with('category','username','person','company')->findOrFail($id);
      $tenderCATE = Categories::with('parent','children')->whereNull('cat_parent')->get();
      return view('admin.Tender.edit',compact('tenderEdit','tenderCATE'));

   }

   public function update(Request $request, $id){

     $this->validate($request, [
       'tender_name' => 'required',
       'tender_desc' => 'required',
       'tender_address' => 'required',
       'tender_cost_value' => 'required',
       'tender_mail' => 'required',
       'tender_deadline' => 'required',

     ]);


     $tender = Tender::find($id);
     $del = public_path('uploads').'/images/'.$tender->tender_image;
     if ($request->file('image')) {
       $path = $request->file('image')->store('TenderImage','public');
       File::delete($del);
       $request->merge([
         'tender_image' => $path,
       ]);

     }

     $tender->fill($request->all())->save();

       return redirect()->route('tenders');

   }






}
