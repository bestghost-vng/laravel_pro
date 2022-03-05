<?php

namespace App\Http\Controllers;

use App\Models\ThanhPho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class ThanhPhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thanhPho=ThanhPho::all();
        return view('thanhpho.thanhpho',['thanhPho'=>$thanhPho]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thanhpho.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThanhPhoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thanhPho= new ThanhPho;
        $thanhPho->fill(
                [
                   

                    'tendiadiem'=>$request->input('tendiadiem'),
                    'mieuta'=>$request->input('mieuta'),
                    'kinhdo'=>$request->input('kinhdo'),
                    'vido'=>$request->input('vido'),
                    'hinhanh'=>'',
                    'quanan_id'=>$request->input('iddacsan'),
                    'dichvu_id'=>$request->input('iddichvu'),
                    'khachsan_id'=>$request->input('idkhachsan'),
                    'trangthai'=>$request->input('trangthai'),
                ]
                );
             $thanhPho->save();
        if($request->hasFile('hinh')){
            //Hàm kiểm tra dữ liệu
            $this->validate($request, 
                [
                    //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                    'hinh' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],			
                [
                    //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                    'hinh.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'hinh.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );
            
            $get_image=$request->file('hinh');
            $path='public/upload/thanhpho';
            $get_name_images=$get_image->getClientOriginalName();
            $name_images= current(explode('.',$get_name_images));
            $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_images);
            $thanhPho->hinhanh=$new_images;
        $thanhPho->save();
    }
    
             return Redirect::route('thanhpho.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThanhPho  $thanhPho
     * @return \Illuminate\Http\Response
     */
    public function show(ThanhPho $thanhPho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThanhPho  $thanhPho
     * @return \Illuminate\Http\Response
     */
    public function edit(ThanhPho $thanhPho)
    {
        return view('thanhpho.sua',['thanhPho'=>$thanhPho]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThanhPhoRequest  $request
     * @param  \App\Models\ThanhPho  $thanhPho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThanhPho $thanhPho)
    {
        $thanhPho->fill(
            [
                'tenthanhpho'=>$request->input('tenthanhpho'),
                'mota'=>$request->input('mota'),
                'id_diadiem'=>$request->input('iddiadiem'),
                'id_vungmien'=>$request->input('idvung'),
                'trangthai'=>$request->input('trangthai'),
            ]
            );
         $thanhPho->save();
         if($request->hasFile('hinh')){
            //Hàm kiểm tra dữ liệu
            $this->validate($request, 
                [
                    //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                    'hinh' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],			
                [
                    //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                    'hinh.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'hinh.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );
            
            $get_image=$request->file('hinh');
            $path='public/upload/thanhpho';
            $get_name_images=$get_image->getClientOriginalName();
            $name_images= current(explode('.',$get_name_images));
            $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_images);
            $thanhPho->hinhanh=$new_images;
        $thanhPho->save();
    }
         return Redirect::route('thanhpho.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThanhPho  $thanhPho
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThanhPho $thanhPho)
    {
        $thanhPho->delete();
        return Redirect::to('thanhpho');
    }
}
