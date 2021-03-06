<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBaiVietRequest;
use Illuminate\Support\Facades\Redirect;

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
      
        return view('baiviet.baiviet',['baiViet'=>$baiViet]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreBaiVietRequest $request)
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBaiVietRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBaiVietRequest $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function show(BaiViet $baiViet)
    {
        return view('baiviet.baiviet-detail',['baiViet'=>$baiViet,'tenquanan'=>$baiViet->QuanAn,'tendiadiem'=>$baiViet->DiaDiem,'tenkhachsan'=>$baiViet->KhachSan,'tendacsan'=>$baiViet->DacSan,'tennguoidung'=>$baiViet->User]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function edit(BaiViet $baiViet)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBaiVietRequest  $request
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaiViet $baiViet)
    {
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaiViet $baiViet)
    {
       $baiViet->delete();
        return Redirect::route('baiviet.show');
    }
}
