<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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



      // public function category(){
      //
      //       return $this->hasMany(Categories::class, 'tender_category_id');
      //
      // }


}
