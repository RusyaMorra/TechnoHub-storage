<?php
/*
 * Portfolio Meta Section
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
	'post_types' => array( 'liquid-portfolio' ),
	'title'      => esc_html__( 'Portfolio Meta', 'hub' ),
	'icon'       => 'el-icon-cog',
	'fields'     => array(

		array(
			'type'     => 'text',
			'id'       => 'portfolio-badge',
			'subtitle' => esc_html__( 'Will show badge for the style 6 of the portfolio listing', 'hub' ),
			'title'    => esc_html__( 'Badge', 'hub' ),
			'default'  => '',
		),
		array(
			'id'       => 'portfolio-related-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Related Projects', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to display related projects on single portfolio posts.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),	
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default' => ''
		),
		array(
			'type'    => 'text',
			'id'      => 'portfolio-related-title',
			'title'   => esc_html__( 'Related Works Title', 'hub' ),
			'default' => '',
			'required' => array(
				'portfolio-related-enable',
				'!=',
				'off'
			)
		),
		array(
			'type'     => 'slider',
			'id'       => 'portfolio-related-number',
			'title'    => esc_html__( 'Number of Related Works', 'hub' ),
			'subtitle' => esc_html__( 'Manages the number of works that display on related works section.', 'hub' ),
			'default'  => 3,
			'max'      => 100,
			'required' => array(
				'portfolio-related-enable',
				'!=',
				'off'
			)
		),
		array(
			'id'       => 'portfolio-website',
			'type'     => 'text',
			'validate' => 'url',
			'title'    => esc_html__( 'External URL', 'hub' )
		),
		array(
			'id'       => 'portfolio-website-label',
			'type'     => 'text',
			'title'    => esc_html__( 'Label of Button', 'hub' ),
			'default'  => esc_html__( 'Launch', 'hub' ),
		),
		array(
			'id'      => 'portfolio-attributes',
			'type'    => 'multi_text',
			'title'   => esc_html__( 'Attributes', 'hub' ),
			'desc'    => esc_html__( 'Add custom portfolio attributes. Divide by | label with value ( Label | Value )', 'hub' ),
			'show_empty' => false,
			'default' => array(
				'Client | Liquid Themes',
			),
			'required' => array(
				'portfolio-style',
				'!=',
				'split'
			),
		),

	), // #fields
);