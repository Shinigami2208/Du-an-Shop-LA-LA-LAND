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
Route::get('getPromotionProduct', 'APIController\ProductAPIController@getPromotion');
Route::get('getProduct-hot', 'APIController\ProductAPIController@getHotProduct');
Route::post('detail-product', 'APIController\ProductAPIController@getDetail');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
