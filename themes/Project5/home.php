<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
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
			<?php $args = array(
				'post_type' => 'post',
				'orderby'   => 'rand',
				'posts_per_page' => '1', 
				); 
		
				// The Query
			$the_query = new WP_Query( $args );
			
			// The Loop
			if ( $the_query->have_posts() ) {
				echo '<section class = "quote-main">';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo '<p>' . the_content() . '</p>';
					echo '<p>' . '&#8213 ' .  get_the_title() . '</p>';
				}
                echo '</section>';
                
			} else {
                // no posts found
                '<h3>Your database is empty LOL. GET SOME QUOTES IN THERE DUMMY.</h3>';
            }
            ?><button type="button" class="quote-button">Show Me Another!</button><?php
			/* Restore original Post Data */
			wp_reset_postdata();
				
				?>
			
			

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
