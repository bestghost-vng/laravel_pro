<?php

use App\Http\Controllers\Api\BaiVietApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VungMienController;
use Illuminate\Support\Facades\URL;


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

Route::get('/vungmien',[VungMienController::class,'index'])->name('vungmien.index');
Route::get('/baiviet',[BaiVietApiController::class,'index'])->name('baiviet.index');

// Route::put(<products/{product}<, <Api\ProductController@update<)->name(<products.update<);

// Route::patch(<products/{product}<, <Api\ProductController@update<)->name(<products.update<);

// Route::delete(<products/{product}<, <Api\ProductController@destroy<)->name(<products.destroy<);

