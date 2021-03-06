@extends('layout.app')

@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Đặc Sản </h3>
               <a href="{{route('dacsan.create')}}" class="btn btn-primary">Thêm</a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Đặc Sản</li>
                </ol>
              </nav>
            </div>
            <table class="table">
            <thead>
              <tr>
               
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Tên Đặc Sản</th>
                <th scope="col">Mô Tả </th>
                <th scope="col">Giá</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
             @foreach($lstdacsan as $lt)
              <tr>
                <th scope="col"> <img src="public/upload/dacsan/{{$lt->hinhanh}}" class="card-img-top" alt="..."></th>
                <th scope="col">{{$lt->tendacsan}}</th>
                <th scope="col">{{$lt->mota}}</th>
                <th scope="col">{{$lt->gia}}</th>
                <th scope="col"><div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>           
                    
                    <a href="{{route('dacsan.edit',['dacSan'=>$lt])}}" class="btn btn-primary">Sửa</a>
                    <a href="{{route('dacsan.destroy',['dacSan'=>$lt])}}" class="btn btn-primary">Xoá</a>
                  
                  </div>
                  
                </div></th>
                </tr>
              @endforeach
          
            </tbody>
            </table> 
            
            {{ $lstdacsan->links() }}
           
          </div>  
          {{--  <div class="container">
                @foreach ($lstdacsan as $dt)
                    {{ $dt->id }}
                @endforeach
            </div>
            
            {{ $dt->links(5) }}  --}}

           
        </div>
        <!-- main-panel ends -->

@stop();


