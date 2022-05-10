<?php
/**
 * Template Name: Шаблоны для видео
 *
**/
get_header();
?>



                <div class="BlocksLogo">
                    <h1>Шаблоны для своего видео<h1>
                </div>




               <div class="slide-card-img_wrapper"> <img class= "slide-card-img" src="<?php echo get_template_directory_uri();?>/img/videoslide/slidephoto.png" alt=""></div>

<div class="PoemsPage">
                    <div class="Category_Content">
                        <!--<a href="http://wordpress/работы-учеников/" class=""><div class="Category_Item">Посмотреть все</div></a>-->
                        <a href="http://wordpress/юбилей-и-день-рождения-ученики/" class=""><div class="Category_Item">Юбилей и День рождения</div></a>
                        <a href="http://wordpress/видео-в-память-ученики/" class=""><div class="Category_Item">Видео в память</div></a>
                        <a href="http://wordpress/свадебные-видео-ученики/" class=""><div class="Category_Item">Свадебные видео</div></a>
                        <a href="http://wordpress/детские-видеопоздравления-ученики/" class=""><div class="Category_Item">Детские видеопоздравления</div></a>
                       <!-- <a href="http://wordpress/разное-ученики/" class=""><div class="Category_Item">Разное</div></a>-->
                    </div>
        <div class="Works">

        <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'our_works_studens',
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

                     
    
                        <div class="containerslide">
       <!-- <form action="" id="add-tamplate" class="add-tamplate">
            <input type="text" class="img-cover">
            <input type="file" accept=".jpg,.jpeg,.png">
            <button type="submit">отправить</button>
        </form>-->
        <main class="panel111" id="1" data-type-categoty="Memory">
            <div class="slider-area">
                <p class="slider-text">Видео клипы из ваших фото! Сделай сам, всё просто и быстро! Выберите нужный видео шаблон</p>
                <div class="slider-wrapper">
                    <div class="slider">
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/qQGYeFIWs4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/CL1LH-BO5Q4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/qQGYeFIWs4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/qQGYeFIWs4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/qQGYeFIWs4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/qQGYeFIWs4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/qQGYeFIWs4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/qQGYeFIWs4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/qQGYeFIWs4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/qQGYeFIWs4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div id="item"><iframe class="sl-iframe" width="1132" height="94.7%" src="https://www.youtube.com/embed/qQGYeFIWs4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

                    </div>
                </div>
            </div>
            <div class="edit">
                <p class="slider-text">Инструкция <img src="<?php echo get_template_directory_uri();?>/img/videoslide/helpinfo_104306.svg" class="help-img"   alt=""></p>
                <div class="edit-wrapper">
                    <form action="" class="form-edit">
                        <div class="edit-inputs">
                            <div class="input-wpapper">
                                <input type="text" placeholder="Введите текст к видео">
                            </div>
                            <div class="files-block">
                                <div class="upload-photo">
                                    <input name="file" type="file"  id="input__file" class="input input__file"  multiple >
                                    <label for="input__file" class="input__file-button"  >
                                        <span class="input__file-icon-wrapper"><img src="<?php echo get_template_directory_uri();?>/img/videoslide/icons8-компактная-камера-24.png" class="img-btn-camera" alt=""></span>
                                        <span class="input__file-button-text">Выберите мин 3 фото</span>
                                     </label>
                                    <p class="result-massage">Вы можете загрузить: Min - 3. Max - 30 фотографий</p>
                                </div>
                                <div class="upload-music">
                                    <input type="file" class="audio-btn-input" accept=".mp3, .wav">
                                    <button class="music-btn"><img src="<?php echo get_template_directory_uri();?>/img/videoslide/music.png" class="img-btn-icons" alt=""> Вы можете добавить свою музыку</button>
                                    <p class="result-massage-audio">Прикрепите mp3 формат</p>
                                </div>
                                <div class="upload-music-collection">
                                    <input type="file" class="audio-btn-input" accept=".mp3, .wav" >
                                    <button class="music-btn-col"><img src="<?php echo get_template_directory_uri();?>/img/videoslide/burger.png" class="img-btn-icons" alt="">Выбрать музыку из коллекции</button>
                                    <p class="result-massage-audio">выберайте</p>
                                </div>
                            </div>
                        </div>
                        <button class="res-btn" type="submit"><img src="<?php echo get_template_directory_uri();?>/img/videoslide/icons8-приблизить-50.png" class="img-btn-icons" alt="">Посмотреть результат</button> 
                    </form>
                </div>
            </div>
        </main>
    </div>
    </div>




<?php get_footer();?>