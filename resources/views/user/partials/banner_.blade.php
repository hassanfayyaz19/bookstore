<div class="main-slider style-1 slider-white">
    <div class="main-swiper">
        <div class="swiper-wrapper">
            @foreach($banner_books as $book)
                <div class="swiper-slide bg-light"
                     style="background-image: url({{asset('user/images/background/waveelement.png')}});">
                    <div class="container">
                        <div class="banner-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="swiper-content">
                                        <div class="content-info">
                                            <h1 class="title mb-0" data-swiper-parallax="-20">{{$book->title}}</h1>
                                            <ul class="dz-tags" data-swiper-parallax="-30">
                                                @foreach($book->categories as $category)
                                                    <li><a href="javascript:void(0);">{{$category->name}}</a></li>
                                                @endforeach
                                            </ul>
                                            <p class="text mb-0" data-swiper-parallax="-40">{{str()->words(strip_tags($book->description),25,'....')}}</p>
                                            <div class="price" data-swiper-parallax="-50">
                                                <span class="price-num">$ {{$book->price}}</span>
                                                {{--                                                <del>$15.25</del>--}}
                                                {{--                                                <span class="badge badge-danger">15% OFF</span>--}}
                                            </div>
                                            <div class="content-btn" data-swiper-parallax="-60">
                                                <a class="btn btn-primary btnhover add-to-cart" data-book="{{$book}}" href="javascript:">Add To
                                                    Cart</a>
                                                {{--                                                <a class="btn border btnhover ms-4 text-white"--}}
                                                {{--                                                   href="books-detail.html">See Details</a>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner-media" data-swiper-parallax="-100">
                                        {{--                                    <img src="{{asset('user/images/banner/banner-media.png')}}"--}}
                                        {{--                                         alt="banner-media">--}}
                                    </div>
                                    <img class="pattern" src="{{asset('user/images/Group.png')}}"
                                         data-swiper-parallax="-100"
                                         alt="dots">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container swiper-pagination-wrapper">
            <div class="swiper-pagination-five"></div>
        </div>
    </div>
    <div class="swiper main-swiper-thumb">
        <div class="swiper-wrapper">
            @foreach($banner_books as $book)
                <div class="swiper-slide">
                    <div class="books-card">
                        <div class="dz-media">
                            <img src="{{$book->image_url}}" alt="book">
                        </div>
                        <div class="dz-content">
                            <h5 class="title mb-0">{{$book->title}}</h5>
                            <div class="dz-meta">
                                <ul>
                                    <li>By {{$book->publisher->name}}</li>
                                </ul>
                            </div>
                            <div class="book-footer">
                                <div class="price">
                                    <span class="price-num">$ {{$book->price}}</span>
                                </div>
                                <div class="rate">
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
