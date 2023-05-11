@extends('user.layouts.app')
@section('content')

    <!--Swiper Banner Start -->
    @include('user.partials.banner')
    <!--Swiper Banner End-->

    <!--Recommend Section Start-->
    <section class="content-inner-1 bg-grey reccomend">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Recommended For You</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris</p>
            </div>
            <!-- Swiper -->
            <div class="swiper-container swiper-two">
                <div class="swiper-wrapper">
                    @foreach($recommended_books as $book)
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{$book->image_url}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h4 class="title">{{$book->title}}</h4>
                                    <span class="price">{{$book->price}}</span>
                                    <a href="javascript:" data-book="{{$book}}"
                                       class="btn btn-secondary btnhover btnhover2 add-to-cart">
                                        <i class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                    @foreach($featured_books as $book)
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{$book->image_url}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">{{str()->words($book->title,2,'..')}}</h2>
                                    {{--<ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>--}}
                                    <p class="text">{{ str()->words($book->description,15,'....') }}</p>
                                    <div class="price">
                                        <span class="price-num">{{$book->price}}</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="javascript:" class="btn btn-primary btnhover m-t15 m-r10 add-to-cart"
                                           data-book="{{$book}}">Add To Card</a>
                                        {{--<a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
    <!-- Special Offer End -->

    <!-- Testimonial -->
    <!-- Testimonial End -->

    <!-- Latest News -->
    {{--    @todo show blog list here --}}
    {{--<section class="content-inner-2">
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
    </section>--}}
    <!-- Latest News End -->

    <!-- Feature Box -->
    <!-- Feature Box End -->

    <!-- Newsletter -->
    <section class="py-5 newsletter-wrapper"
             style="background-image: url('{{asset('user/images/background/bg1.jpg')}}'); background-size: cover;">
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

@endsection

@push('js')
    <script src="{{asset('user/vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('user/vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('user/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- SWIPER JS -->
    <script src="{{asset('user/js/dz.carousel.js')}}"></script><!-- DZ CAROUSEL JS -->
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
@endpush

