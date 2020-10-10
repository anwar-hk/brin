@include('layouts/header_link')
@php
    
@endphp
@include('layouts/welcome_nav')
<!--Page Title-->
    <section class="page-title">
        <div class="cws-image-bg" style="background-image: url(images/bgImages/aboutslider2.jpg)">
            <div class="cws-overlay-bg"></div>
        </div>

        <div class="auto-container animate__animated animate__bounceInDown animate__delay-2s">
            <h1>About Us</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section Three -->
    <section class="about-section-three">
         <!-- Background Layers -->
        <div class="background-layers animate__animated animate__bounceInRight animate__delay-2s">
            <div class="cws-image-bg" style="background-image: url(images/bgImages/home6.jpg)"></div>
            <div class="cws-triangle-overlay bottom-bottom " uk-scrollspy="cls: uk-animation-slide-top; repeat: false"></div>
            <div class="cws-triangle-overlay bottom-bottom " uk-scrollspy="cls: uk-animation-slide-left; repeat: false"></div>
        </div>

        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title " uk-scrollspy="cls:uk-animation-slide-top ; delay: 800"><h3>WHO WE ARE</h3></div>
                        <h5 uk-scrollspy="cls:uk-animation-slide-top; delay: 1300 ">WE BRING SOLUTIONS!” which we aim to deliver through our strategy of “CONSULT, DELIVER AND SUPPORT</h5>
                        <p style="text-align: justify" uk-scrollspy="cls: uk-animation-slide-right; delay:1600;">We aim to help businesses accelerate and simplify deployment of new technologies by providing them with the knowledge, skills, tools, resources and overall support needed to be successful.</p>
                        <h4 uk-scrollspy="cls: uk-animation-slide-left; delay:1500;"><strong>Thousands Of BRINTech Projects</strong></h4>
                        <p style="text-align: justify" uk-scrollspy="cls: uk-animation-slide-bottom; delay:1800;">Our knowledgeable staff, extensive product range, deep levels of inventory and our commitment to quality is what sets us apart from the competition.That’s what we call being easy to do business with.</p>
                    </div>
                    <div class="btn-box" uk-scrollspy="cls: uk-animation-slide-bottom; delay:2000;">
                        <a href="contact" class="theme-btn btn-style-one large">CONTACT US</a>                        
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <!-- End About Section Three -->

    <!-- Our Standards -->
    <!-- End Our Standard -->

    <!-- Our Misiion -->
    <section class="our-mission">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2 uk-scrollspy="cls: uk-animation-slide-top; delay:500;">OUR MISSION</h2>
                <div class="text text-justify" uk-scrollspy="cls: uk-animation-slide-bottom; delay:900;">Better service, faster delivery, with less cost. At BRIN Tech Solutions, we strive to help our customers succeed. We provide the best in-class and reliable IT based solutions for our customers, while ensuring a high quality of service and customer satisfaction is maintained. We have all the technical expertise and best managed team required to provide the best services for our customers.</div>
            </div>
            <div class="sec-title text-center">
                <h2 uk-scrollspy="cls: uk-animation-slide-left; delay:500;">OUR VISION</h2>
                <div class="text text-justify" uk-scrollspy="cls: uk-animation-slide-right; delay:900;">BRIN Tech Solutions will provide you with the foresight to become more agile, realize new growth opportunities, and create ne w
                    inventions. With 100 percent focus on everything related to your IT Infrastructure, we offer the versatility needed to succeed.We
                    invite you to explore all that BRIN Tech Solutions has to offer and unleash the power of Technology to drive your next intell igent
                    disruption. To fulfill our vision, BRIN Tech Solutions will be constantly equipping our staff with the latest technical knowl edge,
                    and frequently reviewing our self in order to stay relevant and technologically ahead in the services we provide. Altogether, to
                    provide our customers with top quality and comprehensive IT based solutions.
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Mission -->

    <!-- Our Passion -->
    <section class="our-passion">
        <!-- Background Layers -->
        <div class="background-layers">
            <div class="cws-image-bg" style="background-image: url(images/bgImages/aboutbgs6.jpg)">
                <div class="cws-overlay-bg"></div>
                <div class="cws-triangle-overlay"></div>
            </div>
            <div class="cws-triangle-overlay bottom-left"></div>
            <div class="cws-triangle-overlay bottom-right"></div>
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 offset-6">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <h2 uk-scrollspy="cls: uk-animation-slide-top  ; delay:300;">PHILOSOPHY</h2>
                            <div class="text" uk-scrollspy="cls: uk-animation-slide-left  ; delay:700;">BRIN Tech Solutions makes sure you don’t waste a single minute</div>
                            <p class="text text-justify" uk-scrollspy="cls: uk-animation-slide-right  ; delay:900;">In today’s market, many vendors provide general and basic maintenance at an extremely low value with poor services, which result in clients being poorly served. These are vendors who put the word “sales” before “services,” we believe it is high time to change and revive the situation. BRIN Tech Solutions is set up to address this significant shortcoming in the market where our team belief through excellent service and integrity, we will be able to build a long-term relationship and trust with our clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Passion -->
    
    <!--Clients Section-->
    @include('layouts.our_partner')
    <!--End Clients Section-->

    <!-- Main Footer -->
@include('layouts.footer_link')