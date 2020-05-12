<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    public function product(){
        return $this->hasOne('App\Models\Product');
    }

    public function stock_details(){
        return $this->hasMany('App\Models\StockDetail');
    }
}
