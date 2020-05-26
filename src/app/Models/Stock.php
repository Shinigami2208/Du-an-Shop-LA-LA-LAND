<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    protected $table = 'stocks';
    protected $fillable = ['product_id','supplier_id','quality','payment'];
}
