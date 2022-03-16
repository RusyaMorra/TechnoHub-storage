<?php

/**
 * Format of the $css array:
 * $css['media-query']['element']['property'] = value
 *
 * If no media query is required then set it to 'global'
 *
 * If we want to add multiple values for the same property then we have to make it an array like this:
 * $css[media-query][element]['property'][] = value1
 * $css[media-query][element]['property'][] = value2
 *
 * Multiple values defined as an array above will be parsed separately.
 */
function liquid_dynamic_css_array() {

	$css = array();
	
	
	//Theme colors 
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

	$primary_color    = liquid_helper()->get_option( 'primary_ac_color' );
	$secondary_color  = liquid_helper()->get_option( 'secondary_ac_color' );
	$primary_gradient = liquid_helper()->get_option( 'primary_gradient_color' ); 

	$link_colors = liquid_helper()->get_option( 'links_color' );

	if( !empty( $primary_color ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--color-primary'] = $primary_color;
	}
	if( !empty( $secondary_color ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--color-secondary'] = $secondary_color;
	}
	
	if( isset( $primary_gradient['from'] ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--color-gradient-start'] = $primary_gradient['from'];
	}
	if( isset( $primary_gradient['to'] ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--color-gradient-stop'] = $primary_gradient['to'];
	}

	if( !empty( $link_colors['regular'] ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--color-link'] = $link_colors['regular'];
	}
	if( !empty( $link_colors['hover'] ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--color-link-hover'] = $link_colors['hover'];
	}
	
	$page_frame_v_color = liquid_helper()->get_option( 'page-frame-v-color' );
	
	//Custom Cursor css
	$cc_inner_size = liquid_helper()->get_option( 'cc-inner-size' );
	$cc_outer_size = liquid_helper()->get_option( 'cc-outer-size' );
	
	$inner_circle_bg              = liquid_helper()->get_theme_option( 'cc-inner-circle-bg' );
	$outer_circle_bg              = liquid_helper()->get_theme_option( 'cc-outer-circle-bg' );
	$active_outer_border_width    = liquid_helper()->get_theme_option( 'cc-outer-active-border-width' );
	$active_circle_color_bg       = liquid_helper()->get_theme_option( 'cc-active-circle-color-bg' );
	$active_circle_solid_color_txt = liquid_helper()->get_theme_option( 'cc-active-circle-solid-color-txt' );
	$active_circle_solid_color_bg = liquid_helper()->get_theme_option( 'cc-active-circle-solid-color-bg' );
	$active_arrow_color           = liquid_helper()->get_theme_option( 'cc-active-arrow-color' );
	
	if( !empty( $cc_inner_size ) && '7px' !== $cc_inner_size ) {
		
		$fraction = intval( $cc_inner_size ) / 2 ;
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-size-inner'] = $cc_inner_size;
	}
	if( !empty( $cc_outer_size ) && '35px' !== $cc_outer_size ) {
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-size-outer'] = $cc_outer_size;
	}
	if( !empty( $inner_circle_bg ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-bg'] = $inner_circle_bg;
	}
	if( !empty( $outer_circle_bg ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-bc'] = $outer_circle_bg;
	}
	if( !empty( $active_outer_border_width ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-active-bw'] = $active_outer_border_width;
	}
	if( !empty( $active_circle_color_bg ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-active-bg'] = $active_circle_color_bg;
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-active-bc'] = $active_circle_color_bg;
	}
	if( !empty( $active_circle_solid_color_txt ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-active-circle-txt'] = $active_circle_solid_color_txt;
	} else if ( empty( $active_circle_solid_color_txt ) && !empty( $active_circle_color_bg ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-active-circle-txt'] = $active_circle_color_bg;
	}
	if( !empty( $active_circle_solid_color_bg ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-active-circle-color'] = $active_circle_solid_color_bg;
	}
	if( !empty( $active_arrow_color ) ) {
		$css['global'][ liquid_implode( ':root' ) ]['--lqd-cc-active-arrow-color'] = $active_arrow_color;
	}

	if( !empty( $page_frame_v_color ) ) {
		$css['global'][ liquid_implode( '.lqd-page-frame[data-orientation=v]' ) ]['background'] = $page_frame_v_color;
		$css['global'][ liquid_implode( '.lqd-page-frame[data-orientation=h]' ) ]['background'] = $page_frame_v_color;
	}
	
	/**
	 * Preloader
	 */
	$preloader_bg         = liquid_helper()->get_option( 'preloader-color' );
	$preloader_bg_2       = liquid_helper()->get_option( 'preloader-color-2' );
	$preloader_elements   = liquid_helper()->get_option( 'preloader-elements-color' );
	$preloader_elements_2 = liquid_helper()->get_option( 'preloader-elements-color-2' );
	$preloader_style      = liquid_helper()->get_option( 'preloader-style' );
	
	if( 'curtain' === $preloader_style ) {
		if( !empty( $preloader_bg ) ) {
			$css['global'][ liquid_implode( '.lqd-preloader-curtain-front' ) ]['background'] = $preloader_bg;
		}
		if( !empty( $preloader_bg_2 ) ) {
			$css['global'][ liquid_implode( '.lqd-preloader-curtain-back' ) ]['background'] = $preloader_bg_2;
		}
	}
	elseif( 'sliding' === $preloader_style ) {
		if( !empty( $preloader_bg ) ) {
			$css['global'][ liquid_implode( '.lqd-preloader-sliding-el' ) ]['background'] = $preloader_bg;
		}
	}
	elseif( 'dissolve' === $preloader_style ) {
		if( !empty( $preloader_bg ) ) {
			$css['global'][ liquid_implode( '.lqd-preloader-dissolve-el' ) ]['background'] = $preloader_bg;
		}
	}
	else {
		if( !empty( $preloader_bg ) ) {
			$css['global'][ liquid_implode( '.lqd-preloader-wrap' ) ]['background'] = $preloader_bg;
		}		
	}
	if( !empty( $preloader_elements ) ) {
		$css['global'][ liquid_implode( '.lqd-preloader-dots-dot, .lqd-preloader-signal-circle' ) ]['background'] = $preloader_elements;
	}
	if( !empty( $preloader_elements_2 ) ) {
		$css['global'][ liquid_implode( '.lqd-spinner-circular circle' ) ]['background'] = $preloader_elements_2;
	}

	/**
	 * Body
	 */
	$backup_font = 'sans-serif'; 
	$not_defined_font_backup = 'inherit';

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ) {
		$not_defined_font_backup = '';	
	}
	 
	$body_typography = liquid_helper()->get_option( 'body_typography' );
	if( !empty( $body_typography['font-backup'] ) ) {
		$backup_font = $body_typography['font-backup'];
	}
	$css['global'][ liquid_implode( 'body' ) ] = array(
		'font-family'    => !empty( $body_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $body_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
		'font-weight'    => isset( $body_typography['font-weight'] ) ? intval( $body_typography['font-weight'] ) : '',
		'line-height'    => isset( $body_typography['line-height'] ) ? $body_typography['line-height'] : '',
		'text-transform' => isset( $body_typography['text-transform'] ) ? $body_typography['text-transform'] : '',
		'letter-spacing' => isset( $body_typography['letter-spacing'] ) ? $body_typography['letter-spacing'] : '',
		'font-style'     => ! empty( $body_typography['font-style'] ) ? esc_attr( $body_typography['font-style'] ) : '',
		'font-size'      => isset( $body_typography['font-size'] ) ? $body_typography['font-size'] : '',
		'color'          => isset( $body_typography['color'] ) ? $body_typography['color'] : '',	
	);
	
	/**
	 * Buttons
	 */
	$buttons_typography = liquid_helper()->get_option( 'buttons_typography' );
	if( !empty( $buttons_typography['font-backup'] ) ) {
		$backup_font = $buttons_typography['font-backup'];
	}
	$css['global'][ liquid_implode( '.btn' ) ] = array(
		'font-family'    => !empty( $buttons_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $buttons_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
		'font-weight'    => isset( $buttons_typography['font-weight'] ) ? intval( $buttons_typography['font-weight'] ) : '',
		'text-transform' => isset( $buttons_typography['text-transform'] ) ? $buttons_typography['text-transform'] : '',
		'line-height'    => isset( $buttons_typography['line-height'] ) ? $buttons_typography['line-height'] : '',
		'letter-spacing' => isset( $buttons_typography['letter-spacing'] ) ? $buttons_typography['letter-spacing'] : '',
		'font-style'     => ! empty( $buttons_typography['font-style'] ) ? esc_attr( $buttons_typography['font-style'] ) : '',
		'font-size'      => isset( $buttons_typography['font-size'] ) ? $buttons_typography['font-size'] : '',
		'color'          => isset( $buttons_typography['color'] ) ? $buttons_typography['color'] : '',	
	);

	$body_bg = liquid_helper()->get_option( 'body-background' );
	$body_bg_image = liquid_helper()->get_theme_option( 'body-background-image' );
	if( !empty( $body_bg ) ) {
		$css['global'][ liquid_implode( 'body' ) ]['background'] = $body_bg;
	}
	
	if( isset( $body_bg_image['background-color'] ) && ! empty( $body_bg_image['background-color'] ) ) {
		$css['global'][ liquid_implode( 'body' ) ]['background-color'] = $body_bg_image['background-color'];
	}	
	if( isset( $body_bg_image['background-image'] ) && ! empty( $body_bg_image['background-image'] ) ) {
		$css['global'][ liquid_implode( 'body' ) ]['background-image'] = 'url( ' . esc_url( $body_bg_image['background-image'] ) . ')';
	}	
	if( isset( $body_bg_image['background-repeat'] ) && ! empty( $body_bg_image['background-repeat'] ) ) {
		$css['global'][ liquid_implode( 'body' ) ]['background-repeat'] = $body_bg_image['background-repeat'];
	}	
	if( isset( $body_bg_image['background-size'] ) && ! empty( $body_bg_image['background-size'] ) ) {
		$css['global'][ liquid_implode( 'body' ) ]['background-size'] = $body_bg_image['background-size'];
	}
	if( isset( $body_bg_image['background-attachment'] ) && ! empty( $body_bg_image['background-attachment'] ) ) {
		$css['global'][ liquid_implode( 'body' ) ]['background-attachment'] = $body_bg_image['background-attachment'];
	}	
	if( isset( $body_bg_image['background-position'] ) && ! empty( $body_bg_image['background-position'] ) ) {
		$css['global'][ liquid_implode( 'body' ) ]['background-position'] = $body_bg_image['background-position'];
	}	

	/**
	 * Single Post Content
	 */
	$single_typography = liquid_helper()->get_option( 'single_typography' );
	if( !empty( $single_typography['font-backup'] ) ) {
		$backup_font = $single_typography['font-backup'];
	}
	$css['global'][ liquid_implode( '.lqd-post-content, .lqd-post-header .entry-excerpt' ) ] = array(
		'font-family'    => !empty( $single_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $single_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
		'font-weight'    => isset( $single_typography['font-weight'] ) ? intval( $single_typography['font-weight'] ) : '',
		'text-transform' => isset( $single_typography['text-transform'] ) ? $single_typography['text-transform'] : '',
		'line-height'    => isset( $single_typography['line-height'] ) ? $single_typography['line-height'] : '',
		'letter-spacing' => isset( $single_typography['letter-spacing'] ) ? $single_typography['letter-spacing'] : '',
		'font-style'     => ! empty( $single_typography['font-style'] ) ? esc_attr( $single_typography['font-style'] ) : '',
		'font-size'      => isset( $single_typography['font-size'] ) ? $single_typography['font-size'] : '',
		'color'          => isset( $single_typography['color'] ) ? $single_typography['color'] : '',	
	);

	/**
	 * Headings
	 */
	$enable_default_typo = liquid_helper()->get_option( 'typo-default-enable' );

	$typograpy_args = array(
		'h1' => array( 'h1', '.h1' ),
		'h2' => array( 'h2', '.h2' ),
		'h3' => array( 'h3', '.h3' ),
		'h4' => array( 'h4', '.h4' ),
		'h5' => array( 'h5', '.h5' ),
		'h6' => array( 'h6', '.h6' ),
	);
	
	// H1
	$h1_typography = liquid_helper()->get_option( 'h1_typography' );
	if( !empty( $h1_typography['font-backup'] ) ) {
		$backup_font = $h1_typography['font-backup'];
	}
	$css['global'][ liquid_implode( $typograpy_args['h1'] ) ] = array(
		'font-family'    => !empty( $h1_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h1_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
		'font-weight'    => isset( $h1_typography['font-weight'] ) ? intval( $h1_typography['font-weight'] ) : '',
		'line-height'    => isset( $h1_typography['line-height'] ) ? $h1_typography['line-height'] : '',
		'letter-spacing' => isset( $h1_typography['letter-spacing'] ) ? $h1_typography['letter-spacing'] : '',
		'text-transform' => isset( $h1_typography['text-transform'] ) ? $h1_typography['text-transform'] : '',
		'font-style'     => ! empty( $h1_typography['font-style'] ) ? esc_attr( $h1_typography['font-style'] ) : '',
		'font-size'      => isset( $h1_typography['font-size'] ) ? $h1_typography['font-size'] : '',
		'color'          => isset( $h1_typography['color'] ) ? $h1_typography['color'] : '',	
	);

	//H2
	$h2_typography = liquid_helper()->get_option( 'h2_typography' );
	if( 'on' === $enable_default_typo ) {
		if( !empty( $h1_typography['font-backup'] ) ) {
			$backup_font = $h1_typography['font-backup'];
		}
		$css['global'][ liquid_implode( $typograpy_args['h2'] ) ] = array(
			'font-family'    => !empty( $h1_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h1_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
			'font-weight'    => isset( $h1_typography['font-weight'] ) ? intval( $h1_typography['font-weight'] ) : '',
			'line-height'    => isset( $h2_typography['line-height'] ) ? $h2_typography['line-height'] : '',
			'text-transform' => isset( $h2_typography['text-transform'] ) ? $h2_typography['text-transform'] : '',
			'letter-spacing' => isset( $h2_typography['letter-spacing'] ) ? $h2_typography['letter-spacing'] : '',
			'font-style'     => ! empty( $h1_typography['font-style'] ) ? esc_attr( $h1_typography['font-style'] ) : '',
			'font-size'      => isset( $h2_typography['font-size'] ) ? $h2_typography['font-size'] : '',
			'color'          => isset( $h1_typography['color'] ) ? $h1_typography['color'] : '',
		);
	} else {
		if( !empty( $h2_typography['font-backup'] ) ) {
			$backup_font = $h2_typography['font-backup'];
		}
		$css['global'][ liquid_implode( $typograpy_args['h2'] ) ] = array(
			'font-family'    => !empty( $h2_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h2_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
			'font-weight'    => isset( $h2_typography['font-weight'] ) ? intval( $h2_typography['font-weight'] ) : '',
			'line-height'    => isset( $h2_typography['line-height'] ) ? $h2_typography['line-height'] : '',
			'text-transform' => isset( $h2_typography['text-transform'] ) ? $h2_typography['text-transform'] : '',
			'letter-spacing' => isset( $h2_typography['letter-spacing'] ) ? $h2_typography['letter-spacing'] : '',
			'font-style'     => ! empty( $h2_typography['font-style'] ) ? esc_attr( $h2_typography['font-style'] ) : '',
			'font-size'      => isset( $h2_typography['font-size'] ) ? $h2_typography['font-size'] : '',
			'color'           => isset( $h2_typography['color'] ) ? $h2_typography['color'] : '',
			
		);
	}

	// H3
	$h3_typography = liquid_helper()->get_option( 'h3_typography' );
	if( 'on' === $enable_default_typo ) {
		if( !empty( $h1_typography['font-backup'] ) ) {
			$backup_font = $h1_typography['font-backup'];
		}
		$css['global'][ liquid_implode( $typograpy_args['h3'] ) ] = array(
			'font-family'    => !empty( $h1_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h1_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
			'font-weight'    => isset( $h1_typography['font-weight'] ) ? intval( $h1_typography['font-weight'] ) : '',
			'line-height'    => isset( $h3_typography['line-height'] ) ? $h3_typography['line-height'] : '',
			'letter-spacing' => isset( $h3_typography['letter-spacing'] ) ? $h3_typography['letter-spacing'] : '',
			'text-transform' => isset( $h3_typography['text-transform'] ) ? $h3_typography['text-transform'] : '',
			'font-style'     => ! empty( $h1_typography['font-style'] ) ? esc_attr( $h1_typography['font-style'] ) : '',
			'font-size'      => isset( $h3_typography['font-size'] ) ? $h3_typography['font-size'] : '',
			'color'          => isset( $h1_typography['color'] ) ? $h1_typography['color'] : '',
		);
	} else {
		if( !empty( $h3_typography['font-backup'] ) ) {
			$backup_font = $h3_typography['font-backup'];
		}
		$css['global'][ liquid_implode( $typograpy_args['h3'] ) ] = array(
			'font-family'    => !empty( $h3_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h3_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
			'font-weight'    => isset( $h3_typography['font-weight'] ) ? intval( $h3_typography['font-weight'] ) : '',
			'line-height'    => isset( $h3_typography['line-height'] ) ? $h3_typography['line-height'] : '',
			'letter-spacing' => isset( $h3_typography['letter-spacing'] ) ? $h3_typography['letter-spacing'] : '',
			'text-transform' => isset( $h3_typography['text-transform'] ) ? $h3_typography['text-transform'] : '',
			'font-style'     => ! empty( $h3_typography['font-style'] ) ? esc_attr( $h3_typography['font-style'] ) : '',
			'font-size'      => isset( $h3_typography['font-size'] ) ? $h3_typography['font-size'] : '',
			'color'          => isset( $h3_typography['color'] ) ? $h3_typography['color'] : '',
		);
	}

	// H4
	$h4_typography = liquid_helper()->get_option( 'h4_typography' );
	if( 'on' === $enable_default_typo ) {
		if( !empty( $h1_typography['font-backup'] ) ) {
			$backup_font = $h1_typography['font-backup'];
		}
		$css['global'][ liquid_implode( $typograpy_args['h4'] ) ] = array(
			'font-family'    => !empty( $h1_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h1_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
			'font-weight'    => isset( $h1_typography['font-weight'] ) ? intval( $h1_typography['font-weight'] ) : '',
			'line-height'    => isset( $h4_typography['line-height'] ) ? $h4_typography['line-height'] : '',
			'letter-spacing' => isset( $h4_typography['letter-spacing'] ) ? $h4_typography['letter-spacing'] : '',
			'font-style'     => ! empty( $h1_typography['font-style'] ) ? esc_attr( $h1_typography['font-style'] ) : '',
			'font-size'      => isset( $h4_typography['font-size'] ) ? $h4_typography['font-size'] : '',
			'text-transform' => isset( $h4_typography['text-transform'] ) ? $h4_typography['text-transform'] : '',
			'color'          => isset( $h1_typography['color'] ) ? $h4_typography['color'] : '',
		);
	} else {
		if( !empty( $h4_typography['font-backup'] ) ) {
			$backup_font = $h4_typography['font-backup'];
		}
		$css['global'][ liquid_implode( $typograpy_args['h4'] ) ] = array(
			'font-family'    => !empty( $h4_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h4_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
			'font-weight'    => isset( $h4_typography['font-weight'] ) ? intval( $h4_typography['font-weight'] ) : '',
			'line-height'    => isset( $h4_typography['line-height'] ) ? $h4_typography['line-height'] : '',
			'letter-spacing' => isset( $h4_typography['letter-spacing'] ) ? $h4_typography['letter-spacing'] : '',
			'font-style'     => ! empty( $h4_typography['font-style'] ) ? esc_attr( $h4_typography['font-style'] ) : '',
			'font-size'      => isset( $h4_typography['font-size'] ) ? $h4_typography['font-size'] : '',
			'text-transform' => isset( $h4_typography['text-transform'] ) ? $h4_typography['text-transform'] : '',
			'color'          => isset( $h4_typography['color'] ) ? $h4_typography['color'] : '',
		);
	}

	// H5
	$h5_typography = liquid_helper()->get_option( 'h5_typography' );
	if( 'on' === $enable_default_typo ) {
		if( !empty( $h1_typography['font-backup'] ) ) {
			$backup_font = $h1_typography['font-backup'];
		}
		$css['global'][ liquid_implode( $typograpy_args['h5'] ) ] = array(
			'font-family'    => !empty( $h1_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h1_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
			'font-weight'    => isset( $h1_typography['font-weight'] ) ? intval( $h1_typography['font-weight'] ) : '',
			'line-height'    => isset( $h5_typography['line-height'] ) ? $h5_typography['line-height'] : '',
			'letter-spacing' => isset( $h5_typography['letter-spacing'] ) ? $h5_typography['letter-spacing'] : '',
			'font-style'     => ! empty( $h1_typography['font-style'] ) ? esc_attr( $h1_typography['font-style'] ) : '',
			'font-size'      => isset( $h5_typography['font-size'] ) ? $h5_typography['font-size'] : '',
			'text-transform' => isset( $h5_typography['text-transform'] ) ? $h5_typography['text-transform'] : '',
			'color'          => isset( $h1_typography['color'] ) ? $h1_typography['color'] : '',
		);
	} else {
		if( !empty( $h5_typography['font-backup'] ) ) {
			$backup_font = $h5_typography['font-backup'];
		}
		$css['global'][ liquid_implode( $typograpy_args['h5'] ) ] = array(
			'font-family'    => !empty( $h5_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h5_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
			'font-weight'    => isset( $h5_typography['font-weight'] ) ? intval( $h5_typography['font-weight'] ) : '',
			'line-height'    => isset( $h5_typography['line-height'] ) ? $h5_typography['line-height'] : '',
			'letter-spacing' => isset( $h5_typography['letter-spacing'] ) ? $h5_typography['letter-spacing'] : '',
			'font-style'     => ! empty( $h5_typography['font-style'] ) ? esc_attr( $h5_typography['font-style'] ) : '',
			'font-size'      => isset( $h5_typography['font-size'] ) ? $h5_typography['font-size'] : '',
			'text-transform' => isset( $h5_typography['text-transform'] ) ? $h5_typography['text-transform'] : '',	
			'color'          => isset( $h5_typography['color'] ) ? $h5_typography['color'] : '',
			
		);
	}

	// H6
	$h6_typography = liquid_helper()->get_option( 'h6_typography' );
	if( 'on' === $enable_default_typo ) {
		if( !empty( $h1_typography['font-backup'] ) ) {
			$backup_font = $h1_typography['font-backup'];
		}
		$css['global'][ liquid_implode( $typograpy_args['h6'] ) ] = array(
			'font-family'    => !empty( $h1_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h1_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
			'font-weight'    => isset( $h1_typography['font-weight'] ) ? intval( $h1_typography['font-weight'] ) : '',
			'line-height'    => isset( $h6_typography['line-height'] ) ? $h6_typography['line-height'] : '',
			'letter-spacing' => isset( $h6_typography['letter-spacing'] ) ? $h6_typography['letter-spacing'] : '',
			'font-style'     => ! empty( $h1_typography['font-style'] ) ? esc_attr( $h1_typography['font-style'] ) : '',
			'font-size'      => isset( $h6_typography['font-size'] ) ? $h6_typography['font-size'] : '',
			'text-transform' => isset( $h6_typography['text-transform'] ) ? $h6_typography['text-transform'] : '',
			'color'          => isset( $h1_typography['color'] ) ? $h1_typography['color'] : '',
		);
	} else {
		if( !empty( $h6_typography['font-backup'] ) ) {
			$backup_font = $h6_typography['font-backup'];
		}
		$css['global'][ liquid_implode( $typograpy_args['h6'] ) ] = array(
			'font-family'    => !empty( $h6_typography['font-family'] ) ? '\'' . wp_strip_all_tags( $h6_typography['font-family'] ) . '\', ' . $backup_font . ' ' : $not_defined_font_backup,
			'font-weight'    => isset( $h6_typography['font-weight'] ) ? intval( $h6_typography['font-weight'] ) : '',
			'line-height'    => isset( $h6_typography['line-height'] ) ? $h6_typography['line-height'] : '',
			'letter-spacing' => isset( $h6_typography['letter-spacing'] ) ? $h6_typography['letter-spacing'] : '',
			'font-style'     => ! empty( $h6_typography['font-style'] ) ? esc_attr( $h6_typography['font-style'] ) : '',
			'font-size'      => isset( $h6_typography['font-size'] ) ? $h6_typography['font-size'] : '',
			'text-transform' => isset( $h6_typography['text-transform'] ) ? $h6_typography['text-transform'] : '',
			'color'          => isset( $h6_typography['color'] ) ? $h6_typography['color'] : '',
		);
	}

	
	
	//Logo max-width
	$logo_max_width = liquid_helper()->get_option( 'logo-max-width' );
	if( ! empty( $logo_max_width ) ) {
		$css['global'][ liquid_implode( '.main-header .navbar-brand' ) ]['max-width'] = esc_attr( $logo_max_width );
	}
	
	//Header background
	$header_id = liquid_get_custom_header_id();
	if( $header_id ) {
		$header_bg = get_post_meta( $header_id, 'header-bg', true );
		
		if( isset( $header_bg ) && !empty( $header_bg ) ) {
			$css['global'][ liquid_implode( '.main-header' ) ]['background'] = $header_bg;
		}
	}
	
	//Titlebar Heading
	$titlebar_global_typo         = liquid_helper()->get_theme_option( 'title-bar-typography' );
	$titlebar_heading_typography  = liquid_helper()->get_post_meta( 'title-bar-typography' );

	//Custom Typography for titlebar heading H1
	$css['global'][ liquid_implode( '.titlebar-inner h1' ) ] = array(

		'font-family'    => liquid_helper()->get_typography_option( $titlebar_global_typo, $titlebar_heading_typography, 'font-family' ),
		'font-size'      => liquid_helper()->get_typography_option( $titlebar_global_typo, $titlebar_heading_typography, 'font-size' ),
		'font-weight'    => liquid_helper()->get_typography_option( $titlebar_global_typo, $titlebar_heading_typography, 'font-weight' ),
		'text-transform' => liquid_helper()->get_typography_option( $titlebar_global_typo, $titlebar_heading_typography, 'text-transform' ),
		'font-style'     => liquid_helper()->get_typography_option( $titlebar_global_typo, $titlebar_heading_typography, 'font-style' ),
		'text-align'     => liquid_helper()->get_typography_option( $titlebar_global_typo, $titlebar_heading_typography, 'text-align' ),
		'line-height'    => liquid_helper()->get_typography_option( $titlebar_global_typo, $titlebar_heading_typography, 'line-height' ),
		'letter-spacing' => liquid_helper()->get_typography_option( $titlebar_global_typo, $titlebar_heading_typography, 'letter-spacing' ),
		'color'          => liquid_helper()->get_typography_option( $titlebar_global_typo, $titlebar_heading_typography, 'color' ),

	);

	//Titlebar SubHeading
	$titlebar_sub_global_typo        = liquid_helper()->get_theme_option( 'title-bar-subheading-typography' );
	$titlebar_subheading_typography  = liquid_helper()->get_post_meta( 'title-bar-subheading-typography' );

	$css['global'][ liquid_implode( '.titlebar-inner p' ) ] = array(
		'font-family'    => liquid_helper()->get_typography_option( $titlebar_sub_global_typo, $titlebar_subheading_typography, 'font-family' ),
		'font-size'      => liquid_helper()->get_typography_option( $titlebar_sub_global_typo, $titlebar_subheading_typography, 'font-size' ),
		'font-weight'    => liquid_helper()->get_typography_option( $titlebar_sub_global_typo, $titlebar_subheading_typography, 'font-weight' ),
		'text-transform' => liquid_helper()->get_typography_option( $titlebar_sub_global_typo, $titlebar_subheading_typography, 'text-transform' ),
		'font-style'     => liquid_helper()->get_typography_option( $titlebar_sub_global_typo, $titlebar_subheading_typography, 'font-style' ),
		'text-align'     => liquid_helper()->get_typography_option( $titlebar_sub_global_typo, $titlebar_subheading_typography, 'text-align' ),
		'line-height'    => liquid_helper()->get_typography_option( $titlebar_sub_global_typo, $titlebar_subheading_typography, 'line-height' ),
		'letter-spacing' => liquid_helper()->get_typography_option( $titlebar_sub_global_typo, $titlebar_subheading_typography, 'letter-spacing' ),
		'color'          => liquid_helper()->get_typography_option( $titlebar_sub_global_typo, $titlebar_subheading_typography, 'color' ),
	);
	
	//Titlebar Paddings
	$titlebar_top_padding_global = liquid_helper()->get_theme_option( 'title-bar-padding-top' );
	$titlebar_top_padding        = liquid_helper()->get_post_meta( 'title-bar-padding-top' );
	
	if( !empty( $titlebar_top_padding ) ) {
		$css['global'][ liquid_implode( '.titlebar-inner' ) ]['padding-top'] = $titlebar_top_padding . 'px';
	}
	elseif( '200' !== $titlebar_top_padding_global && !empty( $titlebar_top_padding_global ) ) {
		$css['global'][ liquid_implode( '.titlebar-inner' ) ]['padding-top'] = $titlebar_top_padding_global . 'px';
	}
	
	$titlebar_bottom_padding_global = liquid_helper()->get_theme_option( 'title-bar-padding-bottom' );
	$titlebar_bottom_padding        = liquid_helper()->get_post_meta( 'title-bar-padding-bottom' );
	
	if( !empty( $titlebar_bottom_padding ) ) {
		$css['global'][ liquid_implode( '.titlebar-inner' ) ]['padding-bottom'] = $titlebar_bottom_padding . 'px';
	}
	elseif( '200' !== $titlebar_bottom_padding_global && !empty( $titlebar_bottom_padding_global ) ) {
		$css['global'][ liquid_implode( '.titlebar-inner' ) ]['padding-bottom'] = $titlebar_bottom_padding_global . 'px';
	}
	
	$titlebar_bottom_margin = liquid_helper()->get_theme_option( 'title-bar-bottom-margin' );
	if( !empty( $titlebar_bottom_margin ) ) {
		$css['@media screen and (min-width: 992px)'][ liquid_implode( 'body.has-sidebar #lqd-contents-wrap' ) ]['padding-top'] = $titlebar_bottom_margin . 'px';
	}
	
	//Titlebar background
	$titlebar_bg_global = liquid_helper()->get_theme_option( 'title-bar-bg' );
	$titlebar_bg        = liquid_helper()->get_post_meta( 'title-bar-bg' );
	
	$titlebar_gr_global = liquid_helper()->get_theme_option( 'title-bar-bg-gradient' );
	$titlebar_gr        = liquid_helper()->get_post_meta( 'title-bar-bg-gradient' );

	if( isset( $titlebar_bg['background-color'] ) && ! empty( $titlebar_bg['background-color'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-color'] = $titlebar_bg['background-color'];
	}
	elseif( isset( $titlebar_bg_global['background-color'] ) && ! empty( $titlebar_bg_global['background-color'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-color'] = $titlebar_bg_global['background-color'];
	}
	
	//Image Background for the titlebar
	if( isset( $titlebar_bg['background-image'] ) && ! empty( $titlebar_bg['background-image'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-image'] = 'url( ' . esc_url( $titlebar_bg['background-image'] ) . ')';
	}
	elseif( isset( $titlebar_bg_global['background-image'] ) && ! empty( $titlebar_bg_global['background-image'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-image'] = 'url( ' . esc_url( $titlebar_bg_global['background-image'] ) . ')';
	}
	
	if( isset( $titlebar_bg['background-repeat'] ) && ! empty( $titlebar_bg['background-repeat'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-repeat'] = $titlebar_bg['background-repeat'];
	}
	elseif( isset( $titlebar_bg_global['background-repeat'] ) && ! empty( $titlebar_bg_global['background-repeat'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-repeat'] = $titlebar_bg_global['background-repeat'];
	}
	
	if( isset( $titlebar_bg['background-size'] ) && ! empty( $titlebar_bg['background-size'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-size'] = $titlebar_bg['background-size'];
	}
	elseif( isset( $titlebar_bg_global['background-size'] ) && ! empty( $titlebar_bg_global['background-size'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-size'] = $titlebar_bg_global['background-size'];
	}
	
	if( isset( $titlebar_bg['background-attachment'] ) && ! empty( $titlebar_bg['background-attachment'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-attachment'] = $titlebar_bg['background-attachment'];
	}
	elseif( isset( $titlebar_bg_global['background-attachment'] ) && ! empty( $titlebar_bg_global['background-attachment'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-attachment'] = $titlebar_bg_global['background-attachment'];
	}
	
	if( isset( $titlebar_bg['background-position'] ) && ! empty( $titlebar_bg['background-position'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-position'] = $titlebar_bg['background-position'];
	}
	elseif( isset( $titlebar_bg_global['background-position'] ) && ! empty( $titlebar_bg_global['background-position'] ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background-position'] = $titlebar_bg_global['background-position'];
	}
	
	if( !empty( $titlebar_gr ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background'] = $titlebar_gr;
	}
	elseif( !empty( $titlebar_gr_global ) ) {
		$css['global'][ liquid_implode( '.titlebar' ) ]['background'] = $titlebar_gr_global;
	}
	
	//Titlebar Overlay
	$titlebar_overlay_bg = liquid_helper()->get_option( 'title-bar-overlay-background' );	
	if( !empty( $titlebar_overlay_bg ) ) {
		$css['global'][ liquid_implode( '.titlebar > .titlebar-overlay.lqd-overlay' ) ]['background'] = $titlebar_overlay_bg;
	}
	
	//Titlebar scroll button
	$titlebar_scroll_color = liquid_helper()->get_option( 'title-bar-scroll-color' );
	if( !empty( $titlebar_scroll_color ) ) {
		$css['global'][ liquid_implode( '.titlebar .titlebar-scroll-link' ) ]['color'] = $titlebar_scroll_color;
	}

	
	//Content background
	$page_content_bg_global = liquid_helper()->get_theme_option( 'page-content-bg' );	
	$page_content_bg = liquid_helper()->get_post_meta( 'page-content-bg' );
	
	$page_content_gr_global = liquid_helper()->get_theme_option( 'page-content-gradient' );
	$page_content_gr = liquid_helper()->get_post_meta( 'page-content-gradient' );

	if( isset( $page_content_bg['background-color'] ) && ! empty( $page_content_bg['background-color'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content, .page-scheme-dark #lqd-site-content' ) ]['background-color'] = $page_content_bg['background-color'];
	}
	elseif( isset( $page_content_bg_global['background-color'] ) && ! empty( $page_content_bg_global['background-color'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content, .page-scheme-dark #lqd-site-content' ) ]['background-color'] = $page_content_bg_global['background-color'];
	}
	
	if( isset( $page_content_bg['background-image'] ) && ! empty( $page_content_bg['background-image'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content' ) ]['background-image'] = 'url( ' . esc_url( $page_content_bg['background-image'] ) . ')';
	}
	elseif( isset( $page_content_bg_global['background-image'] ) && ! empty( $page_content_bg_global['background-image'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content' ) ]['background-image'] = 'url( ' . esc_url( $page_content_bg_global['background-image'] ) . ')';
	}
	
	if( isset( $page_content_bg['background-repeat'] ) && ! empty( $page_content_bg['background-repeat'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content' ) ]['background-repeat'] = $page_content_bg['background-repeat'];
	}
	elseif( isset( $page_content_bg_global['background-repeat'] ) && ! empty( $page_content_bg_global['background-repeat'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content' ) ]['background-repeat'] = $page_content_bg_global['background-repeat'];
	}
	
	if( isset( $page_content_bg['background-size'] ) && ! empty( $page_content_bg['background-size'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content' ) ]['background-size'] = $page_content_bg['background-size'];
	}
	elseif( isset( $page_content_bg_global['background-size'] ) && ! empty( $page_content_bg_global['background-size'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content' ) ]['background-size'] = $page_content_bg_global['background-size'];
	}
	
	if( isset( $page_content_bg['background-attachment'] ) && ! empty( $page_content_bg['background-attachment'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content' ) ]['background-attachment'] = $page_content_bg['background-attachment'];
	}
	elseif( isset( $page_content_bg_global['background-attachment'] ) && ! empty( $page_content_bg_global['background-attachment'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content' ) ]['background-attachment'] = $page_content_bg_global['background-attachment'];
	}
	
	if( isset( $page_content_bg['background-position'] ) && ! empty( $page_content_bg['background-position'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content' ) ]['background-position'] = $page_content_bg['background-position'];
	}
	elseif( isset( $page_content_bg_global['background-position'] ) && ! empty( $page_content_bg_global['background-position'] ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content' ) ]['background-position'] = $page_content_bg_global['background-position'];
	}
	
	if( !empty( $page_content_gr ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content, .page-scheme-dark #lqd-site-content' ) ]['background'] = $page_content_gr;
	}
	elseif( !empty( $page_content_gr_global ) ) {
		$css['global'][ liquid_implode( '#lqd-site-content, .page-scheme-dark #lqd-site-content' ) ]['background'] = $page_content_gr_global;
	}

	//VC Row default paddings and margins
	$vc_row_margins  = liquid_helper()->get_option( 'vc-row-default-margins' );
	$vc_row_paddings = liquid_helper()->get_option( 'vc-row-default-padding' );
	
	if( is_array( $vc_row_margins ) ) {
		foreach( $vc_row_margins as $key => $value ) {
			if( !empty( $value ) ) {
				$css['global'][ liquid_implode( 'section.vc_row' ) ][$key] = $value;
			}
		}
	}
	if( is_array( $vc_row_paddings ) ) {
		foreach( $vc_row_paddings as $key => $value ) {
			if( !empty( $value ) ) {
				$css['global'][ liquid_implode( 'section.vc_row' ) ][$key] = $value;
			}
		}
	}

	//Header customization
	$header_selectors   = array( '.main-header' );
	$header_bg_type     = liquid_helper()->get_option( 'header-background-type' );
	$header_bg          = liquid_helper()->get_option( 'header-bg' );
	$header_bg_gradient = liquid_helper()->get_option( 'header-bar-gradient' );
	
	if( 'solid' === $header_bg_type && ! empty( $header_bg ) ) {
		
		$header_bg = liquid_parse_bg( $header_bg );				
		$css['global'][ liquid_implode( $header_selectors ) ] = $header_bg;

	}
	elseif( ! empty( $header_bg_gradient ) && 'gradient' === $header_bg_type ) {
		
		if( function_exists( 'liquid_parse_gradient' ) ) {
			
			$header_bg = liquid_parse_gradient( $header_bg_gradient );
			$css['global'][ liquid_implode( $header_selectors ) ]['background'] = $header_bg['background-image'];
				
		}
	}
	
	//Sticky Header
	$header_id  = liquid_get_custom_header_id();
	
	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( $header_id );
		
		$header_sticky_bg = $page_settings_model->get_settings( 'header_sticky_bg' );
		$header_sticky_color = $page_settings_model->get_settings( 'header_sticky_color' );
		$header_sticky_hover_color = $page_settings_model->get_settings( 'header_sticky_hover_color' );
	} else {
		$header_sticky_bg = get_post_meta( $header_id, 'header-sticky-bg', true );
		$header_sticky_color = get_post_meta( $header_id, 'header-sticky-color', true );
		$header_sticky_hover_color = get_post_meta( $header_id, 'header-sticky-hover-color', true );
	}

	if( !empty( $header_sticky_bg ) ) {
		if ( defined( 'ELEMENTOR_VERSION' ) && is_callable( 'Elementor\Plugin::instance' ) ) {
			$css['@media ( min-width: ' . $min_media_mobile_nav . 'px )'][ liquid_implode( array( '.is-stuck > .elementor > .elementor-section-wrap > .elementor-section:not(.lqd-stickybar-wrap)' ) ) ]['background'] = $header_sticky_bg . ' !important';
		} else {
			$css['@media ( min-width: ' . $min_media_mobile_nav . 'px )'][ liquid_implode( array( '.is-stuck .lqd-head-sec-wrap' ) ) ]['background'] = $header_sticky_bg . ' !important';
		}
	}
	if( !empty( $header_sticky_color ) ) {
		if ( defined( 'ELEMENTOR_VERSION' ) && is_callable( 'Elementor\Plugin::instance' ) ) {
			$css['@media ( min-width: ' . $min_media_mobile_nav . 'px )'][ liquid_implode( array( '.is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > p, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element .nav-trigger, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element .lqd-scrl-indc, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .lqd-custom-menu, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .btn-naked, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .btn-underlined, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .social-icon li a, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .lqd-custom-menu > ul > li > a, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .navbar-collapse .main-nav > li > a, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element .ld-module-trigger .ld-module-trigger-txt, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element .lqd-module-badge-outline .ld-module-trigger-count, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element .ld-module-trigger-icon, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .lqd-custom-menu .lqd-custom-menu-dropdown-btn' ) ) ]['color'] = $header_sticky_color;
			$css['@media ( min-width: ' . $min_media_mobile_nav . 'px )'][ liquid_implode( array( '.is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element .nav-trigger.bordered .bars:before' ) ) ]['border-color'] = $header_sticky_color;
			$css['@media ( min-width: ' . $min_media_mobile_nav . 'px )'][ liquid_implode( array( '.is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element .nav-trigger .bar, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element .lqd-scrl-indc .lqd-scrl-indc-line' ) ) ]['background'] = $header_sticky_color;
		} else {
			$css['@media ( min-width: ' . $min_media_mobile_nav . 'px )'][ liquid_implode( array( '.is-stuck .lqd-head-col > .header-module > p, .is-stuck .lqd-head-col > .header-module .nav-trigger, .is-stuck .lqd-head-col > .header-module .lqd-scrl-indc, .is-stuck .lqd-head-col > .header-module > .lqd-custom-menu, .is-stuck .lqd-head-col > .header-module > .btn-naked, .is-stuck .lqd-head-col > .header-module > .btn-underlined, .is-stuck .lqd-head-col > .header-module > .social-icon li a, .is-stuck .lqd-head-col > .header-module > .lqd-custom-menu > ul > li > a, .is-stuck .lqd-head-col > .header-module > .navbar-collapse .main-nav > li > a, .is-stuck .lqd-head-col > .header-module .ld-module-trigger .ld-module-trigger-txt, .is-stuck .lqd-head-col > .header-module .lqd-module-badge-outline .ld-module-trigger-count, .is-stuck .lqd-head-col > .header-module .ld-module-trigger-icon, .is-stuck .lqd-head-col > .header-module > .lqd-custom-menu .lqd-custom-menu-dropdown-btn' ) ) ]['color'] = $header_sticky_color;
			$css['@media ( min-width: ' . $min_media_mobile_nav . 'px )'][ liquid_implode( array( '.is-stuck .lqd-head-col > .header-module .nav-trigger.bordered .bars:before' ) ) ]['border-color'] = $header_sticky_color;
			$css['@media ( min-width: ' . $min_media_mobile_nav . 'px )'][ liquid_implode( array( '.is-stuck .lqd-head-col > .header-module .nav-trigger .bar, .is-stuck .lqd-head-col > .header-module .lqd-scrl-indc .lqd-scrl-indc-line' ) ) ]['background'] = $header_sticky_color;
		}
	}
	if( !empty( $header_sticky_hover_color ) ) {
		if ( defined( 'ELEMENTOR_VERSION' ) && is_callable( 'Elementor\Plugin::instance' ) ) {
			$css['@media ( min-width: ' . $min_media_mobile_nav . 'px )'][ liquid_implode( array( '.is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .btn-naked:hover, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .btn-underlined:hover, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .social-icon li a:hover, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .lqd-custom-menu > ul > li > a:hover, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .navbar-collapse .main-nav > li > a:hover, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .navbar-collapse .main-nav > li:hover > a, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .navbar-collapse .main-nav > li.is-active > a, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .navbar-collapse .main-nav > li.current-menu-ancestor > a, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .navbar-collapse .main-nav > li.current_page_item > a, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .navbar-collapse .main-nav > li.current-menu-item > a, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .iconbox h3, .is-stuck > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element > .iconbox .iconbox-icon-container' ) ) ]['color'] = $header_sticky_hover_color;
		} else {
			$css['@media ( min-width: ' . $min_media_mobile_nav . 'px )'][ liquid_implode( array( '.is-stuck .lqd-head-col > .header-module > .btn-naked:hover, .is-stuck .lqd-head-col > .header-module > .btn-underlined:hover, .is-stuck .lqd-head-col > .header-module > .social-icon li a:hover, .is-stuck .lqd-head-col > .header-module > .lqd-custom-menu > ul > li > a:hover, .is-stuck .lqd-head-col > .header-module > .navbar-collapse .main-nav > li > a:hover, .is-stuck .lqd-head-col > .header-module > .navbar-collapse .main-nav > li:hover > a, .is-stuck .lqd-head-col > .header-module > .navbar-collapse .main-nav > li.is-active > a, .is-stuck .lqd-head-col > .header-module > .navbar-collapse .main-nav > li.current-menu-ancestor > a, .is-stuck .lqd-head-col > .header-module > .navbar-collapse .main-nav > li.current_page_item > a, .is-stuck .lqd-head-col > .header-module > .navbar-collapse .main-nav > li.current-menu-item > a, .is-stuck .lqd-head-col > .header-module > .iconbox h3, .is-stuck .lqd-head-col > .header-module > .iconbox .iconbox-icon-container' ) ) ]['color'] = $header_sticky_hover_color;
		}
	}

	//Sticky Header Dynamic Colors
	$hs_lc = get_post_meta( $header_id, 'header-sticky-dynamic-light-color', true );
	$hs_dc = get_post_meta( $header_id, 'header-sticky-dynamic-dark-color', true );
	$hs_lb = get_post_meta( $header_id, 'header-sticky-dynamic-light-bg', true );
	$hs_db = get_post_meta( $header_id, 'header-sticky-dynamic-dark-bg', true );
	
	if( !empty( $hs_lc ) ) {
		if( !empty( $hs_lc['regular'] ) ) {

			$rgb = str_replace( 'rgba(','', $hs_lc['regular'] );
			$rgb = str_replace( 'rgb(','', $rgb );
			$rgb = str_replace( ')', '', $rgb );
			$rgbarr = explode( ',' , $rgb, 4 );
			
			$r = $rgbarr[0];
			$g = $rgbarr[1];
			$b = $rgbarr[2];

			if ( defined( 'ELEMENTOR_VERSION' ) && is_callable( 'Elementor\Plugin::instance' ) ) {
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light > p, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light .nav-trigger, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light .lqd-scrl-indc' ) ]['color'] = $hs_lc['regular'];
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light .nav-trigger.bordered .bars:before' ) ]['border-color'] = $hs_lc['regular'];
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light .nav-trigger .bar' ) ]['background'] = $hs_lc['regular'];
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light > .lqd-custom-menu' ) ]['color'] = 'rgba( '.$r.','.$g.','.$b.', 0.5)';
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light > .lqd-custom-menu > ul > li > a, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light .main-nav > li > a, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light > .social-icon li a, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light .ld-module-trigger .ld-module-trigger-txt, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light .ld-module-trigger .ld-module-trigger-count, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light .ld-module-trigger-icon, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light > .lqd-custom-menu .lqd-custom-menu-dropdown-btn' ) ]['color'] = 'rgba( '.$r.','.$g.','.$b.', 0.8)';
			} else {
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-light.header-module > p, .lqd-head-col > .lqd-active-row-light.header-module .nav-trigger, .lqd-head-col > .lqd-active-row-light.header-module .lqd-scrl-indc' ) ]['color'] = $hs_lc['regular'];
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-light.header-module .nav-trigger.bordered .bars:before' ) ]['border-color'] = $hs_lc['regular'];
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-light.header-module .nav-trigger .bar' ) ]['background'] = $hs_lc['regular'];
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-light.header-module > .lqd-custom-menu' ) ]['color'] = 'rgba( '.$r.','.$g.','.$b.', 0.5)';
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-light.header-module > .lqd-custom-menu > ul > li > a, .lqd-head-col > .lqd-active-row-light.header-module .main-nav > li > a, .lqd-head-col > .lqd-active-row-light.header-module > .social-icon li a, .lqd-head-col > .lqd-active-row-light.header-module .ld-module-trigger .ld-module-trigger-txt, .lqd-head-col > .lqd-active-row-light.header-module .ld-module-trigger .ld-module-trigger-count, .lqd-head-col > .lqd-active-row-light.header-module .ld-module-trigger-icon, .lqd-head-col > .lqd-active-row-light.header-module > .lqd-custom-menu .lqd-custom-menu-dropdown-btn' ) ]['color'] = 'rgba( '.$r.','.$g.','.$b.', 0.8)';
			}
		}

		if( !empty( $hs_lc['hover'] ) ) {
			if ( defined( 'ELEMENTOR_VERSION' ) && is_callable( 'Elementor\Plugin::instance' ) ) {
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light > .lqd-custom-menu > ul > li > a:hover, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light .main-nav > li > a:hover, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-light > .social-icon li a:hover' ) ]['color'] = $hs_lc['hover'];
			} else {			
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-light.header-module > .lqd-custom-menu > ul > li > a:hover, .lqd-head-col > .lqd-active-row-light.header-module .main-nav > li > a:hover, .lqd-head-col > .lqd-active-row-light.header-module > .social-icon li a:hover' ) ]['color'] = $hs_lc['hover'];
			}
		}
	}
	
	if( !empty( $hs_dc ) ) {
		if( !empty( $hs_dc['regular'] ) ) {
			
			$rgb = str_replace( 'rgba(','', $hs_dc['regular'] );
			$rgb = str_replace( 'rgb(','', $rgb );
			$rgb = str_replace( ')', '', $rgb );
			$rgbarr = explode( ',' , $rgb, 4 );
			
			$r = $rgbarr[0];
			$g = $rgbarr[1];
			$b = $rgbarr[2];

			if ( defined( 'ELEMENTOR_VERSION' ) && is_callable( 'Elementor\Plugin::instance' ) ) {
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark > p, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark .nav-trigger, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark .lqd-scrl-indc' ) ]['color'] = $hs_dc['regular'];
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark .nav-trigger.bordered .bars:before' ) ]['border-color'] = $hs_dc['regular'];
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark .nav-trigger .bar' ) ]['background'] = $hs_dc['regular'];
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark > .lqd-custom-menu' ) ]['color'] = 'rgba( '.$r.','.$g.','.$b.', 0.5)';
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark > .lqd-custom-menu > ul > li > a, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark .main-nav > li > a, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark > .social-icon li a, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark .ld-module-trigger .ld-module-trigger-txt, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark .ld-module-trigger .ld-module-trigger-count, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark .ld-module-trigger-icon, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark > .lqd-custom-menu .lqd-custom-menu-dropdown-btn' ) ]['color'] = 'rgba( '.$r.','.$g.','.$b.', 0.8)';
			} else {
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-dark.header-module > p, .lqd-head-col > .lqd-active-row-dark.header-module .nav-trigger, .lqd-head-col > .lqd-active-row-dark.header-module .lqd-scrl-indc' ) ]['color'] = $hs_dc['regular'];
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-dark.header-module .nav-trigger.bordered .bars:before' ) ]['border-color'] = $hs_dc['regular'];
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-dark.header-module .nav-trigger .bar' ) ]['background'] = $hs_dc['regular'];
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-dark.header-module > .lqd-custom-menu' ) ]['color'] = 'rgba( '.$r.','.$g.','.$b.', 0.5)';
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-dark.header-module > .lqd-custom-menu > ul > li > a, .lqd-head-col > .lqd-active-row-dark.header-module .main-nav > li > a, .lqd-head-col > .lqd-active-row-dark.header-module > .social-icon li a, .lqd-head-col > .lqd-active-row-dark.header-module .ld-module-trigger .ld-module-trigger-txt, .lqd-head-col > .lqd-active-row-dark.header-module .ld-module-trigger .ld-module-trigger-count, .lqd-head-col > .lqd-active-row-dark.header-module .ld-module-trigger-icon, .lqd-head-col > .lqd-active-row-dark.header-module > .lqd-custom-menu .lqd-custom-menu-dropdown-btn' ) ]['color'] = 'rgba( '.$r.','.$g.','.$b.', 0.8)';
			}
		}

		if( !empty( $hs_dc['hover'] ) ) {
			if ( defined( 'ELEMENTOR_VERSION' ) && is_callable( 'Elementor\Plugin::instance' ) ) {
				$css['global'][ liquid_implode( '.main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark > .lqd-custom-menu > ul > li > a:hover, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark .main-nav > li > a:hover, .main-header > .elementor > .elementor-section-wrap > .elementor-section > .elementor-container > .elementor-column > .elementor-widget-wrap > .elementor-element.lqd-active-row-dark > .social-icon li a:hover' ) ]['color'] = $hs_dc['hover'];
			} else {
				$css['global'][ liquid_implode( '.lqd-head-col > .lqd-active-row-dark.header-module > .lqd-custom-menu > ul > li > a:hover, .lqd-head-col > .lqd-active-row-dark.header-module .main-nav > li > a:hover, .lqd-head-col > .lqd-active-row-dark.header-module > .social-icon li a:hover' ) ]['color'] = $hs_dc['hover'];
			}
		}
	}
	
	if( !empty( $hs_lb ) ) {
		$css['global'][ liquid_implode( '.lqd-active-row-light.main-header' ) ]['background-color'] = $hs_lb;		
	}
	if( !empty( $hs_db ) ) {
		$css['global'][ liquid_implode( '.lqd-active-row-dark.main-header' ) ]['background-color'] = $hs_db;
	}
	
	

	//Mobile header customization
	$header_custom_bg_global    = liquid_helper()->get_theme_option( 'm-nav-header-custom-bg' );
	$header_custom_color_global = liquid_helper()->get_theme_option( 'm-nav-header-custom-color' );
	$header_custom_bg           = get_post_meta( $header_id, 'm-nav-header-custom-bg', true );
	$header_custom_color        = get_post_meta( $header_id, 'm-nav-header-custom-color', true );
	
	if( !empty( $header_custom_bg ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '.main-header .navbar-header' ) ]['background'] = $header_custom_bg;
	}
	elseif( !empty( $header_custom_bg_global ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '.main-header .navbar-header' ) ]['background'] = $header_custom_bg_global;
	}

	if( !empty( $header_custom_color ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '.main-header .ld-module-trigger, .main-header .ld-search-form .input-icon' ) ]['color'] = $header_custom_color;
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '.main-header .nav-trigger .bar, .main-header .nav-trigger.style-2 .bar:before, .main-header .nav-trigger.style-2 .bar:after' ) ]['background-color'] = $header_custom_color;
	}
	elseif( !empty( $header_custom_color_global ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '.main-header .ld-module-trigger, .main-header .ld-search-form .input-icon' ) ]['color'] = $header_custom_color_global;
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '.main-header .nav-trigger .bar, .main-header .nav-trigger.style-2 .bar:before, .main-header .nav-trigger.style-2 .bar:after' ) ]['background-color'] = $header_custom_color_global;
	}
	
	//Mobile navigation customization
	$nav_custom_bg_global    = liquid_helper()->get_theme_option( 'm-nav-custom-bg' );
	$nav_custom_color_global = liquid_helper()->get_theme_option( 'm-nav-custom-color' );
	$nav_border_color_global = liquid_helper()->get_theme_option( 'm-nav-border-color' );
	$nav_custom_bg           = get_post_meta( $header_id, 'm-nav-custom-bg', true );
	$nav_custom_color        = get_post_meta( $header_id, 'm-nav-custom-color', true );
	$nav_border_color        = get_post_meta( $header_id, 'm-nav-border-color', true );


	$nav_modern_bg_global    = liquid_helper()->get_theme_option( 'm-nav-modern-bg' );
	$nav_modern_color_global = liquid_helper()->get_theme_option( 'm-nav-modern-color' );
	$nav_modern_bg           = get_post_meta( $header_id, 'm-nav-modern-bg', true );
	$nav_modern_color        = get_post_meta( $header_id, 'm-nav-modern-color', true );	
	
	
	if( !empty( $nav_custom_bg ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( 'body[data-mobile-nav-style=classic] .lqd-mobile-sec .navbar-collapse, body[data-mobile-nav-style=minimal] .lqd-mobile-sec .navbar-collapse' ) ]['background'] = $nav_custom_bg;
	}
	elseif( !empty( $nav_custom_bg_global ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( 'body[data-mobile-nav-style=classic] .lqd-mobile-sec .navbar-collapse, body[data-mobile-nav-style=minimal] .lqd-mobile-sec .navbar-collapse' ) ]['background'] = $nav_custom_bg_global;
	}
	
	if( !empty( $nav_modern_bg ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '[data-mobile-nav-style=modern] .lqd-mobile-sec:before' ) ]['background'] = $nav_modern_bg;
	}
	elseif( !empty( $nav_modern_bg_global ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '[data-mobile-nav-style=modern] .lqd-mobile-sec:before' ) ]['background'] = $nav_modern_bg_global;
	}

	if( !empty( $nav_custom_color ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( 'body[data-mobile-nav-style=classic] .lqd-mobile-sec .navbar-collapse, body[data-mobile-nav-style=minimal] .lqd-mobile-sec .navbar-collapse' ) ]['color'] = $nav_custom_color;
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( 'ul.nav.main-nav > li > a, ul.nav.main-nav > li > a:hover, .main-nav .children > li.active > a, .main-nav .children > li.current-menu-item > a, .main-nav .children > li:hover > a, .nav-item-children > li.active > a, .nav-item-children > li.current-menu-item > a, .nav-item-children > li:hover > a' ) ]['color'] = 'inherit !important';
	}
	elseif( !empty( $nav_custom_color_global ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( 'body[data-mobile-nav-style=classic] .lqd-mobile-sec .navbar-collapse, body[data-mobile-nav-style=minimal] .lqd-mobile-sec .navbar-collapse' ) ]['color'] = $nav_custom_color_global;
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( 'ul.nav.main-nav > li > a, ul.nav.main-nav > li > a:hover, .main-nav .children > li.active > a, .main-nav .children > li.current-menu-item > a, .main-nav .children > li:hover > a, .nav-item-children > li.active > a, .nav-item-children > li.current-menu-item > a, .nav-item-children > li:hover > a' ) ]['color'] = 'inherit !important';
	}
	
	if( !empty( $nav_modern_color ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '[data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul .nav-item-children > li > a, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul > li > a, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul.nav.main-nav .nav-item-children > li > a, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul.nav.main-nav > li > a, [data-mobile-nav-style=modern] .lqd-mobile-sec .megamenu .ld-fancy-heading > *' ) ]['color'] = $nav_modern_color;
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '[data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul .nav-item-children > li > a:hover, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul > li > a:hover, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul.nav.main-nav .nav-item-children > li > a:hover, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul.nav.main-nav > li > a:hover' ) ]['color'] = $nav_modern_color;
	}
	elseif( !empty( $nav_modern_color_global ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '[data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul .nav-item-children > li > a, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul > li > a, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul.nav.main-nav .nav-item-children > li > a, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul.nav.main-nav > li > a, [data-mobile-nav-style=modern] .lqd-mobile-sec .megamenu .ld-fancy-heading > *' ) ]['color'] = $nav_modern_color_global;
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( '[data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul .nav-item-children > li > a:hover, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul > li > a:hover, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul.nav.main-nav .nav-item-children > li > a:hover, [data-mobile-nav-style=modern] .lqd-mobile-sec .navbar-collapse ul.nav.main-nav > li > a:hover' ) ]['color'] = $nav_modern_color_global;
	}
	
	if( !empty( $nav_border_color ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( 'ul.nav.main-nav > li > a' ) ]['border-color'] = $nav_border_color;
	}
	elseif( !empty( $nav_border_color_global ) ) {
		$css['@media screen and (max-width: ' . $max_media_mobile_nav . 'px)'][ liquid_implode( 'ul.nav.main-nav > li > a' ) ]['border-color'] = $nav_border_color_global;
	}	

	//Nav customization
	$nav_selectors       = array( '.main-nav > li > a' );
	$nav_hover_selectors = array( '.main-nav > li > a:hover', '.main-nav > li > a:focus' );
	
	$nav_typo         = liquid_helper()->get_option( 'nav_typography' );
	$nav_mobile_typo  = liquid_helper()->get_option( 'nav_mobile_typography' );
	$nav_color        = liquid_helper()->get_option( 'nav_color' );
	$nav_second_color = liquid_helper()->get_option( 'nav_secondary_color' ); 
	$nav_active_color = liquid_helper()->get_option( 'nav_active_color' ); 
	
	$nav_padding      = liquid_helper()->get_option( 'nav_padding' );
	if( ! empty( $nav_padding ) ) {
		unset( $nav_padding['units'] );
		$css['global'][ liquid_implode( $nav_selectors ) ] = $nav_padding;
	}
	
	//Typo for Menu
	if( is_array( $nav_typo ) && ! empty( $nav_typo ) ) {		
		unset( $nav_typo['google'] );
		$css['global'][ liquid_implode( $nav_selectors ) ] = $nav_typo;
	}
	if( is_array( $nav_color ) && ! empty( $nav_color ) ) {
		$css['global'][ liquid_implode( $nav_selectors ) ]['color'] = $nav_color['rgba'];	
	}
	if( is_array( $nav_active_color ) && ! empty( $nav_active_color ) ) {
		$css['global'][ liquid_implode( $nav_hover_selectors ) ]['color'] = $nav_active_color['rgba'];	
	}
	
	//Typo for mobile menu
	if( is_array( $nav_mobile_typo ) && ! empty( $nav_mobile_typo ) ) {
		unset( $nav_mobile_typo['google'] );
		$css['@media screen and ( max-width: 991px )'][ liquid_implode( $nav_selectors ) ] = $nav_mobile_typo;
	}
	
	//Return the arrary with styles to output
	return $css;
}

// Helpers ---------------------------------------

/**
 * Helper function.
 * Parse the Bg options and get only right values
 */
function liquid_parse_bg( $elements = array() ) {
	
	$bg = array();
	
	if ( ! is_array( $elements ) ) {
		return $elements;
	}
	
	if( isset( $elements['background-color'] ) && ! empty( $elements['background-color'] ) ) {
		$bg['background-color'] = $elements['background-color'];
	}
	if( isset( $elements['background-image'] ) && ! empty( $elements['background-image'] ) ) {
		$bg['background-image'] = 'url( ' . esc_url( $elements['background-image'] ) . ')';
	}
	if( isset( $elements['background-repeat'] ) && ! empty( $elements['background-repeat'] ) ) {
		$bg['background-repeat'] = $elements['background-repeat'];
	}
	if( isset( $elements['background-size'] ) && ! empty( $elements['background-size'] ) ) {
		$bg['background-size'] = $elements['background-size'];
	}
	if( isset( $elements['background-attachment'] ) && ! empty( $elements['background-attachment'] ) ) {
		$bg['background-attachment'] = $elements['background-attachment'];
	}
	if( isset( $elements['background-position'] ) && ! empty( $elements['background-position'] ) ) {
		$bg['background-position'] = $elements['background-position'];
	}		

	return $bg;
	
}

/**
 * Helper function.
 * Merge and combine the CSS elements
 */
function liquid_implode( $elements = array() ) {

	if ( ! is_array( $elements ) ) {
		return $elements;
	}

	// Make sure our values are unique
	$elements = array_unique( array_filter( $elements ) );
	// Sort elements alphabetically.
	// This way all duplicate items will be merged in the final CSS array.
	sort( $elements );

	// Implode items and return the value.
	return implode( ',', $elements );

}

/**
 * Maps elements from dynamic css to the selector
 */
function liquid_map_selector( $elements, $selector ) {
	$array = array();

	foreach( $elements as $element ) {
		$array[] = $element . $selector;
	}

	return $array;
}