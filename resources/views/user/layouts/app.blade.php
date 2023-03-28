<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta name="description" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:image"
          content="{{asset('user/makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html')}}"/>
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}"/>

    <!-- PAGE TITLE HERE -->
    <title>{{config('app.name')}}</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    @include('user.partials.css')
    @stack('css')

</head>

<body>
<div class="page-wraper">
    @include('user.partials.header')

    <div class="page-content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('user.partials.footer')
</div>

@include('user.partials.js')
@stack('js')
</body>
</html>
