<?php
/**
 * Template Name: Видео в память: ученики
 *
**/
get_header();
?>
                <div class="BlocksLogo">
                    <h1>Видео в память<h1>
                </div>

<div class="PoemsPage">
<div class="CategorySidebar">
                        <a href="http://wordpress/работы-учеников/" class=""><div class="CategorySidebarItem">Посмотреть все</div></a>
                        <a href="http://wordpress/юбилей-и-день-рождения-ученики/" class=""><div class="CategorySidebarItem">Юбилей и День рождения</div></a>
                        <a href="http://wordpress/видео-в-память-ученики/" class=""><div class="CategorySidebarItem">Видео в память</div></a>
                        <a href="http://wordpress/свадебные-видео-ученики/" class=""><div class="CategorySidebarItem">Свадебные видео</div></a>
                        <a href="http://wordpress/детские-видеопоздравления-ученики/" class=""><div class="CategorySidebarItem">Детские видеопоздравления</div></a>
                        <a href="http://wordpress/разное-ученики/" class=""><div class="CategorySidebarItem">Разное</div></a>
                    </div>
        <div class="Works">

        <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_memory_studens',
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

                    <div class="Project">
                            <div class="ProjectLogo">
                                    <h2><?php the_field('work_logo')?></h2>
                            </div>
                            <div class="ProjectPreview">
                                <img src="<?php the_field('work_image')?>" alt="">
                            </div>
                            <a href="<?php the_permalink()?>"><div class="ProjectButton">
                                Смотреть
                            </div></a>
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>      

                        
                        </div>
                        </div> </div> 

<?php
get_footer();