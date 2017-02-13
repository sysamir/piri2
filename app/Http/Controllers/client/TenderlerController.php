<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tender;
use App\Categories;
use Illuminate\Support\Facades\Input;

class TenderlerController extends Controller
{
    public function tenders(){

      $tender = Tender::with('category','username','person','company')->orderBy('tender_id','DESC')->get();
      $tenderAktiv = Tender::with('category','username','person','company')->where('tender_status',1)->paginate(10);
        $tenderCATE = Categories::with('parent','children')->whereNull('cat_parent')->get();


      return view('client.tender.tenderler',compact('tender','tenderAktiv','tenderCATE'));

    }

    public function tenderSlug($id){

        $Slug = Tender::with('category','username','person','company')->where('tender_status',1)->findOrFail($id);
        $tenderCATE = Categories::with('parent','children')->whereNull('cat_parent')->get();
        return view('client.tender.tenderslug',compact('Slug','tenderCATE'));

    }

    public function search(){

        $cate  = Input::get('searchBy');
        $qiymet = Input::get('qiymet');
        $valyuta = Input::get('valyuta');
          $min = Input::get('min');
          $maks = Input::get('maks');


        $vaxt = Input::get('vaxt');
            if($cate){
            $cat = Tender::where('tender_category_id', 'LIKE', "%$cate%")
            ->where('tender_status',1)->get();
            }

            if($qiymet){
            $cat = Tender::where('tender_cost_value', 'LIKE', "%$qiymet%")
            ->where('tender_cost_currency', $valyuta)
            ->where('tender_status',1)->get();
            }

            if($vaxt){
            $cat = Tender::where('created_at', 'LIKE', "%$vaxt%")
            ->where('tender_status',1)->get();

            }

            if($min){
              $cat = Tender::where(function ($query) use ($min,$maks) {
                    $query->where('tender_cost_value', '>', $min);
                    $query->where('tender_cost_value', '<', $maks);
                })->where('tender_status',1)->get();

            }




  $tenderCATE = Categories::with('parent','children')->whereNull('cat_parent')->get();



            return view('client.tender.search',compact('cat','tenderCATE'));
      }

}
