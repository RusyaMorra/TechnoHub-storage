<?php
/*
 * Portfolio Title Wrapper Section
 *
 * Available options on $section array:
 * separate_box (boolean) - separate metabox is created if true
 * box_title - title for separate metabox
 * title - section title
 * desc - section description
 * icon - section icon
 * fields - fields, @see https://docs.reduxframework.com/ for details
*/

$sections[] = array(
	'post_types' => array(),
	'title'      => esc_html__( 'Title Wrapper', 'hub' ),
	'icon'       => 'el-icon-cog',
	'fields'     => array(

		array(
			'id'       => 'title-bar-enable',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Title Wrapper', 'hub' ),
			'options'  => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default'  => '',
		),

		array(
			'id'    => 'title-bar-heading',
			'type'  => 'text',
			'title' => esc_html__( 'Custom Title', 'hub' ),
			'desc'  => esc_html__( 'If empty, will display default page/post title', 'hub' ),
		),
		
		array(
			'id'    => 'title-bar-heading-empty',
			'type'  => 'button_set',
			'title' => esc_html__( 'No heading', 'hub' ),
			'desc'  => esc_html__( 'Hide the default/custom page/post title in titlebar', 'hub' ),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),				
			),
			'default'  => 'off',
		),

		'title-bar-typography' => array(
			'id'          => 'title-bar-typography',
			'title'       => esc_html__( 'Title Bar Heading Typography', 'hub' ),
			'subtitle' => esc_html__( 'These settings control the typography for the titlebar heading', 'hub' ),
			'type'        => 'typography',
			'text-transform' => true,
			'letter-spacing' => true,
			'text-align'     => true,
			'compiler'       => true,
			'units'          => '%',
		),

		array(
			'id'       => 'title-bar-weight',
			'type'     => 'select',
			'title'    => esc_html__( 'Heading font Weight', 'hub' ),
			'options'  => array(
				''                => esc_html__( 'Default', 'hub' ),
				'weight-light'    => esc_html__( 'Light', 'hub' ),
				'weight-normal'   => esc_html__( 'Normal', 'hub' ),
				'weight-medium'   => esc_html__( 'Medium', 'hub' ),
				'weight-semibold' => esc_html__( 'Semibold', 'hub' ),
				'weight-bold'     => esc_html__( 'Bold', 'hub' ),
			),
		),

		array(
			'id'    => 'title-bar-subheading',
			'type'  => 'text',
			'title' => esc_html__( 'Sub-Heading', 'hub' )
		),

		'title-bar-subheading-typography' => array(
			'id'          => 'title-bar-subheading-typography',
			'title'       => esc_html__( 'Title Bar Subheading Typography', 'hub' ),
			'subtitle' => esc_html__( 'These settings control the typography for the titlebar subheading', 'hub' ),
			'type'        => 'typography',
			'text-transform' => true,
			'letter-spacing' => true,
			'text-align'     => true,
			'compiler'       => true,
			'units'          => '%',
		),

		array(
			'id'      => 'title-bar-content',
			'type'    => 'editor',
			'title'   => esc_html__( 'Content', 'hub' ),
			'default' => ''
		),
		
		array(
			'id'      => 'title-bar-content-style',
			'type'	  => 'select',
			'title'   => esc_html__( 'Content style', 'hub' ),
			'options' => array(
				''           => 'Default',
				'split'      => 'Split',
				'overlay'    => 'Overlay',
				'bottom'     => 'Bottom',
				'bottom-bar' => 'Bottom Bar'
			),
		),
		array(
			'id'       => 'title-bar-position',
			'type'     => 'select',
			'title'    => esc_html__( 'Title Bar content Vertical align', 'hub' ),
			'options'  => array(
				''                => esc_html__( 'Default', 'hub' ),
				'titlebar--content-top'     => esc_html__( 'Top', 'hub' ),
				'titlebar--content-bottom'     => esc_html__( 'Bottom', 'hub' ),
			),
			'required' => array(
				array( 'title-bar-content-style', '!=', 'overlay' ),
				array( 'title-bar-content-style', '!=', 'bottom-bar' ),
			),
		),

		array(
			'id'      => 'title-bar-nav',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Enable Portfolio Navigation', 'hub' ),
			'options' => array(
				'on'  => esc_html__( 'On', 'hub' ),
				''    => esc_html__( 'Default', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' ),
			),
			'default' => ''			
		),

		array(
			'id'      => 'title-bar-breadcrumb',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Enable Breadcrumbs', 'hub' ),
			'options' => array(
				'on'  => esc_html__( 'On', 'hub' ),
				''    => esc_html__( 'Default', 'hub' ),
				'off' => esc_html__( 'Off', 'hub' ),
			),
			'default' => ''	
		),

		array(
			'id'     => 'title-bar-breadcrumb-style',
			'type'	 => 'select',
			'title'  => esc_html__( 'Breadcrumb style', 'hub' ),
			'options' => array(
				''              => 'Default',
				'parallelogram' => 'Parallelogram',
			),
			'required' => array(
				'title-bar-breadcrumb',
				'!=',
				'off'
			),
			'default' => 'off'
		),

		array(
			'id'       => 'title-bar-size',
			'type'     => 'select',
			'title'    => esc_html__( 'Title size', 'hub' ),
			'options'  => array(
				''      => 'Default',
				'xxxsm' => 'xxxSmall',
				'xxsm'  => 'xxSmall',
				'xsm'   => 'xSmall',
				'sm'    => 'Small',
				'md'    => 'Medium',
				'lg'    => 'Large',
				'xlg'   => 'xLarge'
			),
			'default'   => 'xlg'
		),

		array(
			'id'       => 'title-bar-height',
			'type'     => 'select',
			'title'    => esc_html__( 'Title bar height', 'hub' ),
			'options'  => array(
				''      => 'Default',
				'np'    => 'No Paddings',
				'full'  => 'Full Height',
				'xxxsm' => 'xxxSmall',
				'xxsm'  => 'xxSmall',
				'xsm'   => 'xSmall',
				'sm'    => 'Small',
				'md'    => 'Medium',
				'md2'   => 'Medium2',
				'lg'    => 'Large',
				'lg2'   => 'Large2',
				'xlg'   => 'xLarge',
				'xxlg'  => 'xxLarge',
				'xxxlg' => 'xxxLarge'
			)
		),

		array(
			'id'       => 'title-bar-scheme',
			'type'     => 'select',
			'title'    => esc_html__( 'Color scheme', 'hub' ),
			'options'  => array(
				'text-dark'  => 'Dark',
				'text-white' => 'Light'
			),
			'default'  => 'xlg'
		),

		array(
			'id'       => 'title-bar-align',
			'type'     => 'select',
			'title'    => esc_html__( 'Alignment', 'hub' ),
			'options'  => array(
				'text-left'   => 'Left',
				'text-center' => 'Center',
				'text-right'  => 'Right'
			),
			'default'  => 'xlg'
		),

		array(
			'id'       => 'title-background-type',
			'type'     => 'select',
			'title'    => esc_html__( 'Background Type', 'hub' ),
			'options'  => array(
				'solid'    => 'Solid',
				'gradient' => 'Gradient',
				'image'    => 'Image'
			)
		),

		array(
			'id'       => 'title-bar-bg',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Background', 'hub' ),
			'required' => array(
				'title-background-type',
				'equals',
				'image'
			),
		),
		
		array(
			'id'       => 'title-bar-bg-attachment',
			'type'     => 'select',
			'title'    => esc_html__( 'Background Attachment', 'hub' ),
			'options'  => array(
				'scroll'  => esc_html__( 'Default', 'hub' ),
				'fixed'   => esc_html__( 'Fixed', 'hub' ),
				'inherit' => esc_html__( 'Inherit', 'hub' ),
			),
			'required' => array(
				'title-background-type',
				'equals',
				'image'
			),
		),
		
		array(
			'id'       => 'title-bar-parallax',
			'type'	   => 'button_set',
			'title'    => esc_html__( 'Enable Parallax?', 'hub' ),
			'required' => array(
				'title-background-type',
				'equals',
				'image'
			),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => 'off',
		),

		array(
			'id'       => 'title-bar-solid',
			'type'     => 'color',
			'url'      => true,
			'title'    => esc_html__( 'Background', 'hub' ),
			'required' => array(
				'title-background-type',
				'equals',
				'solid'
			),
		),

		array(
			'id'       => 'title-bar-gradient',
			'type'     => 'gradient',
			'url'      => true,
			'title'    => esc_html__( 'Background', 'hub' ),
			'required' => array(
				'title-background-type',
				'equals',
				'gradient'
			),
		),
		
		array(
			'id'      => 'title-bar-overlay',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Overlay', 'hub' ),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub'  ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => '',
		),
		
		array(
			'id'       => 'title-bar-overlay-background-type',
			'type'     => 'select',
			'title'    => esc_html__( 'Overlay Type', 'hub' ),
			'options' => array(
				'color'    => 'Color',
				'gradient' => 'Gradient',
			),
			'required' => array(
				'title-bar-overlay',
				'!=',
				'off'
			),
		),

		array(
			'id'    => 'title-bar-overlay-solid',
			'type'  => 'color_rgba',
			'title' => esc_html__( 'Overlay Color', 'hub' ),
			'required' => array(
				'title-bar-overlay-background-type',
				'equals',
				'color'
			)
		),

		array(
			'id'       => 'title-bar-overlay-gradient',
			'type'     => 'gradient',
			'title'    => esc_html__( 'Overlay Gradient', 'hub' ),
			'required' => array(
				'title-bar-overlay-background-type',
				'equals',
				'gradient'
			)
		),

		array(
			'id'    =>'title-bar-classes',
			'type'  => 'text',
			'title' => esc_html__( 'Extra classes', 'hub' )
		),

		array(
			'id'      => 'title-bar-scroll',
			'type'	  => 'button_set',
			'title'   => esc_html__( 'Enable Scroll Button', 'hub' ),
			'options' => array(
				'on'   => esc_html__( 'On', 'hub' ),
				''     => esc_html__( 'Default', 'hub' ),
				'off'  => esc_html__( 'Off', 'hub' ),
			),
			'default' => '',
		),

		array(
			'id'       => 'title-bar-scroll-color',
			'type'     => 'color',
			'title'    => esc_html__( 'Scroll Button Color', 'hub' ),
			'subtitle' => esc_html__( 'Pick a color for scroll button', 'hub' ),
			'required' => array(
				'title-bar-scroll',
				'!=',
				'off'
			),
		),

		array(
			'id'       => 'title-bar-scroll-id',
			'type'     => 'text',
			'title'    => esc_html__( 'Anchor ID', 'hub' ),
			'subtitle' => esc_html__( 'Input anchor ID of the section for scroll button', 'hub' ),
			'required' => array(
				'title-bar-scroll',
				'!=',
				'off'
			),
		),

	), // #fields
);