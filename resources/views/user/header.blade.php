<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Green Hole - Software and Digital Agency</title>
</head>
<body>
{{--<div class="preloader">--}}
{{--    <div class="loader">--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--    </div>--}}
{{--</div>--}}
<header class="header-area position_top">
    <div class="site-logo">
        <div class="logo">
            <a href="{{route('dashboard')}}"><img src="{{asset('assets/img/logo/Green hole-logo-dark bg.svg')}}" alt="image"></a>
        </div>
    </div>
    <div class="main-menu">
        <nav class="main-nav">
            <div class="mobile-menu-logo">
                <a href="{{route('dashboard')}}"><img src="assets/img/logo/Green hole-logo_1.svg" alt></a>
                <div class="remove">
                    <i class="bi bi-plus-lg"></i>
                </div>
            </div>
            <ul>
                <li class="has-child active">
                    <a href="{{route('dashboard')}}">Home</a>
                </li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li>
                    <a href="{{route('service')}}">Service</a>
                </li>
{{--                <li>--}}
{{--                    <a href="project.html">Project</a>--}}
{{--                    <i class="bi bi-chevron-down"></i>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="project.html">Project</a></li>--}}
{{--                        <li><a href="project-details.html">Project Details</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="has-child">--}}
{{--                    <a href="{{route('dashboard')}}#">Pages</a>--}}
{{--                    <i class="bi bi-chevron-down"></i>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="team.html">Team</a></li>--}}
{{--                        <li><a href="pricing.html">Pricing</a></li>--}}
{{--                        <li><a href="faq.html">FAQs</a></li>--}}
{{--                        <li><a href="error.html">Error 404</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <div class="nav-right">
        <div class="mobile-menu">
            <a href="javascript:void(0)" class="cross-btn">
                <span class="cross-top"></span>
                <span class="cross-middle"></span>
                <span class="cross-bottom"></span>
            </a>
        </div>
    </div>
</header>
