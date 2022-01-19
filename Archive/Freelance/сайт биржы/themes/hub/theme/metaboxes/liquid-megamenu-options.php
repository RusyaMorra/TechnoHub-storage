<?php
/*
 * Megamenu Fields
 *
*/

if ( class_exists( 'Liquid_Elementor_Addons' ) && defined( 'ELEMENTOR_VERSION' )){
	return;
}

$sections[] = array(
	'post_types' => array( 'liquid-mega-menu' ),
	'title'      => esc_html__( 'MegaMenu Design Options', 'hub' ),
	'icon'       => 'el-icon-cog',
	'fields'     => array(
		array(
			'id'      => 'megamenu-fullwidth',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'MegaMenu Fullwidth?', 'hub' ),
			'description' => esc_html__( 'Stretch the background of megamenu. To make the content fullwidth please update row options from the contents.', 'hub' ),
			'options' => array(
				'no'  => esc_html__( 'No', 'hub' ),
				'yes' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => 'no',
		),
		array(
			'id'    => 'megamenu-bg',
			'type'  => 'liquid_colorpicker',
			'title' => esc_html__( 'Megamenu Background', 'hub' )
		),
	)
);