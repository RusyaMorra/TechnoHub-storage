<?php
/**
 * Template Name: Страница с услугой
 *Template Post Type:post,pages
**/
get_header();
?>






<div class="ServiceContainer serv-container-heigth">
                    <div class="ServiceContainerLogo"><h2><?php
the_field('service_name') ?></h2></div>
                    <div class="ServiceContainerPhoto" id="PhotoService"><img src="<?php
the_field('service_img') ?>" alt=""></div>  
                    <div class="ServiceContainerDescription"><div class="ServiceContainerText" id="textService"><?php
the_field('service_text') ?></div>



<div class="ServiceContainerButton beg "  style="margin: 10% auto 0 auto;" >
       
       <a href="#iw-modal"  style="  text-decoration:none">Заказать услугу</a>
       <br>
	   </div>
 
<!--
<a href="#" id="OpenPopUp"><div class="ServiceContainerButton" > Заказать услугу</div></a> 
-->
 </div>




                    <div class="ServiceContainerElements">
                        <div class="ServiceContainerElement"></div>
                        <div class="ServiceContainerElement"></div>
                    </div>
    <div class="BlocksLogo put-it-down">
         <p>Примеры наших работы</p>
    </div>
    <div class="work-examples-offer-section">
            <?php 
        // параметры по умолчанию
        $my_posts = get_posts( array(
          'posts_per_page' => 9,
          'category_name'    => 'our_works',
          'numberposts' => -1,
          'orderby'     => 'rand',
          'include'     => array(),
          'exclude'     => array(),
          'meta_key'    => '',
          'meta_value'  =>'',
          'limit' => 5,
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


<!--
                 <div id="PopUp" class="PopUp">
                    <div id="PopUpContaine" class="PopUpContainer">
                      <div id="PopUpBody" class="PopUpBody">
                                      
                        <div class="ContactForm"> 
                        
                          <div id="PopUpClose" class="PopUpClose" >&#10006</div>                    
                          <input type="text" name="text" placeholder="Ваше имя">
                          <input type="email" name="email" placeholder="Ваш Email">
                          <input type="text" name="text" placeholder="Ваш телефон">
                          <input class="SubmitButton" type="submit" placeholder="Отправить" >
                          <textarea name="message" placeholder="Ваше сообщение:"></textarea>
                          
                      
                      </div>
                  
                  
                      </div>
                    </div>
                  </div> 
       -->           
                  
                  <script src="<?php
echo get_template_directory_uri();
?>/js/PopUp.js"></script>


<?php
get_footer();