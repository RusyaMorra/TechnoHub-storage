<?php
/*
 * Portfolio General
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
	'post_types'   => array('liquid-portfolio'),
	'separate_box' => true,
	'box_title'    => esc_html__('Portfolio Description', 'hub'),
	'icon'         => 'el-icon-cog',
	'fields'       => array(

		array(
			'id'   => 'portfolio-description',
			'type' => 'editor'
		)
	)
);

$sections[] = array(
	'post_types' => array( 'liquid-portfolio' ),
	'title'      => esc_html__('Portfolio General', 'hub'),
	'icon'       => 'el-icon-cog',
	'fields'     => array(
		
		array(
			'id'       => 'portfolio-subtitle',
			'type'     => 'text',
			'title'    => esc_html__( 'Subtitle', 'hub' ),
			'subtitle' => esc_html__( 'Manage the subtitle of portfolio listing', 'hub' ),
		),
		array(
			'id'       => 'portfolio-style',
			'type'     => 'select',
			'title'    => esc_html__( 'Portfolio Style', 'hub' ),
			'options' => array(
				'custom'         => esc_html__( 'Custom', 'hub' ),
				'default'        => esc_html__( 'Basic', 'hub' ),
			),
			'default'  => 'custom',
		),
		array(
			'id'      => 'portfolio-split-bg',
			'type'	  => 'liquid_colorpicker',
			'title'   => esc_html__( 'Split Section Background Color', 'hub' ),
			'required' => array(
				'portfolio-style',
				'equals',
				'split'
			),
		),
		array(
			'id' => 'portfolio-split-items',
			'type' => 'repeater',
			'title' => esc_html__( 'Split Section Items', 'hub' ),
			'group_values' => true, 
			'fields' => array(
				array(
                    'id'          => 'pf_title_field',
                    'type'        => 'text',
                    'placeholder' => esc_html__( 'Title', 'hub' ),
                ),
                array(
                    'id'          => 'pf_text_field',
                    'type'        => 'textarea',
                    'placeholder' => __( 'Text', 'hub' ),
                ),
			),
			'required' => array(
				'portfolio-style',
				'equals',
				'split'
			),
		),
		array(
			'id'       => 'portfolio-width',
			'type'     => 'select',
			'title'    => esc_html( 'Width', 'hub' ),
			'subtitle' => esc_html__( 'Defines the width of the featured image on the portfolio listing page', 'hub' ),
			'options'  => array(
				''     => esc_html__( 'Default', 'hub' ),
				'auto' => esc_html__( 'Auto - width determined by thumbnail width', 'hub' ),
				'2'    => esc_html__( '2 columns - 1/6', 'hub' ),
				'3'    => esc_html__( '3 columns - 1/4', 'hub' ),
				'4'    => esc_html__( '4 columns - 1/3', 'hub' ),
				'5'    => esc_html__( '5 columns - 5/12', 'hub' ),
				'6'    => esc_html__( '6 columns - 1/2', 'hub' ),
				'7'    => esc_html__( '7 columns - 7/12', 'hub' ),
				'8'    => esc_html__( '8 columns - 2/3', 'hub' ),
				'9'    => esc_html__( '9 columns - 3/4', 'hub' ),
				'10'   => esc_html__( '10 columns - 5/6', 'hub' ),
				'11'   => esc_html__( '11 columns - 11/12', 'hub' ),
				'12'   => esc_html__( '12 columns - 12/12', 'hub' ),
			)
		),
		array(
			'id'       => '_portfolio_image_size',
			'type'     => 'select',
			'title'    => esc_html__( 'Crop Thumbnail Image?', 'hub' ),
			'subtitle' => esc_html__( 'Choose a dimension for your portfolio thumb. 1. The images need to regenerated after this. 2. Image resolutions need to be greater than selected resolution.', 'hub' ),
			'options'  => array(
				''                          => esc_html__( 'Select a size', 'hub' ),
				'liquid-portfolio'          => esc_html__( 'Default - (760 x 520)', 'hub' ),
				'liquid-portfolio-sq'       => esc_html__( 'Square - (760 x 640)',     'hub' ),
				'liquid-portfolio-big-sq'   => esc_html__( 'Bigger Square - (1520 x 1280)', 'hub' ),
				'liquid-portfolio-portrait' => esc_html__( 'Vertical - (700 x 1000)',   'hub' ),
				'liquid-portfolio-wide'     => esc_html__( 'Horizontal - (1200 x 590)',       'hub' ),
				//Packery image sizes
				'liquid-packery-wide'     => esc_html__( 'Packery Horizontal - (1140 x 740)', 'hub' ),
				'liquid-packery-portrait' => esc_html__( 'Packery Vertical - (540 x 740)', 'hub' ),
				
			)
		),

	), // #fields
);
