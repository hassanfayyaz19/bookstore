@extends('user.layouts.app')
@push('css')

@endpush

@section('content')
    <!-- contact area -->
    <div class="content-block">
        <!-- Browse Jobs -->
        <section class="content-inner bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 m-b30">
                        <div class="sticky-top">
                            <div class="shop-account">
                                <div class="account-detail text-center">
                                    <div class="">
                                        <a href="javascript:void(0);">
                                            <img alt="" src="{{$user->profile}}">
                                        </a>
                                    </div>
                                    <div class="account-title">
                                        <div class="">
                                            <h4 class="m-b5"><a href="javascript:void(0);">{{$user->full_name}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <ul class="account-list">
                                    <li>
                                        <a href="{{route('profile.index')}}" class="active">
                                            <i class="far fa-user"
                                               aria-hidden="true"></i>
                                            <span>Profile</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('book.cart')}}"><i class="flaticon-shopping-cart-1"></i>
                                            <span>My Cart</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:"><i class="far fa-heart" aria-hidden="true"></i>
                                            <span>Wishlist</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('privacy_policy')}}"><i class="fa fa-key"
                                                                                 aria-hidden="true"></i>
                                            <span>Privacy Policy</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:"
                                           onclick="document.getElementById('logout-form1').submit();">
                                            <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                                            <span>Log Out</span></a>
                                        <form id="logout-form1" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 m-b30">
                        <div class="shop-bx shop-profile">
                            <div class="shop-bx-title clearfix">
                                <h5 class="text-uppercase">Basic Information</h5>
                            </div>
                            @if (session()->has('success'))
                                <div class="alert alert-success mt-2 mb-2">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger mt-2 mb-2">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <form action="{{route('profile.update',['profile'=>$user->id])}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row m-b30">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput1" class="form-label">First Name:</label>
                                            <input type="text" class="form-control" id="formcontrolinput1"
                                                   name="first_name" value="{{$user->first_name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput2" class="form-label">Last Name:</label>
                                            <input type="text" class="form-control" id="formcontrolinput2"
                                                   name="last_name" value="{{$user->last_name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput3" class="form-label">Email:</label>
                                            <input type="email" class="form-control" id="formcontrolinput3"
                                                   name="email" value="{{$user->email}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Profile:</label>
                                            <input type="file" class="form-control" name="profile">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btnhover">Save Setting</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Browse Jobs END -->
    </div>
@endsection

@push('js')
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
@endpush

