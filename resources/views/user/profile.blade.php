@extends('master')
@section('content')
@if(Auth::check())
    
    <img src="/upfile/{{$data->avata}}" width="720px" height="350px"/>
    <a href="{{url('logout')}}">Logout</a>
    @else
<h2>Bạn chưa đăng nhập</h2>
@endif
@endsection