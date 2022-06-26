<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css" />
	<link rel="stylesheet" type="text/css"
		href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick-theme.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
</head>

<body>

	<header class="  mb-2 " id="header-nav">
		<nav class="navbar navbar-expand-lg navbar-dark ">
			<div class="container">
				<button class="btn border-0 p-0 navbar-toggler position-relative z-index2" type="button"
					data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/burger.svg" class="burger"
						alt="">
				</button>
				<a class="navbar-brand mb-lg-3 me-1 me-md-3" href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"
						class="logo-header d-none d-lg-block" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sm.svg"
						class="logo-header d-lg-none" alt="">
				</a>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-1 me-lg-2 me-xxl-3 mb-2 mb-lg-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nav-link-flag" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/flag-ru.svg" alt="">
                <span>
                  RU
                </span>
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-down.svg" alt="">
              </a>
              <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item rounded" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/flag-en.png" width="22" alt="">
                    <span>
                      EN
                    </span>
                  </a></li>
              </ul>
            </li>
            </ul>
				<?php 
	wp_nav_menu (
		array (
			'menu_id' => '',
			'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
			'container' => '',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
		)
	)
				?>

					 
				</div>
				<div class="d-flex align-items-center justify-content-start">
					<a href="#" class="btn btn-outline-gold d-block me-2 me-md-4">
						Войти
					</a>
					<a href="#" class="btn btn-gold">
						Открыть счёт
					</a>
				</div>
			</div>
		</nav> <!-- end nav -->
		<div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasExample"
			aria-labelledby="offcanvasExampleLabel">
			<div class="offcanvas-body position-relative">
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			
				<?php 
	wp_nav_menu (
		array (
			'menu_id' => '',
			'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
			'container' => '',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
		)
	)
				?>

			</div>
		</div> <!-- end offcanvas -->
	</header> <!-- end header -->