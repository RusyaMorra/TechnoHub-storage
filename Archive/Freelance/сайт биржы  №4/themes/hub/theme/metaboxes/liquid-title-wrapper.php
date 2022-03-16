<?php
/*
 * Title Wrapper Section
 *
 * Available options on $section array:
 * separate_box (boolean) - separate metabox is created if true
 * box_title - title for separate metabox
 * title - section title
 * desc - section description
 * icon - section icon
 * fields - fields, @see https://docs.reduxframework.com/ for details
*/

if ( class_exists( 'Liquid_Elementor_Addons' ) && defined( 'ELEMENTOR_VERSION' )){
	$title_wrapper_post_type = array( 'product' );
} else {
	$title_wrapper_post_type = array( 'post', 'page', 'liquid-portfolio', 'product' );
}

$sections[] = array(
	'post_types' => $title_wrapper_post_type,
	'title'      => esc_html__( 'Title Wrapper', 'hub' ),
	'icon'       => 'el-icon-cog',
	'fields'     => array(
		array(
			'id'       => 'title-bar-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Title Wrapper', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'0'   => esc_html__( 'Default', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default'  => '0'
		),
		array(
			'id'       => 'title-bar-heading',
			'type'     => 'text',
			'title'    => esc_html__( 'Custom Heading', 'hub' ),
			'subtitle' => esc_html__( 'Custom heading will override the default page/post title', 'hub' ),
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		array(
			'id'       => 'title-bar-typography-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Title bar Typography', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'0'   => esc_html__( 'Default', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off',
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		'title-bar-typography' => array(
			'id'             => 'title-bar-typography',
			'title'          => esc_html__( 'Title Bar Heading Typography', 'hub' ),
			'subtitle'       => esc_html__( 'These settings control the typography for the titlebar heading', 'hub' ),
			'type'           => 'typography',
			'text-transform' => true,
			'letter-spacing' => true,
			'text-align'     => false,
			'compiler'       => true,
			'units'          => '%',
			'required' => array(
				'title-bar-typography-enable',
				'!=',
				'off'
			),
		),
		array(
			'id'    => 'title-bar-subheading',
			'type'  => 'text',
			'title' => esc_html__( 'Sub-Heading', 'hub' ),
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		array(
			'id'       => 'title-bar-subheading-typography-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Title bar Typography', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'0'   => esc_html__( 'Default', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off',
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		'title-bar-subheading-typography' => array(
			'id'             => 'title-bar-subheading-typography',
			'title'          => esc_html__( 'Title Bar Subheading Typography', 'hub' ),
			'subtitle'       => esc_html__( 'These settings control the typography for the titlebar subheading', 'hub' ),
			'type'           => 'typography',
			'text-transform' => true,
			'letter-spacing' => true,
			'text-align'     => false,
			'compiler'       => true,
			'units'          => '%',
			'required' => array(
				'title-bar-subheading-typography-enable',
				'!=',
				'off'
			),
		),
		array(
			'type'     => 'slider',
			'id'       => 'title-bar-padding-top',
			'title'    => esc_html__( 'Padding Top', 'hub' ),
			'subtitle' => esc_html__( 'Controls the top padding of the titlebar', 'hub' ),
			'default'  => 80,
			'max'      => 300,
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		array(
			'type'     => 'slider',
			'id'       => 'title-bar-padding-bottom',
			'title'    => esc_html__( 'Padding Bottom', 'hub' ),
			'subtitle' => esc_html__( 'Controls the bottom padding of the titlebar', 'hub' ),
			'default'  => 80,
			'max'      => 300,
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		array(
			'id'       => 'title-bar-scheme',
			'type'     => 'select',
			'title'    => esc_html__( 'Color scheme', 'hub' ),
			'options'  => array(
				''              => esc_html__( 'Light', 'hub' ),
				'scheme-light'  => esc_html__( 'Dark', 'hub' ),
			),
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		array(
			'id'       => 'title-bar-align',
			'type'     => 'select',
			'title'    => esc_html__( 'Alignment', 'hub' ),
			'options' => array(
				'text-left'   => esc_html__( 'Left', 'hub' ),
				'text-center' => esc_html__( 'Center', 'hub' ),
				'text-right'  => esc_html__( 'Right', 'hub' ),
				'titlebar-split'  => esc_html__( 'Split', 'hub' ),
			),
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		array(
			'id'       => 'title-bar-bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Background Image', 'hub' ),
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		
		array(
			'id'            => 'title-bar-bg-gradient',
			'type'          => 'liquid_colorpicker',
			'only_gradient' => true,
			'title'    => esc_html__( 'Background Gradient', 'hub' ),
			'subtitle' => esc_html__( 'Overwrites the background image, unless has transparency.', 'hub' ),
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		array(
			'id'       => 'title-bar-parallax',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Parallax?', 'hub' ),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'0'   => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'subtitle' => esc_html__( 'The background should have an image', 'hub' ),
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		array(
			'id'      => 'title-bar-overlay',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Overlay', 'hub' ),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'0'   => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => 'off',
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		array(
			'id'       => 'title-bar-overlay-background',
			'type'     => 'liquid_colorpicker',
			'title'    => esc_html__( 'Overlay Background', 'hub' ),
			'required' => array(
				'title-bar-overlay',
				'!=',
				'off'
			),
		),
		array(
			'id'      => 'title-bar-breadcrumb',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Enable Breadcrumbs', 'hub' ),
			'options' => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'0'   => esc_html__( 'Default', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),
		array(
			'id'      => 'title-bar-scroll',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Scroll Button', 'hub' ),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'0'    => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => '',
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
		),		
		array(
			'id'         => 'title-bar-scroll-color',
			'type'       => 'liquid_colorpicker',
			'only_solid' => true,
			'title'      => esc_html__( 'Scroll Button Color', 'hub' ),
			'subtitle'   => esc_html__( 'Pick a color for scroll button', 'hub' ),
			'required'   => array(
				'title-bar-scroll',
				'!=',
				'off'
			),
		),
		array(
			'id'       => 'title-bar-scroll-id',
			'type'     => 'text',
			'title'    => esc_html__( 'Anchor ID', 'hub' ),
			'subtitle' => esc_html__( 'Input anchor ID of the section for scroll button', 'hub' ),
			'required' => array(
				'title-bar-scroll',
				'!=',
				'off'
			),
		),
		array(
			'id'=>'title-bar-classes',
			'type' => 'text',
			'title' => esc_html__('Extra classes', 'hub'),
			'required' => array(
				'title-bar-enable',
				'!=',
				'off'
			),
			
		),

	), // #fields
);