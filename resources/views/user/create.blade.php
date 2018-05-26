@extends('master')
@section('content')

<form action="http://truongnhat.com/to-create-user" method="post">
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
      <input type="email" class="form-control is-valid" id="validationServer02" name="email" value=""required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="form-group">
    <label for="inputPassword6">Password</label>
    <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" name="password">
    <small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.
    </small>
  </div>
      <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Re-enter Password</label>
      <div class="input-group">
        <input type="Password" class="form-control is-invalid" id="validationServerUsername" name="re-enter-password" aria-describedby="inputGroupPrepend3" required>
        <div class="invalid-feedback">
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Create</button>
  <button  type="submit"><a href="/view-user">Cancel</a></button>
</form>

@endsection