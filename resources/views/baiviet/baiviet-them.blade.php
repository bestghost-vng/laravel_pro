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
            <div class="row">
               @foreach($baiviet as $lt)
                <div class="card bg-Info" style="width: 18rem;">
                <img src="{{$lt->hinh}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bài Viết Số {{$lt->id}}</h5>
                    <p class="card-text">Quán Ăn:      {{$lt->id_quanan}}</p>
                    <p class="card-text">Đia Điểm:     {{$lt->id_diadiem}}</p>
                    <p class="card-text"> Dịch Vụ Kèm: {{$lt->id_dichvu}}</p>
                    <p class="card-text">Đặc Sản:     {{$lt->id_dacsan}}</p>
                    <p class="card-text">Người Đăng:  {{$lt->id_nguoidung}}</p>
             
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
       @endforeach
            </div>
          </div>  
        </div>
        <!-- main-panel ends -->

@stop();


