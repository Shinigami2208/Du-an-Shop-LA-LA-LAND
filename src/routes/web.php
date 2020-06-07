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
    // danh muc
    Route::group(['prefix'=>'category'], function (){

        Route::get('/', 'Admin\CategoryController@index')->name('Admin.Category.index');

        Route::post('/create', 'Admin\CategoryController@store')->name('Admin.Category.store');

        Route::get('/edit/{id}', 'Admin\CategoryController@edit')->name('Admin.Category.Edit');

        Route::post('/update/{id}', 'Admin\CategoryController@update')->name('Admin.Category.Update');

        Route::get('/delete/{id}', 'Admin\CategoryController@deleteForm')->name('Admin.Category.Delete');

        Route::post('/destroy/{id}', 'Admin\CategoryController@destroy')->name('Admin.Category.Destroy');
        Route::get('/detail/{id}', 'Admin\CategoryController@detail')->name('Admin.Category.Detail');
    });
    // san pham
    Route::group(['prefix'=>'product'], function (){
        Route::get('/', 'Admin\ProductController@index');

        Route::post('/create','Admin\ProductController@store')->name('adminProduct.store');
        // ajax sửa sản phẩm
        Route::get('/showEdit/{id}', 'Admin\ProductController@showEdit')->name('Admin.product.edit');
        // ajax xem chi tiết ảnh và comment
        Route::get('detail/{id}', 'Admin\ProductController@getCommentImage')->name('Admin.product.detailComment');

        Route::post('/dostEdit/{id}', 'Admin\ProductController@update')->name('Admin.product.PostEdit');

        Route::post('/delete', 'Admin\ProductController@deleteForm')->name('Admin.product.delete');
        // them hinh anh cho san pham
        Route::post('/add/image/{id}', 'Admin\ProductController@addImage')->name('Admin.product.addimage');

    });
    //hinh anh
    Route::group(['prefix'=>'image'], function(){

    });
    // nhan hang
    Route::group(['prefix'=>'brand'], function (){

    });
    // nha cung cap
    Route::group(['prefix'=>'supplier'], function (){
        Route::get('/', 'Admin\SupplierController@index')->name('Admin.supplier.index');

        Route::post('/create', 'Admin\SupplierController@store')->name('Admin.supplier.store');
        // sua nha cung cap
        Route::get('/edit/{id}', 'Admin\SupplierController@edit')->name('Admin.supplier.edit');

        Route::post('/update/{id}', 'Admin\SupplierController@update')->name('Admin.supplier.update');
    });
});

// Route login
Route::get('/admin', 'AdminController@index')->middleware('role:admin')->name('adminDashboard');
Route::get('/', 'HomeController@index')->name('home');
Route::get('test', 'Admin\ProductController@test');
Auth::routes();
