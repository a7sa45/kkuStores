<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/stores', [App\Http\Controllers\HomeController::class, 'allstores'])->name('allstores');
Route::get('/products', [App\Http\Controllers\HomeController::class, 'allproducts'])->name('allproducts');


//Store url
Route::controller(StoreController::class)->group(function () {
    Route::get('/store/{url}', 'show');
    //create a stor
    Route::get('/createstore', 'create')->name('create-store');
    Route::post('/create-store', 'store')->name('save-store');
    //edit & update store
    Route::get('/storeedit', 'edit');
    Route::put('/update-store', 'update')->name('update-store');
    //dashboard
    Route::get('/dashboard', 'dashboard_index')->name('dashboard');
    Route::get('/dashboard/products', 'dashboard_products')->name('dashboard_products');
});

//Product url
Route::controller(ProductController::class)->group(function () {
    //create a Product
    Route::get('/dashboard/createproduct', 'create')->name('create-product');
    Route::post('/create-product', 'store')->name('save-product');
    //update a Product
    Route::get('/store/{url}/{product_id}', 'show')->name('show-product');
    Route::get('/dashboard/product/{product_id}/edit', 'edit')->name('edit-product');
    Route::put('/update-product', 'update')->name('update-product');
    Route::delete('/delete-product', 'destroy')->name('delete-product');
});


//Cart urls
Route::controller(CartController::class)->group(function () {
    Route::post('cart', 'addToCart')->name('cart.store');
    Route::post('update-cart', 'updateCart')->name('cart.update');
    Route::post('remove', 'removeCart')->name('cart.remove');
    Route::post('clear', 'clearAllCart')->name('cart.clear');
});

