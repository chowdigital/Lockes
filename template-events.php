<?php /* Template Name: Party Packages */ get_header(); ?>

  <div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

  <div class="mask gradient-custom" style="width: 100%; height: 100%;">

    </div>
  </div>



  <main id="primary" class="site-main container  pt-6 pb-6">
    <div class="party-content z-depth-3">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
    </div>
  <div class="party-packs">
    <div class="party-pack-box z-depth-2">
      <div id="milano-icon"></div>
      <h2>APERITIVO MILANO</h2>
      <p><small><?php the_field('milano_guests'); ?> Guests </small></p>
      <p><?php the_field('milano_offer'); ?></p>
      <h2>£<?php the_field('milano_price'); ?></h2>
      <p><small>including service charge</small></p>
   

    </div>
    <div class="party-pack-box z-depth-2">
    <div id="firenze-icon"></div>
      <h2>APERITIVO FIRENZE</h2>
      <p><small><?php the_field('firenze_guests'); ?> Guests </small></p>
      <p><?php the_field('firenze_offer'); ?></p>
      <h2>£<?php the_field('firenze_price'); ?></h2>
      <p><small>including service charge</small></p>
    </div>
    <div class="party-pack-box z-depth-2">
    <div id="roma-icon"></div>
    <h2>APERITIVO ROMA</h2>
    <p><small><?php the_field('roma_guests'); ?> Guests </small></p>
      <p><?php the_field('roma_offer'); ?></p>
      <h2>£<?php the_field('roma_price'); ?></h2>
      <p><small>including service charge</small></p>
    </div>
    <div class="party-pack-box z-depth-2">
    <div id="napoli-icon"></div>
    <h2>APERITIVO NAPOLI</h2>
    <p><small><?php the_field('napoli_guests'); ?> Guests </small></p>
      <p><?php the_field('napoli_offer'); ?></p>
      <h2>£<?php the_field('napoli_price'); ?></h2>
      <p><small>including service charge</small></p>
    </div>

  </div>
  <p>Our packages are flexible and can be adapted to your needs.</p>

<p>All food and drink contribute towards any minimum spend.</p>
</main>



<?php get_footer(); ?>