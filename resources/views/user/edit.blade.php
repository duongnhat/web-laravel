@extends('master')
@section('content')

<form action="http://truongnhat.com/save-user" method="post">
    @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Full name</label>
      <input type="text" class="form-control is-valid" id="validationServer01" name="full_name" value="{{$data->full_name}}">
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Email</label>
      <input type="email" class="form-control is-valid" id="validationServer02" name="email" value="{{$data->email}}">
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Password</label>
      <div class="input-group">
          <input type="Password" class="form-control is-invalid" id="validationServerUsername" name="password" aria-describedby="inputGroupPrepend3" value="{{$data->password}}">
        <div class="invalid-feedback">
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Remember token</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" name="remember_token" value="{{$data->remember_token}}">
      <div class="invalid-feedback">
      </div>
    </div>
  </div>
    <input type="hidden" name="id" value="{{$data->id}}">
  <button class="btn btn-primary" type="submit">Edit</button>
</form>

@endsection