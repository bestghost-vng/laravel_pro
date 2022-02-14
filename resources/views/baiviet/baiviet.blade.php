@extends('layout.app')

@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Bài Viết </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bài Viết</li>
                </ol>
              </nav>
            </div>
            <table class="table">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Ngày Đăng</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
             @foreach($baiViet as $lt)
              <tr>
                <th scope="col">{{$lt->id}}</th>
                <th scope="col">{{$lt->created_at}}</th>
                <th scope="col"><div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>           
                    <a href="{{route('baiviet.detail',['baiViet'=>$lt])}}" class="btn btn-primary">Xem chi tiết</a>
                  </div>
                </div></th>
                </tr>
              @endforeach
          
            </tbody>
            </table>
          </div>  
        </div>
        <!-- main-panel ends -->

@stop();


