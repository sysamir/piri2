<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tender;

class TenderlerController extends Controller
{
    public function tenders(){

      $tender = Tender::with('category','username','person','company')->orderBy('tender_id','DESC')->get();
      $tenderAktiv = Tender::with('category','username','person','company')->where('tender_status',1)->paginate(10);



      return view('client.tender.tenderler',compact('tender','tenderAktiv'));

    }

    public function tenderSlug($id){

    $Slug = Tender::with('category','username','person','company')->where('tender_status',1)->findOrFail($id);
      return view('client.tender.tenderslug',compact('Slug'));

    }

    public function search(){



      }

}
