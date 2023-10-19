<?php /* Template Name: Menu - list*/ get_header(); ?>

<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>


<main class="container-fluid">
  <div class="container pt-6 pb-6">
    <div class="menu-content-box row">
      <h1 class="pt-5 pb-5 text-center">view menus</h1>
      <div class="col-10 offset-1 col-md-12 offset-md-0 col-lg-10 offset-lg-1  col-xl-8 offset-xl-2 row">
     <a href="cocktails" class="col-12 col-md-6"> <div class="outline-yellow z-depth-3"> <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/small_icons_2021-10-21.png" alt=""></div> </a>
     <a href="wine" class="ccol-12 col-md-6"> <div class="outline-yellow z-depth-3"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/small_icons_2021-10-212.png" alt=""></div> </a>
     <a href="spirits" class="col-12 col-md-6"> <div class="outline-yellow z-depth-3"> <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/small_icons_2021-10-213.png" alt=""></div> </a>
     <a href="beer" class="ccol-12 col-md-6"> <div class="outline-yellow z-depth-3"> <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/small_icons_2021-10-214.png" alt=""></div> </a>
     <a href="food" class="col-12 col-md-6"> <div class="outline-yellow z-depth-3">  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/small_icons_2021-10-215.png" alt=""></div> </a>
     <a href="rewards" class="col-12 col-md-6"> <div class="outline-yellow z-depth-3">  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/small_icons_2021-10-216.png" alt=""></div> </a>
     </div>
</div>
</div>
</main><!-- #main -->
<?php get_footer(); ?>