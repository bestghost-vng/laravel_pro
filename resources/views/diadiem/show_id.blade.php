
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
              <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Thông tin Chi Tiết Địa Điểm</h5>
                    <p class="card-text">{{$diaDiem->tendiadiem}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-info">{{ $diaDiem->KhachSan->tenkhachsan}}</li>
                    <li class="list-group-item bg-info">{{ $diaDiem->QuanAn->tenquanan}}</li>
                    <li class="list-group-item bg-info">{{ $diaDiem->DichVu->tendichvu}}</li>
                </ul>
                <div class="card-body">
                    <a href="{{route('diadiem.index')}}" class="card-link">Back</a>
                </div>
            </div>
           
          </div>  
        </div>
        <!-- main-panel ends -->


@stop();




