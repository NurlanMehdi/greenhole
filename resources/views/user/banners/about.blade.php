<section class="blog_posts_footer">

    <div class="blog_posts_footer_item ">
        <div class="blog_posts_footer_item_content">
            <div class="blog_posts_footer_item_content_body">

                <div class="blog_posts_footer_item_content_body_desc company-since get-in-touch" >
                    <h2>Your competitive edge in the digital age.</h2>
                    <strong>
                        <div class="single-service-footer">
                            <div class="read-btn">
                                <a href="{{route('about')}}">Get in touch</a>
                            </div>
                        </div>

                    </strong>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_posts_footer_item">
        <div class="blog_posts_footer_item_content">
            <div class="blog_posts_footer_item_content_body">
                <div class="blog_posts_footer_item_content_body_desc read-more company-since">
                    <div class="company-logo">
                        <img src="assets/img/logo/Green hole-logo-dark bg.svg" alt="">
                    </div>
                    <h4>Best Creative IT Agency And Solutions <span>Since 2005.</span></h4>

                            @if(!Request::is('about'))
                        <strong>
                            <div class="single-service-footer">
                                <div class="read-btn">
                                    <a href="{{route('about')}}">Read More</a>
                                </div>
                            </div>

                        </strong>
                            @endif


                </div>
            </div>
        </div>
    </div>

</section>
