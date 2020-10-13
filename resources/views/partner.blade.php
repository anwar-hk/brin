@include('layouts/header_link')
@php
    $currentPage="partner";
    $currentNav="";
@endphp
@include('layouts/welcome_nav')
<!--Page Title-->
    <section class="page-title">
        <div class="cws-image-bg" style="background-image: url(images/bgImages/news.jpg)">
            {{--  <div class="cws-overlay-bg"></div>  --}}
        </div>

        <div class="auto-container animate__animated animate__bounceInDown animate__delay-2s">
            <h1>Partner</h1>
        </div>
    </section>

    <div class="background-layers">
        <div class="cws-image-bg"></div>
        <div class="cws-triangle-overlay top-left"></div>
        <div class="cws-triangle-overlay top-right"></div>
    </div>
    @include('layouts.our_partner')
    {{--  <section class="mbr-section form1 cid-qv5ApHdm7c mbr-parallax-background" id="form1-2w" data-rv-view="1719">
        
        <div class="cws-image-bg mbr-overlay" style="opacity: 0.9; background-color: rgb(12  176 244 / 50%);">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>
                        CONTACT FORM TEMPLATE</strong></h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                        Easily add subscribe and contact forms without any server-side integration.
                    </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" data-form-type="formoid">
                        <div data-form-alert="" hidden="">
                            Thanks for filling out the form!
                        </div>
                
                        <form class="mbr-form" action="" method="post" >
                            @csrf
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal" data-for="name">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7" for="name-form1-2w">Name</label>
                                        <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-2w">
                                    </div>
                                </div>
                                <div class="col-md-4 multi-horizontal" data-for="email">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7" for="email-form1-2w">Email</label>
                                        <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-2w">
                                    </div>
                                </div>
                                <div class="col-md-4 multi-horizontal" data-for="phone">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-2w">Phone</label>
                                        <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-2w">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" data-for="message">
                                <label class="form-control-label mbr-fonts-style display-7" for="message-form1-2w">Message</label>
                                <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-2w"></textarea>
                            </div>
                
                            <span class="input-group-btn">
                                <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                            </span>
                        </form>
                </div>
            </div>
        </div>
    </section>  --}}
    <section class="callback-section">
        <div class="cws-background-image" style="background-image: url(images/home_service_images/contact-us.jpg)"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="sec-title">
                        <h4 uk-scrollspy="cls: uk-animation-slide-right; repeat: false; delay: 500;">We are always welcome for signing up with the technology partners.</h4>
                        {{--  <div class="text" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 700;">We’re here to answer any questions you might have about IT based Solutions.</div>  --}}
                    </div>
    
                    <div class="default-form callback-form" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false; delay: 900;">
                        <form action="#" method="post" id="email-form">
                            @csrf
                            <input type="hidden" name="status" value="Partners">
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
                                <label>Address</label>
                                <input type="text" name="address" class="address">
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

    <!--Clients Section-->
    
    <!--End Clients Section-->

    <!-- Main Footer -->
@include('layouts.footer_link')