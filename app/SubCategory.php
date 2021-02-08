<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'category_id',
        'subcategory_name',
        'subcategory_image',
        'status',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
