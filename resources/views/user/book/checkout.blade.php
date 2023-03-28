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
                <h1>Checkout</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                        <li class="breadcrumb-item">Checkout</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- inner page banner End-->

    <!-- contact area -->
    <section class="content-inner-1">
        <!-- Product -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="widget">
                        <h4 class="widget-title">Your Order</h4>
                        <table class="table-bordered check-tbl">
                            <thead class="text-center">
                            <tr>
                                <th>IMAGE</th>
                                <th>PRODUCT NAME</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody id="checkout_list">
                            <tr>
                                <td class="product-item-img"><img src="{{asset('user/images/books/grid/book3.jpg')}}"
                                                                  alt=""></td>
                                <td class="product-item-name">Prduct Item 5</td>
                                <td class="product-price">$28.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p><br>
                        </div>
                    @endif
                    <form method="post" action="{{ route('stripe.post') }}" class="require-validation shop-form widget"
                          data-cc-on-file="false"
                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf
                        <h4 class="widget-title">Order Total</h4>
                        <table class="table-bordered check-tbl mb-4">
                            <tbody>
                            <tr>
                                <td>Total</td>
                                <td class="product-price-total" id="checkout_total_price"></td>
                            </tr>
                            </tbody>
                        </table>
                        <h4 class="widget-title">Payment Method</h4>
                        <div class="form-group">
                            <select class="default-select">
                                <option value="">Stripe</option>
                                <option value="">Paypal</option>
                            </select>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-12 form-group required'>
                                <label class='control-label'>Name on Card</label>
                                <input class='form-control' size='4' type='text'>
                            </div>
                            <div class='col-xs-12 col-md-12 form-group required'>
                                <label class='control-label'>Card Number</label>
                                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label>
                                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4'
                                       type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label>
                                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label>
                                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide' hidden="">
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="cart" name="cart">
                        <div class="form-group">
                            <button class="btn btn-primary btnhover" type="submit">Place Order Now</button>
                        </div>
                    </form>
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
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    @if (Session::has('success'))
        <script>
            shoppingCart.clearCart()
        </script>
    @endif
    <script>
        $(document).ready(function () {
            displayCartOutPage()
            var cartArray = JSON.stringify(shoppingCart.listCart())
            $('#cart').val(cartArray)
        })

        $(function () {
            var $form = $('.require-validation')
            $('form.require-validation').bind('submit', function (e) {
                var $form = $('.require-validation'),
                    inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true
                $errorMessage.addClass('hide')
                $('.has-error').removeClass('has-error')
                $inputs.each(function (i, el) {
                    var $input = $(el)
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error')
                        $errorMessage.removeClass('hide')
                        e.preventDefault()
                    }
                })
                if (!$form.data('cc-on-file')) {
                    e.preventDefault()
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'))
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler)
                }
            })

            function stripeResponseHandler (status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message)
                } else {
                    /* token contains id, last4, and card type */
                    const token = response['id']
                    $form.find('input[type=text]').empty()
                    $form.append('<input type=\'hidden\' name=\'stripeToken\' value=\'' + token + '\'/>')
                    $form.get(0).submit()

                }
            }
        })

    </script>
@endpush

