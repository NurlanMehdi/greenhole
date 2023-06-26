@extends('user.master')
@section('content')
    <main class="creasoft-wrap">




        <section style="background-image:url(/assets/img/services/Software-Development-Company.jpg);" class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper">
                            <div class="breadcrumb-cnt">
                                <h1>About us</h1>
                                <span><a href="index.html">Home</a><i class="bi bi-arrow-right"></i>About us</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose sec-mar wow animate fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="why-choose-left">
                            <div class="choose-banner1">
                                <img src="assets/img/why-1.jpg" alt>
                            </div>
                            <div class="choose-banner2">
                                <img src="assets/img/why-2.jpg" alt>
                                <img src="assets/img/why-3.jpg" alt>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-choose-right">
                            <div class="sec-title layout2">
                                <h2>"Why Us?" - Green Hole Software Company</h2>
                            </div>
                            <p class="text">We offer sustainable-focused software solutions.</p>
                            <p class="text">We prioritize innovation and stay up-to-date with the latest technologies.</p>
                            <p class="text">Customer satisfaction is our top priority.</p>
                            <p class="text">We work based on the principles of collaboration and customer-centricity.</p>
                            <p class="text">We provide flexible and cost-effective solutions that align with customer needs.</p>
                            </br>
                            <p>At Green Hole Software, we are a company that focuses on sustainability, technology, customer satisfaction, and collaboration. Our goal is to provide innovative solutions to meet our customers' needs and support their success.</p>
                            <div class="buttons-group">
                                <span>24/7 Support</span>
                                <span>Unique Design</span>
                                <span>Clean Code Develope</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-area sec-mar-bottom wow animate slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 or-2">
                        <div class="sec-title layout2">
                            <h2>Our core values</h2>
                        </div>
                                                    <div class="about_content_desc_body">
                                                        <div class="about_content_desc_body_item">
                                                            <h3 class="about_content_desc_body_item_title">Creativity</h3>

                                                        </div>
                                                        <div class="about_content_desc_body_item">
                                                            <h3 class="about_content_desc_body_item_title">Partnership</h3>

                                                        </div>
                                                        <div class="about_content_desc_body_item">
                                                            <h3 class="about_content_desc_body_item_title">Responsibility</h3>

                                                        </div>
                                                        <div class="about_content_desc_body_item">
                                                            <h3 class="about_content_desc_body_item_title">Customer satisfaction</h3>

                                                        </div>
                                                        <div class="about_content_desc_body_item">
                                                            <h3 class="about_content_desc_body_item_title">Ensuring successful solutions</h3>
                                                            <!-- <p class="about_content_desc_body_item_text">We pride ourselves on pushing the boundaries of digital design and development.  We combine relevant trends and best practices to build platforms with longevity.</p>-->
                                                        </div>
                                                    </div>
                    </div>
                    <div class="col-lg-6 or-1">
                        <div class="about-right">
                            <div class="banner-1">
                                <img src="assets/img/about-baner-1.jpg" alt>
                            </div>
                            <div class="banner-2">
                                <img src="assets/img/about-baner-2.jpg" alt>
                                <div class="banner2-inner">
                                    <div class="play">
                                        <a class="video-popup" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('user.banners.features')
        <section class="history-area sec-mar">
            <div class="container">
                <div class="title-wrap">
                    <div class="sec-title">
                        <h2>Creasoft History</h2>
                    </div>
                </div>
                <div class="single-history">
                    <div class="history wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="circle">
                            <div class="inner"></div>
                        </div>
                        <div class="history-thumb">
                            <img src="assets/img/timeline-1.jpg" alt>
                        </div>
                    </div>
                    <div class="history wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="circle">
                            <div class="inner"></div>
                        </div>
                        <div class="history-cnt">
                            <div class="history-cnt-inner">
                                <span>2020</span>
                                <h4>Started with new projects and growth objectives.</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-history">
                    <div class="history wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="circle">
                            <div class="inner"></div>
                        </div>
                        <div class="history-cnt">
                            <div class="history-cnt-inner">
                                <span>2021</span>
                                <h4>New offices were opened, and the number of employees increased.</h4> </div>
                        </div>
                    </div>
                    <div class="history wow animate fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="circle">
                            <div class="inner"></div>
                        </div>
                        <div class="history-thumb">
                            <img src="assets/img/timeline-2.jpg" alt>
                        </div>
                    </div>
                </div>
                <div class="single-history">
                    <div class="history wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="circle">
                            <div class="inner"></div>
                        </div>
                        <div class="history-thumb">
                            <img src="assets/img/timeline-3.jpg" alt>
                        </div>
                    </div>
                    <div class="history wow animate fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="circle">
                            <div class="inner"></div>
                        </div>
                        <div class="history-cnt">
                            <div class="history-cnt-inner">
                                <span>2022</span>
                                <h4>Green Hole Software Company achieved successful projects by expanding its client portfolio.</h4>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="single-history">
                    <div class="history wow animate fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="circle">
                            <div class="inner"></div>
                        </div>
                        <div class="history-cnt">
                            <div class="history-cnt-inner">
                                <span>2023</span>
                                <h4>Established an R&D department to deliver innovative products and services.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="history wow animate fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="circle">
                            <div class="inner"></div>
                        </div>
                        <div class="history-thumb">
                            <img src="assets/img/timeline-4.jpg" alt>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
