<?php
/*
 * Title Wrapper Section
*/

// Title Bar
$this->sections[] = array(
	'title'      => esc_html__( 'Page Title Bar', 'hub' ),
	'icon'       => 'el el-indent-right',
	//'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'title-bar-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Title Bar', 'hub' ),
			'subtitle' => esc_html__( 'Switch off to hide the title bar on your website.', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'       => 'title-bar-heading',
			'type'     => 'text',
			'title'    => esc_html__( 'Custom Page Title', 'hub' ),
			'subtitle' => esc_html__( 'Custom page title will override the default page and post titles', 'hub' ),
		),
		array(
			'id'       => 'title-bar-typography-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Page Title Custom Typography', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off',

		),
		'title-bar-typography' => array(
			'id'             => 'title-bar-typography',
			'title'          => esc_html__( 'Page Title Typography', 'hub' ),
			'subtitle'       => esc_html__( 'Manages the typography for the page title', 'hub' ),
			'type'           => 'typography',
			'text-transform' => true,
			'letter-spacing' => true,
			'text-align'     => false,
			'compiler'       => true,
			'units'          => '%',
			'required' => array(
				'title-bar-typography-enable',
				'equals',
				'on'
			),
		),
		array(
			'id'    => 'title-bar-subheading',
			'type'  => 'text',
			'title' => esc_html__( 'Page Subtitle', 'hub' ),

		),
		array(
			'id'       => 'title-bar-subheading-typography-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Page Subtitle Custom Typography', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off',

		),
		'title-bar-subheading-typography' => array(
			'id'             => 'title-bar-subheading-typography',
			'title'          => esc_html__( 'Page Subtitle Typography', 'hub' ),
			'subtitle'       => esc_html__( 'Manages the typography for the page subtitle', 'hub' ),
			'type'           => 'typography',
			'text-transform' => true,
			'letter-spacing' => true,
			'text-align'     => false,
			'compiler'       => true,
			'units'          => '%',
			'required' => array(
				'title-bar-subheading-typography-enable',
				'equals',
				'on'
			),
		),
		array(
			'type'     => 'slider',
			'id'       => 'title-bar-padding-top',
			'title'    => esc_html__( 'Padding Top', 'hub' ),
			'subtitle' => esc_html__( 'Manages the top padding of the titlebar', 'hub' ),
			'default'  => 80,
			'max'      => 300,
		),
		array(
			'type'     => 'slider',
			'id'       => 'title-bar-padding-bottom',
			'title'    => esc_html__( 'Padding Bottom', 'hub' ),
			'subtitle' => esc_html__( 'Manages the bottom padding of the titlebar', 'hub' ),
			'default'  => 80,
			'max'      => 300,
		),
		array(
			'id'       => 'title-bar-scheme',
			'type'     => 'select',
			'title'    => esc_html__( 'Color scheme', 'hub' ),
			'options'  => array(
				''              => esc_html__( 'Light', 'hub' ),
				'scheme-light'  => esc_html__( 'Dark', 'hub' ),
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
		),
		
		array(
			'id'       => 'title-bar-bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Background Image', 'hub' ),
		),
		
		array(
			'id'            => 'title-bar-bg-gradient',
			'type'          => 'liquid_colorpicker',
			'only_gradient' => true,
			'title'    => esc_html__( 'Background Gradient', 'hub' ),
			'subtitle' => esc_html__( 'Overwrites the background image, unless has transparency.', 'hub' ),
		),
		array(
			'id'       => 'title-bar-parallax',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Parallax', 'hub' ),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'subtitle' => esc_html__( 'The background should have an image', 'hub' ),
			'default' => 'off',
		),
		array(
			'id'      => 'title-bar-overlay',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Overlay', 'hub' ),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => 'off',
		),
		array(
			'id'       => 'title-bar-overlay-background',
			'type'     => 'liquid_colorpicker',
			'title'    => esc_html__( 'Overlay Background', 'hub' ),
			'required' => array(
				'title-bar-overlay',
				'equals',
				'on'
			),
		),
		array(
			'id'      => 'title-bar-breadcrumb',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Breadcrumbs', 'hub' ),
			'options' => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
		),
		array(
			'id'      => 'title-bar-scroll',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Scroll Button', 'hub' ),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => '',
		),		
		array(
			'id'         => 'title-bar-scroll-color',
			'type'       => 'liquid_colorpicker',
			'only_solid' => true,
			'title'      => esc_html__( 'Scroll Button Color', 'hub' ),
			'subtitle'   => esc_html__( 'Choose a color for scroll button', 'hub' ),
			'required'   => array(
				'title-bar-scroll',
				'equals',
				'on'
			),
		),
		array(
			'id'       => 'title-bar-scroll-id',
			'type'     => 'text',
			'title'    => esc_html__( 'Anchor ID', 'hub' ),
			'subtitle' => esc_html__( 'Anchor ID of the section where the page will be scrolled on click to the scroll button', 'hub' ),
			'required' => array(
				'title-bar-scroll',
				'equals',
				'on'
			),
		),
		array(
			'id'=>'title-bar-classes',
			'type' => 'text',
			'title' => esc_html__( 'Extra classes', 'hub' ),
			
		),
	)
);
