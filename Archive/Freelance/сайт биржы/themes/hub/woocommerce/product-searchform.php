<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$search_id = uniqid( 'search-' ); 
?>
<div class="ld-module-search">
	
	<span class="ld-module-trigger" role="button" data-ld-toggle="true" data-toggle="collapse" data-target="<?php echo '#' . esc_attr( $search_id ); ?>" aria-controls="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false">
		<span class="ld-module-trigger-icon">
			<i class="icon-ld-search"></i>
		</span>
	</span>
	
	<div role="search" class="ld-module-dropdown collapse" id="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false">
		<div class="ld-search-form-container">.
			<form role="search" method="get" class="woocommerce-product-search ld-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'hub' ); ?></label>
				<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'hub' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
				<button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'hub' ); ?>"><?php echo esc_html_x( 'Search', 'submit button', 'hub' ); ?></button>
				<input type="hidden" name="post_type" value="product" />
				<span role="search" class="input-icon" data-ld-toggle="true" data-toggle="collapse" data-target="<?php echo '#' . esc_attr( $search_id ); ?>" aria-controls="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false"><i class="icon-ld-search"></i></span>
			</form>
		</div>
	</div>
	
</div>