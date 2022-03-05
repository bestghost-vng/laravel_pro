<?php

namespace App\Http\Controllers;

use App\Models\DichVu;
use App\Http\Requests\StoreDichVuRequest;
use App\Http\Requests\UpdateDichVuRequest;
use App\Models\DanhSachHinhDichVu;
use App\Models\HinhDichVu;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DichVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dichVu=DichVu::all();
        return view('dichvu.dichvu',['dichvu'=>$dichVu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dichvu.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDichVuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   $dichVu= new DichVu;
   $dichVu->fill(
       [
           'tendichvu'=>$request->input('tendichvu'),
           'mota'=>$request->input('mota'),
           'hinhanh'=>'',
           'id_diadiem'=>$request->input('iddiadiem'),
           'trangthai'=>$request->input('trangthai'),
       ]
       );
    $dichVu->save();
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
        $path='public/upload/dichvu';
        $get_name_images=$get_image->getClientOriginalName();
        $name_images= current(explode('.',$get_name_images));
        $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_images);
    $dichVu->hinhanh=$new_images;$dichVu->save();
    if($dichVu->hinhanh == '')
    {
        $dv = DichVu::Where('id',$dichVu->id)->max();
        $dv->delete();
        return Redirect::route('dichvu.show'); 
    }
    else 
    {
        return Redirect::route('dichvu.show');
    }
    

}
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DichVu  $dichVu
     * @return \Illuminate\Http\Response
     */
    public function show(DichVu $dichVu)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DichVu  $dichVu
     * @return \Illuminate\Http\Response
     */
    public function edit(DichVu $dichVu)
    {
     return view('dichvu.sua',['dichVu'=>$dichVu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDichVuRequest  $request
     * @param  \App\Models\DichVu  $dichVu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DichVu $dichVu)
    {
        $dichVu->fill(
            [
                'tendichvu'=>$request->input('tendichvu'),
                'mota'=>$request->input('mota'),
                'trangthai'=>$request->input('trangthai'),
            ]
            );
         $dichVu->save();
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
            $path='public/upload/dichvu';
            $get_name_images=$get_image->getClientOriginalName();
            $name_images= current(explode('.',$get_name_images));
            $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_images);
        $dichVu->hinhanh=$new_images;
        $dichVu->save();}
         return Redirect::route('dichvu.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DichVu  $dichVu
     * @return \Illuminate\Http\Response
     */
    public function destroy(DichVu $dichVu)
    {
        $dichVu->delete();
        return Redirect::to('dichvu');
    }
}
