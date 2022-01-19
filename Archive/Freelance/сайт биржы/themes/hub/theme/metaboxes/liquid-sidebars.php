<?php
/*
 * Sidebar Section
*/

if ( class_exists( 'Liquid_Elementor_Addons' ) && defined( 'ELEMENTOR_VERSION' )){
	return;
}

$sections[] = array(
	'post_types' => array( 'post', 'page' ),
	'title'      => esc_html__('Sidebars', 'hub'),
	'icon'       => 'el-icon-adjust-alt',
	'fields'     => array(

		array(
			'id'       => 'liquid-sidebar-one',
			'type'     => 'select',
			'title'    => esc_html__( 'Select Sidebar', 'hub' ),
			'subtitle' => esc_html__( 'Select sidebar that will display on this page. Choose "No Sidebar" for full width.', 'hub' ),
			'options'  => liquid_helper()->get_sidebars( array( 'none' => esc_html__( 'No Sidebar', 'hub' ), 'main' => esc_html__( 'Main Sidebar', 'hub' ) ) ),
		),

		array(
			'id'       => 'liquid-sidebar-position',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Sidebar Position', 'hub' ),
			'subtitle' => esc_html__( 'Select the sidebar position. If sidebar 2 is selected, it will display on the opposite side. ', 'hub' ),
			'options'  => array(
				'left'    => esc_html__( 'Left', 'hub' ),
				'0'       => esc_html__( 'Default', 'hub' ),
				'right'   => esc_html__( 'Right', 'hub' )
			),
			'required' => array(
				array( 'liquid-sidebar-one', 'not', '' ),
				array( 'liquid-sidebar-one', 'not', 'none' )
			),
			'default' => '0'
		),
		array(
			'id'       => 'sidebar-widgets-style',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar Style', 'hub' ),
			'options'  => array(
				'sidebar-widgets-default' => esc_html__( 'Default', 'hub' ),
				'sidebar-widgets-outline' => esc_html__( 'Outline', 'hub' ),
			),
		),
	)
);