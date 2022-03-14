<?php

	$search_id = uniqid( 'search-' );
	$icon      = 'lqd-icn-ess icon-ld-search';

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION')){
		$icon = isset($icon_render) ? $icon_render : $icon;
	}

	if ( !isset($search_type) ){
		if( class_exists( 'WooCommerce' ) ) $search_type = "product"; else $search_type = "post"; 
	} 

?>
<div class="ld-module-search lqd-module-search-default pos-rel">
	
	<span class="ld-module-trigger collapsed" role="button" data-ld-toggle="true" data-toggle="collapse" data-target="<?php echo '#' . esc_attr( $search_id ); ?>" aria-controls="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false">
		<span class="ld-module-trigger-txt"></span>
			<span class="ld-module-trigger-icon">
				<i class="<?php echo esc_attr( $icon ) ?>"></i>
			</span>
	</span>
	
	<div role="search" class="ld-module-dropdown collapse" id="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false">
		<div class="ld-search-form-container">
			<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" class="ld-search-form">
				<input type="search" placeholder="<?php echo esc_attr_x( 'Start searching', 'placeholder', 'hub' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
				<span role="search" class="input-icon" data-ld-toggle="true" data-toggle="collapse" data-target="<?php echo '#' . esc_attr( $search_id ); ?>" aria-controls="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false"><i class="lqd-icn-ess icon-ld-search"></i></span>
				<input type="hidden" name="post_type" value="<?php echo esc_attr( $search_type  ); ?>" />
			</form>
		</div>
	</div>
	
</div>