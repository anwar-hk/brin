<!-- Main Header-->
<header class="main-header">
    <!-- Main box -->
    <div class="main-box">
        <div class="menu-box">
            <div class="logo">
                <a href="officeservices"><img src="images/logo.png" alt="" title="" srcset="images/logo.png 2x">
                    <p style="font-size: 14px; color:#09aff7;">We Bring Solutions</p>
                </a>
            </div>
            <!--Nav Box-->
            <div class="nav-outer">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light pt-4" >
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="current ">
                                <a href="officeservices"><span>home</span></a>
                            </li>
                            <li class=" has-mega-menu">
                                <a href="about"><span>about us</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#"><span>solutions we offer</span></a>
                                <ul>
                                    <li class="{{ $currentPage == 'it_security' ? 'current' : '' }}"><a href="it_security">IT Security</a></li>
                                    <li class="{{ $currentPage == 'office_setup' ? 'current' : '' }}"><a href="office_setup">Office IT setup Services</a></li>
                                    <li class="{{ $currentPage == 'manage_it_support' ? 'current' : '' }}"><a href="manage_it_support">Managed IT Support</a></li>
                                    <li class="{{ $currentPage == 'network_solutions' ? 'current' : '' }}"><a href="network_solutions">Network Solutions </a></li>
                                    <li class="{{ $currentPage == 'it_product_supply' ? 'current' : '' }}"><a href="it_products_supply_installation">IT Products Supply & Installation</a></li>
                                    <li class="{{ $currentPage == 'outsourcing_service' ? 'current' : '' }}"><a href="it_management_services">IT Outsourcing & Management Services</a></li>
                                    <li class="{{ $currentPage == 'cloud_service' ? 'current' : '' }}"><a href="cloud_computing_services">Cloud Computing Services </a></li>
                                    
                                </ul>
                            </li>
                            <li class="{{ $currentNav == 'news' ? 'current' : '' }}"><a href="news"><span>news</span> </a></li>
                            <li class="{{ $currentNav == 'careers' ? 'current' : '' }}"><a href="careers"><span>careers</span> </a></li>
                            <li class="{{ $currentNav == 'contact' ? 'current' : '' }}"><a href="contact"><span>Contacts</span> </a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
                </div>
        </div>
    </div>

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="outer-box">
            <!--Logo-->
            <div class="logo">
                <a href="officeservices" title="Sticky Logo"><img src="images/logo.png" alt="Sticky Logo">
                    <p style="font-size: 14px; color:#09aff7;">We Bring Solutions</p></a>
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
        <div class="logo"><a href="officeservices"><img src="images/logo.png" alt="" title="" srcset="images/logo.png 2x">
            <p style="font-size: 14px; color:#09aff7;">We Bring Solutions</p></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">
            <!--Keep This Empty / Menu will come through Javascript-->
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">            
        <nav class="menu-box">
            <div class="nav-logo"><a href="officeservices"><img src="images/logo.png" alt="" title="" srcset="images/logo.png 2x">
                <p style="font-size: 14px; color:#09aff7;">We Bring Solutions</p></a></div> 
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!--End Main Header -->