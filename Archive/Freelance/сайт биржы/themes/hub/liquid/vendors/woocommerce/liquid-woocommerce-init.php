<?php
/**
 * LiquidThemes WooCommerce init
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/**
 * Load WooCommerce compatibility files.
 */
require get_template_directory() . '/liquid/vendors/woocommerce/hooks.php';
require get_template_directory() . '/liquid/vendors/woocommerce/functions.php';
require get_template_directory() . '/liquid/vendors/woocommerce/template-tags.php';
require get_template_directory() . '/liquid/vendors/woocommerce/options.php';
require get_template_directory() . '/liquid/vendors/woocommerce/metaboxes.php';

function liquid_single_woo_scripts() {

	if ( apply_filters( 'liquid_ajax_add_to_cart_single_product', '__return_true' ) ) {
		wp_enqueue_script( 'liquid_add_to_cart_ajax', get_template_directory_uri() . '/liquid/vendors/woocommerce/js/liquid_add_to_cart_ajax.js', array( 'jquery' ), null, true );
		wp_localize_script( 'liquid_add_to_cart_ajax', 'liquid_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	}
}
add_action( 'wp_enqueue_scripts', 'liquid_single_woo_scripts' );

function liquid_wc_enqueue_scripts() {
	wp_enqueue_style( 'liquid_wc', get_template_directory_uri() . '/liquid/vendors/woocommerce/css/liquid_wc.min.css', [], null );
	wp_enqueue_script( 'liquid_filter_ajax', get_template_directory_uri() . '/liquid/vendors/woocommerce/js/liquid_filter_ajax.js', array( 'jquery' ), null, true );

	$options = [
		'wcHiddenSidebar'            => liquid_helper()->get_option( 'wc-archive-show-product-cats' ),
		'wcAjaxFilter'               => liquid_helper()->get_option( 'wc-ajax-filter' ),
		'wcAjaxPagination'           => liquid_helper()->get_option( 'wc-ajax-pagination' ),
		'wcAjaxPaginationType'       => liquid_helper()->get_option( 'wc-ajax-pagination-type' ),
		'wcAjaxPaginationButtonText' => liquid_helper()->get_option( 'wc-ajax-pagination-button-text' ),
	];

	if ( isset( $_GET['opt'] ) && isset( $options[ $_GET['opt'] ] ) ) {
		$options[ $_GET['opt'] ] = 'on';
	}

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	wp_localize_script( 'liquid_filter_ajax', 'wcLiquid', [
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'termId'  => is_product_category() ? get_queried_object()->term_id : '',
		'paged'   => $paged,
		'options' => $options,
	] );
}

function liquid_wc_list_product_cats( $name, $term ) {
	return '<input type="hidden" data-term-id="' . $term->term_id . '"></input>' . $name . '';
}

function liquid_wc_get_filtered_term_product_counts_query( $query ) {

	$where = explode('terms.term_id', $query['where']);

	$query['where'] = "WHERE terms.term_id {$where[1]}";

	return $query;
}

function liquid_wc_layered_nav_count( $html, $count, $term ) {
	$filter = str_replace( 'pa_', 'filter_', $term->taxonomy );

	return str_replace( 'class="count"', 'class="count" data-slug="' . $term->slug . '" data-filter="' . $filter . '"', $html );
}

function liquid_wc_price_filter_sql(){
	global $wpdb;

	return "SELECT min( min_price ) as min_price, MAX( max_price ) as max_price FROM {$wpdb->wc_product_meta_lookup}";
}


function liquid_wc_filter_ajax() {

	$filters     = $_POST['filters'];
	$page        = absint( $_POST['page'] );
	$orderby     = $_POST['orderby'];
	$per_page    = liquid_helper()->get_option( 'ld_woo_products_per_page', '12' );
	$category_id = isset( $filters['term_id'] ) ? $filters['term_id'] : '';

	//default args for WP_query
	$args = [
		'post_type'              => [ 'product', 'product_variation' ],
		'post_status'            => 'publish',
		'posts_per_page'         => - 1,
		'posts_per_archive_page' => - 1,
		'fields'                 => 'ids'
	];

	//add category to tax_query
	if ( $category_id ) {
		$parent_category = get_term( $category_id, 'product_cat' );
		$categories      = get_term_children( $parent_category->term_id, 'product_cat' );
		$categories      = array_merge( $categories, [ $parent_category->term_id ] );

		$args['tax_query'] = [
			[
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => $categories,
				'operator' => 'IN'
			]
		];
	}

	unset( $filters['term_id'] );

	//add price to meta_query
	if ( isset( $filters['min_price'] ) && isset( $filters['max_price'] ) ) {
		$args['meta_query'] = [
			'relation' => 'AND',
			[
				'key'     => '_price',
				'value'   => intval( $filters['min_price'] ),
				'compare' => '>=',
				'type'    => 'NUMERIC'
			],
			[
				'key'     => '_price',
				'value'   => intval( $filters['max_price'] ),
				'compare' => '<=',
				'type'    => 'NUMERIC'
			],
		];
	}

	unset( $filters['min_price'] );
	unset( $filters['max_price'] );

	//add some filters to tax_query
	if ( $filters ) {

		$args['tax_query'] = isset( $args['tax_query'] ) ? array_merge( $args['tax_query'], [ 'relation' => 'AND' ] ) : [ [ 'relation' => 'AND' ] ];

		$tax_query = [];

		foreach ( $filters as $filter_key => $filter_val ) {
			$tax_query[] = [
				'taxonomy' => str_replace( 'filter_', 'pa_', $filter_key ),
				'field'    => 'slug',
				'terms'    => explode( ',', $filter_val ),
				'operator' => 'AND'
			];
		}

		$args['tax_query'] = array_merge( $args['tax_query'], $tax_query );
	}

	$query = new WP_Query( $args );

	$products = $query->get_posts();

	//Set GET param for products shortcode
	$_GET['product-page'] = $page ? $page : 1;
	$_GET['orderby']      = $orderby ? $orderby : 'menu_order';

	if ( $products ) {
		add_filter( 'woocommerce_pagination_args', 'liquid_wc_pagination_args' );
		$html = do_shortcode( '[products ids="' . implode( ',', $products ) . '" paginate="true" limit="' . $per_page . '"]' );
	} else {
		ob_start();
		liquid_start_shop_topbar_container();
		liquid_end_shop_topbar_container();
		wc_no_products_found();
		$html = '<div>' . ob_get_clean() . '</div>';
	}

	wp_send_json_success( [ 'html' => $html, 'products' => $products, 'args' => $args, 'query' => $query->request ] );
}

function liquid_wc_pagination_args( $args ) {
	$args['base']   = '/page/%#%';
	$args['format'] = '';

	return $args;
}

function liquid_wc_body_class( $classes ) {
	if ( liquid_helper()->get_option( 'wc-archive-show-product-cats' ) === 'on' || ( isset( $_GET['opt'] ) && $_GET['opt'] === 'wcHiddenSidebar' ) ) {
		$classes[] = 'hidden-sidebar';
	}

	return $classes;
}

function liquid_wc_loop_add_to_cart_args( $args, $product ) {
	$args['attributes']['data-product_name'] = $product->get_name();

	return $args;
}

function liquid_wc_product_query_tax_query( $tax_query ) {

	if ( ! empty( $tax_query ) ) {
		foreach ( $tax_query as $key => $tax_val ) {
			if ( isset( $tax_val['taxonomy'] ) && strpos( $tax_val['taxonomy'], 'pa_' ) !== false ) {
				unset( $tax_query[ $key ] );
			}
		}
	}

	return $tax_query;
}