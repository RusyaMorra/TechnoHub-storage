<?php

/**
* Default header
*
* @package Hub
*/

?>
<header class="main-header lqd-main-header-default">

	<div class="lqd-head-sec-wrap pos-rel">

		<div class="lqd-head-sec container-fluid d-flex align-items-stretch px-3">

				<div class="lqd-head-col col">

					<div class="header-module module-logo">

						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<span class="navbar-brand-inner">
								<img class="logo-default" src="<?php liquid_logo_url(); ?>" alt="<?php echo bloginfo( 'name' ) ?>" />
							</span>
						</a>

					</div>
					
				</div>

				<div class="lqd-head-col col text-center">

					<div class="header-module pos-stc py-0">

						<div class="collapse navbar-collapse" id="main-header-collapse" aria-expanded="false" role="navigation">
							<?php

								if( has_nav_menu( 'primary' ) ) :

									wp_nav_menu( array(
										'theme_location' => 'primary',
										'container'      => 'ul',
										'before'         => false,
										'after'          => false,
										'link_before'    => '',
										'link_after'     => '<span class="submenu-expander"></span>',
										'menu_id'        => 'primary-nav',
										'menu_class'     => 'main-nav nav',
										'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'walker'         => class_exists( 'Liquid_Mega_Menu_Walker' ) ? new Liquid_Mega_Menu_Walker : '',
									) );

								else:

									wp_page_menu( array(
										'container'   => 'ul',
										'before'      => false,
										'after'       => false,
										'link_before' => '',
										'link_after'  => '<span class="submenu-expander"></span>',
										'menu_id'     => 'primary-nav',
										'menu_class'  => 'main-nav nav',
										'depth'       => 3
									) );

								endif;

							?>
						</div>

						</div>

				</div>
				
				<div class="lqd-head-col col text-right">

					<div class="header-module">

						<?php get_template_part( 'templates/header/header', 'search-default' ); ?>
						
					</div>

			</div>

		</div>
	
	</div>

	<div class="lqd-mobile-sec elementor">

		<div class="lqd-mobile-sec-inner navbar-header d-flex align-items-stretch">

			<div class="lqd-mobile-modules-container empty"></div>

			<button
			type="button"
			class="navbar-toggle collapsed nav-trigger style-mobile"
			data-ld-toggle="true"
			data-toggle="collapse"
			data-target="#lqd-mobile-sec-nav"
			aria-expanded="false"
			data-toggle-options='{ "changeClassnames": {"html": "mobile-nav-activated"} }'>
				<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'hub' ); ?></span>
				<span class="bars">
					<span class="bars-inner">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</span>
				</span>
			</button>

			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="navbar-brand-inner">
					<img class="logo-default" src="<?php liquid_logo_url(); ?>" alt="<?php echo bloginfo( 'name' ) ?>" />
				</span>
			</a>

		</div>

		<div class="lqd-mobile-sec-nav">
			<div class="collapse navbar-collapse" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">

				<?php
			
					if( has_nav_menu( 'primary' ) ) :

						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container'      => 'ul',
							'before'         => false,
							'after'          => false,
							'link_before'    => '',
							'link_after'     => '<span class="submenu-expander"></span>',
							'menu_id'        => 'mobile-primary-nav',
							'menu_class'     => 'mobile-main-nav main-nav reset-ul px-2',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'walker'         => class_exists( 'Liquid_Mega_Menu_Walker' ) ? new Liquid_Mega_Menu_Walker : '',
						) );

					else:

						wp_page_menu( array(
							'container'   => 'ul',
							'before'      => false,
							'after'       => false,
							'link_before' => '',
							'link_after'  => '<span class="submenu-expander"></span>',
							'menu_id'     => 'mobile-primary-nav',
							'menu_class'  => 'mobile-main-nav main-nav reset-ul px-2',
							'depth'       => 3
						) );

					endif;

				?>

			</div>
		</div>

	</div>

</header>