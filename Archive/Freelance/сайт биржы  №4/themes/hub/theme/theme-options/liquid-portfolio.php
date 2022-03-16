<?php
/*
 * Portfolio
 */

$this->sections[] = array(
	'title'  => esc_html__( 'Portfolio', 'hub' ),
	'icon'   => 'el el-th-large'
);

$this->sections[] = array(
	'title'      => esc_html__( 'General', 'hub' ),
	'subsection' => true,
	'fields'     => array(
		
		array(
			'id'       => 'portfolio-title-bar-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Portfolio Archive Page Title', 'hub' ),
			'subtitle' => esc_html__( 'Display the portfolio archive page title.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'       => 'portfolio-title-bar-heading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Portfolio Archive Page Title', 'hub' ),
			'desc'     => esc_html__( '[ld_category_title] shortcode displays the corresponding category title, any text can be added before or after the shortcode.', 'hub' ),
			'subtitle' => esc_html__( 'Manage the title of portfolio archive pages.', 'hub' ),
			'default'  => esc_html__( '[ld_category_title]', 'hub' ),
		),

		array(
			'id'      => 'portfolio-archive-style',
			'type'    => 'select',
			'title'   => esc_html__( 'Portfolio Style', 'hub' ),
			'options' => array(
				'style01' => esc_html__( 'Style 1', 'hub' ),
				'style02' => esc_html__( 'Style 2', 'hub' ),
				'style03' => esc_html__( 'Style 3', 'hub' ),
				'style04' => esc_html__( 'Style 4', 'hub' ),
				'style05' => esc_html__( 'Style 5', 'hub' ),

			),
			'default'  => 'style01'
		),
		array(
			'id'       => 'portfolio-horizontal-alignment',
			'type'     => 'select',
			'title'    => esc_html__( 'Horizontal Alignment', 'hub' ),
			'subtitle' => esc_html__( 'Content horizontal alignment', 'hub' ),
			'options' => array(
				''                 => esc_html__( 'Default', 'hub' ),
				'pf-details-h-str' => esc_html__( 'Left', 'hub' ),
				'pf-details-h-mid' => esc_html__( 'Center', 'hub' ),
				'pf-details-h-end' => esc_html__( 'Right', 'hub' ),
			),
			'required' => array(
				'portfolio-style',
				'!=',
				array( 
					'grid-alt',
				),
			),
		),
		array(
			'id'       => 'portfolio-vertical-alignment',
			'type'     => 'select',
			'title'    => esc_html__( 'Vertical Alignment', 'hub' ),
			'subtitle' => esc_html__( 'Content vertical alignment', 'hub' ),
			'options' => array(
				'' => esc_html__( 'Default', 'hub' ),
				'pf-details-v-str' => esc_html__( 'Top', 'hub' ),
				'pf-details-v-mid' => esc_html__( 'Middle', 'hub' ),
				'pf-details-v-end' => esc_html__( 'Bottom', 'hub' ),
			),
			'required' => array(
				'portfolio-style',
				'!=',
				array( 
					'grid-alt',
				),
			),
		),
		array(
			'id' => 'portfolio-grid-columns',
			'type' => 'select',
			'title' => esc_html__( 'Columns', 'hub' ),
			'options' => array(
				'1' => '1 Column',
				'2' => '2 Columns',
				'3' => '3 Columns',
				'4' => '4 Columns',
				'6' => '6 Columns',
			),
			'required' => array(
				'portfolio-style',
				'equals',
				array( 
					'grid', 
					'grid-alt',
					'grid-caption', 
					'grid-hover-3d', 
					'grid-hover-alt',
					'grid-hover-overlay', 
					'masonry-creative', 
					'masonry-classic' 
				),
			),
		),
		array(
			'id'    => 'portfolio-columns-gap',
			'type'  => 'slider',
			'title' => esc_html__( 'Columns gap', 'hub' ),
			'min'     => 0,
			'max'     => 35,
			'default' => 15,
		),
		array(
			'id'    => 'portfolio-bottom-gap',
			'type'  => 'slider',
			'title' => esc_html__( 'Bottom gap', 'hub' ),
			'min'     => 0,
			'max'     => 100,
			'default' => 30,
		),
		array(
			'id'       => 'portfolio-enable-parallax',
			'type'	   => 'switch',
			'title'    => esc_html__( 'Enable parallax?', 'hub' ),
			'subtitle' => esc_html__( 'Parallax for images', 'hub' ),
			'default'  => false
		),
		array(
			'type'  => 'text',
			'id'    => 'portfolio-single-slug',
			'title' => esc_html__( 'Portfolio Slug', 'hub' ),
		),
		
		array(
			'type'  => 'text',
			'id'    => 'portfolio-category-slug',
			'title' => esc_html__( 'Portfolio Category Slug', 'hub' ),
		),
		
	)
);

$this->sections[] = array(
	'title'      => esc_html__( 'Portfolio Single', 'hub' ),
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'portfolio-enable-header',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Header', 'hub' ),
			'subtitle' => esc_html__( 'Display the header', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default' => 'on'
		),
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
				'default'        => esc_html__( 'Default', 'hub' ),
				'custom'         => esc_html__( 'Custom', 'hub' ),
			)
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
			'title'    => esc_html__( 'Thumb Dimension', 'hub' ),
			'subtitle' => esc_html__( 'Choose a dimension for your portfolio thumb', 'hub' ),
			'options'  => array(

				'liquid-portfolio'          => esc_html__( 'Default - (370 x 300)', 'hub' ),
				'liquid-portfolio-sq'       => esc_html__( 'Square - (295 x 295)',     'hub' ),
				'liquid-portfolio-big-sq'   => esc_html__( 'Big Square - (600 x 600)', 'hub' ),
				'liquid-portfolio-portrait' => esc_html__( 'Portrait - (350 x 500)',   'hub' ),
				'liquid-portfolio-wide'     => esc_html__( 'Wide - (600 x 295)',       'hub' ),
				//Packery image sizes
				'liquid-packery-wide'     => esc_html__( 'Packery Wide - (570 x 370)', 'hub' ),
				'liquid-packery-portrait' => esc_html__( 'Packery Portrait - (270 x 370)', 'hub' ),
				
			)
		),
		array(
			'id'       => 'portfolio-social-box-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Social Sharing Module', 'hub' ),
			'subtitle' => esc_html__( 'Switch on to display the social sharing module on single portfolio pages.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'       => 'portfolio-archive-link',
			'type'     => 'text',
			'title'    => esc_html__( 'Portfolio Archive URL', 'hub' ),
			'desc'     => esc_html__( 'Custom link to portfolio page on navigation to link to the default portfolio archive', 'hub' ),
			'validate' => 'url',
		),
		array(
			'id'       => 'portfolio-related-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Related Works', 'hub' ),
			'subtitle' => esc_html__( 'Switch on to display related works on single portfolio pages.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default' => 'on'
		),

		array(
			'type'    => 'text',
			'id'      => 'portfolio-related-title',
			'title'   => esc_html__( 'Related Works Title', 'hub' ),
			'default' => 'Related Works',
			'required' => array(
				'portfolio-related-enable',
				'equals',
				'on'
			)
		),
		array(
			'id'       => 'portfolio-related-style',
			'type'	   => 'select',
			'title'    => esc_html__( 'Related Works Style', 'hub' ),
			'subtitle' => esc_html__( 'Choose a style for related works on single portfolio posts.', 'hub' ),
			'options'  => array(
				'style1'   => esc_html__( 'Style 1', 'hub' ),
				'style2'   => esc_html__( 'Style 2', 'hub' ),
			),
			'required' => array(
				'portfolio-related-enable',
				'equals',
				'on'
			),
			'default' => 'style1'
		),

		array(
			'type'     => 'slider',
			'id'       => 'portfolio-related-number',
			'title'    => esc_html__( 'Number of Related Works', 'hub' ),
			'subtitle' => esc_html__( 'Manages the number of works that display on related works section.', 'hub' ),
			'default'  => 3,
			'max'      => 6,
			'required' => array(
				'portfolio-related-enable',
				'equals',
				'on'
			)
		),
		array(
			'id'       => 'portfolio-enable-date',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Date', 'hub' ),
			'subtitle' => esc_html__( 'Swtich on to show the date on your portfolio item.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default' => ''
		),
		array(
			'id'    => 'portfolio-date-label',
			'type'  => 'text',
			'title' => esc_html__( 'Label of Date', 'hub' ),
			'subtitle' => esc_html__( 'Translate or change the "date" text. Leave empty for no change.', 'hub' ),
			'required' => array(
				'portfolio-enable-date',
				'!=',
				'off'
			)			
		),

		array(
			'id'    => 'portfolio-date',
			'type'  => 'date',
			'title' => esc_html__( 'Date of Work', 'hub' ),
			'desc'  => esc_html__( 'Overwrites the portfolio post publish date.', 'hub' ),
			'required' => array(
				'portfolio-enable-date',
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
	)
);
