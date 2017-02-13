<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompaynCategories extends Model
{
  protected $fillable = [
      'c_id', 'c_name', 'c_logo_image','c_desc','c_voen',
      'c_number',
      'c_official_mail',
      'c_confirmed',
      'c_user_id',
  ];

  protected $primaryKey = 'c_id';
  protected $table = 'cc_relations';
}
