 

     <!-- footer-area -->
     <footer>
            <div class="footer-area footer-bg" data-background="assets/img/bg/footer_bg.png">
                <div class="container">
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Usefull Links</h4>
                                    <div class="footer-link">
                                        <ul class="list-wrap">
                                            <li><a href="contact.html">Contact us</a></li>
                                            <li><a href="contact.html">How it Works</a></li>
                                            <li><a href="contact.html">Create</a></li>
                                            <li><a href="contact.html">Explore</a></li>
                                            <li><a href="contact.html">Terms & Services</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">SOLUTIONS</h4>
                                    <div class="footer-link">
                                        <ul class="list-wrap">
                                            <li><a href="contact.html">Token Suite</a></li>
                                            <li><a href="contact.html">Ecosystem</a></li>
                                            <li><a href="contact.html">Investment</a></li>
                                            <li><a href="contact.html">Portal</a></li>
                                            <li><a href="contact.html">Tokenization</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Usefull Links</h4>
                                    <div class="footer-link">
                                        <ul class="list-wrap">
                                            <li><a href="contact.html">Help Center</a></li>
                                            <li><a href="contact.html">Partners</a></li>
                                            <li><a href="contact.html">Suggestions</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Newsletters</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-8">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Subscribe Newsletter</h4>
                                    <div class="footer-newsletter">
                                        <p>Exerci tation ullamcorper suscipit lobortis nisl aliquip ex ea commodo</p>
                                        <form action="#">
                                            <input type="text" placeholder="Info@gmail.com">
                                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="copyright-text">
                                    <p>Copyright © 2024 coin mining investment. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-shape-wrap">
                    <img src="assets/img/images/footer_shape01.png" alt="" class="alltuchtopdown">
                    <img src="assets/img/images/footer_shape02.png" alt="" class="leftToRight">
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->
        <div class="mgm" style="display: none;">
    <div class="txt" style="color: #90EE90;">Someone from <b></b> just invested <a
        href="javascript:void(0);" onclick="javascript:void(0);"></a>
    </div>
  </div>

  <style>
    .mgm {
      border-radius: 7px;
      position: fixed;
      z-index: 90;
      bottom: 80px;
      right: 50px;
      background: #000001;
      padding: 10px 27px;
      box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
    }

    .mgm a {
      font-weight: 700;
      display: block;
      color: #fff;
    }

    .mgm a,
    .mgm a:active {
      transition: all .2s ease;
      color: #fff;
    }

  </style>

  <script type="text/javascript">
    var listCountries = ['UK', 'USA', 'Germany', 'France', 'Italy', 'South Africa', 'Australia', 'Switzerland', 'Canada',
      'Argentina', 'Saudi Arabia', 'Mexico', 'Mexico', 'South Africa', 'Venezuela', 'South Africa', 'Sweden',
      'South Africa', 'USA', 'Italy', 'United State', 'United Kingdom', 'California', 'Greece', 'Cuba', 'South Africa',
      'Portugal', 'Austria', 'South Africa', 'London', 'South Africa', 'Cyprus', 'Netherlands', 'Switzerland',
      'Belgium', 'Israel', 'Cyprus'
    ];
    var listPlans = ['$500,000', '$15,000', '$10,000', '$90,000', '$200,000', '$30,000', '$4000', '$600', '$700', '$2500'];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
      clearInterval(run);
      interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
      var country = listCountries[Math.floor(Math.random() * listCountries.length)];
      var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
      var msg = 'Someone from <b>' + country +
        '</b> just invested <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
      jQuery(".mgm .txt").html(msg);
      jQuery(".mgm").stop(true).fadeIn(1000);
      window.setTimeout(function() {
        jQuery(".mgm").stop(true).fadeOut(1000);
      }, 6000);
      run = setInterval(request, interval);
    }
  </script>


<div id="google_translate_element"></div>
<style>
#google_translate_element {
z-index: 9999999;
position: fixed;
bottom: 25px;
left: 15px;
}
</style>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            
            autoDisplay: true
        }, 'google_translate_element');
    }

</script>
<script src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit" type="text/javascript"></script>

<div id="chat-widget-container" style="opacity: 0; visibility: hidden; z-index: -1; position: fixed; bottom: 0px; width: 392px; height: 714px; max-width: 100%; max-height: calc(100% + 0px); min-height: 0px; min-width: 0px; background-color: transparent; border: 0px; overflow: hidden; right: 0px;"><iframe allow="clipboard-read; clipboard-write; autoplay; microphone *; camera *; display-capture *; picture-in-picture *; fullscreen *;" src="https://secure.livechatinc.com/customer/action/open_chat?license_id=17295237&amp;group=0&amp;embedded=1&amp;widget_version=3&amp;unique_groups=0" allowtransparency="true" id="chat-widget" name="chat-widget" title="LiveChat chat widget" scrolling="no" style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; position: absolute; inset: 0px;"></iframe></div>

        <!-- JS here -->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/jquery.easing.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from themeadapt.com/tf/iko/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2024 12:37:34 GMT -->
</html>
