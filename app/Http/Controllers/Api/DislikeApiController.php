<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Disklike;
use Illuminate\Http\Request;

class DisLikeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Disklike::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $like= new Disklike;
        $like->fill(
            [
                'id_baiviet'=>$request->input('idbaiviet'),
                'id_nguoidung'=>$request->input('idnguoidung'),
                'luotdislike'=>$request->input('dislike'),
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
    public function update(Request $request, Disklike $dislike)
    {
        $dislike->fill(
            [
                'id_baiviet'=>$request->input('idbaiviet'),
                'id_nguoidung'=>$request->input('idnguoidung'),
                'luotlike'=>$request->input('like'),
            ]
            );
        $dislike->save();
        return $dislike;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disklike $dislike)
    {
        
    }
}
