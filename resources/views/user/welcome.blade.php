@extends('user.layouts.app')
@section('content')

    <!--Swiper Banner Start -->
    @include('user.partials.banner')
    <!--Swiper Banner End-->
    @include('user.partials.contact_us_component')

    <section class="content-inner-1 bg-light">
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
                                    <p>{{str()->words($book->description,15,'....')}}</p>
                                    <div class="bookcard-footer">
                                        <a href="javascript:"
                                           class="btn btn-primary m-t15 btnhover btnhover2 buy-btn cart-btn-{{$book->id}}"
                                           data-book="{{$book}}">
                                            <i class="flaticon-shopping-cart-1 m-r10"></i> Buy</a>

                                        <a href="{{route('book.checkout')}}"
                                           style="display: none"
                                           class="btn btn-primary m-t15 btnhover btnhover2 checkout-btn-{{$book->id}}">
                                            <i class="flaticon-shopping-cart-1 m-r10"></i>Checkout</a>

                                        <div class="price-details">
                                            $ {{$book->sale_price}}
                                            @if($book->sale_price!=$book->price)
                                                <del>$ {{$book->price}}</del>
                                            @endif
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

    {{--    <section class="content-inner-1 bg-grey reccomend ">--}}
    {{--        <div class="container">--}}
    {{--            <div class="section-head text-center">--}}
    {{--                <h2 class="title">Recommended For You</h2>--}}
    {{--                <p>{{$header_project_settings->details->recommended_for_you_description??''}}</p>--}}
    {{--            </div>--}}
    {{--            <!-- Swiper -->--}}
    {{--            <div class="swiper-container swiper-two">--}}
    {{--                <div class="swiper-wrapper">--}}
    {{--                    @foreach($recommended_books as $book)--}}
    {{--                        <div class="swiper-slide">--}}
    {{--                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">--}}
    {{--                                <div class="dz-media">--}}
    {{--                                    <a href="{{route('book.show',['book'=>$book->id])}}">--}}
    {{--                                        <img class="book-image" src="{{$book->image_url}}" alt="book">--}}
    {{--                                    </a>--}}
    {{--                                </div>--}}
    {{--                                <div class="dz-content">--}}
    {{--                                    <h4 class="title" data-bs-toggle="tooltip" data-bs-placement="top"--}}
    {{--                                        title="{{$book->title}}">{{str()->words($book->title,2)}}</h4>--}}
    {{--                                    <span class="price">$ {{$book->price}}</span>--}}

    {{--                                    <a href="javascript:" data-book="{{$book}}"--}}
    {{--                                       class="btn btn-secondary btnhover btnhover2 buy-btn cart-btn-{{$book->id}}">--}}
    {{--                                        <i class="flaticon-shopping-cart-1 m-r10"></i> Buy</a>--}}

    {{--                                    <a href="{{route('book.checkout')}}"--}}
    {{--                                       style="display: none"--}}
    {{--                                       class="btn btn-secondary box-btn btnhover btnhover2 checkout-btn-{{$book->id}}">--}}
    {{--                                        <i class="flaticon-shopping-cart-1 m-r10"></i> Checkout</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

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
                            <h5 class="dz-title m-b10">{{$header_project_settings->details->feature_1_headline??''}}</h5>
                            <p>{{$header_project_settings->details->feature_1_headline_description??''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-shield icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">{{$header_project_settings->details->feature_2_headline??''}}</h5>
                            <p>{{$header_project_settings->details->feature_2_headline_description??''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-like icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">{{$header_project_settings->details->feature_3_headline??''}}</h5>
                            <p>{{$header_project_settings->details->feature_3_headline_description??''}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-bx-wraper style-1 m-b30 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-star icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">{{$header_project_settings->details->feature_4_headline??''}}</h5>
                            <p>{{$header_project_settings->details->feature_4_headline_description??''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- icon-box1 End-->

    <!--icon-box3 section-->
    @include('user.partials.our_mission_component')

    <!-- Book Sale -->
    {{--    <section class="content-inner-1">--}}
    {{--        <div class="container">--}}
    {{--            <div class="section-head book-align">--}}
    {{--                <h2 class="title mb-0">Books on Sale</h2>--}}
    {{--                <div class="pagination-align style-1">--}}
    {{--                    <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>--}}
    {{--                    <div class="swiper-pagination-two"></div>--}}
    {{--                    <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="swiper-container books-wrapper-3 swiper-four">--}}
    {{--                <div class="swiper-wrapper">--}}
    {{--                    @foreach($on_sale_books as $book)--}}
    {{--                        <div class="swiper-slide">--}}
    {{--                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">--}}
    {{--                                <div class="dz-media">--}}
    {{--                                    <a href="{{route('book.show',['book'=>$book->id])}}">--}}
    {{--                                        <img class="book-image" src="{{$book->image_url}}" alt="book">--}}
    {{--                                    </a>--}}
    {{--                                </div>--}}
    {{--                                <div class="dz-content">--}}
    {{--                                    <h5 class="title"><a--}}
    {{--                                            href="{{route('book.show',['book'=>$book->id])}}">{{$book->title}}</a></h5>--}}
    {{--                                    <ul class="dz-tags">--}}
    {{--                                        @foreach($book->categories as $category)--}}
    {{--                                            <li><a href="javascript:">{{$category->name}},</a></li>--}}
    {{--                                        @endforeach--}}
    {{--                                    </ul>--}}
    {{--                                    <div class="book-footer">--}}
    {{--                                        <div class="rate">--}}
    {{--                                            <i class="flaticon-star"></i> {{$book->total_rating}}--}}
    {{--                                        </div>--}}
    {{--                                        <div class="price">--}}
    {{--                                            <span class="price-num">$ {{$book->sale_price}}</span>--}}
    {{--                                            @if($book->sale_price!=$book->price)--}}
    {{--                                                <del>$ {{$book->price}}</del>--}}
    {{--                                            @endif--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- Book Sale End -->

    <!-- Featured Books-->
    {{--    <section class="content-inner-1">--}}
    {{--        <div class="container">--}}
    {{--            <div class="section-head book-align">--}}
    {{--                <h2 class="title mb-0">Featured Books</h2>--}}
    {{--                <div class="pagination-align style-1">--}}
    {{--                    <div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>--}}
    {{--                    <div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="swiper-container book-swiper">--}}
    {{--                <div class="swiper-wrapper">--}}
    {{--                    @foreach($featured_books as $book)--}}
    {{--                        <div class="swiper-slide">--}}
    {{--                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">--}}
    {{--                                <div class="dz-media">--}}
    {{--                                    <a href="{{route('book.show',['book'=>$book->id])}}">--}}
    {{--                                        <img src="{{ $book->image_url }}"--}}
    {{--                                             alt="/">--}}
    {{--                                    </a>--}}
    {{--                                </div>--}}
    {{--                                <div class="dz-info">--}}
    {{--                                    <h4 class="dz-title"><a--}}
    {{--                                            href="{{route('book.show',['book'=>$book->id])}}">{{ $book->title }}</a>--}}
    {{--                                    </h4>--}}
    {{--                                    <div class="dz-meta">--}}
    {{--                                        <ul class="dz-tags">--}}
    {{--                                            @foreach($book->categories as $category)--}}
    {{--                                                <li><a href="javascript:">{{$category->name}}</a></li>--}}
    {{--                                            @endforeach--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                    <p>{{str()->words($book->description,15,'....')}}</p>--}}
    {{--                                    <div class="bookcard-footer">--}}
    {{--                                        <a href="javascript:"--}}
    {{--                                           class="btn btn-primary m-t15 btnhover btnhover2 buy-btn cart-btn-{{$book->id}}"--}}
    {{--                                           data-book="{{$book}}">--}}
    {{--                                            <i class="flaticon-shopping-cart-1 m-r10"></i> Buy</a>--}}

    {{--                                        <a href="{{route('book.checkout')}}"--}}
    {{--                                           style="display: none"--}}
    {{--                                           class="btn btn-primary m-t15 btnhover btnhover2 checkout-btn-{{$book->id}}">--}}
    {{--                                            <i class="flaticon-shopping-cart-1 m-r10"></i>Checkout</a>--}}

    {{--                                        <div class="price-details">--}}
    {{--                                            $ {{$book->sale_price}}--}}
    {{--                                            @if($book->sale_price!=$book->price)--}}
    {{--                                                <del>$ {{$book->price}}</del>--}}
    {{--                                            @endif--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- Special Offer End -->

    <!-- Pricing Table -->
    <section class="content-inner bg-light">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">{{$header_project_settings->details->our_price_headline??''}}</h2>
                <p>{{$header_project_settings->details->our_price_description??''}}</p>
            </div>
            <div class="row pricingtable-wraper">
                <div class="col-md-1">
                </div>
                @foreach($subscription_plans as $plan)
                    <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="pricingtable-wrapper mt-0 style-1 m-b30">
                            <div class="pricingtable-inner">
                                <div class="pricingtable-title">
                                    <h3 class="title">{{$plan->name}}</h3>
                                </div>
                                <div class="pricingtable-price">
                                    <h2 class="pricingtable-bx">$ {{$plan->price}}
                                        <small class="pricingtable-type">/ {{$plan->interval}}</small></h2>
                                </div>
                                <p class="text">Features</p>
                                <ul class="pricingtable-features">.
                                    @foreach($plan->features as $feature)
                                        <li>{{$feature}}</li>
                                    @endforeach
                                </ul>
                                <div class="pricingtable-footer">
                                    <a href="{{route('subscription_plan.show',['subscription_plan'=>$plan->slug])}}"
                                       class="btn btn-primary btnhover3">Start Now
                                        <i class="fa fa-angle-right m-l10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
