@include('layouts.header_link')
{{-- navbar --}}
@php
    $currentPage="contact";
    $currentNav="";
@endphp
@include('layouts.welcome_nav')
{{-- @include('frontend.home.home_slider') --}}
    
    <!--Page Title-->
    <section class="page-title">
        <div class="cws-image-bg" style="background-image: url(images/bgImages/aboutslider.jpg)">
            <div class="cws-overlay-bg"></div>
        </div>

        <div class="auto-container animate__animated animate__bounceInDown animate__delay-2s" >
            <h1>Contact Us</h1>
            <br>
            <h5 style="color:#ffff">Our office is in centralize area so as to ensure the fast turnaround for our clients.
                BRIN Tech responses are so fast which usually leaves our clients amazed and happy.</h5>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Features Section Six  -->
    {{-- <section class="feaures-section-six ">
        <!-- Background Layers -->
        <div class="background-layers">
            <div class="cws-image-bg"></div>
        </div>
        <div class="auto-container pt-4" >
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
    </section> --}}
    <!--End Features Section Six -->

    <!-- Contact Map Section -->
    <section class="container-flude">
        <!-- Background Layers -->
        <div >
            <div class="map-outer">
                <iframe src="https://maps.google.com/maps?q=Iridium%20Building&t=&z=17&ie=UTF8&iwloc=&output=embed" height="450" style="border:0; width:100%;"></iframe>
            </div>
        </div>

    </section>
    <!-- End Contact Map Section -->

    <!-- Contact Form Section -->
    <section class="contact-form-section"  style="background-color: #ffffff !important;">
     
        <div class="auto-container " >
            <div class="content-column">
                <div class="inner-column">
                    <div class="contact-info row">

                        <div class="contact-block col-lg-6" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                            <div class="inner">
                                <span class="icon fa fa-map-signs"></span>
                                <h5>Address</h5>
                                <p> Suite 17, The Iridium Building, Umm Suqeim Rd,</p> 
                                <p>Al Barsha, Dubai, UAE, PO BOX – 391186</p>
                            </div>
                        </div>

                        <div class="contact-block col-lg-6 " uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                            <div class="inner">
                                <span class="icon fa fa-phone"></span>
                                <h5>Contact Details</h5>
                                <p ><a style="color: black" href="tel:+971 54 517 1712"> +971 54 517 1712</a></p>
                                <p><a style="color: black" href="tel:+971 4381 8712"> +971 4381 8712</a></p>
                                <p><a style="color: black" href="mailto:reachus@brintechsolutions.com"> reachus@brintechsolutions.com </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="auto-container">
           
                <!-- Content Column -->
                <!-- Form Column -->
                <div class="form-column " uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="inner-column row">
                        <div class="default-form contact-form-two ">
                        <form action="#" method="POST" id="email-form">
                            @csrf
                                <input type="hidden" name="status" value="Customer">
                                <div class="row mid-spacing col-sm-12">
                                    <div class="form-group mb-0 col-lg-12">
                                        <div class="response"></div>
                                    </div>
                                        
                                    <div class="form-group col-sm-6">
                                        <label> Your Name (required)</label>
                                        <input type="text" name="name" class="name" placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group  col-sm-6">
                                        <label>Company</label>
                                        <input type="text" name="company" class="company" placeholder="Company" required>
                                    </div>
                                    <div class="form-group col-sm-6	">
                                        <label> Mobile (required)</label><br>
                                        <input id="phone" name="phone" type="tel" class="number"  required>
                                    </div>
                                    <div class="form-group  col-sm-6">
                                        <label>Email (required)</label>
                                        <input type="email" name="email" class="email" placeholder="Enter your e-mail" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12">
                                        <label>Message</label>
                                        <textarea name="contact_message" class="message" placeholder="Message" required></textarea>
                                    </div>
                                
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-right">
                                        <button class="theme-btn btn-style-one "  
                                       type="button" id="submit" name="submit-form">Send Request</button>
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
