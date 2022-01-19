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
 * @var WPBakeryShortCode_Vc_Row $this
 */
$el_class = $full_height = $parallax_speed_bg = $parallax_speed_video = $full_width = $flex_row = $columns_placement = $content_placement = $parallax = $parallax_image = $css = $el_id = $video_bg = $video_bg_url = $video_bg_parallax = $css_animation = '';
$disable_element = $section_scroll = '';
$output = '';

$el_class = $full_height = $parallax_speed_bg = $parallax_speed_video = $full_width = $equal_height = $flex_row = $columns_placement = $content_placement = $parallax = $parallax_image = $css = $el_id = $video_bg = $video_bg_url = $video_bg_parallax = $css_animation = $enable_overlay = $gradient_bg = $overlay_bg = $hover_overlay_bg = $enable_slideshow_bg = $slideshow_delay = $slideshow_effect = $slideshow_images = $bg_position = $bg_pos_h = $bg_pos_v = $bg_attachment = $bg_styles = $row_svg_divider = $sticky_bg = $row_sticky_row = $row_scale_bg_onhover = $enable_cc_circle = $cc_circle_color = $fade_scroll = $shrink_borders = $data_tooltip = $block_content_alignment = $mobile_bg_gradient = $row_hide = $luminosity = '';
$disable_element = '';

$row_box_shadow = $custom_border_radius = '';

//Custom Animation
$enable_content_animation = $animation_preset = $ca_duration = $ca_start_delay = $ca_delay = $ca_easing = $ca_direction  = $ca_init_translate_x = $ca_init_translate_y = $ca_init_translate_z = $ca_init_scale_x = $ca_init_scale_y = $ca_init_rotate_x = $ca_init_rotate_y = $ca_init_rotate_z = $ca_init_opacity = $ca_an_translate_x = $ca_an_translate_y = $ca_an_translate_z = $ca_an_scale_x = $ca_an_scale_y = $ca_an_rotate_x = $ca_an_rotate_y = $ca_an_rotate_z = $ca_an_opacity = $ca_init_origin_x = $ca_init_origin_y = $ca_init_origin_z = $ca_an_origin_x = $ca_an_origin_y = $ca_an_origin_z = '';

$output = $before_content = $responsive_style = $mobile_bg_css = $video_bg_source = $video_local_mp4_url = $video_local_webm_url = $y_start_time = $y_end_time = $mobile_video_bg = '';

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

wp_enqueue_script( 'wpb_composer_front_js' );

$el_class = $this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation );

$css_classes = array(
	'vc_section',
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);

if ( 'yes' === $disable_element ) {
	if ( vc_is_page_editable() ) {
		$css_classes[] = 'vc_hidden-lg vc_hidden-xs vc_hidden-sm vc_hidden-md';
	} else {
		return '';
	}
}

if( !empty( $responsive_css ) ) {
	$responsive_id = uniqid( 'liquid-section-responsive-' );
	$responsive_style = Liquid_Responsive_Css_Editor::generate_css( $responsive_css, $responsive_id );
	$css_classes[] = $responsive_id;
}

if ( vc_shortcode_custom_css_has_property( $css, array(
	'border',
	'background',
) ) || $video_bg || $parallax
) {
	$css_classes[] = 'vc_section-has-fill';
}


$wrapper_attributes = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}
if ( ! empty( $full_width ) ) {
	$wrapper_attributes[] = 'data-vc-full-width="true"';
	$wrapper_attributes[] = 'data-vc-full-width-init="false"';
	if ( 'stretch_row_content' === $full_width ) {
		$wrapper_attributes[] = 'data-vc-stretch-content="true"';
	};
}

if( 'yes' === $section_scroll ) {
	$wrapper_attributes[] = 'data-lqd-section-scroll="true"';
}

if ( ! empty( $full_height ) ) {
	$css_classes[] = 'vc_row-o-full-height';
}

if ( ! empty( $content_placement ) ) {
	$flex_row = true;
	$css_classes[] = 'vc_section-o-content-' . $content_placement;
}

if ( ! empty( $flex_row ) ) {
	$css_classes[] = 'vc_section-flex';
}

$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );

if( 'enable_parallax' == $parallax ) {
	$wrapper_attributes[] = 'data-parallax="true"';
	$wrapper_attributes[] = 'data-parallax-options=\'' . wp_json_encode( array( 'parallaxBG' => true ) ) . '\'';
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

if( !empty( $bg_styles ) || !empty( $bg_attachment ) ) {
	$wrapper_attributes[] = 'style="' . esc_attr( trim( $bg_styles . $bg_attachment ) ) . '"';	
}

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( array_unique( $css_classes ) ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';

$check = apply_filters( 'liquid_dinamic_css_output', '__return_true' );

if( !empty( $responsive_style ) && $check ) {
	$section_style = '<style>' . $responsive_style . '</style>';
}
$output .= $section_style;
$output .= '<section ' . implode( ' ', $wrapper_attributes ) . '>';
if( 'yes' === $section_scroll ) {
	$output .= '<div class="lqd-section-scroll-sections">';
}
$output .= wpb_js_remove_wpautop( $content );
if( 'yes' === $section_scroll ) {
	$output .= '</div>';
}
$output .= '</section>';

return $output;
