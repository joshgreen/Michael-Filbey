<?php
/**
 * The template for displaying all single posts.
 *
 * @package Michaelfilbey
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main max" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'testimonial' ); ?>

			<?php michaelfilbey_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
