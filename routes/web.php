<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\DacSanController;
use App\Http\Controllers\DiaDiemController;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\KhachSanController;
use App\Http\Controllers\QuanAnController;
use App\Http\Controllers\ThanhPhoController;
use App\Http\Controllers\UserController;
use App\Models\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login',function(){
return view('dangnhap.login');
});  
Route::get('/dasboard',[UserController::class,'dasboard'])->name('dasboard');
Route::post('dangnhap',[UserController::class,'getlogin'])->name('getlogin');
//baiviet
Route::get('/baiviet',[BaiVietController::class,'index'])->name('baiviet.show');
Route::get('/baiviet/{baiViet}',[BaiVietController::class,'show'])->name('baiviet.detail');
Route::post('/baiviet/{baiViet}/delete',[BaiVietController::class,'destroy'])->name('baiviet.destroy');
Route::get('/baiviet/{baiViet}/edit',[BaiVietController::class,'edit'])->name('baiviet.edit');
Route::put('/baiviet/{baiViet}/edit',[BaiVietController::class,'update'])->name('baiviet.update');


// dichvu
Route::get('/dichvu',[DichVuController::class,'index'])->name('dichvu.show');
Route::get('/dichvu/create',[DichVuController::class,'create'])->name('dichvu.create');
Route::post('/dichvu/create',[DichVuController::class,'store'])->name('dichvu.store');
Route::get('/dichvu/edit/{dichVu}',[DichVuController::class,'edit'])->name('dichvu.edit');
Route::put('/dichvu/edit/{dichVu}',[DichVuController::class,'update'])->name('dichvu.update');
Route::get('/dichvu/delete/{dichVu}',[BaiVietController::class,'destroy'])->name('dichvu.delete');

//quanan
Route::get('/quanan',[QuanAnController::class,'index'])->name('quanan.show');
Route::get('/quanan/create',[QuanAnController::class,'create'])->name('quanan.create');
Route::post('/quanan/create',[QuanAnController::class,'store'])->name('quanan.store');
Route::get('/quanan/edit/{quanAn}',[QuanAnController::class,'edit'])->name('quanan.edit');
Route::put('/quanan/edit/{quanAn}',[QuanAnController::class,'update'])->name('quanan.update');
Route::get('/quanan/delete/{quanAn}',[QuanAnController::class,'destroy'])->name('quanan.destroy');

//dacsan
Route::get('/dacsan',[DacSanController::class,'index'])->name('dacsan.show');
Route::get('/dacsan/create',[DacSanController::class,'create'])->name('dacsan.create');
Route::post('/dacsan/create',[DacSanController::class,'store'])->name('dacsan.store');
Route::get('/dacsan/edit/{dacSan}',[DacSanController::class,'edit'])->name('dacsan.edit');
Route::put('/dacsan/edit/{dacSan}',[DacSanController::class,'update'])->name('dacsan.update');
Route::get('/dacsan/delete/{dacsan}',[DacSanController::class,'destroy'])->name('dacsan.destroy');

//diadiem
Route::get('/diadiem/Show/{diaDiem}',[DiaDiemController::class,'show'])->name('diadiem.show');
Route::get('/diadiem',[DiaDiemController::class,'index'])->name('diadiem.index');
Route::get('/diadiem/create',[DiaDiemController::class,'create'])->name('diadiem.create');
Route::post('/diadiem/create',[DiaDiemController::class,'store'])->name('diadiem.store');
Route::get('/diadiem/edit/{diaDiem}',[DiaDiemController::class,'edit'])->name('diadiem.edit');
Route::put('/diadiem/edit/{diaDiem}',[DiaDiemController::class,'update'])->name('diadiem.update');
Route::get('/diadiem/{diaDiem}/delete',[DiaDiemController::class,'destroy'])->name('diadiem.destroy');

// khachsan
Route::get('/khachsan',[KhachSanController::class,'index'])->name('khachsan.show');
Route::get('/khachsan/create',[KhachSanController::class,'create'])->name('khachsan.create');
Route::post('/khachsan/create',[KhachSanController::class,'store'])->name('khachsan.store');
Route::get('/khachsan/edit/{khachSan}',[KhachSanController::class,'edit'])->name('khachsan.edit');
Route::put('/khachsan/edit/{khachSan}',[KhachSanController::class,'update'])->name('khachsan.update');
Route::get('/khachsan/delete/{KhachSan}',[KhachSanController::class,'destroy'])->name('khachsan.destroy');
 
//thanhpho
Route::get('/thanhpho',[ThanhPhoController::class,'index'])->name('thanhpho.show');
Route::get('/thanhpho/create',[ThanhPhoController::class,'create'])->name('thanhpho.create');
Route::post('/thanhpho/create',[ThanhPhoController::class,'store'])->name('thanhpho.store');
Route::get('/thanhpho/edit/{thanhPho}',[ThanhPhoController::class,'edit'])->name('thanhpho.edit');
Route::put('/thanhpho/edit/{thanhPho}',[ThanhPhoController::class,'update'])->name('thanhpho.update');
Route::get('/thanhpho/delete/{thanhPho}',[ThanhPhoController::class,'destroy'])->name('thanhpho.destroy');

