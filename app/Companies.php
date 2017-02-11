<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
  protected $fillable = [
      'c_id', 'c_name', 'c_logo_image','c_desc','c_voen',
      'c_number',
      'c_official_mail',
      'c_confirmed',
      'c_user_id',
  ];

  protected $primaryKey = 'c_id';

  public function categories(){
    return $this->belongsToMany('App\Categories', 'cc_relations', 'cc_company_id', 'cc_cat_id');
  }

}
