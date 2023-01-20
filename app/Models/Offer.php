<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    public $timestamps = false;
    protected $fillable = [
        'name', 'description', 'image_path'
    ];  

    /**
     * @example
     * This method related to parent table in the db
     */ 
    public function product(){
        return $this->belongsTo(Product::class, 'id_product');
    }
}
