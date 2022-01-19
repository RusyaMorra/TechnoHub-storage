<?php 

if ( get_post_type() === 'ld-product-layout' ) {
	return;
}

if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
	$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
} 

$classes = array(
	'titlebar',
);
$column_classname = '';

if( !class_exists( 'ReduxFramework' ) || !class_exists( 'Liquid_Addons' ) ) { 
	$classes[] = 'titlebar-default';
}
if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
	$enable_titlebar = $page_settings_model->get_settings( 'title_bar_enable' );
	$scheme = $page_settings_model->get_settings( 'title_bar_scheme' );
	$scheme = $scheme ? $scheme : liquid_helper()->get_option( 'title-bar-scheme' );
	$align = $page_settings_model->get_settings( 'title_bar_align' );
	$align = $align ? $align : liquid_helper()->get_option( 'title-bar-align' );
	$extra = $page_settings_model->get_settings( 'title_bar_classes' );
	$extra = $extra ? $extra : liquid_helper()->get_option( 'title_bar_classes' );
	if( $scheme ) { $classes[] = $scheme; }
	if( $align ) { $classes[] = $align; }
	if( $extra ) { $classes[] = $extra; }

	$enable_parallax = $page_settings_model->get_settings( 'title_bar_parallax' );
	$enable_parallax = $enable_parallax && $enable_titlebar !== '0' ? $enable_parallax : liquid_helper()->get_option( 'title-bar-parallax' );

	$enable_breadcrumb = $page_settings_model->get_settings( 'title_bar_breadcrumb' );
	$enable_breadcrumb = $enable_breadcrumb && $enable_titlebar !== '0' ? $enable_breadcrumb : liquid_helper()->get_option( 'title-bar-breadcrumb' );

	$enable_scroll = $page_settings_model->get_settings( 'title_bar_scroll' );
	$enable_scroll = $enable_scroll && $enable_titlebar !== '0' ? $enable_scroll : liquid_helper()->get_option( 'title-bar-scroll' );

	$enable_overlay = $page_settings_model->get_settings( 'title_bar_overlay' );
	$enable_overlay = $enable_overlay && $enable_titlebar !== '0' ? $enable_overlay : liquid_helper()->get_option( 'title-bar-overlay' );
	
	$scroll_id = $page_settings_model->get_settings( 'title_bar_scroll_id' );
	$scroll_id = $scroll_id && $enable_titlebar !== '0' ? $scroll_id : liquid_helper()->get_option( 'title-bar-scroll-id' );
} else {
	if( $scheme = liquid_helper()->get_option( 'title-bar-scheme' ) ) {
		$classes[] = $scheme;
	}
	if( $align = liquid_helper()->get_option( 'title-bar-align' ) ) {
		$classes[] = $align;
	}
	if( $extra = liquid_helper()->get_option( 'title-bar-classes' ) ) {
		$classes[] = $extra;
	}

	$enable_parallax = liquid_helper()->get_option( 'title-bar-parallax' );
	$enable_breadcrumb = liquid_helper()->get_option( 'title-bar-breadcrumb' );
	$enable_scroll = liquid_helper()->get_option( 'title-bar-scroll' );
	$enable_overlay = liquid_helper()->get_option( 'title-bar-overlay' );
	$scroll_id = liquid_helper()->get_option( 'title-bar-scroll-id' );
}

$titlebar_bg_woo = $titlebar_bg_woo_url = $style_inline = '';
if( class_exists( 'WooCommerce' ) && ( is_product_taxonomy() || is_product_category() ) ) {
	$titlebar_bg_woo    = get_term_meta( get_queried_object_id(), 'thumbnail_id', true );
	$titlebar_bg_woo_url = wp_get_attachment_url( $titlebar_bg_woo );
	if( !empty( $titlebar_bg_woo_url ) ) {
		$style_inline = 'style="background-image:url( ' . esc_url( $titlebar_bg_woo_url ) . ');"';
	}
	
}

// Heading and subheading
$heading = $subheading = '';
if( !class_exists( 'ReduxFramework' ) && is_home() ) { 
	$heading = esc_html__( 'Blog', 'hub' );
	$subheading = '';
}
elseif( is_home() ) {
	$heading = liquid_helper()->get_option( 'blog-title-bar-heading', 'html' );
}
elseif( is_search() ) {
	$heading = sprintf( esc_html__( 'Search Results for: %s', 'hub' ), '<span>' . get_search_query() . '</span>' );
	$subheading = liquid_helper()->get_option( 'search-title-bar-subheading', 'html' );
}
elseif( is_post_type_archive( 'liquid-portfolio' ) || is_tax( 'liquid-portfolio-category' ) ) {
	$heading = liquid_helper()->get_option( 'portfolio-title-bar-heading', 'html' ) ? do_shortcode( liquid_helper()->get_option( 'portfolio-title-bar-heading', 'html' ) ) : single_cat_title( '', false );
	$subheading = liquid_helper()->get_option( 'portfolio-title-bar-subheading', 'html' );
}
elseif( class_exists( 'WooCommerce' ) && is_shop() ) {
	$shop    = get_option( 'woocommerce_shop_page_id' );
	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$heading = $page_settings_model->get_settings( 'title_bar_heading' );
		$heading = $heading ? $heading : get_the_title( $shop );
	} else {
		$heading = liquid_helper()->get_option( 'title-bar-heading', 'html' ) ? liquid_helper()->get_option( 'title-bar-heading', 'html' ) : get_the_title( $shop );
	}
}
elseif( class_exists( 'WooCommerce' ) && ( is_product_taxonomy() || is_product_category() ) ) {
	$heading = liquid_helper()->get_option( 'wc-archive-title-bar-heading', 'html' ) ? liquid_helper()->get_option( 'wc-archive-title-bar-heading', 'html' ) : single_cat_title( '', false );
	$category_description = category_description();
	$subheading = ! empty( $category_description ) ? $category_description : liquid_helper()->get_option( 'wc-archive-title-bar-subheading', 'html' );
}
elseif( is_category() ) {
	$heading = liquid_helper()->get_option( 'category-title-bar-heading', 'html' ) ? do_shortcode( liquid_helper()->get_option( 'category-title-bar-heading', 'html' ) ) : single_cat_title( '', false );
	$category_description = category_description();
	$subheading = ! empty( $category_description ) ? $category_description : liquid_helper()->get_option( 'category-title-bar-subheading', 'html' );		
}
elseif( is_tag() ) {
	$heading = liquid_helper()->get_option( 'tag-title-bar-heading', 'html' ) ? do_shortcode( liquid_helper()->get_option( 'tag-title-bar-heading', 'html' ) ) : single_tag_title( '', false ) ;
	$subheading = liquid_helper()->get_option( 'tag-title-bar-subheading', 'html' );	
}
elseif( is_author() ) {
	$heading = liquid_helper()->get_option( 'author-title-bar-heading', 'html' ) ? do_shortcode( liquid_helper()->get_option( 'author-title-bar-heading', 'html' ) ) : get_the_author();
	$subheading = liquid_helper()->get_option( 'author-title-bar-subheading', 'html' );
}
elseif( is_archive() ) {
	$heading = esc_html__( 'Archive', 'hub' );
	$subheading = '';	
}
else {
	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$heading = $page_settings_model->get_settings( 'title_bar_heading' );
		$subheading = $page_settings_model->get_settings( 'title_bar_subheading' );
		$heading = $heading ? $heading : liquid_helper()->get_option( 'title-bar-heading', 'html' );
		$subheading = $subheading ? wpautop( $subheading ) : wpautop( liquid_helper()->get_option( 'title-bar-subheading', 'post' ) );
	} else {
		$heading = liquid_helper()->get_option( 'title-bar-heading', 'html' );
		$subheading = wpautop( liquid_helper()->get_option( 'title-bar-subheading', 'post' ) );
	}
}
$heading = $heading ? $heading : get_the_title();



//Parallax
$parallax = array();
if( 'on' === $enable_parallax ) {
	$parallax[] = 'data-parallax="true"';
	$parallax[] = 'data-parallax-options=\'{ "parallaxBG": true }\'';
}

// Breadcrumb
$breadcrumb = ( 'on' === $enable_breadcrumb );
$breadcrumb_args = array(
	'classes' => 'reset-ul inline-nav comma-sep-li',
);

if ( class_exists('WooCommerce') ){
	$breadcrumb_args = array(
		'wrap_before' => '<div class="lqd-shop-topbar-breadcrumb"><nav class="woocommerce-breadcrumb mb-4 mb-md-0"><ul class="breadcrumbs reset-ul inline-nav comma-sep-li">',
		'wrap_after'  => '</ul></nav></div>'
	);
}

// Local Scroll
$scroll = ( 'on' === $enable_scroll );
if( empty( $scroll_id ) ) {
	$scroll_id = 'lqd-site-content';
}

if ( $align ) {

	if ( $align === 'titlebar-split' ) {
		$column_classname = 'col-md-6';
	} else if ( $align === 'text-center' ) {
		$column_classname = 'col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2';
	} else {
		$column_classname = 'col-md-12';
	}

}

?>
<div class="<?php echo join( ' ', $classes ) ?>" <?php echo join( ' ', $parallax ) ?> <?php echo apply_filters( 'liquid_titlebar_style_inline', $style_inline ); ?>>
	
	<?php //Overlay
		if( 'on' === $enable_overlay ) { ?>
			<div class="titlebar-overlay lqd-overlay"></div>
	<?php
		} 
	?>
	<?php liquid_action( 'header_titlebar' ); ?>
	<?php if( !is_singular( 'post' ) ) { ?>
	<div class="titlebar-inner">
		<div class="container titlebar-container">
			<div class="row titlebar-container d-flex flex-wrap align-items-center">

				<div class="titlebar-col col-xs-12 <?php echo esc_attr($column_classname) ?>">

					<h1><?php echo wp_kses_post( $heading ); ?></h1>
					<?php echo wp_kses_post( $subheading ); ?>
					<?php 
						if ( $breadcrumb && $align && $align !== 'titlebar-split' ) {
							if ( class_exists('WooCommerce') ){
								woocommerce_breadcrumb( $breadcrumb_args );
							} else {
								liquid_breadcrumb( $breadcrumb_args );
							}
						}
					?>
					<?php if( $scroll ) : ?>
						<a class="titlebar-scroll-link" href="#<?php echo esc_attr( $scroll_id ); ?>" data-localscroll="true"><i class="lqd-icn-ess icon-ion-ios-arrow-down"></i></a>
					<?php endif; ?>

				</div>

				<?php if ( $align && $align === 'titlebar-split' ) : ?>
				<div class="titlbar-col col-md-6 text-md-right">
					<?php
					if( $breadcrumb ) {
						if ( class_exists('WooCommerce') ){
							woocommerce_breadcrumb( $breadcrumb_args );
						} else {
							liquid_breadcrumb( $breadcrumb_args );
						}
					} 
					?>
				</div>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
	<?php } ?>
</div>