@extends('layout.app')

@section('content')

     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Dịch Vụ </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dịch Vụ</li>
                </ol>
              </nav>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thêm Dịch Vụ Mới </h4>
                    
                    <form class="forms-sample" action="{{route('dichvu.store')}}" method="post" enctype="multipart/form-data">
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
                        <label for="exampleInputEmail3">Tên Dịch Vụ </label>
                        <input type="text" class="form-control" name="tendichvu" placeholder="Nhập">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Mô Tả </label>
                        <input type="text" class="form-control" name="mota" placeholder="Nhập">
                      </div>
                      <div class="form-group">
                        <label for="formFile" class="form-label">Hinh Anh</label>
                         <input class="form-control" type="file" id="formFile" name="hinh">
                     </div>
                      <div class="form-group">
                      <label for="exampleInputEmail3">Trạng thái</label>
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

             
