@extends('user.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('user/icons/themify/themify-icons.css')}}">
@endpush

@section('content')
    <div class="page-content bg-grey">
        <section class="content-inner-1">
            <div class="container">
                <div class="row book-grid-row style-4 m-b60">
                    <div class="col">
                        <div class="dz-box">
                            <div class="dz-media">
                                <img src="{{$book->image_url}}" alt="book" style="width: 398px;height: 572px;">
                            </div>
                            <div class="dz-content">
                                <div class="dz-header">
                                    <h3 class="title">{{$book->title}}</h3>
                                    <div class="shop-item-rating">
                                        <div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
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
                                            <h6 class="m-b0">{{$book->total_rating}}
                                                ({{count($book->book_reviews->where('is_active',1))}}
                                                reviews)</h6>
                                        </div>
                                        <div class="social-area">
                                            <ul class="dz-social-icon style-3">
                                                <li><a href="https://www.facebook.com/share.php?u={{url()->current()}}"
                                                       target="_blank"><i
                                                            class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com/intent/tweet?url={{url()->current()}}"
                                                       target="_blank"><i
                                                            class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="https://wa.me/?text={{url()->current()}}"
                                                       target="_blank"><i
                                                            class="fa-brands fa-whatsapp"></i></a></li>
                                                <li>
                                                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su={{config('app.name')}}&body={{url()->current()}}&ui=2&tf=1&pli=1"
                                                       target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-body">
                                    <div class="book-detail">
                                        <ul class="book-info">
                                            <li>
                                                <div class="writer-info">
                                                    <img src="{{asset('user/images/profile2.jpg')}}" alt="book">
                                                    <div>
                                                        <span>Written by</span>{{$book->author->first_name}} {{$book->author->last_name}}
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span>Languages </span>{{$book->language}}</li>
                                            <li><span>Pages </span>{{$book->page_count}}</li>
                                        </ul>
                                    </div>
                                    <iframe allowfullscreen class="col-12" height="350"
                                            src="{{$book->video_url}}">
                                    </iframe>
                                    @if(!empty($book->video_url))
                                        <div class="book-footer mb-3 mt-2">
                                            <div class="price">
                                                <h5>$ {{$book->sale_price}}</h5>
                                                <p class="p-lr10">$ {{$book->price}}</p>
                                            </div>
                                            <div class="product-num">
                                                <a href="javascript:"
                                                   class="btn btn-primary btnhover btnhover2 add-to-cart cart-btn-{{$book->id}}"
                                                   data-book="{{$book}}">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <span>Add to cart</span></a>

                                                <a href="{{route('book.checkout')}}"
                                                   style="display: none"
                                                   class="btn btn-primary btnhover btnhover2 checkout-btn-{{$book->id}}">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <span>Checkout</span></a>

                                                <div class="bookmark-btn style-1 d-none d-sm-block">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="flexCheckDefault1">
                                                    <label class="form-check-label" for="flexCheckDefault1">
                                                        <i class="flaticon-heart"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <p class="text-1">{{$book->description}}</p>
                                    <div class="book-footer mb-3 mt-2">
                                        <div class="price">
                                            <h5>$ {{$book->sale_price}}</h5>
                                            <p class="p-lr10">$ {{$book->price}}</p>
                                        </div>
                                        <div class="product-num">
                                            <a href="javascript:"
                                               class="btn btn-primary btnhover btnhover2 add-to-cart cart-btn-{{$book->id}}"
                                               data-book="{{$book}}">
                                                <i class="flaticon-shopping-cart-1"></i>
                                                <span>Add to cart</span></a>

                                            <a href="{{route('book.checkout')}}"
                                               style="display: none"
                                               class="btn btn-primary btnhover btnhover2 checkout-btn-{{$book->id}}">
                                                <i class="flaticon-shopping-cart-1"></i> <span>Checkout</span></a>

                                            <div class="bookmark-btn style-1 d-none d-sm-block">
                                                <input class="form-check-input" type="checkbox"
                                                       id="flexCheckDefault1">
                                                <label class="form-check-label" for="flexCheckDefault1">
                                                    <i class="flaticon-heart"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="row">
                    <div class="col-xl-8">
                        <div class="product-description tabs-site-button">
                            <ul class="nav nav-tabs">
                                <li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Details Product</a>
                                </li>
                                <li><a data-bs-toggle="tab" href="#developement-1">Customer Reviews</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="graphic-design-1" class="tab-pane show active">
                                    <table class="table border book-overview">
                                        <tr>
                                            <th>Book Title</th>
                                            <td>{{$book->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Author</th>
                                            <td>{{$book->author->first_name}} {{$book->author->last_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Edition Language</th>
                                            <td>{{$book->language}}</td>
                                        </tr>
                                        <tr>
                                            <th>Date Published</th>
                                            <td>{{$book->publication_date}}</td>
                                        </tr>
                                        <tr>
                                            <th>Publisher</th>
                                            <td>{{$book->publisher->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Pages</th>
                                            <td>{{$book->page_count}}</td>
                                        </tr>
                                        {{--                                        <tr class="tags">--}}
                                        {{--                                            <th>Tags</th>--}}
                                        {{--                                            <td>--}}
                                        {{--                                                <a href="javascript:void(0);" class="badge">Drama</a>--}}
                                        {{--                                                <a href="javascript:void(0);" class="badge">Advanture</a>--}}
                                        {{--                                                <a href="javascript:void(0);" class="badge">Survival</a>--}}
                                        {{--                                                <a href="javascript:void(0);" class="badge">Biography</a>--}}
                                        {{--                                                <a href="javascript:void(0);" class="badge">Trending2022</a>--}}
                                        {{--                                                <a href="javascript:void(0);" class="badge">Bestseller</a>--}}
                                        {{--                                            </td>--}}
                                        {{--                                        </tr>--}}
                                    </table>
                                </div>
                                <div id="developement-1" class="tab-pane">
                                    <div class="clear" id="comment-list">
                                        <div class="post-comments comments-area style-1 clearfix">
                                            <h4 class="comments-title">{{count($book->book_reviews)}} COMMENTS</h4>
                                            <div id="comment">
                                                <ol class="comment-list">
                                                    @foreach($book->book_reviews as $review)
                                                        <li class="comment even thread-even depth-1 comment"
                                                            id="comment-2">
                                                            <div class="comment-body">
                                                                <div class="comment-author vcard">
                                                                    <img src="{{$review->profile}}" alt=""
                                                                         class="avatar"/>
                                                                    <cite class="fn">{{$review->username}}</cite>
                                                                    <div class="d-flex flex-row">
                                                                        <div><i
                                                                                class="flaticon-star {{$review->rating>=1?'text-yellow':'text-muted'}}"></i>
                                                                        </div>
                                                                        <div><i
                                                                                class="flaticon-star {{$review->rating>=2?'text-yellow':'text-muted'}}"></i>
                                                                        </div>
                                                                        <div><i
                                                                                class="flaticon-star {{$review->rating>=3?'text-yellow':'text-muted'}}"></i>
                                                                        </div>
                                                                        <div><i
                                                                                class="flaticon-star {{$review->rating>=4?'text-yellow':'text-muted'}}"></i>
                                                                        </div>
                                                                        <div><i
                                                                                class="flaticon-star {{$review->rating>=5?'text-yellow':'text-muted'}}"></i>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="says">says:</span>
                                                                    <div class="comment-meta">
                                                                        <a href="javascript:void(0);">{{$review->created_at}}</a>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content dlab-page-text">
                                                                    <p>{{$review->comment}}</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach

                                                </ol>
                                            </div>
                                            <div class="default-form comment-respond style-1" id="respond">
                                                <h4 class="comment-reply-title" id="reply-title">LEAVE A REPLY <small>
                                                        <a rel="nofollow" id="cancel-comment-reply-link"
                                                           href="javascript:void(0)" style="display:none;">Cancel
                                                            reply</a> </small></h4>
                                                <div class="clearfix">
                                                    <form method="post"
                                                          action="{{route('book_review.store')}}"
                                                          class="comment-form">
                                                        @csrf
                                                        <p class="comment-form-author">
                                                            <input
                                                                placeholder="Rate from 1 to 5"
                                                                name="rating"
                                                                type="number"
                                                                min="0"
                                                                max="5"
                                                                required
                                                            >
                                                        </p>
                                                        <p class="comment-form-comment">
                                                            <textarea id="comment"
                                                                      placeholder="Type Comment Here"
                                                                      class="form-control4"
                                                                      name="comment"
                                                                      cols="45" rows="3"
                                                                      required="required"></textarea>
                                                        </p>
                                                        <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
                                                            <input type="hidden" name="book_id" value="{{$book->id}}">
                                                            <button id="submit" type="submit"
                                                                    class="submit btn btn-primary filled">
                                                                Submit Now <i class="fa fa-angle-right m-l10"></i>
                                                            </button>
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mt-5 mt-xl-0">
                        <div class="widget">
                            <h4 class="widget-title">Related Books</h4>
                            <div class="row">
                                @foreach($books as $book)
                                    <div class="col-xl-12 col-lg-6">
                                        <div class="dz-shop-card style-5">
                                            <div class="dz-media">
                                                <a href="{{route('book.show',['book'=>$book->id])}}">
                                                    <img src="{{$book->image_url}}" alt="">
                                                </a>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="subtitle"><a
                                                        href="{{route('book.show',['book'=>$book->id])}}">{{$book->title}}</a>
                                                </h5>
                                                <ul class="dz-tags">
                                                    @foreach($book->categories as $category)
                                                        <li>{{$category->name}},</li>
                                                    @endforeach
                                                </ul>


                                                <div class="price">
                                                    <span class="price-num">$ {{$book->sale_price}}</span>
                                                    @if($book->sale_price!=$book->price)
                                                        <del>$ {{$book->price}}</del>
                                                    @endif
                                                </div>
                                                <a href="javascript:"
                                                   class="btn btn-outline-primary btn-sm btnhover btnhover2 add-to-cart cart-btn-{{$book->id}}"
                                                   data-book="{{$book}}">
                                                    <i class="flaticon-shopping-cart-1 me-2"></i> Add to cart</a>

                                                <a href="{{route('book.checkout')}}"
                                                   style="display: none"
                                                   class="btn btn-outline-primary btn-sm btnhover btnhover2 checkout-btn-{{$book->id}}">
                                                    <i class="flaticon-shopping-cart-1 me-2"></i> Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Feature Box -->
        <section class="content-inner">
            <div class="container">
                <div class="row sp15">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-users icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">125,663</h2>
                                <p class="font-20">Happy Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-book icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">50,672</h2>
                                <p class="font-20">Book Collections</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-store icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">1,562</h2>
                                <p class="font-20">Our Stores</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-leaf icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">457</h2>
                                <p class="font-20">Famous Writers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Box End -->
    </div>
@endsection

@push('js')
    <script
        src="{{asset('user/vendor/bootstrap-touchspin/bootstrap-touchspin.js')}}"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
    <script src="{{asset('user/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- SWIPER JS -->
    <script src="{{asset('user/js/dz.carousel.js')}}"></script><!-- DZ CAROUSEL JS -->
    <script src="{{asset('user/vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('user/vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
@endpush



