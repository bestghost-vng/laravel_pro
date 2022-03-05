<?php

namespace App\Http\Controllers;

use App\Models\CtUser;
use App\Http\Requests\StoreCtUserRequest;
use App\Http\Requests\UpdateCtUserRequest;

class CtUserController extends Controller
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
     * @param  \App\Http\Requests\StoreCtUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCtUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CtUser  $ctUser
     * @return \Illuminate\Http\Response
     */
    public function show(CtUser $ctUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CtUser  $ctUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CtUser $ctUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCtUserRequest  $request
     * @param  \App\Models\CtUser  $ctUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCtUserRequest $request, CtUser $ctUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CtUser  $ctUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CtUser $ctUser)
    {
        //
    }
}
