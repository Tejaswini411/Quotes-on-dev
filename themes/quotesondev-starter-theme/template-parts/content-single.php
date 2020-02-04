<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

$source = get_post_meta(get_the_ID(), '_qod_quote_source', true);
$source_url = get_post_meta(get_the_ID(), '_qod_quote_source_url', true);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
	</header><!-- .entry-header -->

	<div class="entry-content">


		<?php
		$args = array( 'numberposts' => 1, 'orderby' => 'rand' );
		$rand_posts = get_posts( $args );
		foreach( $rand_posts as $post ) : setup_postdata($post); ?>
		<div class="quote" id="new-quote"> 
			<?php the_content(); ?> 
		</div>
		<span class="author" id="quote-author"> <?php the_title(); ?></span>

		<?php if ($source && $source_url) : ?>
			<span class="quote-source">, <a href="<?php echo $source_url ?>"><?php echo $source ?></a></span>
		<?php elseif ($source) : ?>
			<span class="quote-source"><?php echo $source ?></span>
		<?php else : ?>
			<span class="quote-source"><span>
				<?php endif; ?>

		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>


	</div><!-- .entry-content -->
</article><!-- #post-## -->
