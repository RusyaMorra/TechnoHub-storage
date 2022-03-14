<?php

$this->sections[] = array(
	'title'  => esc_html__( 'Woocommerce', 'hub' ),
	'icon'   => 'el-icon-shopping-cart',
	'fields' => array(

		array(
			'id'    => 'wc-archive-product-style',
			'type'  => 'select',	
			'title' => esc_html__( 'Woo Category Product Style', 'hub' ),
			'desc'  => esc_html__( 'Select a style for products to display on archive page', 'hub' ),
			'options' => array(
				'default'                => esc_html__( 'Default', 'hub' ),
				'classic'                => esc_html__( 'Classic', 'hub' ),
				'classic-alt'            => esc_html__( 'Classic 2', 'hub' ),
				'minimal'                => esc_html__( 'Minimal', 'hub' ),
				'minimal-2'              => esc_html__( 'Minimal 2', 'hub' ),
				'minimal-hover-shadow'   => esc_html__( 'Minimal Hover Shadow', 'hub' ),
				'minimal-hover-shadow-2' => esc_html__( 'Minimal Hover Shadow 2', 'hub' ),
			),
			'default' => 'default'
		),
		array(
			'id'       => 'wc-archive-title-bar-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Woo Category Title Bar', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to show the woo category title bar', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'       => 'wc-ajax-filter',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Woo Ajax filter', 'hub' ),
			'subtitle' => esc_html__( 'Enable WooCommerce Ajax filter', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'wc-ajax-pagination',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Woo Ajax pagination', 'hub' ),
			'subtitle' => esc_html__( 'Enable WooCommerce Ajax pagination', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'wc-ajax-pagination-type',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Woo Ajax pagination type', 'hub' ),
			'subtitle' => esc_html__( 'Controls WooCommerce Ajax pagination type', 'hub' ),
			'options'  => array(
				'classic' => esc_html__( 'Classic', 'hub' ),
				'scroll'  => esc_html__( 'Scroll', 'hub' ),
				'button'  => esc_html__( 'Button', 'hub' ),
			),
			'default'  => 'classic',
			'required' => array(
				'wc-ajax-pagination',
				'equals',
				'on'
			),
		),
		array(
			'id'       => 'wc-ajax-pagination-button-text',
			'type'	   => 'text',
			'title'    => esc_html__( 'Woo Ajax pagination button text', 'hub' ),
			'subtitle' => esc_html__( 'Controls WooCommerce Ajax button text', 'hub' ),
			'default'  => esc_html__( 'Load more products', 'hub' ),
			'required' => array(
				'wc-ajax-pagination-type',
				'equals',
				'button'
			),
		),
		array(
			'id'       => 'wc-archive-title-bar-heading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Woo Category Title', 'hub' ),
			'subtitle' => esc_html__( 'Controls the title text that displays in the woo category', 'hub' ),
		),
		array(
			'id'       => 'wc-archive-title-bar-subheading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Woo Category Subtitle', 'hub' ),
			'subtitle' => esc_html__( 'Controls the subtitle text that displays in the woo category', 'hub' )
		),
		//Sorters/product result
		array(
			'id'       => 'wc-archive-breadcrumb',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Breadcrumb', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to show breadcrumb', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'wc-archive-grid-list',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Grid/List', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to show grid/list selector', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'wc-archive-image-gallery',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Show Gallery?', 'hub' ),
			'subtitle' => esc_html__( 'Enable to show images from the gallery', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'Yes', 'hub' ),
				'off'  => esc_html__( 'No', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'wc-archive-show-number',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Show Products Limiter', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to show products limits on the page', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'wc-archive-show-product-cats',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Show Widgetized Side Drawer', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to enable widgetized side drawer', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'      => 'wc-widget-side-drawer-label',
			'type'    => 'text',
			'title'   => esc_html__( 'Label For Side Drawer', 'hub' ),
			'default' => esc_html__( 'Filter Products', 'hub' ),
			'required' => array(
				'wc-archive-show-product-cats',
				'equals',
				'on'
			),
		),
		array(
			'id'       => 'wc-widget-side-drawer-sidebar-id',
			'type'     => 'select',
			'title'    => esc_html__( 'Widgetized Side Drawer', 'hub' ),
			'subtitle' => esc_html__( 'Choose the widgetized area to display in the side drawer.', 'hub' ),
			'data'     => 'sidebars',
			'required' => array(
				'wc-archive-show-product-cats',
				'equals',
				'on'
			),
		),
		array(
			'id'      => 'wc-widget-side-drawer-mobile',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Show  on Mobile only?', 'hub' ),
			'subtitle' => esc_html__( 'Show the widgetized side drawer only for mobile devices?', 'hub' ),
			'options'  => array(
				'yes'   => esc_html__( 'Yes', 'hub' ),
				'no'  => esc_html__( 'No', 'hub' )
			),
			'default'  => 'no',
			'required' => array(
				'wc-archive-show-product-cats',
				'equals',
				'on'
			),
		),
		array(
			'id'       => 'wc-archive-result-count',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Result Count', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to show result count on shop/category page', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'wc-archive-sorter-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Sorter By', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to show sorterby on shop/category page', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'      => 'ld_woo_products_per_page',
			'type'    => 'text',	
			'title'   => esc_html__( 'Number of Products Displayed per Page', 'hub' ),
			'desc'    => esc_html__( 'This option works with predefined WooCommerce catalog page and category pages', 'hub' ),
			'default' => '9'
		),
		array(
			'id'      => 'ld_woo_columns',
			'type'    => 'slider',
			'title'   => esc_html__( 'Number of Products Per Row', 'hub' ),
			'desc'    => esc_html__( 'Define number of products per row to display on your predefined WooCommerce page and category pages', 'hub' ),
			'min'     => 1,
			'max'     => 6,
			'default' => 3
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
		array(
			'id'       => 'wc-title-bar-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Single Product Title Wrapper', 'hub' ),
			'options'  => array(
				'on'  => esc_html__( 'On', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'       => 'wc-add-to-cart-ajax-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Ajax add to cart ( single product )', 'hub' ),
			'subtitle' => esc_html__( 'Turn on enable ajax add to cart on single product page', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'off'
		),
		array(
			'id'       => 'wc-share-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Woo Single Product Share', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to show the share links', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'      => 'ld_woo_related_columns',
			'type'    => 'slider',	
			'title'   => esc_html__( 'Number of Related Products', 'hub' ),
			'desc'    => esc_html__( 'Define number of related products.', 'hub' ),
			'min'     => 1,
			'max'     => 6,
			'default' => 4
		),
		array(
			'id'      => 'ld_woo_cross_sell_columns',
			'type'    => 'slider',
			'title'   => esc_html__( 'Number of Displayed Cross-sells', 'hub' ),
			'desc'    => esc_html__( 'Define number of cross-sells display.', 'hub' ),
			'min'     => 1,
			'max'     => 6,
			'default' => 2
		),	
		array(
			'id'      => 'ld_woo_up_sell_columns',
			'type'    => 'slider',
			'title'   => esc_html__( 'Number of Displayed Up-sells', 'hub' ),
			'desc'    => esc_html__( 'Define number of up-sells display.', 'hub' ),
			'min'     => 1,
			'max'     => 6,
			'default' => 4
		),
	) 
);