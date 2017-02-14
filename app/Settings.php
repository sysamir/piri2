<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
  protected $fillable = [
      'title',
      'desc',
      'keywords',
      'email',
      'tel',
      'tel2',
      'facebook',
      'twitter',
      'instagram',
      'address',
  ];
}
