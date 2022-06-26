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
    <base href="<?php echo get_home_url();?>">
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    
    <!-- Page Title  -->
    <title>Invest Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/assets/css/dashlite.css?ver=2.9.0">
    <link id="skin-default" rel="stylesheet" href="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/assets/css/theme.css?ver=2.9.0">
</head>

 
