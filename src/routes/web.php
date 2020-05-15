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

// Admin Category
Route::resource('/admin/category', 'Admin\CategoryController', ['names' => 'adminCategory'])->middleware('role:admin');
Route::get('/admin/category/delete/{id}', 'Admin\CategoryController@deleteForm')->name('adminCategoryDeleteForm');

// Admin Product
Route::resource('/admin/product', 'Admin\ProductController', ['names' => 'adminProduct'])->middleware('role:admin');
Route::get('/admin/product/delete/{id}', 'Admin\ProductController@deleteForm')->name('adminProductDeleteForm');

// Admin Image
Route::resource('/admin/image', 'Admin\ImageController', ['names' => 'adminImage'])->middleware('role:admin');

// Admin Brand
Route::resource('/admin/brand', 'Admin\BrandController', ['names' => 'adminBrand'])->middleware('role:admin');

// Admin Supplier
Route::resource('/admin/supplier', 'Admin\SupplierController', ['names' => 'adminSupplier'])->middleware('role:admin');

// Route role navigator
Route::get('/admin', 'AdminController@index')->middleware('role:admin')->name('adminDashboard');
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();



Route::get('/{url}', function () {
    return view('home');
})->where('url', '[A-Za-z0-9\-]+');
