<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSubImage extends Model
{
    protected $table = 'product_sub_images';
    public $timestamps = false;
    protected $fillable = [
        'id_product', 'description', 'image_path'
    ];
}
