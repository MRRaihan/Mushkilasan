<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'category_image',
        'thumb_image',
        'category_mobile_icon',
        'status',
    ];
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
