@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                        .
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
    <title>Verify Email</title>

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
                    <h1>Verify Email</h1>
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
                    <div class="col-lg-12 col-md-12 mb-4">
                        <div class="login-area">
                            <div class="tab-content">
                                <h4>NEW CUSTOMER</h4>
                                <p>By creating an account with our store, you will be able to move through the checkout
                                    process faster, store multiple shipping addresses, view and track your orders in
                                    your account and more.</p>
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit"
                                            class="btn btn-primary btnhover m-r5 button-lg radius-no">{{ __('click here to request another') }}</button>

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
