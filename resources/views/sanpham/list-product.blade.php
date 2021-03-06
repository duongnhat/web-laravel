@extends('adminPage')
@section('content')


    @csrf
      <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Bảng
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách sản phẩm</div>
        <div class="card-body">
          <div class="table-responsive"> 

@foreach($data as $value)
@if(Auth::check() && ($quyen == 'checked'))
    <a href="/admin/tools/edit-product/{{$value->id}}"> 
@endif

  <figure class="figure" id="tooltipp" title="thong tin" data-toggle="tooltip" data-placement="top">
    <img id="hinhanh" onmouseover="inf(this)" data-noidung="{{$value->description}}" onmouseout="unshow()" src="/image product/{{$value->image}}" class="figure-img img-fluid rounded" alt="khong co anh" width="320px" height="240px">
        <figcaption class="figure-caption">{{$value->name}}  giá: {{$value->unit_price}}đ</figcaption>
    </figure> 
@if(Auth::check() && ($quyen == 'checked'))
  </a>
@endif
@endforeach

                    </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
          </div>
          {!! $data->links() !!}
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <div id="showinfor"></div> 
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="vendor/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="vendor/js/sb-admin-datatables.min.js"></script>
    <script language="javascript">
            // Lấy đối tượng
            function inf(a){
              
              $('#showinfor').html($(a).attr('data-noidung'));
              $('#showinfor').fadeIn();
              //document.getElementById("showinfor").style.display = 'block';
              //$('#hinhanh').css('width', '350px');

            };
            function unshow(){
              document.getElementById("showinfor").style.display = 'none';
              //$('#hinhanh').css('width', '320px');
            };
            
            $('.figure').mousemove(function(event){
              var moveX = (($(window).width()) - event.pageX);
              var moveY = (($(window).height()) - event.pageY);

             $('#showinfor').css('margin-left', (-moveX + 930) + 'px');
             $('#showinfor').css('margin-top', (-moveY +350) + 'px');
             //$('#showinfor').css('margin-left', (event.pageX) + 'px');
             //$('#showinfor').css('margin-top', (event.pageY) + 'px');
            });
            $(document).ready(function(){
              $('#tooltipp').tooltip({
              track:true
              });
              $('[data-toggle="tooltip"]').tooltip();
            });
              
        </script>

@endsection