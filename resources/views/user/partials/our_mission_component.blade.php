<section class="content-inner-1 bg-light">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title">{{$header_project_settings->details->our_mission_headline??''}}</h2>
            <p>{{$header_project_settings->details->our_mission_description??''}}</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="icon-bx-wraper style-3 m-b30">
                    <div class="icon-lg m-b20">
                        <i class="flaticon-open-book-1 icon-cell"></i>
                    </div>
                    <div class="icon-content">
                        <h4 class="title">{{$header_project_settings->details->our_mission_box_1_headline??''}}</h4>
                        <p>{{$header_project_settings->details->our_mission_box_1_description??''}}</p>
                        <a href="{{route('about_us')}}">Learn More <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="icon-bx-wraper style-3 m-b30">
                    <div class="icon-lg m-b20">
                        <i class="flaticon-exclusive icon-cell"></i>
                    </div>
                    <div class="icon-content">
                        <h4 class="title">{{$header_project_settings->details->our_mission_box_2_headline??''}}</h4>
                        <p>{{$header_project_settings->details->our_mission_box_2_description??''}}</p>
                        <a href="{{route('about_us')}}">Learn More <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="icon-bx-wraper style-3 m-b30">
                    <div class="icon-lg m-b20">
                        <i class="flaticon-store icon-cell"></i>
                    </div>
                    <div class="icon-content">
                        <h4 class="title">{{$header_project_settings->details->our_mission_box_3_headline??''}}</h4>
                        <p>{{$header_project_settings->details->our_mission_box_3_description??''}}</p>
                        <a href="{{route('about_us')}}">Learn More <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
