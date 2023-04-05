@extends('admin.layouts.app')
@section('title', 'Settings')
@push('css')
@endpush
@section('content')
    <div class="d-flex flex-column flex-column-fluid">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">


                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <!--begin::Title-->
                    <h1
                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Account Settings
                    </h1>
                    <!--end::Title-->


                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            Account
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">

                <!--begin::Navbar-->
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                            <!--begin: Pic-->
                            <div class="me-7 mb-4">
                                <div
                                    class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="{{isset($project_setting->profile)?asset($project_setting->profile):''}}"
                                         alt="image"/>
                                    <div
                                        class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                                    </div>
                                </div>
                            </div>
                            <!--end::Pic-->

                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div
                                    class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::User-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="#"
                                               class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{auth()->guard('admin')->user()->name}}</a>
                                        </div>
                                        <!--end::Name-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Actions-->
                                    <!--end::Actions-->
                                </div>
                                <!--end::Title-->

                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span
                                                        class="svg-icon svg-icon-3 svg-icon-success me-2"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.5" x="13" y="6" width="13"
                                                                                  height="2" rx="1"
                                                                                  transform="rotate(90 13 6)"
                                                                                  fill="currentColor"/>
                                                                            <path
                                                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                                fill="currentColor"/>
                                                                        </svg>
                                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <div class="fs-2 fw-bold" data-kt-countup="true"
                                                         data-kt-countup-value="4500"
                                                         data-kt-countup-prefix="$">0
                                                    </div>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 text-gray-400">Earnings
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->

                        <!--begin::Navs-->
                        <ul
                            class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">

                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 {{!request()->has('tab')?'active':''}}"
                                   href="{{route('admin.project_setting.index')}}">
                                    Settings </a>
                            </li>

                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 {{request()->has('tab')&&request()->tab=='home_settings'?'active':''}}"
                                   href="{{route('admin.project_setting.index',['tab'=>'home_settings'])}}">
                                    Home Settings </a>
                            </li>

                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                   href="javascript:">
                                    API Keys </a>
                            </li>

                        </ul>
                        <!--begin::Navs-->
                    </div>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <!--end::Navbar-->

                @if(!request()->get('tab'))
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button"
                             data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details"
                             aria-expanded="true" aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Profile Details</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->

                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">

                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form" class="form" method="post"
                                  action="{{route('admin.project_setting.store')}}" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline"
                                                 data-kt-image-input="true"
                                                 style="background-image: url('{{asset('assets/media/svg/avatars/blank.svg')}}')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px"
                                                     style="background-image: url('{{isset($project_setting->profile)?asset($project_setting->profile):'assets/media/svg/avatars/blank.svg'}}')">
                                                </div>
                                                <!--end::Preview existing avatar-->

                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change"
                                                    data-bs-toggle="tooltip" title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>

                                                    <!--begin::Inputs-->
                                                    <input type="file" name="profile"
                                                           accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden" name="avatar_remove"/>
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->

                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel"
                                                    data-bs-toggle="tooltip" title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                <!--end::Cancel-->

                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove"
                                                    data-bs-toggle="tooltip" title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->

                                            <!--begin::Hint-->
                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Full Name</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="first_name"
                                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                           placeholder="First name"
                                                           value="{{$project_setting->first_name??''}}"/>
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="last_name"
                                                           class="form-control form-control-lg form-control-solid"
                                                           placeholder="Last name"
                                                           value="{{$project_setting->last_name??''}}"/>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Company</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="company_name"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="Company name"
                                                   value="{{$project_setting->company_name??''}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="">Mobile Number</span>

                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="Phone number must be active"></i>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="tel" name="mobile_number"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="Mobile number"
                                                   value="{{$project_setting->mobile_number??''}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="">Phone Number</span>

                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                               data-bs-toggle="tooltip"
                                               title="Phone number must be active"></i>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="tel" name="phone_number"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="Phone number"
                                                   value="{{$project_setting->phone_number??''}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="">Email</span>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="email" name="email"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="Email"
                                                   value="{{$project_setting->email??''}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="">Address</span>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="address"
                                                   class="form-control form-control-lg form-control-solid"
                                                   placeholder="Address"
                                                   value="{{$project_setting->address??''}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Description</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="description"
                                                  id="" cols="30"
                                                  rows="10">{{$project_setting->description??''}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="">Logo</span>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input name="logo" class="form-control" type="file">
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Time Zone</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select name="timezone" aria-label="Select a Timezone"
                                                    data-control="select2"
                                                    data-placeholder="Select a timezone.."
                                                    class="form-select form-select-solid form-select-lg">
                                                <option value="" selected disabled>Select a Timezone..</option>
                                                @foreach($timezone_identifiers as $timezone)
                                                    <option
                                                        value="{{$timezone}}" {{isset($project_setting->timezone) && $project_setting->timezone==$timezone?'selected':''}}>{{$timezone}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label  fw-semibold fs-6">Currency</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <select name="currency" aria-label="Select a Currency"
                                                    data-control="select2"
                                                    data-placeholder="Select a currency.."
                                                    class="form-select form-select-solid form-select-lg">
                                                <option value="">Select a currency..</option>
                                                <option data-kt-flag="flags/united-states.svg" value="USD">
                                                    <b>USD</b>&nbsp;-&nbsp;USA dollar
                                                </option>
                                                <option data-kt-flag="flags/united-kingdom.svg" value="GBP">
                                                    <b>GBP</b>&nbsp;-&nbsp;British pound
                                                </option>
                                                <option data-kt-flag="flags/australia.svg" value="AUD">
                                                    <b>AUD</b>&nbsp;-&nbsp;Australian dollar
                                                </option>
                                                <option data-kt-flag="flags/japan.svg" value="JPY">
                                                    <b>JPY</b>&nbsp;-&nbsp;Japanese yen
                                                </option>
                                                <option data-kt-flag="flags/sweden.svg" value="SEK">
                                                    <b>SEK</b>&nbsp;-&nbsp;Swedish krona
                                                </option>
                                                <option data-kt-flag="flags/canada.svg" value="CAD">
                                                    <b>CAD</b>&nbsp;-&nbsp;Canadian dollar
                                                </option>
                                                <option data-kt-flag="flags/switzerland.svg" value="CHF">
                                                    <b>CHF</b>&nbsp;-&nbsp;Swiss franc
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Card body-->

                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset"
                                            class="btn btn-light btn-active-light-primary me-2">Discard
                                    </button>

                                    <button type="submit" class="btn btn-primary"
                                            id="kt_account_profile_details_submit">Save Changes
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button"
                             data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details"
                             aria-expanded="true" aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Contact Us</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->

                        <!--begin::Content-->
                        <div class="collapse show">

                            <!--begin::Form-->
                            <form class="form" method="post"
                                  action="{{route('admin.project_setting.store')}}" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Headline</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row">
                                                    <input type="text" name="contact_us_headline"
                                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                           placeholder="Headline"
                                                           value="{{$project_setting->details->contact_us_headline??''}}"/>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Description</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="contact_us_description"
                                                  id="" cols="30"
                                                  rows="10">{{$project_setting->details->contact_us_description??''}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->

                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset"
                                            class="btn btn-light btn-active-light-primary me-2">Discard
                                    </button>
                                    <input type="hidden" name="contact_us">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                @elseif(request()->get('tab')=='home_settings')
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button"
                             data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details"
                             aria-expanded="true" aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Home Settings</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->

                        <!--begin::Content-->
                        <div class="collapse show">

                            <!--begin::Form-->
                            <form class="form" method="post"
                                  action="{{route('admin.project_setting.store')}}" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Recommended For You</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="recommended_for_you_description"
                                                  id="" cols="30"
                                                  rows="10">{{$project_setting->details->recommended_for_you_description??'Based on your previous purchases and browsing history, we recommend books that we believe will pique your interest and inspire you. Our goal is to provide you with a seamless and enjoyable reading experience, so feel free to browse our recommended books and discover your next favorite read.
'}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->

                                <div class="card-body border-top p-9">
                                    <h2>Feature Headline 1</h2>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Headline 1 title</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                   name="feature_1_headline"
                                                   value="{{$project_setting->details->feature_1_headline??'Instant Delivery'}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Headline 1 description</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="feature_1_headline_description" cols="30"
                                                  rows="10">{{$project_setting->details->feature_1_headline_description??'Our system ensures that your purchased books are available for download immediately after purchase.'}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>

                                <div class="card-body border-top p-9">
                                    <h2>Feature Headline 2</h2>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Headline 2 title</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                   name="feature_2_headline"
                                                   value="{{$project_setting->details->feature_2_headline??'Secure Payment'}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Headline 2 description</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="feature_2_headline_description" cols="30"
                                                  rows="10">{{$project_setting->details->feature_2_headline_description??'We offer a secure payment process that ensures your financial information is protected.'}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>

                                <div class="card-body border-top p-9">
                                    <h2>Feature Headline 3</h2>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Headline 3 title</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                   name="feature_3_headline"
                                                   value="{{$project_setting->details->feature_3_headline??'Best Quality'}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Headline 3 description</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="feature_3_headline_description" cols="30"
                                                  rows="10">{{$project_setting->details->feature_3_headline_description??'We offer the highest quality of educational books written by professionals in various categories'}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>

                                <div class="card-body border-top p-9">
                                    <h2>Feature Headline 4</h2>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Headline 4 title</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                   name="feature_4_headline"
                                                   value="{{$project_setting->details->feature_4_headline??'Positive Feedback'}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Headline 4 description</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="feature_4_headline_description" cols="30"
                                                  rows="10">{{$project_setting->details->feature_4_headline_description??'Our books have received consistently positive feedback, with an average rating of 4.9 stars out of 5 from our satisfied customers.'}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>

                                <div class="card-body border-top p-9">
                                    <h2>Our Mission</h2>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Our Mission
                                            headline</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                   name="our_mission_headline"
                                                   value="{{$project_setting->details->our_mission_headline??'Our Mission'}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Our Mission description</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="our_mission_description" cols="30"
                                                  rows="10">{{$project_setting->details->our_mission_description??'At A2ZBooks, our mission is to provide a diverse collection of educational books written by professionals in their respective fields, delivering the best reading experience with competitive pricing, and excellent customer service, to inspire and empower our customers to unlock their full potential.'}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Our Mission Box 1 headline</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                   name="our_mission_box_1_headline"
                                                   value="{{$project_setting->details->our_mission_box_1_headline??'Best Bookstore'}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Our Mission Box 1 description</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="our_mission_box_1_description" cols="30"
                                                  rows="10">{{$project_setting->details->our_mission_box_1_description??'A2ZBooks is the go-to bookstore for educational books, featuring a wide-ranging collection of books authored by professionals across different categories, competitive pricing, and exceptional customer service. With an average rating of 4.9 stars out of 5, A2ZBooks has gained a trusted reputation for providing high-quality educational books, thus making it one of the best shops online for ebooks.
'}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Our Mission Box 2 headline</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                   name="our_mission_box_2_headline"
                                                   value="{{$project_setting->details->our_mission_box_2_headline??'Trusted Seller'}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Our Mission Box 2 description</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="our_mission_box_2_description" cols="30"
                                                  rows="10">{{$project_setting->details->our_mission_box_2_description??'We are your most reliable and trusted seller of educational books, consistently earning an average rating of 4.9 stars out of 5. Customers rave about the exceptional quality of the books, with many stating that they exceeded their expectations upon purchase.'}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Our Mission Box 3 headline</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                   name="our_mission_box_3_headline"
                                                   value="{{$project_setting->details->our_mission_box_2_headline??'Video/Audio Books'}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">
                                            Our Mission Box 2 description</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="our_mission_box_3_description" cols="30"
                                                  rows="10">{{$project_setting->details->our_mission_box_3_description??'Too busy to read? No problem! A2ZBooks offers a unique reading experience with books that come with video and audio content, allowing users to learn on-the-go or while performing other tasks. Whether you prefer to read, watch, or listen, A2ZBooks has got you covered, offering an immersive and convenient learning experience.'}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>

                                <div class="card-body border-top p-9">
                                    <h2>Our Pricing Section</h2>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Headline</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                   name="our_price_headline"
                                                   value="{{$project_setting->details->our_price_headline??'Our Pricing'}}"/>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label
                                            class="col-lg-4 col-form-label fw-semibold fs-6">Description</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                        <textarea class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                  name="our_price_description" cols="30"
                                                  rows="10">{{$project_setting->details->our_price_description??'We offers competitive pricing plans, allowing customers to pay per purchase or join a membership club for additional discounts and perks. With flexible options to suit every budget, we ensures that customers get the best value for their money while purchasing high-quality educational books.'}}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>

                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset"
                                            class="btn btn-light btn-active-light-primary me-2">Discard
                                    </button>
                                    <input type="hidden" name="home_settings">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                @endif

            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
@push('js')
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>
        $(document).ready(function () {
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
        })
    </script>
@endpush
