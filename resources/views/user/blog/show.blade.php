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
                    <div class="clear" id="comment-list">
                        <div class="post-comments comments-area style-1 clearfix">
                            <h4 class="comments-title">{{count($blog->comments->where('parent_id',null))??0}}
                                COMMENTS</h4>
                            <div id="comment">
                                <ol class="comment-list">
                                    @foreach($blog->comments->where('parent_id',null) as $comment)
                                        <li class="comment even thread-even depth-1 comment" id="comment-2">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img
                                                        src="{{$comment->user->profile??asset('assets/media/default-profile.png')}}"
                                                        alt="" class="avatar"/>
                                                    <cite
                                                        class="fn">{{$comment->user->first_name}} {{$comment->user->last_name}}</cite>
                                                    <span class="says">says:</span>
                                                    <div class="comment-meta">
                                                        <a href="javascript:void(0);">{{$comment->created_at}}</a>
                                                    </div>
                                                </div>
                                                <div class="comment-content dz-page-text">
                                                    <p>{{$comment->content}}</p>
                                                </div>
                                                <div class="reply">
                                                    <a rel="nofollow" class="comment-reply-link"
                                                       href="javascript:void(0);" data-comment-id="{{$comment->id}}">
                                                        <i class="fa fa-reply"></i> Reply</a>
                                                </div>
                                            </div>
                                            <ol class="children">
                                                @foreach($comment->replies as $replay)
                                                    <li class="comment byuser comment-author-w3itexpertsuser bypostauthor odd alt depth-2 comment"
                                                        id="comment-3">
                                                        <div class="comment-body" id="div-comment-3">
                                                            <div class="comment-author vcard">
                                                                <img
                                                                    src="{{$replay->user->profile??asset('assets/media/default-profile.png')}}"
                                                                    alt="" class="avatar"/>
                                                                <cite
                                                                    class="fn">{{$replay->user->first_name}} {{$replay->user->last_name}}</cite>
                                                                <span
                                                                    class="says">says:</span>
                                                                <div class="comment-meta">
                                                                    <a href="javascript:void(0);">{{$replay->created_at}}</a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content dz-page-text">
                                                                <p>{{$replay->content}}</p>
                                                            </div>
                                                            {{--<div class="reply">
                                                                <a class="comment-reply-link" href="javascript:void(0);"><i
                                                                        class="fa fa-reply"></i> Reply</a>
                                                            </div>--}}
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ol>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                            <div class="default-form comment-respond style-1" id="respond">
                                <h4 class="comment-reply-title" id="reply-title">LEAVE A REPLY <small>
                                        <a rel="nofollow"
                                           id="cancel-comment-reply-link"
                                           href="javascript:void(0)"
                                           style="display:none;">Cancel
                                            reply</a> </small></h4>
                                <div class="clearfix">
                                    <form method="post" id=""
                                          action="{{route('blog.comment.store',['blog'=>$blog->id])}}"
                                          class="comment-form"
                                          novalidate>
                                        @csrf
                                        <p class="comment-form-comment">
                                            <textarea
                                                placeholder="Type Comment Here"
                                                class="form-control4" name="comment"
                                                cols="45" rows="3"
                                                required="required"></textarea>
                                        </p>
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
                    </div>
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
                                @foreach($latest_blogs as $latest_blog)
                                    <div class="widget-post clearfix">
                                        <div class="dz-media">
                                            <a href="{{route('blog.show',['blog'=>$latest_blog->slug])}}">
                                                <img src="{{$latest_blog->image}}"
                                                     alt=""></a>
                                        </div>
                                        <div class="dz-info">
                                            <h6 class="title"><a
                                                    href="{{route('blog.show',['blog'=>$latest_blog->slug])}}">{{$latest_blog->title}}</a>
                                            </h6>
                                            <div class="dz-meta">
                                                <ul>
                                                    <li class="post-date"> {{$latest_blog->published_at}}</li>
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
    <script>
        $(document).ready(function () {
            var route = "{{route('blog.comment.store',['blog'=>$blog->id])}}"
            console.log("route: ", route)

            $('.comment-reply-link').on('click', function () {
                console.log("clicked")
                let comment_id = $(this).data('comment-id');
                console.log(comment_id)
                let csrf_token = "{{csrf_token()}}"
                // let comment = $('#respond').html()
                $(this).parent().html('<div class="default-form comment-respond style-1" id="respond">' +
                    '<h4 class="comment-reply-title" id="reply-title">LEAVE A REPLY <small>' +
                    '<a rel="nofollow" id="cancel-comment-reply-link" href="javascript:void(0)" style="display:none;">Cancel reply</a> </small></h4>' +
                    '<div class="clearfix">' +
                    '<form method="post" action="' + route + '" id="comments_form" class="comment-form" novalidate>' +
                    '<input type="hidden" name="_token" value="' + csrf_token + '"/>' +
                    ' <p class="comment-form-comment">' +
                    '<textarea placeholder="Type Comment Here" class="form-control4" name="comment" cols="45" rows="3" required="required"></textarea></p>' +
                    '<input type="hidden" name="parent_id" value="' + comment_id + '">' +
                    '<button id="submit" type="submit" class="submit btn btn-primary btnhover3 filled">Submit Now<i class="fa fa-angle-right m-l10"></i></button>' +
                    '</p>' +
                    '</form>' +
                    '</div>' +
                    '</div>')
            })
        })
    </script>
@endpush



