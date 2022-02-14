<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DichVuResources;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Like::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $like= new Like;
        $like->fill(
            [
                'id_baiviet'=>$request->input('idbaiviet'),
                'id_nguoidung'=>$request->input('idnguoidung'),
                'luotlike'=>$request->input('like'),
            ]
            );
        $like->save();
        return $like;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        $like->fill(
            [
                'id_baiviet'=>$request->input('idbaiviet'),
                'id_nguoidung'=>$request->input('idnguoidung'),
                'luotlike'=>$request->input('like'),
            ]
            );
        $like->save();
        return $like;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        
    }
}
