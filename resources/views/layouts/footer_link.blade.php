<footer class="main-footer" style="background-image: url(images/bgImages/bg-23.jpg);">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">
                <!--Footer Column-->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <div class="footer-widget about-widget">
                        <h4 class="widget-title">BRIN Tech Solutions</h4>
                        <div class="widget-content" >
                            <div class="text">  
                                We are here to ensure a complete network setup solution that is well suited and beneficial to your organization.</div>
                        </div>
                    </div>
                </div>

                <div class="footer-column col-lg-4 col-md-6 col-sm-12" uk-scrollspy="cls: uk-animation-slide-top; repeat: true">
                    <div class="footer-widget about-widget">
                        <h4 class="widget-title">ADDRESS</h4>
                        <div class="widget-content" >
                            <div class="text" > <i class="fa fa-map-marker" aria-hidden="true"></i>  Suite 17, The Iridium Building, Umm Suqeim Rd, Al Barsha, Dubai, UAE, PO BOX -391186</div>
                        </div>
                    </div>
                </div>

                <div class="footer-column col-lg-4 col-md-6 col-sm-12" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <div class="footer-widget about-widget">
                        <h4 class="widget-title">OUR CONTACTS</h4>
                        <div class="widget-content">
                            <ul class="contact-list">
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="mailto:reachus@brintechsolutions.com">reachus@brintechsolutions.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-mobile"></i> 
                                    <a href="tel:+971 54 517 1712"> +971 54 517 1712</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> 
                                    <a href="tel:+971 4 381 8712"> +971 4 381 8712</a>
                                </li>
                                <li>
                                   <div class="social-icon">
                                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                                       <a href="#"><i class="fab fa-twitter"></i></a>
                                       <a href="#"><i class="fab fa-instagram"></i></a>
                                       <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                       <a href="#"><i class="fa fa-signal"></i></a>
                                   </div> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Footer Column-->
                
                </div> 
            </div>
        </div>
    
    
    <!--Footer Bottom-->
    <div class="footer-bottom" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
        <div class="auto-container">
            <div class="copyright-text">
            <p>© BRIN Tech Solutions. {{date("Y")}}</p>
            </div>
        </div>
    </div>
    
</footer>

<!-- End Page Wrapper -->
</div>
<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-alt-up"></span></div>
<script src="js/jquery.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/js/uikit-icons.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<script src="build/js/intlTelInput.min.js"></script>
<!--Revolution Slider-->
<script ser="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
{{-- google recaptcha  api--}}
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<script src="build/js/intlTelInput.js"></script>
<script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    // allowDropdown: false,
    // autoHideDialCode: false,
    // autoPlaceholder: "off",
    // dropdownContainer: document.body,
    // excludeCountries: ["us"],
    // formatOnDisplay: false,
    // geoIpLookup: function(callback) {
    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //     var countryCode = (resp && resp.country) ? resp.country : "";
    //     callback(countryCode);
    //   });
    // },
    // hiddenInput: "full_number",
    // initialCountry: "auto",
    // localizedCountries: { 'de': 'Deutschland' },
    // nationalMode: false,
    onlyCountries: ['ae', 'sa', 'qa', 'kw', 'om','bh', 'in' , 'za','cf'],
    // placeholderNumberType: "MOBILE",
    // preferredCountries: ['cn', 'jp'],
    separateDialCode: true,
    utilsScript: "build/js/utils.js",

  });
</script>
<script>
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
    }
  </script>
{{-- mobileser --}}
</body>
</html>