<?php
/*
 * Logo Section
*/

if ( class_exists( 'Liquid_Elementor_Addons' ) && defined( 'ELEMENTOR_VERSION' )){
	return;
}

$this->sections[] = array(
	'title'      => esc_html__( 'Logo', 'hub' ),
	'icon'  => 'el el-star',
	'fields'     => array(

		array(
			'id'       => 'logo-max-width',
			'type'     => 'text',
			'title'    => esc_html__( 'Maximum Logo Width', 'hub' ),
			'subtitle' => esc_html__( 'Define a maximum width for your logo, For instance, 120px', 'hub' )
		),
		array(
			'id'       => 'header-logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Default Logo', 'hub' ),
			'subtitle' => esc_html__( 'Select an image as your logo.', 'hub' ),
			'desc'     => wp_kses_post( __( 'Please, resize the SVG logo before to upload it. Use this <a target="_blank" href="https://www.iloveimg.com/resize-image/resize-svg">Online Resize Tool</a>', 'hub' ) )
		),
		array(
			'id'       => 'header-logo-retina',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Retina Default Logo', 'hub' ),
			'subtitle' => esc_html__( 'Select an image as a default logo for the retina supported devices. Default retina logo should be 2x the size of the default logo.', 'hub' ),
			'desc'     => esc_html__( 'SVG logo doesn\'t need retina version', 'hub' ),
		),
		array(
			'id'       => 'header-sticky-logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Sticky Header Logo', 'hub' ),
			'subtitle' => esc_html__( ' Select an image as your logo for sticky header.', 'hub' ),
		),
		array(
			'id'       => 'header-sticky-logo-retina',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Sticky Header Retina Logo', 'hub' ),
			'subtitle' => esc_html__( 'Select an image as a sticky header logo for the retina supported devices. Sticky menu retina default logo should be 2x the size of the logo.', 'hub' ),
		),
		array(
			'id'       => 'hover-header-logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Hover State of Logo', 'hub' ),
			'subtitle' => esc_html__( 'Select an image as your logo to display on hover of logo', 'hub' ),
		),
		array(
			'id'       => 'hover-header-logo-retina',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Hover State of Retina Default Logo', 'hub' ),
			'subtitle' => esc_html__( 'Select an image as a hover state of logo for the retina supported devices. Retina version should be 2x size.', 'hub' ),
		),
		array(
			'id'       => 'menu-logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Mobile Logo', 'hub' ),
			'subtitle' => esc_html__( 'Select the logo that will be displayed in the menu bar for mobile devices.', 'hub' ),
		),
		array(
			'id'       => 'menu-logo-retina',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Retina Mobile Logo', 'hub' ),
			'subtitle' => esc_html__( 'Select an image as a mobile default logo for the retina supported devices. Retina version should be 2x size.', 'hub' ),
		),
		array(
			'id'       => 'header-light-logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Light Logo', 'hub' ),
			'subtitle' => esc_html__( 'Upload or select an image as your light logo.', 'hub' ),
		),
		array(
			'id'       => 'header-light-logo-retina',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Retina Light Logo', 'hub' ),
			'subtitle' => esc_html__( 'Upload or select an image for the retina version of the light logo. It should be exactly 2x the size of the logo.', 'hub' ),
		),		

		array(
			'id'       => 'header-dark-logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Dark Logo', 'hub' ),
			'subtitle' => esc_html__( 'Upload or select an image as your dark logo.', 'hub' ),
		),
		array(
			'id'       => 'header-dark-logo-retina',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Retina Dark Logo', 'hub' ),
			'subtitle' => esc_html__( 'Upload or select an image for the retina version of the dark logo. It should be exactly 2x the size of the logo.', 'hub' ),
		),
		
		array(
			'id'       => 'favicon',
			'type'     => 'media',
			'title'    => esc_html__( 'Favicon', 'hub' ),
			'subtitle' => esc_html__( 'Select a favicon for your website (16px x 16px).', 'hub' )
		),

		array(
			'id'       => 'iphone_icon',
			'type'     => 'media',
			'title'    => esc_html__( 'Apple iPhone Icon', 'hub' ),
			'subtitle' => esc_html__( 'Select a favicon for Apple iPhone (57px x 57px).', 'hub' )
		),

		array(
			'id'       => 'iphone_icon_retina',
			'type'     => 'media',
			'title'    => esc_html__( 'Apple iPhone Retina Icon', 'hub' ),
			'subtitle' => esc_html__( 'Select a favicon for Apple iPhone Retina Version (114px x 114px).', 'hub' ),
			'required' => array(
				array( 'iphone_icon', '!=', '' ),
				array( 'iphone_icon', '!=', array( 'url'  => '' ) )
			)
		),

		array(
			'id'       => 'ipad_icon',
			'type'     => 'media',
			'title'    => esc_html__( 'Apple iPad Icon', 'hub' ),
			'subtitle' => esc_html__( 'Select a favicon for Apple iPad (72px x 72px).', 'hub' )
		),

		array(
			'id'       => 'ipad_icon_retina',
			'type'     => 'media',
			'title'    => esc_html__( 'Apple iPad Retina Icon', 'hub' ),
			'subtitle' => esc_html__( 'Select a favicon for Apple iPad Retina Version (144px x 144px).', 'hub' ),
			'required' => array(
				array( 'ipad_icon', '!=', '' ),
				array( 'ipad_icon', '!=', array( 'url'  => '' ) )
			)
		)

	)
);