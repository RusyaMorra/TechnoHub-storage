<?php
/**
 * Class for "Optimization"
 */

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

if (!class_exists('Liquid_Optimization')) :
    /**
     * Liquid Disable Unused Scripts
     */
    class Liquid_Optimization extends Liquid_Base
    {

        /**
         * Current Page ID
         * @var $page_id
         */
        public $page_id;


        /**
         * Used Shortcodes
         * @var $tags
         */
        public $tags;

        /**
         * @method __construct
         */
        public function __construct()
        {
            $theme_option = get_option('liquid_one_opt');

            if (isset($theme_option['enable-hub-optimization']) && $theme_option['enable-hub-optimization'] === 'on') {
                $this->tags = [];
                $this->init_hooks();
            }
        }

        /**
         * Init Hooks and Filters
         *
         * @method init_hooks
         */
        private function init_hooks()
        {
            if (is_admin() || (function_exists('vc_is_inline') && vc_is_inline())) {
                $this->add_action('save_post', 'save_post', 10, 2);
            } else {
                $this->add_action('wp', 'wp');
                $this->add_filter('the_content', 'check_content', 0);
                $this->add_action('wp_enqueue_scripts', 'wp_enqueue_scripts');

                $this->add_action('wp_head', 'buffer_start', 0);
                $this->add_action('wp_footer', 'buffer_end', 99);

                $this->add_action('vc_base_register_front_css', 'vc_base_register_front_css');
                $this->add_action('wp_head', 'wp_head', 0);

                $this->add_filter('do_shortcode_tag', 'do_shortcode_tag', 10, 2);
                $this->add_action('shutdown', 'shutdown');

                $this->add_filter('load_shortcodes', 'load_shortcodes');
            }

            /**
             * Hub Purge Cache
             */
            if (is_admin()) {
                $this->add_action('admin_bar_menu', 'add_item', 100);
                $this->add_action('admin_footer', 'cache_purge_action_js');
                $this->add_action('wp_ajax_hub_cache_purge', 'hub_cache_purge_callback');
            }
        }

        /**
         * Optimize Shortodes list
         * @param $shortcodes
         * @return array|mixed|string[]
         */
        public function load_shortcodes($shortcodes)
        {
            global $post;

            if (!is_a($post, 'WP_Post')) {
                return $shortcodes;
            }

            $used_shortcodes = get_post_meta($post->ID, '_used_shortcodes', true);

            $tag_names = ['misc'];

            if ($used_shortcodes) {

                foreach ($used_shortcodes as $shortcode) {

                    $shortcode = str_replace('ld_button', 'ld_1button', $shortcode);
                    $shortcode = str_replace('ld_cf7', 'ld_contact-form', $shortcode);
                    $shortcode = str_replace('ld_', '', $shortcode);
                    $shortcode = str_replace('vc_', '', $shortcode);
                    $shortcode = str_replace('_', '-', $shortcode);
                    $shortcode = str_replace('imgage', 'image', $shortcode);
                    $shortcode = str_replace('single-portfolio', 'pf-single', $shortcode);
                    $shortcode = str_replace('imgtxt-slider', 'image-text-slider', $shortcode);

                    if (array_search($shortcode, $shortcodes) !== false) {
                        $tag_names[] = $shortcode;
                    }
                }

                if (array_search('header-button', $shortcodes) !== false) {
                    $tag_names[] = '1button';
                }

                if (array_search('header-custom-menu', $shortcodes) !== false) {
                    $tag_names[] = 'custom-menu';
                }

                $shortcodes = array_unique($tag_names);
            }

            return $shortcodes;
        }

        /**
         * Add Shortcode name to global array
         * @param $output
         * @param $tag
         * @return string
         */
        public function do_shortcode_tag($output, $tag)
        {
            $this->tags = array_merge($this->tags, [$tag]);

            return $output;
        }

        /**
         * Add shortcodes to meta by Page ID
         */
        public function shutdown()
        {
            if (empty(get_post_meta($this->page_id, '_used_shortcodes', true))) {
                update_post_meta($this->page_id, '_used_shortcodes', array_unique($this->tags));
            }
        }

        /**
         * Add New Button to Top Admin bar
         * @param $admin_bar
         */
        public function add_item($admin_bar)
        {
            $admin_bar->add_menu(array('id' => 'hub-purge-cache', 'title' => 'Hub Purge Cache', 'href' => '#'));
        }

        /**
         * Add Javascript to Admin Area
         */
        public function cache_purge_action_js()
        { ?>
            <script type="text/javascript">
                jQuery("li#wp-admin-bar-hub-purge-cache .ab-item").on("click", function (e) {
                    e.preventDefault();

                    var data = {
                        'action': 'hub_cache_purge',
                    };

                    jQuery.post(ajaxurl, data, function (response) {
                        alert(response.data);
                    });

                });
            </script> <?php
        }

        /**
         * Ajax request
         */
        public function hub_cache_purge_callback()
        {
            self::purge_cache();
            wp_send_json_success('Cache Purged Success');
        }

        /**
         * Purge Cache
         */
        public
        static function purge_cache()
        {
            global $wpdb;

            $wpdb->delete($wpdb->postmeta, ['meta_key' => '_post_content']);
            $wpdb->delete($wpdb->postmeta, ['meta_key' => '_post_scripts']);
            $wpdb->delete($wpdb->postmeta, ['meta_key' => '_used_shortcodes']);
        }

        /**
         * Hook wp_head
         */
        public
        function wp_head()
        {
            $href = function_exists('vc_asset_url') ? vc_asset_url('css/js_composer.min.css') . '?ver=' . WPB_VC_VERSION : '';
            if (!empty($href)) {
                echo '<link rel="stylesheet" id="js_composer_front-css" href="' . $href . '" type="text/css" media="all">';
            }
        }

        /**
         * Deregister script
         */
        public
        function vc_base_register_front_css()
        {
            wp_deregister_style('js_composer_front');
        }

        /**
         * @param $buffer
         *
         * @method callback
         *
         * @return string
         */
        public
        function callback($buffer)
        {
            return $this->the_content($buffer);
        }

        /**
         * @method buffer_start
         */
        public
        function buffer_start()
        {
            if ('publish' === get_post_status() && !isset($_GET['preview'])) {
                ob_start([$this, 'callback']);
            }

        }

        /**
         * @method buffer_end
         */
        public
        function buffer_end()
        {
            if ('publish' === get_post_status() && !isset($_GET['preview'])) {
                ob_end_flush();
            }
        }

        /**
         * @method wp
         */
        public
        function wp()
        {
            $this->page_id = get_the_ID();
        }

        /**
         * WP Enqueue Scripts
         *
         * @method wp_enqueue_scripts
         */
        public
        function wp_enqueue_scripts()
        {
            if (!has_blocks()) {
                wp_dequeue_style('wp-block-library');
                wp_dequeue_style('wp-block-library-theme');
                wp_dequeue_style('wc-block-style');
            }
        }

        /**
         * Hook Save Post
         *
         * @param $post_ID
         * @param $post
         *
         * @method save_post
         */
        public
        function save_post($post_ID, $post)
        {

            if ('revision' === $post->post_type) {
                return;
            }

            if (class_exists('WPBMap')) {
                WPBMap::addAllMappedShortcodes();
            }

            add_filter('wp_get_attachment_image_attributes', 'liquid_filter_gallery_img_atts', 10, 2);

            global $shortcode_tags;

            $content = $post->post_content;
            $ignore_html = false;

            if (false === strpos($content, '[')) {
                return;
            }

            if (empty($shortcode_tags) || !is_array($shortcode_tags)) {
                return;
            }

            if (!isset($GLOBALS['post']) && isset($_POST['post_id'])) {
                $GLOBALS['post'] = get_post($_POST['post_id']);
            }

            $tagnames = [
                'vc_row',
                'vc_row_inner',
                'vc_column',
                'vc_column_inner',
                'vc_single_image',
                'vc_column_text',
                'vc_separator',

                'ld_accordion',
                'ld_animated_frame',
                'ld_animated_frames_container',
                'ld_asymmetric_slider',

                'ld_bananas',
                'ld_bananas_banner',
//				'ld_button',

                'ld_carousel',
                'ld_carousel_3d',
                'ld_carousel_falcate',
                'ld_carousel_gallery',
//				'ld_carousel_marquee',
//				'ld_carousel_stack',
//				'ld_carousel_tab',

                'ld_content_box',
                'ld_countdown',
                'ld_counter',
                'ld_custom_menu',

//              'ld_blog',
                'ld_simple_menu',
                'ld_simple_heading',

                'ld_header_row',
                'ld_header_column',
                'ld_header_image',
                'ld_header_menu',
                'ld_header_button',
                'ld_header_scroll_indicator',

                'ld_d_banner',
                'ld_d_depth_banner',
                'ld_distorse_gallery',

                'ld_fancy_heading',
//				'ld_flipbox',
                'ld_freakin_image',
                'ld_fullproj',

                'ld_google_map',

                'ld_highlight',
                'ld_hotspots',

                'ld_icon',
                'ld_icon_box',
                'ld_icon_box_circle',
                'ld_icon_box_circle_item',
                'ld_image_overlay_text',
                'ld_image_text_slider',
                'ld_imgtxt_slider',
                'ld_image_trail',
                'ld_images_comparison',
                'ld_images_group_container',
                'ld_images_group_element',

                'ld_list',

                'ld_megamenu_row',
                'ld_megamenu_row_inner',
                'ld_megamenu_column',
                'ld_megamenu_column_inner',

                'ld_masked_image',
                'ld_media',
                'ld_media_element',
                'ld_message',
                'ld_milestone',
                'ld_modal_window',

                'ld_newsletter',

                'ld_particles',
                'ld_pointer_tooltip',
                'ld_price_table',
                'ld_process_box',
                'ld_process_box_container',
                'ld_progressbar',
                'ld_promo',

                'ld_roadmap',
                'ld_roadmap_item',

                'ld_section_title',
                'ld_single_portfolio_meta',
                'ld_single_portfolio_nav',
                'ld_single_portfolio_related',
                'ld_single_portfolio_cover',
                'ld_single_portfolio_title',
                'ld_shop_banner',
//				'ld_slideshow',
//				'ld_slideshow_2',
                'ld_social_icons',
                'ld_spacer',
                'ld_span',

//				'ld_tabs',
                'ld_team_member',
                'ld_team_members_circular',
                'ld_testi_carousel',
                'ld_testimonial',
                'ld_timeline',
                'ld_timeline_item',
                'ld_tooltiped_image',
                'ld_typewriter',
            ];

            foreach ($shortcode_tags as $tag => $shortcode) {

                if (array_search($tag, $tagnames) === false) {
                    unset($shortcode_tags[$tag]);
                }

            }

            $tagnames = array_intersect(array_keys($shortcode_tags), $tagnames);

            if (empty($tagnames)) {
                return;
            }

            $content = str_replace('<p>', '', str_replace('</p>', '', $content));

            if (liquid_helper()->get_option('enable-hub-header-cache') === 'off' && in_array(get_post_type($post), ['liquid-header', 'liquid-mega-menu'])) {
                return;
            }

            if (get_post_type($post) === 'liquid-header') {
                $content = str_replace('[vc_row ', '[ld_header_row ', $content);
                $content = str_replace('[vc_row]', '[ld_header_row]', $content);
                $content = str_replace('[/vc_row]', '[/ld_header_row]', $content);

                $content = str_replace('[vc_column ', '[ld_header_column ', $content);
                $content = str_replace('[vc_column]', '[ld_header_column]', $content);
                $content = str_replace('[/vc_column]', '[/ld_header_column]', $content);

                ob_start();
                liquid_action('after_header_tag');
                $content .= ob_get_clean();
            }

            if (get_post_type($post) === 'liquid-mega-menu') {

                $content = str_replace('[vc_row_inner]', '[ld_megamenu_row_inner]', $content);
                $content = str_replace('[vc_row_inner ', '[ld_megamenu_row_inner ', $content);
                $content = str_replace('[/vc_row_inner]', '[/ld_megamenu_row_inner]', $content);

                $content = str_replace('[vc_column_inner ', '[ld_megamenu_column_inner ', $content);
                $content = str_replace('[vc_column_inner]', '[ld_megamenu_column_inner]', $content);
                $content = str_replace('[/vc_column_inner]', '[/ld_megamenu_column_inner] ', $content);

                $content = str_replace('[vc_row]', '[ld_megamenu_row]', $content);
                $content = str_replace('[vc_row ', '[ld_megamenu_row ', $content);
                $content = str_replace('[/vc_row]', '[/ld_megamenu_row]', $content);

                $content = str_replace('[vc_column ', '[ld_megamenu_column ', $content);
                $content = str_replace('[vc_column]', '[ld_megamenu_column]', $content);
                $content = str_replace('[/vc_column]', '[/ld_megamenu_column] ', $content);
            }

            $content = do_shortcodes_in_html_tags($content, $ignore_html, $tagnames);

            $pattern = get_shortcode_regex($tagnames);
            $content = preg_replace_callback("/$pattern/", 'do_shortcode_tag', $content);

            $content = unescape_invalid_shortcodes($content);
            update_post_meta($post_ID, '_post_content', stripslashes($content));

        }

        /**
         * Check generate HTML content
         *
         * @param string $content
         *
         * @method check_content
         *
         * @return mixed|string
         */
        public
        function check_content(string $content)
        {

            if ('publish' !== get_post_status() || isset($_GET['preview'])) {
                return $content;
            }

            if (get_the_ID() !== $this->page_id) {
                return $content;
            }

            $post_ID = $this->page_id;

            $scripts_from_meta = get_post_meta($post_ID, '_post_scripts', true);
            $content_from_meta = get_post_meta($post_ID, '_post_content', true);

            if (is_array($scripts_from_meta)) {
                foreach ($scripts_from_meta as $handle) {
                    wp_enqueue_script($handle);
                }
            }

            if ($content_from_meta) {

                remove_action('the_content', 'wpautop');
                remove_action('the_content', 'wptexturize');

                $content = $content_from_meta;

            }

            return $content;
        }

        /**
         * Filter for the_content
         *
         * @method init_hooks
         *
         * @param string $content
         *
         * @return string
         */
        public
        function the_content(string $content)
        {

            $regex = "/\<script(.*?)?\>(.|\\n)*?\<\/script\>/i";

            preg_match_all($regex, $content, $scripts);

            foreach ($scripts[0] as $old_script) {
                if (strpos($old_script, 'type="text/template"') === false) {
                    $script = str_replace('</', '<\/', $old_script);
                    $script = str_replace('<\/script>', '</script>', $script);
                    $content = str_replace($old_script, $script, $content);
                }
            }


            $dom = new DOMDocument();

            libxml_use_internal_errors(true);
            $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
            libxml_clear_errors();

            $deregister_scripts = [];
            $deregister_styles = [];

            //Check SplitText
            if (!$this->find_element([
                'data-split-text' => 'true'
            ], $dom)) {
                $deregister_scripts[] = 'splittext';
            }

            //Check Gsap Custom Easy
            if (!$this->find_element([
                'data-liquid-animatedframes' => 'true'
            ], $dom)) {
                $deregister_scripts[] = 'gsap-custom-ease';
            }

            //Check ThreeJS
            if (!$this->find_element([
                'data-webglhover' => 'true',
                'data-lqd-fake3d' => 'true'
            ], $dom)) {
                $deregister_scripts[] = 'threejs';
            }

            //Check Fresco
            if (!$this->find_element([
                'class' => ['fresco']
            ], $dom)) {
                $deregister_styles[] = 'fresco';
                $deregister_scripts[] = 'jquery-fresco';
            }

            //Check FontAwesome
            if (!$this->find_element([
                'class' => ['fa', 'fab', 'fas', 'far']
            ], $dom)) {
                $deregister_styles[] = 'font-awesome';
            }

            //Check Gsap
            if (!$this->find_element([
                'data-liquid-animatedframes' => 'true',
                'data-animate-onscroll' => 'true',
                'data-asym-slider' => 'true',
                'data-liquid-bg' => 'true',
                'data-liquid-blur' => 'true',
                'data-enable-counter' => 'true',
                'data-custom-animations' => 'true',
                'data-lqd-cc' => 'true',
                'data-lqd-dist-gal' => 'true',
                'data-dynamic-shape' => 'true',
                'data-lqd-fullproj' => 'true',
                'data-hover3d' => 'true',
                'data-spread-incircle' => 'true',
                'data-lqd-img-trail' => 'true',
                'data-parallax' => 'true',
                'data-progressbar' => 'true',
                'data-reveal' => 'true',
                'data-lqd-scroll-indicator' => 'true',
                'data-shrink-borders' => 'true',
                'data-slideelement-onhover' => 'true',
                'data-slideshow-bg' => 'true',
                'data-sticky-footer' => 'true',
                'data-text-rotator' => 'true',
                'data-webglhover' => 'true',
                'data-pin' => 'true',
                'class' => [
                    'lqd-preloader-wrap',
                    'lqd-carousel-stack',
                    'carousel-vertical-3d',
                    'lqd-sticky-stack',
                    'lqd-dist-gal',
                ]
            ], $dom)) {
                $deregister_scripts[] = 'gsap';
            }

            //Check Scroll Trigger
            if (!$this->find_element([
                'data-animate-onscroll' => 'true',
                'data-parallax' => 'true',
                'data-pin' => 'true',
                'data-lqd-scroll-indicator' => 'true',
                'data-shrink-borders' => 'true',
                'data-liquid-bg' => 'true',
                'data-sticky-footer' => 'true',
                'class' => ['lqd-sticky-stack']
            ], $dom)) {
                $deregister_scripts[] = 'scrollTrigger';
            }

            //Check Bootstrap
            if (!$this->find_element([
                'data-ld-toggle' => 'true',
                'class' => ['module-lqd-fullproj-scrn', 'accordion', 'lqd-tabs']
            ], $dom)) {
                $deregister_scripts[] = 'bootstrap';
            }

            //Check Flickity
            if (!$this->find_element([
                'data-lqd-flickity' => '',
                'class' => ['carousel-falcate']
            ], $dom)) {
                $deregister_scripts[] = 'flickity';
            }

            //Check Flickity Fade
            if (!$this->find_element([
                'class' => ['lqd-carousel-fade']
            ], $dom)) {
                $deregister_scripts[] = 'flickity-fade';
            }

            //Check Isotope
            if (!$this->find_element([
                'data-liquid-masonry' => 'true'
            ], $dom)) {
                $deregister_scripts[] = 'isotope';
                $deregister_scripts[] = 'packery-mode';
            }

            //Check jQuery UI
            if (!$this->find_element([
                'class' => [
                    'date-picker',
                    'wpcf7-form-control',
                    'spinner',
                    'widget_price_filter',
                    'orderby',
                    'liquid-wc-product-search',
                    'lqd-domain-search',
                    'lqd-filter-dropdown',
                    'widget_archive',
                    'widget_categories',
                    'widget_text',
                ]
            ], $dom)) {
                $deregister_styles[] = 'jquery-ui';
                $deregister_scripts[] = 'jquery-ui';
            }

            //Check jQuery UI Touch
            if (!$this->find_element([
                'class' => [
                    'widget_price_filter'
                ]
            ], $dom)) {
                $deregister_scripts[] = 'jquery-ui-touch';
            }

            //Check Contact Form 7
            if (!$this->find_element([
                'class' => ['wpcf7-form']
            ], $dom)) {
                $deregister_styles[] = 'contact-form-7';
                $deregister_scripts[] = 'contact-form-7';
            }

            //Check Lity
            if (!$this->find_element([
                'data-lity' => ''
            ], $dom)) {
                $deregister_scripts[] = 'lity';
            }

            //Check Circle Progress
            if (!$this->find_element([
                'class' => ['ld-prgbr-circle-container']
            ], $dom)) {
                $deregister_scripts[] = 'circle-progress';
            }

            //Check imagesLoaded
            if (!$this->find_element([
                'data-ajaxify' => 'true',
                'data-asym-slider' => 'true',
                'data-liquid-blur' => 'true',
                'data-lqd-flickity' => 'true',
                'data-lqd-img-trail' => 'true',
                'data-inview' => 'true',
                'data-liquid-masonry' => 'true',
                'data-responsive-bg' => 'true',
                'data-reveal' => 'true',
                'data-row-bg' => '',
                'data-slideelement-onhover' => 'true',
                'data-slideshow-bg' => 'true',
                'data-sticky-footer' => 'true',
                'data-webglhover' => 'true',
                'data-localscroll' => 'true',
                'class' => ['carousel-falcate', 'lqd-mobile-sec-nav']
            ], $dom)) {
                $deregister_scripts[] = 'imagesloaded';
            }

            //Check StackBlur
            if (!$this->find_element([
                'data-liquid-blur' => 'true'
            ], $dom)) {
                $deregister_scripts[] = 'stackblur';
            }

            //Check Particles
            if (!$this->find_element([
                'data-particles' => 'true'
            ], $dom)) {
                $deregister_scripts[] = 'jquery-particles';
            }

            //Check js_composer_front
            if (!$this->find_element([
                'data-vc-full-width' => 'true',
                'class' => [
                    'wpb_flexslider',
                    'wpb_pinterest',
                    'vc_progress_bar',
                    'wpb_tabs',
                    'wpb_tour',
                    'wpb_accordion',
                    'wpb_grid',
                    'wpb_carousel',
                    'wpb_gallery_slides',
                    'vc_pie_chart',
                    'vc_round-chart',
                    'vc_line-chart',
                    'vc_masonry_media_grid',
                    'vc_masonry_grid',
                ]
            ], $dom)) {
                $deregister_scripts[] = 'wpb_composer_front_js';
            }

            //Check mediaelements
            if (!$this->find_element([
                'data-video-bg' => '',
                'class' => [
                    'wp-audio-shortcode',
                    'wp-video-shortcode'
                ]
            ], $dom)) {
                $deregister_scripts[] = 'mediaelement-core';
                $deregister_scripts[] = 'mediaelement-migrate';
                $deregister_scripts[] = 'wp-mediaelement';
            }

            //Check Schedule Table
            if (!$this->find_element([
                'data-liquid-schedule-table' => 'true'
            ], $dom)) {
                $deregister_styles[] = 'le-schedule-table';
                $deregister_scripts[] = 'le-table-js';
            }

            //Check Tinycolor
            if (!$this->find_element([
                'data-liquid-bg' => 'true',
                'data-liquid-stack' => 'true',
                'class' => ['megamenu', 'main-header-dynamiccolors']
            ], $dom)) {
                $deregister_scripts[] = 'jquery-tinycolor';
            }

            //Check Vivus
            if (!$this->find_element([
                'data-animated-svg' => 'true'
            ], $dom)) {
                $deregister_scripts[] = 'jquery-vivus';
            }

            //Check Google Maps
            if (!$this->find_element([
                'data-plugin-map' => 'true'
            ], $dom)) {
                $deregister_scripts[] = 'google-maps-api';
            }

            //Check YTPlayer
            if (!$this->find_element([
                'data-video-bg' => 'true'
            ], $dom)) {
                $deregister_styles[] = 'jquery-ytplayer';
                $deregister_scripts[] = 'jquery-ytplayer';
            }

            //Check liquid-essentials
            if (!$this->find_element([
                'class' => ['lqd-icn-ess', 'lqd-lp-read-more']
            ], $dom)) {
                $deregister_styles[] = 'liquid-icons';
            }

            $this->deregister_scripts($deregister_scripts, $dom);
            $this->deregister_styles($deregister_styles, $dom);

            $dom->removeChild($dom->doctype);

            $content = $dom->saveHTML();

            if (isset($_GET['debug']) && $_GET['debug'] === '1') {
                $content = '<pre>Scripts: ' . json_encode($deregister_scripts) . '</pre><br><pre>Styles: ' . json_encode($deregister_styles) . '</pre>' . $content;
            }

            $content = str_replace('<html>', '', $content);
            $content = str_replace('<head>', '', $content);
            $content = str_replace('</head>', '', $content);
            $content = str_replace('</body>', '', $content);
            $content = str_replace('</html>', '', $content);

            return $content;

        }

        /**
         * Search HTML Element by attribute
         *
         * @method find_element
         *
         * @param array $attributes
         * @param DOMDocument $dom
         *
         * @return bool
         */
        private
        function find_element(array $attributes, DOMDocument $dom)
        {

            $finder = new DomXPath($dom);
            $query = [];

            foreach ($attributes as $attribute => $value) {
                if ($attribute === 'class') {
                    foreach ($value as $class) {
                        $query[] = "//*[contains(@class, '$class')]";
                    }
                } else {
                    $query[] = $value ? "//*[contains(@{$attribute}, '{$value}')]" : "//*[@{$attribute}]";
                }
            }

            $elements = $finder->query(implode(' | ', $query));

            if ($elements && $elements->length) {
                return true;
            }

            return false;
        }

        /**
         * @method get_script_src_by_handle
         *
         * @param $handle
         *
         * @return bool
         */
        private
        function get_script_src_by_handle($handle)
        {
            global $wp_scripts;
            if (isset($wp_scripts->registered[$handle])) {
                return $wp_scripts->registered[$handle]->src;
            }

            return false;
        }

        /**
         * @method get_style_src_by_handle
         *
         * @param $handle
         *
         * @return bool
         */
        private
        function get_style_src_by_handle($handle)
        {
            global $wp_styles;
            if (isset($wp_styles->registered[$handle])) {
                return $wp_styles->registered[$handle]->src;
            }

            return false;
        }

        /**
         * Deregister Scripts
         *
         * @method deregister_styles
         *
         * @param array $handles_to_remove
         * @param DOMDocument $dom
         */
        private
        function deregister_styles(array $handles_to_remove, DOMDocument $dom)
        {

            $finder = new DomXPath($dom);
            $query = [];

            foreach ($handles_to_remove as $handle) {
                if ($src = $this->get_style_src_by_handle($handle)) {
                    $query[] = "//link[contains(@href, '$src')]";
                }
            }

            $elements = $finder->query(implode(' | ', $query));

            if ($elements && $elements->length) {
                foreach ($elements as $element) {
                    $element->parentNode->removeChild($element);
                }

            }
        }

        /**
         * Deregister Scripts
         *
         * @method deregister_scripts
         *
         * @param array $handles_to_remove
         * @param DOMDocument $dom
         */
        private
        function deregister_scripts(array $handles_to_remove, DOMDocument $dom)
        {

            $finder = new DomXPath($dom);
            $query = [];

            foreach ($handles_to_remove as $handle) {
                if ($src = $this->get_script_src_by_handle($handle)) {
                    $query[] = "//script[contains(@src, '$src')]";
                }
            }

            $elements = $finder->query(implode(' | ', $query));

            if ($elements && $elements->length) {
                foreach ($elements as $element) {
                    $element->parentNode->removeChild($element);
                }

            }
        }

    }

    new Liquid_Optimization();

endif;