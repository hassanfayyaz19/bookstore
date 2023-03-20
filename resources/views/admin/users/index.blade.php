@extends('admin.layouts.app')
@section('title', 'Users List')
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
                        Users List
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
                                                              fill="currentColor"/></svg></span>Add User
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
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Actions</th>
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
                    <h2 class="fw-bold">Add User Details</h2>
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
                                <label class="required fw-semibold fs-6 mb-2">First Name</label>
                                <input type="text" name="first_name" class="form-control mb-3 mb-lg-0"
                                       required/>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Last Name</label>
                                <input type="text" name="last_name" class="form-control mb-3 mb-lg-0"
                                       required/>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Email</label>
                                <input type="email" name="email" class="form-control mb-3 mb-lg-0"
                                       required/>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Password</label>
                                <input type="password" name="password" class="form-control mb-3 mb-lg-0"
                                       required/>
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
                    <h2 class="fw-bold">Update Category Details</h2>
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
                                <label class="required fw-semibold fs-6 mb-2">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control mb-3 mb-lg-0"
                                       required/>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control mb-3 mb-lg-0"
                                       required/>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Email</label>
                                <input type="email" name="email" id="email" class="form-control mb-3 mb-lg-0"
                                       required/>
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
                    'url': "{{ route('admin.user.index') }}",
                    'dataType': 'json',
                    'type': 'GET',
                    'data': {
                        _token: "{{csrf_token()}}"
                    }
                },
                'columns': [
                    { 'data': 'id' },
                    { 'data': 'first_name' },
                    { 'data': 'last_name' },
                    { 'data': 'email' },
                    { 'data': 'created_at' },
                    { 'data': 'options', orderable: false, searchable: false }
                ],
                'order': [0, 'desc'],
                'bDestroy': true
            })

            $('#add_form').on('submit', function (e) {
                e.preventDefault()
                $.ajax({
                    type: 'POST',
                    url: '{{route('admin.user.store')}}',
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
                    }
                })
            })

            $('#edit_form').on('submit', function (e) {
                e.preventDefault()
                var id = $('#hidden_id').val()
                var route = "{{route('admin.user.update',['user'=>':user'])}}"
                route = route.replace(':user', id)
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
                    }
                })
            })
        })

        $(document).on('click', '.edit_data', function () {
            var data = $(this).data('params')
            console.log(data)
            $('#first_name').val(data.first_name)
            $('#last_name').val(data.last_name)
            $('#email').val(data.email)
            $('#hidden_id').val(data.id)
            $('#edit_modal').modal('show')
        })


    </script>
@endpush
