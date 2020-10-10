@include('layouts.header_link')
{{-- navbar --}}
@include('frontend.home.nav')
@include('frontend.home.home_slider')
{{-- Main content --}}
<!-- About Section -->
<section class="about-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay"></div>
        <div class="cws-image-bg" style="background-image: url(images/bgImages/aboutbgs2.jpg)"></div>
    </div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="sec-title">
                    <h2 uk-scrollspy="cls: uk-animation-slide-top; repeat: false; delay: 500;" uk-scrollspy="cls: uk-animation-slide-top; repeat: false; delay: 500;">SMART HOME</h2>
                    <div class="text" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay:1000;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec tellus.</div>
                </div>

                <div class="row">
                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 500;">
                                <svg class="icon" viewBox="0 0 30 30">
                                    <path d="M21.8,8.2h-3.4c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h2.7v17.8H8.9V9.6h2.7c0.4,0,0.7-0.3,0.7-0.7 S12,8.2,11.6,8.2H8.2c-0.4,0-0.7,0.3-0.7,0.7v19.2c0,0.4,0.3,0.7,0.7,0.7h13.6c0.4,0,0.7-0.3,0.7-0.7V8.9 C22.5,8.5,22.2,8.2,21.8,8.2z M16.7,4.7h-3.4c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h3.4c0.4,0,0.7-0.3,0.7-0.7 C17.4,5,17.1,4.7,16.7,4.7z M11.6,2.6h6.8c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7h-6.8c-0.4,0-0.7,0.3-0.7,0.7S11.2,2.6,11.6,2.6 z M15.7,8.9c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7C15.4,9.6,15.7,9.3,15.7,8.9z M10.9,17.6 c0,2.3,1.8,4.2,4.1,4.2c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2C12.8,13.4,10.9,15.3,10.9,17.6z M15,14.8c1.5,0,2.7,1.3,2.7,2.8 s-1.2,2.8-2.7,2.8s-2.7-1.3-2.7-2.8C12.3,16.1,13.5,14.8,15,14.8z"></path>
                                </svg>
                            </div>
                            <h5 uk-scrollspy="cls: uk-animation-slide-top; repeat: false; delay: 500;">Managed <br>Centrally</h5>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 800;">
                                <svg class="icon 1.svg" viewBox="0 0 30 30">
                                    <path d="M24.2,3.5h-18c-2,0-3.6,1.6-3.6,3.6v13.5c0,2,1.6,3.6,3.6,3.6h8.3V27h-3.6c-0.4,0-0.7,0.3-0.7,0.7 c0,0.4,0.3,0.7,0.7,0.7h8.5c0.4,0,0.7-0.3,0.7-0.7c0-0.4-0.3-0.7-0.7-0.7h-3.6v-2.9h8.4c2,0,3.6-1.6,3.6-3.6V7.1 C27.8,5.1,26.2,3.5,24.2,3.5z M26.5,20.5c0,1.2-1,2.3-2.3,2.3h-18c-1.3,0-2.3-1-2.3-2.3v-0.7h22.6C26.5,19.8,26.5,20.5,26.5,20.5z M26.5,18.5H3.9V7.1c0-1.2,1-2.3,2.3-2.3h18c1.3,0,2.3,1,2.3,2.3V18.5z M15.2,8.2c-2.1,0-4.2,0.8-5.7,2.3c-0.3,0.3-0.3,0.7,0,1 c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2c1.3-1.2,2.9-1.9,4.7-1.9s3.5,0.7,4.7,1.9c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2 c0.2-0.2,0.2-0.7,0-0.9C19.4,9,17.4,8.2,15.2,8.2z M15.2,11.2c-1.1,0-2.1,0.4-2.9,1.2c-0.1,0.1-0.2,0.3-0.2,0.5s0.1,0.4,0.2,0.5 c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2c0.5-0.5,1.2-0.8,2-0.8c0.7,0,1.4,0.3,2,0.8c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2 c0.1-0.1,0.2-0.3,0.2-0.5s-0.1-0.4-0.2-0.5C17.4,11.7,16.3,11.2,15.2,11.2z M15.2,14.3c-0.5,0-0.9,0.4-0.9,0.9 c0,0.2,0.1,0.4,0.3,0.6c0.2,0.2,0.4,0.3,0.6,0.3c0.5,0,0.9-0.4,0.9-0.9C16,14.7,15.7,14.3,15.2,14.3z"></path>
                                </svg>
                            </div>
                            <h5 uk-scrollspy="cls: uk-animation-slide-top; repeat: false; delay: 800;" >Wirelessly <br>Connects</h5>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-4 col-sm-12" >
                        <div class="inner-box">
                            <div class="icon-box" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 1200;">
                                <svg class="icon 1.svg" viewBox="0 0 30 30">
                                    <path d="M23.7,3.6c0-1.4-1.2-2.6-2.6-2.6H9.4C7.9,1,6.8,2.2,6.8,3.6v22.8C6.8,27.8,8,29,9.4,29h11.7 c1.4,0,2.6-1.2,2.6-2.6L23.7,3.6z M8,3.6c0-0.7,0.6-1.3,1.4-1.3h11.7c0.7,0,1.4,0.6,1.4,1.3v2.3H8V3.6z M22.5,26.4 c0,0.7-0.6,1.4-1.4,1.4H9.4c-0.8,0-1.4-0.6-1.4-1.4v-1.5h14.5V26.4z M8,23.6V7.1h14.5v16.5H8z M16.5,3.5h-2.6 c-0.3,0-0.6,0.3-0.6,0.6s0.3,0.6,0.6,0.6h2.6c0.3,0,0.6-0.3,0.6-0.6S16.9,3.5,16.5,3.5z M17.1,10.5h-3.7c-1.6,0-2.9,1.3-2.9,2.8 V17c0,1.6,1.3,2.8,2.9,2.8h0.2c0.3,0,0.6-0.3,0.6-0.6c0-0.3-0.3-0.6-0.6-0.6h-0.2c-0.9,0-1.6-0.7-1.6-1.6v-3.7 c0-0.9,0.7-1.6,1.6-1.6h3.7c0.9,0,1.6,0.7,1.6,1.6V17c0,0.9-0.7,1.6-1.6,1.6h-0.4c-0.3,0-0.6,0.3-0.6,0.6c0,0.3,0.3,0.6,0.6,0.6 h0.4c1.6,0,2.9-1.3,2.9-2.8v-3.7C19.9,11.8,18.7,10.5,17.1,10.5z M17.1,16.4c0.1-0.1,0.2-0.3,0.2-0.4c0-0.2-0.1-0.3-0.2-0.4 l-1.4-1.4c-0.2-0.2-0.6-0.2-0.9,0l-1.4,1.4c-0.1,0.1-0.2,0.3-0.2,0.4c0,0.2,0.1,0.3,0.2,0.4c0.2,0.2,0.6,0.2,0.9,0l0.3-0.3v4.1 c0,0.3,0.3,0.6,0.6,0.6s0.6-0.3,0.6-0.6V16l0.4,0.4C16.4,16.6,16.8,16.6,17.1,16.4z"></path>
                                </svg>
                            </div>
                            <h5 uk-scrollspy="cls: uk-animation-slide-top; repeat: false; delay: 1200;">Smart <br>Applications</h5>
                        </div>
                    </div>
                </div>  

                <!-- Btn Box -->
                <div class="btn-box" uk-scrollspy="cls: uk-animation-slide-right; repeat: false; delay: 800;">
                    <a href="contact" class="theme-btn large btn-style-one">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Portfolio Section -->
<section class="portfolio-section" >
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay top-left"></div>
        <div class="cws-triangle-overlay top-right"></div>
        <div class="cws-image-bg style-two" style="background-image: url()">
            <div class="cws-overlay-bg bg-green"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
    </div>

    <div class="container-fluid">
        <div class="sec-title text-center light">
            <h2 uk-scrollspy="cls: uk-animation-slide-top; repeat: false; delay: 500;">MANAGE EVERYTHING</h2>
            <div class="text" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false; delay: 1000;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus, varius non condimentum id, molestie nec<br> tellus. Fusce odio nulla, consectetur in sagittis eget, vulputate at lacus. Vivamus nulla massa, dictum quis purus</div>
        </div>

        <div class="carousel-outer">
            <div class="portfolio-carousel owl-carousel owl-theme default-dots">
                <!-- Portfolio Block -->
                <div class="portfolio-block">
                    <div class="inner-box" id="cctv">
                        <div class="image-box" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 500;">
                            <figure class="image"><img src="images/home_service_images/smarthome4.jpg" alt=""></figure>
                            <div class="overlay"><a href="#"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                        </div>
                        <div class="lower-content" uk-scrollspy="cls: uk-animation-slide-top; repeat: false; delay: 600;">
                            <h4><a href="#cctv">Surveillance</a></h4>
                            <div class="cat"><a href="#">Alarm</a></div>
                            <div class="text">Potenti justo at, quis neque sem diam nam eu, <br>nulla etiam per magna id</div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Block -->
                <div class="portfolio-block">
                    <div class="inner-box" id="wifi">
                        <div class="image-box" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 700;">
                            <figure class="image"><img src="images/home_service_images/smarthome5.jpg" alt=""></figure>
                            <div class="overlay"><a href="#"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                        </div>
                        <div class="lower-content" uk-scrollspy="cls: uk-animation-slide-top; repeat: false; delay: 800;"> 
                            <h4><a href="#wifi">Wi-Fi Setup</a></h4>
                            <div class="cat"><a href="#">Alarm</a></div>
                            <div class="text">Potenti justo at, quis neque sem diam nam eu, <br>nulla etiam per magna id</div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Block -->
                <div class="portfolio-block">
                    <div class="inner-box" id="security">
                        <div class="image-box" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 800;">
                            <figure class="image"><img src="images/home_service_images/smarthome6.jpg" alt=""></figure>
                            <div class="overlay"><a href="#"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                        </div>
                        <div class="lower-content" uk-scrollspy="cls: uk-animation-slide-top; repeat: false; delay: 900;">
                            <h4><a href="#">Security</a></h4>
                            <div class="cat"><a href="#">Alarm</a></div>
                            <div class="text">Potenti justo at, quis neque sem diam nam eu, <br>nulla etiam per magna id</div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Block -->
                <div class="portfolio-block">
                    <div class="inner-box" id="temperature controller">
                        <div class="image-box">
                            <figure class="image"><img src="images/home_service_images/smarthome7.jpg" alt=""></figure>
                            <div class="overlay"><a href="#"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="#">Intercom</a></h4>
                            <div class="cat"><a href="#">Alarm</a></div>
                            <div class="text">Potenti justo at, quis neque sem diam nam eu, <br>nulla etiam per magna id</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Portfolio Section -->


<!-- Callback Section -->
<section class="callback-section">
    <div class="cws-background-image" style="background-image: url(images/home_service_images/contact-us.jpg)"></div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="sec-title">
                    <h3 uk-scrollspy="cls: uk-animation-slide-right; repeat: false; delay: 500;">Contact us for your Home Solutions</h3>
                    <div class="text" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 700;">We’re here to answer any questions you might have about IT based Solutions.</div>
                </div>

                <div class="default-form callback-form" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false; delay: 900;">
                    <form action="#" method="post" id="email-form">
                        @csrf
                        <div class="form-group mb-0">
                            <div class="response"></div>
                        </div>

                        <div class="form-group">
                            <label> Your Name (required)</label>
                            <input type="text" name="name" class="username">
                        </div>

                        <div class="form-group">
                            <label> Company </label>
                            <input type="text" name="company" class="company">
                        </div>

                        <div class="form-group">
                            <label>Mobile</label><br>
                            <input id="phone" type="tel" name="phone" class="phone">
                        </div>

                        <div class="form-group">
                            <label>Email (required)</label>
                            <input type="email" name="email" class="email">
                        </div>
                        
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="contact_message"></textarea>
                        </div>
                        
                        <div class="form-group" uk-scrollspy="cls: uk-animation-slide-top; repeat: false; delay: 1200;">
                            <button class="theme-btn btn-style-three" type="button" id="submit" name="submit-form">Send</button>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</section>
<!--End Reservation Section -->

<!--Clients Section-->
@include('layouts.our_partner')

<!--End Clients Section-->

@include('layouts.footer_link')