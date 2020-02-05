<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>
<div>
			</div><!-- #content -->
			</div><!-- #page -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				
						<?php wp_nav_menu(
							array(
								'theme_location' => 'primary', 
								'menu_id' => 'primary-menu',
								'menu-class' => 'footer-navigation'
								)
							
						  ); 
						?>
						<p>Brought to you by <a href="http://www.redacademy.com/">RED Academy</a></p>
				
				</div><!-- .site-info -->
			</footer><!-- #colophon -->

		<?php wp_footer(); ?>

	</body>
</html>
