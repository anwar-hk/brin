    <!-- Main Header-->
    <header class="main-header">
        <!-- Main box -->
        <div class="main-box">
            <div class="menu-box">
                <div class="logo animate__animated animate__backInLeft animate__delay-1s" >
                    <a href="/">
                        <img src="images/logo.png" alt="" title="" srcset="images/logo.png 2x">
                        <p style="font-size: 14px; padding-left:6px; color:#09aff7;">We Bring Solutions</p>
                    </a>
                </div>
                <!--Nav Box-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{$currentPage == 'welcome' ? 'current' : '' }}" >
                                    <a href="/"><span class="animate__animated animate__bounceInDown animate__delay-1s">Home</span></a>
                                </li>
                                <li class="dropdown animate__animated animate__bounceInDown animate__delay-1s">
                                    <a href=""><span class="">Services</span></a>
                                    <ul>
                                        <li><a href="homeservices">Home Services</a></li>
                                        <li><a href="officeservices">Office Services</a></li>
                                    </ul>
                                </li>
                                <li class="{{ $currentPage == 'about' ? 'current' : '' }}"><a href="about" class="animate__animated animate__bounceInDown animate__delay-1s"><span>About Us</span> </a></li>
                                <li class="{{ $currentPage == 'partner' ? 'current' : '' }}"><a href="partner" class="animate__animated animate__bounceInDown animate__delay-1s"><span>Partners</span> </a></li>
                                <li class="{{ $currentPage == 'contact' ? 'current' : '' }}"><a href="contact" class="animate__animated animate__bounceInDown animate__delay-1s"><span>Contact Us</span></a></li>
                                <li class="{{ $currentPage == 'news' ? 'current' : '' }}"><a href="news" class="animate__animated animate__bounceInDown animate__delay-1s" ><span>News</span> </a></li>
                                <li class="{{ $currentPage == 'career' ? 'current' : '' }}"><a href="career" class="animate__animated animate__bounceInDown animate__delay-1s"><span>Careers </span></a></li>
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
                    <a href="#" title="Brin Tech Logo"><img src="images/logo.png" alt="Brin Tech Logo">
                        <p style="font-size: 14px; padding-left:6px; color:#09aff7;">We Bring Solutions</p>
                        </a>
                   
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
            <div class="logo"><a href="/"><img src="images/logo.png" alt="" title="" srcset="images/logo.png 2x"></a>
            </div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">            
            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="images/logo.png" alt="" title="" srcset="images/logo.png 2x"></a></div> 
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->