<?php

add_action( 'liquid_option_sidebars', 'liquid_woocommerce_option_sidebars' );

function liquid_woocommerce_option_sidebars( $obj ) {

	// Product Sidebar
	$obj->sections[] = array(
		'title'  => esc_html__('Products', 'hub'),
		'subsection' => true,
		'fields' => array(

			array(
				'id'       => 'wc-enable-global',
				'type'	   => 'button_set',
				'title'    => esc_html__( 'Activate Global Sidebar For Products', 'hub' ),
				'subtitle' => esc_html__( 'Turn on if you want to use the same sidebars on all product posts. This option overrides the product options.', 'hub' ),
				'options'  => array(
					'on'   => esc_html__( 'On', 'hub' ),
					'off'  => esc_html__( 'Off', 'hub' ),
				),
				'default' => 'off'
			),
			array(
				'id'       => 'wc-sidebar',
				'type'     => 'select',
				'title'    => esc_html__( 'Global Products Sidebar', 'hub' ),
				'subtitle' => esc_html__( 'Select sidebar that will display on all product posts.', 'hub' ),
				'data'     => 'sidebars'
			),
			array(
				'id'       => 'wc-sidebar-position',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Global Products Sidebar Position', 'hub' ),
				'subtitle' => esc_html__( 'Controls the position of the sidebar for all product posts.', 'hub' ),
				'options'  => array(
					'left'  => esc_html__( 'Left', 'hub' ),
					'right' => esc_html__( 'Right', 'hub' )
				),
				'default' => 'right'
			),
		)
	);

	// Product Archive Sidebar
	$obj->sections[] = array(
		'title'  => esc_html__( 'Product Archive', 'hub' ),
		'subsection' => true,
		'fields' => array(
			array(
				'id'       =>'wc-archive-sidebar-one',
				'type'     => 'select',
				'title'    => esc_html__( 'Product Archive Sidebar', 'hub' ),
				'subtitle' => esc_html__( 'Select sidebar 1 that will display on the product archive pages.', 'hub' ),
				'data'     => 'sidebars'
			),
			array(
				'id'       => 'wc-archive-sidebar-position',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Global Products Archive Sidebar Position', 'hub' ),
				'subtitle' => esc_html__( 'Controls the position of the sidebar for all product archives.', 'hub' ),
				'options'  => array(
					'left'  => esc_html__( 'Left', 'hub' ),
					'right' => esc_html__( 'Right', 'hub' )
				),
				'default' => 'right'
			),
			array(
				'id'       => 'wc-archive-sidebar-hide-mobile',
				'type'	   => 'button_set',
				'title'    => esc_html__( 'Hide sidebar on mobile devices?', 'hub' ),
				'subtitle' => esc_html__( 'Turn on to hide the sidebar on mobile devices', 'hub' ),
				'options'  => array(
					'yes'   => esc_html__( 'Yes', 'hub' ),
					'no'  => esc_html__( 'No', 'hub' )
				),
				'default'  => 'no'
			),

		)
	);

}