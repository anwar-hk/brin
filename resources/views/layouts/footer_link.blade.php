<footer class="main-footer" style="background-image: url(images/bgImages/dubai.jpg);">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">
                <!--Footer Column-->
                <div class="footer-column col-lg-4 " uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                    <div class="footer-widget about-widget">
                        <h4 class="widget-title" >BRIN Tech Solutions</h4>
                        <div class="widget-content" >
                            <div class="text">  
                                We are here to ensure the complete<br> IT Solution  which is well suited and beneficial <br> for your organization.</div>
                        </div>
                    </div>
                </div>

                <div class="footer-column col-lg-4 " uk-scrollspy="cls: uk-animation-slide-top; repeat: false">
                    <div class="footer-widget about-widget">
                        <h4 class="widget-title" >ADDRESS</h4>
                        <div class="widget-content" >
                            <div class="text text-justify"><a href="contact" ><i class="fa fa-map-marker icon-1" > </i></a>  Suite 17, <br> The Iridium Building, <br> Umm Suqeim Rd, Al-Barsha, <br> Dubai, UAE, PO BOX - 391186 </div>
                        </div>
                    </div>
                </div>

                <div class="footer-column col-lg-4" uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                    <div class="footer-widget about-widget">
                        <h4 class="widget-title">OUR CONTACTS</h4>
                        <div class="widget-content">
                            <ul class="contact-list">
                                <li>
                                    
                                    <a href="mailto:reachus@brintechsolutions.com"><i class="far fa-envelope"></i> reachus@brintechsolutions.com</a>
                                </li>
                                <li>
                                    <a href="tel:+971 54 517 1712"><i class="fa fa-mobile"></i> 
                                     +971 54 517 1712</a>
                                </li>
                                <li>
                                    
                                    <a href="tel:+971 4 381 8712"> <i class="fa fa-phone"></i>  +971 4 381 8712</a>
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
            <div class="copyright-text ">
            <p >© BRIN Tech Solutions. {{date("Y")}}</p>
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
    autoHideDialCode: false,
    // autoPlaceholder: "off",
    // dropdownContainer: document.body,
    // excludeCountries: ["us"],
    // formatOnDisplay: false,
    geoIpLookup: function(callback) {
      $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        var countryCode = (resp && resp.country) ? resp.country : "";
        callback(countryCode);
      });
    },
    // hiddenInput: "full_number",
    // initialCountry: "auto",
    localizedCountries: { 'de': 'Deutschland' },
    // nationalMode: false,
    onlyCountries: ['ae','sa', 'qa', 'kw', 'om','bh', 'in' , 'za','cf', 'eg','et','ga','gm','gh','mg','mw','ml','mu','ma','mz','na','ng','rw','tz','tg','tn','ug','zm','zw'],
    // placeholderNumberType: "MOBILE",
    preferredCountries: ['ae'],
    separateDialCode: true,
    utilsScript: "build/js/utils.js",
    
  });
//   var selectField = input;
//     selectField.addEventListener('touchstart' /*'mousedown'*/, function(e) {
//     e.stopPropagation();
//     }, false);
  
</script>
<script>
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
    }

    
  </script>
  <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
  <script>
           grecaptcha.ready(function() {
               grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'add_contact'}).then(function(token) {
                  if (token) {
                    document.getElementById('recaptcha').value = token;
                  }
               });
           });
  </script>
{{-- mobileser --}}
</body>
</html>