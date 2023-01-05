<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

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


//Store url
Route::controller(StoreController::class)->group(function () {
    Route::get('/store/{url}', 'show');
    //create a stor
    Route::get('/createstore', 'create')->name('create-store');
    Route::post('/create-store', 'store')->name('save-store');
    //edit & update store
    Route::get('/storeedit', 'edit');
    Route::put('/update-store', 'update')->name('update-store');
    //dashbord
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});
