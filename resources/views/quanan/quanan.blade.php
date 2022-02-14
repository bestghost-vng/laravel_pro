@extends('layout.app')

@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Quán Ăn </h3>
               <a href="{{route('quanan.create')}}" class="btn btn-primary">Them</a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Quán Ăn</li>
                </ol>
              </nav>
            </div>
            <table class="table">
            <thead>
              <tr>
               
                <th scope="col"> STT</th>
                <th scope="col">Tên Quán Ăn</th>
                <th scope="col">Địa Chỉ</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
             @foreach($quanAn as $lt)
              <tr>
                <th scope="col"> <img src="{{$lt->hinhanh}}" class="card-img-top" style="width:100px;max-height:100px;object-fit:contain"></th>
                <th scope="col">{{$lt->tenquanan}}</th>
                <th scope="col">{{$lt->diachi}}</th>
                <th scope="col"><div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>           
                    
                    <a href="{{route('quanan.edit',['quanAn'=>$lt])}}" class="btn btn-primary">Sửa</a>
                  
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


