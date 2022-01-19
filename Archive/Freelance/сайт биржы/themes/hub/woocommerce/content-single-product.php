<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;


$single_product_style = get_post_meta( $product->get_id(), 'product-page-style', true );

$sp_custom_layout_enable = get_post_meta( $product->get_id(), 'wc-custom-layout-enable', true );
$sp_custom_layout = get_post_meta( $product->get_id(), 'wc-custom-layout', true );

$sp_custom_layout_enable = $sp_custom_layout_enable !== 'off' ? $sp_custom_layout_enable : liquid_helper()->get_theme_option( 'wc-custom-layout-enable' );
$sp_custom_layout = ( empty( $sp_custom_layout ) && $sp_custom_layout_enable === 'on' ) ? liquid_helper()->get_theme_option( 'wc-custom-layout' ) : $sp_custom_layout;

if( 'on' === $sp_custom_layout_enable && !empty( $sp_custom_layout ) ) {
	if ( defined( 'ELEMENTOR_VERSION' ) && is_callable( 'Elementor\Plugin::instance' ) ) {
		echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $sp_custom_layout );
		return;
	} else {
		$sp_custom_layout_content = get_post_field( 'post_content', $sp_custom_layout );
		echo do_shortcode( $sp_custom_layout_content );
		return;
	}
}

$cols_img_classes     = 'col-lg-8 col-sm-7';
$cols_summary_classes = 'col-lg-4 col-sm-5';
$summary_info_classes = 'lqd-woo-summary-info d-md-flex flex-wrap align-items-md-center justify-content-md-between';

add_action( 'liquid_single_product_summary_after_cart', 'liquid_add_wishlist_button', 15 );
add_action( 'liquid_single_product_summary_after_cart', 'liquid_get_compare_button', 20 );

if( '1' === $single_product_style ) {

	remove_action( 'woocommerce_before_single_product', 'woocommerce_breadcrumb', 20 );
	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );	

	add_action( 'woocommerce_before_single_product_summary', 'liquid_woocommerce_show_product_images_grid', 20 );
	
	add_action( 'liquid_single_product_summary_top', 'woocommerce_breadcrumb', 1 );
	add_action( 'liquid_single_product_summary_top', 'liquid_woocommerce_single_product_nav', 5 );
	
	
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 15 );
	
	add_action( 'liquid_single_product_summary_content', 'woocommerce_template_single_add_to_cart', 10 );

	add_action( 'liquid_single_product_summary_foot', 'woocommerce_template_single_meta', 10 );
	add_action( 'liquid_single_product_summary_foot', 'woocommerce_template_single_sharing', 20 );
	
	add_action( 'liquid_after_single_product_summary_content', 'woocommerce_output_product_data_tabs', 10 );

}
elseif( '2' === $single_product_style ) {
	
	$cols_img_classes     = 'col-lg-7 col-sm-6';
	$cols_summary_classes = 'col-lg-5 col-sm-6';
	$summary_info_classes = 'lqd-woo-summary-info';

	remove_action( 'woocommerce_before_single_product', 'woocommerce_breadcrumb', 20 );
	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

	add_action( 'woocommerce_before_single_product_summary', 'liquid_woocommerce_show_product_images_stick', 20 );
	
	add_action( 'liquid_single_product_summary_top', 'woocommerce_breadcrumb', 1 );
	add_action( 'liquid_single_product_summary_top', 'woocommerce_template_single_rating', 15 );
	
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	
	add_action( 'liquid_single_product_summary_content', 'woocommerce_template_single_add_to_cart', 10 );
	
	add_action( 'liquid_single_product_summary_foot', 'woocommerce_template_single_meta', 10 );
	add_action( 'liquid_single_product_summary_foot', 'woocommerce_template_single_sharing', 20 );
	
}
else {

	$cols_img_classes     = 'col-lg-7 col-sm-6';
	$cols_summary_classes = 'col-lg-5 col-sm-6';
	
	add_action( 'liquid_single_product_summary_top', 'woocommerce_template_single_rating', 1 );
	add_action( 'liquid_single_product_summary_top', 'liquid_woocommerce_single_product_nav', 5 );

	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

	add_action( 'liquid_single_product_summary_content', 'woocommerce_template_single_add_to_cart', 10 );
	
	add_action( 'liquid_single_product_summary_foot', 'woocommerce_template_single_meta', 10 );
	add_action( 'liquid_single_product_summary_foot', 'woocommerce_template_single_sharing', 20 );

}


/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="woocommerce-message lqd-woo-added-msg" style="display:none;">
	<span class="lqd-woo-msg-adding">
		<?php esc_html_e( 'Adding product to the cart!', 'hub' ); ?>
	</span>
	<span class="lqd-woo-msg-added">
		<?php esc_html_e( 'Added to the cart!', 'hub' ); ?>
	</span>
</div>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'ld-product', $product ); ?>>
	
	<div class="row">
		<div class="<?php echo apply_filters( 'liquid_woo_single_images_col_classnames', $cols_img_classes ); ?> lqd-woo-single-images">
		<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
		?>
		</div>
		<div class="<?php echo apply_filters( 'liquid_woo_single_summary_col_classnames', $cols_summary_classes ); ?> lqd-woo-single-summary">
			
			<?php do_action( 'liquid_before_single_product_summary_content' ); ?>
			
			<div class="summary entry-summary">				
				<div class="lqd-woo-summary-top d-md-flex align-items-md-center justify-content-md-between">
					<?php do_action( 'liquid_single_product_summary_top' ); ?>
				</div>
				<div class="<?php echo apply_filters( 'liquid_woo_single_info_col_classnames', $summary_info_classes ) ; ?>">
				<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );
				?>
				</div>
				<?php do_action( 'liquid_single_product_summary_content' ); ?>
				<div class="lqd-woo-summary-after-cart d-md-flex align-items-md-center justify-content-md-between flex-wrap">
					<?php do_action( 'liquid_single_product_summary_after_cart' ); ?>
				</div>

				<div class="lqd-woo-summary-foot d-md-flex align-items-md-center justify-content-md-between">
					<?php do_action( 'liquid_single_product_summary_foot' ); ?>
				</div>
			
			</div>
			
			<?php do_action( 'liquid_after_single_product_summary_content' ); ?>
			
		</div>
	</div>
	
	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>