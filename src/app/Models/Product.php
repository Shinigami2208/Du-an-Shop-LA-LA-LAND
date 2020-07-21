<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $fillable =[
        'name',
        'brand_id',
        'category_id',
        'description',
        'quality',
        'unit_price',
        'promotion_price'
        ];
    public function category(){
        return $this->belongsTo('app\Models\Category','category_id','id');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function images(){
        return $this->hasMany('App\Models\Image','product_id','id');
    }

    public function stock(){
        return $this->hasOne('App\Models\Stock');
    }
}
