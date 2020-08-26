<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>
<!-- Footer -->
<footer class="page-footer font-small dark-background  pt-4">

  <!-- Footer Links -->
  <div class="container text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-6 mt-lg-0 mt-3 white-content-box">

        <!-- Content -->
        
        <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold my-4">Sign up to our newsletter</h2>
    <!--Section description-->
    <p class="col-md-11">News and special events</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-11 mb-md-0 mb-6">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="mdbInput">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();"> <i class="fas fa-paper-plane"></i> Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        

    </div>


<!--Section: Contact v.2-->

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-sm-6 col-lg-2 offset-lg-1">

        <!-- Links -->
        <h2 class="h3-responsive font-weight-bold my-4">OPENING TIMES</h2>
    <!--Section description-->
    <p class="no-line-break">Monday: Closed<p>
    <p class="no-line-break">Tuesday: 5pm - 1am<p>
    <p class="no-line-break">Wednesday:  5pm - 1am<p>
    <p class="no-line-break">Thursday: 5pm - 3am<p>
    <p class="no-line-break">Friday: 5pm - 3am<p>
    <p class="no-line-break">Saturday 5pm - 3am<p>
    <p class="no-line-break">Sunday: Closed<p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-6 col-lg-3">

        <!-- Links -->
        <h2 class="h3-responsive font-weight-bold my-4">BLACK BOOK</h2>
    <!--Section description-->
   
  




   
        <ul class="list-unstyled">
          <li>
          <i class="fa fa-home" aria-hidden="true"></i>  23 Frith Street, Soho 
          </li>
          <li>
              <a href="https://www.google.com/maps/place/TRADE+Soho/@51.5133559,-0.1333751,17z/data=!3m1!4b1!4m5!3m4!1s0x48760529ea75a7b3:0x89287c620f263591!8m2!3d51.5133559!4d-0.1311864?shorturl=1"><i class="fas fa-map-marked-alt mt-4"></i>  View on Google Maps </a>
          </li>
          <li>
          <a href="tel:+442074341724"><i class="fas fa-phone mt-4"></i>  020 7434 1724 </a>
          </li>
          <li>
          <a href="mailto:info@blackbooksoho.co.uk"><i class="fas fa-envelope mt-4"></i>  info@blackbooksoho.co.uk</a>
          </li>
          <li>
          <a href="http://blackbooksoho.co.uk/careers"><i class="fa fa-rocket mt-4" aria-hidden="true"></i>  Careers</a> 
          </li>
          <li>
          <a href="http://blackbooksoho.co.uk/privacy-policy"><i class="fa fa-lock mt-4" aria-hidden="true"></i>  Prvacy Policy</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="text-center py-3 black-background">A 
    <a href="https://mdbootstrap.com/"> Cloudsdale</a> Website
  </div>
  <!-- Copyright -->

</footer>



<?php wp_footer(); ?>

</body>
</html>
