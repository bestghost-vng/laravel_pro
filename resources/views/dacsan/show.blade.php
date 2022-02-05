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
            <table class="table">
            <thead>
              <tr>
               
                <th scope="col"> STT</th>
                <th scope="col">Tên Quan An</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="col"> <img src="public/upload/quanan/{{$quanan->hinh}}" class="card-img-top" alt="..."></th>
                <th scope="col">{{$quanan->tenquanan}}</th>
                </div></th>
                </tr>
            </tbody>
            </table>
          </div>  
        </div>
        <!-- main-panel ends -->

@stop();


