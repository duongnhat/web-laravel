@extends('master')
@section('content')


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Giỏ hàng</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="http://truongnhat.com/guest/capnhatsp" enctype="multipart/form-data">

                            <h1>Giỏ hàng</h1> <?php $b=0 ?> @foreach(Session::get('giohang') as $value) $b=$value+$b @endforeach
                            <p class="text-muted">Bạn có {{$b}} món trong giỏ hàng.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            <th>Giảm giá</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody> <?php $a=0 ?>
                                    	@foreach($data as $value)
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="/imagee product/{{$value->image}}" alt="không có ảnh">
                                                </a>
                                            </td>
                                            <td><a href="/guest/chitiet/{{$value->id}}">{{$value->name}}</a>
                                            </td>
                                            <td>
                                                <input type="number" value="{{Session::get('giohang')[$value->id]}}" name="{{$value->id}}" class="form-control">
                                            </td>
                                            <td>{{number_format($value->unit_price)}}đ</td>
                                            <td>$0.00</td>
                                            <td>{{number_format($value->unit_price*Session::get('giohang')[$value->id])}}đ</td>
                                            <td><a href="/guest/delete/{{$value->id}}"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr> 
                                        <?php $a=$a + $value->unit_price*Session::get('giohang')[$value->id] ?>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">{{number_format($a)}}đ</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="/guest/sanpham" class="btn btn-default"><i class="fa fa-chevron-left"></i> Tiếp tục mua sắm</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-refresh"></i> Cập nhật đơn hàng</button>
                                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->


                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h3>You may also like these products</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="img/product1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>

                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                    </div>


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Tóm tắt theo thứ tự</h3>
                        </div>
                        <p class="text-muted">Chi phí giao hàng và chi phí bổ sung được tính dựa trên các giá trị bạn đã nhập.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Tổng phụ đặt hàng</td>
                                        <th>{{number_format($a)}}đ</th>
                                    </tr>
                                    <tr>
                                        <td>Vận chuyển và xử lý</td>
                                        <th>0đ</th>
                                    </tr>
                                    <tr>
                                        <td>VAT</td>
                                        <th>{{number_format($a*0.1)}}đ</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>{{number_format($a+$a*0.1)}}đ</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                    <div class="box">
                        <div class="box-header">
                            <h4>Coupon code</h4>
                        </div>
                        <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

					<button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

				    </span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>

@endsection