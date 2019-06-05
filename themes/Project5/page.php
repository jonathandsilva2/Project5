<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			
		
	 <h2>Quote Authors</h2>
        <ul>
		<?php
			$posts = get_posts( 'posts_per_page=-1' );
					foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach;
					wp_reset_postdata(); ?>
                </ul>
				<?php wp_list_categories (); ?>

				<h2>Tags</h2>
<ul>
	<?php
	
    $tags = get_tags();
    if ( $tags ) :
        foreach ( $tags as $tag ) : ?>
            <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
			

;

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
