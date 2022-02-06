<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DiaDiemResources;
use App\Models\DiaDiem;
use App\Models\QuanAn;
use Illuminate\Http\Request;

class DiaDiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DiaDiem::all();
        return $products;                                                                   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DiaDiem $diaDiem)
    {
        $diaDiem->QuanAn=QuanAn::where('id_diadiem','=',$diaDiem->id)->get();
        return ['diadiem'=>[
           'dichvu'=> $diaDiem->DichVu->tendichvu,
           'khachsan'=> $diaDiem->KhachSan->tenkhachsan,
           'quanan'=> $diaDiem->QuanAn]];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
