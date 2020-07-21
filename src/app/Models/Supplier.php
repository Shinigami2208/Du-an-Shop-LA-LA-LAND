<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $fillable = ['name','address','phone','email'];

    public function products(){
        return $this->hasManyThrough('App\Models\Product','App\models\Stock');
    }
}
