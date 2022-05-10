<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TestSite
 */

?>

</div> 



          




<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>-->
<script src="<?php echo get_template_directory_uri();?>/js/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider-min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/MainPageSlider.js"></script>

 <!--библиотека-->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
      AOS.init();
</script>

<!-- слайд видео -->
<script src ="<?php echo get_template_directory_uri();?>/js/slick.min.js"></script>
<script src ="<?php echo get_template_directory_uri();?>/js/pluginConfig.js"></script>

<!-- слайд видео -->


        
<script>

$(document).ready(function() {
	
  
	$(".menu-add1").click (function() {
             console.log(34324);
			$(".panel-menu ul")
				.animate({width: "show"}, 500);				
				//.slideDown(500); 
				//.fadeIn(500);
			$(".menu-add1")
				.css("z-index", "11");			
			$(".menu-add2")
				.css("z-index", "12");
           

				
		});	
	$(".menu-add2")
		.click (function() {
					
			$(".panel-menu ul")
				.animate({width: "hide"}, 500);			
				//.slideUp(500); 
				//.fadeOut(500);						
			$(".menu-add1")
				.css("z-index", "12");			
			$(".menu-add2")
				.css("z-index", "11");								
		});	
});          


</script>
        


        </div> </div>
        
        
        <footer class="footer-distributed">

        <div class="part-footer-left">
            <div class="footer-left nv-line-row">
      
              <p class="footer-links">
                <h2 class="link-1" href="#">Навигация</h2>
      
                <a href="<?php echo get_site_url();?>">Главная</a>
      
                <a href="/all_poems?>">Стихи</a>

                <a href="/our_works">Наши работы</a>

                <a href="/video_templates">Слайд шоу</a>
      
               <a href="/project_videos">Проекты</a>

               <a href="/training">Обучение</a>
      
                <a href="/about_us">О нас</a>
    
              </p>
      
            </div>
                  
            <div class="footer-left inf-line-column">
      
                <p class="footer-links">
                  <h2 class="link-1" href="/contacts">Дополнительная информация</h2>
        
                  <a href="/training">Учимся создавать видео из фото</a>
        
                  <a href="/answer_questions">Ответы на часто задаваемые вопросы</a>
        
                  <a href="https://videosdushoy.ru/%d1%81%d1%82%d1%80%d0%b0%d0%bd%d0%b8%d1%86%d0%b0-%d1%81-%d0%be%d1%82%d0%b7%d1%8b%d0%b2%d0%b0%d0%bc%d0%b8/">Ваши отзывы</a>
        
                  <a href="/contacts">Партнерам</a>
        
                  <a href="https://invite.viber.com/?g2=AQB6lbXYP6Ovw02OEm3wBht4lvloEGzAdM%2FuGefUV1WZplEpSGqMYGnm%2FES815oO&lang=ru">Наша группа в <span style="font-weight: bold;"> viber</span></a>
  
  
                </p>
        
              </div>
              </div> 
      <div class="part-footer-rigth">
      <div class="footer-right">
                
      
          
    <div class="FooterRightIconsLogo"><h2>Мы в социальных сетях</h2></div>
    <div class="FooterRightIcons">
        <a href="https://vk.com/club185842468"></i><img src="<?php echo get_template_directory_uri();?>/img/VK.png" alt="" width=80%></a>
              <a href="https://www.youtube.com/channel/UCkhObP0P5sME1jO98yfHb7Q"></i><img src="<?php echo get_template_directory_uri();?>/img/YouTube.png" alt="" width=80%></a>
              <a href="https://t.me/VideoSdushoy"></i><img src="<?php echo get_template_directory_uri();?>/img/Telegramm.png" width=80%></a>
              <a href="https://ok.ru/profile/581418301875"></i><img src="<?php echo get_template_directory_uri();?>/img/Odnoklassniki.png" alt="" width=80%></a></div>
              <a href="https://invite.viber.com/?g2=AQB6lbXYP6Ovw02OEm3wBht4lvloEGzAdM%2FuGefUV1WZplEpSGqMYGnm%2FES815oO"></i><img src="<?php echo get_template_directory_uri();?>/img/viber.svg" width=80%></a>
              <a href="mailto:aleks099977@mail.ru"></i><img src="<?php echo get_template_directory_uri();?>/img/mailicon.png" width=80%></a>
              <a href="https://t.me/Video_s_Dushoy_bot"></i><img src="<?php echo get_template_directory_uri();?>/img/tgbot.png" width=100%></a>
              <a href="https://www.facebook.com/groups/3646455008698749 "></i><img src="<?php echo get_template_directory_uri();?>/img/facebook53612facebook231231.svg" width=80%></a>

            </div>


            <div class="footer-right">
                
      
          
                <div class="FooterRightIconsLogo"><h2>Способы оплаты</h2></div>
                <div class="FooterRightIcons">
                    <a href="#"></i><img src="<?php echo get_template_directory_uri();?>/img/Visa.png" alt="" width=80%></a>
                          <a href="#"></i><img src="<?php echo get_template_directory_uri();?>/img/Mastercard.png" alt="" width=80%></a>
                          <a href="#"></i><img src="<?php echo get_template_directory_uri();?>/img/Yandex.png" alt="" width=80%></a>
                          <a href="#"></i><img src="<?php echo get_template_directory_uri();?>/img/Webmoney.png" alt="" width=80%></a>
                          <a href="#"></i><img style="width: 120px; height: 50px;" src="<?php echo get_template_directory_uri();?>/img/Qiwi.png" alt="" width=100%></a>
                        </div>
                          
                  
                        </div>
            </div>

     
          </footer>
          <?php wp_footer();?>



         
          
    <!-- Yandex.Metrika counter -->
    <script async >


          var fired = false;

          window.addEventListener('scroll', () => {
           

              if (fired === false) {
                  fired = true;
                  
                  setTimeout(() => {
                  
                    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                    ym(87516187, "init", {
                          clickmap:true,
                          trackLinks:true,
                          accurateTrackBounce:true,
                          webvisor:true
                    });
                  }, 1000)
              }
          });

       
                  </script>
           <noscript><div><img src="https://mc.yandex.ru/watch/87516187" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
            
            <script src="//code.jivosite.com/widget/fDqeu0LlY6" async></script>



    </body>
</html>