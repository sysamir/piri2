<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
use App\Tender;
use Illuminate\Support\Facades\Input;
use Session;

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
}
