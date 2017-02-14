<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Tender extends Model
{
  
  protected $fillable = [
      'tender_id',
      'tender_name',
      'tender_slug',
      'tender_desc',
      'tender_image',
      'tender_status',
      'tender_address',
      'tender_mail',
      'tender_phone',
      'tender_cost_value',
      'tender_cost_currency',
      'tender_private',
      'tender_category_id',
      'tender_created_by_id',
      'tender_deadline',
  ];
      protected $primaryKey = 'tender_id';


      public function category(){

            return $this->belongsTo('App\Categories', 'tender_category_id','cat_id');

      }

      public function username(){

            return $this->belongsTo(User::class, 'tender_created_by_id');

      }

      public function person(){

            return $this->belongsTo(Persons::class, 'tender_created_by_id');

      }

      public function company(){

            return $this->belongsTo(Companies::class, 'tender_created_by_id');

      }

      public function offers(){

            return $this->hasMany(Offers::class, 'offer_tender_id','tender_id')->with('user');

      }

      public function companies(){
            return $this->hasMany(TenderCompanies::class, 'tc_tender_id','tender_id');
      }

}
