<?php
/**
 * The Asset Manager
 * Enqueue scripts and styles for the frontend
 */

if( ! defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

class Liquid_Theme_Assets extends Liquid_Base {

    /**
     * Hold data for wa_theme for frontend
     * @var array
     */
    private static $theme_json = array();

	/**
	 * [__construct description]
	 * @method __construct
	 */
    public function __construct() {

        // Frontend
        $this->add_action( 'wp_enqueue_scripts', 'dequeue', 2 );
        $this->add_action( 'wp_enqueue_scripts', 'register' );
        $this->add_action( 'wp_enqueue_scripts', 'enqueue' );
	    $this->add_action( 'wp_footer', 'enqueue_footer' );
        $this->add_action( 'wp_enqueue_scripts', 'woo_register' );
		$this->add_action( 'enqueue_block_editor_assets', 'gutenberg' );
        $this->add_action( 'wp_footer', 'script_data' );
		$this->add_action( 'wp_head', 'add_head_liquidparams' );
		$this->add_action( 'wp_head', 'liquid_essential_font', 5 );	
        //$this->add_action( 'vc_frontend_editor_enqueue_js_css', 'enqueue' );

        self::add_config( 'uris', array(
            'ajax'    => admin_url('admin-ajax.php', 'relative')
        ));
    }

    /**
     * Unregister Scripts and Styles
     * @method dequeue
     * @return [type]  [description]
     */
    public function dequeue() {

    }

    /**
     * Register Scripts and Styles
     * @method register
     * @return [type]   [description]
     */
    public function register() {

        // Styles -----------------------------------------------------------

		// Icons
		$this->style( 'liquid-icons', $this->get_vendor_uri( 'liquid-icon/lqd-essentials/lqd-essentials.min.css' ) );
		$this->style( 'font-awesome', $this->get_vendor_uri( 'font-awesome/css/font-awesome.min.css' ) );
		
		// Vendors
		$this->style( 'bootstrap', $this->get_vendor_uri( 'bootstrap/css/bootstrap.min.css' ) );
		$this->style( 'bootstrap-rtl', $this->get_vendor_uri( 'bootstrap/css/bootstrap-rtl.min.css' ) );
		$this->style( 'jquery-ui', $this->get_vendor_uri( 'jquery-ui/jquery-ui.css' ) );
		$this->style( 'fresco', $this->get_vendor_uri( 'fresco/css/fresco.css' ) );
		$this->style( 'jquery-ytplayer', $this->get_vendor_uri( 'jqury.mb.YTPlayer/jquery.mb.YTPlayer-min.css' ) );
		
		//Theme Css
		$this->style( 'liquid-base', get_template_directory_uri() . '/style.css' );
		$this->style( 'liquid-dark-scheme', $this->get_css_uri ( 'theme-scheme-dark.min' ) );
		
		$this->style( 'liquid-theme', $this->get_css_uri( 'theme.min' ) );
		$this->style( 'liquid-rtl', $this->get_css_uri('theme-rtl.min' ) );
		
		$this->style( 'liquid-bbpress', $this->get_css_uri( 'theme-bbpress.min' ) );
		
		//Custom Css
		$this->style( 'liquid-custom', $this->get_css_uri( 'custom' ) );

		// Responsive Css
		if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
			$max_media_mobile_nav = \Elementor\Core\Settings\Manager::get_settings_managers( 'general' )->get_model()->get_settings( 'viewport_tablet' );
			$max_media_mobile_nav = $max_media_mobile_nav ? $max_media_mobile_nav : 1024;
		} else {
			$max_media_mobile_nav = liquid_helper()->get_option( 'media-mobile-nav' );
			if( empty( $max_media_mobile_nav ) ) {
				$max_media_mobile_nav = 1199;
			}
		}

		$this->style( 'theme-responsive-min', $this->get_css_uri( 'theme-responsive-min.min' ), false, array(), 'screen and (min-width: '.($max_media_mobile_nav + 1).'px)' );
		$this->style( 'theme-responsive-max', $this->get_css_uri( 'theme-responsive-max.min' ), false, array(), 'screen and (max-width: '.$max_media_mobile_nav.'px)');

		// Register ----------------------------------------------------------
		
		//Vendors
		$this->script( 'fastdom', $this->get_vendor_uri( 'fastdom/fastdom.min.js' ), array( 'jquery' ) );
		$this->script( 'bootstrap', $this->get_vendor_uri( 'bootstrap/js/bootstrap.min.js' ), array( 'jquery' ) );
		$this->script( 'jquery-lazyload', $this->get_vendor_uri( 'lazyload.min.js' ), array( 'jquery' ) );
		$this->script( 'imagesloaded', $this->get_vendor_uri( 'imagesloaded.pkgd.min.js' ), array( 'jquery' ) );
		$this->script( 'jquery-ui', $this->get_vendor_uri( 'jquery-ui/jquery-ui.min.js' ), array( 'jquery' ) );
		$this->script( 'jquery-ui-touch', $this->get_vendor_uri( 'jquery-ui/jquery.ui.touch-punch.min.js' ), array( 'jquery' ) );
		$this->script( 'gsap', $this->get_vendor_uri( 'gsap/minified/gsap.min.js' ), array( 'jquery' ) );
		$this->script( 'gsap-custom-ease', $this->get_vendor_uri( 'gsap/utils/CustomEase.min.js' ), array( 'jquery' ) );
		$this->script( 'jquery-vivus', $this->get_vendor_uri( 'vivus.min.js' ), array( 'jquery' ) );
		$this->script( 'flickity', $this->get_vendor_uri( 'flickity/flickity.pkgd.min.js' ), array( 'jquery' ) );
		$this->script( 'flickity-fade', $this->get_vendor_uri( 'flickity/flickity-fade.min.js' ), array( 'jquery' ) );
		$this->script( 'jquery-fresco', $this->get_vendor_uri( 'fresco/js/fresco.js' ), array( 'jquery' ) );
		$this->script( 'splittext', $this->get_vendor_uri( 'gsap/utils/SplitText.min.js' ), array( 'jquery' ) );		
		$this->script( 'typewriter', $this->get_vendor_uri( 't-js/t.min.js' ), array( 'jquery' ) );
		$this->script( 'scrollTrigger', $this->get_vendor_uri( 'gsap/minified/ScrollTrigger.min.js' ), array( 'jquery' ) );
		$this->script( 'isotope', $this->get_vendor_uri( 'isotope/isotope.pkgd.min.js' ), array( 'jquery' ) );
		$this->script( 'packery-mode', $this->get_vendor_uri( 'isotope/packery-mode.pkgd.min.js' ), array( 'jquery', 'isotope' ) );
		$this->script( 'jquery-particles', $this->get_vendor_uri( 'particles.min.js' ), array( 'jquery' ) );
		$this->script( 'circle-progress', $this->get_vendor_uri( 'circle-progress.min.js' ), array( 'jquery' ) );
		$this->script( 'lity', $this->get_vendor_uri( 'lity/lity.min.js' ), array( 'jquery' ) );
		$this->script( 'stackblur', $this->get_vendor_uri( 'StackBlur.js' ), array( 'jquery' ) );
		$this->script( 'jquery-countdown-plugin', $this->get_vendor_uri( 'countdown/jquery.plugin.min.js' ), array( 'jquery' ) );
		$this->script( 'jquery-countdown', $this->get_vendor_uri( 'countdown/jquery.countdown.min.js' ), array( 'jquery', 'jquery-countdown-plugin' ) );
		$this->script( 'jquery-fontfaceobserver', $this->get_vendor_uri( 'fontfaceobserver.js' ), array( 'jquery' ) );
		$this->script( 'jquery-ytplayer', $this->get_vendor_uri( 'jqury.mb.YTPlayer/jquery.mb.YTPlayer.min.js' ), array( 'jquery' ) );
		$this->script( 'jquery-tinycolor', $this->get_vendor_uri( 'tinycolor-min.js' ), array( 'jquery' ) );
		
		$this->script( 'threejs', $this->get_vendor_uri( 'threejs/build/three.min.js' ), array( 'jquery' ) );
		$this->script( 'fake3d', $this->get_js_uri( 'plugin.liquidFake3d' ), array( 'jquery', 'threejs' ) );
		
		$this->script( 'jquery-momentum', $this->get_vendor_uri( 'momentum-slider/momentum-slider.min.js' ), array( 'jquery' ) );
		$this->script( 'draggabilly', $this->get_vendor_uri( 'draggabilly.pkgd.min.js' ), array( 'jquery' ) );
		$this->script( 'intersection-observer', $this->get_vendor_uri( 'intersection-observer.js' ), array( 'jquery' ) );
		
		$this->script( 'liquid-mailchimp-form', $this->get_js_uri( 'mailchimp-form' ), array( 'jquery' ) );
		wp_localize_script( 'liquid-mailchimp-form', 'ajax_liquid_mailchimp_form_object', array(
			'ajaxurl'        => admin_url( 'admin-ajax.php' ),
		));

		$deps = array(
			'fastdom',
			'bootstrap',
			'imagesloaded',
			'jquery-ui',
			'jquery-fresco',
			'lity',
			'gsap',
			'gsap-custom-ease',
			'scrollTrigger',
			'jquery-fontfaceobserver',
		);
		
		// LazyLoad
		$enable_lazyload = liquid_helper()->get_option( 'enable-lazy-load' );
		if( 'on' === $enable_lazyload ) {
			array_push( $deps,
				'jquery-lazyload'
			);
		}
		// Header Js
		if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
			$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
			$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
			$header_enable_switch = $page_settings_model->get_settings( 'header_enable_switch' );
			$enable_header = ($header_enable_switch) ? $header_enable_switch : liquid_helper()->get_option( 'header-enable-switch' );
		} else {
			$enable_header = liquid_helper()->get_option( 'header-enable-switch' );
		}
		if( 'on' === $enable_header ) {
			array_push( $deps,
				'jquery-tinycolor'
			);
		}
		if( is_archive() ) {
			array_push( $deps,
				'flickity',
				'packery-mode'
			);
		}
	    if( class_exists( 'WooCommerce' ) ) {
		    array_push( $deps,
				'flickity',
				'packery-mode'
			);

		}
		if( is_singular( 'liquid-portfolio' ) ) {
			array_push( $deps,
				'flickity',
				'packery-mode'
			);
		}
		if( is_post_type_archive( 'liquid-portfolio' ) || is_tax( 'liquid-portfolio-category' ) ) {
			array_push( $deps,
				'flickity',
				'packery-mode'
			);
		}
		if( is_singular( 'post' ) ) {
			array_push( $deps,
				'flickity',
				'jquery-fresco',
				'splittext'
			);
		}
		if( is_page() ) {
			array_push( $deps,
				'splittext',
				'jquery-tinycolor'
			);
		}
		if( is_404() ) {
			array_push( $deps,
				'jquery-particles'
			);
		}

		if ( class_exists( 'Liquid_Elementor_Addons' ) && !empty(liquid_helper()->get_theme_option( 'google-api-key' ))  ){
			array_push( $deps,
				'google-maps-api'
			);
		}

		// At the End
		$this->script( 'google-maps-api', $this->google_map_api_url() );
		$this->script( 'liquid-theme', $this->get_js_uri( 'theme.min' ), $deps );

		update_option( 'liquid_scrips', array(
			'fastdom' => 'Fastdom',
			'bootstrap' => 'Bootstrap',
			'intersection-observer' => 'Intersection Observer',
			'jquery-lazyload' => 'jQuery Lazyload',
			'imagesloaded' => 'Images Loaded',
			'jquery-ui' => 'jquery-ui',
			'jquery-ui-touch' => 'jquery-ui-touch',
			'gsap' => 'gsap',
			'gsap-custom-ease' => 'gsap-custom-ease',
			'jquery-vivus' => 'jquery-vivus',
			'flickity' => 'flickity',
			'flickity-fade' => 'flickity-fade',
			'jquery-fresco' => 'jquery-fresco',
			'splittext' => 'splittext',
			'typewriter' => 'typewriter',
			'scrollTrigger' => 'scrollTrigger',
			'isotope' => 'isotope',
			'packery-mode' => 'packery-mode',
			'jquery-particles' => 'jquery-particles',
			'circle-progress' => 'circle-progress',
			'lity' => 'lity',
			'stackblur' => 'stackblur',
			'jquery-countdown-plugin' => 'jquery-countdown-plugin',
			'jquery-countdown' => 'jquery-countdown',
			'jquery-fontfaceobserver' => 'jquery-fontfaceobserver',
			'jquery-ytplayer' => 'jquery-ytplayer',
			'jquery-tinycolor' => 'jquery-tinycolor',
			'threejs' => 'threejs',
			'fake3d' => 'fake3d',
			'jquery-momentum' => 'jquery-momentum',
			'draggabilly' => 'draggabilly',
			'liquid-mailchimp-form' => 'liquid-mailchimp-form',
			'google-maps-api' => 'google-maps-api',
		) );
		
    }


	/**
	 * Enqueue Styles
	 *
	 * @method enqueue_footer
	 */
    public function enqueue_footer() {

	    $font_icons = liquid_helper()->get_theme_option( 'font-icons' );
	    if( !empty( $font_icons ) ) {
		    foreach( $font_icons as $handle ) {
			    wp_enqueue_style( $handle );
		    }
	    }

	    wp_enqueue_style( 'liquid-icons' );

	    do_action( 'liquid_shortcodes_styles' );

	    wp_enqueue_style( 'jquery-ui' );
	    wp_enqueue_style( 'fresco' );
	    

	    //Enqueue portfolio.css only on portfolio css
	    if( is_singular( 'liquid-portfolio' )          ||
	        is_post_type_archive( 'liquid-portfolio' ) ||
	        is_tax( 'liquid-portfolio-category' )
	    ) {
	    }

	    if( is_singular( 'post' ) ) {
		    wp_enqueue_style( 'fresco' );
	    }
    }

    /**
     * Enqueue Scripts and Styles
     * @method enqueue
     * @return [type]  [description]
     */
    public function enqueue() {

		$post_ids = get_the_ID(); 
		$post_types = get_post_type( $post_ids );

		// Styles-----------------------------------------------------
		
		if ( (class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION')) && ( $post_types === 'post' || $post_types === 'page' || $post_types === 'liquid-portfolio' ) ){
			$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
			$page_settings_model = $page_settings_manager->get_model( $post_ids );
			$page_color_scheme = $page_settings_model->get_settings( 'body_color_scheme' );
		} else {
			$page_color_scheme = liquid_helper()->get_option( 'body-color-scheme' );
		}

		wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'bootstrap' );
		if( is_rtl() ) {
			wp_enqueue_style( 'bootstrap-rtl' );
		}
		
		//Base css files
		wp_enqueue_style( 'liquid-base' );
		wp_enqueue_style( 'liquid-theme' );

		wp_enqueue_style( 'theme-responsive-min');
		wp_enqueue_style( 'theme-responsive-max');

		if( is_rtl() ) {
			wp_enqueue_style( 'liquid-rtl' );
		}


		if( 'dark' === $page_color_scheme )  {
			wp_enqueue_style( 'liquid-dark-scheme' );	
		}
		
		if ( class_exists('bbPress') ) {
			wp_enqueue_style( 'liquid-bbpress' );
		}

		$theme_option = get_option('liquid_one_opt');
		if (isset($theme_option['enable_combine_css']) && $theme_option['enable_combine_css'] === 'on') {
			wp_enqueue_style('merged-styles',  wp_upload_dir()['baseurl'] . '/merged-styles.css', ['elementor-frontend']);
		}

		if (isset($theme_option['enable_combine_js']) && $theme_option['enable_combine_js'] === 'on') {
			wp_enqueue_script('merged-scripts',  wp_upload_dir()['baseurl'] . '/merged-scripts.js', []);
		}
		
        // Scripts -----------------------------------------------------
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		
		wp_enqueue_script( 'liquid-theme' );
		if( !class_exists( 'ReduxFrameworkPlugin' ) ) {
			wp_enqueue_style( 'google-font-rubik', $this->google_rubik_font_url(), array(), '1.0' );
			wp_enqueue_style( 'google-font-manrope', $this->google_manrope_font_url(), array(), '1.0' );
		}

	}
	
	//Loading Liquid Essential font
	public function liquid_essential_font() {
		echo '<link rel="preload" href="' . $this->get_vendor_uri( 'liquid-icon/lqd-essentials/fonts/lqd-essentials.woff2' ) .'" as="font" type="font/woff2" crossorigin>';
	}
		
	//Adding Gutenberg support
	public function gutenberg() {

		// Load the theme styles within Gutenberg.
		wp_enqueue_style( 'liquid-gutenberg', $this->get_css_uri( 'theme-gutenberg' ) );

	}

	public function google_map_api_url() {

		$api_key = liquid_helper()->get_theme_option( 'google-api-key' );
		$google_map_api = add_query_arg( 'key', $api_key, '//maps.googleapis.com/maps/api/js' );

		return $google_map_api;
	}

	public function google_rubik_font_url() {
		$font_url = add_query_arg( array( 'family' => 'Rubik', 'display' => 'swap' ), "//fonts.googleapis.com/css2" );
		return $font_url;
 }
	public function google_manrope_font_url() {
		 $font_url = add_query_arg( array( 'family' =>  'Manrope:wght@600', 'display' => 'swap' ), "//fonts.googleapis.com/css2" );
		 return $font_url;
	}

	//Register the woocommerce  shop styles
	public function woo_register() {

		//check if woocommerce is activated and styles are loaded
		if( class_exists( 'WooCommerce' ) ) {
		$deps = array( 'woocommerce-layout', 'woocommerce-smallscreen', 'woocommerce-general' );
		$this->style( 'theme-shop', $this->get_css_uri('theme-shop.min'), $deps );
		wp_enqueue_style( 'theme-shop' );
		}

	}

	public function add_head_liquidparams() {
		
		echo '<script type="text/javascript">
				window.liquidParams = {
					currentZIndex: 10
				}
			</script>';
	}


    /**
     * Localize Data Object
     * @method script_data
     * @return [type]      [description]
     */
    public function script_data() {

        wp_localize_script( 'liquid-theme', 'liquidTheme', self::$theme_json );
    }

    // Register Helpers ----------------------------------------------------------
    public function script( $handle, $src, $deps = null, $in_footer = true, $ver = null ) {
        wp_register_script( $handle, $src, $deps, $ver, $in_footer);
    }

    public function style( $handle, $src, $deps = null, $ver = null, $media = 'all' ) {
        wp_register_style( $handle, $src, $deps, $ver, $media );
    }

    /**
     * Add items to JSON object
     * @method add_config
     * @param  [type]     $id    [description]
     * @param  string     $value [description]
     */
    public static function add_config( $id, $value = '' ) {

        if(!$id) {
            return;
        }

        if(isset(self::$theme_json[$id])) {
            if(is_array(self::$theme_json[$id])) {
                self::$theme_json[$id] = array_merge(self::$theme_json[$id],$value);
            }
            elseif(is_string(self::$theme_json[$id])) {
                self::$theme_json[$id] = self::$theme_json[$id].$value;
            }
        }
        else {
            self::$theme_json[$id] = $value;
        }
    }

    // Uri Helpers ---------------------------------------------------------------

    public function get_theme_uri($file = '') {
        return get_template_directory_uri() . '/' . $file;
    }

    public function get_child_uri($file = '') {
        return get_stylesheet_directory_uri() . '/' . $file;
    }

    public function get_css_uri($file = '') {
        return $this->get_theme_uri('assets/css/'.$file.'.css');
    }

    public function get_elements_uri( $file = '' ) {
		return $this->get_theme_uri( 'assets/css/elements/' . $file . '.css' );
    }

    public function get_js_uri($file = '') {
        return $this->get_theme_uri('assets/js/'.$file.'.js');
    }

    public function get_vendor_uri($file = '') {
        return $this->get_theme_uri('assets/vendors/'.$file);
    }
}
new Liquid_Theme_Assets;