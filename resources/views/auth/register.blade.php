<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/shop-registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 07:38:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta name="description" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    {{--    <meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html"/>--}}
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>

    <!-- PAGE TITLE HERE -->
    <title>Register</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    @include('user.partials.css')
</head>

<body>
<div class="page-wraper">
    <!-- Header -->
    @include('user.partials.header')
    <!-- Header End -->

    <div class="page-content">
        <!-- inner page banner -->
        <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
             style="background-image:url({{asset('user/images/background/bg3.jpg')}});">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Registration</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"> Home</a></li>
                            <li class="breadcrumb-item">Registration</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- inner page banner End-->

        <!-- contact area -->
        <section class="content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="login-area">
                            <form method="post" action="{{route('register')}}">
                                @csrf
                                <h4 class="text-secondary">Registration</h4>
                                <p class="font-weight-600">If you don't have an account with us, please
                                    Registration.</p>
                                <div class="mb-4">
                                    <label class="label-title">First Name *</label>
                                    <input name="first_name"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           placeholder="Your First Name"
                                           type="text" required>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="label-title">Last Name *</label>
                                    <input name="last_name"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           placeholder="Your Last Name"
                                           type="text" required>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="label-title">Email address *</label>
                                    <input name="email" required=""
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="Your Email address" type="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="label-title">Password *</label>
                                    <input name="password" required=""
                                           class="form-control @error('password') is-invalid @enderror"
                                           placeholder="Type Password"
                                           type="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="label-title">Confirm Password *</label>
                                    <input name="password_confirmation" required=""
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           placeholder="Type Password"
                                           type="password">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <small>Your personal data will be used to support your experience throughout this
                                        website, to manage access to your account, and for other purposes described in
                                        our <a href="javascript:">privacy policy</a>.</small>
                                </div>
                                <div class="text-left">
                                    <button class="btn btn-primary btnhover w-100 me-2" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product END -->
        </section>
        <!-- contact area End-->
    </div>

    <!-- Footer -->
    @include('user.partials.footer')
    <!-- Footer End -->

</div>
<!-- JAVASCRIPT FILES ========================================= -->
@include('user.partials.js')
<!-- BOOTSTRAP SELECT MIN JS -->
<script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
</body>
</html>
