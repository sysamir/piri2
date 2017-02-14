<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenderCompanies extends Model
{
  protected $fillable = [
      'tc_id',
      'tc_tender_id',
      'tc_company_id',
  ];
  protected $table = "tc_relations";
  protected $primaryKey = 'tc_id';
}
