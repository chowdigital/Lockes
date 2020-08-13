<?php /* Template Name: Events*/ get_header(); ?>
 <!--Carousel Wrapper-->
 <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

<!--Indicators-->
<ol class="carousel-indicators">
  <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-1z" data-slide-to="1"></li>
  <li data-target="#carousel-example-1z" data-slide-to="2"></li>
</ol>
<!--/.Indicators-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

  <!--First slide-->
  <div class="carousel-item active">
    <div class="view" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/wine1'); background-repeat: no-repeat; background-size: cover;">

      <!-- Mask & flexbox options-->
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center dark-grey-text mx-5 wow fadeIn">
          <h1 class="mb-4">
            <strong>Learn Bootstrap 4 with MDB</strong>
          </h1>

          <p>
            <strong>Best & free guide of responsive web design</strong>
          </p>

          <p class="mb-4 d-none d-md-block">
            <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
              available. Create your own, stunning website.</strong>
          </p>

          <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start free tutorial
            <i class="fas fa-graduation-cap ml-2"></i>
          </a>
        </div>
        <!-- Content -->

      </div>
      <!-- Mask & flexbox options-->

    </div>
  </div>
  <!--/First slide-->



</div>
<!--/.Slides-->

<!--Controls-->
<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
<!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->
<main id="primary" class="site-main container">

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<!--Grid row-->
<div class="row wow fadeIn">
<?php
// The Query
$the_query = new WP_Query( 'cat=1&posts_per_page=24' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		


    <!--Grid column-->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex flex-column">
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
       
       
        <p class="grey-text"><?php the_excerpt(); ?></p>
        <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-white btn-rounded"><i class="fa fa-info-circle aria-hidden="true"></i> More Information </button></a>

    </div>
    <!--Grid column-->

  <?php
  
  $counter++;
  } // end while
  } // end if
  ?>
  </div>
  <!--Grid row-->
</main>
<?php get_footer(); ?>