<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Login with google
Route::get('/login-google', function(){
    return Socialite::with('Google')->redirect();
})->name('loginGoogle');
Route::get('/google-callback', 'Auth\SocialAuthController@loginGoogleCallback')->name('googleCallback');

// Login with facebook
Route::get('/login-facebook', function(){
    return Socialite::with('Facebook')->redirect();
})->name('loginFacebook');
Route::get('/facebook-callback', 'Auth\SocialAuthController@loginFacebookCallback')->name('facebookCallback');

// route admin
Route::group(['prefix'=>'admin'], function (){

    Route::group(['prefix'=>'category'], function (){

        Route::get('delete/{id}', 'Admin\CategoryController@deleteForm')->name('adminCategoryDeleteForm');
    });

    Route::group(['prefix'=>'product'], function (){
        Route::get('/', 'Admin\ProductController@index');
        Route::post('/create','Admin\ProductController@store')->name('adminProduct.store');
        // ajax sửa sản phẩm
        Route::get('/showEdit/{id}', 'Admin\ProductController@showEdit')->name('Admin.product.edit');
        // ajax xem chi tiết ảnh và comment
        Route::get('detail/comment/{id}', 'Admin\ProductController@getCommentImage')->name('Admin.product.detailComment');
        Route::post('/PostEdit/{id}', 'Admin\ProductController@update')->name('Admin.product.PostEdit');
        Route::post('/delete', 'Admin\ProductController@deleteForm')->name('Admin.product.delete');
        Route::get('/test', 'Admin\ProductController@test');
    });

    Route::group(['prefix'=>'image'], function(){

    });

    Route::group(['prefix'=>'brand'], function (){

    });

    Route::group(['prefix'=>'supplier'], function (){

    });
});

// Route login
Route::get('/admin', 'AdminController@index')->middleware('role:admin')->name('adminDashboard');
Route::get('/', 'HomeController@index')->name('home');
Route::get('test', 'Admin\ProductController@test');
Auth::routes();

// SPA
Route::get('/{url}', function () {
    return view('home');
})->where('url', '[A-Za-z0-9\-\.]+');