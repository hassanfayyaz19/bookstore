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
                <h1>Purchased Books </h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}"> Home</a></li>
                        <li class="breadcrumb-item">Purchased Books</li>
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
                <div class="col-lg-12">
                    <div class="widget">
                        <h4 class="widget-title">Your Books</h4>
                        <table class="table-bordered check-tbl">
                            <thead class="text-center">
                            <tr>
                                <th>IMAGE</th>
                                <th>PRODUCT NAME</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($purchases as $purchase)
                                <tr>
                                    <td class="product-item-img"><img src="{{$purchase->book->image_url}}" alt=""></td>
                                    <td class="product-item-name">{{$purchase->book->title}}</td>
                                    <td class="product-price">
                                        <a href="{{route('book.download',['book'=>encrypt($purchase->book->id)])}}">Download</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="3" class="text-center">No Book Purchased</th>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
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
@endpush

