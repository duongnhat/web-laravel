@extends('master')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
<form action="http://truongnhat.com/admin/tools/save-product" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Tên sản phẩm</label>
      <input type="text" class="form-control is-valid" id="validationServer01" name="name" value="{{$data->name}}" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Mô tả sản phẩm</label>
      <input type="text" class="form-control is-valid" id="validationServer02" name="description" value="{{$data->description}}" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Đơn giá</label>
      <input type="number" class="form-control is-valid" id="validationServer02" name="unit_price" value="{{$data->unit_price}}" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Giá khuyến mãi</label>
      <input type="number" class="form-control is-valid" id="validationServer02" name="promotion_price" value="{{$data->promotion_price}}">
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Đơn vị</label>
      <input type="text" class="form-control is-valid" id="validationServer02" name="unit" value="{{$data->unit}}" required>
      <div class="valid-feedback">
      </div>
    </div>
  </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
  </div>
<input type="hidden" name="id" value="{{$data->id}}">
<input type="hidden" name="image" value="{{$data->image}}">
  <button class="btn btn-primary" type="submit">Edit</button>
</form>
</div>
    </div>
  
    


@endsection