@extends('admin.layouts.app')
@section('title', 'Create Blog')
@push('css')

    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
@endpush
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Update Blog
                    </h1>
                </div>
            </div>
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">
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
                <!--begin::Card-->
                <form action="{{route('admin.blog.update',['blog'=>$blog->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">

                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-4">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    @php
                                        $categories = $blog->categories->pluck('id')->toArray();
                                    @endphp
                                    <label class="form-label">Categories</label>
                                    <select class="form-select mb-2 @error('category_ids') is-invalid @enderror"
                                            name="category_ids[]"
                                            data-control="select2"
                                            data-hide-search="true" required
                                            multiple
                                            data-placeholder="Select an option">
                                        @foreach($blog_categories as $category)
                                            <option
                                                value="{{$category->id}}"
                                                @if(in_array($category->id,$categories)) selected @endif
                                            >{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_ids')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                       name="title" value="{{old('title')??$blog->title}}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Body</label>
                                <textarea class="form-control @error('body') is-invalid @enderror tinymce-editor"
                                          name="body">{{old('body')??$blog->body}}</textarea>
                                @error('body')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Image</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                       name="image">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Date</label>
                                        <input class="form-control @error('published_at') is-invalid @enderror"
                                               type="date" name="published_at"
                                               value="{{old('published_at')??$blog->published_at}}">
                                        @error('published_at')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Meta Title</label>
                                        <input class="form-control @error('meta_title') is-invalid @enderror"
                                               type="text" name="meta_title"
                                               value="{{old('meta_title')??$blog->meta_title}}">
                                        @error('meta_title')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Meta Description</label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror"
                                              name="meta_description" cols="30"
                                              rows="10">{{old('meta_description')??$blog->meta_description}}</textarea>
                                    @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Meta Keywords</label>
                                    <input class="tagify form-control @error('meta_keywords') is-invalid @enderror"
                                           name="meta_keywords">
                                    @error('meta_keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            @php
                                $recommended_books = $blog->recommended_books->pluck('id')->toArray();
                            @endphp
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Recommended Books</label>
                                    <select class="form-select mb-2 @error('book_ids') is-invalid @enderror"
                                            name="book_ids[]"
                                            data-control="select2"
                                            data-hide-search="true" required
                                            multiple
                                            data-placeholder="Select an option">
                                        @foreach($books as $book)
                                            <option
                                                value="{{$book->id}}"
                                                @if(in_array($book->id,$recommended_books)) selected @endif
                                            >{{$book->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('book_ids')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select mb-2 @error('status') is-invalid @enderror" name="status"
                                            data-control="select2"
                                            data-hide-search="true" required
                                            data-placeholder="Select an option">
                                        @foreach($status as $row)
                                            <option
                                                value="{{$row}}" {{$blog->status==$row?'selected':''}}>{{$row}}</option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3 d-flex justify-content-between">
                                    <a href="{{route('admin.blog.index')}}" class="btn btn-danger">Back</a>
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                </form>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            var tags = JSON.parse(@json($blog->meta_keywords));
            var input = document.querySelector('[name=meta_keywords]')
            var tagify = new Tagify(input, {
                dropdown: {
                    maxItems: 0,
                    enabled: 0
                },
            })
            tagify.on('change', console.log)
            tagify.addTags(tags)
        })
    </script>
@endpush
