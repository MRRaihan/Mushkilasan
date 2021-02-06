<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'image',
        'thumb_image',
        'category_mobile_icon',
        'status',
    ];
}
