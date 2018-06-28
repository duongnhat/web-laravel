@extends('master')
@section('content')

        <section class="section lb p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Shopping</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Edulogy</a></li>
                                <li class="active">Shop</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="shop-top">
                        <div class="clearfix">
                            <div class="pull-left">
                                <p> Hiển thị trong số {{$soluong}} sản phẩm</p>
                            </div>
                            <div class="pull-right">
                            <select class="selectpicker">
                                <option>Price - High to Low</option>
                                <option>Price - Low to High</option>
                                <option>Newest Items</option>
                                <option>Older Items</option>
                            </select>
                            </div>
                        </div>
                    </div>
                
                    <div class="row blog-grid shop-grid">
                        @foreach($data as $value)
                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="/image product/{{$value->image}}" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="/guest/chitiet/{{$value->id}}" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="/guest/chitiet/{{$value->id}}" title="">{{$value->name}}</a>
                                        <small>Bags</small>
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="/guest/giohang/{{$value->id}}"><i class="fa fa-shopping-basket"></i> Add Cart</a></li>
                                        </ul>
                                    </div><!-- end left -->

                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            <li><a href="#">{{number_format($value->unit_price)}}đ</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                       @endforeach
                       
                    </div><!-- end row -->
                {!! $data->links() !!}

                    <hr class="invis">

                    
                </div>
            </div><!-- end container -->
        </section>

@endsection