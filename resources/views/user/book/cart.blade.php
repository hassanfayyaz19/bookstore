@extends('user.layouts.app')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('user/icons/themify/themify-icons.css')}}">
@endpush
@section('content')
    <!-- inner page banner -->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
         style="background-image:url({{asset('user/images/background/bg3.jpg')}});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Cart</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                        <li class="breadcrumb-item">Cart</li>
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
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table check-tbl">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Product name</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th class="text-end">Close</th>
                            </tr>
                            </thead>
                            <tbody id="cart_page_list">

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget">
                        <h4 class="widget-title">Cart Subtotal</h4>
                        <table class="table-bordered check-tbl m-b25">
                            <tbody>
                            <tr>
                                <td>Total</td>
                                <td id="cart_page_total_price"></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="form-group m-b25">
                            <a href="{{route('book.checkout')}}" class="btn btn-primary btnhover" type="button">
                                Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product END -->
    </section>
    <!-- contact area End-->

@endsection
@push('js')
    <script
        src="{{asset('user/vendor/bootstrap-touchspin/bootstrap-touchspin.js')}}"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
    <script>
        $(document).ready(function () {
            displayCartPage()
        })
    </script>
@endpush

