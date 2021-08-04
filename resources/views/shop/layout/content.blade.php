@extends('shop.master')
@section('contents')
    <!-- Start slider -->
{{--    <section id="aa-slider">--}}
{{--        <div class="aa-slider-area">--}}
{{--            <div id="sequence" class="seq">--}}
{{--                <div class="seq-screen">--}}
{{--                    <ul class="seq-canvas">--}}
{{--                        <!-- single slide item -->--}}
{{--                        <li>--}}
{{--                            <div class="seq-model">--}}
{{--                                <img data-seq--}}
{{--                                     src="https://thietbiketnoi.com/wp-content/uploads/2020/01/tong-hop-hinh-nen-background-vector-designer-dep-do-phan-giai-fhd-2k-4k-moi-nhat-4.jpg"--}}
{{--                                     alt="Men slide img"/>--}}
{{--                            </div>--}}
{{--                            <div class="seq-title">--}}
{{--                                <span data-seq>Save Up to 75% Off</span>--}}
{{--                                <h2 data-seq>Men Collection</h2>--}}
{{--                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>--}}
{{--                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- single slide item -->--}}
{{--                        <li>--}}
{{--                            <div class="seq-model">--}}
{{--                                <img data-seq--}}
{{--                                     src="https://thietbiketnoi.com/wp-content/uploads/2020/01/tong-hop-hinh-nen-background-vector-designer-dep-do-phan-giai-fhd-2k-4k-moi-nhat-4.jpg"--}}
{{--                                     alt="Wristwatch slide img"/>--}}
{{--                            </div>--}}
{{--                            <div class="seq-title">--}}
{{--                                <span data-seq>Save Up to 40% Off</span>--}}
{{--                                <h2 data-seq>Wristwatch Collection</h2>--}}
{{--                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>--}}
{{--                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- single slide item -->--}}
{{--                        <li>--}}
{{--                            <div class="seq-model">--}}
{{--                                <img data-seq src="img/slider/3.jpg" alt="Women Jeans slide img"/>--}}
{{--                            </div>--}}
{{--                            <div class="seq-title">--}}
{{--                                <span data-seq>Save Up to 75% Off</span>--}}
{{--                                <h2 data-seq>Jeans Collection</h2>--}}
{{--                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>--}}
{{--                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- single slide item -->--}}
{{--                        <li>--}}
{{--                            <div class="seq-model">--}}
{{--                                <img data-seq src="img/slider/4.jpg" alt="Shoes slide img"/>--}}
{{--                            </div>--}}
{{--                            <div class="seq-title">--}}
{{--                                <span data-seq>Save Up to 75% Off</span>--}}
{{--                                <h2 data-seq>Exclusive Shoes</h2>--}}
{{--                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>--}}
{{--                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- single slide item -->--}}
{{--                        <li>--}}
{{--                            <div class="seq-model">--}}
{{--                                <img data-seq src="img/slider/5.jpg" alt="Male Female slide img"/>--}}
{{--                            </div>--}}
{{--                            <div class="seq-title">--}}
{{--                                <span data-seq>Save Up to 50% Off</span>--}}
{{--                                <h2 data-seq>Best Collection</h2>--}}
{{--                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>--}}
{{--                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!-- slider navigation btn -->--}}
{{--                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">--}}
{{--                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>--}}
{{--                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>--}}
{{--                </fieldset>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- / slider -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                                    <li><a href="#women" data-toggle="tab">Women</a></li>
                                    <li><a href="#sports" data-toggle="tab">Sports</a></li>
                                    <li><a href="#electronics" data-toggle="tab">Electronics</a></li>
                                </ul>
                                <!-- Tab panes -->
                                {{--                            /* content */--}}
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    <div class="tab-pane fade in active" id="men11">
                                        @foreach($foods as $food)

                                            <ul class="aa-product-catg">

                                                <!-- start single product item -->
                                                <li>
                                                    <figure>
{{--                                                        <img src="{{asset('storage/'.$food->image)}}" style="width: 250px;height: 300px" alt="polo shirt img">--}}
                                                        <img src="{{asset('storage/images/ILc7AJgXk15lUT0lDnZOCJZxtKat0CnLCgGasSXS.jpg')}}" style="width: 250px;height: 300px" alt="polo shirt img">
                                                        <a class="aa-add-card-btn addToCart" cart="{{$food->id}}">
                                                            <span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4>{{$food->name}}</h4>
                                                            <span class="aa-product-price">{{$food->price}}</span>
                                                            <span class="aa-product-price">$</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                           title="Add to Wishlist">
                                                            <span class="far fa-heart"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                           title="Compare">
                                                            <span class="fas fa-exchange-alt"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                           title="Quick View" data-toggle="modal"
                                                           data-target="#quick-view-modal">
                                                            <span class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-sale">SALE!</span>
                                                </li>
                                            </ul>
                                        @endforeach
{{--                                        <a class="aa-browse-btn" href="#">Browse all Product <span--}}
{{--                                                class="fa fa-long-arrow-right"></span></a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--view detail--}}
    <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="row">
                        <!-- Modal view slider -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="aa-product-view-slider">
                                <div class="simpleLens-gallery-container" id="demo-1">
                                    <div class="simpleLens-container">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="simpleLens-thumbnails-container">
                                        <a href="#" class="simpleLens-thumbnail-wrapper"
                                           data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                           data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                            <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                        </a>
                                        <a href="#" class="simpleLens-thumbnail-wrapper"
                                           data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                           data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                            <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                        </a>

                                        <a href="#" class="simpleLens-thumbnail-wrapper"
                                           data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                           data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                            <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal view content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="aa-product-view-content">
                                <h3>T-Shirt</h3>
                                <div class="aa-price-block">
                                    <span class="aa-product-view-price">$34.99</span>
                                    <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Size</h4>
                                <div class="aa-prod-view-size">
                                    <a href="#">S</a>
                                    <a href="#">M</a>
                                    <a href="#">L</a>
                                    <a href="#">XL</a>
                                </div>
                                <div class="aa-prod-quantity">
                                    <form action="">
                                        <select name="" id="">
                                            <option value="0" selected="1">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                            <option value="4">5</option>
                                            <option value="5">6</option>
                                        </select>
                                    </form>
                                    <p class="aa-prod-category">
                                        Category: <a href="#">Polo T-Shirt</a>
                                    </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                    <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                    <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- / quick view modal -->
@endsection
