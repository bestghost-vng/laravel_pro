<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\DiaDiem;
use App\Models\DichVu;
use App\Models\KhachSan;
use App\Models\QuanAn;
use Illuminate\Http\Request;
class DiaDiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diaDiem= DiaDiem::all(); 
        return view('diadiem.diadiem',['diaDiem'=>$diaDiem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diadiem.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiaDiemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diaDiem= new DiaDiem;
        $diaDiem->fill(
                [
                    'tenthanhpho'=>$request->input('tenthanhpho'),
                    'mota'=>$request->input('mota'),
                    'hinhanh'=>'',
                    'id_vungmien'=>$request->input('idvung'),
                    'id_diadiem'=>$request->input('iddiadiem'),
                    'trangthai'=>$request->input('trangthai'),

                ]
                );
             $diaDiem->save();
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
                $path='public/upload/diadiem';
                $get_name_images=$get_image->getClientOriginalName();
                $name_images= current(explode('.',$get_name_images));
                $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                $get_image->move($path,$new_images);
            $diaDiem->hinhanh=$new_images;
            $diaDiem->save();}
             return Redirect::route('diadiem.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiaDiem  $diaDiem
     * @return \Illuminate\Http\Response
     */
    public function show(DiaDiem $diaDiem)
    {
        $diaDiem->QuanAn=QuanAn::where('id_diadiem','=',$diaDiem->id)->get();
        $diaDiem->KhachSan=KhachSan::where('id_diadiem','=',$diaDiem->id)->get();
        $diaDiem->DichVu=DichVu::where('id_diadiem','=',$diaDiem->id)->get();
        return view('diadiem.show_id',[
           'diaDiem'=>$diaDiem,
           'dichvu'=> $diaDiem->DichVu,
           'khachsan'=> $diaDiem->KhachSan,
           'quanan'=> $diaDiem->QuanAn]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiaDiem  $diaDiem
     * @return \Illuminate\Http\Response
     */
    public function edit(DiaDiem $diaDiem)
    {
        return view('diadiem.sua',['diaDiem'=>$diaDiem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiaDiemRequest  $request
     * @param  \App\Models\DiaDiem  $diaDiem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiaDiem $diaDiem)
    {
        $diaDiem->fill(
            [
                'tendiadiem'=>$request->input('tendiadiem'),
                'mieuta'=>$request->input('mieuta'),
                'kinhdo'=>$request->input('kinhdo'),
                'vido'=>$request->input('vido'),
                'quanan_id'=>$request->input('iddacsan'),
                'dichvu_id'=>$request->input('iddichvu'),
                'khachsan_id'=>$request->input('idkhachsan'),
                'trangthai'=>$request->input('trangthai'),
            ]
            );
         $diaDiem->save();
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
            $path='public/upload/diadiem';
            $get_name_images=$get_image->getClientOriginalName();
            $name_images= current(explode('.',$get_name_images));
            $new_images= $name_images.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_images);
        $diaDiem->hinhanh=$new_images;
        $diaDiem->save();}
         return Redirect::route('diadiem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiaDiem  $diaDiem
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiaDiem $diaDiem)
    {
       $diaDiem->delete();
       return Redirect::to('diadiem');
    }
}
