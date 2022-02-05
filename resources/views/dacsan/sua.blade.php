@extends('layout.app')

@section('content')

     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Typography </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Typography</li>
                </ol>
              </nav>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Cập Nhập Đặc Sản </h4>
                    
                    <form class="forms-sample" action="{{route('dacsan.update',['dacSan'=>$dacSan])}}" method="post" enctype="multipart/form-data">
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
                        <label for="exampleInputEmail3">Tên đặc sản </label>
                        <input type="text" class="form-control" name="tendacsan" value="{{$dacSan->tendacsan}}">
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail3">Mô tả</label>
                        <input type="text" class="form-control" name="mota" value="{{$dacSan->mota}}">
                     </div>
                      <div class="form-group">
                      <label for="exampleInputEmail3">Giá</label>
                        <input type="text" class="form-control" name="gia" value="{{$dacSan->gia}}">
                     </div>
                     {{--  <div class="form-group">
                      <label for="exampleInputEmail3">Hìnhảnh</label>
                        <input type="file" class="form-control" name="hinh" value="{{$dacSan->hinhanh}}">
                     </div>  --}}
                     <div class="form-group">
                      <label for="exampleInputEmail3">STT quán</label>
                        <input type="text" class="form-control" name="idquanan" value="{{$dacSan->quanan_id}}">
                     </div>
                     <div class="form-group">
                      <label for="exampleInputEmail3">Trạng thái</label>
                        <input type="text" class="form-control" name="trangthai" value="{{$dacSan->trangthai}}">
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

             
