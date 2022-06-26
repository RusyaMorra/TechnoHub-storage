<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TestSite
 */

get_header();
?>


<body>


<main id="panel"  class="site-main-404" style="background-color=black; height=100%; width=100%;">
    <h1 class="page-title"><?php esc_html_e( 'Такой страницы не найдено:' ); ?> </h1>
    <p class="p404"><?php esc_html_e( 'Ошибка 404' ); ?></p>
   
</main><!-- #main -->


</body>







<?php
get_footer();

?>
