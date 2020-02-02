<?php

/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */
get_header(); ?>

<div class="content-about">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


       
  
     
    </main><!-- #main -->
    <p class="main">Quotes on Dev is a project site for the RED Academy Web Developer Professional program.
      It’s used to experiment with Ajax, WP API, jQuery, and other cool things. 🙂</p>
    <p>This site is heavily inspired by Chris Coyier’s Quotes on Design.</p>

  </div><!-- #primary -->
</div>

<?php get_footer(); ?>