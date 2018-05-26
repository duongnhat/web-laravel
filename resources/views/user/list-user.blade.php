@extends('master')
@section('content')


    @csrf

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phái</th>
      <th scope="col">Birth Day</th>
      <th scope="col">Profile</th>
      <th scope="col">Kích Hoạt</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
@foreach($data as $value)

    <tr>
      <td>{{$value->id}}</td>
      <td>{{$value->full_name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->sex}}</td>
      <td>{{$value->birthday}}</td>
      <td><a href="view-profile-user/{{$value->id}}">Profile</a></td>
      <td><input type="checkbox" name="kichhoat" value="kichhoat" {{$value->kichhoat}}></td>
      <td><a href="edit-user/{{$value->id}}">Edit</a></td>
    </tr>

@endforeach
  </tbody>
</table>
{!! $data->links() !!}

@endsection