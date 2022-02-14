@extends('layout.app')

@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Địa Điểm</h3>
               <a href="{{route('diadiem.create')}}" class="btn btn-primary">Thêm</a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Địa Điểm </li>
                </ol>
              </nav>
            </div>
            <table class="table">
            <thead>
              <tr>
               
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Tên Địa Điểm</th>
                <th scope="col">Miêu Tả</th>
                <th scope="col"></th>
               
              </tr>
            </thead>
            <tbody>
             @foreach($diaDiem as $lt)
              <tr>
                <th scope="col"> <img src="public/upload/diadiem/{{$lt->hinhanh}}" class="card-img-top" style="width:100px;max-height:100px;object-fit:contain"></th>
                <th scope="col">{{$lt->tendiadiem}}</th>
                <th scope="col">{{$lt->mieuta}}</th>
                <th scope="col"><div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>           
                    
                    <a href="{{route('diadiem.edit',['diaDiem'=>$lt])}}" class="btn btn-primary">Sửa</a>
                    <a href="{{route('diadiem.show',['diaDiem'=>$lt])}}" class="btn btn-primary">Chi Tiết</a>
                   <form class="forms-sample" action="{{route('diadiem.destroy',['diaDiem'=>$lt])}}" method="post" enctype="multipart/form-data">
                   @csrf 
                   @method('DELETE')
                   <button class="btn btn-secondary btn-sm" type="button">Xoá</button>
                   </form>
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


