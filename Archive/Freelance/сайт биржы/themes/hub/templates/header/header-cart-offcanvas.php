<?php

// check
if( !liquid_helper()->is_woocommerce_active() || is_admin() ) {
	return;
}

$order_count = WC()->cart->get_cart_contents_count();
$is_empty    = WC()->cart->is_empty();
$sub_total   = WC()->cart->get_cart_subtotal();
$cart_id     = uniqid( 'cart-' );

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$show_icon = ($show_icon === 'yes') ? 'lqd-module-show-icon' : 'lqd-module-hide-icon';
	$show_counter = ($show_counter === 'yes') ? 'lqd-module-show-badge' : 'lqd-module-hide-badge';
} else {
	$icon_opts = liquid_get_icon( $atts );
	$icon      = !empty( $icon_opts['type'] ) && ! empty( $icon_opts['icon'] ) ? $icon_opts['icon'] : 'lqd-icn-ess icon-ld-cart';
	$show_icon =  $atts['show_icon'];
	$show_counter =  $atts['show_counter'];
}
$cart_text =  $atts['cart_text'];
$icon_text =  $atts['icon_text'];
$icon_text_align =  $atts['icon_text_align'];
$icon_style =  $atts['icon_style'];
$counter_style =  $atts['counter_style'];

$trigger_class = array(
	'ld-module-trigger',
	'collapsed',
	$icon_text_align,
	$show_icon,
	$icon_style,
	$counter_style
);

?>

<div class="ld-module-cart ld-module-cart-offcanvas">
	
	<span class="<?php echo liquid_helper()->sanitize_html_classes( $trigger_class ) ?>" data-ld-toggle="true" data-toggle="collapse" data-target="<?php echo '#' . esc_attr( $cart_id ); ?>" aria-controls="<?php echo esc_attr( $cart_id ) ?>" aria-expanded="false">
		<?php if ( 'lqd-module-show-icon' === $show_icon )  { ?>
			<span class="ld-module-trigger-icon">
			<?php if ( class_exists( 'Liquid_Elementor_Addons' )) : ?>
					<?php if ( empty($icon['value']) ): ?>
						<i class="<?php echo esc_attr( 'lqd-icn-ess icon-ld-cart' ) ?>"></i>
					<?php else: ?>
						<?php \Elementor\Icons_Manager::render_icon( $atts['icon'], [ 'aria-hidden' => 'true' ] ); ?>
					<?php endif; ?>
				<?php else: ?>
					<i class="<?php echo esc_attr( $icon ) ?>"></i>
				<?php endif; ?>
				<span class="ld-module-trigger-close-cross"></span>
			</span>
		<?php } ?>
		<span class="ld-module-trigger-txt"><?php echo do_shortcode($icon_text) ?></span>
		<?php if ( 'lqd-module-show-badge' === $show_counter )  { ?>
			<?php printf( '<span class="ld-module-trigger-count ld-module-trigger-count-sup header-cart-fragments">%s</span>', $order_count ); ?>
		<?php } ?>
	</span>
	
	<div class="ld-module-dropdown ld-module-cart-offcanvas-dropdown collapse" id="<?php echo esc_attr( $cart_id ); ?>" aria-expanded="false">
		<div class="ld-cart-contents">

			<div class="header-quickcart">
				<?php liquid_woocommerce_header_cart() ?>
			</div>
			
			<?php if( !$is_empty && !empty( $cart_footer_text ) ) { ?>
			<div class="ld-cart-message">
				<?php echo wp_kses_post( $cart_footer_text ); ?>
			</div>
			<?php } ?>
			
		</div>
	</div>

</div>