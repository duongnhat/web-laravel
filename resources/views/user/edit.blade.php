@extends('master')
@section('content')

<form action="http://truongnhat.com/save-user" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Full name</label>
      <input type="text" class="form-control is-valid" id="validationServer01" name="full_name" value="{{$data->full_name}}" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Email</label>
      <input type="email" class="form-control is-valid" id="validationServer02" name="email" value="{{$data->email}}" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Password</label>
      <div class="input-group">
          <input type="Password" class="form-control is-invalid" id="validationServerUsername" name="password" aria-describedby="inputGroupPrepend3" value="">
        <div class="invalid-feedback">
        </div>
      </div>
    </div>
      <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Re-enter Password</label>
      <div class="input-group">
        <input type="Password" class="form-control is-invalid" id="validationServerUsername" name="re-enter-password" aria-describedby="inputGroupPrepend3">
        <div class="invalid-feedback">
        </div>
      </div>
    </div>
      <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Birth day</label>
      <div class="input-group">
        <input type="date" class="form-control is-invalid" id="validationServerUsername" name="birthday" aria-describedby="inputGroupPrepend3">
        <div class="invalid-feedback">
        </div>
      </div>
    </div>
      </div>
    <input type="checkbox" name="kichhoat" value="checked" {{$data->kichhoat}}> Kích Hoạt<br>
    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
      </div>
  </div>
  <input type="radio" name="sex" value="male" {{$data->male}} required> Male<br>
  <input type="radio" name="sex" value="female" {{$data->female}} required> Female<br>
  
    <input type="hidden" name="id" value="{{$data->id}}">
  <button class="btn btn-primary" type="submit">Edit</button>
</form>

@endsection