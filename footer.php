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
		 <div class="google-reviews-class" id="google-reviews"></div>
		 <script>
jQuery(document).ready(function($) {
   $("#google-reviews").googlePlaces({
  
   });

  

});
</script>
<!-- Footer -->
<footer class="page-footer font-small dark-background  pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column 
      <div class="col-lg-6 mt-lg-0 mt-3 white-content-box">

        <!-- Content -->
        
        <!--Section heading
    <h2 class="h1-responsive font-weight-bold my-4">SIGN UP TO OUR NEWSLETTER</h2>
    <!--Section description-
    <p class="col-md-11">News and special events</p>

    <div class="row">



<!-- BEGIN TalkBox form embed code https://talkbox.impactapp.com.au -->
<!-- you can set data-width/data-height yourself for more control over iframe size (ie. data-height="1200") 
<div class="sbx-embedded-form" data-sbx-id="E1EGXKfx9PKw6uYNWAL7-w==" data-width="auto" data-height="auto"></div>
<script type="text/javascript" src="https://d3kivyesuae41d.cloudfront.net/forms/E1EGXKfx9PKw6uYNWAL7-w==/form.js" async="async" defer="defer"></script>
<!-- END TalkBox form embed code https://talkbox.impactapp.com.au -


        

    </div>


    <!--Section: Contact v.2-

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-sm-6 col-lg-2 offset-lg-1">

        <!-- Links -->
        <h2 class="h3-responsive font-weight-bold my-4">OPENING TIMES</h2>
    <!--Section description-->
    <p class="no-line-break">Monday: <?php echo get_theme_mod('monday', 'Closed'); ?><p>
    <p class="no-line-break">Tuesday: <?php echo get_theme_mod('tuesday', 'Closed'); ?><p>
    <p class="no-line-break">Wednesday:  <?php echo get_theme_mod('wednesday', 'Closed'); ?><p>
    <p class="no-line-break">Thursday: <?php echo get_theme_mod('thursday', 'Closed'); ?><p>
    <p class="no-line-break">Friday: <?php echo get_theme_mod('friday', 'Closed'); ?><p>
    <p class="no-line-break">Saturday <?php echo get_theme_mod('saturday', 'Closed'); ?><p>
    <p class="no-line-break">Sunday: <?php echo get_theme_mod('sunday', 'Closed'); ?><p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-6 col-lg-3">

        <!-- Links -->
        <h2 class="h3-responsive font-weight-bold my-4">lockes</h2>
    <!--Section description-->
   
  



   
        <ul class="list-unstyled">
          <li>
          <i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;32 Great Queen St <br/> Holborn, London, WC2B 5AA

          </li>
          <li>
              <a href="https://www.google.com/maps/place/32+Great+Queen+St,+Holborn,+London+WC2B+5AA/@51.5153099,-0.1237209,17z/data=!4m5!3m4!1s0x48761b34c96beb41:0xae4e2d4c4ba47e9!8m2!3d51.5153278!4d-0.1215811"><i class="fas fa-map-marked-alt mt-4"></i>&nbsp;&nbsp;View on Google Maps </a>
          </li>
          <li>
          <a href="tel:+442080915609"><i class="fas fa-phone mt-4"></i>&nbsp;&nbsp;020 8091 5609 </a>
          </li>
          <li>
          <a href="mailto:coventgarden@lockes.co.uk"><i class="fas fa-envelope mt-4"></i>&nbsp;&nbsp;coventgarden@lockes.co.uk</a>
          </li>
          <li>
          <a href="careers"><i class="fa fa-rocket mt-4" aria-hidden="true"></i>&nbsp;&nbsp;Careers</a> 
          </li>
          <li>
          <a href="privacy-policy"><i class="fa fa-lock mt-4" aria-hidden="true"></i>&nbsp;&nbsp;Privacy Policy</a>
          </li>
          <li>  
          <a href="coventgarden@lockes.co.uk"><i class="fab fa-facebook-square fa-2x mt-4"></i> &nbsp;&nbsp;</a>
          <a href="https://www.instagram.com/lockesbar/?igshid=76tt18go7ay7"><i class="fab fa-instagram fa-2x mt-4"></i> &nbsp;&nbsp;</a>
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
    <a href="https://seancloudsdale.com"> Cloudsdale</a> Website
  </div>
  <!-- Copyright -->

</footer>



<?php wp_footer(); ?>

</body>
</html>
