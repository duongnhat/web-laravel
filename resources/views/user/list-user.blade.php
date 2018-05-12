@extends('master')
@section('content')


    @csrf

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Remember Token</th>
    </tr>
  </thead>
  <tbody>
@foreach($data as $value)

    <tr>
      <td>{{$value->id}}</td>
      <td>{{$value->full_name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->remmember_token}}</td>
    </tr>

@endforeach
  </tbody>
</table>


@endsection