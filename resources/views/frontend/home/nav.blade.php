<!-- Main Header-->
<header class="main-header">
    <!-- Main box -->
    <div class="main-box" style="pull-right">
        <div class="menu-box">
            <div class="logo"><a href="homeservices"><img src="images/logo.png" alt="" title="" srcset="images/logo.png 2x">
                <p style="font-size: 14px; padding-left:6px; color:#09aff7;">We Bring Solutions</p></a>
            </div>
            <!--Nav Box-->
            <div class="nav-outer">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="{{ $currentNav == 'homeservices' ? 'current' : '' }}">
                                <a href="/"><span>Home</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#"><span>Services</span> </a>
                                <ul>
                                    <li><a href="#cctv"><span>SURVEILLANCE</span> </a></li>
                                    <li><a href="#wifi"><span>Wi-Fi SETUP</span> </a></li>
                                    <li><a href="#security"><span>SECURITY</span> </a></li>
                                    <li><a href="#intercom"><span>INTERCOM</span> </a></li>
                                    {{-- <li><a href="#homeAutomation"></a></li> --}}
                                    
                                </ul>
                            </li>
                            
                            <li class="{{ $currentPage == 'about' ? 'current' : '' }}"><a href="about"><span>About Us</span> </a></li>
                            <li class="{{ $currentPage == 'partner' ? 'current' : '' }}"><a href="partner"><span>Partner</span> </a></li>
                            {{-- <li><a href=""><span></span> </a></li> --}}
                            <li class="{{ $currentPage == 'contact' ? 'current' : '' }}"><a href="contact"><span>Contact us</span>  </a></li>
                            <li class="{{ $currentPage == 'news' ? 'current' : '' }}"><a href="news"><span>News</span>  </a></li>
                            <li class="{{ $currentPage == 'careers' ? 'current' : '' }}"><a href="career"><span>Careers</span>  </a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="outer-box">
            <!--Logo-->
            <div class="logo">
                <a href="#" title="Brin Logo"><img src="images/logo.png" alt="brin Logo">
                    <p style="font-size: 14px; padding-left:6px; color:#09aff7;">We Bring Solutions</p></a>
            </div>

            <!--Nav Outer-->
            <div class="nav-outer">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href=""><img src="images/logo.png" alt="" title="" srcset="images/logo.png 2x">
            <p style="font-size: 14px; padding-left:6px; color:#09aff7;">We Bring Solutions</p>
        </a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">
            <!--Keep This Empty / Menu will come through Javascript-->
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">            
        <nav class="menu-box">
            <div class="nav-logo"><a href="homeservices"><img src="images/logo.png" alt="" title="" srcset="images/logo.png 2x">
                <p style="font-size: 14px; padding-left:6px; color:#09aff7;">We Bring Solutions</p>
                </a>
            </div> 
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </nav>
    </div><!-- End Mobile Menu -->

    {{--  <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        
        <div class="search-inner">
            <button class="close-search"><span class="fa fa-times"></span></button>
            <form method="post" action="blog-showcase.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->  --}}

</header>
<!--End Main Header -->