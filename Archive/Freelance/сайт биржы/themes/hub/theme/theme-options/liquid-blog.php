<?php
/*
 * Blog
 */

$single_typography = array();
if ( !class_exists( 'Liquid_Elementor_Addons' ) && !defined( 'ELEMENTOR_VERSION' )){
	$single_typography = array(
		'id'              => 'single_typography',
		'title'           => esc_html__( 'Single Post Title Typography', 'hub' ),
		'subtitle'        => esc_html__( 'Manage the typography for the single post headers', 'hub' ),
		'type'            => 'typography',
		'letter-spacing'  => true,
		'text-align'      => false,
		'compiler'        => true,
		'units'           => '%',
	);
} 

$this->sections[] = array(
	'title'  => esc_html__( 'Blog', 'hub' ),
	'icon'   => 'el el-pencil'
);

$this->sections[] = array(
	'title'      => esc_html__( 'General Blog', 'hub' ),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'blog-title-bar-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Blog Page Title Bar', 'hub' ),
			'subtitle' => esc_html__( 'Display the page title bar for the assigned blog page in settings > reading or the blog archive pages. Note: This option will not control the blog element.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),

		array(
			'id'       => 'blog-title-bar-heading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Blog Page Title', 'hub' ),
			'subtitle' => esc_html__( 'Manages the title text that displays in the page title bar only if your front page displays your latest post in "settings > reading".', 'hub' ),
			'default'  => 'Blog'
		),
		array(
			'id'       => 'blog-title-bar-subheading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Blog Page Subtitle', 'hub' ),
			'subtitle' => esc_html__( 'Manage the subtitle text that displays in the page title bar only if your front page displays your latest post in "settings > reading".', 'hub' )
		),
		array(
			'id'      => 'blog-style',
			'type'    => 'select',
			'title'   => esc_html__( 'Post Style', 'hub' ),
			'options' => array(
				'style01' => esc_html__( 'Style 1', 'hub' ),
				'style02' => esc_html__( 'Style 2', 'hub' ),
				'style02-alt' => esc_html__( 'Style 2 Alt', 'hub' ),
				'style03' => esc_html__( 'Style 3', 'hub' ),
				'style04' => esc_html__( 'Style 4', 'hub' ),
				'style05' => esc_html__( 'Style 5', 'hub' ),
				'style06' => esc_html__( 'Style 6', 'hub' ),
				'style07' => esc_html__( 'Style 7', 'hub' ),
				'style08' => esc_html__( 'Style 8', 'hub' ),
				'style09' => esc_html__( 'Style 9', 'hub' ),
				'style10' => esc_html__( 'Style 10', 'hub' ),
				'style11' => esc_html__( 'Style 11', 'hub' ),
				'style12' => esc_html__( 'Style 12', 'hub' ),
				'style13' => esc_html__( 'Style 13', 'hub' ),
				'style14' => esc_html__( 'Style 14', 'hub' ),
				'style15' => esc_html__( 'Style 15', 'hub' ),
				'style16' => esc_html__( 'Style 16', 'hub' ),
				'style17' => esc_html__( 'Style 17', 'hub' ),
				'style18' => esc_html__( 'Style 18', 'hub' ),
				'style19' => esc_html__( 'Style 19', 'hub' ),
				'style20' => esc_html__( 'Style 20', 'hub' ),
				'style21' => esc_html__( 'Style 21', 'hub' ),
				'style22' => esc_html__( 'Style 22', 'hub' ),
				'style23' => esc_html__( 'Style 23', 'hub' ),
			),
			'subtitle' => esc_html__( 'Choose a post style for your blog page.', 'hub' ),
			'default'  => 'style22'
		),
		array(
			'id'      => 'blog-columns',
			'type'    => 'select',
			'title'   => esc_html__( 'Columns', 'hub' ),
			'options' => array(
				'1'       => esc_html__( '1 Column', 'hub' ),
				'2'       => esc_html__( '2 Columns', 'hub' ),
				'3'       => esc_html__( '3 Columns', 'hub' ),
				'4'       => esc_html__( '4 Columns', 'hub' ),
			),
			'subtitle' => esc_html__( 'How many columns to show for your blog page.', 'hub' ),
			'default'  => '1'
		),
		array(
			'id'    => 'blog-show-meta',
			'type'	   => 'button_set',
			'title' => esc_html__( 'Meta', 'hub' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'hub' ),
				'no' => esc_html__( 'No', 'hub' ),
			),
			'subtitle' => esc_html__( 'Manage the meta for posts', 'hub' ),
			'default'  => 'yes'
		),
		array(
			'id'    => 'blog-meta-type',
			'type'  => 'select',
			'title' => esc_html__( 'Meta Type', 'hub' ),
			'options' => array(
				'tags' => esc_html__( 'Tags', 'hub' ),
				'cats' => esc_html__( 'Categories', 'hub' ),
			),
			'subtitle' => esc_html__( 'Manage the meta type for posts', 'hub' ),
			'default'  => 'tags',
			'required' => array(
				'blog-show-meta',
				'equals',
				'yes'
			)
		),
		array(
			'id'    => 'blog-one-category',
			'type'  => 'select',
			'title' => esc_html__( 'Single Category', 'hub' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'hub' ),
				'no' => esc_html__( 'No', 'hub' ),
			),
			'subtitle' => esc_html__( 'Manage the single category for posts', 'hub' ),
			'default'  => 'yes',
			'required' => array(
				'blog-meta-type',
				'equals',
				'cats'
			)	
		),
		array(
			'id'       => 'blog-excerpt-length',
			'type'     => 'text',
			'title'    => esc_html__( 'Default Blog Excerpt Length', 'hub' ),
			'validate' => 'numeric',
			'default'  => '20',
		),

	)
);

//Category Archive Options
$this->sections[] = array(
	'title'      => esc_html__( 'Blog Category Page', 'hub' ),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'category-title-bar-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Blog Category Page Title', 'hub' ),
			'subtitle' => esc_html__( 'Display the blog category page title.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),

		array(
			'id'       => 'category-title-bar-heading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Blog Category Page Title', 'hub' ),
			'desc'     => esc_html__( '[ld_category_title] shortcode displays the corresponding the category title, any text can be added before or after the shortcode.', 'hub' ),
			'subtitle' => esc_html__( 'Manage the title of blog category pages.', 'hub' ),
			'default'  => '',
		),

		array(
			'id'       => 'category-title-bar-subheading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Blog Category Page Subtitle', 'hub' ),
			'subtitle' => esc_html__( 'Manages the subtitle of blog category pages.', 'hub' )
		),

		array(
			'id'      => 'category-blog-style',
			'type'    => 'select',
			'title'   => esc_html__( 'Style', 'hub' ),
			'options' => array(
				'style01' => esc_html__( 'Style 1', 'hub' ),
				'style02' => esc_html__( 'Style 2', 'hub' ),
				'style02-alt' => esc_html__( 'Style 2 Alt', 'hub' ),
				'style03' => esc_html__( 'Style 3', 'hub' ),
				'style04' => esc_html__( 'Style 4', 'hub' ),
				'style05' => esc_html__( 'Style 5', 'hub' ),
				'style06' => esc_html__( 'Style 6', 'hub' ),
				'style07' => esc_html__( 'Style 7', 'hub' ),
				'style08' => esc_html__( 'Style 8', 'hub' ),
				'style09' => esc_html__( 'Style 9', 'hub' ),
				'style10' => esc_html__( 'Style 10', 'hub' ),
				'style11' => esc_html__( 'Style 11', 'hub' ),
				'style12' => esc_html__( 'Style 12', 'hub' ),
				'style13' => esc_html__( 'Style 13', 'hub' ),
				'style14' => esc_html__( 'Style 14', 'hub' ),
				'style15' => esc_html__( 'Style 15', 'hub' ),
				'style16' => esc_html__( 'Style 16', 'hub' ),
				'style17' => esc_html__( 'Style 17', 'hub' ),
				'style18' => esc_html__( 'Style 18', 'hub' ),
				'style19' => esc_html__( 'Style 19', 'hub' ),
				'style20' => esc_html__( 'Style 20', 'hub' ),
				'style21' => esc_html__( 'Style 21', 'hub' ),
				'style22' => esc_html__( 'Style 22', 'hub' ),
				'style23' => esc_html__( 'Style 23', 'hub' ),
			),
			'subtitle' => esc_html__( 'Select content type for your grid.', 'hub' ),
			'default'  => 'style22'
		),
		array(
			'id'      => 'blog-category-columns',
			'type'    => 'select',
			'title'   => esc_html__( 'Columns', 'hub' ),
			'options' => array(
				'1'       => esc_html__( '1 Column', 'hub' ),
				'2'       => esc_html__( '2 Columns', 'hub' ),
				'3'       => esc_html__( '3 Columns', 'hub' ),
				'4'       => esc_html__( '4 Columns', 'hub' ),
			),
			'subtitle' => esc_html__( 'How many columns to show for your blog category page.', 'hub' ),
			'default'  => '1'
		),
		array(
			'id'    => 'category-blog-show-meta',
			'type'  => 'select',
			'title' => esc_html__( 'Meta', 'hub' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'hub' ),
				'no' => esc_html__( 'No', 'hub' ),
			),
			'subtitle' => esc_html__( 'Manage the meta for posts', 'hub' ),
			'default'  => 'yes'
		),
		array(
			'id'    => 'category-blog-meta-type',
			'type'  => 'select',
			'title' => esc_html__( 'Meta Type', 'hub' ),
			'options' => array(
				'tags' => esc_html__( 'Tags', 'hub' ),
				'cats' => esc_html__( 'Categories', 'hub' ),
			),
			'subtitle' => esc_html__( 'Manage the meta type for posts', 'hub' ),
			'default'  => 'tags',
			'required' => array(
				'blog-show-meta',
				'equals',
				'yes'
			)
		),
		array(
			'id'    => 'category-blog-one-category',
			'type'	=> 'button_set',
			'title' => esc_html__( 'Single Category', 'hub' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'hub' ),
				'no' => esc_html__( 'No', 'hub' ),
			),
			'default'  => 'yes',
			'required' => array(
				'blog-meta-type',
				'equals',
				'cats'
			)	
		),
		array(
			'id'       => 'category-blog-excerpt-length',
			'type'     => 'text',
			'title'    => esc_html__( 'Default Blog Excerpt Length', 'hub' ),
			'validate' => 'numeric',
			'default'  => '20',
		),

	)
);

//Tag Archive Options
$this->sections[] = array(
	'title'      => esc_html__( 'Blog Tag Page', 'hub' ),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'tag-title-bar-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Blog Tag Page Title Bar', 'hub' ),
			'subtitle' => esc_html__( 'Display the title on blog tag pages.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'       => 'tag-title-bar-heading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Blog Tag Page Title', 'hub' ),
			'desc'     => esc_html__( '[ld_tag_title] shortcode displays the corresponding the category title, any text can be added before or after the shortcode.', 'hub' ),
			'subtitle' => esc_html__( 'Manage the title of blog tag pages.', 'hub' ),
			'default'  => ''
		),
		array(
			'id'       => 'tag-title-bar-subheading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Blog Tag Page Subtitle', 'hub' ),
			'subtitle' => esc_html__( 'Manage the subtitle of blog category pages.', 'hub' )
		),
		array(
			'id'      => 'tag-blog-style',
			'type'    => 'select',
			'title'   => esc_html__( 'Style', 'hub' ),
			'options' => array(
				'style01' => esc_html__( 'Style 1', 'hub' ),
				'style02' => esc_html__( 'Style 2', 'hub' ),
				'style02-alt' => esc_html__( 'Style 2 Alt', 'hub' ),
				'style03' => esc_html__( 'Style 3', 'hub' ),
				'style04' => esc_html__( 'Style 4', 'hub' ),
				'style05' => esc_html__( 'Style 05', 'hub' ),
				'style06' => esc_html__( 'Style 06', 'hub' ),
				'style07' => esc_html__( 'Style 07', 'hub' ),
				'style08' => esc_html__( 'Style 08', 'hub' ),
				'style09' => esc_html__( 'Style 09', 'hub' ),
				'style10' => esc_html__( 'Style 10', 'hub' ),
				'style11' => esc_html__( 'Style 11', 'hub' ),
				'style12' => esc_html__( 'Style 12', 'hub' ),
				'style13' => esc_html__( 'Style 13', 'hub' ),
				'style14' => esc_html__( 'Style 14', 'hub' ),
				'style15' => esc_html__( 'Style 15', 'hub' ),
				'style16' => esc_html__( 'Style 16', 'hub' ),
				'style17' => esc_html__( 'Style 17', 'hub' ),
				'style18' => esc_html__( 'Style 18', 'hub' ),
				'style19' => esc_html__( 'Style 19', 'hub' ),
				'style20' => esc_html__( 'Style 20', 'hub' ),
				'style21' => esc_html__( 'Style 21', 'hub' ),
				'style22' => esc_html__( 'Style 22', 'hub' ),
				'style23' => esc_html__( 'Style 23', 'hub' ),
			),
			'subtitle' => esc_html__( 'Choose a post style for your blog category pages.', 'hub' ),
			'default'  => 'style22'
		),
		array(
			'id'      => 'blog-tag-columns',
			'type'    => 'select',
			'title'   => esc_html__( 'Columns', 'hub' ),
			'options' => array(
				'1'       => esc_html__( '1 Column', 'hub' ),
				'2'       => esc_html__( '2 Columns', 'hub' ),
				'3'       => esc_html__( '3 Columns', 'hub' ),
				'4'       => esc_html__( '4 Columns', 'hub' ),
			),
			'subtitle' => esc_html__( 'How many columns to show for your blog tag page.', 'hub' ),
			'default'  => '1'
		),
		array(
			'id'    => 'tag-blog-show-meta',
			'type'	=> 'button_set',
			'title' => esc_html__( 'Meta', 'hub' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'hub' ),
				'no' => esc_html__( 'No', 'hub' ),
			),
			'default'  => 'yes'
		),
		array(
			'id'    => 'tag-blog-meta-type',
			'type'  => 'select',
			'title' => esc_html__( 'Meta Type', 'hub' ),
			'options' => array(
				'tags' => esc_html__( 'Tags', 'hub' ),
				'cats' => esc_html__( 'Categories', 'hub' ),
			),
			'subtitle' => esc_html__( 'Manage the meta type for posts', 'hub' ),
			'default'  => 'tags',
			'required' => array(
				'blog-show-meta',
				'equals',
				'yes'
			)
		),
		array(
			'id'    => 'tag-blog-one-category',
			'type'  => 'select',
			'title' => esc_html__( 'Single Category', 'hub' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'hub' ),
				'no' => esc_html__( 'No', 'hub' ),
			),
			'default'  => 'yes',
			'required' => array(
				'blog-meta-type',
				'equals',
				'cats'
			)	
		),
		array(
			'id'       => 'tag-blog-excerpt-length',
			'type'     => 'text',
			'title'    => esc_html__( 'Default Blog Excerpt Length', 'hub' ),
			'validate' => 'numeric',
			'default'  => '20',
		),

	)
);

//Author Archive Options
$this->sections[] = array(
	'title'      => esc_html__( 'Blog Author Page', 'hub' ),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'author-title-bar-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Blog Author Page Title Bar', 'hub' ),
			'subtitle' => esc_html__( 'Display the title bar on blog author pages.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'       => 'author-title-bar-heading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Blog Author Page Title', 'hub' ),
			'desc'     => esc_html__( '[ld_author] shortcode displays the corresponding the author name, any text can be added before or after the shortcode.', 'hub' ),
			'subtitle' => esc_html__( 'Manage the title of blog author page title.', 'hub' ),
			'default'  => ''
		),
		array(
			'id'       => 'author-title-bar-subheading',
			'type'	   => 'text',
			'title'    => esc_html__( 'Blog Author Page Subtitle', 'hub' ),
			'subtitle' => esc_html__( 'Manages the subtitle of blog author pages.', 'hub' )
		),
		array(
			'id'      => 'author-blog-style',
			'type'    => 'select',
			'title'   => esc_html__( 'Post Style', 'hub' ),
			'options' => array(
				'style01' => esc_html__( 'Style 1', 'hub' ),
				'style02' => esc_html__( 'Style 2', 'hub' ),
				'style02-alt' => esc_html__( 'Style 2 Alt', 'hub' ),
				'style03' => esc_html__( 'Style 3', 'hub' ),
				'style04' => esc_html__( 'Style 4', 'hub' ),
				'style05' => esc_html__( 'Style 5', 'hub' ),
				'style06' => esc_html__( 'Style 6', 'hub' ),
				'style07' => esc_html__( 'Style 7', 'hub' ),
				'style08' => esc_html__( 'Style 8', 'hub' ),
				'style09' => esc_html__( 'Style 9', 'hub' ),
				'style10' => esc_html__( 'Style 10', 'hub' ),
				'style11' => esc_html__( 'Style 11', 'hub' ),
				'style12' => esc_html__( 'Style 12', 'hub' ),
				'style13' => esc_html__( 'Style 13', 'hub' ),
				'style14' => esc_html__( 'Style 14', 'hub' ),
				'style15' => esc_html__( 'Style 15', 'hub' ),
				'style16' => esc_html__( 'Style 16', 'hub' ),
				'style17' => esc_html__( 'Style 17', 'hub' ),
				'style18' => esc_html__( 'Style 18', 'hub' ),
				'style19' => esc_html__( 'Style 19', 'hub' ),
				'style20' => esc_html__( 'Style 20', 'hub' ),
				'style21' => esc_html__( 'Style 21', 'hub' ),
				'style22' => esc_html__( 'Style 22', 'hub' ),
				'style23' => esc_html__( 'Style 23', 'hub' ),
			),
			'subtitle' => esc_html__( 'Choose the post style for your blog author pages.', 'hub' ),
			'default'  => 'style22'
		),
		array(
			'id'      => 'blog-author-columns',
			'type'    => 'select',
			'title'   => esc_html__( 'Columns', 'hub' ),
			'options' => array(
				'1'       => esc_html__( '1 Column', 'hub' ),
				'2'       => esc_html__( '2 Columns', 'hub' ),
				'3'       => esc_html__( '3 Columns', 'hub' ),
				'4'       => esc_html__( '4 Columns', 'hub' ),
			),
			'subtitle' => esc_html__( 'How many columns to show for your blog author page.', 'hub' ),
			'default'  => '1'
		),
		array(
			'id'    => 'author-blog-show-meta',
			'type'	=> 'button_set',
			'title' => esc_html__( 'Meta', 'hub' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'hub' ),
				'no' => esc_html__( 'No', 'hub' ),
			),
			'subtitle' => esc_html__( 'Manage the meta for posts', 'hub' ),
			'default'  => 'yes'
		),
		array(
			'id'    => 'author-blog-meta-type',
			'type'  => 'select',
			'title' => esc_html__( 'Meta Type', 'hub' ),
			'options' => array(
				'tags' => esc_html__( 'Tags', 'hub' ),
				'cats' => esc_html__( 'Categories', 'hub' ),
			),
			'default'  => 'tags',
			'required' => array(
				'blog-show-meta',
				'equals',
				'yes'
			)
		),
		array(
			'id'    => 'author-blog-one-category',
			'type'  => 'select',
			'title' => esc_html__( 'Single Category', 'hub' ),
			'options' => array(
				'yes' => esc_html__( 'Yes', 'hub' ),
				'no' => esc_html__( 'No', 'hub' ),
			),
			'default'  => 'yes',
			'required' => array(
				'blog-meta-type',
				'equals',
				'cats'
			)	
		),
		array(
			'id'       => 'author-blog-excerpt-length',
			'type'     => 'text',
			'title'    => esc_html__( 'Default Blog Excerpt Length', 'hub' ),
			'validate' => 'numeric',
			'default'  => '20',
		),

	)
);

$this->sections[] = array(
	'title'      => esc_html__('Blog Single Post', 'hub'),
	'subsection' => true,
	'fields'     => array(

		array(
			'id'      => 'post-style',
			'type'    => 'select',
			'title'   => esc_html__( 'Single Post Style', 'hub' ),
			'options' => array(
				'default'            => esc_html__( 'Default', 'hub' ),
				'modern'             => esc_html__( 'Modern', 'hub' ),
				'modern-full-screen' => esc_html__( 'Modern Full Screen', 'hub' ),
				'minimal'            => esc_html__( 'Minimal', 'hub' ),
				'overlay'            => esc_html__( 'Overlay', 'hub' ),
				'dark'               => esc_html__( 'Dark', 'hub' ),
				'classic'            => esc_html__( 'Classic', 'hub' ),
				'wide'               => esc_html__( 'Wide', 'hub' ),
			),
			'default' => 'classic'
		),
		array(
			'id'       => 'post-titlebar-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Page Title Bar', 'hub' ),
			'subtitle' => esc_html__( 'Display title bar on single posts', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default' => 'off'
		),
		$single_typography,
		array(
			'id'       => 'post-social-box-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Social Sharing', 'hub' ),
			'subtitle' => esc_html__( 'Display the social sharing box on single post pages.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'       => 'post-author-box-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Author Meta', 'hub' ),
			'subtitle' => esc_html__( 'Switch on to display the author info box on single post pages.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'       => 'post-author-role-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Author Role', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to display the author role in info box below posts.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => ''
		),
		array(
			'id'       => 'post-navigation-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Neighbour Posts', 'hub' ),
			'subtitle' => esc_html__( 'Switch on to display the previous post and next post on single post pages.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'id'       => 'blog-archive-link',
			'type'     => 'text',
			'title'    => esc_html__( 'Blog Archive URL', 'hub' ),
			'desc'     => esc_html__( 'Custom link to post on navigation to link to the default blog archive', 'hub' ),
			'validate' => 'url',
			'required' => array(
				'post-navigation-enable',
				'equals',
				'on'
			)
		),
		array(
			'id'       => 'post-related-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Related Posts', 'hub' ),
			'subtitle' => esc_html__( 'Display the related posts on single posts.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => 'on'
		),
		array(
			'type'     => 'text',
			'id'       => 'post-related-title',
			'title'    => esc_html__( 'Title of Related Posts', 'hub' ),
			'default'  => 'You may also like',
			'required' => array(
				'post-related-enable',
				'equals',
				'on'
			)
		),
		array(
			'type'     => 'slider',
			'id'       => 'post-related-number',
			'title'    => esc_html__( 'Related Posts Quantity', 'hub' ),
			'subtitle' => esc_html__( 'Quantity of projects those display on related posts section.', 'hub' ),
			'default'  => 2,
			'max'      => 100,
			'required' => array(
				'post-related-enable',
				'equals',
				'on'
			)
		)
	)
);
