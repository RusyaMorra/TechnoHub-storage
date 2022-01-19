<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $full_width
 * @var $css
 * @var $el_id
 * @var $equal_height
 * @var $content_placement
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row_Inner
 */
$el_class = $full_width = $equal_height = $content_placement = $css = $gradient_bg = $parallax = $row_scale_bg_onhover = $parallax_image = $el_id = '';
$disable_element = '';
$output = $after_output = '';

//Custom Animation
$enable_content_animation = $ca_duration = $ca_start_delay = $ca_delay = $ca_easing  = $ca_init_translate_x = $ca_init_translate_y = $ca_init_translate_z = $ca_init_scale_x = $ca_init_scale_y = $ca_init_rotate_x = $ca_init_rotate_y = $ca_init_rotate_z = $ca_init_opacity = $ca_an_translate_x = $ca_an_translate_y = $ca_an_translate_z = $ca_an_scale_x = $ca_an_scale_y = $ca_an_rotate_x = $ca_an_rotate_y = $ca_an_rotate_z = $ca_an_opacity = $ca_init_origin_x = $ca_init_origin_y = $ca_init_origin_z = $ca_an_origin_x = $ca_an_origin_y = $ca_an_origin_z = $enable_slideshow_bg = $slideshow_delay = $slideshow_effect = $slideshow_images = $bg_position = $bg_pos_h = $bg_pos_v = $bg_attachment = $bg_styles = $row_hide = '';
$responsive_style = $enable_overlay = $before_content = $custom_border_radius = '';

$row_box_shadow = '';

$bg_image = '';

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class );
$css_classes = array(
	'vc_row',
	'vc_inner',
	'vc_row-fluid',
	$row_hide,
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);

$row_classes = array(
	'row',
	'ld-row',
	'ld-row-inner',
);

if ( 'yes' === $disable_element ) {
	if ( vc_is_page_editable() ) {
		$css_classes[] = 'vc_hidden-lg vc_hidden-xs vc_hidden-sm vc_hidden-md';
	} else {
		return '';
	}
}

$container_class = 'ld-container container';
if ( ! empty( $full_width ) ) {

	$container_class = 'ld-container container-fluid';
	if ( 'stretch_row_content' === $full_width ) {

	} elseif ( 'stretch_row_content_no_spaces' === $full_width ) {

		$css_classes[] = 'vc_row-no-padding';
	};
}

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

if ( vc_shortcode_custom_css_has_property( $css, array(
	'border',
	'background',
) ) ) {
	$css_classes[] = 'vc_row-has-fill';
}

if ( '15' !== $atts['gap'] ) {
	$css_classes[] = 'vc_column-gap-' . $atts['gap'];
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

$wrapper_attributes = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
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
		
		if ( !empty( $ca_init_origin_x ) ) {
			$init_values['transformOriginX'] = ( int ) $ca_init_origin_x;
		}
		if ( !empty( $ca_init_origin_y ) ) {
			$init_values['transformOriginY'] = ( int ) $ca_init_origin_y;
		}
		if ( !empty( $ca_init_origin_z ) ) {
			$init_values['transformOriginZ'] = $ca_init_origin_z;
		}
		
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

if( 'yes' == $row_scale_bg_onhover ) {
	$css_classes[] = 'lqd-scale-bg-onhover';
}

//Add background image to data attibute
if( vc_shortcode_custom_css_has_property( $css, array( 'background' ) ) ) {
	
	$matches = array();
	preg_match_all( '~\bbackground(-image)?\s*:(.*?)\(\s*(\'|")?(?<image>.*?)\3?\s*\)~i', $css , $matches );
	$images = $matches['image'];
	$bg_image = isset( $images[0] ) ? esc_url( $images[0] ) : '';

};

if( !empty( $bg_image ) ) {

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
	$wrapper_attributes[] = 'data-slideshow-options=' . wp_json_encode( $slideshow_opts );
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

if( !empty( $bg_styles ) || !empty( $bg_attachment ) || !empty( $border_radius_style ) ) {
	$wrapper_attributes[] = 'style="' . esc_attr( trim( $bg_styles . $bg_attachment . $border_radius_style ) ) . '"';	
}

$overlay_html = $row_style = '';
if( $enable_overlay ) {
	if ( ! empty( $hover_overlay_bg ) ) {
		$overlay_html = '<div class="liquid-row-overlay liquid-row-overlay-hover" style="background:' . esc_attr( $hover_overlay_bg ) . '"></div>';
	}	
	if ( ! empty( $overlay_bg ) ) {
		$overlay_html .= '<div class="liquid-row-overlay" style="background:' . esc_attr( $overlay_bg ) . '"></div>';
	}
	
}

$check = apply_filters( 'liquid_dinamic_css_output', '__return_true' );

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( array_unique( $css_classes ) ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';
if( !empty( $responsive_style ) && $check || !empty( $shadow_css ) && $check ) {
	$output .= '<style>' . $responsive_style . ' ' . $shadow_css . '</style>';
}
$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';
$output .= $before_content;
$output .= $overlay_html;
$output .= '<div class="' . $container_class . '">';
$output .= '<div class="' . implode( ' ', $row_classes ) . '">';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';
$output .= $after_output;

echo apply_filters( 'liquid_vc_row_inner', $output );