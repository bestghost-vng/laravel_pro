<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VungMien;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        $vungMien = VungMien::all();

        return VungMienResources::collection($vungMien);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vungMien =VungMien::create($request->all());

        return new VungMienResources($vungMien);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(VungMien $vungMien)
    {
        return new VungMienResources($vungMien);
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
        return $vungMien->update($request->all());
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
