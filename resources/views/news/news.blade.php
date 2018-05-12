@extends('master')
@section('content')

<form action="http://truongnhat.com/save-news" method="post">
    @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Title name</label>
      <input type="text" class="form-control is-valid" id="validationServer01" name="title" value="" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">content</label>
      <input type="text" class="form-control is-valid" id="validationServer02" name="content" value="" required>
      <div class="valid-feedback">
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

@endsection