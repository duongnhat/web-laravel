@extends('master')
@section('content')

<form action="http://truongnhat.com/save-news" method="post" enctype="multipart/form-data">
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
    <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

@endsection