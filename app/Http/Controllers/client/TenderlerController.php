<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tender;
use App\Offers;
use Auth;
use Session;

use App\Notifications\OffersN;
use App\Notifications\OfferAccepted;

class TenderlerController extends Controller
{
    public function tenders(){

      $tender = Tender::with('category','username','person','company')->orderBy('tender_id','DESC')->get();
      $tenderAktiv = Tender::with('category','username','person','company')->where('tender_status',1)->paginate(10);



      return view('client.tender.tenderler',compact('tender','tenderAktiv'));

    }

    public function tenderSlug($id){

    $Slug = Tender::with('category','username','person','company','offers')->where('tender_status',1)->findOrFail($id);
    return view('client.tender.tenderslug',compact('Slug'));

    }

    public function createOffer(Request $request)
    {
      $id = Auth::user()->id;
      $this->validate($request, [
        'sum' => 'required',
        'desc' => 'required',
        'date' => 'required',
        'tender' => 'required',
      ]);
      $of = Offers::where('offer_tender_id',$request['tender'])->where('offer_by_id',$id)->get();
      if (count($of) == 0) {
        $lastoffer = Offers::create([
            'offer_cost' => $request['sum'],
            'offer_desc' => $request['desc'],
            'offer_delivery_datatime' => $request['date'],
            'offer_tender_id' => $request['tender'],
            'offer_winner' => '0',
            'offer_by_id' => $id
        ]);
        $ten = Tender::findOrFail($request['tender']);
        $ten->username->notify(new OffersN($lastoffer,$ten));
        Session::flash('mesaj', 'Təklifiniz göndərildi!');
        return back();
      }else {
        Session::flash('mesaj', 'Bir tenderə 1 dəfədən artıq təklif verə bilməzsiniz!');
        return back();
      }
    }

    public function offerWinner($tender, $teklif)
    {
      $t = Tender::findOrFail($tender);
      $o = Offers::where('offer_tender_id', $tender)->where('offer_winner', '1')->get();
      if (count($o) > 0) {
        Session::flash('mesaj', 'Bir tenderə 1 dəfədən artıq təklif seçə bilməzsiniz!');
        return back();
      }else{
        if ($t->tender_created_by_id == auth()->user()->id) {
          $tek = Offers::findOrFail($teklif);
          $tek->offer_winner = '1';
          $tek->save();
          $tek->user->notify(new OfferAccepted($t));
          Session::flash('mesaj', 'Təklif qəbul edildi!');
          return back();
        }else {
          return back();
        }
      }

    }

    public function search(){



      }

}
