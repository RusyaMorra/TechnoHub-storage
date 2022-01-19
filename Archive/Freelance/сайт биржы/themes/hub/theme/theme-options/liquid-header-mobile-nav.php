<?php
$this->sections[] = array(
	'title'      => esc_html__( 'Mobile Navigation', 'hub' ),
	'subsection' => true,
	'desc' => sprintf(
		/* translators: 1: Plugin name 2: Elementor */
		wp_kses_post( '<div class="notice-red"> WARNING: These options might be overwritten by your header settings. Go to Headers > Your Header > Post Settings > Mobile Navigation if these options don\'t work for you. <a href="%1$s" target="_blank"> Read more</a></div>', 'hub' ),
		class_exists('Liquid_Elementor_Addons') ? 'https://docs.liquid-themes.com/article/439-hub-elementor-mobile-header-options' : 'https://docs.liquid-themes.com/article/216-mobile-header-options'
	),
	'fields'     => array(
		array(
			'id'       => 'header-mobile-menu',
			'type'     => 'select',
			'title'    => esc_html__( 'Mobile Primary Menu', 'hub' ),
			'subtitle' => esc_html__( 'Select a menu to overwrite the header menu location.', 'hub' ),
			'data'     => 'menus',
			'default'  => '',
		),
		array(
			'id'      => 'm-nav-style',
			'type'	  => 'select',
			'title'   => esc_html__( 'Style', 'hub' ),
			'description' => esc_html__( 'Select the mobile nav style.', 'hub' ),
			'options' => array(
				'classic' => esc_html__( 'Classic', 'hub' ),
				'minimal' => esc_html__( 'Minimal', 'hub' ),
				'modern'  => esc_html__( 'Modern', 'hub' ),
			),
			'default'  => 'modern',
		),
		array(
			'id'      => 'm-nav-logo-alignment',
			'type'	  => 'select',
			'title'   => esc_html__( 'Logo Alignment', 'hub' ),
			'description' => esc_html__( 'Logo alignment on mobile.', 'hub' ),
			'options' => array(
				'default' => esc_html__( 'Default', 'hub' ),
				'center'  => esc_html__( 'Center', 'hub' ),
			),
		),
		array(
			'id'      => 'm-nav-trigger-alignment',
			'type'	  => 'select',
			'title'   => esc_html__( 'Trigger Alignment', 'hub' ),
			'description' => esc_html__( 'Navigation trigger alignment on mobile.', 'hub' ),
			'options' => array(
				'right' => esc_html__( 'Right', 'hub' ),
				'left'  => esc_html__( 'Left', 'hub' ),
			),
		),
		array(
			'id'      => 'm-nav-alignment',
			'type'	  => 'select',
			'title'   => esc_html__( 'Navigation Items Alignment', 'hub' ),
			'description' => esc_html__( 'Select the alignment for navigation items alignment.', 'hub' ),
			'options' => array(
				'right' => esc_html__( 'Right', 'hub' ),
				'center' => esc_html__( 'Center', 'hub' ),
				'left'  => esc_html__( 'Left', 'hub' ),
			),
			'required' => array(
				'm-nav-style',
				'=',
				array( 'classic', 'minimal' )
			),
		),
		array(
			'id'      => 'm-nav-scheme',
			'type'	  => 'select',
			'title'   => esc_html__( 'Navigation Color Scheme', 'hub' ),
			'description' => esc_html__( 'Select the color scheme for mobile navigation.', 'hub' ),
			'options' => array(
				'gray' => esc_html__( 'Gray', 'hub' ),
				'light' => esc_html__( 'Light', 'hub' ),
				'dark'  => esc_html__( 'Dark', 'hub' ),
				'custom' => esc_html__( 'Custom', 'hub' ),
			),
			'required' => array(
				'm-nav-style',
				'=',
				array( 'classic', 'minimal' )
			),
			'default'  => 'gray',
		),
		array(
			'id'          => 'm-nav-custom-bg',
			'type'        => 'liquid_colorpicker',
			'title'       => esc_html__( 'Navigation Background', 'hub' ),
			'description' => esc_html__( 'of the mobile version of the website', 'hub' ),
			'required'    => array(
				'm-nav-scheme',
				'=',
				array( 'custom' )
			),
		),
		array(
			'id'          => 'm-nav-custom-color',
			'type'        => 'liquid_colorpicker',
			'only_solid'  => true,
			'title'       => esc_html__( 'Navigation Text/Trigger Color', 'hub' ),
			'description' => esc_html__( 'of the mobile version of the website', 'hub' ),
			'required'    => array( 'm-nav-scheme', '=', array( 'custom' ) ),
		),
		array(
			'id'          => 'm-nav-modern-bg',
			'type'        => 'liquid_colorpicker',
			'title'       => esc_html__( 'Navigation Background', 'hub' ),
			'description' => esc_html__( 'of the mobile version of the website', 'hub' ),
			'required'    => array( 'm-nav-style', '=', 'modern' ),
		),
		array(
			'id'          => 'm-nav-modern-color',
			'type'        => 'liquid_colorpicker',
			'only_solid'  => true,
			'title'       => esc_html__( 'Navigation Text/Trigger Color', 'hub' ),
			'description' => esc_html__( 'of the mobile version of the website', 'hub' ),
			'required'    => array( 'm-nav-style', '=', 'modern' ),
		),
		array(
			'id'          => 'm-nav-border-color',
			'type'        => 'liquid_colorpicker',
			'only_solid'  => true,
			'title'       => esc_html__( 'Navigation Border Color', 'hub' ),
			'description' => esc_html__( 'of the mobile version of the website', 'hub' ),
			'required'    => array( 
				array( 'm-nav-style', '=', 'classic' ), 
				array( 'm-nav-scheme', '=', array( 'custom' ) ), 
			),
		),
		
		array(
			'id'      => 'm-nav-header-scheme',
			'type'	  => 'select',
			'title'   => esc_html__( 'Header Color Scheme', 'hub' ),
			'description' => esc_html__( 'Select color scheme for mobile header.', 'hub' ),
			'options' => array(
				'light' => esc_html__( 'Light', 'hub' ),
				'gray' => esc_html__( 'Gray', 'hub' ),
				'dark'  => esc_html__( 'Dark', 'hub' ),
				'custom' => esc_html__( 'Custom', 'hub' ),
			),
			'default'  => 'gray',
		),
		array(
			'id'          => 'm-nav-header-custom-bg',
			'type'        => 'liquid_colorpicker',
			'title'       => esc_html__( 'Header Background', 'hub' ),
			'description' => esc_html__( 'of the mobile version of the website', 'hub' ),
			'required'    => array(
				'm-nav-header-scheme',
				'=',
				array( 'custom' )
			),
		),
		array(
			'id'          => 'm-nav-header-custom-color',
			'type'        => 'liquid_colorpicker',
			'only_solid'  => true,
			'title'       => esc_html__( 'Header Text/Trigger Color', 'hub' ),
			'description' => esc_html__( 'of the mobile version of the website', 'hub' ),
			'required'    => array(
				'm-nav-header-scheme',
				'=',
				array( 'custom' )
			),
		),
		array(
			'id'      => 'mobile-header-overlay',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Overlay on mobile device?', 'hub' ),
			'options' => array(
				'no'    => esc_html__( 'No', 'hub' ),
				'yes' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => 'no'
		),
		array(
			'id'      => 'mobile-header-sticky',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Sticky Header on mobile devices?', 'hub' ),
			'options' => array(
				'no'  => esc_html__( 'No', 'hub' ),
				'yes' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => 'no',
		),
		

	)
);