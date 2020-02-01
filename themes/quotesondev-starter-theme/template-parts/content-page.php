<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_excerpt(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">


		<?php
		$args = array( 'numberposts' => 1, 'orderby' => 'rand' );
		$rand_posts = get_posts( $args );
		foreach( $rand_posts as $post ) : setup_postdata($post); ?>
		<div class="quote" id="new-quote"> 
			<?php the_content(); ?> 
		</div>
		<span class="author" id="quote-author"><?php the_title(); ?></span>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>

		
	</div><!-- .entry-content -->
</article><!-- #post-## -->

