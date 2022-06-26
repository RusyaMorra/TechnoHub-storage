<?php
/*
 * General Section
*/

$this->sections[] = array(
	'title'  => esc_html__( 'Typography', 'hub' ),
	'icon'   => 'el el-text-height'
);

if ( !class_exists( 'Liquid_Elementor_Addons' ) && !defined( 'ELEMENTOR_VERSION' )){
	// Body
	$this->sections[] = array(
		'title'      => esc_html__( 'Body Typography', 'hub' ),
		'subsection' => true,
		'fields'     => array(

			array(
				'id'             => 'body_typography',
				'type'           => 'typography',
				'title'          => esc_html__( 'Body Typography Settings', 'hub' ),
				'subtitle'       => esc_html__( 'Manage the typography for all body text.', 'hub' ),
				'font-backup'    => true,
				'letter-spacing' => true,
				'text-align'     => false,
				'compiler'       => true,
				'units'          => '%',
				'default'        => array(
					'font-family'    => 'Rubik',
					'font-size'      => '18px',
					'font-weight'    => '400',
					'line-height'    => '1.7em',
					'letter-spacing' => '0',
					'color'          => '#808291',
				)
			),		
		)
	);

	// Buttons
	$this->sections[] = array(
		'title'      => esc_html__( 'Buttons Typography', 'hub' ),
		'subsection' => true,
		'fields'     => array(

			array(
				'id'             => 'buttons_typography',
				'type'           => 'typography',
				'title'          => esc_html__( 'Buttons Typography Settings', 'hub' ),
				'subtitle'       => esc_html__( 'Manage the typography for button labels.', 'hub' ),
				'font-backup'    => true,
				'letter-spacing' => true,
				'text-transform' => true,
				'text-align'     => false,
				'compiler'       => true,
				'units'          => '%',
				'default'        => array(
					'font-family'    => '',
					'font-size'      => '',
					'font-weight'    => '',
					'line-height'    => '',
					'letter-spacing' => '',
					'color'          => '',
				)
			),		
		)
	);

	// Single Post
	$this->sections[] = array(
		'title'      => esc_html__( 'Single Post Typography', 'hub' ),
		'subsection' => true,
		'fields'     => array(

			array(
				'id'             => 'single_typography',
				'type'           => 'typography',
				'title'          => esc_html__( 'Typography of Single Posts', 'hub' ),
				'subtitle'       => esc_html__( 'Manage the typography of single post text.', 'hub' ),
				'font-backup'    => true,
				'letter-spacing' => true,
				'text-transform' => true,
				'text-align'     => false,
				'compiler'       => true,
				'units'          => '%',
				'default'        => array(
					'font-family'    => '',
					'font-size'      => '16px',
					'font-weight'    => '',
					'line-height'    => '2',
					'letter-spacing' => '0',
					'color'          => '#737373',
				)
			),		
		)
	);


	// Headers
	$this->sections[] = array(
		'title'      => esc_html__( 'Headings Typography', 'hub' ),
		'subsection' => true,
		'fields'     => array(

			'h1_typography' => array(
				'id'             => 'h1_typography',
				'type'           => 'typography',
				'title'          => esc_html__( 'H1 Heading Typography', 'hub' ),
				'subtitle'       => esc_html__( 'Manage the typography for all H1 Heading.', 'hub' ),
				'font-backup'    => true,
				'letter-spacing' => true,
				'text-transform' => true,
				'text-align'     => false,
				'compiler'       => true,
				'units'          => '%',
				'default'        => array(
					'font-family'    => 'Manrope',
					'font-size'      => '52px',
					'font-weight'    => '600',
					'line-height'    => '1.2em',
					'letter-spacing' => '0',
					'color'          => '#181b31'
				)
			),

			'h2_typography' => array(
				'id'              => 'h2_typography',
				'title'           => esc_html__( 'H2 Heading Typography', 'hub' ),
				'subtitle'        => esc_html__( 'Manage the typography for all H2 Heading.', 'hub' ),
				'font-backup'    => true,
				'type'            => 'typography',
				'letter-spacing'  => true,
				'text-transform'  => true,
				'text-align'      => false,
				'compiler'        => true,
				'units'           => '%',
				'default'         => array(
					'font-family'    => 'Manrope',
					'font-size'      => '40px',
					'font-weight'    => '600',
					'line-height'    => '1.2em',
					'letter-spacing' => '0',
					'color'          => '#181b31'
				)
			),

			'h3_typography' => array(
				'id'             => 'h3_typography',
				'type'           => 'typography',
				'title'          => esc_html__( 'H3 Heading Typography', 'hub' ),
				'subtitle'       => esc_html__( 'Manage the typography for all H3 Heading.', 'hub' ),
				'font-backup'    => true,
				'letter-spacing' => true,
				'text-transform' => true,
				'text-align'     => false,
				'compiler'       => true,
				'units'          => '%',
				'default'        => array(
					'font-family'    => 'Manrope',
					'font-size'      => '32px',
					'font-weight'    => '600',
					'line-height'    => '1.2em',
					'letter-spacing' => '0',
					'color'          => '#181b31'
				)
			),

			'h4_typography' => array(
				'id'             => 'h4_typography',
				'type'           => 'typography',
				'title'          => esc_html__( 'H4 Heading Typography', 'hub' ),
				'subtitle'       => esc_html__( 'Manage the typography for all H4 Heading.', 'hub' ),
				'font-backup'    => true,
				'letter-spacing' => true,
				'text-transform' => true,
				'text-align'     => false,
				'compiler'       => true,
				'units'          => '%',
				'default'        => array(
					'font-family'    => 'Manrope',
					'font-size'      => '25px',
					'font-weight'    => '600',
					'line-height'    => '1.2em',
					'letter-spacing' => '0',
					'color'          => '#181b31'
				)
			),

			'h5_typography' => array(
				'id'             => 'h5_typography',
				'type'           => 'typography',
				'title'          => esc_html__( 'H5 Heading Typography', 'hub' ),
				'subtitle'       => esc_html__( 'Manage the typography for all H5 Heading.', 'hub' ),
				'font-backup'    => true,
				'letter-spacing' => true,
				'text-transform' => true,
				'text-align'     => false,
				'compiler'       => true,
				'units'          => '%',
				'default'        => array(
					'font-family'    => 'Manrope',
					'font-size'      => '21px',
					'font-weight'    => '600',
					'line-height'    => '1.2em',
					'letter-spacing' => '0',
					'color'          => '#181b31'
				)
			),

			'h6_typography' => array(
				'id'             => 'h6_typography',
				'type'           => 'typography',
				'title'          => esc_html__( 'H6 Heading Typography', 'hub' ),
				'subtitle'       => esc_html__( 'Manage the typography for all H6 Heading.', 'hub' ),
				'font-backup'    => true,
				'letter-spacing' => true,
				'text-transform' => true,
				'text-align'     => false,
				'compiler'       => true,
				'units'          => '%',
				'default'        => array(
					'font-family'    => 'Manrope',
					'font-size'      => '18px',
					'font-weight'    => '600',
					'line-height'    => '1.2em',
					'letter-spacing' => '0',
					'color'          => '#181b31'
				)
			),
		)
	);
}

// Custom Fonts
$this->sections[] = array(
	'title'      => esc_html__( 'Custom fonts', 'hub' ),
	'subsection' => true,
	'fields'     => array(
		
		array(
			'id' => 'liquid_custom_fonts',
			'type' => 'repeater',
			'title'    => esc_html__( 'Add Custom Fonts', 'hub' ),
			'subtitle' => esc_html__( 'Upload custom font. All files are not necessary but are recommended for full browser support. You can upload as many custom fonts as you need. Click the "Add" button for additional upload boxes.', 'hub' ),
			'sortable' => false,
			'group_values' => false,
			'fields' => array(
				
				array(
					'id' => 'custom_font_title',
					'type' => 'text',
					'title'    => esc_html__( 'Font title', 'hub' ),
				),
				array(
					'id'    => 'custom_font_woff2',
					'type'  => 'text',	
					'title' => esc_html__( 'WOFF2', 'hub' ),
				),
				array(
					'id'    => 'custom_font_woff',
					'type'  => 'text',	
					'title' => esc_html__( 'WOFF', 'hub' ),
				),
				array(
					'id'    => 'custom_font_ttf',
					'type'  => 'text',	
					'title' => esc_html__( 'TTF', 'hub' ),
				),
				array(
					'id'    => 'custom_font_weight',
					'type'  => 'text',	
					'title' => esc_html__( 'Font Weight', 'hub' ),
				),
				
			)
		)
	)
);
