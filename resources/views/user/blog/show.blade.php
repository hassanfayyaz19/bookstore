@extends('user.layouts.app')
@push('css')
    <meta name="keywords" content="{{$blog->meta_keywords}}"/>
    <meta name="author" content="{{config('app.name')}}"/>
    <meta name="description" content="{{$blog->meta_description}}"/>
    <meta property="og:title" content="{{$blog->title}}"/>
    <meta property="og:description" content="{{$blog->meta_description}}"/>
    <meta property="og:image" content="{{$blog->image}}"/>
    <meta name="format-detection" content="telephone=no">
@endpush

@section('content')
    <!-- inner page banner -->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
         style="background-image:url({{asset('user/images/background/bg3.jpg')}});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Blog Details</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('welcome')}}"> Home</a></li>
                        <li class="breadcrumb-item">Blog Details</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- inner page banner End-->
    <!-- Blog Large -->
    <section class="content-inner-1 bg-img-fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <!-- blog start -->
                    <div class="dz-blog blog-single style-1">
                        <div class="dz-media rounded-md">
                            <img src="{{$blog->image}}" alt="">
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta  border-0 py-0 mb-2">
                                <ul class="border-0 pt-0">
                                    <li class="post-date"><i
                                            class="far fa-calendar fa-fw m-r10"></i>{{$blog->published_at}}
                                    </li>
                                    <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                            href="javascript:void(0);"> {{$blog->user->name}}</a></li>
                                </ul>
                            </div>
                            <h4 class="dz-title">{{$blog->title}}</h4>
                            <div class="dz-post-text">{!! $blog->body !!}</div>
                            <div class="dz-meta meta-bottom border-top">
                                <div class="post-tags">
                                    <strong>Tags:</strong>
                                    @if(!empty($blog->meta_keywords))
                                        @foreach($blog->meta_keywords as $keyword)
                                            <a href="javascript:void(0);">{{$keyword}}</a>,
                                        @endforeach
                                    @endif
                                </div>
                                <div class="dz-social-icon primary-light">
                                    <ul>
                                        <li><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                                        <li><a class="fab fa-instagram" href="javascript:void(0);"></a></li>
                                        <li><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row extra-blog style-1">
                        <div class="col-lg-12">
                            <h4 class="blog-title">RELATED Books</h4>
                        </div>
                        @foreach($blog->recommended_books as $book)
                            <div class="col-lg-6 col-md-6">
                                <div class="dz-blog style-1 bg-white m-b30">
                                    <div class="dz-media">
                                        <a href="{{route('book.show',['book'=>$book->id])}}">
                                            <img src="{{$book->image_url}}"
                                                 alt=""></a>
                                    </div>
                                    <div class="dz-info">
                                        <h5 class="dz-title">
                                            <a href="{{route('book.show',['book'=>$book->id])}}">{{$book->title}}</a>
                                        </h5>
                                        <p class="m-b0">{{str()->words($book->description,25,'....')}}</p>
                                        <div class="dz-meta meta-bottom">
                                            <ul class="">
                                                <li class="post-date"><i
                                                        class="far fa-calendar fa-fw m-r10"></i>{{$book->publication_date}}
                                                </li>
                                                <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                                        href="javascript:void(0);"> {{$book->publisher->name}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--<div class="clear" id="comment-list">
                        <div class="post-comments comments-area style-1 clearfix">
                            <h4 class="comments-title">4 COMMENTS</h4>
                            <div id="comment">
                                <ol class="comment-list">
                                    <li class="comment even thread-even depth-1 comment" id="comment-2">
                                        <div class="comment-body">
                                            <div class="comment-author vcard">
                                                <img src="images/profile4.jpg" alt="" class="avatar"/>
                                                <cite class="fn">Michel Poe</cite> <span class="says">says:</span>
                                                <div class="comment-meta">
                                                    <a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
                                                </div>
                                            </div>
                                            <div class="comment-content dz-page-text">
                                                <p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo
                                                    venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam
                                                    vulputate erat.</p>
                                            </div>
                                            <div class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="javascript:void(0);"><i
                                                        class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <ol class="children">
                                            <li class="comment byuser comment-author-w3itexpertsuser bypostauthor odd alt depth-2 comment"
                                                id="comment-3">
                                                <div class="comment-body" id="div-comment-3">
                                                    <div class="comment-author vcard">
                                                        <img src="images/profile3.jpg" alt="" class="avatar"/>
                                                        <cite class="fn">Celesto Anderson</cite> <span
                                                            class="says">says:</span>
                                                        <div class="comment-meta">
                                                            <a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
                                                        </div>
                                                    </div>
                                                    <div class="comment-content dz-page-text">
                                                        <p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris
                                                            in leo venenatis varius. Aliquam nunc enim, egestas ac dui in,
                                                            aliquam vulputate erat.</p>
                                                    </div>
                                                    <div class="reply">
                                                        <a class="comment-reply-link" href="javascript:void(0);"><i
                                                                class="fa fa-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="comment even thread-odd thread-alt depth-1 comment" id="comment-4">
                                        <div class="comment-body" id="div-comment-4">
                                            <div class="comment-author vcard">
                                                <img src="images/profile2.jpg" alt="" class="avatar"/>
                                                <cite class="fn">Ryan</cite> <span class="says">says:</span>
                                                <div class="comment-meta">
                                                    <a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
                                                </div>
                                            </div>
                                            <div class="comment-content dz-page-text">
                                                <p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo
                                                    venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam
                                                    vulputate erat.</p>
                                            </div>
                                            <div class="reply">
                                                <a class="comment-reply-link" href="javascript:void(0);"><i
                                                        class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment odd alt thread-even depth-1 comment" id="comment-5">
                                        <div class="comment-body" id="div-comment-5">
                                            <div class="comment-author vcard">
                                                <img src="images/profile1.jpg" alt="" class="avatar"/>
                                                <cite class="fn">Stuart</cite> <span class="says">says:</span>
                                                <div class="comment-meta">
                                                    <a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
                                                </div>
                                            </div>
                                            <div class="comment-content dz-page-text">
                                                <p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo
                                                    venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam
                                                    vulputate erat.</p>
                                            </div>
                                            <div class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="javascript:void(0);"><i
                                                        class="fa fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <div class="default-form comment-respond style-1" id="respond">
                                <h4 class="comment-reply-title" id="reply-title">LEAVE A REPLY <small> <a rel="nofollow"
                                                                                                          id="cancel-comment-reply-link"
                                                                                                          href="javascript:void(0)"
                                                                                                          style="display:none;">Cancel
                                            reply</a> </small></h4>
                                <div class="clearfix">
                                    <form method="post" id="comments_form" class="comment-form" novalidate>
                                        <p class="comment-form-author"><input id="name" placeholder="Author" name="author"
                                                                              type="text" value=""></p>
                                        <p class="comment-form-email"><input id="email" required="required"
                                                                             placeholder="Email" name="email" type="email"
                                                                             value=""></p>
                                        <p class="comment-form-comment"><textarea id="comments"
                                                                                  placeholder="Type Comment Here"
                                                                                  class="form-control4" name="comment"
                                                                                  cols="45" rows="3"
                                                                                  required="required"></textarea></p>
                                        <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
                                            <button id="submit" type="submit"
                                                    class="submit btn btn-primary btnhover3 filled">
                                                Submit Now <i class="fa fa-angle-right m-l10"></i>
                                            </button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                    <!-- blog END -->
                </div>
                <div class="col-xl-4 col-lg-4">
                    <aside class="side-bar sticky-top">
                        <div class="widget">
                            <div class="search-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="text" class="form-control" placeholder="Search" type="text">
                                        <span class="input-group-btn">
												<button type="submit" class="btn btn-primary "><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-search"><circle cx="11" cy="11"
                                                                                               r="8"></circle><line
                                                            x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
											</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget widget_categories">
                            <h4 class="widget-title">Category</h4>
                            <ul>
                                @foreach($blog_categories as $category)
                                    <li class="cat-item cat-item-26"><a
                                            href="{{route('blog.index',['category'=>$category->slug])}}">{{$category->name}}</a> {{--(3)--}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget recent-posts-entry">
                            <h4 class="widget-title">Recent Posts</h4>
                            <div class="widget-post-bx">
                                @foreach($latest_blogs as $blog)
                                    <div class="widget-post clearfix">
                                        <div class="dz-media">
                                            <a href="{{route('blog.show',['blog'=>$blog->slug])}}">
                                                <img src="{{$blog->image}}"
                                                     alt=""></a>
                                        </div>
                                        <div class="dz-info">
                                            <h6 class="title"><a
                                                    href="{{route('blog.show',['blog'=>$blog->slug])}}">{{$blog->title}}</a>
                                            </h6>
                                            <div class="dz-meta">
                                                <ul>
                                                    <li class="post-date"> {{$blog->published_at}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        {{--<div class="widget widget widget_categories">
                            <h4 class="widget-title">Archives</h4>
                            <ul>
                                <li><a href="javascript:void(0);">January</a>(3)</li>
                                <li><a href="javascript:void(0);">Fabruary</a>(4)</li>
                                <li><a href="javascript:void(0);">March</a>(4)</li>
                                <li><a href="javascript:void(0);">April</a>(3)</li>
                                <li><a href="javascript:void(0);">May</a>(4)</li>
                                <li><a href="javascript:void(0);">Jun</a>(1)</li>
                                <li><a href="javascript:void(0);">July</a>(4)</li>
                            </ul>
                        </div>--}}
                        {{--<div class="widget widget_tag_cloud">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                <a href="javascript:void(0);">Business</a>
                                <a href="javascript:void(0);">News</a>
                                <a href="javascript:void(0);">Brand</a>
                                <a href="javascript:void(0);">Website</a>
                                <a href="javascript:void(0);">Internal</a>
                                <a href="javascript:void(0);">Strategy</a>
                                <a href="javascript:void(0);">Brand</a>
                                <a href="javascript:void(0);">Mission</a>
                            </div>
                        </div>--}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Box -->
@endsection
@push('js')
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
@endpush



