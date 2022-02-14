@extends('layout.app')

@section('content')

     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Khách Sạn </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Khách Sạn</li>
                </ol>
              </nav>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thêm Khách Sạn </h4>
                    
                    <form class="forms-sample" action="{{route('khachsan.store')}}" method="post" enctype="multipart/form-data">
                             @csrf
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                      <div class="form-group">
                        <label for="exampleInputEmail3">Tên Khách Sạn </label>
                        <input type="text" class="form-control" name="tenkhachsan" placeholder="Nhập">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Địa Chỉ </label>
                        <input type="text" class="form-control" name="diachi" placeholder="Nhập">
                      </div>
                      <div class="form-group">
                        <label for="formFile" class="form-label">Hình Ảnh</label>
                         <input class="form-control" type="file" id="formFile" name="hinh">
                     </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Đánh Giá</label>
                        <input type="text" class="form-control" name="danhgia" placeholder="Nhập">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Trạng Thái</label>
                        <input type="text" class="form-control" name="trangthai" placeholder="Nhập">
                      </div>
                       <div class="form-group">
                      <label for="exampleInputEmail3">STT diadiem</label>
                        <input type="text" class="form-control" name="iddiadiem" placeholder="Nhập">
                     </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <!-- main-panel ends -->

@stop();

             
