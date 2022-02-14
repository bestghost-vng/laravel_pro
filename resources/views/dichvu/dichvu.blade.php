@extends('layout.app')

@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Dịch Vụ </h3>
               <a href="{{route('dichvu.create')}}" class="btn btn-primary">thêm</a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Địa Điểm</li>
                </ol>
              </nav>
            </div>
            <table class="table">
            <thead>
              <tr>
               
                <th scope="col"> Hình Ảnh</th>
                <th scope="col">Tên Dịch Vụ</th>
                <th scope="col">Mô Tả</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
             @foreach($dichvu as $lt)
              <tr>
                <th scope="col"> <img src="public/upload/dichvu/{{$lt->hinhanh}}" class="card-img-top" style="width:100px;max-height:100px;object-fit:contain"></th>
                <th scope="col">{{$lt->tendichvu}}</th>
                <th scope="col">{{$lt->mota}}</th>
                <th scope="col"><div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>           
                   
                    <a href="{{route('dichvu.edit',['dichVu'=>$lt])}}" class="btn btn-primary">Sửa</a>
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


