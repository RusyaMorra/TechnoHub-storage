<?php
/*
 * General Section
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
	'post_types' => array( 'post', 'page', 'liquid-portfolio' ),
	'title'      => esc_html__('Page', 'hub'),
	'icon'       => 'el-icon-adjust-alt',
	'fields'     => array(
		
		array(
			'id'        => 'body-color-scheme',
			'type'      => 'select',
			'title'     => esc_html__( 'Page Color Scheme', 'hub' ),
			'subtitle'  => esc_html__( 'Select a color scheme for the page', 'hub' ),
			'options'   => array(
				'light' => esc_html__( 'Light', 'hub' ),
				'dark'  => esc_html__( 'Dark', 'hub' ),
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
			'id'       => 'page-enable-liquid-bg',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Adaptive Background Color', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'page-liquid-bg-interact',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Interact With Header', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default'  => 'off',
			'required' => array(
				'page-enable-liquid-bg',
				'=',
				'on'
			),
		),
		array(
			'id'       => 'page-enable-frame',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Page Frame', 'hub' ),
			'subtitle' => esc_html__( 'Switch on to enable page frame', 'hub' ),
			'options' => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default' => 'off'
		),
		array(
			'id'         => 'page-frame-v-color',
			'type'       => 'liquid_colorpicker',
			'title'      => esc_html__( 'Page Frame Background Color', 'hub' ),
			'subtitle'   => esc_html__( 'Choose a background color for page frame', 'hub' ),
			'required' => array(
				'page-enable-frame',
				'=',
				'on'
			),
		),
		array(
			'id'       => 'page-enable-liquid-bg-frame',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Adaptive Frame Color', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'page-enable-stack',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Blocks?', 'hub' ),
			'subtitle' => esc_html__( 'Will enable page stack', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'page-enable-stack-mobile',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Blocks? ( Mobile )', 'hub' ),
			'subtitle' => esc_html__( 'Will enable page stack for mobile devices', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'required' => array(
				'page-enable-stack',
				'equals',
				'on'
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'page-stack-effect',
			'type'	   => 'select',
			'title'    => esc_html__( 'Page Blocks Effect', 'hub' ),
			'subtitle' => esc_html__( 'Select an effect for the section transition', 'hub' ),
			'options'  => array(
				'fadeScale'  => esc_html__( 'fadeScale', 'hub' ),
				'slideOver'  => esc_html__( 'slideOver', 'hub' ),
				'mask'       =>  esc_html__( 'Mask', 'hub'  ),
			),
			'required' => array(
				'page-enable-stack',
				'equals',
				'on'
			),
			'default'  => 'fadeScale'
		),
		array(
			'id'       => 'page-stack-nav',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Blocks Navigation?', 'hub' ),
			'subtitle' => esc_html__( 'Will enable page blocks navigation', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'required' => array(
				'page-enable-stack',
				'equals',
				'on'
			),
		),
		array(
			'id'       => 'page-stack-nav-style',
			'type'	   => 'select',
			'title'    => esc_html__( 'Blocks Navigation Style', 'hub' ),
			'subtitle' => esc_html__( 'Select a style for the navigation', 'hub' ),
			'options'  => array(
				'lqd-stack-nav-style-1' => esc_html__( 'Style 1', 'hub' ),
				'lqd-stack-nav-style-2' => esc_html__( 'Style 2', 'hub' ),
				'lqd-stack-nav-style-3' => esc_html__( 'Style 3', 'hub'  ),
				'lqd-stack-nav-style-4' => esc_html__( 'Style 4', 'hub'  ),
			),
			'required' => array(
				'page-stack-nav',
				'equals',
				'on'
			),
		),
		array(
			'id'       => 'page-stack-nav-numbers',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Blocks Navigation Numbers?', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'required' => array(
				'page-stack-nav',
				'equals',
				'on'
			),
		),
		array(
			'id'       => 'page-stack-nav-prevnextbuttons',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Blocks Previous/Next buttons?', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'required' => array(
				'page-enable-stack',
				'equals',
				'on'
			),
		),
		array(
			'id'       => 'page-stack-buttons-style',
			'type'	   => 'select',
			'title'    => esc_html__( 'Buttons Style', 'hub' ),
			'subtitle' => esc_html__( 'Select style for the buttons', 'hub' ),
			'options'  => array(
				'lqd-stack-buttons-style-1' => esc_html__( 'Style 1', 'hub' ),
				'lqd-stack-buttons-style-2' => esc_html__( 'Style 2', 'hub' ),
			),
			'required' => array(
				'page-stack-nav-prevnextbuttons',
				'equals',
				'on'
			),
		),
		
		array(
			'id'       => 'page-stack-numbers',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Blocks Numbers?', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'required' => array(
				'page-enable-stack',
				'equals',
				'on'
			),
		),
		array(
			'id'       => 'page-stack-numbers-style',
			'type'	   => 'select',
			'title'    => esc_html__( 'Numbers Style', 'hub' ),
			'subtitle' => esc_html__( 'Select style for the numbers', 'hub' ),
			'options'  => array(
				'lqd-stack-nums-style-1' => esc_html__( 'Style 1', 'hub' ),
				'lqd-stack-nums-style-2' => esc_html__( 'Style 2', 'hub' ),
			),
			'required' => array(
				'page-stack-numbers',
				'equals',
				'on'
			),
		),
	)
);
