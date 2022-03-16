<?php

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
	$atts = explode("\n", str_replace("\r", "", $page_settings_model->get_settings( 'portfolio_attributes' )));
} else {
	$atts = get_post_meta( get_the_ID(), 'portfolio-attributes', true );
}


if( !is_array( $atts ) ) {
	return;
}

foreach ( $atts as $attr ) {

	if( !empty( $attr ) ) {
		$attr = explode( "|", $attr );
		$label = isset( $attr[0] ) ? $attr[0] : '';
		$value = isset( $attr[1] ) ? $attr[1] : $label;	
		
		echo '<div class="lqd-pf-single-meta-part">';
		if( $label ) { 
			echo '<p class="my-0">' . esc_html( $label ) . '</p>';	
		}
		echo '<p class="my-0">'. do_shortcode( $value ) . '</p>';
		echo '</div>';
	}
	
}
