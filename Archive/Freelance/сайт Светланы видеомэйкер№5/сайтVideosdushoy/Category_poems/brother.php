<?php
/**
 * Template Name: Брату
 *
**/
get_header();
?>
  <div class="BlocksLogo">
                    <h1>Стихи для всех случаев жизни<h1>
                </div>
                <div class="PoemsPage">
<div class="Category_Content" id="PoemsSidebar">
                        <a href="https://videosdushoy.ru/самые-популярные/" class=""><div class="Category_Item">Самые популярные</div></a>
                        <a href="https://videosdushoy.ru/мужчинам/" class=""><div class="Category_Item">Мужчинам</div></a>
                        <a href="https://videosdushoy.ru/женщинам/" class=""><div class="Category_Item">Женщинам</div></a>
                        <a href="https://videosdushoy.ru/девушкам/" class=""><div class="Category_Item">Девушкам</div></a>
                        <a href="https://videosdushoy.ru/сестре/" class=""><div class="Category_Item">Сестре</div></a>
                        <a href="https://videosdushoy.ru/брату/" class=""><div class="Category_Item">Брату</div></a>
                        <a href="https://videosdushoy.ru/мужу/" class=""><div class="Category_Item">Мужу</div></a>
                        <a href="https://videosdushoy.ru/жене/" class=""><div class="Category_Item">Жене</div></a>
                        <a href="https://videosdushoy.ru/сыну/" class=""><div class="Category_Item">Сыну</div></a>
                        <a href="https://videosdushoy.ru/дочери/" class=""><div class="Category_Item">Дочери</div></a>
                        <a href="https://videosdushoy.ru/папе/" class=""><div class="Category_Item">Папе</div></a>
                        <a href="https://videosdushoy.ru/маме/" class=""><div class="Category_Item">Маме</div></a>
                        <a href="https://videosdushoy.ru/зятю/" class=""><div class="Category_Item">Зятю</div></a>
                        <a href="https://videosdushoy.ru/подруге/" class=""><div class="Category_Item">Подруге</div></a>
                        <a href="https://videosdushoy.ru/другу/" class=""><div class="Category_Item">Другу</div></a>
                        <a href="https://videosdushoy.ru/разные-стихи/" class=""><div class="Category_Item">Разные</div></a>
                    </div>
                    <div class="Poems">


                    <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => 10,
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
                            <div class="PoemText"><pre><?php the_field('poem_page')?></pre>
                            </div>
                            <div class="PoemRepostIcons">
                                <script src="https://yastatic.net/share2/share.js"></script>
                                <div class="ya-share2" data-curtain data-size="l" data-services="messenger,vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp"></div>
                            </div>
                            
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>                         
                    </div>            
               </div>

<?php
get_footer();