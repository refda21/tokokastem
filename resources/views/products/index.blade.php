@extends('layouts.master')

@section('title','Homepage')

@section('slider')
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="img/slider/1.jpg" alt="Men slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>TSHIRT</span>
                            <h2 data-seq>Disc up to 40%</h2>
{{--                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="img/slider/2.jpg" alt="Wristwatch slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>MUG</span>
                            <h2 data-seq>Disc up to 70%</h2>
{{--                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="img/slider/3.jpg" alt="Women Jeans slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>TOTEBAG</span>
                            <h2 data-seq>Disc up to 50%</h2>
{{--                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="img/slider/4.jpg" alt="Shoes slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>MASK</span>
                            <h2 data-seq>Save Up to 75% Off</h2>
{{--                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="img/slider/5.jpg" alt="Male Female slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>TAS</span>
                            <h2 data-seq>Save Up to 80% Off</h2>
{{--                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
                        </div>
                    </li>
                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
@endsection

@section('populer')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">Mask</a></li>
                            <li><a href="#featured" data-toggle="tab">Totebag</a></li>
                            <li><a href="#latest" data-toggle="tab">Mug</a></li>
                            <li><a href="#latest" data-toggle="tab">Tshirt</a></li>
                            <li><a href="#latest" data-toggle="tab">Tas</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="/products"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="/detail"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="/detail"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                        </figure>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                            <span class="aa-product-price">$45.50</span>
                                        </figcaption>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="/detail"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="/detail"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                    </li>

                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="/detail"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lo</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="/detail"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="/detail"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                </ul>
                                <a class="aa-browse-btn" href="/products/custom">Custom Product Now! <span class=""></span></a>


                            </div>
                            <!-- / popular product category -->

                            <!-- start featured product category -->
                            <div class="tab-pane fade" id="featured">
                                <ul class="aa-product-catg aa-featured-slider">
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="/products"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                        </figure>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                            <span class="aa-product-price">$45.50</span>
                                        </figcaption>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                </ul>
                                <a class="aa-browse-btn" href="#">Custom Product Now<span class="fa fa-long-arrow-right"></span></a>
                            </div>
                            <!-- / featured product category -->

                            <!-- start latest product category -->
                            <div class="tab-pane fade" id="latest">
                                <ul class="aa-product-catg aa-latest-slider">
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                        </figure>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                        </figure>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                            <span class="aa-product-price">$45.50</span>
                                        </figcaption>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>

                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>

                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>

                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>

                                        <!-- product badge -->
                                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                                    </li>
                                    <!-- start single product item -->
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Checkout</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                                                <span class="aa-product-price">$45.50</span><span
                                                    class="aa-product-price"><del>$65.50</del></span>
                                            </figcaption>
                                        </figure>

                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                </ul>
                                <a class="aa-browse-btn" href="#">Custom Product Now<span class="fa fa-long-arrow-right"></span></a>

                            </div>
                            <!-- / latest product category -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('support1')
@endsection

@section('support2')
@endsection


