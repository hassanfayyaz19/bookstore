@extends('user.layouts.app')

@section('content')

    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
         style="background-image:url({{asset('user/images/background/bg3.jpg')}});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Verify Email</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('welcome')}}"> Home</a></li>
                        <li class="breadcrumb-item">Verify Email</li>
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
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <div class="login-area">
                        <div class="tab-content">
                            <h4>Verify Your Email Address</h4>
                            <p>Before proceeding, please check your email for a verification link. If you did not
                                receive the email,.</p>
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

@endsection

@push('js')
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
@endpush
