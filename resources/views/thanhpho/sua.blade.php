@extends('layout.app')

@section('content')

     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Thành Phố </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Thành Phố</li>
                </ol>
              </nav>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Cập Nhập Thành Phố </h4>
                    
                    <form class="forms-sample" action="{{route('thanhpho.update',['thanhPho'=>$thanhPho])}}" method="post" enctype="multipart/form-data">
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
                                @method('PUT')
                      <div class="form-group">
                        <label for="exampleInputEmail3">Tên Thành Phố </label>
                        <input type="text" class="form-control" name="tenthanhpho" value="{{$thanhPho->tenthanhpho}}">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail3">Mô Tả</label>
                        <input type="text" class="form-control" name="mota" value="{{$thanhPho->mota}}">
                     </div>
                      <div class="form-group">
                      <label for="exampleInputEmail3">Hìnhảnh</label>
                        <input type="file" class="form-control" name="hinh" value="{{$thanhPho->hinhanh}}">
                     </div>
                      <div class="form-group">
                      <label for="exampleInputEmail3">STT vung</label>
                        <input type="text" class="form-control" name="idvung" value="{{$thanhPho->id_vungmien}}">
                     </div>
                     <div class="form-group">
                      <label for="exampleInputEmail3">Trạng Thái</label>
                        <input type="text" class="form-control" name="trangthai" value="{{$thanhPho->trangthai}}">
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

             
