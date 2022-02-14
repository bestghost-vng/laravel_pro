@extends('layout.app')

@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Khách Sạn </h3>
               <a href="{{route('khachsan.create')}}" class="btn btn-primary">Thêm</a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Khách Sạn</li>
                </ol>
              </nav>
            </div>
            <table class="table">
            <thead>
              <tr>
               
                <th scope="col"> Hình Ảnh</th>
                <th scope="col">Tên Khách Sạn</th>
                <th scope="col">Địa Chỉ</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
             @foreach($khachSan as $lt)
              <tr>
                <th scope="col"> <img src="public/upload/khachsan/{{$lt->hinhanh}}" class="card-img-top" alt="..."></th>              
                <th scope="col">{{$lt->tenkhachsan}}</th>
                <th scope="col">{{$lt->diachi}}</th>
                <th scope="col"><div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>           
                    
                    <a href="{{route('khachsan.edit',['khachSan'=>$lt])}}" class="btn btn-primary">Sửa</a>
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


