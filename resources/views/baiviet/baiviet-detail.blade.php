@extends('layout.app')
@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Bai Viet </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bai Viet</li>
                </ol>
              </nav>
            </div>
            <div class="card">
              <div class="card-body">
                <div class=""> Nội Dung: {{$baiViet->noi_dung}}</div>
          
           
                <div class="accordion-body "> Tên Quán Ăn {{$baiViet->QuanAn->tenquanan}}</div>

   
           
             
                <div class="accordion-body"> Địa Điểm: {{$baiViet->DiaDiem->tendiadiem}}</div>
   
            
              
             
                <div class="accordion-body"> Dịch Vụ Kèm: {{$baiViet->DichVu->tendichvu}}</div>
              
               
  
              
                <div class="accordion-body">Đặc Sản: {{$baiViet->DacSan->tendacsan}}</div>
              
               
             
                <div class="accordion-body">Người Đăng:  {{$baiViet->User->name}}</div>
               
                <div class="d-grid gap-2 d-md-block">
                  <a href="{{route('baiviet.edit',['baiViet'=>$baiViet])}}" class="btn btn-primary">Sua</a>
                  <form action="{{route('baiviet.destroy',['baiViet'=>$baiViet])}}" method="POST">
                   @csrf 
                   @method('DELETE')
                   <button class="btn btn-secondary btn-sm" type="button">Xoá</button>
                  </form>
                 
                </div>
              </div>
            </div>
           
          </div>  
        </div>
        <!-- main-panel ends -->


@stop();




