<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 07:38:28 GMT -->
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content="DexignZone"/>
    <meta name="robots" content=""/>
    <meta name="description" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html"/>
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png"/>

    <!-- PAGE TITLE HERE -->
    <title>Bookland Book Store Ecommerce Website</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/icons/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/style.css')}}">

    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

</head>
<body>

<div class="page-wraper">
    <div id="loading-area" class="preloader-wrapper-1">
        <div class="preloader-inner">
            <div class="preloader-shade"></div>
            <div class="preloader-wrap"></div>
            <div class="preloader-wrap wrap2"></div>
            <div class="preloader-wrap wrap3"></div>
            <div class="preloader-wrap wrap4"></div>
            <div class="preloader-wrap wrap5"></div>
        </div>
    </div>

    <!-- Header -->
    @include('user.partials.header')
    <!-- Header End -->

    <div class="page-content bg-white">

        <!--Swiper Banner Start -->
        @include('user.partials.banner')
        <!--Swiper Banner End-->

        <!-- Client Start-->
        <div class="bg-white py-5">
            <div class="container">
                <!--Client Swiper -->
                <div class="swiper client-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset('user/images/client/client1.svg')}}" alt="client">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('user/images/client/client2.svg')}}" alt="client">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('user/images/client/client3.svg')}}" alt="client">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('user/images/client/client4.svg')}}" alt="client">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('user/images/client/client5.svg')}}" alt="client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client End-->

        <!--Recommend Section Start-->
        <section class="content-inner-1 bg-grey reccomend">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">Recomended For You</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris</p>
                </div>
                <!-- Swiper -->
                <div class="swiper-container swiper-two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book6.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h4 class="title">Adventure</h4>
                                    <span class="price">$18,78</span>
                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i
                                            class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book5.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h4 class="title">Take Tango</h4>
                                    <span class="price">$18,78</span>
                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i
                                            class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book2.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h4 class="title">Home</h4>
                                    <span class="price">$18,78</span>
                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i
                                            class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book16.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h4 class="title">Thunder Stunt</h4>
                                    <span class="price">$18,78</span>
                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i
                                            class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book14.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h4 class="title">Heavy Lift</h4>
                                    <span class="price">$18,78</span>
                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i
                                            class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book1.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h4 class="title">Real Life</h4>
                                    <span class="price">$18,78</span>
                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i
                                            class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book15.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h4 class="title">Terrible</h4>
                                    <span class="price">$18,78</span>
                                    <a href="shop-cart.html" class="btn btn-secondary btnhover btnhover2"><i
                                            class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- icon-box1 -->
        <section class="content-inner-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bx-wraper style-1 m-b20 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-power icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Quick Delivery</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper style-1 m-b20 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-shield icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Secure Payment</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon-bx-wraper style-1 m-b20 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-like icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Best Quality</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-bx-wraper style-1 m-b20 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-star icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Return Guarantee</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- icon-box1 End-->

        <!-- Book Sale -->
        <section class="content-inner-1">
            <div class="container">
                <div class="section-head book-align">
                    <h2 class="title mb-0">Books on Sale</h2>
                    <div class="pagination-align style-1">
                        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="swiper-pagination-two"></div>
                        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                <div class="swiper-container books-wrapper-3 swiper-four">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book5.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Take Out Tango</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book11.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">The Missadventure</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book7.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Seconds [PART 1]</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book12.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">The Missadventure</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book15.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Terrible Madness</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/grid/book3.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Battle Drive</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Book Sale End -->

        <!-- Feature Product -->
        <section class="content-inner-1 bg-grey reccomend">
            <div class="container">
                <div class="section-head text-center">
                    <div class="circle style-1"></div>
                    <h2 class="title">Featured Product</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris </p>
                </div>
            </div>
            <div class="container">
                <div class="swiper-container books-wrapper-2 swiper-three">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/large/bigbook1.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/large/bigbook2.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/large/bigbook1.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/large/bigbook2.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/large/bigbook1.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('user/images/books/large/bigbook2.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-align style-2">
                        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="swiper-pagination-three"></div>
                        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Product End -->

        <!-- Special Offer-->
        <section class="content-inner-2">
            <div class="container">
                <div class="section-head book-align">
                    <h2 class="title mb-0">Special Offers</h2>
                    <div class="pagination-align style-1">
                        <div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                <div class="swiper-container book-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('user/images/blog/blog5.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">SECONDS [Part I]</a></h4>
                                    <div class="dz-meta">
                                        <ul class="dz-tags">
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('user/images/blog/blog6.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">Terrible Madness</a></h4>
                                    <div class="dz-tags">
                                        <ul>
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('user/images/blog/blog7.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">REWORK</a></h4>
                                    <div class="dz-tags">
                                        <ul>
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('user/images/blog/blog5.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">SECONDS [Part I]</a></h4>
                                    <div class="dz-tags">
                                        <ul>
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('user/images/blog/blog6.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">Terrible Madness</a></h4>
                                    <div class="dz-tags">
                                        <ul>
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('user/images/blog/blog7.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">REWORK</a></h4>
                                    <div class="dz-tags">
                                        <ul>
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Special Offer End -->

        <!-- Testimonial -->
        <section class="content-inner-2 testimonial-wrapper">
            <div class="container">
                <div class="testimonial">
                    <div class="section-head book-align">
                        <div>
                            <h2 class="title mb-0">Testimonials</h2>
                            <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="pagination-align style-1">
                            <div class="testimonial-button-prev swiper-button-prev"><i
                                    class="fa-solid fa-angle-left"></i></div>
                            <div class="testimonial-button-next swiper-button-next"><i
                                    class="fa-solid fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a
                                        breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('user/images/testimonial/testimonial1.jpg')}}" alt="">
                                    </div>
                                    <div class="info-right">
                                        <h6 class="testimonial-name">Jason Huang</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a
                                        breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('user/images/testimonial/testimonial2.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Miranda Lee</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a
                                        breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('user/images/testimonial/testimonial3.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Steve Henry</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Thank you for filling a niche at an affordable price. Your book was just what I
                                        was looking for. Thanks again</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('user/images/testimonial/testimonial4.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Angela Moss</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a
                                        breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('user/images/testimonial/testimonial2.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Miranda Lee</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a
                                        breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('user/images/testimonial/testimonial1.jpg')}}" alt="">
                                    </div>
                                    <div class="info-right">
                                        <h6 class="testimonial-name">Jason Huang</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- Latest News -->
        <section class="content-inner-2">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">Latest News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua</p>
                </div>
                <div class="swiper-container blog-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img src="{{asset('user/images/blog/grid/blog4.jpg')}}"
                                                                    alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy,
                                            Intelligent</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
                                        tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>24 March,
                                                2022
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img src="{{asset('user/images/blog/grid/blog3.jpg')}}"
                                                                    alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">10 Things you must know to improve your reading
                                            skills</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
                                        tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>18 July,
                                                2022
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img src="{{asset('user/images/blog/grid/blog2.jpg')}}"
                                                                    alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy,
                                            Intelligent</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
                                        tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 June,
                                                2022
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img src="{{asset('user/images/blog/grid/blog1.jpg')}}"
                                                                    alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">We Must know why reading is important for
                                            children?</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
                                        tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>30 May,
                                                2022
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest News End -->

        <!-- Feature Box -->
        <section class="content-inner">
            <div class="container">
                <div class="row sp15">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-users icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">125,663</h2>
                                <p class="font-20">Happy Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-book icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">50,672</h2>
                                <p class="font-20">Book Collections</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-store icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">1,562</h2>
                                <p class="font-20">Our Stores</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-leaf icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">457</h2>
                                <p class="font-20">Famous Writers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Box End -->

        <!-- Newsletter -->
        <section class="py-5 newsletter-wrapper"
                 style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
            <div class="container">
                <div class="subscride-inner">
                    <div
                        class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                        <div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="section-head mb-0">
                                <h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books
                                    updates</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                            <form class="dzSubscribe style-1"
                                  action="https://bookland.dexignzone.com/xhtml/script/mailchamp.php" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group mb-0">
                                        <input name="dzEmail" required="required" type="email"
                                               class="form-control bg-transparent text-white"
                                               placeholder="Your Email Address">
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit"
                                                    class="btn btn-primary btnhover">
                                                <span>SUBSCRIBE</span>
                                                <i class="fa-solid fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter End -->

    </div>

    <!-- Footer -->
    <footer class="site-footer style-1">
        <!-- Footer Category -->
        <div class="footer-category">
            <div class="container">
                <div class="category-toggle">
                    <a href="javascript:void(0);" class="toggle-btn">Books categories</a>
                    <div class="toggle-items row">
                        <div class="footer-col-book">
                            <ul>
                                <li><a href="books-grid-view.html">Architecture</a></li>
                                <li><a href="books-grid-view.html">Art</a></li>
                                <li><a href="books-grid-view.html">Action</a></li>
                                <li><a href="books-grid-view.html">Biography</a></li>
                                <li><a href="books-grid-view.html">Body, Mind & Spirit</a></li>
                                <li><a href="books-grid-view.html">Business & Economics</a></li>
                                <li><a href="books-grid-view.html">Children Fiction</a></li>
                                <li><a href="books-grid-view.html">Children Non-Fiction</a></li>
                                <li><a href="books-grid-view.html">Comics & Graphics</a></li>
                                <li><a href="books-grid-view.html">Cooking</a></li>
                                <li><a href="books-grid-view.html">Crafts & Hobbies</a></li>
                                <li><a href="books-grid-view.html">Design</a></li>
                                <li><a href="books-grid-view.html">Drama</a></li>
                                <li><a href="books-grid-view.html">Education</a></li>
                                <li><a href="books-grid-view.html">Family & Relationships</a></li>
                                <li><a href="books-grid-view.html">Fiction</a></li>
                                <li><a href="books-grid-view.html">Foreign Language</a></li>
                                <li><a href="books-grid-view.html">Games</a></li>
                                <li><a href="books-grid-view.html">Gardening</a></li>
                                <li><a href="books-grid-view.html">Health & Fitness</a></li>
                                <li><a href="books-grid-view.html">History</a></li>
                                <li><a href="books-grid-view.html">House & Home</a></li>
                                <li><a href="books-grid-view.html">Humor</a></li>
                                <li><a href="books-grid-view.html">Literary Collections</a></li>
                                <li><a href="books-grid-view.html">Mathematics</a></li>
                                <li><a href="books-grid-view.html">Medical</a></li>
                                <li><a href="books-grid-view.html">Nature</a></li>
                                <li><a href="books-grid-view.html">Performing Arts</a></li>
                                <li><a href="books-grid-view.html">Pets</a></li>
                                <li><a href="books-grid-view.html">Show others</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Category End -->

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="widget widget_about">
                            <div class="footer-logo logo-white">
                                <a href="index.html"><img src="{{asset('user/images/logo.png')}}" alt=""></a>
                            </div>
                            <p class="text">Bookland is a Book Store Ecommerce Website Template by DexignZone lorem
                                ipsum dolor sit</p>
                            <div class="dz-social-icon style-1">
                                <ul>
                                    <li><a href="https://www.facebook.com/dexignzone" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCGL8V6uxNNMRrk3oZfVct1g"
                                           target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="https://www.linkedin.com/showcase/3686700/admin/" target="_blank"><i
                                                class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/website_templates__/" target="_blank"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="widget widget_services">
                            <h5 class="footer-title">Our Links</h5>
                            <ul>
                                <li><a href="about-us.html">About us</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="pricing.html">Pricing Table</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="widget widget_services">
                            <h5 class="footer-title">Bookland ?</h5>
                            <ul>
                                <li><a href="index.html">Bookland</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="books-detail.html">Book Details</a></li>
                                <li><a href="blog-detail.html">Blog Details</a></li>
                                <li><a href="books-grid-view.html">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="widget widget_services">
                            <h5 class="footer-title">Resources</h5>
                            <ul>
                                <li><a href="services.html">Download</a></li>
                                <li><a href="help-desk.html">Help Center</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="shop-login.html">Login</a></li>
                                <li><a href="about-us.html">Partner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="widget widget_getintuch">
                            <h5 class="footer-title">Get in Touch With Us</h5>
                            <ul>
                                <li>
                                    <i class="flaticon-placeholder"></i>
                                    <span>832  Thompson Drive, San Fransisco CA 94107,US</span>
                                </li>
                                <li>
                                    <i class="flaticon-phone"></i>
                                    <span>+123 345123 556<br>
									+123 345123 556</span>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <span>support@bookland.id<br>
									info@bookland.id</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row fb-inner">
                    <div class="col-lg-6 col-md-12 text-start">
                        <p class="copyright-text">Bookland Book Store Ecommerce Website - © 2022 All Rights Reserved</p>
                    </div>
                    <div class="col-lg-6 col-md-12 text-end">
                        <p>Made with <span class="heart"></span> by <a href="https://dexignzone.com/">DexignZone</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

    </footer>
    <!-- Footer End -->

    <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('user/js/jquery.min.js')}}"></script><!-- JQUERY MIN JS -->
<script src="{{asset('user/vendor/wow/wow.min.js')}}"></script><!-- WOW JS -->
<script src="{{asset('user/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script><!-- BOOTSTRAP MIN JS -->
<script src="{{asset('user/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<!-- BOOTSTRAP SELECT MIN JS -->
<script src="{{asset('user/vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('user/vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('user/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- SWIPER JS -->
<script src="{{asset('user/js/dz.carousel.js')}}"></script><!-- DZ CAROUSEL JS -->
<script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
<script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 07:38:31 GMT -->
</html>
