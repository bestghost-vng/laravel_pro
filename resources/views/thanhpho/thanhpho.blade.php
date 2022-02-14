@extends('layout.app')

@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Thành Phố</h3>
               <a href="{{route('thanhpho.create')}}" class="btn btn-primary">Thêm</a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Thành Phố</li>
                </ol>
              </nav>
            </div>
            <table class="table">
            <thead>
              <tr>
               
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Tên Thành Phố</th>
                <th scope="col">Mô Tả</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
             @foreach($thanhPho as $lt)
              <tr>
                <th scope="col"> <img src="public/upload/thanhpho/{{$lt->hinhanh}}" class="card-img-top" alt="..."></th>                
                <th scope="col">{{$lt->tenthanhpho}}</th>
                <th scope="col">{{$lt->mota}}</th>
                <th scope="col"><div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>           
                    
                    <a href="{{route('thanhpho.edit',['thanhPho'=>$lt])}}" class="btn btn-primary">Sửa</a>
                    <a href="{{route('thanhpho.destroy',['thanhPho'=>$lt])}}" class="btn btn-primary">Xoá</a>
                 
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


