<!DOCTYPE html>
<html lang="en">
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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}"/>

    <!-- PAGE TITLE HERE -->
    <title>Login</title>

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
                    <h1>Login</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}"> Home</a></li>
                            <li class="breadcrumb-item">Login</li>
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
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="login-area">
                            <div class="tab-content">
                                <h4>NEW CUSTOMER</h4>
                                <p>By creating an account with our store, you will be able to move through the checkout
                                    process faster, store multiple shipping addresses, view and track your orders in
                                    your account and more.</p>
                                <a class="btn btn-primary btnhover m-r5 button-lg radius-no"
                                   href="{{route('register')}}">CREATE AN ACCOUNT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="login-area">
                            <div class="tab-content nav">
                                <form id="login" class="tab-pane active col-12" method="post"
                                      action="{{route('login')}}">
                                    @csrf
                                    <h4 class="text-secondary">LOGIN</h4>
                                    <p class="font-weight-600">If you have an account with us, please log in.</p>
                                    <div class="mb-4">
                                        <label class="label-title">E-MAIL *</label>
                                        <input name="email" required=""
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Your Email" type="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="label-title">PASSWORD *</label>
                                        <input name="password" required="" class="form-control "
                                               placeholder="Type Password" type="password">
                                    </div>
                                    <div class="text-left">
                                        <button class="btn btn-primary btnhover me-2" type="submit">login</button>
                                        <a data-bs-toggle="tab" href="#forgot-password" class="m-l5"><i
                                                class="fas fa-unlock-alt"></i> Forgot Password</a>
                                    </div>
                                </form>
                                <form id="forgot-password" class="tab-pane fade  col-12">
                                    <h4 class="text-secondary">FORGET PASSWORD ?</h4>
                                    <p class="font-weight-600">We will email you to reset your password. </p>
                                    <div class="mb-3">
                                        <label class="label-title">E-MAIL *</label>
                                        <input name="dzName" required="" class="form-control"
                                               placeholder="Your Email Id" type="email">
                                    </div>
                                    <div class="text-left">
                                        <a class="btn btn-outline-secondary btnhover m-r10" data-bs-toggle="tab"
                                           href="#login">Back</a>
                                        <button class="btn btn-primary btnhover" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
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
