@extends('layout.app')

@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Typography </h3>
               <a href="{{route('dacsan.create')}}" class="btn btn-primary">Thêm</a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Typography</li>
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
                   {{--  <form action="{{route('dacsan.destroy',['dacSan'=>$lt])}}" method="post">
                   @csrf 
                   @method('DELETE')
                   <button class="btn btn-secondary btn-sm" type="button">Xoá</button>
                   </form>  --}}
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


