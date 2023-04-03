@extends('user.layouts.app')
@section('content')

    <!--Swiper Banner Start -->
    @include('user.partials.banner')
    <!--Swiper Banner End-->
    <section class="content-inner-1 overlay-white-middle">
        <div class="container">
            <div class="row about-style1 align-items-center">
                <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row sp10 about-thumb">
                        <div class="col-sm-6 aos-item ">
                            <div class="split-box">
                                <div>
                                    <img class="m-b30" src="{{asset('user/images/about/about1.jpg')}}" alt="/">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="split-box ">
                                <div>
                                    <img class="m-b20 aos-item" src="{{asset('user/images/about/about2.jpg')}}" alt="/">
                                </div>
                            </div>
                            <div class="exp-bx aos-item">
                                <div class="exp-head">
                                    <div class="counter-num">
                                        <h2><span class="counter">50</span><small>+</small></h2>
                                    </div>
                                    <h6 class="title">Years of Experience</h6>
                                </div>
                                <div class="exp-info">
                                    <ul class="list-check primary">
                                        <li>Comics & Graphics</li>
                                        <li>Biography</li>
                                        <li>Literary Collections</li>
                                        <li>Children Fiction</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-content px-lg-4">
                        <div class="section-head style-1">
                            <h2 class="title">Bookland Is Best Choice For Learners</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration which don’t look even slightly believable. It Is A Long Established
                                Fact That A Reader Will Be Distracted</p>
                        </div>
                        <a href="{{route('contact_us')}}" class="btn btn-primary shadow-primary btnhover">Contact Us</a>
                    </div>
                </div>
            </div>
            <!--Client Swiper -->
            <div class="swiper client-swiper mt-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{asset('user/images/client/client1.svg')}}" alt="client"></div>
                    <div class="swiper-slide"><img src="{{asset('user/images/client/client2.svg')}}" alt="client"></div>
                    <div class="swiper-slide"><img src="{{asset('user/images/client/client3.svg')}}" alt="client"></div>
                    <div class="swiper-slide"><img src="{{asset('user/images/client/client4.svg')}}" alt="client"></div>
                    <div class="swiper-slide"><img src="{{asset('user/images/client/client5.svg')}}" alt="client"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-inner-1 bg-grey reccomend ">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Recommended For You</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
            </div>
            <!-- Swiper -->
            <div class="swiper-container swiper-two">
                <div class="swiper-wrapper">
                    @foreach($recommended_books as $book)
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <a href="{{route('book.show',['book'=>$book->id])}}">
                                        <img src="{{$book->image_url}}" alt="book">
                                    </a>
                                </div>
                                <div class="dz-content">
                                    <h4 class="title">{{$book->title}}</h4>
                                    <span class="price">$ {{$book->price}}</span>
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
    <section class="content-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
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
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
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
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
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
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
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

    <!--icon-box3 section-->
    <section class="content-inner-1 bg-light">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Our Mission</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-bx-wraper style-3 m-b30">
                        <div class="icon-lg m-b20">
                            <i class="flaticon-open-book-1 icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h4 class="title">Best Bookstore</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. </p>
                            <a href="{{route('about_us')}}">Learn More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-bx-wraper style-3 m-b30">
                        <div class="icon-lg m-b20">
                            <i class="flaticon-exclusive icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h4 class="title">Trusted Seller</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. </p>
                            <a href="{{route('about_us')}}">Learn More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-bx-wraper style-3 m-b30">
                        <div class="icon-lg m-b20">
                            <i class="flaticon-store icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h4 class="title">Expand Store</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. </p>
                            <a href="{{route('about_us')}}">Learn More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    @foreach($on_sale_books as $book)
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <a href="{{route('book.show',['book'=>$book->id])}}">
                                        <img src="{{$book->image_url}}" alt="book">
                                    </a>
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a
                                            href="{{route('book.show',['book'=>$book->id])}}">{{$book->title}}</a></h5>
                                    <ul class="dz-tags">
                                        @foreach($book->categories as $category)
                                            <li><a href="javascript:">{{$category->name}},</a></li>
                                        @endforeach
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$ {{$book->sale_price}}</span>
                                            <del>$ {{$book->price}}</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Book Sale End -->

    <!-- Special Offer-->
    <section class="content-inner-1">
        <div class="container">
            <div class="section-head book-align">
                <h2 class="title mb-0">Featured Books</h2>
                <div class="pagination-align style-1">
                    <div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                </div>
            </div>
            <div class="swiper-container book-swiper">
                <div class="swiper-wrapper">
                    @foreach($featured_books as $book)
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <a href="{{route('book.show',['book'=>$book->id])}}">
                                        <img src="{{ $book->image_url }}"
                                             alt="/">
                                    </a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a
                                            href="{{route('book.show',['book'=>$book->id])}}">{{ $book->title }}</a>
                                    </h4>
                                    <div class="dz-meta">
                                        <ul class="dz-tags">
                                            @foreach($book->categories as $category)
                                                <li><a href="javascript:">{{$category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="javascript:" class="btn btn-primary m-t15 btnhover btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10 add-to-cart"
                                                data-book="{{$book}}"></i> Add to cart</a>
                                        <div class="price-details">
                                            $ {{$book->sale_price}}
                                            <del>$ {{$book->price}}</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Special Offer End -->

    <!-- Pricing Table -->
    <section class="content-inner bg-light">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Our Pricing</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua</p>
            </div>
            <div class="row pricingtable-wraper">
                <div class="col-md-1">
                </div>
                <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="pricingtable-wrapper mt-0 style-1 m-b30">
                        <div class="pricingtable-inner">
                            <div class="pricingtable-title">
                                <h3 class="title">Basic Plan</h3>
                            </div>
                            <div class="pricingtable-price">
                                <h2 class="pricingtable-bx">$99<small class="pricingtable-type">/Month</small></h2>
                            </div>
                            <p class="text">Aliquam dui lacus, lobortis quis sapien non.</p>
                            <ul class="pricingtable-features">
                                <li>Graphic Design</li>
                                <li>Web Design</li>
                                <li>UI/UX</li>
                                <li>HTML/CSS</li>
                                <li>SEO Marketing</li>
                                <li>Business Analysis</li>
                            </ul>
                            <div class="pricingtable-footer">
                                <a href="javascript:" class="btn btn-primary btnhover3">Start Now <i
                                        class="fa fa-angle-right m-l10"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="pricingtable-wrapper  mt-0 style-1 m-b30">
                        <div class="pricingtable-inner">
                            <div class="pricingtable-title">
                                <h3 class="title">Standart Plan</h3>
                            </div>
                            <div class="pricingtable-price">
                                <h2 class="pricingtable-bx">$199<small class="pricingtable-type">/Month</small></h2>
                            </div>
                            <p class="text">Aliquam dui lacus, lobortis quis sapien non.</p>
                            <ul class="pricingtable-features">
                                <li>Graphic Design</li>
                                <li>Web Design</li>
                                <li>UI/UX</li>
                                <li>HTML/CSS</li>
                                <li>SEO Marketing</li>
                                <li>Business Analysis</li>
                            </ul>
                            <div class="pricingtable-footer">
                                <a href="javascript:" class="btn btn-primary btnhover3">Start Now <i
                                        class="fa fa-angle-right m-l10"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </section>

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
                <div class=" col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
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

@endsection
@push('js')
    <!-- BOOTSTRAP SELECT MIN JS -->
    <script src="{{asset('user/vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('user/vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('user/vendor/wow/wow.min.js')}}"></script><!-- WOW JS -->
    <script src="{{asset('user/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- SWIPER JS -->
    <script src="{{asset('user/js/dz.carousel.js')}}"></script><!-- DZ CAROUSEL JS -->
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
@endpush
