<?php

/*
 * Sidebars Section
*/

$this->sections[] = array(
	'title'  => esc_html__( 'Sidebars', 'hub' ),
	'icon'   => 'el el-braille'
);


$this->sections[] = array(
	'title'      => esc_html__( 'Add sidebars', 'hub' ),
	'subsection' => true,
	'fields' => array(
		array(
			'id'       => 'custom-sidebars',
			'type'     => 'multi_text',
			'title'    => esc_html__( 'Add a Sidebar', 'hub' ),
			'desc'     => esc_html__( 'You can add as many custom sidebars as you need.', 'hub' )
		),
		array(
			'id'       => 'sidebar-widgets-style',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar Style', 'hub' ),
			'options'  => array(
				'sidebar-widgets-default' => esc_html__( 'Default', 'hub' ),
				'sidebar-widgets-outline' => esc_html__( 'Outline', 'hub' ),
			),
			'default' => 'sidebar-widgets-outline'
		),
		array(
			'type'     => 'slider',
			'id'       => 'title-bar-bottom-margin',
			'title'    => esc_html__( 'Sidebar Top Spacing', 'hub' ),
			'subtitle' => esc_html__( 'Manages the spacing between sidebar and titlbar.', 'hub' ),
			'default'  => 25,
			'max'      => 150,
		),
	)	
);

// Page Sidebar
$this->sections[] = array(
	'title'  => esc_html__( 'Page', 'hub' ),
	'subsection' => true,
	'fields' => array(

		array(
			'id'       => 'page-enable-global',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Default Sidebar of Pages', 'hub' ),
			'subtitle' => esc_html__( 'Switch on to use the same sidebars across all pages by overwriting the page options.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => 'off'
		),
		array(
			'id'       => 'page-sidebar-one',
			'type'     => 'select',
			'title'    => esc_html__( 'Default Sidebar of Pages', 'hub' ),
			'subtitle' => esc_html__( 'Choose the sidebar that will display across all pages.', 'hub' ),
			'data'     => 'sidebars'
		),
		array(
			'id'       => 'page-sidebar-position',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Default Sidebar Position of Pages', 'hub' ),
			'subtitle' => esc_html__( 'Manages the position of the sidebar across all pages.', 'hub' ),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'hub' ),
				'right' => esc_html__( 'Right', 'hub' )
			),
			'default'   => 'right'
		)
	)
);

// Portfolio Sidebar
$this->sections[] = array(
	'title'      => esc_html__( 'Portfolio Posts', 'hub' ),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'portfolio-enable-global',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Default Sidebar of Portfolio Posts', 'hub' ),
			'subtitle' => esc_html__( 'Switch on to use the same sidebars across all portfolio posts by overwriting the page options.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => 'off'
		),
		array(
			'id'       => 'portfolio-sidebar-one',
			'type'     => 'select',
			'title'    => esc_html__( 'Default Sidebar of Portfolio Posts', 'hub' ),
			'subtitle' => esc_html__( 'Select sidebar that will display on all portfolio posts.', 'hub' ),
			'data'     => 'sidebars'
		),
		array(
			'id'       => 'portfolio-sidebar-position',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Default Sidebar Position of Portfolio Posts', 'hub' ),
			'subtitle' => esc_html__( 'Manages the position of the sidebar for all portfolio posts.', 'hub' ),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'hub' ),
				'right' => esc_html__( 'Right', 'hub' )
			),
			'default' => 'right'
		)
	)
);

// Portfolio Archive Sidebar
$this->sections[] = array(
	'title'      => esc_html__( 'Portfolio Archive', 'hub' ),
	'subsection' => true,
	'fields' => array(

		array(
			'id'       => 'portfolio-archive-sidebar-one',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar of Portfolio Archive', 'hub' ),
			'subtitle' => esc_html__( 'Select a sidebar that will display on the portfolio archive pages.', 'hub' ),
			'data'     => 'sidebars'
		),
		array(
			'id'       => 'portfolio-archive-sidebar-position',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Default Sidebar Position of Portfolio Archive', 'hub' ),
			'subtitle' => esc_html__( 'Manages the position of the sidebar for portfolio archive pages.', 'hub' ),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'hub' ),
				'right' => esc_html__( 'Right', 'hub' )
			),
			'default' => 'right'
		)
	)
);

// Blog Posts Sidebar
$this->sections[] = array(
	'title'      => esc_html__( 'Blog Posts', 'hub' ),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'blog-enable-global',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Default Sidebar For Blog Posts', 'hub' ),
			'subtitle' => esc_html__( 'Turn on if you want to use the same sidebars on all blog posts. This option overrides the blog options.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => 'off'
		),		
		array(
			'id'       => 'blog-sidebar-one',
			'type'     => 'select',
			'title'    => esc_html__( 'Default Blog Posts Sidebar', 'hub' ),
			'subtitle' => esc_html__( 'Select sidebar 1 that will display on all blog posts.', 'hub' ),
			'data'     => 'sidebars'
		),
		array(
			'id'       => 'blog-sidebar-position',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Default Blog Sidebar Position', 'hub' ),
			'subtitle' => esc_html__( 'Controls the position of sidebar for all blog posts. ', 'hub' ),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'hub' ),
				'right' => esc_html__( 'Right', 'hub' )
			),
			'default' => 'right'
		)
	)
);

// Blog Archive Sidebar
$this->sections[] = array(
	'title'      => esc_html__( 'Blog Archive', 'hub' ),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'blog-archive-sidebar-one',
			'type'     => 'select',
			'title'    => esc_html__( 'Blog Archive Sidebar', 'hub' ),
			'subtitle' => esc_html__( 'Select a sidebar that will display on the blog archive pages.', 'hub' ),
			'data' => 'sidebars'
		),
		array(
			'id'       => 'blog-archive-sidebar-position',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Default Blog Archive Sidebar Position', 'hub' ),
			'subtitle' => esc_html__( 'Controls the position of the sidebar for blog archive pages.', 'hub' ),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'hub' ),
				'right' => esc_html__( 'Right', 'hub' )
			),
			'default' => 'right'
		)
	)
);

// Search page Sidebar
$this->sections[] = array(
	'title'      => esc_html__( 'Search Page', 'hub' ),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'search-sidebar-one',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar of Search Page', 'hub' ),
			'subtitle' => esc_html__( 'Choose a sidebar that will display on the search results page.', 'hub' ),
			'data' => 'sidebars'
		),
		array(
			'id'       => 'search-sidebar-position',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Sidebar Position of Search Page', 'hub' ),
			'subtitle' => esc_html__( 'Manages the position of the sidebar for the search results page.', 'hub' ),
			'options'  => array(
				'left'  => esc_html__( 'Left', 'hub' ),
				'right' => esc_html__( 'Right', 'hub' )
			),
			'default' => 'right'
		)
	)
);

liquid_action( 'option_sidebars', $this );
