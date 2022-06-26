<?php
/**
 * The template for displaying all single posts.
 *
 * @package base-theme
 */
get_header();

	while ( have_posts() ) : the_post();
	
		$header = liquid_get_header_layout(); 
		
		?>
		
		<header <?php liquid_helper()->attr( 'header', $header['attributes'] ); ?>>
			<div class="container">
				<?php the_content(); ?>
			</div>
		</header>

	<?php endwhile;

get_footer();