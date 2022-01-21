<?php

namespace App\Http\Controllers;

use App\Models\HinhDiaDiem;
use App\Http\Requests\StoreHinhDiaDiemRequest;
use App\Http\Requests\UpdateHinhDiaDiemRequest;

class HinhDiaDiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreHinhDiaDiemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHinhDiaDiemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HinhDiaDiem  $hinhDiaDiem
     * @return \Illuminate\Http\Response
     */
    public function show(HinhDiaDiem $hinhDiaDiem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HinhDiaDiem  $hinhDiaDiem
     * @return \Illuminate\Http\Response
     */
    public function edit(HinhDiaDiem $hinhDiaDiem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHinhDiaDiemRequest  $request
     * @param  \App\Models\HinhDiaDiem  $hinhDiaDiem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHinhDiaDiemRequest $request, HinhDiaDiem $hinhDiaDiem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HinhDiaDiem  $hinhDiaDiem
     * @return \Illuminate\Http\Response
     */
    public function destroy(HinhDiaDiem $hinhDiaDiem)
    {
        //
    }
}
