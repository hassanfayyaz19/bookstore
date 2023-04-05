<section class="content-inner-1 overlay-white-middle">
    <div class="container">
        <div class="row about-style1 align-items-center">
            <div class="col-lg-6 m-b30 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row sp10 about-thumb">
                    <div class="col-sm-6 aos-item d-none d-sm-block">
                        <div class="split-box">
                            <div>
                                <img class="m-b30" src="{{asset('user/images/about/about1.jpg')}}" alt="/">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
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
                        <h2 class="title">{{$header_project_settings->details->contact_us_headline ?? ''}}</h2>
                        <p>{{$header_project_settings->details->contact_us_description ?? ''}}</p>
                    </div>
                    <a href="{{route('contact_us')}}" class="btn btn-primary shadow-primary btnhover">Contact Us</a>
                </div>
            </div>
        </div>
        <!--Client Swiper -->
    </div>
</section>
