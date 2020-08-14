<?php /* Template Name: Home*/ get_header(); ?>
<!-- Full Page Intro -->

<div class="view full-page-intro">

<video playsinline autoplay muted loop id="myVideo" class="view full-page-intro">
  		<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/blackbook_1.0.mp4" type="video/mp4">
  			<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/blackbook_1.0.webm" type="video/webm">
  				<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/blackbook_1.0.ogg" type="video/ogg">
		 </video>
<!-- Mask & flexbox options-->

<div class="mask d-flex justify-content-center align-items-center">

  <!-- Content -->
  <div class="container">

    <!--Grid row-->
    <div class="row wow fadeIn">
      <div class="white-content-box text-center">
      <h1>Welcome to Black Book</h1>
      <p>Welcome to Black Book</p>
      <button type="button" class="btn btn-dark">Dark</button>

      </div>
      
    </div>
    <!--Grid row-->

  </div>
  <!-- Content -->

</div>
<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro --> 





<main id="primary" class="site-main container">

<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			

		endwhile; // End of the loop.
		?>


<!--Grid row-->
<div class="row wow fadeIn">
<?php
// The Query
$the_query = new WP_Query( 'cat=3&posts_per_page=4' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		


    <!--Grid column-->
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4 d-flex flex-column">
        <!--Featured image-->
        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4 ">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
            <a href="<?php echo get_permalink() ?>">
                <div class="mask"></div>
            </a>
        </div>

     
        <h4 class="mb-3 font-weight-bold dark-grey-text">
			
            <strong><?php the_title(); ?></strong>
        </h4>
       
       
       
    </div>
    <!--Grid column-->

  <?php
  
  $counter++;
  } // end while
  } // end if
  ?>
  </div>
  <!--Grid row-->
  <div class="container text-center">

  <a href="http://localhost:8888/gulp_s/training-courses/"><button type="button" class="btn btn-blue btn-rounded"><i class="fas fa-graduation-cap"></i>  View all courses</button></a>




</div>
</main><!-- #main -->
<?php get_template_part( 'template-parts/banner', 'page' ); ?>
<?php get_footer(); ?>