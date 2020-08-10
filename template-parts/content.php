<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<header class="entry-header">
<div class="row post-header">
	<div class="col-12 col-md-8">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="">', '</h1>' );
			else :
				the_title( '<h2 class=""><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				
			<?php endif; ?>
		</div>
	<div class="col-12 col-md-4">
		<?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid z-depth-1')); ?>
	</div>
	</div>
</header><!-- .entry-header -->

<div class="container my-5 py-5 z-depth-1">
	
	<div class="entry-content px-md-5 mx-md-5">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wordpress-bootstrap-starter-theme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wordpress-bootstrap-starter-theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	</div> 
	<footer class="entry-footer">
		<?php wordpress_bootstrap_starter_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
