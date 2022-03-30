<?php
/**
 * Template Name: Футажи и поздравления
 *
**/
get_header(); ?>

                <div class="BlocksLogo">
                    <h1>Набор футажей и поздравлений<h1>
                </div>

						
						
						<div class="PoemsPage">
                                    <div class="tabs">
                        <div class="tabs__nav tabs-nav">
                            <div class="tabs-nav__item is-active" data-tab-name="tab-1">Посмотреть все</div>
							<div class="tabs-nav__item" data-tab-name="tab-2">Юбилей и день рождения</div>
                            <div class="tabs-nav__item" data-tab-name="tab-3">Мульт и анимация</div>
                            <div class="tabs-nav__item" data-tab-name="tab-4">Видео-открытка</div>
                            <div class="tabs-nav__item" data-tab-name="tab-5">Футажи из тик-тока</div>
                            <div class="tabs-nav__item" data-tab-name="tab-6">Мудрые слова стихи</div>
                            <div class="tabs-nav__item" data-tab-name="tab-10">Свадьба</div>
							<div class="tabs-nav__item" data-tab-name="tab-8">Детские</div>
							<div class="tabs-nav__item" data-tab-name="tab-9"></div>
							<div class="tabs-nav__item" data-tab-name="tab-7">Разное</div>
                        </div>





                        <div class="tabs__content">




                            <div class="tab is-active tab-1"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'footages',
	'numberposts' => -1,
	'orderby'     => 'rand',
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

<div class="VideoProject">
                        <div class="ProjectLogo">
                                <h2><?php the_field('project_head')?></h2>
                        </div>
                        <div class="ProjectPreview">
                            <img src="<?php the_field('project_image')?>" alt="">
                        </div>

                        <a href=""><div class="ProjectButtonBuy">
                            Скачать
                        </div></a>
                    </div>

<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div>
							
							
							
										
										
										
										
</div>	                        </div> </div> 
<script src="<?php echo get_template_directory_uri()?>/js/Tabs.js"></script>									
<?php
get_footer();