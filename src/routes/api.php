<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/new-product', 'APIController\ProductAPIController@newProduct');
// lay san pham khuyen mai
Route::get('getPromotionProduct', 'APIController\ProductAPIController@getPromotion');
// lay san pham ban nhieu nhat
Route::get('getProduct-hot', 'APIController\ProductAPIController@getHotProduct');
// tim kiem san pham
Route::post('search-product', 'APIPController\ProductAPIController@searchProduct');
// lay chi tiet san pham
Route::post('detail-product', 'APIController\ProductAPIController@detailProduct');
//lay tat ca cac danh muc san pham
Route::get('get-category', 'APIController\CategoryController@getCategory');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
