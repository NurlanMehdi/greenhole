@if(\Request::route()->getName() != 'dashboard')
    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="{{route('dashboard')}}"><img src="assets/img/logo/Green hole-logo-dark bg.svg" alt></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="copy-txt">
                            <span>Copyright 2022  <a href="{{route('dashboard')}}"><b>Green Hole</b></a></span>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        <ul class="social-media-icons">
                            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endif

</main>
<div class="cursor"></div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
