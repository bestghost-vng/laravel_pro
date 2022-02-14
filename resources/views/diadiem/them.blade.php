@extends('layout.app')

@section('content')

     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Địa Điểm </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Địa Điểm</li>
                </ol>
              </nav>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thêm Địa Điểm Mới </h4>
                    
                    <form class="forms-sample" action="{{route('diadiem.store')}}" method="post" enctype="multipart/form-data">
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
                        <label for="exampleInputEmail3">Tên Đia Điểm </label>
                        <input type="text" class="form-control" name="tendiadiem" placeholder="Nhập">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Miêu Tả </label>
                        <input type="text" class="form-control" name="mieuta" placeholder="Nhập">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">Kinh Độ </label>
                        <input type="text" class="form-control" name="kinhdo" placeholder="Nhập">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">Vĩ Độ </label>
                        <input type="text" class="form-control" name="vido" placeholder="Nhập">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">STT dacsan </label>
                        <input type="text" class="form-control" name="iddacsan" placeholder="Nhập">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">STT khachsan </label>
                        <input type="text" class="form-control" name="idkhachsan" placeholder="Nhập">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">STT dichvu </label>
                        <input type="text" class="form-control" name="iddichvu" placeholder="Nhập">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">Trạng Thái </label>
                        <input type="text" class="form-control" name="trangthai" placeholder="Nhập">
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

             
