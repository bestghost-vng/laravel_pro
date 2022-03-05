<?php

use App\Http\Controllers\Api\BaiVietApiController;
use App\Http\Controllers\Api\DacSAnController;
use App\Http\Controllers\Api\DiaDiemController;
use App\Http\Controllers\Api\DichVuController;
use App\Http\Controllers\Api\KhachSanController;
use App\Http\Controllers\Api\LikeApiController;
use App\Http\Controllers\Api\QuanAnController;
use App\Http\Controllers\Api\ThanhPhoController;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VungMienController;
use App\Http\Controllers\DisklikeController;
use App\Http\Controllers\ViewController;
use App\Models\BaiViet;
use App\Models\Disklike;
use App\Models\ThanhPho;
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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class,'login']);
    Route::post('signup', [AuthController::class,'signup']);
   
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::delete('logout', [AuthController::class,'logout']);
        Route::get('user', [AuthController::class,'user']);
    });
});
Route::apiResource('vungmien','Api\VungMienController');
// Route::apiResource('baiviet','Api\BaiVietApiController');
Route::get('/baiviet',[BaiVietApiController::class,'index']);
Route::get('/baiviet/show/{baiViet}',[BaiVietApiController::class,'show']); 

Route::match(['put', 'patch'], 'baiviet/{baiViet}', [BaiVietApiController::class, 'update'])->name('baiviet.update');
// Route::get('baiviet/{baiViet}', [BaiVietApiController::class, 'destroy'])->name('baiviet.destroy');
Route::apiResource('quanan','Api\QuanAnController');
Route::apiResource('khachsan','Api\KhachSanController');
// Route::apiResource('thanhpho','Api\ThanhPhoController');
Route::get('/thanhpho/show/{thanhPho}',[ThanhPhoController::class,'show'])->name('thanhpho.show');
Route::get('/dichvu',[DichVuController::class,'index']);
Route::apiResource('dacsan','Api\DacSanController');
// Route::apiResource('diadiem','Api\DiaDiemController');
Route::get('/diadiem',[DiaDiemController::class,'index'])->name('diadiem.index');
Route::get('/diadiem/show/{diaDiem}',[DiaDiemController::class,'show'])->name('diadiem.show');
Route::apiResource('user','Api\UserApiController');
Route::get('user/show/{user}',[UserApiController::class,'show']);
Route::apiResource('thanhpho','Api\ThanhPhoController');

Route::get('/like',[LikeApiController::class,'index']);
Route::post('/like/update',[LikeApiController::class,'update']);
Route::post('/dislike',[DisklikeController::class,'store']);
Route::post('view',[ViewController::class,'store']);
