@extends('master')
@section('content')

<form action="http://truongnhat.com/save-user" method="post">
    @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Full name</label>
      <input type="text" class="form-control is-valid" id="validationServer01" name="full_name" value="" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Email</label>
      <input type="email" class="form-control is-valid" id="validationServer02" name="email" value="" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Password</label>
      <div class="input-group">
        <input type="Password" class="form-control is-invalid" id="validationServerUsername" name="password" aria-describedby="inputGroupPrepend3" required>
        <div class="invalid-feedback">
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">Remember token</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" name="remember_token" required>
      <div class="invalid-feedback">
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

@endsection