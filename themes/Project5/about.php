<?php
/**
* Template Name: About
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<section class="about-section">
			<?php while ( have_posts() ) : the_post(); ?>
		<h1>About</h1>
		<p>Quotes on Dev is a project site for the RED Academy Web Developer Professional program. It's used to experiment with AJAX, WP API, jQuery, and other cool things. </p>
		<p>This site is heavily inspired by Chris Coyler's <a href="www.Quotesondesign.com">Quotes  on Design.</a>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
