@extends('user.layouts.app')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('user/vendor/nouislider/nouislider.min.css')}}">
@endpush
@section('content')

    <div class="page-content bg-grey">
        <div class="content-inner-1 border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <h4 class="title">Searched Term : "{{$search}}"</h4>
                            <a href="javascript:void(0);" class="btn btn-primary panel-btn">Filter</a>
                        </div>
                        <div class="filter-area m-b30">

                        </div>
                        <div class="row book-grid-row">
                            @foreach($books as $book)
                                <div class="col-book style-2">
                                    <div class="dz-shop-card style-1">
                                        <div class="dz-media">
                                            <a href="{{route('book.show',['book'=>$book->slug])}}">
                                                <img style="height: 357px;object-fit: cover" src="{{$book->image_url}}"
                                                     alt="book">
                                            </a>
                                        </div>
                                        <div class="bookmark-btn style-2">

                                        </div>
                                        <div class="dz-content">
                                            <h5 class="title"><a
                                                    href="{{route('book.show',['book'=>$book->slug])}}">{{$book->title}}</a>
                                            </h5>
                                            <ul class="dz-tags">
                                                @foreach($book->categories as $category)
                                                    <li><a href="javascript:;">{{$category->name}}</a></li>
                                                @endforeach
                                            </ul>
                                            <ul class="dz-rating">
                                                <li>
                                                    <i class="flaticon-star {{$book->total_rating>=1?'text-yellow':'text-muted'}} text-yellow"></i>
                                                </li>
                                                <li>
                                                    <i class="flaticon-star {{$book->total_rating>=2?'text-yellow':'text-muted'}}"></i>
                                                </li>
                                                <li>
                                                    <i class="flaticon-star {{$book->total_rating>=3?'text-yellow':'text-muted'}}"></i>
                                                </li>
                                                <li>
                                                    <i class="flaticon-star {{$book->total_rating>=4?'text-yellow':'text-muted'}}"></i>
                                                </li>
                                                <li>
                                                    <i class="flaticon-star {{$book->total_rating>=5?'text-yellow':'text-muted'}}"></i>
                                                </li>
                                            </ul>
                                            <div class="book-footer">
                                                <div class="price">
                                                    <span class="price-num">$ {{$book->sale_price}}</span>
                                                    @if($book->sale_price!=$book->price)
                                                        <del>$ {{$book->price}}</del>
                                                    @endif
                                                </div>
                                                <a href="javascript:;"
                                                   class="btn btn-secondary box-btn btnhover btnhover2 buy-btn cart-btn-{{$book->id}}"
                                                   data-book="{{$book}}"><i
                                                        class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>

                                                <a href="{{route('book.checkout')}}"
                                                   style="display: none"
                                                   class="btn btn-secondary box-btn btnhover btnhover2 checkout-btn-{{$book->id}}">
                                                    <i class="flaticon-shopping-cart-1 m-r10"></i> Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="row page mt-0">
                            {{ $books->links('vendor.pagination.book-list') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('user/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- SWIPER JS -->
    <script src="{{asset('user/vendor/countdown/counter.js')}}"></script><!-- COUNTER JS -->
    <script src="{{asset('user/vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('user/vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('user/vendor/wnumb/wNumb.js')}}"></script><!-- WNUMB -->
    <script src="{{asset('user/vendor/nouislider/nouislider.min.js')}}"></script><!-- NOUSLIDER MIN JS-->
    <script src="{{asset('user/js/dz.carousel.js')}}"></script><!-- DZ CAROUSEL JS -->
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
    <script>
        $(document).ready(function () {
        })
    </script>
@endpush
