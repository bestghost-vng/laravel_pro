<?php

namespace App\Http\Controllers;

use App\Models\HinhBaiViet;
use App\Http\Requests\StoreHinhBaiVietRequest;
use App\Http\Requests\UpdateHinhBaiVietRequest;

class HinhBaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHinhBaiVietRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHinhBaiVietRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HinhBaiViet  $hinhBaiViet
     * @return \Illuminate\Http\Response
     */
    public function show(HinhBaiViet $hinhBaiViet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HinhBaiViet  $hinhBaiViet
     * @return \Illuminate\Http\Response
     */
    public function edit(HinhBaiViet $hinhBaiViet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHinhBaiVietRequest  $request
     * @param  \App\Models\HinhBaiViet  $hinhBaiViet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHinhBaiVietRequest $request, HinhBaiViet $hinhBaiViet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HinhBaiViet  $hinhBaiViet
     * @return \Illuminate\Http\Response
     */
    public function destroy(HinhBaiViet $hinhBaiViet)
    {
        //
    }
}
