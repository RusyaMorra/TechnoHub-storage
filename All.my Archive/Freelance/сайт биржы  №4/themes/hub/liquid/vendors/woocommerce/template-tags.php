<?php
/**
 * Custom template tags used to integrate this theme with WooCommerce.
 *
 * @package liquid
 */
 
/**
 * Displays woocommerce headling including: result count, ordering dropdown, list view switcher
 */
function liquid_woocommere_top_bar_grid_list_selector() {

?>
<div class="col-md-3 lqd-shop-topbar-view-toggle">
	<ul class="lqd-woo-view-toggle reset-ul inline-nav d-flex align-items-center">
	<?php
		global $wp;
		//$url =  add_query_arg( $wp->query_vars, home_url() );
		$url = home_url( $wp->request );
		$view_type = liquid_woocommerce_get_products_list_view_type();
		if ( is_page() ):
			$page_id = get_the_ID();
			$shop_page_url = get_permalink( $page_id );
		elseif( is_shop() ) :
			$page_id = wc_get_page_id( 'shop' );
			$shop_page_url = get_permalink( $page_id );
		else:
			$shop_page_url = $url;
		endif;
		
		$list_view = liquid_helper()->add_to_url_from_get( add_query_arg( 'view=list', '', $shop_page_url ), array( 'view' ) );
		$grid_view = liquid_helper()->add_to_url_from_get( add_query_arg( '', '', $shop_page_url ), array( 'view' ) );
	?>
		<li class="lqd-view-grid">
			<a href="<?php echo esc_url( $grid_view ); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" stroke="#000">
					<rect width="7" height="7" x=".5" y=".5"/>
					<rect width="7" height="7" x="10.5" y=".5"/>
					<rect width="7" height="7" x=".5" y="10.5"/>
					<rect width="7" height="7" x="10.5" y="10.5"/>
				</svg>
			</a>
		</li>
		<li class="lqd-view-list">
			<a href="<?php echo esc_url( $list_view ); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none" stroke="#000">
					<line x2="17" y1=".5" y2=".5"/>
					<line x2="17" y1="7.5" y2="7.5"/>
					<line x2="17" y1="14.5" y2="14.5"/>
				</svg>
			</a>
		</li>
	</ul>
</div>
<?php
}

function liquid_woo_top_bar_product_categories_trigger() { 

$show_only_mobile_class = '';

$label      = liquid_helper()->get_theme_option( 'wc-widget-side-drawer-label' );
$sidebar_id = liquid_helper()->get_theme_option( 'wc-widget-side-drawer-sidebar-id' ); 	
$only_mobile = liquid_helper()->get_theme_option( 'wc-widget-side-drawer-mobile' );
if( 'yes' === $only_mobile ) {
	$show_only_mobile_class = 'lqd-visible-mobile';
}

?>

<div class="col-md-3 lqd-shop-topbar-ajax-filter <?php echo esc_html( $show_only_mobile_class ); ?>">
	<div class="lqd-woo-ajax-filter ld-module-sd ld-module-sd-left">

		<button
		class="nav-trigger style-5 collapsed"
		role="button"
		type="button"
		data-ld-toggle="true"
		data-toggle="collapse"
		data-toggle-options='{"cloneTriggerInTarget": true }'
		data-target="#lqd-product-filter-sidedrawer"
		aria-expanded="false"
		aria-controls="lqd-product-filter-sidedrawer">
			<span class="bars">
				<span class="bars-inner">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</span>
			</span>
			<span class="txt"><?php echo esc_html( $label ); ?></span>
		</button>

		<div class="ld-module-sd ld-module-sd-left ld-module-prodduct-filter-sidedrawer" data-move-element='{"target": "body", "type": "appendTo"}'>
			<aside class="ld-module-dropdown collapse lqd-main-sidebar my-0" aria-expanded="false" id="lqd-product-filter-sidedrawer">
				<div class="ld-sd-wrap">

					<div class="ld-sd-inner">
							
						<?php if( !empty( $sidebar_id ) && is_active_sidebar( $sidebar_id ) ) { ?>
						
						<?php dynamic_sidebar( $sidebar_id ); ?>
						
						<?php } else { ?>	
						<!-- WIDGETS WILL BE HERE -->
						<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
							<h3 class="widget-title"><?php esc_html_e( 'Product Categories', 'hub' ) ?></h3>
							<ul class="product-categories">
							<?php	

								$list_args = array(
									'hierarchical' => true,
									'taxonomy'     => 'product_cat',
									'hide_empty'   => true,
									'show_count'   => 1,
									'title_li'     => '' 
								);							 
								wp_list_categories( $list_args );

							?>
							</ul>
						</div>
						<?php } ?>

					</div>

				</div>
			</aside>

			<div class="lqd-module-backdrop"></div>
		</div>

	</div>
</div>
	
<?php	
}


function liquid_woo_top_bar_show_products() { 
	
	$values = liquid_wc_get_posts_per_page_dropdown_values();
	$current_posts_per_page_value = liquid_wc_get_current_posts_per_page_value();

	if ( is_array( $values ) ):
?>

<div class="col-md-3 lqd-shop-topbar-view-count">
	<ul class="lqd-woo-view-count reset-ul inline-nav d-flex align-items-center postsperpage">

		<li><?php esc_html_e( 'Show:', 'hub' ); ?> </li>
		<?php 
		foreach ( $values as $val ):
			if ( ! empty ( $val ) ) {
		?>
		<li><a href="?postsperpage=<?php echo esc_attr( $val ); ?>" data-default="<?php echo esc_attr($current_posts_per_page_value); ?>" <?php selected( $val, $current_posts_per_page_value ); ?> data-value="<?php echo esc_attr( $val ); ?>"><?php echo esc_html( $val ); ?></a></li>
		<?php 
			}		
		endforeach; 
		?>

	</ul>
</div>

<?php
	endif;
}