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
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-yellow"></i></li>
                                                <li><i class="flaticon-star text-muted"></i></li>
                                            </ul>
                                            <h6 class="m-b0">4.0 (15 reviews)</h6>
                                        </div>
                                        {{--                                        <div class="social-area">--}}
                                        {{--                                            <ul class="dz-social-icon style-3">--}}
                                        {{--                                                <li><a href="https://www.facebook.com/dexignzone" target="_blank"><i--}}
                                        {{--                                                            class="fa-brands fa-facebook-f"></i></a></li>--}}
                                        {{--                                                <li><a href="https://twitter.com/dexignzones" target="_blank"><i--}}
                                        {{--                                                            class="fa-brands fa-twitter"></i></a></li>--}}
                                        {{--                                                <li><a href="https://www.whatsapp.com/" target="_blank"><i--}}
                                        {{--                                                            class="fa-brands fa-whatsapp"></i></a></li>--}}
                                        {{--                                                <li><a href="https://www.google.com/intl/en-GB/gmail/about/"--}}
                                        {{--                                                       target="_blank"><i class="fa-solid fa-envelope"></i></a></li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
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
                                            <li><span>Publisher</span>{{$book->publisher->name}}</li>
                                            <li><span>Year</span>{{date('Y',strtotime($book->publication_date))}}</li>
                                        </ul>
                                    </div>
                                    <p class="text-1">{{$book->description}}</p>
                                    <div class="book-footer">
                                        <div class="price">
                                            <h5>$ {{$book->sale_price}}</h5>
                                            <p class="p-lr10">$ {{$book->price}}</p>
                                        </div>
                                        <div class="product-num">
                                            <a href="javascript:"
                                               class="btn btn-primary btnhover btnhover2 add-to-cart"
                                               data-book="{{$book}}">
                                                <i class="flaticon-shopping-cart-1"></i> <span>Add to cart</span></a>
                                            <div class="bookmark-btn style-1 d-none d-sm-block">
                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault1">
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

                <div class="row">
                    <div class="col-xl-8">
                        <div class="product-description tabs-site-button">
                            <ul class="nav nav-tabs">
                                <li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Details Product</a>
                                </li>
                                {{--                                <li><a data-bs-toggle="tab" href="#developement-1">Customer Reviews</a></li>--}}
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
                                            <h4 class="comments-title">4 COMMENTS</h4>
                                            <div id="comment">
                                                <ol class="comment-list">
                                                    <li class="comment even thread-even depth-1 comment" id="comment-2">
                                                        <div class="comment-body">
                                                            <div class="comment-author vcard">
                                                                <img src="images/profile4.jpg" alt="" class="avatar"/>
                                                                <cite class="fn">Michel Poe</cite> <span
                                                                    class="says">says:</span>
                                                                <div class="comment-meta">
                                                                    <a href="javascript:void(0);">December 28, 2022 at
                                                                        6:14 am</a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content dlab-page-text">
                                                                <p>Donec suscipit porta lorem eget condimentum. Morbi
                                                                    vitae mauris in leo venenatis varius. Aliquam nunc
                                                                    enim, egestas ac dui in, aliquam vulputate erat.</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a rel="nofollow" class="comment-reply-link"
                                                                   href="javascript:void(0);"><i
                                                                        class="fa fa-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                        <ol class="children">
                                                            <li class="comment byuser comment-author-w3itexpertsuser bypostauthor odd alt depth-2 comment"
                                                                id="comment-3">
                                                                <div class="comment-body" id="div-comment-3">
                                                                    <div class="comment-author vcard">
                                                                        <img src="images/profile3.jpg" alt=""
                                                                             class="avatar"/>
                                                                        <cite class="fn">Celesto Anderson</cite> <span
                                                                            class="says">says:</span>
                                                                        <div class="comment-meta">
                                                                            <a href="javascript:void(0);">December 28,
                                                                                2022 at 6:14 am</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-content dlab-page-text">
                                                                        <p>Donec suscipit porta lorem eget condimentum.
                                                                            Morbi vitae mauris in leo venenatis varius.
                                                                            Aliquam nunc enim, egestas ac dui in,
                                                                            aliquam vulputate erat.</p>
                                                                    </div>
                                                                    <div class="reply">
                                                                        <a class="comment-reply-link"
                                                                           href="javascript:void(0);"><i
                                                                                class="fa fa-reply"></i> Reply</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li class="comment even thread-odd thread-alt depth-1 comment"
                                                        id="comment-4">
                                                        <div class="comment-body" id="div-comment-4">
                                                            <div class="comment-author vcard">
                                                                <img src="images/profile2.jpg" alt="" class="avatar"/>
                                                                <cite class="fn">Ryan</cite> <span
                                                                    class="says">says:</span>
                                                                <div class="comment-meta">
                                                                    <a href="javascript:void(0);">December 28, 2022 at
                                                                        6:14 am</a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content dlab-page-text">
                                                                <p>Donec suscipit porta lorem eget condimentum. Morbi
                                                                    vitae mauris in leo venenatis varius. Aliquam nunc
                                                                    enim, egestas ac dui in, aliquam vulputate erat.</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a class="comment-reply-link"
                                                                   href="javascript:void(0);"><i
                                                                        class="fa fa-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comment odd alt thread-even depth-1 comment"
                                                        id="comment-5">
                                                        <div class="comment-body" id="div-comment-5">
                                                            <div class="comment-author vcard">
                                                                <img src="images/profile1.jpg" alt="" class="avatar"/>
                                                                <cite class="fn">Stuart</cite> <span
                                                                    class="says">says:</span>
                                                                <div class="comment-meta">
                                                                    <a href="javascript:void(0);">December 28, 2022 at
                                                                        6:14 am</a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content dlab-page-text">
                                                                <p>Donec suscipit porta lorem eget condimentum. Morbi
                                                                    vitae mauris in leo venenatis varius. Aliquam nunc
                                                                    enim, egestas ac dui in, aliquam vulputate erat.</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a rel="nofollow" class="comment-reply-link"
                                                                   href="javascript:void(0);"><i
                                                                        class="fa fa-reply"></i> Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div class="default-form comment-respond style-1" id="respond">
                                                <h4 class="comment-reply-title" id="reply-title">LEAVE A REPLY <small>
                                                        <a rel="nofollow" id="cancel-comment-reply-link"
                                                           href="javascript:void(0)" style="display:none;">Cancel
                                                            reply</a> </small></h4>
                                                <div class="clearfix">
                                                    <form method="post" id="comments_form" class="comment-form"
                                                          novalidate>
                                                        <p class="comment-form-author"><input id="name"
                                                                                              placeholder="Author"
                                                                                              name="author" type="text"
                                                                                              value=""></p>
                                                        <p class="comment-form-email"><input id="email"
                                                                                             required="required"
                                                                                             placeholder="Email"
                                                                                             name="email" type="email"
                                                                                             value=""></p>
                                                        <p class="comment-form-comment"><textarea id="comments"
                                                                                                  placeholder="Type Comment Here"
                                                                                                  class="form-control4"
                                                                                                  name="comment"
                                                                                                  cols="45" rows="3"
                                                                                                  required="required"></textarea>
                                                        </p>
                                                        <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
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
                                                <img src="{{$book->image_url}}" alt="">
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="subtitle">{{$book->title}}</h5>
                                                <ul class="dz-tags">
                                                    @foreach($book->categories as $category)
                                                        <li>{{$category->name}},</li>
                                                    @endforeach
                                                </ul>


                                                <div class="price">
                                                    <span class="price-num">$ {{$book->sale_price}}</span>
                                                    <del>$ {{$book->price}}</del>
                                                </div>
                                                <a href="javascript:"
                                                   class="btn btn-outline-primary btn-sm btnhover btnhover2 add-to-cart">
                                                    <i class="flaticon-shopping-cart-1 me-2"></i> Add to cart</a>
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



