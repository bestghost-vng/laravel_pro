@extends('layout.app')
@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Bài Viết</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bài Viết</li>
                </ol>
              </nav>
            </div>
          <div class="card ">
          <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> 
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
            <div class="card-body">
              <h5 class="card-title">Nội Dung: {{$baiViet->noi_dung}}</h5>
              <p class="card-text">Địa Điểm: {{$baiViet->DiaDiem->tendiadiem}}</p>
              <p class="card-text">Người Đăng:  {{$baiViet->User->name}}</p>
              <p class="card-text"><small class="text-muted">{{$baiViet->created_at}}</small></p>
            </div>
          </div>
            <div class="card">
                <div class="d-grid gap-2 d-md-block">
                  <form action="{{route('baiviet.destroy',['baiViet'=>$baiViet])}}" method="POST">
                   @csrf 
                   @method('DELETE')
                   <button class="btn btn-primary " type="button">Xoá</button>
                  </form>
                 <a href="{{route('baiviet.show')}}" class="btn btn-primary btn-sm">Back</a>
                </div>
              </div>
            </div>
           
          </div>  
        </div>
        <!-- main-panel ends -->


@stop();




