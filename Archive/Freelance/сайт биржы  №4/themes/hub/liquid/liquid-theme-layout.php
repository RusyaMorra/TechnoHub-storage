<?php
/**
 * Liquid Themes Theme Framework
 */

if( !defined( 'ABSPATH' ) ) 
	exit; // Exit if accessed directly

/**
 * Liquid_Theme_Layout
 */
class Liquid_Theme_Layout extends Liquid_Base {

	public function __construct() {

		$this->add_action( 'wp', 'init' );
		$this->add_filter( 'body_class', 'body_classes' );

		$this->add_action( 'liquid_attr_contents_wrap', 'start_container' );

		$this->add_action( 'liquid_before_content', 'start_row_wrapper' );
		$this->add_action( 'liquid_after_content', 'end_row_wrapper' );

		$this->add_action( 'liquid_after_content', 'end_container' );

		$this->add_action( 'liquid_single_post_sidebar', 'add_single_post_sidebar' );
		$this->add_action( 'liquid_start_single_post_container', 'start_single_post_container' );
		$this->add_action( 'liquid_end_single_post_container', 'end_single_post_container' );

	}

	public function init() {

		// Get the sidebars and assign to public variable.
		$this->sidebars = $this->setup_sidebar( $this->setup_options() );
	}

	public function body_classes( $classes ) {

		if( $this->has_sidebar() ) {
			$classes[] = 'has-sidebar';

			if( 'left' === $this->sidebars['position'] ) {
				$classes[] = 'has-left-sidebar';
			}
		}
		
		if( class_exists( 'WooCommerce' ) && is_product_taxonomy() || class_exists( 'WooCommerce' ) && is_product_category() ) {
			$hide_sidebar_mobile = liquid_helper()->get_option( 'wc-archive-sidebar-hide-mobile' );
			if( 'yes' == $hide_sidebar_mobile ) {
				$classes[] = 'lqd-hide-sidebar-on-mobile';
			}
		}

		return $classes;
	}
	
	public function start_container( $attributes ) {

		if( is_404() ) {
			return;
		}

		global $post;
		$content = '';

		if( $post ) {
			$content = $post->post_content;	
		}
		
		if( !is_singular( 'post' ) && !has_shortcode( $content, 'vc_row' ) 
			|| is_search() 
			|| is_home()
			|| is_category()
			|| is_tag()
			|| is_author()
			|| is_post_type_archive( 'liquid-portfolio' ) 
			|| is_tax( 'liquid-portfolio-category' )
			|| class_exists( 'WooCommerce' ) && is_product_taxonomy() 
			|| class_exists( 'WooCommerce' ) && is_product_category() 
			|| class_exists( 'WooCommerce' ) && is_singular( 'product' )
			|| $this->has_sidebar()
		) :
			$attributes['class'] = 'container';
			
		endif;
		
		if( class_exists( 'WooCommerce' ) && is_singular( 'product' ) ) {

			global $product;			
			$single_product_style = get_post_meta( get_the_ID(), 'product-page-style', true );
			if( '1' === $single_product_style ) {
				$attributes['class'] = 'container-fluid';	
			}			
		}
		if( class_exists( 'WooCommerce' ) && is_product_taxonomy() || class_exists( 'WooCommerce' ) && is_product_category() ) {
			$term_id = get_queried_object_id();
			$fullwidth_product_cat_value = get_term_meta( $term_id, 'fullwidth_product_cat' , true );
			if( 'yes' === $fullwidth_product_cat_value ) {
				$attributes['class'] = 'container-fluid';	
			}
		}
		
		$sp_custom_layout_enable = get_post_meta( get_the_ID(), 'wc-custom-layout-enable', true );
		$sp_custom_layout = get_post_meta( get_the_ID(), 'wc-custom-layout', true );

		$sp_custom_layout_enable = $sp_custom_layout_enable !== 'off' ? $sp_custom_layout_enable : liquid_helper()->get_theme_option( 'wc-custom-layout-enable' );
		$sp_custom_layout = ( empty( $sp_custom_layout ) && $sp_custom_layout_enable === 'on' ) ? liquid_helper()->get_theme_option( 'wc-custom-layout' ) : $sp_custom_layout;
		
		if( ( 'on' === $sp_custom_layout_enable && !empty( $sp_custom_layout ) && ( !is_product_category() || !is_product_taxonomy() ) ) ) {
			unset( $attributes['class'] );
		}
		
		return $attributes;
		
	}
	
	public function end_container() {
		
		if( is_404() ) {
			return;
		}

		global $post;
		$content = '';

		if( $post ) {
			$content = $post->post_content;	
		}

		if( !is_singular( 'post' ) && !has_shortcode( $content, 'vc_row' ) 
			|| is_search() 
			|| is_home()
			|| is_category()
			|| is_tag()
			|| is_author()
			|| is_post_type_archive( 'liquid-portfolio' ) 
			|| is_tax( 'liquid-portfolio-category' ) 
			|| class_exists( 'WooCommerce' ) && is_product_taxonomy() 
			|| class_exists( 'WooCommerce' ) && is_product_category() 
			|| class_exists( 'WooCommerce' ) && is_singular( 'product' )
			|| $this->has_sidebar()
		) :
			//echo '</div><!-- #site-container -->';
		endif;
	}

	public function start_row_wrapper() {
		
		if( is_singular( 'post' ) || is_404() ) {
			return;
		}
		
		if( $this->has_sidebar() ) {

			$content_class = '';

			$content_class = 'lqd-contents';
			
			$content_class = apply_filters( 'liquid_single_post_class', $content_class );

			echo '<div class="'. $content_class .'">';
		}
	}

	public function end_row_wrapper() {
		
		if( is_singular( 'post' ) || is_404() ) {
			return;
		}

		if( $this->has_sidebar() ) {

			echo '</div><!-- /.lqd-contents -->';

			get_template_part( 'templates/sidebar' );
		}
	}
	
	public function start_single_post_container() {

		if( !$this->has_sidebar() ) {
			return;
		}

		$content_class = 'lqd-contents';

		$content_class = apply_filters( 'liquid_single_post_container', $content_class );

		echo '<div class="'. $content_class .'">';
	}
	
	public function end_single_post_container() {
		
		if( !$this->has_sidebar() ) {
			return;
		}
		
		echo '</div><!-- /.lqd-contents -->';

	}

	public function add_single_post_sidebar() {
		if( $this->has_sidebar() ) {
			get_template_part( 'templates/sidebar' );
		}
	}

	public function setup_sidebar( $sidebar_options ) {

		if( !class_exists( 'ReduxFramework' ) && is_active_sidebar( 'main' ) || 
			!class_exists( 'Liquid_Addons' ) && is_active_sidebar( 'main' )  
		) { 
			$sidebar          = 'main';
			$sidebar_position = 'right';
		}
		else {
			// Post Options.
			if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
				if 	( get_post_type() === 'liquid-header' || get_post_type() === 'liquid-footer' || get_post_type() === 'ld-product-layout' || get_post_type() === 'elementor_library' )  {
					return;
				}
				$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
				$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
		
				$sidebar = $page_settings_model->get_settings( 'liquid_sidebar_one' );
				$sidebar_position = $page_settings_model->get_settings( 'liquid_sidebar_position' );
	
			} else {
				$sidebar = liquid_helper()->get_option( 'liquid-sidebar-one', 'raw', false );
				$sidebar_position = liquid_helper()->get_option( 'liquid-sidebar-position', 'raw', 'default' );
			}
		}

		$opts_sidebar = isset( $sidebar_options['sidebar'] ) ? $sidebar_options['sidebar'] : '';
		// Setting Default
		$sidebar_position = $sidebar ? $sidebar_position : 'default';
		$sidebar = $sidebar ? $sidebar : $opts_sidebar;

		// Theme options.
		$sidebar_position_theme_option = array_key_exists( 'position', $sidebar_options ) ? strtolower( $sidebar_options['position'] ) : '';

		// Get sidebars and position from theme options if it's being forced globally.
		if ( array_key_exists( 'global', $sidebar_options ) && 'on' === $sidebar_options['global'] ) {
			$sidebar = ( '' != $sidebar_options['sidebar'] ) ? $sidebar_options['sidebar'] : '';
			$sidebar_position = $sidebar_position_theme_option;
		}

		// If sidebar position is default OR no entry in database exists.
		if ( 'default' === $sidebar_position ) {
			$sidebar_position = $sidebar_position_theme_option;
		}

		$return = array( 'position' => $sidebar_position );

		if ( $sidebar && 'none' !== $sidebar ) {
			$return['sidebar'] = $sidebar;
		}

		return $return;
	}

	public function has_sidebar( $which = '1' ) {

		if( is_array( $this->sidebars ) && isset( $this->sidebars['sidebar'] ) && ! empty( $this->sidebars['sidebar'] ) ) {
			return true;
		}

		return false;
	}

	public function has_double_sidebars() {

		if( $this->has_sidebar('1') && $this->has_sidebar('2') ) {
			return true;
		}

		return false;
	}

	public function setup_options() {

		if( is_home() ) {
			$sidebars = array(
				'global'    => true,
				'sidebar'   => liquid_helper()->get_theme_option( 'blog-archive-sidebar-one' ),
				'position'  => liquid_helper()->get_theme_option( 'blog-archive-sidebar-position' ),
			);
		}
		elseif ( class_exists( 'WooCommerce' ) && is_product() ) {
			$sidebars = array(
				'global'    => liquid_helper()->get_theme_option( 'wc-enable-global' ),
				'sidebar'   => liquid_helper()->get_theme_option( 'wc-sidebar' ),
				'position'  => liquid_helper()->get_theme_option( 'wc-sidebar-position' ),
			);
		}
		elseif ( class_exists( 'WooCommerce' ) && ( is_product_taxonomy() || is_product_category() ) ) {
			$sidebars = array(
				'global'    => true,
				'sidebar'   => liquid_helper()->get_theme_option( 'wc-archive-sidebar-one' ),
				'position'  => liquid_helper()->get_theme_option( 'wc-archive-sidebar-position' )
			);
		}
		elseif ( is_page() ) {
			$sidebars = array(
				'global'    => liquid_helper()->get_theme_option( 'page-enable-global' ),
				'sidebar'   => liquid_helper()->get_theme_option( 'page-sidebar-one' ),
				'position'  => liquid_helper()->get_theme_option( 'page-sidebar-position' ),
			);
		}
		elseif ( is_single() ) {

			$sidebars = array(
				'global'    => liquid_helper()->get_theme_option( 'blog-enable-global' ),
				'sidebar'   => liquid_helper()->get_theme_option( 'blog-sidebar-one' ),
				'position'  => liquid_helper()->get_theme_option( 'blog-sidebar-position' )
			);

			if ( is_singular( 'liquid-portfolio' ) ) {
				$sidebars = array(
					'global'    => liquid_helper()->get_theme_option( 'portfolio-enable-global' ),
					'sidebar'   => liquid_helper()->get_theme_option( 'portfolio-sidebar-one' ),
					'position'  => liquid_helper()->get_theme_option( 'portfolio-sidebar-position' ),
				);
			}
		}
		elseif ( is_archive() ) {
			$sidebars = array(
				'global'    => true,
				'sticky'    => liquid_helper()->get_theme_option( 'blog-archive-sidebar-enable-sticky' ),
				'sidebar'   => liquid_helper()->get_theme_option( 'blog-archive-sidebar-one' ),
				'position'  => liquid_helper()->get_theme_option( 'blog-archive-sidebar-position' ),

			);

			if ( is_post_type_archive( 'liquid-portfolio' ) || is_tax( 'liquid-portfolio-category' ) ) {
				$sidebars = array(
					'global'    => true,
					'sticky'    => liquid_helper()->get_theme_option( 'portfolio-archive-sidebar-enable-sticky' ),
					'sidebar'   => liquid_helper()->get_theme_option( 'portfolio-archive-sidebar-one' ),
					'position'  => liquid_helper()->get_theme_option( 'portfolio-archive-sidebar-position' ),
				);
			}
		}
		 elseif ( is_search() ) {
			$sidebars = array(
				'global'    => true,
				'sticky'    => liquid_helper()->get_theme_option( 'seach-sidebar-enable-sticky' ),
				'sidebar'   => liquid_helper()->get_theme_option( 'search-sidebar-one' ),
				'position'  => liquid_helper()->get_theme_option( 'search-sidebar-position' ),
			);
		}
		else {
			$sidebars = array(
				'global'    => liquid_helper()->get_theme_option( 'page-enable-global' ),
				'sticky'    => liquid_helper()->get_theme_option( 'page-sidebar-enable-sticky' ),
				'sidebar'   => liquid_helper()->get_theme_option( 'page-sidebar-one' ),
				'position'  => liquid_helper()->get_theme_option( 'page-sidebar-position' ),
			);
		}

		// Remove sidebars from the certain woocommerce pages.
		if ( class_exists( 'WooCommerce' ) ) {
			if ( is_cart() || is_checkout() || is_account_page() || ( get_option( 'woocommerce_thanks_page_id' ) && is_page( get_option( 'woocommerce_thanks_page_id' ) ) ) ) {
				$sidebars = array();
			}
		}

		return $sidebars;
	}

}
return new Liquid_Theme_Layout;