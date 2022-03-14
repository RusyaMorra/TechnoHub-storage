<?php 

/**
 * Class for "Performance"
 */

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

if (!class_exists('Liquid_Performance')) :

    class Liquid_Performance extends Liquid_Base{

        public function __construct(){

            $this->init_hooks();

        }

        private function init_hooks(){

            $this->add_action( 'wp_enqueue_scripts', 'lqd_enqueue', 9999 );

            
            if( isset(get_option( 'liquid_one_opt' )['disable_wp_emojis']) && get_option( 'liquid_one_opt' )['disable_wp_emojis'] === 'off' ){
                $this->add_action( 'init', 'disable_emojis' );
            }
            
        }
        
        function lqd_enqueue(){

            $theme_option = get_option( 'liquid_one_opt' );
            
            // disable css
            if ( isset($theme_option['disable_css']) ){
                foreach ( $theme_option['disable_css'] as $style){
                    wp_deregister_style($style);
                    wp_dequeue_style($style);
                }
            }

            // menage theme scripts
            if ( isset ($theme_option['menage_liquid_scripts']) ){
                if( $theme_option['menage_liquid_scripts'] === 'on' && !empty(get_option( 'liquid_scrips' )) ){
                    foreach ( get_option( 'liquid_scrips' ) as $key => $name ){
                        $option_name = 'lqd-script-' . $key;
                        $this->apply_script_action( $theme_option[$option_name], $key );
                    }
                }
            }

            // menage custom scripts
            if( isset( $theme_option['menage_liquid_custom_scripts']['handle'][0] ) ){
              foreach( $theme_option['menage_liquid_custom_scripts']['action'] as $key => $action ){
                $this->apply_script_action( $action, $theme_option['menage_liquid_custom_scripts']['handle'][$key] );
              }
            }
            // menage wp and plugins scripts
            if ( isset($theme_option['disable_cf7_js']) && $theme_option['disable_cf7_js'] === 'off' ){
                $this->apply_script_action( 'deq', 'contact-form-7' );
            }
            if ( isset($theme_option['disable_wc_cart_fragments']) && $theme_option['disable_wc_cart_fragments'] === 'off' ){
                $this->apply_script_action( 'deq', 'wc-cart-fragments' );
            }

            // check mobile deq files
            /*  Note: Disabled for now. Conflict with widget dependend scripts.
            if ( wp_is_mobile() ){
                if ( isset($theme_option['disable_carousel_on_mobile']) && $theme_option['disable_carousel_on_mobile'] === 'on' ){
                    $this->apply_script_action( 'deq', 'flickity' );
                }
                if ( isset($theme_option['disable_liquid_animations_on_mobile']) && $theme_option['disable_liquid_animations_on_mobile'] === 'on' ){
                    $this->apply_script_action( 'deq', 'gsap' );
                    $this->apply_script_action( 'deq', 'scrollTrigger' );
                }
            }
            */


        }

        function apply_script_action( $action, $handle ){
            switch( $action ){
                case 'deq':
                    wp_deregister_script( $handle );
                    wp_dequeue_script( $handle );
                break;
                case 'enq':
                    wp_enqueue_script( $handle );
                break;
            }
        }

        function disable_emojis() {
            remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
            remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
            remove_action( 'wp_print_styles', 'print_emoji_styles' );
            remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
            remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
            remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
            remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        }

    }
    new Liquid_Performance();

endif;