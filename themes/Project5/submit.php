<?php
/**
* Template Name: Submit
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
			<section class="submit-page">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<h2>Submit a Quote</h2>
			<?php if ( is_user_logged_in()) : ?>
			<form class="main-form">
  Author of Quote<br>
  <input type="text" class='author' >
  <br>
  Quote:<br>
  <input type="text" class="quote" >
  <br>
  Where did you find this? (e.g. book name)<br>
  <input type="text" class="source">
  <br>
  Provide the URL of the quote source, if available. <br>
  <input type="text" class="url">
  <br>
  <button class="submit1" type="button"> Submit Quote</button>
  </form> 


		

			<?php the_posts_navigation(); ?>

		<?php else : ?>
	<p>Sorry, you must be logged in to submit a quote!</p>
	<a href="<?php echo esc_url( home_url( '/wp-login.php' ) ); ?>"> Click here to login.</a>

			<?php endif ?>
			<?php endwhile; ?>
		<?php endif; ?>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
