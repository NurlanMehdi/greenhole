@extends('user.master')
@section('content')
    <main class="creasoft-wrap">
        <section style="background-image:url(/assets/img/services/contactus.jpg);" class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper">
                            <div class="breadcrumb-cnt">
                                <h1>Contact us</h1>
                                <span><a href="{{route('dashboard')}}">Home</a><i class="bi bi-arrow-right"></i>Contact us</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact-area sec-mar">
            <div class="container">
                <div class="getin-touch">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="contact-form wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

                                <div class="sec-title layout2">
                                    <h3>Have Any Questions</h3>
                                    <h4>Get in touch with us</h2>
                                </div>
                                <form action="mailto:info@greenhole.co" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="text" name="name" placeholder="Enter your name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" name="email" placeholder="Enter your email">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-9">
                                                    <textarea name="message" cols="30" rows="10" placeholder="Your message"></textarea>
                                                </div>
                                                <div class="col-3">
                                                    <input type="submit" value="Send Message">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="contact-left">
                            <div class="row">
                                <div class="col-md-3 col-lg-3">
                                    <h3>Location</h3>
                                    <p>The Capital Plaza, address St. Sheikh Zayed 13, 81000
                                    </p>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <h3>Phone</h3>
                                    <a style="color: black" href="tel:05661111985">+382 68 477 179</a>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <h3>Email</h3>
                                    <a style="color: black"  href="mailto:info@greenhole.co"><span class="__cf_email__" data-cfemail="f29b9c949db2978a939f829e97dc919d9f">info@greenhole.co</span></a>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <h3>Social</h3>
                                    <ul class="social-follow">
                                        <li><a href="https://www.facebook.com/greenhole.co"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/greenhole/"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="https://wa.me/38268477179"><i class="fab fa-whatsapp"></i></a></li>
                                        <li><a href="https://www.instagram.com/greenhole.co"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div style="    margin-top: 2%;" class="col-md-12 col-lg-12">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2944.376183741226!2d19.241234176050124!3d42.44101147118556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134deb25b4739d11%3A0x5d7394fc13e86668!2sThe%20Capital%20Plaza!5e0!3m2!1sen!2s!4v1687716205683!5m2!1sen!2s" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        @include('user.banners.about')
    </main>
@endsection
