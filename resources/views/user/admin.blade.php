@extends('adminPage')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
@csrf
    <img src="/upfile/{{$data->avata}}" width="720px" height="350px"/>
    </div>
</div>
@endsection