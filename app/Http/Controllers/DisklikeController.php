<?php

namespace App\Http\Controllers;

use App\Models\Disklike;
use App\Http\Requests\StoreDisklikeRequest;
use App\Http\Requests\UpdateDisklikeRequest;

class DisklikeController extends Controller
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
     * @param  \App\Http\Requests\StoreDisklikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisklikeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disklike  $disklike
     * @return \Illuminate\Http\Response
     */
    public function show(Disklike $disklike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disklike  $disklike
     * @return \Illuminate\Http\Response
     */
    public function edit(Disklike $disklike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDisklikeRequest  $request
     * @param  \App\Models\Disklike  $disklike
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisklikeRequest $request, Disklike $disklike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disklike  $disklike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disklike $disklike)
    {
        //
    }
}
