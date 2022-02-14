
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
             <div class="card ">
              <h5 class="card-title">{{$diaDiem->tendiadiem}}</h5>
              <h6> Khách Sạn</h6>
                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Tên Khách Sạn</th>
                    <th scope="col">Địa Chỉ</th>
                  
                  </tr>
                </thead>
                <tbody> @foreach( $diaDiem->KhachSan as $ks)
                  <tr>
                 
                    <td>{{ $ks->tenkhachsan}}</td>
                    <td>{{ $ks->diachi}}</td>
                 
                  </tr> @endforeach 
                </tbody>
              </table>
             <h6>Dịch Vụ</h6>
                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Tên Dịch Vụ</th>
                    <th scope="col">Mô Tả</th>
                  
                  </tr>
                </thead>
                <tbody> @foreach( $diaDiem->DichVu as $ks)
                  <tr>
                 
                    <td>{{ $ks->tendichvu}}</td>
                    <td>{{ $ks->mota}}</td>
                 
                  </tr> @endforeach 
                </tbody>
              </table>
              
            
              <h6>Quán Ăn</h6>
                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Tên Quán Ăn</th>
                    <th scope="col">Địa Chỉ</th>
                  
                  </tr>
                </thead>
                <tbody> @foreach( $diaDiem->QuanAn as $ks )
                  <tr>
                 
                    <td>{{ $ks->tenquanan}}</td>
                    <td>{{ $ks->diachi}}</td>
                 
                  </tr> @endforeach 
                </tbody>
              </table>
             
            </div>
            <a href="{{route('diadiem.index')}}" class="btn btn-primary">Back</a>
          </div>  
        </div>
        <!-- main-panel ends -->


@stop();




