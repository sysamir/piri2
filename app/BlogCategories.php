<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
  protected $fillable = [
      'cat_id',
      'cat_name',
      'cat_slug',
      'cat_parent',
  ];

  protected $primaryKey = 'cat_id';

  public function parent()
   {
       return $this->belongsTo(BlogCategories::class, 'cat_parent');
   }


   public function children()
   {
       return $this->hasMany(BlogCategories::class, 'cat_parent');
   }

   public function news()
    {
        $categoryIds = array_merge([$this->cat_id], $this->subcategoryIds());
        // Find all products that match the retrieved category IDs
        return $categoryIds;
    }

    protected function subcategoryIds($id = null, &$ids= [])
    {
        if (is_null($id)) {
            $id = $this->cat_id;
        }

        $categoryIds = $this->query()->where('cat_parent', $id)->pluck('cat_id');

        foreach ($categoryIds as $categoryId) {
            $ids[] = $categoryId;
            $ids += $this->subcategoryIds($categoryId, $ids);
        }

        return $ids;

    }


}
