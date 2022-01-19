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
	'post_types' => array( 'post', 'page', 'liquid-portfolio' ),
	'title'      => esc_html__( 'Header', 'hub' ),
	'icon'       => 'el-icon-cog',
	'fields'     => array(

		array(
			'id'       => 'header-enable-switch',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Header', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default'  => ''
		),
		array(
 			'id'       => 'header-template',
 			'type'     => 'select',
 			'title'    => esc_html__( 'Header Template', 'hub'),
 			'subtitle' => esc_html__( 'Choose the header template amongst your headers, this option will overwrite the default header.', 'hub' ),
 			'data'     => 'post',
			'args'     => array( 
				'post_type'      => 'liquid-header', 
				'posts_per_page' => -1 
			)
 		),

	), // #fields
);