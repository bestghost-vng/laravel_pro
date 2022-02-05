<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\DacSan;
use App\Models\HinhAnhDacSan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class DacSanController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $lstdacsan= DacSan::all();  
     return view('dacsan.dacsan',['lstdacsan'=>$lstdacsan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dacsan.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDacSanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dacSan= new DacSan;
    $dacSan->fill(
            [
                'tendacsan'=>$request->input('tendacsan'),
                'mota'=>$request->input('mota'),
                'hinhanh'=>'',
                'gia'=>$request->input('gia'),
                'quanan_id'=>$request->input('idquanan'),
                'trangthai'=>$request->input('trangthai')
            ]
            );
         $dacSan->save();
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
        $path='public/upload/dacsan';
        $get_name_images=$get_image->getClientOriginalName();
        $name_images= current(explode('.',$get_name_images));
        $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_images);
    $dacSan->hinhanh=$new_images;
    $dacSan->save();
}

         return Redirect::route('dacsan.show');
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
        return view('dacsan.sua',['dacSan'=>$dacSan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDacSanRequest  $request
     * @param  \App\Models\DacSan  $dacSan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DacSan $dacSan)
    {
        $dacSan->fill(
            [
                'tendacsan'=>$request->input('tendacsan'),
                'mota'=>$request->input('mota'),
                'gia'=>$request->input('gia'),
                'trangthai'=>$request->input('trangthai'),
            ]
            );
         $dacSan->save();
         
        return Redirect::route('dacsan.show');
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
