@extends('user.master')
@section('content')

    <main class="creasoft-wrap">
        <section class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper">
                            <div class="breadcrumb-cnt">
                                <h1>Service Details</h1>
                                <span><a href="{{route('service')}}">Services</a><i class="bi bi-arrow-right"></i>{{$serviceName ?? ''}}</span>
                                <div class="breadcrumb-video">
                                    <img src="assets/img/breadcrumb-video.jpg" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="service-details sec-mar-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="service-details-content">
                            <img src="{{asset($serviceImg ?? '')}}" alt>
                            <h3><i><img src="assets/img/icons/service-details-icon.png" alt></i>{{$serviceName ?? ''}}</h3>
                            {!! $serviceInfo ?? '' !!}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-widget">
                            <h4>Category</h4>
                            <ul class="category">
                                <li><a href="{{route('service-details',[1])}}">Web Design<i class="bi bi-arrow-right"></i></a></li>
                                <li><a href="{{route('service-details',[2])}}">Graphic Design<i class="bi bi-arrow-right"></i></a></li>
                                <li><a href="{{route('service-details',[3])}}">Software Development<i class="bi bi-arrow-right"></i></a></li>
                                <li><a href="{{route('service-details',[4])}}">Web Application Development<i class="bi bi-arrow-right"></i></a></li>
                                <li><a href="{{route('service-details',[5])}}">Mobile App Development<i class="bi bi-arrow-right"></i></a></li>
                                <li><a href="{{route('service-details',[6])}}">Maintenance and Support<i class="bi bi-arrow-right"></i></a></li>
                                <li><a href="{{route('service-details',[7])}}">Quality Assurance and Testing<i class="bi bi-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
{{--                <div class="service-items sec-mar-top">--}}
{{--                    <div class="service-details-item">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="single-details">--}}
{{--                                    <h4><span>01</span>Brainstroming & Wirefarme</h4>--}}
{{--                                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam eu nibh elementum, accumsan ona vestibulum ultricies tellus. volv Pellentesque vel tu neque ac, aliquet nunc. In eu ipsum fringilla, accumsan purus vel, tourbakaniv pellentesque risus. Vivamus vehicula nl hendrerit vel tortor. In pharetra lectus purus at eros interdum, in dignissim nulla vestibulum. Nunc sit amet finibuson felis, ut egestas lacus. Sedan pellentesque quis magna eu vestibulum. Olangb pellentesque quis magna eu vestibulum. Ut sed commodo neque. Morbi erat nisi, vehicula quis faucibus il</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="single-details-thumb">--}}
{{--                                    <img src="assets/img/blog/thumb-1.jpg" alt>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="service-details-item">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 or-2">--}}
{{--                                <div class="single-details-thumb">--}}
{{--                                    <img src="assets/img/blog/thumb-2.jpg" alt>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="single-details">--}}
{{--                                    <h4><span>02</span>UI Design</h4>--}}
{{--                                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam eu nibh elementum, accumsan ona vestibulum ultricies tellus. volv Pellentesque vel tu neque ac, aliquet nunc. In eu ipsum fringilla, accumsan purus vel, tourbakaniv pellentesque risus. Vivamus vehicula nl hendrerit vel tortor. In pharetra lectus purus at eros interdum, in dignissim nulla vestibulum. Nunc sit amet finibuson felis, ut egestas lacus. Sedan pellentesque quis magna eu vestibulum. Olangb pellentesque quis magna eu vestibulum. Ut sed commodo neque. Morbi erat nisi, vehicula quis faucibus il</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="service-details-item">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="single-details">--}}
{{--                                    <h4><span>03</span>Final Developing</h4>--}}
{{--                                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam eu nibh elementum, accumsan ona vestibulum ultricies tellus. volv Pellentesque vel tu neque ac, aliquet nunc. In eu ipsum fringilla, accumsan purus vel, tourbakaniv pellentesque risus. Vivamus vehicula nl hendrerit vel tortor. In pharetra lectus purus at eros interdum, in dignissim nulla vestibulum. Nunc sit amet finibuson felis, ut egestas lacus. Sedan pellentesque quis magna eu vestibulum. Olangb pellentesque quis magna eu vestibulum. Ut sed commodo neque. Morbi erat nisi, vehicula quis faucibus il</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="single-details-thumb">--}}
{{--                                    <img src="assets/img/blog/thumb-3.jpg" alt>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </section>


        @include('user.banners.about')

    </main>
@endsection
