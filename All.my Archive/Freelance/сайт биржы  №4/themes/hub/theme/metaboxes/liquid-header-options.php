<?php
/*
 * Header Section
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
	return;
}

$sections[] = array(
	'post_types' => array( 'liquid-header' ),
	'title'      => esc_html__( 'Header Design Options', 'hub' ),
	'icon'       => 'el-icon-cog',
	'fields'     => array(
		
		array(
			'id'      => 'header-layout',
			'type'	  => 'select',
			'title'   => esc_html__( 'Style', 'hub' ),
			'options' => array(
				'default'    => esc_html__( 'Default', 'hub' ),
				'side'       => esc_html__( 'Side', 'hub' ),
			),
			'default' => 'default'
		),
		array(
			'id'       => 'header-bg',
			'type'     => 'liquid_colorpicker',
			'title'    => esc_html__( 'Background', 'hub' ),
		),
		array(
			'id'      => 'header-megamenu-react',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Megamenu Reaction?', 'hub' ),
			'description' => esc_html__( 'Enable if you want to add background animation to header when hover the megamenu item', 'hub' ),
			'options' => array(
				'no'  => esc_html__( 'No', 'hub' ),
				'yes' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => 'no'
		),
		array(
			'id'      => 'header-megamenu-slide',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Megamenu Slide?', 'hub' ),
			'description' => esc_html__( 'Enable megamenus slide effect. It works better if you have multiple megamenu beside each other.', 'hub' ),
			'options' => array(
				'no'  => esc_html__( 'No', 'hub' ),
				'yes' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => 'no'
		),
		array(
			'id'      => 'header-sticky',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Sticky Header?', 'hub' ),
			'options' => array(
				'no'  => esc_html__( 'No', 'hub' ),
				'yes' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => 'no',
			'required' => array(
				array( 'header-layout', 'not', 'side' ),
				array( 'header-layout', 'not', 'side-3' ),
			),
		),
		array(
			'id'      => 'header-sticky-pos',
			'type'	  => 'select',
			'title'   => esc_html__( 'Sticky Header Position', 'hub' ),
			'options' => array(
				'default'       => esc_html__( 'Default - Bottom of the header', 'hub' ),
				'after-section' => esc_html__( 'After first section', 'hub' ),
			),
			'default' => 'default',
			'required' => array(
				'header-sticky',
				'equals',
				'yes'
			),
		),

		array(
			'id'      => 'header-sticky-shadow',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Disable Sticky Header Shadow', 'hub' ),
			'options' => array(
				''                       => esc_html__( 'No', 'hub' ),
				'sticky-header-noshadow' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => '',
			'required' => array(
				'header-sticky',
				'equals',
				'yes'
			),
		),
		array(
			'id'      => 'header-sticky-dynamic-color',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Sticky Dynamic Color', 'hub' ),
			'options' => array(
				'no'     => esc_html__( 'No', 'hub' ),
				'yes' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => 'no',
			'required' => array(
				'header-sticky',
				'equals',
				'yes'
			),
		),

		array(
			'id'    => 'header-sticky-bg',
			'type'  => 'liquid_colorpicker',
			'title' => esc_html__( 'Sticky Header Background', 'hub' ),
			'required' => array( 
				array( 'header-sticky', 'equals', 'yes' ), 
				array( 'header-sticky-dynamic-color', '!=', 'yes' ), 
			)
		),
		array(
			'id'    => 'header-sticky-color',
			'type'  => 'liquid_colorpicker',
			'only_solid' => true,
			'title' => esc_html__( 'Sticky Header Color', 'hub' ),
			'required' => array( 
				array( 'header-sticky', 'equals', 'yes' ), 
				array( 'header-sticky-dynamic-color', '!=', 'yes' ), 
			)
		),
		array(
			'id'    => 'header-sticky-hover-color',
			'type'  => 'liquid_colorpicker',
			'only_solid' => true,
			'title' => esc_html__( 'Sticky Header Hover Color', 'hub' ),
			'required' => array( 
				array( 'header-sticky', 'equals', 'yes' ), 
				array( 'header-sticky-dynamic-color', '!=', 'yes' ), 
			)
		),
		
		array(
			'id'    => 'header-sticky-dynamic-light-color',
			'type'  => 'liquid_link_color',
			'title' => esc_html__( 'Colors on light sections', 'hub' ),
			'active' => false,
			'visited' => false,
			'required' => array( 
				array( 'header-sticky-dynamic-color', '=', 'yes' ), 
			)
		),
		array(
			'id'    => 'header-sticky-dynamic-dark-color',
			'type'  => 'liquid_link_color',
			'title' => esc_html__( 'Colors on dark sections', 'hub' ),
			'active' => false,
			'visited' => false,
			'required' => array( 
				array( 'header-sticky-dynamic-color', '=', 'yes' ), 
			)
		),
		array(
			'id'    => 'header-sticky-dynamic-light-bg',
			'type'  => 'liquid_colorpicker',
			'title' => esc_html__( 'Header Background Color Over Light Sections', 'hub' ),
			'description' => esc_html__( 'Background color of the sticky header on light sections', 'hub' ),
			'required' => array( 
				array( 'header-sticky-dynamic-color', '=', 'yes' ), 
			)
		),
		array(
			'id'    => 'header-sticky-dynamic-dark-bg',
			'type'  => 'liquid_colorpicker',
			'title' => esc_html__( 'Header Background Color Over Dark Sections', 'hub' ),
			'description' => esc_html__( 'Background color of the sticky header on dark sections', 'hub' ),
			'required' => array( 
				array( 'header-sticky-dynamic-color', '=', 'yes' ), 
			)
		),

		array(
			'id'      => 'header-overlay',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Overlay?', 'hub' ),
			'options' => array(
				''    => esc_html__( 'No', 'hub' ),
				'main-header-overlay' => esc_html__( 'Yes', 'hub' ),
			),
			'required' => array(
				array( 'header-layout', 'not', 'side' ),
				array( 'header-layout', 'not', 'side-3' ),
			),
			'default' => ''
		),

	)
);
$sections[] = array(
	'post_types' => array( 'liquid-header' ),
	'title'      => esc_html__( 'Mobile Navigation', 'hub' ),
	'icon'       => 'el-icon-cog',
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
			'options' => array(
				'classic' => esc_html__( 'Classic', 'hub' ),
				'minimal' => esc_html__( 'Minimal', 'hub' ),
				'modern'  => esc_html__( 'Modern', 'hub' ),
			),
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
			'required'    => array(
				'm-nav-scheme',
				'=',
				array( 'custom' )
			),
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
				'no'  => esc_html__( 'No', 'hub' ),
				''    => esc_html__( 'Default', 'hub' ),
				'yes' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => ''
		),
		array(
			'id'      => 'mobile-header-sticky',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Sticky Header on mobile devices?', 'hub' ),
			'options' => array(
				'no'  => esc_html__( 'No', 'hub' ),
				''    => esc_html__( 'Default', 'hub' ),
				'yes' => esc_html__( 'Yes', 'hub' ),
			),
			'default' => 'no',
		),
		
		
	)
);