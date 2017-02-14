<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompaynCategories extends Model
{
  protected $fillable = [
      'cc_id',
      'cc_cat_id',
      'cc_company_id',
  ];

  protected $primaryKey = 'cc_id';
  protected $table = 'cc_relations';
}
