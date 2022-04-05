<footer class="footer footer-big footer-color-black" data-color="black">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="info">
                    <h5 class="title">Company</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Đặt Hàng</a>
                            </li>
                            <li>
                                <a href="#">Về chúng tôi</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1 col-sm-3">
                <div class="info">
                    <h5 class="title"> Help and Support</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">How it works</a>
                            </li>
                            <li>
                                <a href="#">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="#">Company Policy</a>
                            </li>
                            <li>
                                <a href="#">Money Back</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="info">
                    <h5 class="title">Latest News</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is
                                    here, just give it a try and let us...
                                    <hr class="hr-small">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards
                                        Website</b>! Thank you everybody for...
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-1 col-sm-3">
                <div class="info">
                    <h5 class="title">Follow us on</h5>
                    <nav>
                        <ul>
                            <li>
                                <a href="#" class="btn btn-social btn-facebook btn-simple">
                                    <i class="fa fa-facebook-square"></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-social btn-reddit btn-simple">
                                    <i class="fa fa-google-plus-square"></i> Google+
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright">
            ©
            <script> document.write(new Date().getFullYear()) </script> Creation Of Ryuu
        </div>
    </div>
</footer>

</body>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.leanModal.min.js" type="text/javascript"></script>    
<script src="assets/js/bootstrap.js" type="text/javascript"></script>
<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>
<script type="text/javascript">
    // Plugin options and our code
$("#modal_trigger").leanModal({
      top: 100,
      overlay: 0.6,
      closeButton: ".modal_close"
});

$(function() {
      // Calling Login Form
      $("#login_form").click(function() {
              $(".social_login").hide();
              $(".user_login").show();
              return false;
      });

      // Calling Register Form
      $("#register_form").click(function() {
              $(".social_login").hide();
              $(".user_register").show();
              $(".header_title").text('Register');
              return false;
      });

      // Going back to Social Forms
      $(".back_btn").click(function() {
              $(".user_login").hide();
              $(".user_register").hide();
              $(".social_login").show();
              $(".header_title").text('Login');
              return false;
      });
});
</script>  
</html><?php /**PATH K:\projects\xampp\htdocs\dat-thuc-an\resources\views/pages/footer.blade.php ENDPATH**/ ?>