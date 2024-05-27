<?php /* Template Name: Home*/ get_header(); ?>
<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-1">

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
                    <a href="book"><button type="button" class="btn btn-lockes waves-effect waves-light">Book A
                            Table</button></a>



                </div>

            </div>
            <!--Grid row-->

        </div>
        <!-- Content -->



    </div>
    <!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro -->

<section>
    <div class="row pt-3 pb-3">
        <div class="col-6 offset-3 col-sm-4 offset-sm-4 col-lg-2 offset-lg-5 text-center">

            <img class="m-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.svg" alt=""
                style="max-width: 70px;">
        </div>
    </div>
</section>


<section class="container">

    <div class="mt-5 mb-5 z-depth-3">
        <div class="row">
            <div class="square-img-box col-12 col-lg-6 z-depth-3"
                style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover; padding-bottom: 50%;border: solid 1px #e7a649;">

            </div>
            <div class="menu-content-box col-12 col-lg-6 d-flex flex-column justify-content-center">

                <header class="entry-header">
                    <h2>Halloween Dia De Los Muertos</h2>
                </header><!-- .entry-header -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
                <a
                    href="https://www.designmynight.com/london/bars/covent-garden/lockes-bar/halloween-dia-de-los-muertos-at-lockes-bar?t=tickets"><button
                        type="button" class="btn btn-primary waves-effect waves-light">get tickets here</button></a>

            </div>
        </div>
    </div>


</section>
<section>
    <div class="row pt-3 pb-3">
        <div class="col-6 offset-3 col-sm-4 offset-sm-4 col-lg-2 offset-lg-5 text-center">

            <img class="m-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.svg" alt=""
                style="max-width: 70px;">
        </div>
    </div>
</section>

<main id="primary" class="site-main container pb-6">
    <div class="z-depth-3">
        <div class="menu-content-box col-12">

            <h1 class="entry-title mb-4">events and offers</h1>
            <!--Grid row-->
            <div class="row wow fadeIn">
                <?php
    // The Query
    $the_query = new WP_Query( 'cat=3&posts_per_page=2' );
    //posts_per_page=5'


    // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $category = get_the_category(); 
            ?>


                <!--Grid column-->
                <div class="col-md-6 mb-4 d-flex flex-column">


                    <!--Featured image-->
                    <div class="view overlay hm-white-slight rounded z-depth-2 mb-4 thumb-wrapper">

                        <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>

                        <a href="<?php echo get_permalink() ?>">
                            <div class="mask"></div>
                        </a>
                    </div>

                    <div>
                        <h4 class="mb-3 font-weight-bold">
                            <strong><?php the_title(); ?></strong>
                        </h4>


                        <p class="grey-text"><?php the_excerpt(); ?></p>
                    </div>
                    <div class="mt-auto">
                        <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-light">Find
                                out More </button></a>
                    </div>
                </div>
                <!--Grid column-->

                <?php
      
      $counter++;
      } // end while
      } // end if
      wp_reset_postdata(); 
      ?>
            </div>
            <!--Grid row-->
            <!-- <div class="more-box text-left">
    <a href="events"><button type="button" class="btn btn-primary">All Events</button></a>
    </div>-->
        </div>
    </div>
</main>


<?php get_footer(); ?>