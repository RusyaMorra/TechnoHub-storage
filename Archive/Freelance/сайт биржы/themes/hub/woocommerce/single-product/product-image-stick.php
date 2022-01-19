<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

$gallery_id = uniqid( 'gallery-' ); 

global $product;

$post_thumbnail_id = $product->get_image_id();
$attachment_ids = array();
$gallery_ids = $product->get_gallery_image_ids();

$attachment_ids[] = $post_thumbnail_id;
$attachment_ids = array_merge( $attachment_ids, $gallery_ids );


?>

<div class="ld-media-row images row d-flex flex-wrap" data-lqd-flickity='{ "watchCSS": true }'>

	<?php
		if ( $attachment_ids && $product->get_image_id() ) {

			foreach ( $attachment_ids as $attachment_id ) {
				
				$image    = wp_get_attachment_image( $attachment_id, 'full', false );
				$alt_text = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
				$full_src = wp_get_attachment_image_src( $attachment_id, 'full' );
		
	?>

		<div class="ld-media-item icon-sm">

			<figure data-responsive-bg="true">
				<?php echo apply_filters( 'liquid_woo_single_product_image', $image ); ?>
			</figure>

			<a href="<?php echo esc_url( $full_src[0] ) ?>" class="liquid-overlay-link fresco" data-fresco-caption="<?php echo esc_attr( $alt_text ) ?>" data-fresco-group="<?php echo esc_attr( $gallery_id ); ?>"></a>

		</div>
	<?php 
			}
		} 
	?>

</div>

<div class="lqd-woo-single-images-thumbs row" data-lqd-flickity='{ "watchCSS": true, "asNavFor": ".lqd-woo-single-images .images" }'>
	<?php
	if ( $attachment_ids && $product->get_image_id() ) {
		foreach ( $attachment_ids as $attachment_id ) {
			$image    = wp_get_attachment_image( $attachment_id, 'full', false );
			$alt_text = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
			$full_src = wp_get_attachment_image_src( $attachment_id, 'full' );
	?>
	<div class="carousel-item col-xs-4">
		<div class="carousel-item-inner">
			<figure>
				<?php echo apply_filters( 'liquid_woo_single_product_image', $image ); ?>
			</figure>
		</div>
	</div>
	<?php 
		}
	} 
	?>
</div>