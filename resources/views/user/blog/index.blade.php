@extends('user.layouts.app')
@push('css')

@endpush

@section('content')
    <!-- inner page banner -->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
         style="background-image:url('{{asset('user/images/background/bg3.jpg')}}');">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Blogs</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('welcome')}}"> Home</a></li>
                        <li class="breadcrumb-item">Blogs</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- inner page banner End-->
    <!-- Blog Large -->
    <section class="content-inner-1 bg-img-fix">
        <div class="container">
            @if(request()->has('category'))
                <div class="widget recent-posts-entry">
                    <h4 class="widget-title">Category : {{request()->get('category')}}</h4>
                </div>
            @endif


            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-xl-6 col-lg-6">
                        <div class="dz-blog style-1 bg-white m-b30">
                            <div class="dz-media dz-img-effect zoom">
                                <a href="{{route('blog.show',['blog'=>$blog->slug])}}">
                                    <img src="{{$blog->image}}" alt="">
                                </a>
                            </div>
                            <div class="dz-info">
                                <h4 class="dz-title">
                                    <a href="{{route('blog.show',['blog'=>$blog->slug])}}">{{$blog->title}}</a>
                                </h4>
                                <p class="m-b0">{{str()->words($blog->meta_description,20,'....')}}</p>
                                <div class="dz-meta meta-bottom">
                                    <ul class="border-0 pt-0">
                                        <li class="post-date"><i
                                                class="far fa-calendar fa-fw m-r10"></i>{{$blog->published_at}}
                                        </li>
                                        <li class="post-author"><i class="far fa-user fa-fw m-r10"></i>By <a
                                                href="javascript:void(0);"> {{$blog->user->name}}</a></li>
                                        {{--<li class="post-comment"><a href="javascript:void(0);"><i
                                                    class="far fa-comment-alt fa-fw"></i><span>15</span></a></li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $blogs->links('vendor.pagination.book-list') }}
        </div>
    </section>
@endsection


@push('js')
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
@endpush
