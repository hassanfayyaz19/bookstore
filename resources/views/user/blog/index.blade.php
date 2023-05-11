@extends('user.layouts.app')
@push('css')
    <style>
        .list-group-item {
            border-left: none !important;
            border-right: none !important;
            border-top: none !important;
        }

        .signup__container {
            position: relative;
            width: 100%;
            min-height: 300px;
            margin-bottom: 32px;
            background-color: #a5e3b9;
            overflow: hidden;
        }

        .one-signup__container-gradient1 {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(194.95deg, #d0f224 28.01%, rgba(161, 223, 123, 0.4) 89.46%);
            filter: blur(74.2446px);
            transform: rotate(22.64deg);
        }

        .one-signup__container-gradient2 {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, #79dfff 0%, rgba(217, 217, 217, 0) 100%);
            filter: blur(74.2446px);
            transform: rotate(-23.97deg);
        }
    </style>
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
        <div class="row">
            <div class="col-md-2 col-lg-1"></div>
            <div class="col-md-6 col-lg-7">
                <nav class="navbar navbar-expand-lg navbar-light bg-light  mt-4">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                @foreach($blog_categories as $category)
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="{{route('blog.index',['category'=>$category->slug])}}">{{$category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-3 col-lg-3"></div>
            <div class="col-md-1 col-lg-1"></div>
        </div>
    </div>

    <!-- inner page banner End-->
    <!-- Blog Large -->
    <section class="content-inner-1 bg-img-fix mt-1">
        <div class="row">
            <div class="col-md-2 col-lg-1"></div>
            <div class="col-md-6 col-lg-7">
                @if(request()->has('category'))
                    <div class="widget recent-posts-entry">
                        <h4 class="widget-title">Category : {{request()->get('category')}}</h4>
                    </div>
                @endif

                <div class="row">
                    @foreach($blogs as $blog)
                        @if($loop->iteration==1)
                            <div class="col-xl-12 col-lg-12">
                                <div class="dz-blog style-1 bg-white m-b30">
                                    <div class="dz-media">
                                        <a href="{{route('blog.show',['blog'=>$blog->slug])}}">
                                            <img src="{{$blog->image}}" alt=""
                                                 style="height: 200px;object-fit: cover">
                                        </a>
                                    </div>
                                    <div class="dz-info">
                                         <span
                                             class="text-primary mt-1 mb-1 fw-bold">{{$blog->categories->first()->name}}</span>
                                        <h5 class="dz-title">
                                            <a href="{{route('blog.show',['blog'=>$blog->slug])}}">{{$blog->title}}</a>
                                        </h5>
                                        By <span class="text-primary">{{$blog->user->name}}</span> . <span
                                            class="">{{date('M d,Y',strtotime($blog->published_at))}}</span>
                                        {{--                                        <small class="m-b0">{{str()->words($blog->meta_description,10,'....')}}</small>--}}
                                    </div>
                                </div>
                            </div>
                            @php
                                continue;
                            @endphp
                        @endif

                    @endforeach
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach($blogs as $blog)
                        @if($loop->iteration!=1)
                            <div class="col">
                                <div class="card h-100">
                                    <a href="{{route('blog.show',['blog'=>$blog->slug])}}">
                                        <img src="{{$blog->image}}" class="card-img-top" alt="..."
                                             style="height: 150px;object-fit: cover">
                                    </a>
                                    <div class="card-body">
                                        <span
                                            class="text-primary mt-1 mb-1 fw-bold">{{$blog->categories->first()->name}}</span>
                                        <h5 class="dz-title"><a
                                                href="{{route('blog.show',['blog'=>$blog->slug])}}">{{$blog->title}} </a>
                                        </h5>
                                        By <span class="text-primary">{{$blog->user->name}}</span> . <span
                                            class="">{{date('M d,Y',strtotime($blog->published_at))}}</span>
                                        {{--                                        <p class="card-text">{{str()->words($blog->meta_description,10,'....')}}</p>--}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                {{ $blogs->links('vendor.pagination.book-list') }}
            </div>

            <div class="col-md-3 col-lg-3">
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
                <div class="signup__container">
                    <div class="one-signup__container-gradient1">&nbsp;</div>
                    <div class="one-signup__container-gradient2">&nbsp;</div>
                    <section class="one-signup">
                        <div class="one-signup__content">
                            <h3 class="text-center pt-5 text-dark">
                                Start your <br>
                                online business <br>
                                today. For free.</h3>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <p class="text-dark mt-4">
                                        Sign up for Shopify's free trial to access all of the tools and services you
                                        need to start, run, and grow your business.
                                    </p>
                                </div>
                                <div class="col-md-2"></div>

                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <input class="form-control mt-4" placeholder="enter email" type="email"
                                           style="border-radius: 20px;">
                                    <button class="btn btn-dark col-md-12 mt-3" style="border-radius: 20px;">Start
                                        free
                                        trail
                                    </button>
                                </div>
                                <div class="col-md-2"></div>

                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <p class="text-center mt-3 text-dark" style="font-size: 0.7rem;">Try Shopify for
                                        free, no credit card required. By
                                        entering your email, you agree to receive marketing emails from Shopify.</p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>

                        </div>
                    </section>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fas fa-lightbulb"></i> New Books</h5>
                        <button class="btn btn-default" type="button" data-bs-toggle="collapse"
                                data-bs-target="#cardContent" aria-expanded="false" aria-controls="cardContent">
                            <span class="icon">
                                <i class="fas fa-minus"></i>
                            </span>
                        </button>
                    </div>
                    <div id="cardContent" class="collapse">
                        <div class="card-body">
                            <ul class="list-group border-0">
                                <li class="list-group-item">Item 1</li>
                                <li class="list-group-item">Item 2</li>
                                <li class="list-group-item">Item 3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fas fa-fire"></i> Best Selling</h5>
                        <button class="btn btn-default" type="button" data-bs-toggle="collapse"
                                data-bs-target="#popularContent" aria-expanded="false" aria-controls="cardContent">
                            <span class="icon">
                                <i class="fas fa-minus"></i>
                            </span>
                        </button>
                    </div>
                    <div id="popularContent" class="collapse">
                        <div class="card-body">
                            <ul class="list-group border-0">
                                @foreach($recommended_books as $book)
                                    <a href="{{route('book.show',['book'=>$book->slug])}}"
                                       class="list-group-item list-group-item-action pt-2 pb-2">{{$book->title}}</a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 col-lg-1"></div>
        </div>
    </section>
@endsection


@push('js')
    <script src="{{asset('user/js/dz.ajax.js')}}"></script><!-- AJAX -->
    <script src="{{asset('user/js/custom.js')}}"></script><!-- CUSTOM JS -->
    <script>
        const buttons = document.querySelectorAll('[data-bs-toggle="collapse"]');
        buttons.forEach(button => {
            const icon = button.querySelector('.icon');
            button.addEventListener('click', () => {
                const expanded = button.getAttribute('aria-expanded') === 'true';
                icon.innerHTML = expanded ? '<i class="fas fa-plus"></i>' : '<i class="fas fa-minus"></i>';
            });
        });
    </script>
@endpush
