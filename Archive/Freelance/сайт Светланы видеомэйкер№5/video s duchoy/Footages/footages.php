<?php
/**
 * Template Name: Футажи и поздравления
 *
**/
get_header(); ?>

<style>
    .slick-dots{
        display: none !important;
    }
    .slick-arrow{
      display: none !important;
   }
   .Productsingle{
      width: 300px;
      height: 250px;
      border-radius: 10px;
      margin-left: 30px;
      margin-right: 30px;
      border: 2px solid #FF8A00;
      display: flex;
      flex-derection:column;
   }



   .ProductLogo{
      font-size: 19px ;
      cursor: pointer;
      margin-bottom: 0px;
      padding: 0px 30px 0px 0px;
      line-height: 24px !important;
   }

   .ProductLogo:hover{
      color: #0084c9;
   }

   .slider2{
    height: 470px;
    width: 87%;
    margin: auto;
   }

    .ProjectPreview img{
        width: 90%;
        height: 80%;
        border-radius:7px;
    }

    .mr-t{
        margin-top: 150px;
    }

    .PoemText{
        font-size: 17px;
    }
  .make-orange{
    margin-bottom: 10px;
  }
   .make-orange a{
       color: #FF8A00 !important;
   }

   .PoemText {
    padding-left: 0px;
    padding-right: 0px;
    height: 100%;
    line-height: 17px;
   }


   .poe{
    border: 5px solid #ff8a00;
    margin-left: 30px;
    margin-rigth:30px;
    border-radius:10px;
    padding: 10px;
   }


   @media (max-width: 438px) {
  

   .slider2 {
    height: 659px;
   
   }
}
</style>


<div class="btn-get-order-top">
                        <a data-aos="zoom-in" href="https://videosdushoy.ru/video_templates" class="btn-write-in-viber  get-less vid-const-note">Видео Конструктор</a>
                        <a data-aos="zoom-in" href = "https://videosdushoy.ru/training" class="btn-get-constructor  mr-off get-less">Обучение</a>
                            
                     </div>     
                <div class="BlocksLogo">
                    <h1>Набор футажей и поздравлений<h1>
                </div>

                <div class="text-gl">
                            <h2><?php the_field('title-w-h2-footages')?></h2>
                            
                             <div class="AboutUsPic-2 ">
                             <img src="<?php the_field('img-footages')?>" alt="">
                            </div>
                                
                        <p><?php the_field('text-footages')?></p>
                        <h1 data-aos="fade-up" class="heading-how-to">Может вам интересны  <span>стихи</span> </h1>
                        <img class="swipe-not"  src="<?php echo get_template_directory_uri();?>/img/swipe.png" alt="">
   <!--slider start-->
   <div class="slider2">
                        <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
    'posts_per_page' => 10,
	'category_name'    => 'poems',
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


<div class="poe">
            <div class="ProductLogo make-orange"><a  class="a-link-blog" href="<?php the_permalink();  ?>" title=""><?php the_field('poem_head')?></a></div>
            <div class="PoemText"><?php the_field('poem_page')?></div>
             
            
            </div>



<?php 
}

wp_reset_postdata(); // сброс
?>     
                        </div>		
                </div>	
                <div class="BlocksLogo mr-t">
                    <p>Наши футажи</p>
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
                    <div class="tabs-nav__item" data-tab-name="tab-7">Разное</div>
                    <div class="tabs-nav__item" data-tab-name="tab-8">Детские</div>
                    <div class="tabs-nav__item" data-tab-name="tab-9">Свадьба</div>
                                    
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

<div class="Project">
    <div class="ProjectLogo"><h2><?php the_field('footage_name')?></h2></div>
    <div class="ProjectPreview"> <img src="<?php the_field('footage_pic')?>" alt=""></div>
    <a href="<?php the_permalink()?>"><div class="ProjectButtonBuy">Скачать </div></a>
</div>

<?php 
}

wp_reset_postdata(); // сброс
?>      

                </div>


 								
                <div class="tab tab-2">
                            <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'birthday_footages',
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
                                    <h2><?php the_field('footage_name')?></h2>
                            </div>
                            <div class="ProjectPreview">
                                <img src="<?php the_field('footage_pic')?>" alt="">
                            </div>
                            <a href="<?php the_permalink()?>"><div class="ProjectButton">
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
	'category_name'    => 'footages_animation',
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
                                    <h2><?php the_field('footage_name')?></h2>
                            </div>
                            <div class="ProjectPreview">
                                <img src="<?php the_field('footage_pic')?>" alt="">
                            </div>
                            <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Скачать
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
	'category_name'    => 'footages-video-cards',
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
                                    <h2><?php the_field('footage_name')?></h2>
                            </div>
                            <div class="ProjectPreview">
                                <img src="<?php the_field('footage_pic')?>" alt="">
                            </div>
                            <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Скачать
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
	'category_name'    => 'footages_tik_tok',
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
                                    <h2><?php the_field('footage_name')?></h2>
                            </div>
                            <div class="ProjectPreview">
                                <img src="<?php the_field('footage_pic')?>" alt="">
                            </div>
                            <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Скачать
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
	'category_name'    => 'footages_poems',
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
                                    <h2><?php the_field('footage_name')?></h2>
                            </div>
                            <div class="ProjectPreview">
                                <img src="<?php the_field('footage_pic')?>" alt="">
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
	'category_name'    => 'footages_other',
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
                                    <h2><?php the_field('footage_name')?></h2>
                            </div>
                            <div class="ProjectPreview">
                                <img src="<?php the_field('footage_pic')?>" alt="">
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
	'category_name'    => 'child_footages',
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
                                    <h2><?php the_field('footage_name')?></h2>
                            </div>
                            <div class="ProjectPreview">
                                <img src="<?php the_field('footage_pic')?>" alt="">
                            </div>
                            <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Скачать
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
	'category_name'    => 'footages_wedding',
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
                                    <h2><?php the_field('footage_name')?></h2>
                            </div>
                            <div class="ProjectPreview">
                                <img src="<?php the_field('footage_pic')?>" alt="">
                            </div>
                            <a href="<?php the_permalink()?>"><div class="ProjectButton">
                            Скачать
                            </div></a>
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>   
                                
                            </div>               


                                
                                
                                
                                            
                                            
                                            
                                            
                </div>	                        
            </div> 
        </div> 
        <h1  class="heading-how-to">Оставьте <span> комментарий!</span> </h1>
        <div class="reviews-comments-wrapper"> 
            
<?php 

if ( is_user_logged_in() ) {
	echo 'Вы авторизованы на сайте!';
}
else {
	echo '<a href="https://videosdushoy.ru/wp-login.php?action=register" target="_parent" title="WordPress" class="anycomment-login-with-list-wordpress cl" rel="disallow"> <div class="mr-top-reg">Регистрация</div> <span title="WordPress" class="sc-AxjAm fxcduN"><svg width="30px" height="30px" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="20" height="20" rx="10" fill="#00A0D2"></rect><path d="M10 4.6875C11.0312 4.6875 12.0156 4.96875 12.9062 5.48438C13.7969 6 14.5 6.70312 15.0156 7.59375C15.5312 8.48438 15.8125 9.46875 15.8125 10.5C15.8125 11.5547 15.5312 12.5156 15.0156 13.4062C14.5 14.2969 13.7969 15.0234 12.9062 15.5391C12.0156 16.0547 11.0312 16.3125 10 16.3125C8.94531 16.3125 7.98438 16.0547 7.09375 15.5391C6.20312 15.0234 5.47656 14.2969 4.96094 13.4062C4.44531 12.5156 4.1875 11.5547 4.1875 10.5C4.1875 9.46875 4.44531 8.48438 4.96094 7.59375C5.47656 6.70312 6.20312 6 7.09375 5.48438C7.98438 4.96875 8.94531 4.6875 10 4.6875ZM4.77344 10.5C4.77344 11.5312 5.03125 12.4453 5.57031 13.2891C6.10938 14.1328 6.83594 14.7891 7.72656 15.2109L5.21875 8.36719C4.91406 9.04688 4.77344 9.75 4.77344 10.5ZM10 15.7266C10.5859 15.7266 11.1719 15.6328 11.7344 15.4219L11.6875 15.3516L10.0938 10.9453L8.52344 15.5156C8.99219 15.6562 9.48438 15.7266 10 15.7266ZM10.7266 8.03906L12.6016 13.6641L13.1641 11.8125C13.2812 11.3906 13.375 11.1094 13.4219 10.9219C13.4922 10.6641 13.5391 10.4297 13.5391 10.2422C13.5391 9.96094 13.4922 9.67969 13.3984 9.39844C13.3281 9.23438 13.2344 9.02344 13.0938 8.78906L13.0234 8.69531C12.8828 8.46094 12.7656 8.27344 12.7188 8.13281C12.625 7.94531 12.5781 7.75781 12.5781 7.57031C12.5781 7.33594 12.6484 7.10156 12.8359 6.91406C13 6.72656 13.2109 6.63281 13.4688 6.63281L13.5391 6.65625C13.0469 6.23438 12.5078 5.88281 11.8984 5.64844C11.2891 5.41406 10.6562 5.27344 10 5.27344C9.10938 5.27344 8.26562 5.48438 7.49219 5.90625C6.71875 6.32812 6.10938 6.91406 5.64062 7.61719L5.96875 7.64062C6.20312 7.64062 6.50781 7.64062 6.88281 7.59375L7.35156 7.57031C7.44531 7.57031 7.49219 7.61719 7.53906 7.66406C7.58594 7.73438 7.58594 7.80469 7.5625 7.875C7.53906 7.96875 7.49219 7.99219 7.39844 7.99219L6.78906 8.03906L8.71094 13.7109L9.83594 10.2891L9.03906 8.0625L8.47656 7.99219C8.38281 7.99219 8.33594 7.96875 8.3125 7.89844C8.26562 7.82812 8.26562 7.75781 8.3125 7.6875C8.35938 7.61719 8.42969 7.57031 8.52344 7.57031L9.01562 7.59375C9.39062 7.64062 9.67188 7.64062 9.90625 7.64062C10.1172 7.64062 10.4219 7.64062 10.7969 7.59375L11.2891 7.57031C11.3594 7.57031 11.4297 7.61719 11.4766 7.66406C11.5234 7.73438 11.5234 7.80469 11.5 7.875C11.4531 7.96875 11.4062 7.99219 11.3125 7.99219C11.1016 8.01562 10.9141 8.03906 10.7266 8.03906ZM12.625 15.0234C13.4219 14.5547 14.0547 13.9219 14.5234 13.125C14.9922 12.3281 15.2266 11.4609 15.2266 10.5C15.2266 9.60938 15.0156 8.78906 14.5938 7.99219C14.5938 8.17969 14.6172 8.34375 14.6172 8.53125C14.6172 9.11719 14.4766 9.75 14.2188 10.4062L12.625 15.0234Z" fill="#fff"></path></svg></span></a>' ;
}


?> 

        <?php echo do_shortcode("[anycomment ] ");  ?></div>
<script src="<?php echo get_template_directory_uri()?>/js/Tabs.js"></script>									
<?php
get_footer();