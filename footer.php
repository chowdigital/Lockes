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
      <div class="col-md-6 mt-md-0 mt-3 white-content-box">

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

</section>
<!--Section: Contact v.2-->

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3 text-footer-responsive">

        <!-- Links -->
        <h2 class="h3-responsive font-weight-bold my-4">OPENING TIMES</h2>
    <!--Section description-->
    <p class="no-line-break">Monday: 12pm - 11pm<p>
    <p class="no-line-break">Tuesday: 12pm - 11pm<p>
    <p class="no-line-break">Wednesday:  12pm - 11pm<p>
    <p class="no-line-break">Thursday: 12pm - 11pm<p>
    <p class="no-line-break">Friday: 12pm - 11pm<p>
    <p class="no-line-break">Saturday 12pm - 11pm<p>
    <p class="no-line-break">Sunday: 12pm - 11pm<p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3 text-footer-responsive">

        <!-- Links -->
        <h2 class="h3-responsive font-weight-bold my-4">BLACK BOOK</h2>
    <!--Section description-->
    <p class="no-line-break">23 Frith Street</p>
    <p class="no-line-break">Soho</p>
    <p class="no-line-break">W1D 4RR</p>
    <p>Lincolnshire</p>
  




   
        <ul class="list-unstyled">
        <li>
        <a href="https://www.google.com/maps/place/TRADE+Soho/@51.5133559,-0.1333751,17z/data=!3m1!4b1!4m5!3m4!1s0x48760529ea75a7b3:0x89287c620f263591!8m2!3d51.5133559!4d-0.1311864?shorturl=1">View on Google Maps <i class="fas fa-map-marked-alt"></i></a>
</li>
          <li>
          020 7434 1724 <i class="fas fa-phone mt-4"></i> 
          </li>
          <li>
           info@blackbooksoho.co.uk <i class="fas fa-envelope mt-4"></i>
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
