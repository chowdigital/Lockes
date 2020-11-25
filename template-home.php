<?php /* Template Name: Home*/ get_header(); ?>
<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-3">

<video playsinline autoplay muted loop id="myVideo" class="view full-page-intro">
  		<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/lockes_01.mp4" type="video/mp4">
  			<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/lockes_01.webm" type="video/webm">
  			<!--	<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/blackbook_1.0.ogg" type="video/ogg">-->
		 </video>
<!-- Mask & flexbox options-->

<div class="mask d-flex justify-content-center align-items-center">

  <!-- Content -->
  <div class="container">

    <!--Grid row-->
    <div class="row wow fadeIn">
      <div class="white-content-box text-left mb-4">
  
      
        <h1><?php the_field('welcome_title'); ?></h1>
      <p><?php the_field('welcome_body'); ?></p>
      <a href="book"><button type="button" class="btn btn-primary waves-effect waves-light">Book A Table</button></a>

      

      </div>
      
    </div>
    <!--Grid row-->

  </div>
  <!-- Content -->

  

</div>
<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro --> 



<div class="container-fluid">
<div class="container pt-6 pb-6 z-depth-3">
<div class="menu-content-box col-12">
<h2>lockes on instagram</h2>
<?php  echo do_shortcode( '[instagram-feed]' ); ?>
</div>
</div>
</div>



<?php get_footer(); ?>