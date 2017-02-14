<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
  protected $fillable = [
      'offer_id',
      'offer_tender_id',
      'offer_by_id',
      'offer_desc',
      'offer_cost',
      'offer_delivery_datatime',
      'offer_winner',
  ];
  protected $table = "tenders_offers";
  protected $primaryKey = 'offer_id';

  public function user(){

        return $this->belongsTo(User::class, 'offer_by_id')->with('company');

  }
}
