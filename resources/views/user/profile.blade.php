@extends('adminPage')
@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
@if(Auth::check())
    
    <img src="/upfile/{{$data->avata}}" width="720px" height="350px"/>
    @else
<h2>Bạn chưa đăng nhập</h2>
@endif
    </div>
  </div>

@endsection