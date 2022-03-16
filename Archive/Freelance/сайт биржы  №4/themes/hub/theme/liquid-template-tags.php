<?php
/**
 * The Template Tags
 */

/**
 * [liquid_get_header_layout description]
 * @method liquid_get_header_layout
 * @return [type]                  [description]
 */
function liquid_get_header_layout() {

	global $post;

	$ID = 0;

	//Keep old id
	if( !is_404() || is_search() ) {
		$ID = get_the_ID();
	}

	// which one
	$id = liquid_get_custom_header_id();
	$header = get_post( $id );

	if ( !class_exists( 'Liquid_Elementor_Addons' ) || ( !is_search() && class_exists( 'Liquid_Elementor_Addons') ) ) {
		//$post = $header;
	}

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( $id );

		$header_overlay = $page_settings_model->get_settings( 'header_overlay' );
		$header_sticky = $page_settings_model->get_settings( 'header_sticky' );
		$header_mobile_sticky = $page_settings_model->get_settings( 'mobile_header_sticky' );
		$header_sticky_pos = $page_settings_model->get_settings( 'header_sticky_pos' );
		$header_sticky_dynamic_color = $page_settings_model->get_settings( 'header_sticky_dynamic_color' );
		$header_sticky_bg = $page_settings_model->get_settings( 'header_sticky_bg' );
		$header_sticky_shadow = $page_settings_model->get_settings( 'header_sticky_shadow' );
		
		$header_megamenu_react = $page_settings_model->get_settings( 'header_megamenu_react' );	
		$header_megamenu_slide = $page_settings_model->get_settings( 'header_megamenu_slide' );	
		$layout = $page_settings_model->get_settings( 'header_layout' );

		$header_smart_sticky = $page_settings_model->get_settings( 'header_enable_smart_sticky' );
	} else {
		$header_overlay = get_post_meta( $id, 'header-overlay', true );
		$header_sticky  = get_post_meta( $id, 'header-sticky', true );
		$header_mobile_sticky  = get_post_meta( $id, 'mobile-header-sticky', true );
		$header_sticky_pos  = get_post_meta( $id, 'header-sticky-pos', true );
		$header_sticky_dynamic_color  = get_post_meta( $id, 'header-sticky-dynamic-color', true );
		$header_sticky_bg  = get_post_meta( $id, 'header-sticky-bg', true );
		$header_sticky_shadow        = get_post_meta( $id, 'header-sticky-shadow', true );
		
		$header_megamenu_react  = get_post_meta( $id, 'header-megamenu-react', true );	
		$header_megamenu_slide  = get_post_meta( $id, 'header-megamenu-slide', true );	
		$layout = liquid_helper()->get_post_meta( 'header-layout', $id );
	}

	if( !isset( $header_overlay ) ) {
		$header_overlay = liquid_helper()->get_theme_option( 'header-overlay' );
	}
	
	if( empty( $header_mobile_sticky ) ) {
		$header_mobile_sticky = liquid_helper()->get_theme_option( 'mobile-header-sticky' );
	}

	// Hash
	$header_styles = array(
		'default'	 => 'main-header ' . $header_overlay . ' ' . $header_sticky_shadow . ' ',
		'side'     => 'main-header header-side header-side-style-1',
	);

	// layout

	$layout = $layout ? $layout : 'default';

	// Classes
	$class = $header_styles[$layout];

	// Attributes
	$attributes = array();
	
	$sticky_opts = array();
	
	if( 'yes' === $header_megamenu_react ) {
		$attributes['data-react-to-megamenu'] = 'true';
	}	
	if( 'yes' === $header_megamenu_slide ) {
		$attributes['data-megamenu-slide'] = 'true';
	}	
	if( 'yes' === $header_sticky ) {
		$attributes['data-sticky-header'] = 'true';
		$attributes['data-sticky-values-measured'] = 'false';
		$class .= ' is-not-stuck';

		echo wp_kses_post( '<div class="lqd-sticky-placeholder d-none"></div>' );

		if( 'yes' != $header_mobile_sticky ) {
			$sticky_opts['disableOnMobile'] = true;
		}
		if( 'after-section' === $header_sticky_pos ) {
			$sticky_opts['stickyTrigger'] = 'first-section';
		}
		if( 'yes' === $header_sticky_dynamic_color ) {
			$sticky_opts['dynamicColors'] = true;
			$attributes['data-sticky-values-measured'] = 'false';
			$class .= ' main-header-dynamiccolors';
		}
		if( isset( $header_smart_sticky ) && $header_smart_sticky === 'yes' ) {
			$sticky_opts['smartSticky'] = true;
			$class .= ' lqd-smart-sticky-header';
		}
	}
	if( !empty( $sticky_opts ) ) {
		$attributes['data-sticky-options'] = wp_json_encode( $sticky_opts );
	}

	$attributes['class'] = $class;

	$out = array(
		'id' => $id,
		'attributes' => $attributes,
		'layout' => $layout,

		// Styles
		'color' => liquid_helper()->get_post_meta( 'nav_color' , $id ),
		'sticky_bg' => liquid_helper()->get_post_meta( 'nav_color' , $id ),
		'secondary_color' => $header_sticky_bg,
		'active_color' => liquid_helper()->get_post_meta( 'nav_active_color', $id ),
		'padding' => liquid_helper()->get_post_meta( 'nav_padding', $id ),
		'logo_padding' => get_post_meta( $id, 'nav_logo_padding', true ),
	);

	// reset
	wp_reset_postdata();
	return $out;
}

function liquid_logo_url( $retina = false, $light = false ) {

	$logo = $mobile_logo = '';

	if ( !$light ){
		$logo = $mobile_logo = get_template_directory_uri() . '/assets/img/logo/logo-1.svg';
	} else {
		$logo = $mobile_logo = get_template_directory_uri() . '/assets/img/logo/logo-light.svg';
	}

	
	$retina_logo = $retina_mobile_logo = get_template_directory_uri() . '/assets/img/logo/logo-1@2x.png';

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$logo_arr = \Elementor\Core\Settings\Manager::get_settings_managers( 'general' )->get_model()->get_settings( 'header_logo' );
		$retina_logo_arr = \Elementor\Core\Settings\Manager::get_settings_managers( 'general' )->get_model()->get_settings( 'header_logo_retina' );
	} else {
		$logo_arr = liquid_helper()->get_option( 'header-logo' );
		$retina_logo_arr = liquid_helper()->get_option( 'header-logo-retina' );
	}
	
	if( is_array( $logo_arr ) && ! empty( $logo_arr['url'] ) ) {
		$logo = $logo_arr['url'];
	}

	if( is_array( $retina_logo_arr ) && ! empty( $retina_logo_arr['url'] ) ) {
		$retina_logo = $retina_logo_arr['url'];
	}
	
	if( $retina ) {
		echo  esc_url( $retina_logo ) . ' 2x';
	}
	else {
		echo esc_url( $logo );		
	}

}	

/**
 * [liquid_get_footer_layout description]
 * @method liquid_get_footer_layout
 * @return [type]                  [description]
 */
function liquid_get_footer_layout() {
	global $post;

	// which one
	$id = liquid_get_custom_footer_id();
	$footer = get_post( $id );
	$post = $footer;


	// Styles
	$styles = $out = array();

	if( $bg = liquid_helper()->get_post_meta( 'footer-bg', $id ) ) {

		if( isset( $bg['background-color'] ) ) {
			$out['background-color'] = $bg['background-color'];
		}
		if( isset( $bg['background-size'] ) ) {
			$out['background-size'] = $bg['background-size'];
		}
		if( isset( $bg['background-image'] ) ) {
			$out['background-image'] = 'url(' . $bg['background-image'] . ')' ;
		}
		if( isset( $bg['background-repeat'] ) ) {
			$out['background-repeat'] = $bg['background-repeat'];
		}
		if( isset( $bg['background-position'] ) ) {
			$out['background-position'] = $bg['background-position'];
		}
		if( isset( $bg['background-attachment'] ) ) {
			$out['background-attachment'] = $bg['background-attachment'];
		}
	}
	
	if( $bg_color =liquid_helper()->get_post_meta( 'footer-gradient', $id ) ) {
		$out['background'] = $bg_color;
	}

	if( $color = liquid_helper()->get_post_meta( 'footer-text-color', $id ) ) {
		if( $color['alpha'] < 1  ) {
			$out['color'] = isset( $color['rgba'] ) ? $color['rgba'] : '';
		} else {
			$out['color'] = isset( $color['color'] ) ? $color['color'] : '';
		}
	}
	if( $padding = liquid_helper()->get_post_meta( 'footer-padding', $id ) ) {
		$out['padding'] = $padding;
	}
	if( $link = liquid_helper()->get_post_meta( 'footer-link-color', $id ) ) {
		$out['link'] = $link;
	}

	$out = array_filter( $out );

	$out['id'] = $id;

	// reset
	wp_reset_postdata();

	return $out;
}

/**
 * [liquid_header_mobile_trigger_button description]
 * @method liquid_header_mobile_trigger_button
 * @return [type]                [description]
 */
 function liquid_header_mobile_section() {

	$src = $retina_src = $retina_logo = $logo = $scrset = '';
	
	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$img_array    = \Elementor\Core\Settings\Manager::get_settings_managers( 'general' )->get_model()->get_settings( 'menu_logo' );
		if( empty( $img_array['url'] ) ) {
			$img_array = \Elementor\Core\Settings\Manager::get_settings_managers( 'general' )->get_model()->get_settings( 'header_logo' );
		}
		$retina_array = \Elementor\Core\Settings\Manager::get_settings_managers( 'general' )->get_model()->get_settings( 'menu_logo_retina' );

	} else {
		$img_array    = liquid_helper()->get_option( 'menu-logo' );
		if( empty( $img_array['url'] ) ) {
			$img_array = liquid_helper()->get_option( 'header-logo' ); 
		}
		$retina_array = liquid_helper()->get_option( 'menu-logo-retina' );
	}
	
	if ( isset($img_array['url']) ){
		$src = esc_url( $img_array['url'] );
	}
	
	if( is_array( $retina_array ) && !empty( $retina_array['url'] ) ) {
		$retina_src = esc_url( $retina_array['url'] );
	}
	else {
		$retina_src = '';
	}
	
	if( !empty( $retina_src ) ) {
		$scrset	= 'srcset="' . $retina_src . ' 2x"';	
	}
	
	if( empty( $src ) ) {
		$src = get_template_directory_uri() . '/assets/img/logo/logo-1.svg';
	}
	
	$alt = get_bloginfo( 'title' );
	$logo = sprintf( '<img class="logo-default" src="%s" alt="%s" %s />', $src, $alt, $scrset );

	$id = liquid_get_custom_header_id(); 
	
	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( $id );

		$menu_id = $page_settings_model->get_settings( 'header_mobile_menu' );
	} else {
		$menu_id = liquid_helper()->get_post_meta( 'header-mobile-menu', $id );
	}

	if( empty ( $menu_id ) ) {
		$menu_id = liquid_helper()->get_theme_option( 'header-mobile-menu' );
	}
 
	$output = '<div class="lqd-mobile-sec elementor">
		<div class="lqd-mobile-sec-inner navbar-header d-flex align-items-stretch">
			<div class="lqd-mobile-modules-container empty"></div>
			<button
			type="button"
			class="navbar-toggle collapsed nav-trigger style-mobile"
			data-ld-toggle="true"
			data-toggle="collapse"
			data-target="#lqd-mobile-sec-nav"
			aria-expanded="false"
			data-toggle-options=\'{ "changeClassnames": {"html": "mobile-nav-activated"} }\'>
				<span class="sr-only">Toggle navigation</span>
				<span class="bars">
					<span class="bars-inner">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</span>
				</span>
			</button>
	
			<a class="navbar-brand" href="' . esc_url( home_url( '/' ) ) . '">
				<span class="navbar-brand-inner">
					' . $logo . '
				</span>
			</a>

		</div>
	
		<div class="lqd-mobile-sec-nav">

			<div class="mobile-navbar-collapse navbar-collapse collapse" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">';

			if( is_nav_menu( $menu_id ) ) :
		
			$output	 .=	wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu'           => $menu_id,
					'container'      => 'ul',
					'before'         => false,
					'after'          => false,
					'link_before'    => '',
					'link_after'     => '',
					'menu_id'        => 'mobile-primary-nav',
					'menu_class'     => 'lqd-mobile-main-nav main-nav nav',
					'walker'         => class_exists( 'Liquid_Mega_Menu_Walker' ) ? new Liquid_Mega_Menu_Walker : '',
					'echo'           => false
					) );
		
				else:
		
			$output	 .=	wp_page_menu( array(
					'container'   => 'ul',
					'before'      => false,
					'after'       => false,
					'link_before' => '',
					'link_after'  => '',
					'menu_class'  => 'lqd-mobile-main-nav main-nav nav',
					'menu_id'     => 'mobile-primary-nav',
					'depth'       => 3,
					'echo'        => false
				));
		
			endif;

			$output	 .= '</div>

		</div>
	
	</div>';

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){

		if ( $page_settings_model->get_settings( 'enable_mobile_header_builder' ) !== 'yes' ){
			echo apply_filters( 'liquid_header_mobile_section', $output );
		}

	} else {
		echo apply_filters( 'liquid_header_mobile_section', $output );
	}
	

}

add_action( 'liquid_after_header_tag', 'liquid_header_mobile_section' );

function liquid_get_mobile_nav_ajax() {
	 
	$id = liquid_get_custom_header_id(); 
	
	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( $id );

		$menu_id = $page_settings_model->get_settings( 'header_mobile_menu' );
	} else {
		$menu_id = liquid_helper()->get_post_meta( 'header-mobile-menu', $id );
	}

	if( empty ( $menu_id ) ) {
		$menu_id = liquid_helper()->get_theme_option( 'header-mobile-menu' );
	}
	
	if( is_nav_menu( $menu_id ) ) :
		$output	 .=	wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu'           => $menu_id,
				'container'      => 'ul',
				'before'         => false,
				'after'          => false,
				'link_before'    => '',
				'link_after'     => '<span class="submenu-expander"></span>',
				'menu_id'        => 'primary-nav',
				'menu_class'     => 'lqd-mobile-main-nav main-nav nav',
				'walker'         => class_exists( 'Liquid_Mega_Menu_Walker' ) ? new Liquid_Mega_Menu_Walker : '',
				'echo'           => false
			 ) );
	 else:
		$output	 .=	wp_page_menu( array(
				'container'   => 'ul',
				'before'      => false,
				'after'       => false,
				'link_before' => '',
				'link_after'  => '<span class="submenu-expander"></span>',
				'menu_class'  => 'lqd-mobile-main-nav main-nav nav',
				'menu_id'     => 'primary-nav',
				'depth'       => 3,
				'echo'        => false
			));
	endif;
	
	echo apply_filters( 'liquid_get_mobile_nav_ajax', $output );
	
	wp_die();
	 
 }

add_action( 'wp_ajax_liquid_get_mobile_nav_ajax', 'liquid_get_mobile_nav_ajax' );
add_action( 'wp_ajax_nopriv_liquid_get_mobile_nav_ajax', 'liquid_get_mobile_nav_ajax' );

/**
 * [liquid_header_mobile_trigger_button description]
 * @method liquid_header_mobile_trigger_button
 * @return [type]                [description]
 */
function liquid_header_mobile_trigger_button(  $args = array() ) {

	$defaults = array(
		'class' => 'navbar-toggle collapsed',
		'data-toggle' => 'collapse',
		'data-ld-toggle' => 'true',
		'data-target' => '#main-header-collapse',
		'aria-expanded' => 'false',
		'data-toggle-options' => '{ "changeClassnames": {"html": "mobile-nav-activated"} }'
	);
	
	$args = wp_parse_args( $args, $defaults );	
	
	$args = array_map( 'esc_attr', $args );
	
	?>
	<button type="button" <?php foreach ( $args as $name => $value ) { echo " $name=" . '"' . $value . '"'; } ?>>
		<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'hub' ) ?></span>
		<span class="bars">
			<span class="bars-inner">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</span>
		</span>
	</button>
<?php }

/**
 * [liquid_header_trigger_button description]
 * @method liquid_header_trigger_button
 * @return [type]                [description]
 */
function liquid_header_trigger_button(  $args = array() ) {

	$defaults = array(
		'class' => 'nav-trigger style-1 fill-none collapsed',
		'data-toggle' => 'collapse',
		'data-target' => '#module-1',
		'aria-expanded' => 'false',
		'aria-controls' => 'module-1',
	);
	
	$args = wp_parse_args( $args, $defaults );	
	
	$args = array_map( 'esc_attr', $args );
	
	?>
	<div class="header-module">	
		<button type="button" role="button" <?php foreach ( $args as $name => $value ) { echo " $name=" . '"' . $value . '"'; } ?>>
			<span class="bars">
				<span class="bars-inner">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</span>
			</span>
		</button>
	</div>
<?php }



/**
 * [liquid_portfolio_archive_link description]
 * @method liquid_portfolio_archive_link
 * @return [type]               [description]
 */
function liquid_blog_archive_link() {

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
	
		$blog_archive_link = $page_settings_model->get_settings( 'blog_archive_link' )['url'];
		$blog_archive_link = $blog_archive_link ? $blog_archive_link : liquid_helper()->get_option( 'blog-archive-link' );
	} else {
		$blog_archive_link = liquid_helper()->get_option( 'blog-archive-link' );
	}
	

	
	if( empty( $blog_archive_link ) ) {
		return;
	}
	?>
	<a href="<?php echo esc_url( $blog_archive_link ) ?>" class="lqd-pf-nav-link lqd-pf-nav-all">
		<i class="nav-subtitle"><?php esc_html_e( 'View All Articles', 'hub' ); ?><span></span></i>
	</a>
	<?php
}

/**
 * [liquid_portfolio_media description]
 * @method liquid_portfolio_media
 * @return [type]                [description]
 */
function liquid_portfolio_media( $args = array() ) {

	if ( post_password_required() || is_attachment() ) {
		return;
	}

	$defaults = array(
		'before' => '',
		'after' => '',
		'image_class' => 'portfolio-image'
	);
	extract( wp_parse_args( $args, $defaults ) );

	$format = get_post_format();

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
		$style = $page_settings_model->get_settings( 'portfolio_style' );
	} else {
		$style = get_post_meta( get_the_ID(), 'portfolio-style', true );
	}

	$style = $style ? $style : 'gallery-stacked';
	$lightbox = liquid_helper()->get_option( 'post-gallery-lightbox' );

	// Audio
	if( 'audio' === $format && $audio = liquid_helper()->get_option( 'post-audio' ) ) {

		printf( '<div class="post-audio">%s</div>', do_shortcode( '[audio src="' . $audio . '"]' ) );
	}

	// Gallery
	elseif( 'gallery' === $format && $gallery = liquid_helper()->get_option( 'post-gallery' ) ) {
		
		if( 'gallery-slider' === $style ) {

			echo '<div class="carousel-container carousel-nav-floated carousel-nav-center carousel-nav-middle carousel-nav-xl carousel-nav-solid carousel-nav-rectangle">';

				echo '<div class="carousel-items row mx-0" data-lqd-flickity=\'{ "prevNextButtons": true, "navArrow": "1", "pageDots": false, "navOffsets":{"prev":"28px","next":"28px"}, "parallax": true }\'>';

					foreach ( $gallery as $item ) {
						if ( isset ( $item['attachment_id'] ) ) {

							$src_image     = wp_get_attachment_image_src( $item['attachment_id'], 'full' );
							$resized_image = liquid_get_resized_image_src( $src_image, 'liquid-large-slider' );
							$retina_image  = liquid_get_retina_image( $resized_image );

							printf( '<div class="carousel-item col-xs-12 px-0"><figure><img src="%s" alt="%s"></figure></div>',$resized_image , esc_attr( $item['title'] ) );

						}
					}

				echo '</div>';

			echo '</div>';
		}
		
	}

	// Video
	elseif( 'video' === $format ) {
		$video = '';
		if( $url = liquid_helper()->get_option( 'post-video-url', 'url' ) ) {
			global $wp_embed;
			echo $wp_embed->run_shortcode( '[embed]' . $url . '[/embed]' );
		}
		elseif( $file = liquid_helper()->get_option( 'post-video-file' ) ) {
			if( liquid_helper()->str_contains( '[embed', $file ) ) {
				global $wp_embed;
				echo wp_kses_post( $wp_embed->run_shortcode( $file ) );
			} else {
				echo do_shortcode( $file );
			}
		}
		else {
			$video = liquid_helper()->get_option( 'post-video-html' );
		}

		if( '' != $video ) {
			$my_allowed = wp_kses_allowed_html( 'post' );

			// iframe
			$my_allowed['iframe'] = array(
				'align' => true,
				'width' => true,
				'height' => true,
				'frameborder' => true,
				'name' => true,
				'src' => true,
				'id' => true,
				'class' => true,
				'style' => true,
				'scrolling' => true,
				'marginwidth' => true,
				'marginheight' => true,
			);

			echo wp_kses( $video, $my_allowed );
		}

	}

	else {

		$attachment = get_post( get_post_thumbnail_id() );
		
		
		printf( '%s <figure class="%s" data-element-inview="true">', $before, $image_class );
			echo '<div class="overlay"></div>';
			liquid_the_post_thumbnail( 'liquid-large', array(
			));
			if( is_object( $attachment ) && ! empty( $attachment->post_excerpt ) ) {
				printf( '<figcaption><span>%s</span></figcaption>', $attachment->post_excerpt );
			}
		echo '</figure>' . $after;
	}
}

/**
 * [liquid_portfolio_subtitle description]
 * @method liquid_portfolio_subtitle
 * @param  [type]               $key   [description]
 * @param  [type]               $label [description]
 * @return [type]                      [description]
 */
function liquid_portfolio_subtitle( $before, $after ) {

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
		$value = $page_settings_model->get_settings( 'portfolio_subtitle' );
	} else {
		$value = get_post_meta( get_the_ID(), 'portfolio-subtitle', true );
	}

	if( empty( $value ) ) {
		return;
	}
	
	printf( '%1$s %2$s %3$s', $before, esc_html( $value ), $after  );

}

/**
 * [liquid_portfolio_meta description]
 * @method liquid_portfolio_meta
 * @param  [type]               $key   [description]
 * @param  [type]               $label [description]
 * @return [type]                      [description]
 */
function liquid_portfolio_meta( $key, $label, $col = 6 ) {

	$value = get_post_meta( get_the_ID(), 'portfolio-' . $key, true );
	if( !$value ) {
		return;
	}
	?>
	<div class="col-md-<?php echo esc_attr( $col ) ?>">

		<p>
			<strong class="info-title"><?php echo esc_html( $label ) ?>:</strong> <?php echo esc_html( $value ); ?>
		</p>

	</div>
	<?php
}

/**
 * [liquid_portfolio_atts description]
 * @method liquid_portfolio_date
 * @return [type]               [description]
 */
function liquid_portfolio_atts( $col = 6 ) {

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
		$atts = explode("\n", str_replace("\r", "", $page_settings_model->get_settings( 'portfolio_attributes' )));
	} else {
		$atts = get_post_meta( get_the_ID(), 'portfolio-attributes', true );
	}

	if( !is_array( $atts ) ) {
		return;
	}
	foreach ( $atts as $attr ) {

		if( !empty( $attr ) ) {
			$attr = explode( "|", $attr );
			$label = isset( $attr[0] ) ? $attr[0] : '';
			$value = isset( $attr[1] ) ? $attr[1] : $label;
		?>
		<span>
			<?php if( $label ) { ?><small class="text-uppercase ltr-sp-1"><?php echo esc_html( $label ) ?>:</small><?php } ?>
			<h5 class="my-0"><?php echo esc_html( $value ); ?></h5>
		</span>
		<?php
		}
	}
}

/**
 * [liquid_portfolio_archive_link description]
 * @method liquid_portfolio_archive_link
 * @return [type]               [description]
 */
function liquid_portfolio_archive_link() {

	$pf_link         = liquid_helper()->get_option( 'portfolio-archive-link' );
	$pf_archive_link = get_post_type_archive_link( 'liquid-portfolio' );

	$link = ! empty( $pf_link ) ? $pf_link : '#';
	?>
	<a href="<?php echo esc_url( $link ) ?>" class="lqd-pf-nav-link lqd-pf-nav-all"><span></span></a>
	<?php
}

/**
 * [liquid_portfolio_date description]
 * @method liquid_portfolio_date
 * @return [type]               [description]
 */
function liquid_portfolio_date() {

	if( 'off' === liquid_helper()->get_option( 'portfolio-enable-date' ) ) {
		return;
	}

	$label = liquid_helper()->get_option( 'portfolio-date-label' ) ? liquid_helper()->get_option( 'portfolio-date-label' ) : esc_html__( 'Date', 'hub' );
	$date  = liquid_helper()->get_option( 'portfolio-date' ) ? liquid_helper()->get_option( 'portfolio-date' ) : get_the_date();

	?>
	<span>
		<?php if( $label ) { ?>
			<small class="text-uppercase ltr-sp-1"><?php echo esc_html( $label ) ?>:</small>
		<?php } ?>
		<h5 class="my-0"><?php echo esc_html( $date ) ?></h5>
	</span>
	<?php
}

/**
 * [liquid_portfolio_likes description]
 * @method liquid_portfolio_likes
 * @return [type]                [description]
 */
function liquid_portfolio_likes( $class = 'portfolio-likes style-alt', $post_type = 'portfolio' ) {

	$option_name = str_replace( 'liquid-', '', $post_type ) . '-likes-';
	if( 'off' === liquid_helper()->get_option( $option_name . 'enable' ) || ! function_exists( 'liquid_likes_button' ) ) {
		return;
	}

	liquid_likes_button(array(
		'container' => 'div',
		'container_class' => $class,
		'format' => wp_kses_post( __( '<span><i class="fa fa-heart"></i> <span class="post-likes-count">%s</span></span>', 'hub' ) )
	));
}

/**
 * [liquid_get_lightbox_link]
 * @method liquid_get_lightbox_link
 * @return [type]                [description]
 */
function liquid_get_lightbox_link( $link_to_image ) {
	if( empty( $link_to_image ) ) {
		return;
	}

	return '<a class="lightbox-link" data-type="image" href="' . esc_url( $link_to_image ) . '"></a>';
}

/**
 * [liquid_render_related_posts description]
 * @method liquid_render_related_posts
 * @param  string                     $post_type [description]
 * @return [type]                                [description]
 */
function liquid_render_related_posts( $post_type = 'post' ) {

	$folder = str_replace( 'liquid-', '', $post_type );
	$option_name = $folder . '-related-';

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
	
		$post_related_enable = $page_settings_model->get_settings( 'post_related_enable' );
		if ( !$post_related_enable ){ $post_related_enable = liquid_helper()->get_option( $option_name . 'enable' ); }
	
		$heading = $page_settings_model->get_settings( 'post_related_title' );
		if ( !$heading ){ $heading = liquid_helper()->get_option( $option_name . 'title', 'html' ); }
	
		$style = $page_settings_model->get_settings( 'post_related_style' );
		if ( !$style ){ $style = liquid_helper()->get_option( 'portfolio-related-style' ); }
		
		$related_posts_view = $page_settings_model->get_settings( 'post_related_style' );
		if ( !$related_posts_view ){ $related_posts_view = liquid_helper()->get_option( 'post-related-style' ); }
	
		$number_of_posts = $page_settings_model->get_settings( 'post_related_number' );
		if ( !$number_of_posts ){ $number_of_posts = liquid_helper()->get_option( $option_name . 'number' ); }

	} else {
		$post_related_enable = liquid_helper()->get_option( $option_name . 'enable' );
		$heading = liquid_helper()->get_option( $option_name . 'title', 'html' );
		$style = liquid_helper()->get_option( 'portfolio-related-style' );
		$related_posts_view = liquid_helper()->get_option( 'post-related-style' );
		$number_of_posts = liquid_helper()->get_option( $option_name . 'number' );
	}

	if( 'off' === $post_related_enable) {
		return;
	}

	$number_of_posts = '0' == $number_of_posts ? '3' : $number_of_posts;
	
	$taxonomy = 'post' === $post_type ? 'category' : $post_type . '-category';

	$related_posts = liquid_get_post_type_related_posts( get_the_ID(), $number_of_posts, $post_type, $taxonomy );

	if( $related_posts && $related_posts->have_posts() ) {
		$located = locate_template( array(
			'templates/related-'. $folder .'.php',
			'templates/related-posts.php'
		) );

		if( $located ) require $located;
	}
}

/**
 * [liquid_get_post_type_related_posts description]
 * @method liquid_get_post_type_related_posts
 * @param  [type]                            $post_id      [description]
 * @param  integer                           $number_posts [description]
 * @param  string                            $post_type    [description]
 * @param  string                            $taxonomy     [description]
 * @return [type]                                          [description]
 */
function liquid_get_post_type_related_posts( $post_id, $number_posts = 6, $post_type = 'post', $taxonomy = 'category' ) {

	if( 0 == $number_posts ) {
		return false;
	}

	$item_array = array();
	$item_cats = get_the_terms( $post_id, $taxonomy );
	if ( $item_cats ) {
		foreach( $item_cats as $item_cat ) {
			if ( isset($item_cat->term_id) ){
				$item_array[] = $item_cat->term_id;
			}
		}
	}

	if( empty( $item_array ) ) {
		return false;
	}

	$args = array(
		'post_type'				=> $post_type,
		'posts_per_page'		=> $number_posts,
		'post__not_in'			=> array( $post_id ),
		'ignore_sticky_posts'	=> 0,
		'tax_query'				=> array(
			array(
				'field'		=> 'id',
				'taxonomy'	=> $taxonomy,
				'terms'		=> $item_array
			)
		)
	);

	return new WP_Query( $args );
}

/**
 * [liquid_render_post_nav description]
 * @method liquid_render_post_nav
 * @param  string                $post_type [description]
 * @return [type]                           [description]
 */
function liquid_render_post_nav( $post_type = 'post' ) {

	$post_type = str_replace( 'liquid-', '', $post_type );

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
	
		$post_navigation_enable = $page_settings_model->get_settings( 'post_navigation_enable' );

		if ( !$post_navigation_enable ){
			$post_navigation_enable = liquid_helper()->get_option( $post_type . '-navigation-enable' );
		}
	} else {
		$post_navigation_enable = liquid_helper()->get_option( $post_type . '-navigation-enable' );
	}

	if( 'off' === $post_navigation_enable ) {
		return;
	}

	$post_type = 'post' === $post_type ? 'blog' : $post_type;
	get_template_part( 'templates/'. $post_type .'/single/navigation' );
}

/**
 * [liquid_portfolio_the_content description]
 * @method liquid_portfolio_the_content
 * @return [type]                      [description]
 */
function liquid_portfolio_the_content() {

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
		$content = $page_settings_model->get_settings( 'portfolio_description' );
	} else {
		$content = get_post_meta( get_the_ID(), 'portfolio-description', true );
	}

	if( $content ) {
		echo apply_filters( 'the_content', $content );
		return;
	}

	$content = get_the_content();
	if( liquid_helper()->str_contains( '[vc_row', $content ) ) {
		return;
	}

	the_content( sprintf(
		esc_html__( 'Continue reading %s', 'hub' ),
		the_title( '<span class="screen-reader-text">', '</span>', false )
	) );
}

/**
 * [liquid_portfolio_the_excerpt description]
 * @method liquid_portfolio_the_content
 * @return [type]                      [description]
 */
function liquid_portfolio_the_excerpt() {

	if ( class_exists( 'Liquid_Elementor_Addons' ) && defined('ELEMENTOR_VERSION') ){
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		$page_settings_model = $page_settings_manager->get_model( get_the_ID() );
		$excerpt = $page_settings_model->get_settings( 'portfolio_description' );
	} else {
		$excerpt = get_post_meta( get_the_ID(), 'portfolio-description', true );
	}

	if( $excerpt ) {
		$excerpt = apply_filters( 'get_the_excerpt', $excerpt );
		$excerpt = apply_filters( 'the_excerpt', $excerpt );
		echo wp_kses_post( $excerpt );
		return;
	}

	$excerpt = get_the_excerpt();
	if( liquid_helper()->str_contains( '[vc_row', $excerpt ) ) {
		return;
	}
	/*
	the_excerpt( sprintf(
		esc_html__( 'Continue reading %s', 'hub' ),
		the_title( '<span class="screen-reader-text">', '</span>', false )
	) );
	*/
}


/**
 * [liquid_portfolio_the_vc description]
 * @method liquid_portfolio_the_vc
 * @return [type]                 [description]
 */
function liquid_portfolio_the_vc() {

	$content = get_the_content();
	if( !liquid_helper()->str_contains( '[vc_row', $content ) ) {
		return;
	}

	the_content( sprintf(
		esc_html__( 'Continue reading %s', 'hub' ),
		the_title( '<span class="screen-reader-text">', '</span>', false )
	) );
}

/**
 * [liquid_author_link description]
 * @method liquid_author_link
 * @param  array             $args [description]
 * @return [type]                  [description]
 */
function liquid_author_link( $args = array() ) {

	global $authordata;
    if ( ! is_object( $authordata ) ) {
        return;
    }

	$defaults = array(
		'before' => '',
		'after' => ''
	);
	extract( wp_parse_args( $args, $defaults ) );

	$link = sprintf(
        '<a class="url fn" href="%1$s" title="%2$s" rel="author">%3$s</a>',
        esc_url( get_author_posts_url( $authordata->ID, $authordata->user_nicename ) ),
        esc_attr( sprintf( esc_html__( 'Posts by %s', 'hub' ), get_the_author() ) ),
        $before . get_the_author() . $after
    );
	?>
	<span <?php liquid_helper()->attr( 'entry-author', array( 'class' => 'vcard author' ) ); ?>>
		<span itemprop="name">
			<?php echo apply_filters( 'liquid_author_link', $link ); ?>
		</span>
	</span>
	<?php
}

/**
 * [liquid_get_category description]
 * @method liquid_get_category
 * @return [type]            [description]
 */
function liquid_get_category() {
	
	$cats_list = get_the_category();
	$cat = isset( $cats_list[0] ) ? $cats_list[0] : '';
	if( empty( $cat ) ) {
		return;
	}
	
	echo '<a href="' . get_category_link( $cat->term_id ) . '" rel="category tag">' . esc_html( $cat->name  ) . '</a>';
	
}

/**
 * [liquid_author_role description]
 * @method liquid_author_role
 * @return [type]            [description]
 */
function liquid_author_role() {

	global $authordata;
    if ( ! is_object( $authordata ) ) {
        return;
    }

	$user = new WP_User( $authordata->ID );
    return array_shift( $user->roles );
}

if ( ! function_exists( 'liquid_post_time' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time.
 */
function liquid_post_time( $icon = false, $echo = true ) {

	$time_string = '<time %5$s >%2$s</time>';

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() ),
		liquid_helper()->get_attr( 'entry-published' )
	);

	$time_url = get_day_link( get_post_time( 'Y' ), get_post_time( 'm' ), get_post_time( 'j' ) );
	$icon_html = $icon ? '<i class="fa fa-clock-o"></i>' : '';

	$out = sprintf( '<a href="%1$s">%3$s %2$s</a>', get_the_permalink(), $time_string, $icon_html );

	if( $echo ) {
		echo apply_filters( 'liquid_post_time', $out );
	} else {
		return apply_filters( 'liquid_post_time', $out );
	}
}
endif;