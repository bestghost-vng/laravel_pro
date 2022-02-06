<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\DiaDiem;
use App\Models\DichVu;
use App\Models\KhachSan;
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
        $diaDiem= DiaDiem::all(); 
        return view('diadiem.diadiem',['diaDiem'=>$diaDiem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diadiem.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiaDiemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diaDiem= new DiaDiem;
        $diaDiem->fill(
                [
                    'tendiadiem'=>$request->input('tendiadiem'),
                    'mieuta'=>$request->input('mieuta'),
                    'kinhdo'=>$request->input('kinhdo'),
                    'vido'=>$request->input('vido'),
                    'quanan_id'=>$request->input('iddacsan'),
                    'dichvu_id'=>$request->input('iddichvu'),
                    'khachsan_id'=>$request->input('idkhachsan'),
                    'trangthai'=>$request->input('trangthai'),
                ]
                );
             $diaDiem->save();
             return Redirect::route('diadiem.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiaDiem  $diaDiem
     * @return \Illuminate\Http\Response
     */
    public function show(DiaDiem $diaDiem)
    {
        return view('diadiem.show_id',['diaDiem'=>$diaDiem,'dichvu'=>$diaDiem->DichVu,'khachsan'=>$diaDiem->KhachSan,'quanan'=>$diaDiem->QuanAn]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiaDiem  $diaDiem
     * @return \Illuminate\Http\Response
     */
    public function edit(DiaDiem $diaDiem)
    {
        return view('diadiem.sua',['diaDiem'=>$diaDiem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiaDiemRequest  $request
     * @param  \App\Models\DiaDiem  $diaDiem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiaDiem $diaDiem)
    {
        $diaDiem->fill(
            [
                'tendiadiem'=>$request->input('tendiadiem'),
                'mieuta'=>$request->input('mieuta'),
                'kinhdo'=>$request->input('kinhdo'),
                'vido'=>$request->input('vido'),
                'quanan_id'=>$request->input('iddacsan'),
                'dichvu_id'=>$request->input('iddichvu'),
                'khachsan_id'=>$request->input('idkhachsan'),
                'trangthai'=>$request->input('trangthai'),
            ]
            );
         $diaDiem->save();
         return Redirect::route('diadiem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiaDiem  $diaDiem
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiaDiem $diaDiem)
    {
        //
    }
}
