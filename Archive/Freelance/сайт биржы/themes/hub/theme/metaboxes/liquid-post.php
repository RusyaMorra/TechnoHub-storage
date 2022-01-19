<?php
/**
 * Post
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
	'post_types' => array('post'),
	'title'      => esc_html__( 'Post Options', 'hub' ),
	'icon'       => 'el-icon-screen',
	'fields'     => array(

		array(
			'id'      => 'post-style',
			'type'    => 'select',
			'title'   => esc_html__( 'Single Post Style', 'hub' ),
			'options' => array(
				'default'            => esc_html__( 'Default', 'hub' ),
				'cover'              => esc_html__( 'Cover', 'hub' ),
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
			'id' => 'post-extra-text',
			'type' => 'textarea',
			'title' => esc_html__( 'Extra Text', 'hub' ),
			'subtitle' => esc_html__( 'Text will display near meta section', 'hub' ),
			'required' => array(
				'post-style',
				'equals',
				array( 'default', 'cover-spaced', 'modern' ),
			),
		),
		array(
			'id'      => 'liquid-post-slider',
			'type'    => 'gallery',
			'title'   => esc_html__( 'Add images for Cover slider', 'hub' ),
			'required' => array(
				'post-style',
				'equals',
				'slider'
			),
		),
		array(
			'id'      => 'liquid-post-cover-style-image',
			'type'    => 'background',
			'background-color' => false,
			'background-repeat' => false,
			'background-attachment' => false,
			'background-size' => false,
			'background-position' => false,
			'title'   => esc_html__( 'Cover Image', 'hub' ),
			'subtitle' => esc_html__( 'Will override the featured image in single post', 'hub' ),
		),
		array(
			'id'       => 'post-parallax-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Parallax', 'hub' ),
			'subtitle' => esc_html__( 'Turn on parallax effect on post featured image', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'required' => array(
				'post-style',
				'equals',
				array( 'modern', 'modern-full-screen', 'dark' ),
			),
			'default'  => ''
		),
		array(
			'id'       => 'post-social-box-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Social Sharing Box', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to display the social sharing box on single posts.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => ''
		),
		array(
			'id'       => 'post-author-meta-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Author Info Meta', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to display the author meta.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => ''
		),
		array(
			'id'       => 'post-author-box-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Author Info Box', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to display the author info box below posts.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => ''
		),
		array(
			'id'       => 'post-author-role-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Author Role', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to display the author role in info box below posts.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => ''
		),
		array(
			'id'       => 'post-navigation-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Previous/Next Pagination', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to display the previous/next post pagination for single posts.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => ''
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
			'subtitle' => esc_html__( 'Turn on to display related posts/projects on single posts.', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => ''
		),
		array(
			'id'       => 'post-related-style',
			'type'     => 'select',
			'title'    => esc_html__( 'Related posts section style', 'hub' ),
			'subtitle' => esc_html__( 'Select desired style for the related posts section to display on single post', 'hub' ),
			'options'  => array(
				'style-1'   => esc_html__( 'Style 1', 'hub' ),
				'style-2'   => esc_html__( 'Style 2', 'hub' ),
				'style-3'   => esc_html__( 'Style 3', 'hub' ),
			),
			'required' => array(
				'post-related-enable',
				'!=',
				'off'
			)
		),
		array(
			'type'     => 'text',
			'id'       => 'post-related-title',
			'title'    => esc_html__( 'Related posts section title', 'hub' ),
			'required' => array(
				'post-related-enable',
				'!=',
				'off'
			)
		),
		array(
			'type'     => 'slider',
			'id'       => 'post-related-number',
			'title'    => esc_html__( 'Number of Related Projects', 'hub' ),
			'subtitle' => esc_html__( 'Controls the number of posts that display under related posts section.', 'hub' ),
			'default'  => 2,
			'min'      => 2,
			'max'      => 4,
			'required' => array(
				'post-related-enable',
				'!=',
				'off'
			)
		),
		array(
			'type'     => 'text',
			'id'       => 'liquid-read-min-label',
			'title'    => esc_html__( 'Label Read Time', 'hub' ),
			'subtitle' => esc_html__( 'Will display the text about time needs to read the article', 'hub' ),
		),
		
		array(
			'id'       => 'post-floating-box-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Floating Box', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to display floating box with share social links and admin info', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => ''
		),
		array(
			'id'       => 'post-floating-box-social-style',
			'type'     => 'select',
			'title'    => esc_html__( 'Floating Box Social Style', 'hub' ),
			'options'  => array(
				'default'           => esc_html__( 'Default', 'hub' ),
				'with-text-outline' => esc_html__( 'Outline Text', 'hub' ),
			),
			'required' => array(
				'post-floating-box-enable',
				'!=',
				'off'
			)
		),
		array(
			'id'       => 'post-floating-box-author-enable',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Floating Box Author', 'hub' ),
			'subtitle' => esc_html__( 'Turn on to display author info in floating box', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' )
			),
			'default'  => ''
		),
		
		
	)
);
