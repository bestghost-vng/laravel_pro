<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DiaDiem;
use App\Models\ThanhPho;
use App\Models\KhachSan;
use Illuminate\Http\Request;
class ThanhPhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return ThanhPho::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $request->validate([
    //         'tenvung'=>'required',
    //     ],[
    //         'tenvung'=>'không được bỏ trống',
    //     ]);
      
       
    //    $vungMien = new VungMien();
    //    $vungMien->tenvung=$request->input('tenvung');
    //    $vungMien->save();
    //    return $vungMien;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ThanhPho $thanhPho)
    {
        
     return[
        'id'=>$thanhPho->id,
        'tendiadiem'=>$thanhPho->tendiadiem,
        'vido'=>$thanhPho->vido,
        'kinhdo'=>$thanhPho->kinhdo,
        'hinhanh'=>$thanhPho->hinhanh,
        'mota'=>$thanhPho->mota,
        'trangthai'=>$thanhPho->trangthai,
        'id_diadiem'=>$thanhPho->id_diadiem,
            'khachsan'=>[$thanhPho->KhachSan],
            'quanan'=>[$thanhPho->QuanAn],
            'dichvu'=>[$thanhPho->DichVu],
         ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ThanhPho $vungMien)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThanhPho $vungMien)
    {
        $vungMien->delete();
    }
}
