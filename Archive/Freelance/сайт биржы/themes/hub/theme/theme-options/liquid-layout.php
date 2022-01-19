<?php
/*
 * Layout Section
*/

if ( class_exists( 'Liquid_Elementor_Addons' ) && defined( 'ELEMENTOR_VERSION' )){
	return;
}

$this->sections[] = array(

	'title'  => esc_html__( 'Layout', 'hub' ),
	'icon'   => 'el-icon-website',
	'fields' => array(

		array(
			'id'        => 'page-layout',
			'type'      => 'button_set',
			'title'     => esc_html__( 'Layout', 'hub' ),
			'subtitle'  => esc_html__( 'Controls the site layout', 'hub' ),
			'options'   => array(
				'boxed'    => esc_html__( 'Boxed', 'hub' ),
				'wide'     => esc_html__( 'Wide', 'hub' ),
			),
			'default'   => 'wide'
		),
		array(
			'type'     => 'slider',
			'id'       => 'site-width',
			'title'    => esc_html__( 'Site Width', 'hub' ),
			'subtitle' => esc_html__( 'Set the site width', 'hub' ),
			'default'  => 1170,
			'max'      => 1400,
			'min'      => 960,
		),
		array(
			'id'        => 'body-shadow',
			'type'      => 'select',
			'title'     => esc_html__( 'Body Shadow', 'hub' ),
			'subtitle'  => esc_html__( 'Select a style for shadow', 'hub' ),
			'options'   => array(
				''                           => esc_html__( 'None', 'hub' ),
				'site-boxed-layout-shadow-1' => esc_html__( '1', 'hub' ),
				'site-boxed-layout-shadow-2' => esc_html__( '2', 'hub' ),
				'site-boxed-layout-shadow-3' => esc_html__( '3', 'hub' ),
			),
			'required' => array(
				'page-layout',
				'equals',
				'boxed'
			),
		),
		//Body Background
		array(
			'id'       => 'body-background',
			'type'     => 'liquid_colorpicker',
			'title'    => esc_html__( 'Body Background Color', 'hub' ),
			'required' => array(
				'page-layout',
				'equals',
				'boxed'
			),
		),
		array(
			'id'       => 'body-background-image',
			'type'     => 'background',
			'background-color' => false,
			'preview'  => false,
			'title'   => esc_html__( 'Body Background Image', 'hub' ),
			'required' => array(
				'page-layout',
				'equals',
				'boxed'
			),
		),
		array(
			'id'        => 'body-color-scheme',
			'type'      => 'select',
			'title'     => esc_html__( 'Page Color Scheme', 'hub' ),
			'subtitle'  => esc_html__( 'Manages the color scheme across your website.', 'hub' ),
			'options'   => array(
				''      => esc_html__( 'Default', 'hub' ),
				'light'    => esc_html__( 'Light', 'hub' ),
				'dark'     => esc_html__( 'Dark', 'hub' ),
			),
		),

		//Content Background
		array(
			'id'       => 'page-content-bg',
			'type'     => 'background',
			'preview'  => false,
			'title'   => esc_html__( 'Content Background', 'hub' ),
		),
		array(
			'id'            => 'page-content-gradient',
			'type'          => 'liquid_colorpicker',
			'only_gradient' => true,
			'title' => esc_html__( 'Content Background Gradient', 'hub' ),
			'subtitle' => esc_html__( 'Overwrites the background image, unless has transparency.', 'hub' ),
		),
		
		array(
			'id'    => 'vc-row-default-margins',
			'type'  => 'spacing',
			'title'     => esc_html__( 'Row Margins', 'hub' ),
			'subtitle'  => esc_html__( 'Manages row margins', 'hub' ),
			'mode'  => 'margin',
			'left' => false,
			'right' => false,
			'units' => 'px',
		),
		array(
			'id'    => 'vc-row-default-padding',
			'type'  => 'spacing',
			'title'     => esc_html__( 'Row Padding', 'hub' ),
			'subtitle'  => esc_html__( 'Manages the rows padding', 'hub' ),
			'mode'  => 'padding',
			'units' => 'px',
		),

	)
);