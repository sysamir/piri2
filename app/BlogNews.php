<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogNews extends Model
{
  protected $fillable = [
      'blog_id',
      'blog_cat_id',
      'blog_title',
      'blog_descp',
      'blog_cover_picture',
      'blog_slug',
      'hit',
      'blog_user_id',
  ];

  protected $primaryKey = 'blog_id';
  protected $table = "blog_news";


  public function blogcat()
  {
    return $this->belongsTo(BlogCategories::class,'blog_cat_id');
  }

  public function postUser()
  {
    return $this->belongsTo(User::class,'blog_user_id');
  }



}
