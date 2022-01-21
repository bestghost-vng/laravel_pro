<?php

use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\DacSanController;
use App\Http\Controllers\QuanAnController;
use App\Http\Controllers\UserController;
use App\Models\View;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('DacSan', DacSanController::class);
Route::get('/login',function(){
return view('dangnhap/login');
});  
Route::post('dangnhap',[UserController::class,'getlogin']);
// Route::get('/dacsan',[UserController::class,'dasboard'])->name('dasboard');

Route::get('/',[DacSanController::class,'index'])->name('loaddacsan');
Route::get('/baiviet',[BaiVietController::class,'index'])->name('baiviet.show');
Route::get('/quanan',[QuanAnController::class,'index'])->name('quanan.show');


Route::get('/suabaiviet',function(){
    return view('baiviet.baiviet');
});