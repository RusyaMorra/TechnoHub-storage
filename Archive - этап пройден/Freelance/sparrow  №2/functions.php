<?php

add_action('after_setup_theme', 'mymenu');



function mymenu(){
add_theme_support('title-tag');
register_nav_menu('top', 'menu в шапке');
register_nav_menu('down', 'menu в футере');
add_theme_support( 'post-thumbnails', array( 'post' ) );  
add_theme_support( 'post-thumbnails', array( 'page' ) ); 
add_image_size( 'post', '1300px', '500px', true ); 
add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
}

}

add_action('wp_enqueue_scripts', 'style_theme');
function style_theme() {
    wp_enqueue_style('style',  get_stylesheet_uri());
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core',  get_template_directory_uri() .'/assets/js/jquery-1.10.2.min.js');
	wp_enqueue_script( 'jquery' );
}

add_action('wp_footer', 'scripts_theme');
function scripts_theme() {
   
    wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');
    wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js',['jquery'],null,true);
    wp_enqueue_script('jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js',['jquery'],null,true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js',null,null,true);
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js',['jquery'],null,true);
   
}




add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'right sidebar',
		'id'            => "right_sidebar",
		'description'   => 'наш сайдбар добавляйте свои виджиты',
	//	'class'         => '',
		'before_widget' => '<form  class="widget">',
		'after_widget'  => "</form >\n",
	//	'before_title'  => '<h2 class="widgettitle">',
	//	'after_title'   => "</h2>\n",
	//	'before_sidebar' => '', // WP 5.6
	//	'after_sidebar'  => '', // WP 5.6
	) );

}


