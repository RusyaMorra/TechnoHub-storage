<?php
/**
 * The template for displaying all single posts.
 *
 * @package Hub
 */
get_header();

	while ( have_posts() ) : the_post();

		if ( class_exists( 'Liquid_Elementor_Addons' ) ){
			$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
			$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
			$style = $page_settings_model->get_settings( 'portfolio_style' );
		} else {
			$style = get_post_meta( get_the_ID(), 'portfolio-style', true );
		}

		$style = $style ? $style : 'custom';
		?>
		<article <?php liquid_helper()->attr( 'post' ) ?>>
			<?php get_template_part( 'templates/portfolio/single/' . $style ); ?>
		</article><!-- #post-## -->
		<?php

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;

get_footer();
