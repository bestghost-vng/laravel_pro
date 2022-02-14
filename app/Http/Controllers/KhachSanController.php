<?php

namespace App\Http\Controllers;

use App\Models\KhachSan;
use Illuminate\Support\Facades\Redirect;
use App\Models\View;
use Illuminate\Http\Request;
class KhachSanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khachSan=KhachSan::all();
        return view('khachsan.khachsan',['khachSan'=>$khachSan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('khachsan.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKhachSanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $khachSan= new KhachSan;
        $khachSan->fill(
            [
                'tenkhachsan'=>$request->input('tenkhachsan'),
                'diachi'=>$request->input('diachi'),
                'hinhanh'=>'',
                'id_diadiem'=>$request->input('iddiadiem'),               
                'danhgia'=>$request->input('danhgia'),
                'trangthai'=>$request->input('trangthai'),
            ]
            );
         $khachSan->save();
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
             $path='public/upload/khachsan';
             $get_name_images=$get_image->getClientOriginalName();
             $name_images= current(explode('.',$get_name_images));
             $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
             $get_image->move($path,$new_images);
         $khachSan->hinhanh=$new_images;
         $khachSan->save();}
         return Redirect::route('khachsan.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KhachSan  $khachSan
     * @return \Illuminate\Http\Response
     */
    public function show(KhachSan $khachSan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KhachSan  $khachSan
     * @return \Illuminate\Http\Response
     */
    public function edit(KhachSan $khachSan)
    {
        return view('khachsan.sua',['khachSan'=>$khachSan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKhachSanRequest  $request
     * @param  \App\Models\KhachSan  $khachSan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KhachSan $khachSan)
    {
        $khachSan->fill(
            [
                'tenkhachsan'=>$request->input('tenkhachsan'),
                'diachi'=>$request->input('diachi'),
                
                'danhgia'=>$request->input('danhgia'),
                'trangthai'=>$request->input('trangthai'),
            ]
            );
         $khachSan->save();
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
            $path='public/upload/khachsan';
            $get_name_images=$get_image->getClientOriginalName();
            $name_images= current(explode('.',$get_name_images));
            $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_images);
        $khachSan->hinhanh=$new_images;
        $khachSan->save();}
         return Redirect::route('khachsan.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KhachSan  $khachSan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KhachSan $khachSan)
    {
        $khachSan->delete();
        return Redirect::to('khachsan');
    }
}
