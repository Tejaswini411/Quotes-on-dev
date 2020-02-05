<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-quote" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content-page'); ?>

		<?php endwhile; // End of the loop. ?>

		  <div class="button-wrapper">
			<button class="show-me">Show me another!</button>
		</div> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>