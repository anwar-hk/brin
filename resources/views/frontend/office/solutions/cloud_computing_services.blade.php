@include('layouts.header_link')
{{-- navbar --}}
@php
    $currentPage="cloud_service";
    $currentNav="office_solutions";
@endphp
@include('frontend.office.nav')

<section class="page-title">
    <div class="cws-image-bg" style="background-image: url(images/bgImages/officeslider2.jpg)">
        <div class="cws-overlay-bg"></div>
    </div>

    <div class="auto-container animate__animated animate__bounceInDown animate__delay-2s">
        <h1>Cloud Computing Services</h1>
    </div>
</section>


<section class="mbr-section content6 cid-qvbcpawfCj" id="content6-7p" data-rv-view="1429">

    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="media-container-row">
                    <div class="mbr-figure" style="width: 60%;" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 500;">
                      <img src="assets/images/01.jpg" alt="Mobirise" media-simple="true">  
                    </div>
                    <div class="media-content">
                        <div class="mbr-section-text" uk-scrollspy="cls: uk-animation-slide-right; repeat: false; delay: 500;">
                            <p class="mbr-text mb-0 mbr-fonts-style display-7 ">
                               <strong>Thinking of Moving to Cloud?</strong> Build, innovate, and scale with
                                various cloud services on hand and have it up and running in no time. Talk to
                                 us to let us know your requirements or objectives and we can recommend a
                                  customized solution and platform to go to.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content7 cid-qvbcpyt5Oo" id="content7-7q" data-rv-view="1431">
          
    

    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="media-container-row">
                    <div class="media-content">
                        <div class="mbr-section-text" uk-scrollspy="cls: uk-animation-slide-left; repeat: false; delay: 500;">
                            <p class="mbr-text align-right mb-0 mbr-fonts-style display-7 ">
                               <strong>Work Load Migration, Hybrid Cloud, API Management, IoT,Microsoft Office 365!</strong>
                               Your place to create, communicate, collaborate, and get great work done. Cloud computing is the
                               on-demand availability of computer system resources, especially data storage and computing power,
                               without direct active management by the user.
                            </p>
                        </div>
                    </div>
                    <div class="mbr-figure" style="width: 60%;" uk-scrollspy="cls: uk-animation-slide-right; repeat: false; delay: 500;">
                     <img src="assets/images/01.jpg" alt="Mobirise" media-simple="true">  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content3 cid-qvbcpUqfFK" id="content3-7r" data-rv-view="1433">
      
     

    <div class="container">
        <div class="media-container-row">
            <div class="row col-12 col-md-12" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: false; delay: 500;">
                <div class="col-12 col-md-4 pr-lg-4 mbr-text mbr-fonts-style display-7 ">
                    <strong>Microsoft Azure</strong>
                    Freedom to build, manage, and deploy applications on a massive, global network using your favorite tools and frameworks.
                </div>
                <div class="col-12 col-md-4 pl-lg-4 mbr-text mbr-fonts-style display-7 ">
                    <strong>Amazon Web Services</strong>
                    Cost-effective cloud tools for business operations, high scalability, and availability.
                </div>
                <div class="col-12 col-md-4 pl-lg-4 mbr-text mbr-fonts-style display-7">
                    <strong>Google Cloud</strong>
                    Streamlined cloud ecosystem for development and deployment.
                </div>
            </div>
        </div>
    </div>
</section>



@include('layouts.our_partner')       
<!--End Clients Section-->
@include('layouts.footer_link')