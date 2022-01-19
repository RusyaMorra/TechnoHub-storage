<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $source
 * @var $image
 * @var $custom_src
 * @var $onclick
 * @var $img_size
 * @var $external_img_size
 * @var $caption
 * @var $img_link_large
 * @var $link
 * @var $img_link_target
 * @var $alignment
 * @var $el_class
 * @var $el_id
 * @var $css_animation
 * @var $style
 * @var $external_style
 * @var $border_color
 * @var $css
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Single_image
 */
$title = $source = $image = $custom_src = $onclick = $img_size = $image_max_width = $external_img_size =
$caption = $img_link_large = $link = $img_link_target = $alignment = $el_class = $el_id = $css_animation = $style = $external_style = $border_color = $css = $invisible = $enable_opacity = $opacity = $add_caption = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$default_src = vc_asset_url( 'vc/no_image.svg' );

// backward compatibility. since 4.6
if ( empty( $onclick ) && isset( $img_link_large ) && 'yes' === $img_link_large ) {
	$onclick = 'img_link_large';
} elseif ( empty( $atts['onclick'] ) && ( ! isset( $atts['img_link_large'] ) || 'yes' !== $atts['img_link_large'] ) ) {
	$onclick = 'custom_link';
}

if ( 'external_link' === $source ) {
	$style = $external_style;
	$border_color = $external_border_color;
}

$border_color = ( '' !== $border_color ) ? ' vc_box_border_' . $border_color : '';

$img = false;

switch ( $source ) {
	case 'media_library':
	case 'featured_image':

		if ( 'featured_image' === $source ) {
			$post_id = get_the_ID();
			if ( $post_id && has_post_thumbnail( $post_id ) ) {
				$img_id = get_post_thumbnail_id( $post_id );
			} else {
				$img_id = 0;
			}
		} else {
			$img_id = preg_replace( '/[^\d]/', '', $image );
		}

		// set rectangular
		if ( preg_match( '/_circle_2$/', $style ) ) {
			$style = preg_replace( '/_circle_2$/', '_circle', $style );
			$img_size = $this->getImageSquareSize( $img_id, $img_size );
		}

		if ( ! $img_size ) {
			$img_size = 'medium';
		}

		$img = wpb_getImageBySize( array(
			'attach_id' => $img_id,
			'thumb_size' => $img_size,
			'class' => 'vc_single_image-img',
		) );

		// don't show placeholder in public version if post doesn't have featured image
		if ( 'featured_image' === $source ) {
			if ( ! $img && 'page' === vc_manager()->mode() ) {
				return;
			}
		}

		break;

	case 'external_link':
		$dimensions = vcExtractDimensions( $external_img_size );
		$hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';

		$custom_src = $custom_src ? esc_attr( $custom_src ) : $default_src;

		$img = array(
			'thumbnail' => '<img class="vc_single_image-img" ' . $hwstring . ' src="' . $custom_src . '" />',
		);
		break;

	default:
		$img = false;
}

if ( ! $img ) {
	$img['thumbnail'] = '<img class="vc_img-placeholder vc_single_image-img" src="' . $default_src . '" />';
}

$el_class = $this->getExtraClass( $el_class );

$a_attrs = array();

switch ( $onclick ) {
	case 'img_link_large':

		if ( 'external_link' === $source ) {
			$link = $custom_src;
		} else {
			$link = wp_get_attachment_image_src( $img_id, 'large' );
			$link = $link[0];
		}

		break;

	case 'link_image':

		$a_attrs['class'] = 'fresco';

		if ( 'external_link' === $source ) {
			$link = $custom_src;
		} else {
			$link = wp_get_attachment_image_src( $img_id, 'large' );
			$link = $link[0];
		}

		break;

	case 'custom_link':
		// $link is already defined
		break;
}

$css_box_class = vc_shortcode_custom_css_class( $css, ' ' );

$wrapperClass = 'vc_single_image-wrapper ' . $style . ' ' . $border_color . ' ' . $css_box_class;

$src = wp_get_attachment_image_url( $img_id, 'full', false );
$filetype = wp_check_filetype( $src );
if( 'svg' === $filetype['ext'] ) {
	$wrapperClass .= ' loaded ';
} 

if ( $link ) {

	// parse link
	$link = trim( $link );
	$link = ( '||' === $link ) ? '' : $link;
	$link = vc_build_link( $link );
	$attributes = array();
	$use_link = false;
	if ( strlen( $link['url'] ) > 0 ) {
		$use_link = true;
		$a_href = $link['url'];
		$a_href = apply_filters( 'vc_single_image_a_href', $a_href );
		$a_title = $link['title'];
		$a_title = apply_filters( 'vc_single_image_a_title', $a_title );
		$a_target = $link['target'];
		$a_rel = $link['rel'];
	}
	if ( $use_link ) {
		$attributes[] = 'href="' . esc_url( trim( $a_href ) ) . '"';
		$attributes[] = 'title="' . esc_attr( trim( $a_title ) ) . '"';
		if ( ! empty( $a_target ) ) {
			$attributes[] = 'target="' . esc_attr( trim( $a_target ) ) . '"';
		}
		if ( ! empty( $a_rel ) ) {
			$attributes[] = 'rel="' . esc_attr( trim( $a_rel ) ) . '"';
		}
	}
	$attributes = implode( ' ', $attributes );
	$html = '<a ' . $attributes . '>' . $img['thumbnail'] . '</a>';
} else {
	$html = '<div class="' . $wrapperClass . '">' . $img['thumbnail'] . '</div>';
}

$class_to_filter = 'wpb_single_image wpb_content_element vc_align_' . $alignment . ' ' . $this->getCSSAnimation( $css_animation );
$class_to_filter .=  $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );

if ( in_array( $source, array( 'media_library', 'featured_image' ) ) && 'yes' === $add_caption ) {
	$post = get_post( $img_id );
	$caption = $post->post_excerpt;
} else {
	if ( 'external_link' === $source ) {
		$add_caption = 'yes';
	}
}

$liquid_class = uniqid( 'liquid_vc_single_image-' );
$css_class .= ' ' . $liquid_class .' ';
$custom_style = $selector = '';

if( !empty( $image_max_width ) ) {
	$selector .= '.' . $liquid_class . ' figure img, .'. $liquid_class . ' figure svg{ max-width:' . $image_max_width . '}';
}
if( $invisible ) {
	$css_class .= ' invisible ';
}
if( $enable_opacity ) {
	$css_class .= ' ld-img-hover-opacity ';
	$selector .= '.' . $liquid_class . '{ opacity:' . $opacity . '}';
}
if( !empty( $selector ) ) {
	$custom_style = sprintf( '<style>%s</style>', $selector );
}


if ( 'yes' === $add_caption && '' !== $caption ) {
	$html .= '<figcaption class="vc_figure-caption">' . esc_html( $caption ) . '</figcaption>';
}
$wrapper_attributes = array();
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}

$output = $custom_style . '
	<div ' . implode( ' ', $wrapper_attributes ) . ' class="' . esc_attr( trim( $css_class ) ) . '">
		' . wpb_widget_title( array( 'title' => $title, 'extraclass' => 'wpb_singleimage_heading' ) ) . '
		<figure class="wpb_wrapper vc_figure">
			' . $html . '
		</figure>
	</div>
';
echo apply_filters( 'liquid_vc_single_image', $output );