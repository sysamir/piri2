<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $fillable = [
      'cat_id', 'cat_name', 'cat_slug','cat_parent',
  ];

  protected $primaryKey = 'cat_id';

  public function parent()
   {
       return $this->belongsTo(Categories::class, 'cat_parent');
   }


   public function children()
   {
       return $this->hasMany(Categories::class, 'cat_parent');
   }


}
