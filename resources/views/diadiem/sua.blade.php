@extends('layout.app')

@section('content')

     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Địa Điểm</h3>
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
                    <h4 class="card-title">Cập Nhập Địa Điểm </h4>
                    
                    <form class="forms-sample" action="{{route('diadiem.update',['diaDiem'=>$diaDiem])}}" method="post" enctype="multipart/form-data">
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
                        <label for="exampleInputEmail3">Tên Đia Điểm </label>
                        <input type="text" class="form-control" name="tendiadiem" value="{{$diaDiem->tendiadiem}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Miêu Tả </label>
                        <input type="text" class="form-control" name="mieuta" value="{{$diaDiem->mieuta}}" >
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">Kinh Độ </label>
                        <input type="text" class="form-control" name="kinhdo" value="{{$diaDiem->kinhdo}}">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">Vĩ Độ </label>
                        <input type="text" class="form-control" name="vido" value="{{$diaDiem->vido}}">
                      </div>
                       <div class="form-group">
                      <label for="exampleInputEmail3">Hìnhảnh</label>
                        <input type="file" class="form-control" name="hinh" value="{{$diaDiem->hinhanh}}">
                     </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">STT dacsan </label>
                        <input type="text" class="form-control" name="iddacsan" value="{{$diaDiem->quanan_id}}">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">STT khachsan </label>
                        <input type="text" class="form-control" name="idkhachsan" value="{{$diaDiem->khachsan_id}}">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">STT dichvu </label>
                        <input type="text" class="form-control" name="iddichvu" value="{{$diaDiem->dichvu_id}}">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail3">Trạng Thái </label>
                        <input type="text" class="form-control" name="trangthai" value="{{$diaDiem->trangthai}}">
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

             
