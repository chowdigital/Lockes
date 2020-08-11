<?php /* Template Name: Home*/ get_header(); ?>
<!-- Full Page Intro -->
<div class="view full-page-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg'); background-repeat: no-repeat; background-size: cover;">

<!-- Mask & flexbox options-->
<div class="mask rgba-black-light d-flex justify-content-center align-items-center">

  <!-- Content -->
  <div class="container">

    <!--Grid row-->
    <div class="row wow fadeIn">

      <!--Grid column-->
      <div class="col-md-6 mb-4 white-text text-center text-md-left">

        <h1 class="display-4 font-weight-bold">Learn Bootstrap 4 with MDB</h1>

        <hr class="hr-light">

        <p>
          <strong>Best & free guide of responsive web design</strong>
        </p>

        <p class="mb-4 d-none d-md-block">
          <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
            available. Create your own, stunning website.</strong>
        </p>

        <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-indigo btn-lg">Start free tutorial
          <i class="fas fa-graduation-cap ml-2"></i>
        </a>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 col-xl-5 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card content-->
          <div class="card-body">

            <!-- Form -->
            <form name="">
              <!-- Heading -->
              <h3 class="dark-grey-text text-center">
                <strong>Write to us:</strong>
              </h3>
              <hr>

              <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form3" class="form-control">
                <label for="form3">Your name</label>
              </div>
              <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="text" id="form2" class="form-control">
                <label for="form2">Your email</label>
              </div>

              <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <textarea type="text" id="form8" class="md-textarea"></textarea>
                <label for="form8">Your message</label>
              </div>

              <div class="text-center">
                <button class="btn btn-indigo">Send</button>
                <hr>
                <fieldset class="form-check">
                  <input type="checkbox" class="form-check-input" id="checkbox1">
                  <label for="checkbox1" class="form-check-label dark-grey-text">Subscribe me to the newsletter</label>
                </fieldset>
              </div>

            </form>
            <!-- Form -->

          </div>

        </div>
        <!--/.Card-->

      </div>
      <!--Grid column-->

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
<?php get_footer(); ?>