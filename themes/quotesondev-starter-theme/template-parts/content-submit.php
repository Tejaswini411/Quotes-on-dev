<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php if ( is_user_logged_in() ) : ?>
			<form>
				<p class="author-form-field">
					<label>Author of Quote</label>
					<input id="author" type="text" required="required"/>
				</p>
				<p class="quote-form-field">
					<label>Quote</label>
					<textarea id="quote" required="required"></textarea>
				</p>
				<p class="source-form-field">
					<label>Where did you find this quote? (e.g. book name)</label>
					<input id="source" type="text" />
				</p>
				<p class="url-form-field">
					<label>Provide the URL of the quote, if available.</label>
					<input id="url" type="url"/>
				</p>
			
				<input type="submit" value="Submit quote" id="submit-quote">
			</form>
		<?php else : ?>
			<p>Sorry, you must be logged in to submit a quote!</p>
			<a href= "<?php echo esc_url( home_url( '/wp-login.php' ) ); ?>">Click here to login.</a>
		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->