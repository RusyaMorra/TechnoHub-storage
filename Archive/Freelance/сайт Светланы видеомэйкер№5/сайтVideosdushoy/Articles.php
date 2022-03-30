<?php
/**
 * Template Name: Все статьи
 *
**/
get_header();
?>
                <div class="BlocksLogo">
                    <h1>Наш блог</h1>
                </div>

                <section class="grid">
        <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'articles',
	'orderby'     => 'date',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $my_posts as $post ){
	setup_postdata( $post );

?>
    <article data-aos="fade-up" class="grid-item">
        <div class="image">
            <img src="<?php the_field('article_image') ?>" />
        </div>
        <div class="info">
            <h2><?php the_field('article_logo') ?></h2>
            <div class="info-text">
                <p><?php the_field('article_short_text') ?></p>
            </div>
            <div class="button-wrap">
                <a class="atuin-btn" href="<?php the_permalink()?>">Подробнее</a>
            </div>
        </div>
    </article>  

<?php 
}

wp_reset_postdata(); // сброс
?>      

</section>

<?php
get_footer();