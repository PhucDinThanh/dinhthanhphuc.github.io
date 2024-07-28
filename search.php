<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Minimal_Blocks
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<?php
            echo '<div class="masonry-blocks masonry-col">';
				while ( have_posts() ) : the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;
            echo '</div>';
            /**
             * Hook - minimal_blocks_posts_navigation.
             *
             * @hooked: minimal_blocks_display_posts_navigation - 10
             */
            do_action( 'minimal_blocks_posts_navigation' );
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
$page_layout = minimal_blocks_get_page_layout();
if( 'no-sidebar' != $page_layout ){
    get_sidebar();
}
get_footer();
