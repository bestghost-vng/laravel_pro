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
            <table class="table">
            <thead>
              <tr>
                <th scope="col">Hinh </th>
                <th scope="col">Bai viet</th>
                <th scope="col">Ngay Dang</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
             @foreach($baiViet as $lt)
              <tr>
                <th scope="col"> <img src="#" class="card-img-top" alt="..."></th>
                <th scope="col">Bài Viết Số {{$lt->id}}</th>
                <th scope="col">Ngay Dang:{{$lt->created_at}}</th>
                <th scope="col"><div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>           
                    <a href="{{route('baiviet.detail',['baiViet'=>$lt])}}" class="btn btn-primary">Go somewhere</a>
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


