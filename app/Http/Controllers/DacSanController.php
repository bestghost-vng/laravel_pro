<?php

namespace App\Http\Controllers;

use App\Models\DacSan;
use App\Http\Requests\StoreDacSanRequest;
use App\Http\Requests\UpdateDacSanRequest;
use Illuminate\Support\Facades\Storage;
class DacSanController extends Controller
{
    protected function fixImage(DacSan $dacSan)
    {
        if(Storage::disk('public')->exists($dacSan->hinh)){
            $dacSan->hinh = Storage::url($dacSan->hinh);
        } else{
            $dacSan->hinh='/img/no_image_placeholder.png';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $lstdacsan= DacSan::all();
    //  foreach($lstdacsan as $lt)
    //  {
    //      $this->fixImage($lt);
    //  }   
     return view('quanan/them',['lstdacsan'=>$lstdacsan]);
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
     * @param  \App\Http\Requests\StoreDacSanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDacSanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DacSan  $dacSan
     * @return \Illuminate\Http\Response
     */
    public function show(DacSan $dacSan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DacSan  $dacSan
     * @return \Illuminate\Http\Response
     */
    public function edit(DacSan $dacSan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDacSanRequest  $request
     * @param  \App\Models\DacSan  $dacSan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDacSanRequest $request, DacSan $dacSan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DacSan  $dacSan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DacSan $dacSan)
    {
        //
    }
}
