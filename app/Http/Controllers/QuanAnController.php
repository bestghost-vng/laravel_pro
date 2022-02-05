<?php

namespace App\Http\Controllers;

use App\Models\QuanAn;
use Illuminate\Support\Facades\Redirect;

use App\Models\HinhQuanAn;
use Illuminate\Http\Request;

class QuanAnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quanAn = QuanAn::all();
        
        return view('quanan.quanan',['quanAn'=>$quanAn,'tendacsan'=>$quanAn->DacSan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanan.them');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuanAnRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $quanAn= new QuanAn;
    $quanAn->fill(
            [
                'tenquanan'=>$request->input('tenquanan'),
                'diachi'=>$request->input('diachi'),
                'hinhanh'=>'',
            ]
            );
         $quanAn->save();
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
        $path='public/upload/quanan';
        $get_name_images=$get_image->getClientOriginalName();
        $name_images= current(explode('.',$get_name_images));
        $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_images);
        $quanAn->hinhanh=$new_images;
    $quanAn->save();
}

         return Redirect::route('quanan.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuanAn  $quanAn
     * @return \Illuminate\Http\Response
     */
    public function show(QuanAn $quanAn)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuanAn  $quanAn
     * @return \Illuminate\Http\Response
     */
    public function edit(QuanAn $quanAn)
    {
        return view('quanan.sua',['quanAn'=>$quanAn]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuanAnRequest  $request
     * @param  \App\Models\QuanAn  $quanAn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuanAn $quanAn)
    {
        $quanAn->fill(
            [
                'tenquanan'=>$request->input('tendichvu'),
                'diachi'=>$request->input('diachi'),
            ]
            );
         $quanAn->save();
        return Redirect::route('quanan.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuanAn  $quanAn
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuanAn $quanAn)
    {
        $quanAn->delete();
        return Redirect::route('quanan.show');
    }
}
