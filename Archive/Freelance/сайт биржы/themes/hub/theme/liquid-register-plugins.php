<?php
/**
 * LiquidThemes Theme Framework
 * Include the TGM_Plugin_Activation class and register the required plugins.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 */

liquid()->load_library( 'class-tgm-plugin-activation' );

/**
 * Register the required plugins for this theme.
 */
add_action( 'tgmpa_register', '_s_register_required_plugins' );

function _s_register_required_plugins() {

	$images = get_template_directory_uri() . '/theme/plugins/images';

	$plugins = array(

		array(
			'name' 		         => esc_html__( 'Hub Core', 'hub' ),
			'slug' 		         => 'hub-core',
			'required' 	         => true,
			'source'             => 'http://api.liquid-themes.com/download.php?type=plugins&file=hub-core.zip',
			'liquid_logo'        => $images . '/one-core-min.png',
			'version'            => '1.5.0.2',
			'liquid_author'      => esc_html__( 'Liquid Themes', 'hub' ),
			'liquid_description' => esc_html__( 'Intelligent and Powerful Elements Plugin, exclusively for Hub WordPress Theme.', 'hub' ),
		),
		array(
			'name' 		         => esc_html__( 'Hub Portfolio', 'hub' ),
			'slug' 		         => 'hub-portfolio',
			'required' 	         => true,
			'source'             => 'http://api.liquid-themes.com/download.php?type=plugins&file=hub-portfolio.zip',
			'liquid_logo'        => $images . '/one-pf-min.png',
			'version'            => '1.0',
			'liquid_author'      => esc_html__( 'Liquid Themes', 'hub' ),
			'liquid_description' => esc_html__( 'Modern and Diversified Portfolio Plugin, exclusively Hub WordPress Theme.', 'hub' ),
		),
		array(
			'name' 		         => esc_html__( 'Liquid WPBakery Page Builder', 'hub' ),
			'slug' 		         => 'liquid_js_composer',			
			'required' 	         => true,
			'source'             => 'http://api.liquid-themes.com/download.php?type=plugins&file=liquid_js_composer.zip',
			'liquid_logo'        => $images . '/bakery-1.jpg',
			'version'            => '6.6.0',
			'liquid_author'      => 'Liquid WPbakery',
			'liquid_description' => esc_html__( 'A premium plugin bundled with the  HUB theme', 'hub' ),
		),
		array(
			'name'               => esc_html__( 'Elementor', 'hub' ),
			'slug'               => 'elementor',
			'required'           => true,
			'liquid_logo'        => $images . '/elementor.png',
			'liquid_author'      => esc_html__( 'Elementor.com', 'hub' ),
			'liquid_description' => esc_html__( 'Introducing a WordPress website builder, with no limits of design. A website builder that delivers high-end page designs and advanced capabilities, never before seen on WordPress.', 'hub' )
		),
		array(
			'name' 		         => esc_html__( 'Hub Elementor Addons', 'hub' ),
			'slug' 		         => 'hub-elementor-addons',
			'required' 	         => true,
			'source'             => 'http://api.liquid-themes.com/download.php?type=plugins&file=hub-elementor-addons.zip',
			'liquid_logo'        => $images . '/one-core-min.png',
			'version'            => '1.3.0.1',
			'liquid_author'      => esc_html__( 'Liquid Themes', 'hub' ),
			'liquid_description' => esc_html__( 'Hub Theme exclusively Elementor addons.', 'hub' ),
		),
        array(
			'name'               => esc_html__( 'Liquid GDPR Box', 'hub' ),
			'slug'               => 'liquid-gdpr',
			'required'           => false,
			'source'             => 'http://api.liquid-themes.com/download.php?type=plugins&file=liquid-gdpr.zip',
			'liquid_logo'        => $images . '/cf-7-min.png',
			'version'            => '1.0.2',
			'liquid_author'      => 'LiquidThemes',
			'liquid_description' => esc_html__( 'Liquid GDPR box', 'hub' )
		),
        array(
			'name'               => esc_html__( 'Slider Revolution', 'hub' ),
			'slug'               => 'revslider',
			'required'           => false,
			'source'             => 'http://api.liquid-themes.com/download.php?type=plugins&file=revslider.zip',
			'liquid_logo'        => $images . '/rev-slider-min.png',
			'version'            => '6.5.8',
			'liquid_author'      => 'ThemePunch',
			'liquid_description' => esc_html__( 'Premium responsive slider', 'hub' )
		),
        array(
			'name'               => esc_html__( 'Contact Form 7', 'hub' ),
			'slug'               => 'contact-form-7',
			'required'           => false,
			'liquid_logo'        => $images . '/cf-7-min.png',
			'liquid_author'      => esc_html__( 'Takayuki Miyoshi', 'hub' ),
			'liquid_description' => esc_html__( 'Contact Form 7 can manage multiple contact forms, plus you can customize the form and the mail contents flexibly with simple markup.', 'hub' )
		),
		array(
			'name'               => esc_html__( 'WooCommerce', 'hub' ),
			'slug'               => 'woocommerce',
			'required'           => false,
			'liquid_logo'        => $images . '/woo-min.png',
			'liquid_author'      => esc_html__( 'Automattic', 'hub' ),
			'liquid_description' => esc_html__( 'WooCommerce is the world’s most popular open-source eCommerce solution.', 'hub' )
		),
	);

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
	);

	tgmpa( $plugins, $config );
}