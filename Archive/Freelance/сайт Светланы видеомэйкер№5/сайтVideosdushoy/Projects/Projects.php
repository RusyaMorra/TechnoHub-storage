<?php
/**
 * Template Name: Проекты для своего видео
 *
**/
get_header(); ?>


                 <div data-aos="fade-up" class="BlocksLogo">
                    <h1><?php the_field('title-pr-h1')?></h1>
                 </div>
                
                 <div class="container-text-gl">

                      <div class="text-gl">
                            <h2><?php the_field('title-pr-h2')?></h2>
                            
                             <div class="AboutUsPic-2">
                        <img src="<?php the_field('img')?>" alt="">
                    </div>
                            
							<p><?php the_field('text-pr')?></p>
							
                        </div>





                <div class="BlocksLogo">
                    <p>Найдите видео для себя<p>
                </div>

						
						
						<div class="PoemsPage">
                                    <div class="tabs">
                        <div class="tabs__nav tabs-nav">
                            <div data-aos="flip-down" class="tabs-nav__item is-active" data-tab-name="tab-1">Посмотреть все</div>
							<div data-aos="flip-down" class="tabs-nav__item" data-tab-name="tab-2">Бесплатные проекты</div>
                            <div data-aos="flip-down" class="tabs-nav__item" data-tab-name="tab-3">Юбилей и День рождения</div>
                            <div data-aos="flip-down" class="tabs-nav__item" data-tab-name="tab-4">Видео в память</div>
                            <div data-aos="flip-down" class="tabs-nav__item" data-tab-name="tab-5">Свадебные видео</div>
                            <div data-aos="flip-down" class="tabs-nav__item" data-tab-name="tab-6"> Детские видеопоздравления</div>
                            <div data-aos="flip-down" class="tabs-nav__item" data-tab-name="tab-10">Школьные проекты</div>
							<div data-aos="flip-down" class="tabs-nav__item" data-tab-name="tab-8">Новогодние проекты</div>
							<div data-aos="flip-down" class="tabs-nav__item" data-tab-name="tab-9">Реклама-проекты</div>
							<div data-aos="flip-down" class="tabs-nav__item" data-tab-name="tab-7">Разное</div>
                        </div>





                        <div class="tabs__content">




                            <div class="tab is-active tab-1"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'projects',
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

<div data-aos="fade-up" class="VideoProject">
                        <div class="ProjectLogo">
                                <h2><?php the_field('project_head')?></h2>
                        </div>
                        <div class="ProjectPreview">
                            <img src="<?php the_field('project_image')?>" alt="">
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           <?php the_field('project_price')?>&#x20bd;
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Приобрести
                        </div></a>
                    </div>

<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div> 

                            </div>
	
										<div class="tab tab-2"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'free_projects',
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
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           Бесплатно
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Скачать
                        </div></a>
                    </div>


<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div> 
							
										
										<div class="tab tab-3"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'projects_birthday',
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
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           <?php the_field('project_price')?>&#x20bd;
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Приобрести
                        </div></a>
                    </div>


<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div> 
										<div class="tab tab-4"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'projects_memory',
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
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           <?php the_field('project_price')?>&#x20bd;
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Приобрести
                        </div></a>
                    </div>


<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div> 
										<div class="tab tab-5"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'project_wedding',
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
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           <?php the_field('project_price')?>&#x20bd;
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Приобрести
                        </div></a>
                    </div>


<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div> 
										<div class="tab tab-6"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'project_kids',
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
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           <?php the_field('project_price')?>&#x20bd;
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Приобрести
                        </div></a>
                    </div>


<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div> 
	
										
										<div class="tab tab-7"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'project_kids',
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
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           <?php the_field('project_price')?>&#x20bd;
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Приобрести
                        </div></a>
                    </div>

<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div> 
										
										
										
<div class="tab tab-8"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'project_new_year',
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
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           <?php the_field('project_price')?>&#x20bd;
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Приобрести
                        </div></a>
                    </div>


<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div> 	
										<div class="tab tab-9"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'projects_advertisment',
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
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           <?php the_field('project_price')?>&#x20bd;
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Приобрести
                        </div></a>
                    </div>


<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div> 
										<div class="tab tab-10"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'projects_school',
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
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           <?php the_field('project_price')?>&#x20bd;
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Приобрести
                        </div></a>
                    </div>


<?php 
}

wp_reset_postdata(); // сброс
?>      

                               </div> 
										<div class="tab tab-7"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'project_other',
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
                        <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Смотреть
                        </div></a>
                        <div class="ProjectButton">
                           <?php the_field('project_price')?>&#x20bd;
                        </div>
                        <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">
                            Приобрести
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