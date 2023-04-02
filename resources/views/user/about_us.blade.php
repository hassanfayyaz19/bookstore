@extends('user.layouts.app')
@section('content')
    <!--banner-->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
         style="background-image:url('{{asset('user/images/background/bg3.jpg')}}');">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>About us</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('welcome')}}"> Home</a></li>
                        <li class="breadcrumb-item">About us</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!--Our Mission Section-->
    <section class="content-inner overlay-white-middle">
        <div class="container">
            <div class="row about-style1 align-items-center">
                <div class="col-lg-6 m-b30">
                    <div class="row sp10 about-thumb">
                        <div class="col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800"
                             data-aos-delay="200">
                            <div class="split-box">
                                <div>
                                    <img class="m-b30" src="{{asset('user/images/about/about1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="split-box ">
                                <div>
                                    <img class="m-b20 aos-item" src="{{asset('user/images/about/about2.jpg')}}" alt=""
                                         data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                                </div>
                            </div>
                            <div class="exp-bx aos-item" data-aos="fade-up" data-aos-duration="800"
                                 data-aos-delay="500">
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
                <div class="col-lg-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800"
                     data-aos-delay="500">
                    <div class="about-content px-lg-4">
                        <div class="section-head style-1">
                            <h2 class="title">Bookland Is Best Choice For Learners</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration which don’t look even slightly believable. It Is A Long
                                Established Fact That A Reader Will Be Distracted</p>
                        </div>
                        <a href="contact-us.html" class="btn btn-primary btnhover shadow-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--icon-box3 section-->
    <section class="content-inner-1 bg-light">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Our Mission</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper style-3 m-b30">
                        <div class="icon-lg m-b20">
                            <i class="flaticon-open-book-1 icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h4 class="title">Best Bookstore</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <a href="about-us.html">Learn More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper style-3 m-b30">
                        <div class="icon-lg m-b20">
                            <i class="flaticon-exclusive icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h4 class="title">Trusted Seller</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <a href="about-us.html">Learn More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="icon-bx-wraper style-3 m-b30">
                        <div class="icon-lg m-b20">
                            <i class="flaticon-store icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h4 class="title">Expand Store</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <a href="about-us.html">Learn More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Box -->
    <section class="content-inner bg-light">
        <div class="container">
            <div class="row sp15">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
                <div class=" col-lg-3 col-md-6 col-sm-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
                    <div class="col-xl-7 col-lg-12">
                        <div class="section-head mb-0">
                            <h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books
                                updates</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
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
    <script src="{{asset('user/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- SWIPER JS -->
    <script src="{{asset('user/vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('user/vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('user/js/dz.carousel.js')}}"></script><!-- DZ CAROUSEL JS -->
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
@endpush


