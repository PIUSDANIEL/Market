<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productname',
        'price',
        'listprice',
        'shopname',
        'singlesize',
        'size',
        'colour',
        'brand',
        'quantity',
        'description',
        'search',
        'flash_sale',
        'featured',
        'main_image',
        'images',
        'uploader',
        'condition',
        'categories',
        'sub_categories',
        'specification',
        'percentage',
    ];

}
