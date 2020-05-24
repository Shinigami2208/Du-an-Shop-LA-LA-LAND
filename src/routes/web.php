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
        Route::resource('/', 'Admin\CategoryController', ['names'=> 'adminCategory']);
        Route::get('delete/{id}', 'Admin\CategoryController@deleteForm')->name('adminCategoryDeleteForm');
    });

    Route::group(['prefix'=>'product'], function (){
        Route::get('/', 'Admin\ProductController@index');
        Route::get('/create','Admin\ProductController@store')->name('adminProduct.store');
        Route::get('/showEdit/{id}', 'Admin\ProductController@showEdit')->name('Admin.Product.edit');
        Route::post('/PostEdit/{id}', 'Admin\ProductController@update')->name('Admin.Product.PostEdit');
        Route::get('/delete/{id}', 'Admin\ProductController@deleteForm')->name('adminProductDeleteForm');
    });

    Route::group(['prefix'=>'image'], function(){
        Route::resource('/', 'Admin\ImageController', ['names' => 'adminImage']);
    });

    Route::group(['prefix'=>'brand'], function (){
        Route::resource('/', 'Admin\BrandController', ['names' => 'adminBrand']);
    });

    Route::group(['prefix'=>'supplier'], function (){
        Route::resource('/', 'Admin\SupplierController', ['names' => 'adminSupplier']);
    });
});

// Route login
Route::get('/admin', 'AdminController@index')->middleware('role:admin')->name('adminDashboard');
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();