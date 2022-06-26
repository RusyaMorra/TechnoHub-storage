<?php
/**
 * Template Name: Страница статьи блога
 *Template Post Type:post,pages
**/
get_header();
?>

        <div class="BigArticle">
            <div class="Article_Logo">
                    <h2><?php the_field('article_logo')?></h2>
                </div>
                <div class="Article_Image">
                    <img src="<?php the_field('article_image')?>" alt="Картинка статьи">
                </div>
            <div class="Article_Text">
               <?php the_field('article_full_text')?>
            </div>
            <!-- uSocial -->
            <script async src="https://usocial.pro/usocial/usocial.js?uid=34e28b165df65768&v=6.1.5" data-script="usocial" charset="utf-8"></script>
                        <div  class="uSocial-Share" data-pid="10be96366b8d5ca1bb1da30f3b289e6a" data-type="share" data-options="round-rect,style1,default,absolute,horizontal,size48,eachCounter1,counter0,upArrow-left,nomobile,mobile_position_right" data-social="vi,wa,telegram,mail,tumblr,lj,twi,pinterest,ok,reddit,vk,lin,fb,spoiler,bookmarks,print,email"></div>
                        <!-- /uSocial -->
           <!-- <script src="https://yastatic.net/share2/share.js"></script>-->
            <div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="vkontakte,odnoklassniki,telegram,twitter,viber,whatsapp"></div>
        </div>


<?php
get_footer();