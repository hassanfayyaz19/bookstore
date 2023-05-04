@extends('user.layouts.app')

@push('css')

@endpush
@section('content')
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
         style="background-image:url({{asset('user/images/background/bg3.jpg')}});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Pricing Table</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('welcome')}}"> Home</a></li>
                        <li class="breadcrumb-item">Subscription Plans</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- inner page banner End-->

    <!-- Pricing Table -->
    <section class="content-inner-1 bg-light">
        <div class="container">
            <div class="row pricingtable-wraper">
                <div class="col-md-1"></div>
                @foreach($subscription_plans as $plan)
                    <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="pricingtable-wrapper mt-0 style-1 m-b30">
                            <div class="pricingtable-inner">
                                <div class="pricingtable-title">
                                    <h3 class="title">{{$plan->name}}</h3>
                                </div>
                                <div class="pricingtable-price">
                                    <h2 class="pricingtable-bx">$ {{$plan->price}}
                                        <small class="pricingtable-type">/ {{$plan->interval}}</small></h2>
                                </div>
                                <p class="text">Features</p>
                                <ul class="pricingtable-features">.
                                    @foreach($plan->features as $feature)
                                        <li>{{$feature}}</li>
                                    @endforeach
                                </ul>
                                <div class="pricingtable-footer">
                                    <a href="{{route('subscription_plan.show',['subscription_plan'=>$plan->slug])}}"
                                       class="btn btn-primary btnhover3">Start Now
                                        <i class="fa fa-angle-right m-l10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
@endpush





