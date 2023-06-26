@extends('user.master')
@section('content')
    <main class="creasoft-wrap">
        <section class="hero-area">
            <div class="hero-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h1>Creative & Minimal<span>It Agency.</span></h1>
                                <p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla porttitor. ol Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero. Donec nec dui luctus, pellentesque lacus sed, mollis leo.</p>

                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>
        </section>
{{--        <section class="services-area sec-mar">--}}
{{--            <div class="container">--}}
{{--                <div class="title-wrap wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">--}}
{{--                    <div class="sec-title">--}}
{{--                        <span>Our Solutions</span>--}}
{{--                        <h2>Services</h2>--}}
{{--                        <p>Curabitur sed facilisis erat. Vestibulum pharetra eros eget fringilla porttitor. on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="swiper services-slider">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">--}}
{{--                            <div class="single-service">--}}
{{--                                <span>01</span>--}}
{{--                                <div class="icon">--}}
{{--                                    <img src="assets/img/icons/service-icon-1.png" alt>--}}
{{--                                </div>--}}
{{--                                <h4>Web Design</h4>--}}
{{--                                <p>Integer purus odio, placerat nec rhoncu in, ullamcorper nec dolor.</p>--}}
{{--                                <div class="read-btn">--}}
{{--                                    <a href="service-details.html">Read More</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">--}}
{{--                            <div class="single-service">--}}
{{--                                <span>02</span>--}}
{{--                                <div class="icon">--}}
{{--                                    <img src="assets/img/icons/service-icon-2.png" alt>--}}
{{--                                </div>--}}
{{--                                <h4>UI/UX Design</h4>--}}
{{--                                <p>Integer purus odio, placerat nec rhoncu in, ullamcorper nec dolor.</p>--}}
{{--                                <div class="read-btn">--}}
{{--                                    <a href="service-details.html">Read More</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">--}}
{{--                            <div class="single-service">--}}
{{--                                <span>03</span>--}}
{{--                                <div class="icon">--}}
{{--                                    <img src="assets/img/icons/service-icon-3.png" alt>--}}
{{--                                </div>--}}
{{--                                <h4>Software Development</h4>--}}
{{--                                <p>Integer purus odio, placerat nec rhoncu in, ullamcorper nec dolor.</p>--}}
{{--                                <div class="read-btn">--}}
{{--                                    <a href="service-details.html">Read More</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-pagination d-md-none d-md-block"></div>--}}
{{--                </div>--}}
{{--                <div class="swiper-button-next"></div>--}}
{{--                <div class="swiper-button-prev"></div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="about-area sec-mar-bottom">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 or-2 wow animate fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">--}}
{{--                        <div class="sec-title layout2">--}}
{{--                            <span>Get To Know</span>--}}
{{--                            <h2>About Us</h2>--}}
{{--                        </div>--}}
{{--                        <div class="about-left">--}}
{{--                            <h3>We do design, code & develop Software finally launch.</h3>--}}
{{--                            <p>Integer purus odio, placerat nec rhoncus in, ullamcorper nec dolor. Class onlin aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos only himenaeos. Praesent nec neque at dolor venenatis consectetur eu quis ex. the Donec lacinia placerat felis non aliquam.</p>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 or-1 wow animate fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">--}}
{{--                        <div class="about-right">--}}
{{--                            <div class="banner-1">--}}
{{--                                <img src="assets/img/about-baner-1.jpg" alt>--}}
{{--                            </div>--}}
{{--                            <div class="banner-2">--}}
{{--                                <img src="assets/img/about-baner-2.jpg" alt>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        @include('user.banners.features')--}}
{{--        <section class="project-area sec-mar">--}}
{{--            <div class="container read-btn-container">--}}
{{--                <div class="title-wrap">--}}
{{--                    <div class="sec-title">--}}
{{--                        <h2>Project</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <ul class="isotope-menu">--}}
{{--                            <li class="active" data-filter="*">All</li>--}}
{{--                            <li data-filter=".ui">UI/UX</li>--}}
{{--                            <li data-filter=".web">Web Design</li>--}}
{{--                            <li data-filter=".developing">Developing</li>--}}
{{--                            <li data-filter=".graphic">Graphic Design</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row gy-4  project-items">--}}
{{--                    <div class="col-md-6 col-lg-6 single-item graphic web">--}}
{{--                        <div class="single-blog">--}}
{{--                            <div class="blog-thumb">--}}
{{--                                <a href="blog-details.html"><img src="assets/img/projects/suppliergroup.png" alt></a>--}}

{{--                            </div>--}}
{{--                            <div class="blog-inner">--}}
{{--                                <div class="author-date">--}}
{{--                                    <a href="about.html#">By, Admin</a>--}}
{{--                                    <a href="about.html#">22.02.2022</a>--}}
{{--                                </div>--}}
{{--                                <h4><a href="blog-details.html">Quisque malesuada sapien and Donec sed nunc.</a></h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-lg-6 single-item graphic ui" >--}}
{{--                        <div class="single-blog">--}}
{{--                            <div class="blog-thumb">--}}
{{--                                <a href="blog-details.html"><img src="assets/img/projects/suppliergroup.png" alt></a>--}}

{{--                            </div>--}}
{{--                            <div class="blog-inner">--}}
{{--                                <div class="author-date">--}}
{{--                                    <a href="about.html#">By, Admin</a>--}}
{{--                                    <a href="about.html#">22.02.2022</a>--}}
{{--                                </div>--}}
{{--                                <h4><a href="blog-details.html">Suspendisse pretium magna qu nisl egestas porttitor.</a></h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="read-btn">--}}
{{--                    <a href="service-details.html">Read More</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        @include('user.banners.partners')--}}
{{--        @include('user.banners.pricingPlan')--}}


{{--        @include('user.banners.about')--}}
    </main>


@endsection
