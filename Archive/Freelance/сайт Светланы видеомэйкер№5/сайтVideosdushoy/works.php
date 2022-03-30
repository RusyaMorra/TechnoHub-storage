<?php
/**
 * Template Name: Наши работы
 *
**/
get_header();
?>

                <div class="BlocksLogo">
                    <h1><?php the_field('title-w-h1')?></h1>
                 </div>
                
                 <div class="container-text-gl">

                      <div class="text-gl">
                            <h2><?php the_field('title-w-h2')?></h2>
                            
                             <div class="AboutUsPic-2">
                        <img src="<?php the_field('img')?>" alt="">
                    </div>
                            
							<p><?php the_field('text-w')?></p>
							
                        </div>






                <div class="BlocksLogo">
                    <p>Наши работы</p>
                </div>

<div class="PoemsPage">
                                    <div class="tabs">
                        <div class="tabs__nav tabs-nav">
                            <div class="tabs-nav__item is-active" data-tab-name="tab-1">Посмотреть все</div>
                            <div class="tabs-nav__item" data-tab-name="tab-2">Юбилей и День рождения</div>
                            <div class="tabs-nav__item" data-tab-name="tab-3">Видео в память</div>
                            <div class="tabs-nav__item" data-tab-name="tab-4">Свадебные видео</div>
                            <div class="tabs-nav__item" data-tab-name="tab-5"> Детские видеопоздравления</div>
                            <div class="tabs-nav__item" data-tab-name="tab-6">Разное</div>
							<div class="tabs-nav__item" data-tab-name="tab-7"> Детский сад</div>
							<div class="tabs-nav__item" data-tab-name="tab-8">Рекламные видео</div>
							<div class="tabs-nav__item" data-tab-name="tab-9">Школьные видео</div>
                        </div>





                        <div class="tabs__content">




                            <div class="tab is-active tab-1"> 
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works',
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

                            </div>
										
										
										
										
										
                            <div class="tab tab-2">
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_birthday',
	'numberposts' => -1,
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
                            <div class="tab tab-3">
                               
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_memory',
	'numberposts' => -1,
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
                               <div class="tab tab-4">
                                
                               

                               <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_wedding',
	'numberposts' => -1,
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
                                    <div class="tab tab-5">
   

                                    <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_kids',
	'numberposts' => -1,
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




                                       <div class="tab tab-6">
    

                                       <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_other',
	'numberposts' => -1,
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
										
										
										<div class="tab tab-7">
    

                                       <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_garden_kids',
	'numberposts' => -1,
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
										
										
										<div class="tab tab-8">
    

                                       <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_advert',
	'numberposts' => -1,
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
										
										
										<div class="tab tab-9">
    

                                       <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_school',
	'numberposts' => -1,
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

                        </div>

                        
                        </div>
                        </div> </div> 
<script src="<?php echo get_template_directory_uri()?>/js/Tabs.js"></script>
<?php
get_footer();