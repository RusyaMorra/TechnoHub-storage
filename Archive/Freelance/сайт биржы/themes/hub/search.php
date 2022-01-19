<?php 
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Hub
 * @since 1.0
 */

get_header();

	if( have_posts() ) :
	
	?>
	
	<div class="lqd-lp-row lqd-search-results-row row d-flex flex-wrap">		
		<?php // Start the Loop.	
	
			while ( have_posts() ) : the_post();
			
			$column_classname = liquid()->layout->has_sidebar() ? 'col-xs-12' : 'col-md-4 col-sm-6';
			
		?>
		<div class="lqd-lp-column <?php echo liquid_helper()->sanitize_html_classes( $column_classname ); ?>">
		<?php get_template_part( 'templates/blog/content', 'excerpt' ); ?>
		</div>
		<?php endwhile; // End of the loop. ?>
		<?php
		// Set up paginated links.
	    $links = paginate_links( array(
			'type' => 'array',
			'prev_next' => true,
			'prev_text' => '<span aria-hidden="true">' . wp_kses_post( __( '<i class="lqd-icn-ess icon-ion-ios-arrow-back"></i>', 'hub' ) ) . '</span>',
			'next_text' => '<span aria-hidden="true">' . wp_kses_post( __( '<i class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>', 'hub' ) ) . '</span>'
		));
	
		if( !empty( $links ) ) {
	
			printf( '<div class="blog-nav"><nav aria-label="' . esc_attr__( 'Page navigation', 'hub' ) . '"><ul class="pagination"><li>%s</li></ul></nav></div>', join( "</li>\n\t<li>", $links ) );
		}; ?>
		
	</div>

	<?php else : // If no posts were found.

		get_template_part( 'templates/content/error' );

	endif;

get_footer();