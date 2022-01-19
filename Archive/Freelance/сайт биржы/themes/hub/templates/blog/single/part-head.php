<?php

if ( get_post_type() === 'ld-product-layout' ) {
	return;
}

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$page_settings_model = $page_settings_manager->get_model( get_the_ID() );

	$style = $page_settings_model->get_settings( 'post_style' );
	$style = $style ? $style : liquid_helper()->get_option( 'post-style' );
	$alt_image_src = isset($page_settings_model->get_settings( 'liquid_post_cover_style_image' )['id']) ? $page_settings_model->get_settings( 'liquid_post_cover_style_image' )['id'] : '';
	$enable_parallax = $page_settings_model->get_settings( 'post_parallax_enable' );

} else {
	$style = liquid_helper()->get_option( 'post-style' );
	$alt_image_src = isset(liquid_helper()->get_option( 'liquid-post-cover-style-image' )['media']['id']) ? liquid_helper()->get_option( 'liquid-post-cover-style-image' )['media']['id'] : '';
	$enable_parallax = liquid_helper()->get_option( 'post-parallax-enable' );
}

global $post;

$style = !empty( $style ) ? $style : 'classic';
$cat_before_title = $header_post_excerpt = false;
$meta_in_header = true;

if( 'minimal' == $style ) {
	$cat_before_title = true;
	$header_post_excerpt = true;
	$meta_in_header = false;
}
elseif( 'classic' == $style || 'wide' == $style ) {
	$cat_before_title = true;
}

$figure_atts = $header_atts = array();

if( in_array( $style, array( 'modern', 'modern-full-screen', 'dark' ) ) && 'on' == $enable_parallax ) {
	$figure_atts[] = $header_atts[] = 'data-parallax="true"';
	$figure_atts[] = 'data-parallax-from=\'{ "yPercent": "0" }\'';
	$figure_atts[] = 'data-parallax-to=\'{ "yPercent": "25" }\'';
	$figure_atts[] = $header_atts[] = 'data-parallax-options=\'{ "start":"top top", "scrub":"true" }\'';
	
	$header_atts[] = 'data-parallax-from=\'{ "yPercent": "0", "opacity":"1" }\'';
	$header_atts[] = 'data-parallax-to=\'{ "yPercent": "25", "opacity":"0" }\'';
}


?>
<div class="lqd-post-cover overflow-hidden">

	<?php if ( get_post_format() === "video" ): ?>
		<?php liquid_portfolio_media(); ?>
	<?php else: ?>

	<?php 
		if ( class_exists( 'Liquid_Elementor_Addons' ) ) {
			$alt_image_src = $alt_image_src;
		} else {
			$alt_image_src = isset( $alt_image_src['media']['id'] ) ? $alt_image_src['media']['id'] : null;
		}
	?>

	<?php if( has_post_thumbnail( $post->ID ) || isset( $alt_image_src ) && !empty( $alt_image_src ) ) { ?>
		<figure class="lqd-post-media" <?php echo implode( ' ', $figure_atts ); ?>>
		<?php
			if( isset( $alt_image_src ) && !empty( $alt_image_src ) ){
				echo wp_get_attachment_image( $alt_image_src, 'full' );
			}
			else {				
				if( 'minimal' == $style ) {
					the_post_thumbnail( 'liquid-style3-sp', array( 'itemprop' => 'url' ) );
				}
				else {
					the_post_thumbnail( 'full', array( 'itemprop' => 'url' ) );
				}
			
			} 
		?>
		</figure>
	<?php } ?>

	<?php endif; ?>
	
	
	<span class="lqd-overlay lqd-post-cover-overlay z-index-2"></span>

	<header class="lqd-post-header entry-header" <?php echo implode( ' ', $header_atts ); ?>>

		<?php if ( $cat_before_title ) : ?>
		<div class="entry-meta">
			<div class="cat-links">
				<span><?php esc_html_e( 'Published in:', 'hub' ); ?></span>
				<?php liquid_get_category(); ?>
			</div>
		</div>
		<?php endif ?>
		
		<?php the_title( '<h1 class="entry-title">', '</h1>' ) ?>

		<?php if ( $header_post_excerpt && has_excerpt() ) : ?>
			<p class="entry-excerpt"><?php echo get_the_excerpt(); ?></p>
		<?php endif; ?>

		<?php if ( $meta_in_header ) 
			get_template_part( 'templates/blog/single/part', 'meta' );
		?>
	</header>

	<?php if ( !$meta_in_header ) 
		get_template_part( 'templates/blog/single/part', 'meta' );
	?>
</div>