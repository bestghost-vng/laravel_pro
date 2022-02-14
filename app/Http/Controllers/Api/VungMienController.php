<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VungMien;
use Illuminate\Http\Request;
use App\Http\Resources\VungMienResources;
class VungMienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return VungMien::all();
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
    public function show(VungMien $vungMien)
    {
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,VungMien $vungMien)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(VungMien $vungMien)
    {
        $vungMien->delete();
    }
}
