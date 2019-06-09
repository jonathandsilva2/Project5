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
	
		<p class="title-category">&#8213 <?php the_title() ?></p>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
