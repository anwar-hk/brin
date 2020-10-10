@include('layouts/header_link')
@include('layouts/welcome_nav')
<!--Page Title-->
    <section class="page-title">
        <div class="cws-image-bg" style="background-image: url(images/bgImages/news.jpg)">
            <div class="cws-overlay-bg"></div>
        </div>

        <div class="auto-container animate__animated animate__bounceInDown animate__delay-2s">
            <h1>Careers</h1>
        </div>
    </section>
    <section class="about-section-three">
        <!-- Background Layers -->
       <div class="background-layers animate__animated animate__bounceInRight animate__delay-2s">
           <div class="cws-image-bg" style="background-image: url(images/bgImages/home6.jpg)"></div>
           <div class="cws-triangle-overlay bottom-bottom " uk-scrollspy="cls: uk-animation-slide-top; repeat: false"></div>
       </div>

       <div class="auto-container">
           <div class="row">
               <!-- Content Column -->
               <div class="content-column col-lg-6 col-md-12 col-sm-12">
                   <div class="inner-column">
                       {{--  <div class="sec-title " uk-scrollspy="cls:uk-animation-slide-top ; delay: 800"><h3></h3></div>  --}}
                       <h5 uk-scrollspy="cls:uk-animation-slide-top; delay: 1300 ">“Choose a job you love, and you will never have to work a day in your life.”</h5>
                       <p style="text-align: center" uk-scrollspy="cls: uk-animation-slide-bottom; delay:1800;">Interested in joining our enthusiastic and winning team drop your updated CV at

                       <a href="mailto:careers@brintechsolutions.com"> careers@brintechsolutions.com</a></p>
                   </div>
               </div>
           </div>            
       </div>
   </section>
    
    <!--Clients Section-->
    @include('layouts.our_partner')
    <!--End Clients Section-->

    <!-- Main Footer -->
@include('layouts.footer_link')