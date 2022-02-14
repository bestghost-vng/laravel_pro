<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DichVuResources;
use App\Models\View;
use Illuminate\Http\Request;

class ViewApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return View::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $view= new View;
        $view->fill(
            [
                'id_baiviet'=>$request->input('idbaiviet'),
                'id_nguoidung'=>$request->input('idnguoidung'),
                'luotview'=>$request->input('view'),
            ]
            );
        $view->save();
        return $view;
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
    public function update(Request $request, View $view)
    {
        $view->fill(
            [
                'id_baiviet'=>$request->input('idbaiviet'),
                'id_nguoidung'=>$request->input('idnguoidung'),
                'luotlike'=>$request->input('like'),
            ]
            );
        $view->save();
        return $view;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(View $view)
    {
        
    }
}
