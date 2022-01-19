<?php 	
	$description = $atts['description'];

	$suggestions_title = $atts['suggestions_title'];
	$suggestions_title2 = $atts['suggestions_title2'];
	
	$suggestions = $atts['suggestions'];
	$suggestions2 = $atts['suggestions2'];

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
<div class="ld-module-search lqd-module-search-zoom-out" data-module-style='lqd-search-style-zoom-out'>

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

			<span class="lqd-module-search-close input-icon" aria-label="Close search form" data-ld-toggle="true" data-toggle="collapse" data-target="<?php echo '#' . esc_attr( $search_id ); ?>" aria-controls="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false"><i class="lqd-icn-ess icon-ion-ios-close"></i></span>
			<form class="ld-search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>">
				<input value="<?php echo get_search_query() ?>" name="s" type="search" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
				<input type="hidden" name="post_type" value="<?php echo esc_attr( $search_type ); ?>" />
				<?php if( !empty( $description ) ) { ?>
				<span class="lqd-module-search-info"><?php echo esc_html( $description ); ?></span>
				<?php } ?>
			</form>
			<div class="lqd-module-search-related">
				<?php if( !empty( $suggestions_title ) && !empty( $suggestions ) ) { ?>
				<div class="lqd-module-search-suggestion">
					<h3><?php echo esc_html( $suggestions_title ); ?></h3>
					<p><?php echo wp_kses_post( $suggestions ); ?></p>
				</div>
				<?php } ?>
				
				<?php if( !empty( $suggestions_title2 ) && !empty( $suggestions2 ) ) { ?>
				<div class="lqd-module-search-suggestion">
					<h3><?php echo esc_html( $suggestions_title2 ); ?></h3>
					<p><?php echo wp_kses_post( $suggestions2 ); ?></p>
				</div>
				<?php } ?>
			</div>
			
		</div>
		
	</div>
	
</div>