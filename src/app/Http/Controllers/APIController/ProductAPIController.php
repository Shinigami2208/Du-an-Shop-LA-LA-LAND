<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cache;

class ProductAPIController extends Controller
{
    //
    public function newProduct(Request $request){
        $newProducts = Cache::remember('new-products', 600, function(){
            return Product::orderBy('updated_at', 'desc')->limit(10) -> get();
        });

        return response()->json($newProducts);
    }
}
