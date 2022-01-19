<?php
// General Setting

if ( class_exists( 'Liquid_Elementor_Addons' ) && defined( 'ELEMENTOR_VERSION' )){
	return;
}

$this->sections[] = array(
	'title'      => esc_html__( 'Colors', 'hub' ),
	'icon'       => 'el el-brush',
	'fields'     => array(
		array(
			'id'      => 'primary_ac_color',
			'type'    => 'color',
			'title'   => esc_html__( 'Primary color' , 'hub' ),
			'subtile' => '',
			'desc'    => esc_html__( 'Choose a primary color for your website by using the colorpicker', 'hub' ),
			'default' => '#184341',

		),
		array(
			'id'      => 'secondary_ac_color',
			'type'    => 'color',
			'title'   => esc_html__( 'Secondary color' , 'hub' ),
			'subtile' => '',
			'desc'    => esc_html__( 'Choose a primary color for your website by using the colorpicker', 'hub' ),
		),
		array(
			'id'      => 'primary_gradient_color',
			'type'    => 'color_gradient',
			'title'   => esc_html__( 'Primary Gradient color' , 'hub' ),
			'subtile' => '',
			'desc'    => esc_html__( 'Choose colors to generate a primary gradient color for your website by using the colorpicker', 'hub' ),
			'validate' => 'color',
			'default' => array(
				'from' => '#007fff',
				'to'   => '#ff4d54',
				
			)
		),
		array(
			'id'    => 'links_color',
			'type'  => 'link_color',
			'title' => esc_html__( 'Links Color', 'hub' ),
			'default'  => array(
				'regular'  => '#5b7bfb',
				'hover'  => '#181b31'
		)
		),
		
	)
);
