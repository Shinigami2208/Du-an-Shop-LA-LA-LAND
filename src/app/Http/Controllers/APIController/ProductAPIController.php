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
    public function detailProduct(Request $request){
        try {
            header('Content-Type:application/json');
            $product = Product::find($request->code);
            $data = [
                'name' => $product->name,
                'unit_price' => $product->unit_price,
                'promotion_price' => $product->promotion_price,
                'description' => $product->description
            ];
            for($i = 0; $i < 10; $i++){
                $datai[]=[
                  'data'=> $i
                ];
            }
            $reponse = Reponse::$succes;
            $reponse['data'] = $data;
            $reponse['images'] = $product->images;
            $reponse['comments'] = $product->comments;
            return json_encode($reponse);
        }catch (\Exception $err){
            header('Content-Type:application/json');
            $reponse = Reponse::$errors;
            $reponse['messeger'] = "loi he thong";
        }
    }

    // tim kiem san pham
    public  function searchProduct(Request $request){
        $name = $request->name;
        $products = Product::where('name','like',"%$name")-get();
        if($products){
            header('Content-Type: application/json');
            $reponse = Reponse::$succes;
            foreach($products as $product){
                $data[] =[
                  'id' => $product->id,
                  'name' => $product->name,
                  'unit_price' => $product->unit_price,
                  'promotion_price' => $product->promotion_price,
                  'name_category' => $product->category->name,
                  'description' => $product->description
                ];
            }
            $reponse['data'] = $data;
            return json_encode($reponse);
        }else{
            header('Content-type:application');
            $reponse = Reponse::$errors;
            $reponse['messenger'] = 'loi he thong';
            return json_encode($reponse);
        }
    }

}
