<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $fillable = [
      'cat_id', 'cat_name', 'cat_slug','cat_parent',
  ];
}
