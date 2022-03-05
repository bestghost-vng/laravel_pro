<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\DiaDiemController as ApiDiaDiemController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DiaDiemController;
use App\Http\Resources\BaiVietResources;
use App\Models\BaiViet ;
use App\Models\DiaDiem;
use App\Models\HinhBaiViet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BaiVietApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = BaiViet::all();
        foreach ( $products as $bv)
        {
            $bv->id_nguoidung = User::where('id','=',$bv->id_nguoidung)->get();
            $bv->id_diadiem = DiaDiem::where('id','=',$bv->id_diadiem)->get();
        };
        return $products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'noidung'=>'required',
            
        ],[
            'noidung'=>'Vui lòng nhập nôi dung',
        ]);
    $baiViet= new BaiViet;
      $baiViet->fill(
          [
            'noidung'=>$request->input('noidung'),
            'like'=>0,
            'dislike'=>0,
            'view'=>0,
            'trangthai'=>1,
            'id_diadiem'=>$request->input('diadiem'),
            'id_nguoidung'=>$request->input('nguoidung'),
          
          ]
          );
        $baiViet->save();
        $hinh = new HinhBaiViet;
        $hinh->fill([
         'nguon'=>'',
         'id_hinh_anh'=>$baiViet->id,
         "trangthai"=>1,
        ]);
        $hinh->save();
        if($request->hasFile('hinhanh')){
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
        

            $get_image=$request->file('hinhanh');
            $path='public/upload/baiviet';
            $get_name_images=$get_image->getClientOriginalName();
            $name_images= current(explode('.',$get_name_images));
            $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_images);
        $hinh->nguon=$new_images;
        $hinh->save();
    }
        return $baiViet;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BaiViet $baiViet)
    {  
        $baiViet->HinhBaiViet = HinhBaiViet::where('id_hinh_anh','=',$baiViet->id)->get();
        $baiViet->User= User::where('id','=',$baiViet->id_nguoidung)->get();
        return [
            'baiviet'=>[
                'hinhanh'=>$baiViet->HinhBaiViet,
                'diadiem'=>$baiViet->DiaDiem,
                'nguoidang'=>$baiViet->User,
            ]
            ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaiViet $baiViet,HinhBaiViet $hinhBaiViet)
    {
        $baiViet->fill( 
            [
              'noidung'=>$request->input('noidung'),
              'like'=>0,
              'dislike'=>0,
              'view'=>0,
              'trangthai'=>$request->input('trangthai'),
              'id_diadiem'=>$request->input('diadiem'),
              'id_nguoidung'=>$request->input('nguoidung'),
            
            ]
            );
          $baiViet->save();
      
          $hinhBaiViet->fill([
           'nguon'=>'',
           'id_hinh_anh'=>$baiViet->id,
           "trangthai"=>1,
          ]);
          $hinhBaiViet->save();
          if($request->hasFile('hinhanh')){
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
          
  
              $get_image=$request->file('hinhanh');
              $path='public/upload/baiviet';
              $get_name_images=$get_image->getClientOriginalName();
              $name_images= current(explode('.',$get_name_images));
              $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
              $get_image->move($path,$new_images);
          $hinhBaiViet->nguon=$new_images;
          $hinhBaiViet->save();
      }
          return $baiViet;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaiViet $baiViet)
    {
        HinhBaiViet::where('id_hinh_anh',$baiViet->id)->delete();
        
        $baiViet->delete();
        
    }
}
