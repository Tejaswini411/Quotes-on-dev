<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<?php the_excerpt(); ?>

		<header class="entry-header">
		
		<span>- </span><?php the_title( ); ?>
	</header><!-- .entry-header -->

	
	</div><!-- .entry-content -->
</article><!-- #post-## -->
