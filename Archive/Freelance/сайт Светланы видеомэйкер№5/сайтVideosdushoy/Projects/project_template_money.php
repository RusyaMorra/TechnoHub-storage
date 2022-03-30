<?php
/**
 * Template Name: Платный проект
 *Template Post Type:post,pages
**/
get_header();
?>

	<div class="BlocksLogo">
                    <h1><?php the_field('project_head')?><h1>
                </div>
                <div class="ProjectContainer">
                        <div class="ProjectVideo">
                            <iframe width="1280" height="720" src="<?php the_field('project_video')?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 																				encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="ProjectBigButton">
                            <?php the_field('project_price')?> &#x20bd;
                        </div>
										<div class="ProjectText">
												<?php the_field('project_full_text')?>
                        </div>
<!--	
<div class="ServiceContainerButton beg "  style="margin: 10% auto 0 auto;" >
       
       <a href="#iw-modal"  style="  text-decoration:none">Заказать услугу</a>
       <br>
	   </div>
   --> 
                    
                        <a href="#iw-modal" id=""><div class="ProjectBigButtonBuy">
                            Приобрести
                        </div></a>
                     
                     
					<!-- uSocial -->
          <script async src="https://usocial.pro/usocial/usocial.js?uid=34e28b165df65768&v=6.1.5" data-script="usocial" charset="utf-8"></script>
                        <div  class="uSocial-Share" data-pid="10be96366b8d5ca1bb1da30f3b289e6a" data-type="share" data-options="round-rect,style1,default,absolute,horizontal,size48,eachCounter1,counter0,upArrow-left,nomobile,mobile_position_right" data-social="vi,wa,telegram,mail,tumblr,lj,twi,pinterest,ok,reddit,vk,lin,fb,spoiler,bookmarks,print,email"></div>
                        <!-- /uSocial -->
					<div class="ya-share2"  data-title="<?php the_field('project_head')?>" data-size="m" data-image="<?php the_field('project_image')?>"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>

                </div>						
<!--
<div id="PopUp" class="PopUp">
                    <div id="PopUpContaine" class="PopUpContainer">
                      <div id="PopUpBody" class="PopUpBody">
                                      
                        <div class="ContactForm"> 
                          <div id="PopUpClose" class="PopUpClose">&#10006</div>                    
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