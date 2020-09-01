@include('layouts.header_link')
{{-- navbar --}}
@include('layouts.welcome_nav')
{{-- @include('frontend.home.home_slider') --}}
    
    <!--Page Title-->
    <section class="page-title">
        <div class="cws-image-bg" style="background-image: url(images/bgImages/aboutslider.jpg)">
            <div class="cws-overlay-bg"></div>
        </div>

        <div class="auto-container animate__animated animate__bounceInDown animate__delay-2s" >
            <h1>Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="homeservices">Home</a></li>
                <li>Contacts</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Features Section Six  -->
    <section class="feaures-section-six ">
        <!-- Background Layers -->
        <div class="background-layers">
            <div class="cws-image-bg"></div>
        </div>

        <div class="auto-container" >
            <div class="row">
                <!-- Feature BLock Nine -->
                <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12 animate__animated animate__flipInY animate__delay-2s">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-shopping-cart-2"></span>
                        </div>
                        <h4>Orders</h4>
                    </div>
                </div>

                <!-- Feature BLock Nine -->
                <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12 animate__animated animate__flipInY animate__delay-2s">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-browser-2"></span>
                        </div>
                        <h4>Your Project</h4>
                    </div>
                </div>

                <!-- Feature BLock Nine -->
                <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12 animate__animated animate__flipInY animate__delay-2s">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-headset-2"></span>
                        </div>
                        <h4>Support</h4>
                    </div>
                </div>

                <!-- Feature BLock Nine -->
                <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12 animate__animated animate__flipInY animate__delay-2s">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-devices-1"></span>
                        </div>
                        <h4>Become a Partner</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Section Six -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <!-- Background Layers -->
        <div class="background-layers" >
            <div class="cws-image-bg" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                <div class="cws-triangle-overlay"></div>
                <div class="map-outer">
                    <iframe src="https://maps.google.com/maps?q=Iridium%20Building&t=&z=17&ie=UTF8&iwloc=&output=embed" height="450" style="border:0; width:100%;"></iframe>
                </div>
            </div>
        </div>

        <div class="auto-container " >
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 offset-6">
                    <div class="inner-column">
                        <div class="sec-title" >
                            <h2 uk-scrollspy="cls: uk-animation-slide-left; repeat: true">HOW TO REACH US</h2>
                            <div class="text" uk-scrollspy="cls: uk-animation-slide-top; repeat: true">
                                Our office is in centralize area so as to ensure the fast turnaround for our clients.
                                BRIN Tech responses are so fast which usually leaves our clients amazed and happy.</div>
                        </div>
                        <h4>BRIN Tech Solutions</h4>
                        <div class="contact-info row">
                            <div class="contact-block col-lg-6 col-md-6 col-sm-12" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                                <div class="inner">
                                    <span class="icon fa fa-map-signs"></span>
                                    <h5>Address</h5>
                                    <p>Suite 17, The Iridium Building, Umm Suqeim Rd,</p> 
                                    <p>Al Barsha, Dubai, UAE, PO BOX – 391186</p>
                                </div>
                            </div>

                            <div class="contact-block col-lg-6 col-md-6 col-sm-12" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                                <div class="inner">
                                    <span class="icon fa fa-phone"></span>
                                    <h5>Contact Details</h5>
                                    <p><a href="tel:+971 4 381 8712"> +971 4 381 8712</a>
                                    <a href="tel:+971 54 517 1712"> +971 54 517 1712</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Map Section -->

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <!-- Background Layers -->
        <div class="background-layers">
            <div class="cws-image-bg"></div>
            <div class="cws-triangle-overlay top-left"></div>
            <div class="cws-triangle-overlay top-right"></div>
        </div>

        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12" >
                    <div class="inner-column">
                        <div class="sec-title light" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <h2>Contact Us</h2>
                            <div class="text text-justify" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">Get 24/7/365 server and networking device monitoring with regular, scheduled onsite support to keep everything running smoothly. Get started now!</div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12 " uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <div class="inner-column">
                        <div class="default-form contact-form-two">
                            <form action="#" method="post" id="email-form">

                                <div class="row mid-spacing">
                                    <div class="form-group mb-0 col-lg-12">
                                        <div class="response"></div>
                                    </div>

                                    <div class="form-group  col-sm-12">
                                        <label> Your Name (required)</label>
                                        <input type="text" name="username" class="username">
                                    </div>
                                    <div class="form-group  col-sm-12">
                                        <label>Company</label>
                                        <input type="email" name="email" class="email">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Mobile</label>
                                        <input type="text" name="number" class="number">
                                    </div>
                                    <div class="form-group  col-sm-12">
                                        <label>Email (required)</label>
                                        <input type="email" name="email" class="email">
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <label>Message</label>
                                        <textarea name="contact_message"></textarea>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button class="theme-btn btn-style-one" type="button" id="submit" name="submit-form">Send Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Form Section -->

    @include('layouts.footer_link')
