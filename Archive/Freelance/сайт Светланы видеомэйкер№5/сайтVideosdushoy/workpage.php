<?php
/**
 * Template Name: Работа в портфолио
 *Template Post Type:post,pages
**/
get_header();
?>

<div class="BlocksLogo">
                    <h1><?php the_field('work_logo')?><h1>
                </div>
                <div class="ProjectContainer">
                        <div class="ProjectVideo">
                            <iframe width="1280" height="720" src="<?php the_field('work_href')?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe>
                        </div>
						<!-- uSocial -->
                        <script async src="https://usocial.pro/usocial/usocial.js?uid=34e28b165df65768&v=6.1.5" data-script="usocial" charset="utf-8"></script>
                        <div  class="uSocial-Share" data-pid="10be96366b8d5ca1bb1da30f3b289e6a" data-type="share" data-options="round-rect,style1,default,absolute,horizontal,size48,eachCounter1,counter0,upArrow-left,nomobile,mobile_position_right" data-social="vi,wa,telegram,mail,tumblr,lj,twi,pinterest,ok,reddit,vk,lin,fb,spoiler,bookmarks,print,email"></div>
                        <!-- /uSocial -->
					<div class="ya-share2"  data-title="<?php the_field('work_logo')?>" data-size="m" data-image="<?php the_field('work_image')?>"   data-curtain data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>

                   
                     <p class="work-page-description"><?php the_field('work_description') ?></p>


                     <div class="BlocksLogo ">
                        <p>Вы можете заказать у нас, используйте Калькулятор расчета!</p>
                    </div>
                    <a href="#iw-modal"><div class="ProjectButton change-proj-button">Заказать</div></a>
                   <div class="change-proj-button2">Для расчета цены кликните по вкладке на левой части экрана </div>

                </div>	
	



<?php
get_footer();