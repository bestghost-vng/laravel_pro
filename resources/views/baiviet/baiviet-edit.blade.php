@extends('layout.app')

@section('content')

     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Typography </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Typography</li>
                </ol>
              </nav>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" action="{{route('baiviet.update',['baiViet'=>$baiViet])}}" method="post" enctype="multipart/form-data">
                          @method('PUT')
                             @csrf
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                      <div class="form-group">
                        <label for="exampleInputName1">noi dung ({{$baiViet->id}})</label>
                        <input type="text" class="form-control" name="noidung" placeholder="Name" value="{{$baiViet->noi_dung}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Ten quan an</label>
                        <input type="text" class="form-control" name="tenquanan" value="{{$baiViet->QuanAn->tenquanan}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Ten dia diem </label>
                        <input type="text" class="form-control" name="tendiadiem" value="{{$baiViet->DiaDiem->tendiadiem}}">
                      </div>
                       <div class="form-group"> 
                        <label for="exampleInputPassword4">Ten dich vu</label>
                        <input type="text" class="form-control" name="tendichvu" value="{{$baiViet->DichVu->tendichvu}}">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword4">ten dac san </label>
                        <input type="text" class="form-control" name="tendacsan" value="{{$baiViet->DacSan->tendacsan}}">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword4">ten nguoi dang</label>
                        <input type="text" class="form-control" name="tennguoidung" value="{{$baiViet->User->name}}">
                      </div>         
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <!-- main-panel ends -->

@stop();

                {{--  <div class=""> Nội Dung: {{$baiViet->noi_dung}}</div>

                <div class="accordion-body "> Tên Quán Ăn {{$baiViet->QuanAn->tenquanan}}</div>

                <div class="accordion-body"> Địa Điểm: {{$baiViet->DiaDiem->tendiadiem}}</div>
   
                <div class="accordion-body"> Dịch Vụ Kèm: {{$baiViet->DichVu->tendichvu}}</div>
      
                <div class="accordion-body">Đặc Sản: {{$baiViet->DacSan->tendacsan}}</div>
    
                <div class="accordion-body">Người Đăng:  {{$baiViet->User->name}}</div>  --}}
