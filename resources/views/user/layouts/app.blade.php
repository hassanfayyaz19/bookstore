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

<div class="modal fade" id="cart_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cart_modal_title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12" id="cart_book_addons">
                </div>
                <div class="d-grid gap-2">
                    <a class="btn btn-primary btn-block" href="{{route('book.checkout')}}">Checkout</a>
                    <button class="btn btn-outline-primary btn-block" data-bs-dismiss="modal">Continue Shopping</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('user.partials.js')

@stack('js')

</body>
</html>
