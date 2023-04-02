<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content="DexignZone"/>
    <meta name="robots" content=""/>
    <meta name="description" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}"/>

    <!-- PAGE TITLE HERE -->
    <title>{{config('app.name')}}</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('user.partials.css')
    @stack('css')
</head>
<body>
<div class="page-wraper">

    @include('user.partials.header')

    <div class="page-content bg-white">

        @yield('content')

        <!-- Newsletter -->
        @include('user.partials.newsletter')
        <!-- Newsletter End -->
    </div>

    @include('user.partials.footer')
</div>

@include('user.partials.js')

@stack('js')

</body>
</html>
