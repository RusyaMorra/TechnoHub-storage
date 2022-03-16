<?php
/*
 * Prono Boxes
 */

$this->sections[] = array(
	'title'  => esc_html__( 'Promo Boxes', 'hub' ),
	'icon'   => 'el-icon-th'
);

$this->sections[] = array(
	'post_types' => array( 'post', 'page', 'liquid-portfolio' ),
	'subsection' => true,
	'title'      => esc_html__('Promotions', 'hub'),
	'icon'       => 'el-icon-adjust-alt',
	'fields'     => array(
		
		array(
			'id'    => 'enable-promo',
			'type'  => 'button_set',
			'title' => esc_html__( 'Enable Promo boxes', 'hub' ),
			'desc'  => esc_html__( 'Enable to show promo boxes', 'hub' ),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default'  => 'off',
		),
		
		array(
			'id'       => 'promo-top-template',
			'type'     => 'select',
			'title'    => esc_html__( 'Top Promo box content', 'hub' ),
			'subtitle' => esc_html__( 'Select which promobox content post to display', 'hub' ),
			'data'     => 'post',
			'args'     => array( 
				'post_type'      => 'liquid-promotions', 
				'posts_per_page' => -1 
			),
			'required'  => array(
				'promo-positions', 
				'!=', 
				'inpost'
			),
		),
		
		array(
			'id'       => 'promo-incontent-template',
			'type'     => 'select',
			'title'    => esc_html__( 'In post Promo box content', 'hub' ),
			'subtitle' => esc_html__( 'Select which promobox content post to display (works for single post only, and display after the Author Bio section)', 'hub' ),
			'data'     => 'post',
			'args'     => array( 
				'post_type'      => 'liquid-promotions', 
				'posts_per_page' => -1 
			),
			'required'  => array(
				'promo-positions', 
				'!=', 
				'top'
			),
		),

	)
);
