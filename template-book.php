<?php /* Template Name: Book */ get_header(); ?>

<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>




<main id="primary" class="site-main container pt-7">

<div class="z-depth-3">
  <div class="menu-content-box col-12">
      <div class="container container--wider dmn-container dmn--section">
      <div class="mt-5">

<div id="TA_cdsratingsonlynarrow316" class="TA_cdsratingsonlynarrow align-self-center"><ul id="q5zUa0mU" class="TA_links 3E65MvGq"><li id="w4iEuPqBj0c7" class="WrHSA2"><a target="_blank" href="https://www.tripadvisor.co.uk/Restaurant_Review-g186338-d19254536-Reviews-LOCKES-London_England.html"></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=316&amp;locationId=19254536&amp;lang=en_UK&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
</div>
     <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="mt-5">
        
        <script src="//widgets.designmynight.com/bookings-partner.min.js" dmn-booking-form="true" venue="5d16210f37cb8c41bc03ba64" hide-offers="false" hide-powered-by="false" search-venues="false" monday-first="true"></script>
        </div>
    
      </div>
      <div class="col-12 text-center">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>

    </div>
  </div>
</div>

  
</main>


<?php get_footer(); ?>