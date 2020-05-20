<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'brand_id',
        'supplier_id',
        'promotion_price',
        'description',
        'detail_description',
        'status',
        'unit_price'
    ];
    public function categories(){
        return $this->belongsToMany('App\Models\Category', 'category_product');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function images(){
        return $this->hasMany('App\Models\Image');
    }

    public function stock(){
        return $this->hasOne('App\Models\Stock');
    }
}
