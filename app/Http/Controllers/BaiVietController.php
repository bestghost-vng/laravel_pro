<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use App\Http\Requests\StoreBaiVietRequest;
use App\Http\Requests\UpdateBaiVietRequest;
use App\Models\DacSan;
use App\Models\DanhSachHinhBaiViet;
use App\Models\DiaDiem;
use App\Models\DichVu;
use App\Models\HinhBaiViet;
use App\Models\KhachSan;
use App\Models\QuanAn;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
class BaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $baiViet= BaiViet::all(); 
        $hinh=HinhBaiViet::where('id','id_hinh');
        foreach($baiViet as $bt)
        {
         $qa= QuanAn::find($bt->id);
         $bt->id_quanan=$qa->tenquanan;  
         $dacsan=DacSan::find($bt->id);
         $bt->id_dacsan=$dacsan->tendacsan;
         $dichvu=DichVu::find($bt->id);
         $bt->id_dichvu=$dichvu->tendichvu;
         $diadiem=DiaDiem::find($bt->id);
         $bt->id_diadiem=$diadiem->tendiadiem;
         $user=User::find($bt->id);
         $bt->id_nguoidung=$user->name;
        }
        return view('baiviet.baiviet-them',['baiviet'=>$baiViet,'hinh'=>$hinh]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBaiVietRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBaiVietRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function show(BaiViet $baiViet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function edit(BaiViet $baiViet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBaiVietRequest  $request
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBaiVietRequest $request, BaiViet $baiViet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaiViet $baiViet)
    {
        //
    }
}
