@extends('user.layouts.app')

@section('content')
    <!-- inner page banner -->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
         style="background-image:url('{{asset('user/images/background/bg3.jpg')}}');">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Contact</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('welcome')}}"> Home</a></li>
                        <li class="breadcrumb-item">Contact</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <section class="contact-wraper1" style="background-image: url('{{asset('user/images/background/bg2.jpg')}}');margin-top: 200px">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="section-head text-white style-1">
                            <h3 class="title text-white">Get In Touch</h3>
                            <p>If you are interested in working with us, please get in touch.</p>
                        </div>
                        <ul class="no-margin">
                            <li class="icon-bx-wraper text-white left m-b30">
                                <div class="icon-md">
											<span class="icon-cell text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-map-pin"><path
                                                        d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle
                                                        cx="12" cy="10" r="3"></circle></svg>
											</span>
                                </div>
                                <div class="icon-content">
                                    <h5 class=" dz-tilte text-white">Our Address</h5>
                                    <p>{{$header_project_settings->address??''}}</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper text-white left m-b30">
                                <div class="icon-md">
											<span class="icon-cell text-primary">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-mail"><path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                        points="22,6 12,13 2,6"></polyline></svg>
											</span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-tilte text-white">Our Email</h5>
                                    <p>{{$header_project_settings->email??''}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 m-b40">
                    <div class="contact-area1 m-r20 m-md-r0">
                        <div class="section-head style-1">
                            <h6 class="sub-title text-primary">CONTACT US</h6>
                            <h3 class="title m-b20">Get In Touch With Us</h3>
                        </div>
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <form class="" method="POST" action="{{route('contact_us.store')}}">
                            @csrf
                            <div class="dzFormMsg"></div>
                            <div class="input-group">
                                <input required type="text" class="form-control" name="name"
                                       placeholder="Full Name">
                            </div>
                            <div class="input-group">
                                <input required type="email" class="form-control" name="email"
                                       placeholder="Email Adress">
                            </div>
                            <div class="input-group">
                                <input required type="text" class="form-control" name="phone_number"
                                       placeholder="Phone No.">
                            </div>
                            <div class="input-group">
                                <textarea required name="message" rows="5" class="form-control">Message</textarea>
                            </div>

                            <div>
                                <button name="submit" type="submit" value="submit"
                                        class="btn w-100 btn-primary btnhover">SUBMIT
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Box -->
    <section class="content-inner">
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

@endsection
@push('js')
    <script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
    <script src="{{asset('user/vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('user/vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
@endpush

