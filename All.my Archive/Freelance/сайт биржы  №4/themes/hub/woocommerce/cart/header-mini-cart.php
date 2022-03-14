<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$order_count = WC()->cart->get_cart_contents_count();
$is_empty    = WC()->cart->is_empty();
$sub_total   = WC()->cart->get_cart_subtotal();

?>
<span class="item-count" style="display:none;"><?php echo esc_attr( $order_count ); ?></span>
<div class="ld-cart-head d-flex align-items-center h2">
	<?php esc_html_e( 'Cart', 'hub' ); ?> <span class="ld-module-trigger-count d-flex align-items-centeer justify-content-center"><?php echo esc_html( $order_count ) ?></span>
</div>

<div class="ld-cart-products woocommerce-mini-cart-item pos-rel">
	
	<?php if ( ! $is_empty ) : ?>

		<?php
	
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
	
				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
					$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
					$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>	
					<div class="<?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'ld-cart-product', $cart_item, $cart_item_key ) ); ?>">
						<?php
						echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
							'<a href="%s" class="ld-cart-product-remove remove remove_from_cart_button" title="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"><i class="lqd-icn-ess icon-ion-ios-close"></i></a>',
							esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
							__( 'Remove this item', 'hub' ),
							esc_attr( $product_id ),
							esc_attr( $cart_item_key ),
							esc_attr( $_product->get_sku() )
						), $cart_item_key );
						?>
						<div class="ld-cart-product-info">
						<?php if ( empty( $product_permalink ) ) : ?>
							<?php if( $thumbnail ) { ?>
								<figure>
									<?php echo apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key ); ?>
								</figure>
							<?php } ?>
							<span class="ld-cart-product-details">
								<span class="ld-cart-product-name h2 my-0"><?php echo wp_kses_post( $product_name ); ?></span>
								<?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>
							</span>
						<?php else : ?>
							<a href="<?php echo esc_url( $product_permalink ); ?>">
								<?php if( $thumbnail ) { ?>
									<figure>
										<?php echo apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key ); ?>
									</figure>
								<?php } ?>
								<span class="ld-cart-product-details">
									<span class="ld-cart-product-name h2 my-0"><?php echo wp_kses_post( $product_name ); ?></span>
									<?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>

									<span class="ld-cart-product-price">
										<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '<span>%s</span> <span class="ld-cart-product-quantity">&times;%s</span>', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
									</span>

								</span>
							</a>
						<?php endif; ?>
						</div>

					</div>
					<?php
				}
			}
		?>	

	<?php else : ?>

		<div class="empty"><h3><?php esc_html_e( 'No products in the cart.', 'hub' ); ?></h3></div>

	<?php endif; ?>
	
</div>

<?php if ( !$is_empty ) : ?>
<div class="ld-cart-foot">
	<div class="ld-cart-total">
		<span class="ld-cart-total-label font-weight-bold text-uppercase ltr-sp-175"><?php esc_html_e( 'Subtotal', 'hub' ); ?></span>
		<span class="ld-cart-total-price color-primary"><?php echo wp_kses_post( $sub_total ); ?></span>
	</div>
	<div class="ld-cart-button">
		<a href="<?php echo esc_url( WC()->cart->get_checkout_url() ); ?>" class="btn btn-xlg btn-solid text-uppercase ltr-sp-175">
			<span>
				<span class="btn-txt"><?php esc_html_e( 'Checkout', 'hub' ); ?></span>
				<span class="btn-icon"><i class="lqd-icn-ess icon-ion-ios-arrow-forward"></i></span>
			</span>
		</a>
		<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="btn btn-xlg btn-naked text-uppercase ltr-sp-175">
			<span>
				<span class="btn-txt"><?php esc_html_e( 'View Cart', 'hub' ); ?></span>
				<span class="btn-icon"><i class="lqd-icn-ess icon-ion-ios-arrow-forward"></i></span>
			</span>
		</a>
	</div>
</div>
<?php endif; ?>