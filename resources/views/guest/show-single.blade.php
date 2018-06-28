@extends('master')
@section('content')


        <section class="section cb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tagline-message page-title">
                            <h3>Single Shop</h3>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="breadcrumb">
                            <li><a href="javascript:void(0)">Edulogy</a></li>
                            <li class="active">Shop</li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section">
            <div class="container">
                <div class=" ">
                    <div class="row">
                        <div class="col-md-6 shop-media">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="image-wrap entry">
                                    <img src="/image product/{{$data->image}}" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="/image product/{{$data->image}}" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="image-wrap entry">
                                        <img src="/image product/{{$data->image}}" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <a rel="prettyPhoto[inline]" href="/image product/{{$data->image}}" title=""><i class="flaticon-add"></i></a>
                                        </div>
                                    </div><!-- end image-wrap -->
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="image-wrap entry">
                                        <img src="/image product/{{$data->image}}" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <a rel="prettyPhoto[inline]" href="/image product/{{$data->image}}" title=""><i class="flaticon-add"></i></a>
                                        </div>
                                    </div><!-- end image-wrap -->
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="image-wrap entry">
                                        <img src="/image product/{{$data->image}}" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <a rel="prettyPhoto[inline]" href="/image product/{{$data->image}}" title=""><i class="flaticon-add"></i></a>
                                        </div>
                                    </div><!-- end image-wrap -->
                                </div>
                            </div><!-- end row -->
                        </div><!-- end col -->

                        <div class="col-md-6">
                            <div class="shop-desc">
                                <h3>{{$data->name}}</h3>
                                <small><h4>Giá:</h4>{{number_format($data->unit_price)}}đ</small>
                                <p>{{$data->description}}</p>
                                <div class="shop-meta">
                                    <a href="/guest/giohang/{{$data->id}}" class="btn btn-primary">Add to Cart</a>
                                    <ul class="list-inline">
                                        <li> SKU: product-{{$data->id}}</li>
                                        <li>Categories: <a href="#">Bags</a>
                                    </ul>
                                </div><!-- end shop meta -->
                            </div><!-- end desc -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="row">   
                        <div class="col-md-12">
                            <div class="shop-extra">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Additional information</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Reviews (2)</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <p>Suspendisse tristique porttitor magna, ac pulvinar libero lobortis at. Quisque sit amet facilisis eros. Vestibulum id ligula elementum, rutrum nunc sit amet, vulputate diam. Phasellus finibus mauris leo, quis commodo elit pellentesque quis. Phasellus a justo in enim maximus dictum nec interdum erat. Integer varius justo id nunc vulputate scelerisque. Curabitur maximus tristique magna. Nulla ut laoreet turpis, vel porta mauris. Suspendisse et varius orci, eget ullamcorper lacus. Duis accumsan odio at elit facilisis semper.</p>

                                        <p>Phasellus finibus mauris leo, quis commodo elit pellentesque quis. Phasellus a justo in enim maximus dictum nec interdum erat. Integer varius justo id nunc vulputate scelerisque. Curabitur maximus tristique magna. Nulla ut laoreet turpis, vel porta mauris. Suspendisse et varius orci, eget ullamcorper lacus. Duis accumsan odio at elit facilisis semper.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h3>Additional information</h3>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Weight</strong></td>
                                                    <td>4.5 kg</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Colors</strong></td>
                                                    <td>Brown, Black</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Size</strong></td>
                                                    <td>50cm x 30cm</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h3>Reviews</h3>

                                        <p>Your email address will not be published. Required fields are marked *</p>

                                        <div class="rating">
                                            <p>Your Rating</p>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>

                                        <hr class="invis">
                                    
                                        <form class="big-contact-form row" role="search">
                                            <div class="col-md-12">
                                                <textarea class="form-control" placeholder="Your reviews.."></textarea>
                                            </div>              
                                            <div class="col-md-6">   
                                                <input type="text" class="form-control" placeholder="Enter your name..">
                                            </div>     
                                            <div class="col-md-6">   
                                                <input type="email" class="form-control" placeholder="Enter email..">
                                            </div>             
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>              
                                        </form>
                                    </div>
                                </div>
                            </div><!-- end shop-extra -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="related-products">
                        <div class="text-widget">
                            <h3>Sản phẩm liên quan</h3>
                        </div><!-- end title -->        

                        <div class="row blog-grid shop-grid">
                        	@foreach($them as $value)
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
                                                <li><a href="#"><i class="fa fa-shopping-basket"></i> Add Cart</a></li>
                                            </ul>
                                        </div><!-- end left -->

                                        <div class="pull-right">
                                            <ul class="list-inline">
                                                <li><a href="#">{{number_format($value->unit_price)}}đ</a></li>
                                            </ul>
                                        </div><!-- end left -->
                                    </div><!-- end footer -->
                                </div><!-- end box -->
                            </div>
                           @endforeach
                        </div><!-- end row -->
                    </div><!-- end related -->
                </div><!-- end boxed -->
            </div><!-- end container -->
        </section>

@endsection