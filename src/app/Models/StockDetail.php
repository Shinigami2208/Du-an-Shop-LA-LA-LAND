<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockDetail extends Model
{
    //
    public function stock() {
        return $this->belongsTo('App\Models\Stock');
    }
}
