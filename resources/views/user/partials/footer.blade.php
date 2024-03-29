<footer class="site-footer footer-dark">
    <!-- Footer Category -->
    <div class="footer-category">
        <div class="container">
            <div class="category-toggle">
                <a href="javascript:void(0);" class="toggle-btn">Books categories</a>
                <div class="toggle-items row">
                    <div class="footer-col-book">
                        <ul>
                            @foreach($header_categories as $category)
                                <li>
                                    <a href="{{route('book.index',['category'=>$category->slug])}}">{{$category->name}}</a>
                                </li>
                            @endforeach
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
                            <a href="{{route('welcome')}}">{{config('app.name')}}</a>
                        </div>
                        <p class="text">{{$header_project_settings->description??''}}</p>
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
                            <li><a href="{{route('about_us')}}">About us</a></li>
                            <li><a href="{{route('contact_us')}}">Contact us</a></li>
                            <li><a href="{{route('privacy_policy')}}">Privacy Policy</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">{{config('app.name')}} ?</h5>
                        <ul>
                            <li><a href="{{route('welcome')}}">{{config('app.name')}}</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="{{route('book.index')}}">Books</a></li>
                            {{--                            <li><a href="blog-detail.html">Blog Details</a></li>--}}
                            {{--                            <li><a href="books-grid-view.html">Shop</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Resources</h5>
                        <ul>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Shop Cart</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Partner</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="widget widget_getintuch">
                        <h5 class="footer-title">Get in Touch With Us</h5>
                        <ul>
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <span>{{$header_project_settings->address??''}}</span>
                            </li>
                            <li>
                                <i class="flaticon-phone"></i>
                                <span>{{$header_project_settings->mobile_number??''}}<br>
									{{$header_project_settings->phone_number??''}}</span>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <span>{{$header_project_settings->email??''}}<br></span>
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
                    <p class="copyright-text">{{config('app.name')}} - © 2023 All Rights Reserved</p>
                </div>
                <div class="col-lg-6 col-md-12 text-end">
                    <p>Made with <span class="heart"></span> by <a href="#">EBUKIE LLC</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

</footer>

<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
