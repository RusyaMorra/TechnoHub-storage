<?php 	
	$description = $atts['description'];
	$scheme = $atts['scheme'];
	$icon_text =  $atts['icon_text'];
	$icon_text_align =  $atts['icon_text_align'];
	$show_icon =  $atts['show_icon'];
	$icon_style =  $atts['icon_style'];

	$trigger_class = array(
		'ld-module-trigger',
		'collapsed',
		$icon_text_align,
		$show_icon,
		$icon_style,
	);
	
	if ( defined( 'ELEMENTOR_VERSION' ) && is_callable( 'Elementor\Plugin::instance' ) ) {
		$icon = !empty($icon_render) ? $icon_render : 'lqd-icn-ess icon-ld-search';
	} else {
		$icon_opts = liquid_get_icon( $atts );
		$icon      = !empty( $icon_opts['type'] ) && ! empty( $icon_opts['icon'] ) ? $icon_opts['icon'] : 'lqd-icn-ess icon-ld-search';
	}

	if ( !isset($search_type) ){
		if( class_exists( 'WooCommerce' ) ) $search_type = "product"; else $search_type = "post"; 
	} 

?>
<div class="ld-module-search lqd-module-search-slide-top <?php echo esc_attr( $scheme ); ?>" data-module-style='lqd-search-style-slide-top'>

<?php 
	$search_id = uniqid( 'search-' ); 
?>
	
	<span class="<?php echo liquid_helper()->sanitize_html_classes( $trigger_class ) ?>" role="button" data-ld-toggle="true" data-toggle="collapse" data-target="<?php echo '#' . esc_attr( $search_id ); ?>" aria-controls="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false">
		<span class="ld-module-trigger-txt"><?php echo do_shortcode($icon_text) ?></span>
		<?php if ( 'lqd-module-show-icon' === $show_icon )  { ?>
			<span class="ld-module-trigger-icon">
				<i class="<?php echo esc_attr( $icon ) ?>"></i>
			</span>
		<?php } ?>
	</span>
	
	<div class="ld-module-dropdown collapse" id="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false">
		
		<div class="ld-search-form-container">
			<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" class="ld-search-form">
				<input type="search" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'hub' ) ?>" value="<?php echo get_search_query() ?>" name="s">
				<span class="input-icon" data-ld-toggle="true" data-toggle="collapse" data-target="<?php echo '#' . esc_attr( $search_id ); ?>" aria-controls="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false"><i class="lqd-icn-ess icon-ld-search"></i></span>
				<input type="hidden" name="post_type" value="<?php echo esc_attr( $search_type ); ?>" />
			</form>
			<?php if( !empty( $description ) ) { ?>
			<p class="lqd-module-search-info"><?php echo esc_html( $description ); ?></p>
			<?php } ?>
		</div>
		
	</div>
	
</div>