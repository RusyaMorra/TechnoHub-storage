<?php
/*
 * Footer Section
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
	'post_types' => array( 'liquid-footer' ),
	'title'      => esc_html__( 'Design Options', 'hub' ),
	'icon'       => 'el-icon-cog',
	'fields'     => array(

		array(
			'id'     => 'footer-fixed',
			'type'   => 'button_set',
			'title'  => esc_html__( 'Sticky Footer', 'hub' ),
			'subtitle' => esc_html__( 'If on, this footer will be sticky', 'hub' ),
			'options' => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' ),
			),
			'default' => 'off',
		),	
		array(
			'id'      => 'footer-fixed-shadow',
			'type'	  => 'select',
			'title'   => esc_html__( 'Sticky Footer Shadow Depth', 'hub' ),
			'options' => array(
				'0',
				'1',
				'2',
				'3',
				'4',
			),
			'default' => '4',
			'required' => array(
				'footer-fixed',
				'equals',
				'on'
			),
		),

		array(
			'id'    => 'footer-text-color',
			'type'  => 'color_rgba',
			'title' => esc_html__( 'Text Color', 'hub' ),
		),
		array(
			'id'    => 'footer-link-color',
			'type'  => 'link_color',
			'title' => esc_html__( 'Link Color', 'hub' ),
		),

		array(
			'id'      => 'footer-bg',
			'type'	  => 'background',
			'title'   => esc_html__( 'Background', 'hub' ),
			'preview' => false,
		),
		array(
			'id'      => 'footer-gradient',
			'type'	  => 'liquid_colorpicker',
			'title'   => esc_html__( 'Color/Gradient Background', 'hub' ),
		),

		array(
			'id'    => 'footer-padding',
			'type'  => 'spacing',
			'title' => esc_html__( 'Padding', 'hub' ),
		)
	)
);
