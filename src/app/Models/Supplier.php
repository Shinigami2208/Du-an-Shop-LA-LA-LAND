<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $fillable = ['name','address','phone','email'];

    public function products(){
        return $this->hasMany('App\Models\Product','supplier_id','id');
    }
}
