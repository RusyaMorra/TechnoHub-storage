<?php

function liquid_responsive_css() {
	
	$css = '';

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$max_media_mobile_nav = \Elementor\Core\Settings\Manager::get_settings_managers( 'general' )->get_model()->get_settings( 'viewport_tablet' );
		$max_media_mobile_nav = $max_media_mobile_nav ? $max_media_mobile_nav : 1024;
	} else {
		$max_media_mobile_nav = liquid_helper()->get_option( 'media-mobile-nav' );
		if( empty( $max_media_mobile_nav ) ) {
			$max_media_mobile_nav = 1199;
		}
	}
	$min_media_mobile_nav = $max_media_mobile_nav + 1;
	
	$site_layout = liquid_helper()->get_option( 'page-layout' );
	if( empty( $site_layout ) ) {
		$site_layout = 'wide';
	}
	$site_width  = liquid_helper()->get_option( 'site-width' );
	if( empty( $site_width ) ) {
		$site_width = 1170;
	}
	$site_width_media  = $site_width + 30;
	
	if( 'boxed' === $site_layout ) {
		$css = "@media screen and ( min-width: {$site_width_media}px ) {

					.is-stuck,
					.footer-stuck,
					#wrap {
						max-width: {$site_width}px;
						margin: 0 auto;
					}
					.main-header .container-fluid,
					.main-header .container,
					.container {
						width: 100%;
						max-width: 100%;
					}
					.main-footer .vc_row,
					.content .vc_row {
						padding-inline-start: 15px;
						padding-inline-end: 15px;
					}
				}";
	}
	else {
		$css = "@media screen and ( min-width: {$site_width_media}px ) {

					.main-header .container {
						max-width: {$site_width}px;
					}
					.container {
						width: {$site_width}px;
					}
				}";
	};

	//Return the arrary with styles to output
	return $css;
}