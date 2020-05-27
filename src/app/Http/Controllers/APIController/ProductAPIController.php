<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\APIController\Reponse;
use Cache;

class ProductAPIController extends Controller
{
    //
    public function newProduct(Request $request){
        $newProducts = Cache::remember('new-products', 300, function(){
            return Product::orderBy('updated_at', 'desc')->limit(2) -> get();
        });

        return response()->json($newProducts);
    }
    /* API lay san pham khuyen mai */
    public function getPromotion(){
        $promotion = Product::where('promotion_price','>',0)->take(6)->get();
        if($promotion->isEmpty()){
            header('Content-Type: application/json');
            $reponse = Reponse::$errors;
            $reponse['message'] = 'Hien tai san pham da het hang';
            return  json_encode($reponse);
        }else{
           $reponse = Reponse::$succes;
           $reponse['data'] = $promotion;
           return json_encode($reponse);
        }
    }
    /* lay san pham ban chay nhat */
    public function getHotProduct(){
        $product = Product::withCount('stock')->where('stock_count', 'desc')->take(6)->get();
    }
    /* lay chi tiet san pham */
    public function getDetail(Request $request){
        try {
            $product = Product::where('id', $request->code)->first();
            $reponse = Reponse::$succes;
            $reponse['data'] = $product;
            $reponse['image'] = $product->images;
            header('Content-type:application/json');
            return json_encode($reponse);
        }catch (\Exception $exception){
            $reponse = Reponse::$errors;
            $reponse['message'] = 'loi he thong';
            header('Content-type:application/json');
            return json_encode($reponse);
        }
    }

}
