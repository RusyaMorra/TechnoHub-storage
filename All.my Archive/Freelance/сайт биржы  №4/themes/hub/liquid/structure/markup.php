<?php
/**
 * LiquidThemes Theme Framework
 */

if( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly


/**
 * [liquid_attributes_head description]
 * @method liquid_attributes_head
 * @param  [type]                $attributes [description]
 * @return [type]                            [description]
 */
add_filter( 'liquid_attr_head', 'liquid_attributes_head' );
function liquid_attributes_head( $attributes ) {

	unset( $attributes['class'] );
	if ( ! is_front_page() ) {
		return $attributes;
	}

	$attributes['itemscope'] = 'itemscope';
	$attributes['itemtype']  = 'http://schema.org/WebSite';

	return $attributes;
}

/**
 * [liquid_attributes_body description]
 * @method liquid_attributes_body
 * @param  [type]                $attributes [description]
 * @return [type]                            [description]
 */
add_filter( 'liquid_attr_body', 'liquid_attributes_body' );
function liquid_attributes_body( $attributes ) {
	
	unset( $attributes['class'] );
	$attributes['dir']       = is_rtl() ? 'rtl' : 'ltr';
	$attributes['itemscope'] = 'itemscope';
	$attributes['itemtype']  = 'http://schema.org/WebPage';	
	
	$media_mobile_nav = liquid_helper()->get_option( 'media-mobile-nav' );
	$attributes['data-mobile-nav-breakpoint'] = !empty( $media_mobile_nav ) ? $media_mobile_nav : '1200';
	
	$local_scroll_speed = liquid_helper()->get_option( 'pagescroll-speed' );
	$local_scroll_offset = liquid_helper()->get_option( 'pagescroll-offset' );
	if( !empty( $local_scroll_speed ) ) {
		$attributes['data-localscroll-speed'] = $local_scroll_speed;
	}
	if( !empty( $local_scroll_offset ) ) {
		$attributes['data-localscroll-offset'] = $local_scroll_offset;
	}
	
	if ( is_singular( 'post' ) || is_home() || is_archive() ) {
		$attributes['itemtype'] = 'http://schema.org/Blog';
	}

	if ( is_search() ) {
		$attributes['itemtype'] = 'http://schema.org/SearchResultsPage';
	}

	return $attributes;
}

/**
 * [liquid_attributes_menu description]
 * @method liquid_attributes_menu
 * @return [type]                [description]
 */
add_filter( 'liquid_attr_menu', 'liquid_attributes_menu' );
function liquid_attributes_menu( $attributes ) {

	if ( $attributes['location'] ) {

		$menu_name = liquid_helper()->get_menu_location_name( $attributes['location'] );

		if ( $menu_name ) {
			// Translators: The %s is the menu name. This is used for the 'aria-label' attribute.
			$attributes['aria-label'] = esc_attr( sprintf( esc_html_x( '%s', 'nav menu aria label', 'hub' ), $menu_name ) );
		}
	}
	unset( $attributes['location'] );

	$attributes['itemscope']  = 'itemscope';
	$attributes['itemtype']   = 'http://schema.org/SiteNavigationElement';

	return $attributes;
}


/**
 * [liquid_attributes_content description]
 * @method liquid_attributes_content
 * @param  [type]                   $attributes [description]
 * @return [type]                               [description]
 */
add_filter( 'liquid_attr_content', 'liquid_attributes_content' );
function liquid_attributes_content( $attributes ) {

	$attributes['id'] = 'lqd-site-content';

	$post_ids = get_the_ID(); 
	$post_types = get_post_type( $post_ids );

	if ( (class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION')) && ( $post_types === 'post' || $post_types === 'page' || $post_types === 'liquid-portfolio' ) ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( $post_ids );
		$enabled_liquid_bg = $page_settings_model->get_settings( 'page_enable_liquid_bg' );
		$liquid_bg_header_interact = $page_settings_model->get_settings( 'page_liquid_bg_interact' );
		//Stack enable
		$enabled_stack = $page_settings_model->get_settings( 'page_enable_stack' );
		$enabled_stack_mobile = $page_settings_model->get_settings( 'page_enable_stack_mobile' );
		$stack_nav = $page_settings_model->get_settings( 'page_stack_nav' );
		$stack_prevnext = $page_settings_model->get_settings( 'page_stack_nav_prevnextbuttons' );
		$stack_numbers = $page_settings_model->get_settings( 'page_stack_numbers' );
		$stack_effect = $page_settings_model->get_settings( 'page_stack_effect' );
	} else {
		$enabled_liquid_bg = liquid_helper()->get_option( 'page-enable-liquid-bg' );
		$liquid_bg_header_interact = liquid_helper()->get_option( 'page-liquid-bg-interact' );
		//Stack enable
		$enabled_stack  = liquid_helper()->get_option( 'page-enable-stack' );
		$enabled_stack_mobile  = liquid_helper()->get_option( 'page-enable-stack-mobile' );
		$stack_nav      = liquid_helper()->get_option( 'page-stack-nav' );
		$stack_prevnext = liquid_helper()->get_option( 'page-stack-nav-prevnextbuttons' );
		$stack_numbers  = liquid_helper()->get_option( 'page-stack-numbers' );
		$stack_effect   = liquid_helper()->get_option( 'page-stack-effect' );
	}

	//Fullpage enable
	$enabled_fullpage = liquid_helper()->get_option( 'enable-fullpage' );
	if( 'on' === $enabled_fullpage ) {
		$attributes['data-enable-fullpage'] = true;
	}
	
	$stack_opts = array();

	if( 'on' === $enabled_stack ) {
		$attributes['data-liquid-stack'] = true;
		$stack_opts['navigation']        = ( 'on' == $stack_nav ) ? true : false;
		$stack_opts['prevNextButtons']   = ( 'on' == $stack_prevnext ) ? true : false;
		$stack_opts['pageNumber']        = ( 'on' == $stack_numbers ) ? true : false;
		$stack_opts['prevNextLabels']    = array( 'prev' => esc_html__( 'Previous', 'hub' ), 'next' => esc_html__( 'Next', 'hub' ) );
		$stack_opts['effect'] = !empty( $stack_effect ) ? $stack_effect : 'fadeScale';
		$stack_opts['disableOnMobile']   = ( 'on' == $enabled_stack_mobile ) ? false : true;
		
		$attributes['data-stack-options'] = wp_json_encode( $stack_opts );
	}

	if( 'on' === $enabled_liquid_bg ) {
		$attributes['data-liquid-bg'] = true;
		$liquid_bg_options['interactWithHeader'] = ( 'on' == $liquid_bg_header_interact ) ? true : false;

		$attributes['data-liquid-bg-options'] = wp_json_encode( $liquid_bg_options );
	}

	//Fullpage enable parallax	
	$enabled_fullpage_parallax = liquid_helper()->get_option( 'enable-fullpage-parallax' );
	if( 'on' === $enabled_fullpage_parallax ) {
		$attributes['data-fullpage-parallax'] = true;
	}

	if ( ! is_singular( 'post' ) && ! is_home() && ! is_archive() ) {}

	return $attributes;

}
/**
 * [liquid_attributes_content description]
 * @method liquid_attributes_content
 * @param  [type]                   $attributes [description]
 * @return [type]                               [description]
 */
add_filter( 'liquid_attr_contents_wrap', 'liquid_attributes_contents_wrap' );
function liquid_attributes_contents_wrap( $attributes ) {

	$attributes['id']    = 'lqd-contents-wrap';
	$attributes['class'] = '';

	return $attributes;

}
