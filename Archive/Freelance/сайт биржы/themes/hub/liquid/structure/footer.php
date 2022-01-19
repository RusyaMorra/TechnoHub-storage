<?php
/**
 * Liquid Themes Theme Framework
 */

if( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

/**
 * Table of content
 *
 * 1. Hooks
 * 2. Functions
 * 3. Template Tags
 */

// 1. Hooks ------------------------------------------------------
//

/**
 * [liquid_output_space_body description]
 * @method liquid_output_space_body
 * @return [type]                  [description]
 */
add_action( 'wp_footer', 'liquid_output_space_body', 999 );
function liquid_output_space_body() {

	echo liquid_helper()->get_theme_option( 'space_body' );
}

/**
 * [liquid_attributes_footer description]
 * @method liquid_attributes_footer
 * @param  [type]                  $attributes [description]
 * @return [type]                              [description]
 */
add_filter( 'liquid_attr_footer', 'liquid_attributes_footer' );
function liquid_attributes_footer( $attributes ) {

	$enabled_fullpage = liquid_helper()->get_option( 'enable-fullpage' );
	if( 'on' === $enabled_fullpage ) {
		$attributes['class'] = !empty( $attributes['class'] ) ? 'main-footer site-footer section fp-auto-height-responsive fp-auto-height ' . $attributes['class'] : 'main-footer site-footer section fp-auto-height-responsive fp-auto-height' ;
	} else {
		$attributes['class'] = !empty( $attributes['class'] ) ? 'main-footer site-footer ' . $attributes['class'] : 'main-footer site-footer';	
	}

	$attributes['id'] = 'footer';
	$attributes['itemscope'] = 'itemscope';
	$attributes['itemtype']  = 'http://schema.org/WPFooter';
	
	global $post;
	
	// which one
	$id = liquid_get_custom_footer_id();

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( $id );

		$footer_fixed = $page_settings_model->get_settings( 'footer_fixed' );
		$footer_fixed_shadow = $page_settings_model->get_settings( 'footer_fixed_shadow' );
	} else {
		$footer_fixed = liquid_helper()->get_post_meta( 'footer-fixed', $id );
		$footer_fixed_shadow = liquid_helper()->get_post_meta( 'footer-fixed-shadow', $id );
	}
	
	if( 'on' === $footer_fixed ) {
		
		
		$attributes['data-sticky-footer']  = true;
		
		if( empty( $footer_fixed_shadow ) ) {
			$footer_fixed_shadow = '0';
		}
		
		$sticky_footer_opts = array( 'shadow' => $footer_fixed_shadow );
		
		if( 'on' === liquid_helper()->get_post_meta( 'footer-parallax', $id ) ) {
			$sticky_footer_opts['parallax'] = true;
		}
		
		$attributes['data-sticky-footer-options']  = wp_json_encode( $sticky_footer_opts );
		
	}

	return $attributes;

}

/**
 * [liquid_footer_backtotop description]
 * @method liquid_footer_backtotop
 * @return [type]                 [description]
 */
add_action( 'liquid_after_footer', 'liquid_footer_backtotop' );
function liquid_footer_backtotop() {
	
	$enable = liquid_helper()->get_theme_option( 'enable-go-top' );
	if( ! $enable ) {
		return;
	}
		
	$atts = array(
		'after'    => '</div>',
		'before'   => '<div class="local-scroll site-backtotop">',
		'href'     => '#wrap',
		'nofollow' => true,
		'text'     => esc_html__( 'Return to top of page', 'hub' ),
	);
	$atts = apply_filters( 'liquid_footer_backtotop_defaults', $atts );

	$nofollow = $atts['nofollow'] ? 'rel="nofollow"' : '';

	printf( '%s<a href="%s" %s>%s</a>%s', $atts['before'], esc_url( $atts['href'] ), $nofollow, $atts['text'], $atts['after'] );
}

// 2. Functions ------------------------------------------------------
//

/**
 * [liquid_get_custom_footer_id description]
 * @method liquid_get_custom_footer_id
 * @return [type]                     [description]
 */
function liquid_get_custom_footer_id() {

	// which one

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( get_the_ID() );

		$footer_template = $page_settings_model->get_settings( 'footer_template' );
		$footer_enable_switch = $page_settings_model->get_settings( 'footer_enable_switch' );

		$id = (!empty($footer_template) && $footer_enable_switch === 'on') ? $footer_template : liquid_helper()->get_option( 'footer-template' );
	} else {
		$id = liquid_helper()->get_option( 'footer-template' );
	}
	
	if( current_theme_supports( 'theme-demo' ) && !empty( $_GET['f'] ) ) {
		$id = $_GET['f'];
	}

	return $id;
}

/**
 * [liquid_print_custom_footer_css description]
 * @method liquid_print_custom_footer_css
 * @return [type]                        [description]
 */
add_action( 'wp_head', 'liquid_print_custom_footer_css', 1001 );
function liquid_print_custom_footer_css() {

	echo liquid_helper()->get_vc_custom_css( liquid_get_custom_footer_id() );
}

// 3. Template Tags --------------------------------------------------
//
