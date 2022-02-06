<?php

use App\Http\Controllers\Api\BaiVietApiController;
use App\Http\Controllers\Api\DacSAnController;
use App\Http\Controllers\Api\DiaDiemController;
use App\Http\Controllers\Api\DichVuController;
use App\Http\Controllers\Api\KhachSanController;
use App\Http\Controllers\Api\QuanAnController;
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

Route::get('/quanan',[QuanAnController::class,'index'])->name('quanan.index');
Route::get('/khachsan',[KhachSanController::class,'index'])->name('quanan.index');
Route::get('/dichvu',[DichVuController::class,'index'])->name('quanan.index');
Route::get('/dacsan',[DacSAnController::class,'index'])->name('quanan.index');
Route::get('/diadiem',[DiaDiemController::class,'index'])->name('diadiem.index');
Route::get('/diadiem/show/{diaDiem}',[DiaDiemController::class,'show'])->name('diadiem.show');
Route::get('/baiviet',[BaiVietApiController::class,'index'])->name('baiviet.index');

// Route::put(<products/{product}<, <Api\ProductController@update<)->name(<products.update<);

// Route::patch(<products/{product}<, <Api\ProductController@update<)->name(<products.update<);

// Route::delete(<products/{product}<, <Api\ProductController@destroy<)->name(<products.destroy<);

