<?php
$sections[] = array(
	'post_types' => array( 'product' ),
	'title'  => esc_html__( 'General', 'hub' ),
	'icon'       => 'el-icon-cog',
	'fields' => array(

		array(
			'id'       => 'product-page-style',
			'type'     => 'select',
			'title'    => esc_html( 'Style', 'hub' ),
			'subtitle' => esc_html__( 'Select a style for the single product page', 'hub' ),
			'options'  => array(
				'0'    => esc_html__( 'Default', 'hub' ),
				'1'    => esc_html__( 'Style 1', 'hub' ),
				'2'    => esc_html__( 'Style 2', 'hub' ),
				'3'    => esc_html__( 'Style 3', 'hub' ),
			)
		),
		array(
			'id'       => 'product-item-width',
			'type'     => 'select',
			'title'    => esc_html( 'Width', 'hub' ),
			'subtitle' => esc_html__( 'Defines the width of the product image on the product list', 'hub' ),
			'options'  => array(
				''     => esc_html__( 'Default', 'hub' ),
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
			'id'       => 'wc-custom-layout-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Woo Single Product Layout', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to enable custom layouts', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'       =>'wc-custom-layout',
			'type'     => 'select',
			'title'    => esc_html__( 'Product Layout', 'hub' ),
			'subtitle' => esc_html__( 'Select a layout for the product single page', 'hub' ),
			'data'     => 'post',
			'args' => array( 
				'post_type' => 'ld-product-layout', 
				'posts_per_page' => -1 
			),
			'required' => array(
				'wc-custom-layout-enable',
				'equals',
				'on'
			),
		),

	) 
);