<?php
/**
 * Template Name: Юбилей и день рождения
 *
**/
get_header();
?>
                <div class="BlocksLogo">
                    <h1>Юбилей и день рождения<h1>
                </div>

<div class="PoemsPage">
<div class="Category_Content">
                        <a href="https://videosdushoy.ru/%d0%bd%d0%b0%d1%88%d0%b8-%d1%80%d0%b0%d0%b1%d0%be%d1%82%d1%8b/" class=""><div class="Category_Item">Посмотреть все</div></a>
                        <a href="https://videosdushoy.ru/юбилей-и-день-рождения/" class=""><div class="CategorySidebarItem">Юбилей и День рождения</div></a>
                        <a href="https://videosdushoy.ru/видео-в-память/" class=""><div class="Category_Item">Видео в память</div></a>
                        <a href="https://videosdushoy.ru/свадебные-видео/" class=""><div class="Category_Item">Свадебные видео</div></a>
                        <a href="https://videosdushoy.ru/%d0%b4%d0%b5%d1%82%d1%81%d0%ba%d0%b8%d0%b5-%d0%b2%d0%b8%d0%b4%d0%b5%d0%be%d0%bf%d0%be%d0%b7%d0%b4%d1%80%d0%b0%d0%b2%d0%bb%d0%b5%d0%bd%d0%b8%d1%8f/" class=""><div class="Category_Item">Детские видеопоздравления</div></a>
                        <a href="https://videosdushoy.ru/разное/" class=""><div class="Category_Item">Разное</div></a>
                    </div>
        <div class="Works">

        <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_birthday',
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
                            <a href=""><div class="ProjectButton">
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