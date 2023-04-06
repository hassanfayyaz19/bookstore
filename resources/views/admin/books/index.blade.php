@extends('admin.layouts.app')
@section('title', 'Books List')
@push('css')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
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
                        Books List
                    </h1>
                </div>
            </div>
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">

                        </div>
                        <!--begin::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">


                                <!--begin::Add user-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add_modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                                    <svg width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                              rx="1" transform="rotate(-90 11.364 20.364)"
                                                              fill="currentColor"/>
                                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                              fill="currentColor"/></svg></span>Add Book
                                </button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->

                            <!--begin::Group actions-->

                            <!--end::Group actions-->


                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body py-4">

                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 nowrap" id="table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Id</th>
                                <th class="min-w-125px">title</th>
                                <th class="min-w-125px">Author</th>
                                <th class="min-w-125px">price</th>
                                <th class="min-w-125px">publisher</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-semibold">

                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->

    <!--begin::Modal - Add task-->
    <div class="modal fade" id="add_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Add Book Details</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                         data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                      transform="rotate(-45 6 17.3137)"
                                      fill="currentColor"/>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                      fill="currentColor"/>
                            </svg>
                        </span>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="add_form" class="form" action="#">
                        @csrf
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                             data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                             data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_add_user_header"
                             data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                             data-kt-scroll-offset="300px">

                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Categories</label>
                                <select class="form-select mb-2" name="categories" data-control="select2"
                                        data-hide-search="true" required multiple data-placeholder="Select an option">
                                    @foreach($categories as $category)
                                        <option
                                            value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Title</label>
                                <input type="text" name="title" class="form-control mb-3 mb-lg-0"
                                       required/>
                            </div>

                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Author</label>
                                <select class="form-select mb-2" name="author_id" data-control="select2"
                                        data-hide-search="true" required>
                                    <option value="" selected disabled>Select an option</option>
                                    @foreach($authors as $author)
                                        <option
                                            value="{{$author->id}}">{{$author->first_name.' '.$author->last_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Input group-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">price</label>
                                        <input type="number" name="price" class="form-control mb-3 mb-lg-0"
                                               min="0" step=".5"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Publisher</label>
                                        <select class="form-select mb-2" name="publisher_id" data-control="select2"
                                                data-hide-search="true" required>
                                            <option value="" selected disabled>Select an option</option>
                                            @foreach($publishers as $publisher)
                                                <option
                                                    value="{{$publisher->id}}">{{$publisher->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Publication Date</label>
                                        <input type="date" name="publication_date" class="form-control mb-3 mb-lg-0"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Page Count</label>
                                        <input type="number" name="page_count" class="form-control mb-3 mb-lg-0" min="0"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Language</label>
                                        <input type="text" name="language" class="form-control mb-3 mb-lg-0"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Description</label>
                                        <textarea name="description" class="form-control" cols="30"
                                                  rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class=" fw-semibold fs-6 mb-2">Video URL</label>
                                        <input name="video_url" class="form-control" type="url">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Image</label>
                                        <input name="image_url" class="form-control" type="file" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Banner Image</label>
                                        <input name="banner_image_url" class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">File</label>
                                        <input name="file_path" class="form-control" type="file" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Total Ratings</label>
                                        <input name="rating" class="form-control" type="number" min="0" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Number of Ratings</label>
                                        <input name="num_ratings" class="form-control" type="number" min="0" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="fv-row mb-7">
                                        <label class=" fw-semibold fs-6 mb-2">Recommended</label>
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input class="form-check-input w-45px h-30px" type="checkbox"
                                                   name="is_recommended" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="fv-row mb-7">
                                        <label class=" fw-semibold fs-6 mb-2">Featured</label>
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input class="form-check-input w-45px h-30px" type="checkbox"
                                                   name="is_featured" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="fv-row mb-7">
                                        <label class=" fw-semibold fs-6 mb-2">On Sale</label>
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input class="form-check-input w-45px h-30px" type="checkbox"
                                                   name="is_on_sale" id="add_is_on_sale" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" id="add_discount_percentage_div" style="display: none">
                                    <div class="fv-row mb-7">
                                        <label class=" fw-semibold fs-6 mb-2">Discount Percentage</label>
                                        <input class="form-control" type="number"
                                               name="discount_percentage" value="0" min="0" max="100">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!--end::Scroll-->

                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3"
                                    data-bs-dismiss="modal">
                                Discard
                            </button>

                            <button type="submit" class="btn btn-primary"
                                    data-kt-users-modal-action="submit">
                            <span class="indicator-label">
                                Submit
                            </span>
                                <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add task-->

    <!--begin::Modal - Update task-->
    <div class="modal fade" id="edit_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_edit_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update Book Details</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                         data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                      transform="rotate(-45 6 17.3137)"
                                      fill="currentColor"/>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                      fill="currentColor"/>
                            </svg>
                        </span>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="edit_form" class="form" action="#">
                        @csrf
                        @method('PUT')
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_edit_user_scroll"
                             data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                             data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_edit_user_header"
                             data-kt-scroll-wrappers="#kt_modal_edit_user_scroll"
                             data-kt-scroll-offset="300px">

                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Categories</label>
                                <select class="form-select mb-2" name="categories" id="categories"
                                        data-control="select2"
                                        data-hide-search="true" required multiple
                                        data-placeholder="Select an option">
                                    @foreach($categories as $category)
                                        <option
                                            value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Title</label>
                                <input type="text" name="title" id="title" class="form-control mb-3 mb-lg-0"
                                       required/>
                            </div>

                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Author</label>
                                <select class="form-select mb-2" name="author_id" id="author_id" data-control="select2"
                                        data-hide-search="true" required>
                                    <option value="" selected disabled>Select an option</option>
                                    @foreach($authors as $author)
                                        <option
                                            value="{{$author->id}}">{{$author->first_name.' '.$author->last_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Input group-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">price</label>
                                        <input type="number" name="price" id="price" class="form-control mb-3 mb-lg-0"
                                               min="0" step=".5"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Publisher</label>
                                        <select class="form-select mb-2" name="publisher_id" id="publisher_id"
                                                data-control="select2"
                                                data-hide-search="true" required>
                                            <option value="" selected disabled>Select an option</option>
                                            @foreach($publishers as $publisher)
                                                <option
                                                    value="{{$publisher->id}}">{{$publisher->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Publication Date</label>
                                        <input type="date" name="publication_date" id="publication_date"
                                               class="form-control mb-3 mb-lg-0"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Page Count</label>
                                        <input type="number" name="page_count" id="page_count"
                                               class="form-control mb-3 mb-lg-0" min="0"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Language</label>
                                        <input type="text" name="language" id="language"
                                               class="form-control mb-3 mb-lg-0"
                                               required/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Description</label>
                                        <textarea name="description" id="description" class="form-control" cols="30"
                                                  rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class="fw-semibold fs-6 mb-2">Video URL</label>
                                        <input name="video_url" id="video_url" class="form-control" type="url">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Image</label>
                                        <input name="image_url" class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Banner Image</label>
                                        <input name="banner_image_url" class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">File</label>
                                        <input name="file_path" class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Total Ratings</label>
                                        <input name="rating" id="rating" class="form-control" type="number" min="0"
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Number of Ratings</label>
                                        <input name="num_ratings" id="num_ratings" class="form-control" type="number"
                                               min="0" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class=" fw-semibold fs-6 mb-2">Recommended</label>
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input class="form-check-input w-45px h-30px" type="checkbox"
                                                   name="is_recommended" id="is_recommended"
                                                   value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class=" fw-semibold fs-6 mb-2">Featured</label>
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input class="form-check-input w-45px h-30px" type="checkbox"
                                                   name="is_featured" id="is_featured"
                                                   value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fv-row mb-7">
                                        <label class=" fw-semibold fs-6 mb-2">On Sale</label>
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input class="form-check-input w-45px h-30px" type="checkbox"
                                                   name="is_on_sale" id="edit_is_on_sale">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" id="edit_discount_percentage_div" style="display: none">
                                    <div class="fv-row mb-7">
                                        <label class=" fw-semibold fs-6 mb-2">Discount Percentage</label>
                                        <input class="form-control" type="number"
                                               name="discount_percentage" id="discount_percentage" min="0"
                                               max="100">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!--end::Scroll-->

                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <input type="hidden" id="hidden_id">
                            <button type="reset" class="btn btn-light me-3"
                                    data-bs-dismiss="modal">
                                Discard
                            </button>

                            <button type="submit" class="btn btn-primary"
                                    data-kt-users-modal-action="submit">
                            <span class="indicator-label">
                                Update
                            </span>
                                <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Update task-->
@endsection
@push('js')
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable({
                scrollX: true,
                'lengthChange': false,
                'autoWidth': false,
                'processing': true,
                'serverSide': true,
                'ajax': {
                    'url': "{{ route('admin.book.index') }}",
                    'dataType': 'json',
                    'type': 'GET',
                    'data': {
                        _token: "{{csrf_token()}}",
                    },
                },
                'columns': [
                    { 'data': 'id' },
                    { 'data': 'title' },
                    { 'data': 'author_id' },
                    { 'data': 'price' },
                    { 'data': 'publisher_id' },
                    { 'data': 'options', orderable: false, searchable: false },
                ],
                'order': [0, 'desc'],
                'bDestroy': true,
            })

            $('#add_form').on('submit', function (e) {
                e.preventDefault()
                $.ajax({
                    type: 'POST',
                    url: '{{route('admin.book.store')}}',
                    data: new FormData(this),
                    contentType: false,
                    data_type: 'json',
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        Swal.showLoading()
                    },
                    success: function (response) {
                        swal.close()
                        $('#table').DataTable().ajax.reload()
                        alertMsg(response.message, response.status)
                        $('#add_form')[0].reset()
                        $('#add_modal').modal('hide')
                    },
                    error: function (xhr, error, status) {
                        swal.close()
                        var response = xhr.responseJSON
                        alertMsg(response.message, 'error')
                    },
                })
            })

            $('#edit_form').on('submit', function (e) {
                e.preventDefault()
                var id = $('#hidden_id').val()
                var route = "{{route('admin.book.update',['book'=>':book'])}}"
                route = route.replace(':book', id)
                $.ajax({
                    type: 'POST',
                    url: route,
                    data: new FormData(this),
                    contentType: false,
                    data_type: 'json',
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        Swal.showLoading()
                    },
                    success: function (response) {
                        swal.close()
                        $('#table').DataTable().ajax.reload()
                        alertMsg(response.message, response.status)
                        $('#edit_modal').modal('hide')
                    },
                    error: function (xhr, error, status) {
                        swal.close()
                        var response = xhr.responseJSON
                        alertMsg(response.message, 'error')
                    },
                })
            })

            $('#add_is_on_sale').on('change', function () {
                $('#add_discount_percentage_div').hide()
                if (this.checked) {
                    $('#add_discount_percentage_div').show()
                }
            })

            $('#edit_is_on_sale').on('change', function () {
                $('#edit_discount_percentage_div').hide()
                if (this.checked) {
                    console.log('checked')
                    $('#edit_discount_percentage_div').show()
                }
            })
        })

        $(document).on('click', '.edit_data', function () {
            const data = $(this).data('params')
            console.log(data)
            var categories = []
            data.categories.forEach(function (row) {
                categories.push(row.pivot.category_id)
            })
            $('#author_id').val(data.author_id).trigger('change')
            $('#publisher_id').val(data.publisher_id).trigger('change')
            $('#categories').val(categories).trigger('change')
            $('#title').val(data.title)
            $('#description').text(data.description)
            $('#page_count').val(data.page_count)
            $('#price').val(data.price)
            $('#publication_date').val(data.publication_date)
            $('#language').val(data.language)
            $('#video_url').val(data.video_url)
            $('#rating').val(data.rating)
            $('#num_ratings').val(data.num_ratings)
            // tinyMCE.get('description').setContent(data.description)
            $('#hidden_id').val(data.id)

            if (data.is_recommended == 1) {
                $('#is_recommended').attr('checked', true)
            }
            if (data.is_featured == 1) {
                $('#is_featured').attr('checked', true)
            }

            if (data.is_on_sale == 1) {
                $('#edit_discount_percentage_div').show()
                $('#edit_is_on_sale').attr('checked', true)
                $('#discount_percentage').val(data.discount_percentage)
            }

            $('#edit_modal').modal('show')
        })

    </script>
@endpush
