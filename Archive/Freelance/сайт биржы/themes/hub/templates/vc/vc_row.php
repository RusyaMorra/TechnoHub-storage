<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $full_width
 * @var $full_height
 * @var $equal_height
 * @var $columns_placement
 * @var $content_placement
 * @var $parallax
 * @var $parallax_image
 * @var $css
 * @var $el_id
 * @var $video_bg
 * @var $video_bg_url
 * @var $video_bg_parallax
 * @var $parallax_speed_bg
 * @var $parallax_speed_video
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row
 */
$el_class = $full_height = $parallax_speed_bg = $parallax_speed_video = $full_width = $equal_height = $flex_row = $stack_columns_placement = $columns_placement = $content_placement = $parallax = $parallax_image = $css = $el_id = $video_bg = $video_bg_url = $video_bg_parallax = $css_animation = $enable_overlay = $gradient_bg = $overlay_bg = $hover_overlay_bg = $enable_slideshow_bg = $slideshow_delay = $slideshow_effect = $slideshow_images = $bg_position = $bg_pos_h = $bg_pos_v = $bg_attachment = $bg_styles = $row_svg_divider = $sticky_bg = $row_sticky_row = $row_scale_bg_onhover = $enable_cc_circle = $cc_circle_color = $fade_scroll = $shrink_borders = $data_tooltip = $block_content_alignment = $mobile_bg_gradient = $row_hide = $luminosity = '';
$disable_element = '';

$row_box_shadow = $custom_border_radius = '';

//Custom Animation
$enable_content_animation = $animation_preset = $ca_duration = $ca_start_delay = $ca_delay = $ca_easing = $ca_direction  = $ca_init_translate_x = $ca_init_translate_y = $ca_init_translate_z = $ca_init_scale_x = $ca_init_scale_y = $ca_init_rotate_x = $ca_init_rotate_y = $ca_init_rotate_z = $ca_init_opacity = $ca_an_translate_x = $ca_an_translate_y = $ca_an_translate_z = $ca_an_scale_x = $ca_an_scale_y = $ca_an_rotate_x = $ca_an_rotate_y = $ca_an_rotate_z = $ca_an_opacity = $ca_init_origin_x = $ca_init_origin_y = $ca_init_origin_z = $ca_an_origin_x = $ca_an_origin_y = $ca_an_origin_z = '';

$output = $before_content = $responsive_style = $mobile_bg_css = $video_bg_source = $video_local_mp4_url = $video_local_webm_url = $y_start_time = $y_end_time = $mobile_video_bg = '';

$bg_image = '';

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

wp_enqueue_script( 'wpb_composer_front_js' );

$el_class = $this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation );

$css_classes = array(
	'vc_row',
	$row_hide,
	$block_content_alignment,
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);

$row_classes = array(
	'row',
	'ld-row',
	'ld-row-outer',
);

if( !empty( $responsive_css ) ) {
	$responsive_id = uniqid( 'liquid-row-responsive-' );
	$responsive_style = Liquid_Responsive_Css_Editor::generate_css( $responsive_css, $responsive_id );
	$css_classes[] = $responsive_id;
}

$row_box_shadow = vc_param_group_parse_atts( $row_box_shadow );
if( !empty( $row_box_shadow ) ) {
	$shadow_box_id = uniqid('liquid-row-shadowbox-');
	$shadow_css    = liquid_get_shadow_css( $row_box_shadow, $shadow_box_id );
	$css_classes[] = $shadow_box_id;
}

if( 'yes' === $mobile_bg_gradient ) {
	$mobile_bg_id  = uniqid('liquid-row-mobile-bg-');
	$mobile_bg_css = '.vc_mobile .' . $mobile_bg_id . '{ background: none !important;  }';
	$css_classes[] = $mobile_bg_id;
}

if ( 'yes' === $disable_element ) {
	if ( vc_is_page_editable() ) {
		$css_classes[] = 'vc_hidden-lg vc_hidden-xs vc_hidden-sm vc_hidden-md';
	} else {
		return '';
	}
}

$row_top_divider = $row_bottom_divider = '';
if( !empty( $row_svg_divider ) ) {
	$row_top_divider    = Liquid_Shape_Divider_Options::getShape( $row_svg_divider );
	$row_bottom_divider = Liquid_Shape_Divider_Options::getShape( $row_svg_divider, 'bottom' );
}

if ( vc_shortcode_custom_css_has_property( $css, array(
		'border',
		'background',
	) ) || $video_bg || $parallax
) {
	$css_classes[] = 'vc_row-has-fill';
}

if ( vc_shortcode_custom_css_has_property( $css, 'background' ) ) {	
	$css_classes[] = 'vc_row-has-bg';
}

if ( '15' !== $atts['gap'] ) {
	$css_classes[] = 'vc_column-gap-' . $atts['gap'];
}

$wrapper_attributes = $ca_data_opts = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}

$container_class = 'ld-container container';
if ( ! empty( $full_width ) ) {

	$container_class = 'ld-container container-fluid';
	if ( 'stretch_row_content' === $full_width ) {

	}
}


//Add background image to data attibute
if( vc_shortcode_custom_css_has_property( $css, array( 'background' ) ) ) {
	
	$matches = array();
	preg_match_all( '~\bbackground(-image)?\s*:(.*?)\(\s*(\'|")?(?<image>.*?)\3?\s*\)~i', $css , $matches );
	$images = $matches['image'];
	$bg_image = isset( $images[0] ) ? esc_url( $images[0] ) : '';
	
};

if( !empty( $bg_image ) && 'enable_row_sticky_bg' !== $row_sticky_bg ) {
	
	$before_content .= '<span class="row-bg-loader"></span>';
	
	$wrapper_attributes[] = 'data-row-bg="' . $bg_image . '"';
	
	$parallax_attrs = array();

	if( 'enable_parallax' == $parallax ) {

		$parallax_attrs[] = 'data-parallax="true"';
		$parallax_attrs[] = 'data-parallax-from=\'' . wp_json_encode( array( 'yPercent' => -15 ) ) . '\'';
		$parallax_attrs[] = 'data-parallax-to=\'' . wp_json_encode( array( 'yPercent' => 0 ) ) . '\'';

		$css_classes[] = 'lqd-parallax-markup-exists';
		$css_classes[] = 'lqd-parallax-bg-enabled';
	
	}

	$before_content .= '<div class="row-bg-wrap">
		<div class="row-bg-inner">
			<figure class="row-bg" ' . implode( ' ', $parallax_attrs ) . '></figure>
		</div>
	</div>';

	$css_classes[] = 'lqd-has-bg-markup';
	$css_classes[] = 'row-bg-appended';

}

if ( ! empty( $full_height ) ) {
	$css_classes[] = 'vc_row-o-full-height';
	if ( ! empty( $columns_placement ) ) {
		$flex_row = true;
		$row_classes[] = 'vc_row-has-column-align vc_row-o-columns-' . $columns_placement;
		if ( 'stretch' === $columns_placement ) {
			$row_classes[] = 'vc_row-o-equal-height';
		}
	} else {
		$row_classes[] = 'vc_row-no-column-align';
	}
}

if ( ! empty( $stack_columns_placement ) ) {
	$flex_row = true;
	$row_classes[] = 'vc_row-o-columns-' . $stack_columns_placement;
	if ( 'stretch' === $stack_columns_placement ) {
		$row_classes[] = 'vc_row-o-equal-height';
	}
}

if ( ! empty( $equal_height ) ) {
	$flex_row = true;
	$row_classes[] = 'vc_row-o-equal-height';
}

if ( ! empty( $content_placement ) ) {
	$flex_row = true;
	$row_classes[] = 'vc_row-o-content-' . $content_placement;
}

if ( ! empty( $flex_row ) ) {
	$row_classes[] = 'vc_row-flex';
}

$video_bg_output = $disable_mobile = '';
if ( !empty( $video_bg ) ) {

	wp_enqueue_script( 'jquery-ytplayer' );
	wp_enqueue_style( 'jquery-ytplayer' );

	$handles[] = 'jquery-ytplayer';

	if( 'local' === $video_bg_source ) {
		if( !empty( $video_local_mp4_url ) || !empty( $video_local_webm_url ) ) {
			
			if( 'yes' === $mobile_video_bg ) {
				$disable_mobile = 'data-inlinevideo-options=\'' . wp_json_encode( array( 'disableOnMobile' => true ) ) . '\'';
			}

			wp_enqueue_script( 'wp-mediaelement' );
			wp_enqueue_style( 'wp-mediaelement' );

			$handles[] = 'wp-mediaelement';
			
			$video_bg_output = '<div class="lqd-vbg-wrap">
							<div class="lqd-vbg-inner">
								<span class="lqd-vbg-loader"></span>
								<video class="lqd-vbg-video hidden" data-video-bg="true" ' . $disable_mobile . ' playsinline autoplay loop muted>';
								if( !empty( $video_local_mp4_url ) ) {
									$video_bg_output .= '<source src="'. esc_url( $video_local_mp4_url ) .'" type="video/mp4">';
								}
								if( !empty( $video_local_webm_url ) ) {
									$video_bg_output .= '<source src="'. esc_url( $video_local_webm_url ) .'" type="video/webm">';
								}
			$video_bg_output .=	'</video>
						</div>
					</div>';
		}

	}
	else {
		
		$data_youtube = array();
		if( !empty( $video_bg_url ) ) {
			$data_youtube['videoURL'] = esc_url( $video_bg_url );
		}
		if( !empty( $y_start_time ) ) {
			$data_youtube['startAt'] = (int)$y_start_time;
		}
		if( !empty( $y_end_time ) ) {
			$data_youtube['stopAt'] = (int)$y_end_time;
		}
		if( 'yes' === $mobile_video_bg ) {
			$data_youtube['disableOnMobile'] = true;
		}
		
		$video_bg_output = '<div class="lqd-vbg-wrap">
				<div class="lqd-vbg-inner">
					<span class="lqd-vbg-loader"></span>
					<div
						class="lqd-vbg-video"
						data-video-bg="true"
						data-youtube-options=\'' . wp_json_encode( $data_youtube ) . '\'>
					</div>
			</div>
		</div>';

	}

	if ( $post_ID = get_the_ID() ) {
		$post_scripts = get_post_meta( $post_ID, '_post_scripts', true );
		$post_scripts = is_array($post_scripts) ? $post_scripts : [];

		update_post_meta( $post_ID, '_post_scripts', array_unique( array_merge( $handles, $post_scripts ) ) );
	}
}

if( 'yes' === $enable_content_animation ) {
	
	$presetsValues = array();

	$opts = $init_values = $animations_values = $arr = array();
	
	$opts['triggerHandler'] = 'inview';
	$opts['animationTarget'] = '.wpb_column';
	
	$opts['duration'] = !empty( $ca_duration ) ? $ca_duration : 700;
	if( !empty( $ca_start_delay ) ) {
		$opts['startDelay'] = $ca_start_delay;
	}
	$opts['delay'] = !empty( $ca_delay ) ? $ca_delay : 100;
	$opts['ease'] = !empty( $ca_easing ) ? $ca_easing : 'power4.out';
	$opts['direction'] = !empty( $ca_direction ) ? $ca_direction : 'forward' ;
	
	if( 'custom' !== $animation_preset ) {

		$opts['duration'] = !empty( $ca_duration ) ? $ca_duration : 1600;
		$opts['delay'] = !empty( $ca_delay ) ? $ca_delay : 250;
		
		$presetsValues = liquid_get_animation_preset( $animation_preset );
		$init_values       = $presetsValues['from'];
		$animations_values = $presetsValues['to'];
	}
	else {

		//Init values
		if ( !empty( $ca_init_translate_x ) ) { $init_values['x'] = ( int ) $ca_init_translate_x; }
		if ( !empty( $ca_init_translate_y ) ) { $init_values['y'] = ( int ) $ca_init_translate_y; }
		if ( !empty( $ca_init_translate_z ) ) { $init_values['z'] = ( int ) $ca_init_translate_z; }
	
		if ( '1' !== $ca_init_scale_x ) { $init_values['scaleX'] = ( float ) $ca_init_scale_x; }
		if ( '1' !== $ca_init_scale_y ) { $init_values['scaleY'] = ( float ) $ca_init_scale_y; }
	
		if ( !empty( $ca_init_rotate_x ) ) { $init_values['rotationX'] = ( int ) $ca_init_rotate_x; }
		if ( !empty( $ca_init_rotate_y ) ) { $init_values['rotationY'] = ( int ) $ca_init_rotate_y; }
		if ( !empty( $ca_init_rotate_z ) ) { $init_values['rotation'] = ( int ) $ca_init_rotate_z; }
		
		if ( !empty( $ca_init_origin_x ) ) { $init_values['transformOriginX'] = ( int ) $ca_init_origin_x; }
		if ( !empty( $ca_init_origin_y ) ) { $init_values['transformOriginY'] = ( int ) $ca_init_origin_y; }
		if ( !empty( $ca_init_origin_z ) ) { $init_values['transformOriginZ'] = $ca_init_origin_z; }
		
		if ( isset( $ca_init_opacity ) && '1' !== $ca_init_opacity ) { $init_values['opacity'] = ( float ) $ca_init_opacity; }
		
	
		//Animation values
		if ( !empty( $ca_init_translate_x ) ) { $animations_values['x'] = ( int ) $ca_an_translate_x; }
		if ( !empty( $ca_init_translate_y ) ) { $animations_values['y'] = ( int ) $ca_an_translate_y; }
		if ( !empty( $ca_init_translate_z ) ) { $animations_values['z'] = ( int ) $ca_an_translate_z; }
	
		if ( isset( $ca_an_scale_x ) && '1' !== $ca_init_scale_x ) { $animations_values['scaleX'] = ( float ) $ca_an_scale_x; }
		if ( isset( $ca_an_scale_y ) && '1' !== $ca_init_scale_y ) { $animations_values['scaleY'] = ( float ) $ca_an_scale_y; }
	
		if ( !empty( $ca_init_rotate_x ) ) { $animations_values['rotationX'] = ( int ) $ca_an_rotate_x; }
		if ( !empty( $ca_init_rotate_y ) ) { $animations_values['rotationY'] = ( int ) $ca_an_rotate_y; }
		if ( !empty( $ca_init_rotate_z ) ) { $animations_values['rotation'] = ( int ) $ca_an_rotate_z; }
		
		if ( !empty( $ca_an_origin_x ) ) { $animations_values['transformOriginX'] = ( int ) $ca_an_origin_x; }
		if ( !empty( $ca_an_origin_y ) ) { $animations_values['transformOriginY'] = ( int ) $ca_an_origin_y; }
		if ( !empty( $ca_an_origin_z ) ) { $animations_values['transformOriginZ'] = $ca_an_origin_z; }
	
		if ( isset( $ca_an_opacity ) && '1' !== $ca_init_opacity ) { $animations_values['opacity'] = ( float ) $ca_an_opacity; }	
	
	}
	

	$opts['initValues'] = !empty( $init_values ) ? $init_values : array();
	$opts['animations'] = !empty( $animations_values ) ? $animations_values : array();

	$wrapper_attributes[] = 'data-custom-animations="true"';
	$wrapper_attributes[] = 'data-ca-options=\'' . stripslashes( wp_json_encode( $opts ) ) . '\'';
	
}

if( 'yes' == $row_sticky_row ) {
	$css_classes[] = 'lqd-css-sticky';
}

if( 'yes' == $row_scale_bg_onhover ) {
	$css_classes[] = 'lqd-scale-bg-onhover';
}

if( 'yes' == $fade_scroll ) {
	$wrapper_attributes[] = 'data-parallax="true"';
	$wrapper_attributes[] = 'data-parallax-from=\'' . wp_json_encode( array( 'opacity' => 1 ) ) . '\'';
	$wrapper_attributes[] = 'data-parallax-to=\'' . wp_json_encode( array( 'opacity' => 0 ) ) . '\'';
	$wrapper_attributes[] = 'data-parallax-options=\'' . wp_json_encode( array( 'start' => 'top', 'end' => 'bottom top', 'staticSentinel' => '.lqd-css-sticky-wrap' ) ) . '\'';
}

$shrink_borders_out = '';
if( 'enable_shrink_borders' == $shrink_borders ) {
	
	$shrink_borders_out = '<div class="lqd-section-borders-wrap" data-shrink-borders="true">
								<div class="lqd-section-border lqd-section-border-top" data-axis="y"></div>
								<div class="lqd-section-border lqd-section-border-right" data-axis="x"></div>
								<div class="lqd-section-border lqd-section-border-bottom" data-axis="y"></div>
								<div class="lqd-section-border lqd-section-border-left" data-axis="x"></div>
							</div>';
	
}

if( !empty( $luminosity ) && 'default-auto' !== $luminosity ) {
	$wrapper_attributes[] = 'data-section-luminosity="' . $luminosity . '"';
}

//Slideshow Bg
if( $enable_slideshow_bg ) {
	$images_arr = $url_arr = $slideshow_opts = array();
	$wrapper_attributes[] = 'data-slideshow-bg="true"';
	if( !empty( $slideshow_delay ) ) {
		$slideshow_opts['delay'] = (int)$slideshow_delay;
	}
	if( !empty( $slideshow_effect ) ) {
		$slideshow_opts['effect'] = $slideshow_effect;
	}
	$images_arr = explode( ',', $slideshow_images );
	foreach( $images_arr as $image_id ) {
		$alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
		$url_arr[] = array( 'src' => wp_get_attachment_image_url( $image_id, 'full', false ), 'alt' => ( $alt ? $alt : 'Row Background Image' ) );
	}
	$slideshow_opts['imageArray'] = $url_arr;
	$wrapper_attributes[] = 'data-slideshow-options=\'' . wp_json_encode( $slideshow_opts ) . '\'';
}

if( 'custom' != $bg_position && ! empty( $bg_position ) ) {
	$bg_styles = ' background-position:' . esc_attr( $bg_position ) . ' !important;';
} 
elseif( 'custom' === $bg_position ) {
	$bg_styles = ' background-position:' . esc_attr( $bg_pos_h ) . ' ' . esc_attr( $bg_pos_v ) . ' !important; ';
}

if( 'scroll' !== $bg_attachment ){
	$bg_attachment = ' background-attachment:' .  esc_attr( $bg_attachment ) . '; ';
} else {
	$bg_attachment = '';
}

if( !empty( $gradient_bg ) ) {
	$bg_styles = 'background:' . esc_attr( $gradient_bg ) . ';';
}

$border_radius_style = '';
if( !empty( $custom_border_radius ) ) {
	$border_radius_style = 'border-radius:' . esc_attr( $custom_border_radius ) . ';';
}

if( !empty( $bg_styles ) || !empty( $bg_attachment || !empty( $border_radius_style ) ) ) {
	$wrapper_attributes[] = 'style="' . esc_attr( trim( $bg_styles . $bg_attachment . $border_radius_style ) ) . '"';	
}

if ( vc_shortcode_custom_css_has_property( $css, 'background' ) ) {	
	$wrapper_attributes[] = 'data-bg-image="' . 'url' . '"';
}

if( !empty( $data_tooltip ) ) {
	$wrapper_attributes[] = 'data-tooltip="' . esc_html( $data_tooltip ) . '"';	
}

if ( ! empty( $parallax_image ) ) {
	if ( $has_video_bg ) {
		$parallax_image_src = $parallax_image;
	} else {
		$parallax_image_id = preg_replace( '/[^\d]/', '', $parallax_image );
		$parallax_image_src = wp_get_attachment_image_src( $parallax_image_id, 'full' );
		if ( ! empty( $parallax_image_src[0] ) ) {
			$parallax_image_src = $parallax_image_src[0];
		}
	}
	$wrapper_attributes[] = 'data-vc-parallax-image="' . esc_attr( $parallax_image_src ) . '"';
}
$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( array_unique( $css_classes ) ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

$overlay_html = $row_style = '';
if( $enable_overlay ) {
	if ( ! empty( $hover_overlay_bg ) ) {
		$overlay_html = '<div class="liquid-row-overlay liquid-row-overlay-hover" style="background:' . esc_attr( $hover_overlay_bg ) . '"></div>';
	}	
	if ( ! empty( $overlay_bg ) ) {
		$overlay_html .= '<div class="liquid-row-overlay" style="background:' . esc_attr( $overlay_bg ) . '"></div>';
	}
}

$cc_circle = $cc_color_css = '';
if ( $enable_cc_circle ) {
	$cc_id  = uniqid('lqd-cc-');
	$cc_circle = '<span class="lqd-extra-cursor pos-fix ' . $cc_id  .'"></span>';
	if ( ! empty($cc_circle_color) ) {
		$cc_color_css = '.' . $cc_id . '{ background: ' . $cc_circle_color . ';  }';
	}
}

$sticky_bg_out = $sticky_bg_end_out = '';
if( 'enable_row_sticky_bg' === $row_sticky_bg ) {
	
	$sticky_bg_out = '<div class="lqd-css-sticky lqd-sticky-bg-spacer overflow-hidden">';
	if ( ! empty($bg_image) ) {
		$sticky_bg_out .= '<figure class="lqd-sticky-bg" style="background-image: url('. $bg_image .');"></figure>';
	}
	$sticky_bg_out .= $overlay_html;
	$sticky_bg_end_out = '</div>';
	
	$css_classes[] = 'bg-none';

}

$check = apply_filters( 'liquid_dinamic_css_output', '__return_true' );

if( !empty( $responsive_style ) && $check || !empty( $shadow_css ) && $check || !empty( $mobile_bg_css ) && $check || !empty($cc_color_css) && $check ) {
	$row_style = '<style>' . $responsive_style . ' ' . $shadow_css . ' ' . $mobile_bg_css . ' ' . $cc_color_css . '</style>';
}
$output .= $row_style;
$output .= '<section ' . implode( ' ', $wrapper_attributes ) . '>';
$output .= $before_content;
$output .= $video_bg_output;
if( 'enable_row_sticky_bg' !== $row_sticky_bg ) {
	$output .= $overlay_html;
}
$output .= $cc_circle;
$output .= $row_top_divider;
$output .= $row_bottom_divider;
$output .= $sticky_bg_out;
$output .= $shrink_borders_out;
$output .= $sticky_bg_end_out;
$output .= '<div class="' . $container_class . '">';
$output .= '<div class="' . implode( ' ', $row_classes ) . '">';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';
$output .= '</section>';
echo apply_filters( 'liquid_vc_row', $output );