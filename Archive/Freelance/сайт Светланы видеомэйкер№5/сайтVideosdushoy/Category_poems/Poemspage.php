<?php
/**
 * Template Name: Страница со стихами
 *
**/
get_header();
?>

                <div class="BlocksLogo">
                    <h1><?php the_field('title-h1')?></h1>
                </div>
                
                 <div class="container-text-gl">

                      <div class="text-gl">
                            <h2><?php the_field('title-h2')?></h2>
                            <!--
                            <img class="training-central__img" src="" alt="slide">
                            -->
                            <div class="AboutUsPic-2">
                        <img src="<?php the_field('img')?>" alt="">
                    </div>
                            
							<p><?php the_field('text')?></p>
							
                        </div>

                 </div>



                <div class="BlocksLogo">
                    <p>Стихи для всех случаев жизни<p>
                </div>
                
                
                
                <div class="PoemsPage">
					  <div class="tabs__nav tabs-nav">
                            <div class="tabs-nav__item is-active" data-tab-name="tab-1">Самые популярные</div>
                            <div class="tabs-nav__item" data-tab-name="tab-2">Мужчинам</div>
                            <div class="tabs-nav__item" data-tab-name="tab-3">Женщинам</div>
                            <div class="tabs-nav__item" data-tab-name="tab-4">Девушкам</div>
                            <div class="tabs-nav__item" data-tab-name="tab-5"> Сестре</div>
                            <div class="tabs-nav__item" data-tab-name="tab-6">Брату</div>
							<div class="tabs-nav__item" data-tab-name="tab-7"> Мужу</div>
							<div class="tabs-nav__item" data-tab-name="tab-8">Жене</div>
							<div class="tabs-nav__item" data-tab-name="tab-9">Сыну</div>
						  <div class="tabs-nav__item" data-tab-name="tab-10">Дочери</div>
						  <div class="tabs-nav__item" data-tab-name="tab-11">Папе</div>
						  <div class="tabs-nav__item" data-tab-name="tab-12">Маме</div>
						  <div class="tabs-nav__item" data-tab-name="tab-13">Подруге</div>
						  <div class="tabs-nav__item" data-tab-name="tab-14">Другу</div>
						  <div class="tabs-nav__item" data-tab-name="tab-15">Разные</div>
                        </div>
					
					
                    </div>
						<div class="tabs__content">
						<div class="tab is-active tab-1"> 
                          
	<?php 
// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
	'category_name'    => 'poems',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?></div>
                            <div class="PoemRepostIcons">
                                <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>              

                         </div> </div> 
							
						
						
						
						
						
						
						
						
						
						
						
						
						<div class="tab tab-2"> 
                          
	<?php 
// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
	'category_name'    => 'man',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                               <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
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
    'numberposts' => -1,
	'category_name'    => 'woman',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                               <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
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
    'numberposts' => -1,
	'category_name'    => 'girlfriend',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                             <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
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
    'numberposts' => -1,
	'category_name'    => 'sister',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                                <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
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
    'numberposts' => -1,
	'category_name'    => 'brother',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                               <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
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
    'numberposts' => -1,
	'category_name'    => 'husband',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                              <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
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
    'numberposts' => -1,
	'category_name'    => 'wife',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                              <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
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
    'numberposts' => -1,
	'category_name'    => 'son',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                                <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
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
    'numberposts' => -1,
	'category_name'    => 'daughter',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                               <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>              

                         </div> 
						
						
						
						<div class="tab tab-11"> 
                          
	<?php 
// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
	'category_name'    => 'father',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                             <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>              

                         </div> 
						
						
						
						
						<div class="tab tab-12"> 
                          
	<?php 
// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
	'category_name'    => 'mother',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                               <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>              

                         </div> 
						
						
						
						<div class="tab tab-13"> 
                          
	<?php 
// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
	'category_name'    => 'girl_friend',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                              <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>              

                         </div> 
						
						
						
						<div class="tab tab-14"> 
                          
	<?php 
// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
	'category_name'    => 'friend',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
                               <script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>              

                         </div> 
						
						
						
						<div class="tab tab-15"> 
                          
	<?php 
// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
	'category_name'    => 'other',
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
                         <div class="Poem">
                            <div class="PoemLogo"><h2><?php the_field('poem_head')?></h2></div>
                            <div class="PoemText"><?php the_field('poem_page')?>
                            </div>
                            <div class="PoemRepostIcons">
<script src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2"  data-title="<?php the_field('poem_head')?>" data-size="m"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
                            </div>
                            
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>              

                         </div> 
						

                          
                    </div>      
	  
	  
<script src="<?php echo get_template_directory_uri()?>/js/Tabs.js"></script>
<?php
get_footer();