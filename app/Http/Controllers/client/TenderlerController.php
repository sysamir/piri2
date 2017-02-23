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

use App\Categories;
use App\Companies;
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
        $userid = Auth::user()->id;

        if (Auth::user()->user_role == 1) {
          $cmmp = Auth::user()->company->c_id;
        }else {
          if ($userid !== Tender::find($id)->tender_created_by_id) {
            Session::flash('mesaj', 'Tenderdə ancaq şirkətlər iştirak edə bilər.');
            return back();
          }

        }

        $t = Tender::with('category','username','person','company','companies')->where('tender_status',1)->where('tender_id',$id)->first();
        if($t->tender_private == '1'){
          if($t->companies->where('tc_tender_id',$id)->first()->tc_company_id == $cmmp){
            $Slug = $t->first();
          }else {
            Session::flash('mesaj', 'Bu tenderə baxmaq hüququnuz yoxdur! Sadəcə dəvət alan şirkətlər iştirak edə bilər.');
            return back();
          }

        }else {
          $Slug = $t->first();
        }
        $tenderCATE = Categories::with('parent','children')->whereNull('cat_parent')->get();
        $winner = Offers::where('offer_by_id',$userid)->where('offer_tender_id',$id)->where('offer_winner','1')->get();
        return view('client.tender.tenderslug',compact('Slug','tenderCATE','winner'));
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
