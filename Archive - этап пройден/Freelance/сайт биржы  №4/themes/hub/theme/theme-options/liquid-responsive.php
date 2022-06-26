<?php
/*
 * Responsive rules
*/

// Responsivness

if ( class_exists( 'Liquid_Elementor_Addons' ) && defined( 'ELEMENTOR_VERSION' )){
	return;
}

$this->sections[] = array(
	'title'      => esc_html__( 'Responsive', 'hub' ),
	'icon'       => 'el el-resize-horizontal',
	'fields'     => array(
		array(
			'type'     => 'slider',
			'id'       => 'media-mobile-nav',
			'title'    => esc_html__( 'Mobile Navigation Breakpoint', 'hub' ),
			'subtitle' => esc_html__( 'Set the breakpoint for the mobile navigation', 'hub' ),
			'default'  => 1199,
			'max'      => 1199,
			'min'      => 767,
		),
	)
);
