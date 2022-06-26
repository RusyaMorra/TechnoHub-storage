<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TestSite
 */



?>
<!DOCTYPE html>
<html lang="ru">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
       
         <?php wp_head(); ?> 
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css"> 
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/Gallery.css">
		    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/training.min.css">
        
         <!-- слайд видео -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/videoslide.css">
       
          <!-- слайд видео -->
          <script src="<?php echo get_template_directory_uri();?>/js/modernizr.js"></script> 
        <link rel="stylesheet" href="/Home2 page.css" type="text/css"/>
        
       
        <noscript class="loadLater">
       <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">-->
        <script src="<?php echo get_template_directory_uri();?>/js/scroll.js"></script>
       <!-- <script src="shou.js"></script>-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
          <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/цветок.jpg" type="image/x-icon">
        
          <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,400;1,600&display=swap" rel="stylesheet"    >

        
        </noscript> 

       

        <script >
        // Загрузить содержимое <noscript class="loadLater"></noscript>  после загрузки страницы
        document.addEventListener("DOMContentLoaded", function(event) {
            var loadLater = document.querySelector('.loadLater');
            var head = document.querySelector('head');
            if(loadLater && head){
                head.insertAdjacentHTML('beforeend', loadLater.innerHTML);
            }


            let bg = document.querySelector('.pict-header');
          window.addEventListener('mousemove', function(e) {
              let x = e.clientX / window.innerWidth;
              let y = e.clientY / window.innerHeight; 

          
              bg.style.transform = 'translate(-' + x * 100 + 'px, -' + y * 10 + 'px)';


          });
        });
       </script>
        <script src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.1.js"></script>
    </head>
    <body>
   <!-- <div class=" preloader"> 
      <div class="google-loader">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
      </div>
    </div>-->
 
  

  
    <div class="social_media-fixed  left-side-menu">
              <a href="https://vk.com/club185842468"></i><img src="<?php echo get_template_directory_uri();?>/img/VK.png" alt="" width=80%></a>
              <a href="https://www.youtube.com/channel/UCkhObP0P5sME1jO98yfHb7Q"></i><img src="<?php echo get_template_directory_uri();?>/img/YouTube.png" alt="" width=80%></a>
              <a href="https://t.me/VideoSdushoy"></i><img src="<?php echo get_template_directory_uri();?>/img/Telegramm.png" width=80%></a>
              <a href="https://ok.ru/profile/581418301875"></i><img src="<?php echo get_template_directory_uri();?>/img/Odnoklassniki.png" alt="" width=80%></a>
              <a href="https://invite.viber.com/?g2=AQB6lbXYP6Ovw02OEm3wBht4lvloEGzAdM%2FuGefUV1WZplEpSGqMYGnm%2FES815oO"></i><img src="<?php echo get_template_directory_uri();?>/img/viber.svg" width=80%></a>
              <a href="mailto:aleks099977@mail.ru"></i><img src="<?php echo get_template_directory_uri();?>/img/mailicon.png" width=80%></a>
              <a href="https://t.me/Video_s_Dushoy_bot"></i><img src="<?php echo get_template_directory_uri();?>/img/tgbot.png" width=100%></a>
              <a href="https://www.facebook.com/groups/3646455008698749 "></i><img src="<?php echo get_template_directory_uri();?>/img/facebook53612facebook231231.svg" width=100%></a>
    </div>




    
    <div class="menu-add1">
				<div><p>&ndash;</p><p>&ndash;</p><p>&ndash;</p></div>
			</div>
			<div class="menu-add2">
				<div><p>&times;</p></div>
			</div>
    <div id="gl" ></div>








    
    
<!--   
<div id="ScrollMenu" class="Scroll">
                                                    
            <div class="ServiceScrollLogo">
                <a class="ServiceScrollItem" href="">Главная</a>
                <a class="ServiceScrollItem" href="/about_us">О нас </a>
                <a class="ServiceScrollItem" href="/all_services">Услуги</a>
                <a class="ServiceScrollItem" href="/answer_questions">Частые вопросы</a>
                <a class="ServiceScrollItem" href="https://videosdushoy.ru/training">Обучение</a>
                <a class="ServiceScrollItem" href="https://videosdushoy.ru/contact_us">Сделать заказ</a>    
            </div>
	

        </div>
		
	-->	
  <div class="AdressLogo" >
                       <div class="pict-header" >
                        <a href="<?php echo get_site_url();?>"> <img src="https://videosdushoy.ru/wp-content/uploads/2022/04/inic01.png"" alt="123" width="150px"class="congratulate"></a>
                      </div>


            <div class="social_media-fixed top-menu">
              <a class = "item-soc-1" href="https://vk.com/club185842468"></i><img src="<?php echo get_template_directory_uri();?>/img/VK.png" alt="" width=80%></a>
              <a class = "item-soc-2" href="https://www.youtube.com/channel/UCkhObP0P5sME1jO98yfHb7Q"></i><img src="<?php echo get_template_directory_uri();?>/img/YouTube.png" alt="" width=80%></a>
              <a class = "item-soc-3" href="https://t.me/VideoSdushoy"></i><img src="<?php echo get_template_directory_uri();?>/img/Telegramm.png" width=80%></a>
              <a class = "item-soc-4" href="https://ok.ru/profile/581418301875"></i><img src="<?php echo get_template_directory_uri();?>/img/Odnoklassniki.png" alt="" width=80%></a>
              <a class = "item-soc-5" href="https://invite.viber.com/?g2=AQB6lbXYP6Ovw02OEm3wBht4lvloEGzAdM%2FuGefUV1WZplEpSGqMYGnm%2FES815oO"></i><img src="<?php echo get_template_directory_uri();?>/img/viber.svg" width=80%></a>
              <a class = "item-soc-6" href="mailto:aleks099977@mail.ru"></i><img src="<?php echo get_template_directory_uri();?>/img/mailicon.png" width=80%></a>
              <a class = "item-soc-7" href="https://t.me/Video_s_Dushoy_bot"></i><img src="<?php echo get_template_directory_uri();?>/img/tgbot.png" width=100%></a>
              <a class = "item-soc-8" href="https://www.facebook.com/groups/3646455008698749 "></i><img src="<?php echo get_template_directory_uri();?>/img/facebook53612facebook231231.svg" width=100%></a>
            </div>



        <div class="MenuAccordionButtons">
        <!--
                     <button class="accordion-menu">Меню</button> 
                    
         -->           
                  <?php  $url = $_SERVER["REQUEST_URI"];?>
		                    
		<?php 
		    
         
        $urls5 = substr($url,0,strlen($url)-1);
          
		?>   
                  <div class="panel-menu-block">  
                    <div class="panel-menu">
                    
                    <ul>
                    
                    <li <?php if ($url == "/") {echo 'class="activ a"';}?>      ><a    href="/"  >Главная</a></li>
                    <li <?php if ($urls5 =="/all_poems") {echo 'class="activ a"';}?>  ><a href="/all_poems">Стихи</a></li>       
                    <li <?php if ($urls5 == "/our_works") {echo 'class="activ a"';}?>  ><a href="/our_works">Наши работы</a></li>       
                    <li <?php if ($urls5 == "/project_videos") {echo 'class="activ a"';}?>  ><a href="/project_videos">Проекты</a></li>         
                    <li <?php if ($urls5 == "/video_templates") {echo 'class="activ a"';}?>  ><a href="/video_templates">Слайд-шоу</a></li>   	
                    <li <?php if ($urls5 == "/training") {echo 'class="activ a"';}?>  ><a href="/training">Обучение</a></li>   	
                    <li  <?php if (($urls5 == "/answer_questions") || ($urls5 == "/blog") || ($urls5 == "/contacts") || ($urls5 == "/all_services")|| ($urls5 == "/all_reviews")|| ($urls5 == "/footages")|| ($urls5 == "/about_us")){echo 'class="activ a"';}?>   >
                      <div class="dropdown "   id="onas"     >
                         <a   href="#">дополнительно</a>
                         <div class="dropdown-content" id="onas1"  >
                            <a style="background:white" class="get-it-white" href="/answer_questions">Вопрос-ответ</a>
                            <a style="background:white" class="get-it-white" href="/blog">Наш блог</a>
                            <a style="background:white" class="get-it-white" href="/contacts">Контакты</a>
                            <a style="background:white" class="get-it-white" href="/all_services">Цены</a>
                            <a style="background:white" class="get-it-white" href="/all_reviews">Отзывы</a>
                            <a style="background:white" class="get-it-white" href="/footages">Футажи</a>
                            <a style="background:white" class="get-it-white" href="/about_us">О нас</a>
                            
                          </div>
                      </div>
                    </li>       <!--   
                                 <a href="/about_us">О Нас</a> 
                               
                                <a href="/our_works">Наши работы</a>
                                <a href="/project_videos">Проекты</a>
                                <a href="/all_poems">Стихи</a>
                                <a href="/training">Обучение</a>
                                <!--
                                 <a href="https://videosdushoy.ru/all_services">Цены</a> 
                               
                                <a href="https://videosdushoy.ru/answer_questions">Вопрос-Ответ</a>
                                
                                <a href="https://videosdushoy.ru/all_reviews">Отзывы</a>
                                <a href="https://videosdushoy.ru/contact_us">Контакты</a>
                                <a href="https://videosdushoy.ru/all_articles">Наш блог</a>
                                -->
                          
                              
                               
                     </ul>           
                    </div></div></div>
                    
             <a class=" vv" href="#gl" title="To Top"> </a>       
                    




<script>
  window.onload = function() {
  document.querySelector('.preloader').classList.add("preloader-remove");
  document.querySelector('.google-loader').classList.add("google-loader-remove");
}; 
                  
      


onas1.addEventListener("mouseover", function() {onas.style.color = 'white'; });
onas.addEventListener("mouseover", function() {onas.style.color = 'white'; });
onas1.addEventListener("mouseleave", function() {onas.style.color = 'black'; });
onas.addEventListener("mouseleave", function() {onas.style.color = 'black'; });


       var flag=0;
$('#onas').mousemove(function(){
    
    
	 if (flag==0){
	
	         		
			$("#onas1.dropdown-content")
				.animate({width: "show"}, 500);	
            flag=1;
				
		         }

});                       
   
var flag2;
 if(document.documentElement.clientWidth > 700) {
   
    $(window).scroll(function(){
	
        if ($(this).scrollTop() > 190 && screen.width >= 700) {
          flag2=1;
            $('.panel-menu-block').css({
               
                
                "position": "fixed",
                "width": "100%",
                "background-color":	"rgba(0, 0, 0, 0.5)",
                
				        "zIndex": "9900",
                "top": "0px",
                
            });
            $('.panel-menu>ul>li>a').css({
               
                "color": 'white ',
                
                
            });
            $('.dropdown>a ').css({
               
                "color": 'white ',
                
                
            });
        
			
	
		
			
        }

        

        if ($(this).scrollTop() <= 182 && screen.width >= 700)  {
          
            $('.panel-menu-block').css({
                "position": "relative",
                "width": "100%",
                "background-color":	"rgba(0, 0, 0, 0.2)",
				"zIndex": "900",
                "top": "0px",
                "left": "0px",
            });
            $('.panel-menu>ul>li>a').css({
              
               "color": 'white ',
             
               
           });
           $('.dropdown>a ').css({
               
               "color": 'white',
               
               
           });
       


           
			
			/* $('.wrapper').css({
                
                "position": "relative",
                "top": "0px",
				"left": "0px",
            });
			
			$('.vv-tel').css({
                
               "display": "block", 
				
            }); */
			
        }
    })
  
}


   
                   
           /*  var acc = document.getElementsByClassName("accordion-menu");
            var i;
            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                } 
              });
            } */
            
           $(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $("  a[href='#gl']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
}) 
       



  
            
            </script>
<!--						
                        <div class="Adress">
                            <div class="AdressItem"><Span class="AdressH">Еmail: </Span>pozdravit.krasivo@gmail.com</div>
                            <div class="AdressItem"><Span class="AdressH"><a href="https://invite.viber.com/?g2=AQB6lbXYP6Ovw02OEm3wBht4lvloEGzAdM%2FuGefUV1WZplEpSGqMYGnm%2FES815oO&lang=ru">Наша группа в viber</a></Span></div>
                        </div> 
-->
                    </div>



















        <div class="AllContent">

        <div class="MainContent pd-off">


                <div class="LOGO" >
                    
  
       
  <!--     
                    <div class="HeaderContent">
                        <div class="Service">
                                  
                        <div class="HeaderForm">
                        <div class="HeaderFormText">Оставьте заявку для получения 50% скидки на 1й заказ</div>                        
                        <input type="text" name="text" placeholder="Ваше имя">
                        <input type="email" name="email" placeholder="Ваш Email">
                        <input type="text" name="text" placeholder="Ваш телефон">
                        <input class="SubmitButton" type="submit" placeholder="Отправить" >
                        </div>  


                            <div class="ServiceLogo">
                                <a href="/about_us">О Нас</a>
                                <a href="/our_works">Наши работы</a>
                                <a href="/project_videos">Проекты</a>
                                <a href="https://videosdushoy.ru/all_poems">Стихи</a>
                                <a href="https://videosdushoy.ru/training">Обучение</a>
                                <a href="https://videosdushoy.ru/all_services">Цены</a>
                                <a href="https://videosdushoy.ru/answer_questions">Вопрос-Ответ</a>
                                <a href="https://videosdushoy.ru/all_reviews">Отзывы</a>
                                <a href="https://videosdushoy.ru/contact_us">Контакты</a>
                                <a href="https://videosdushoy.ru/all_articles">Блог</a>
                                <a href="https://videosdushoy.ru/gallery">Галерея</a>
								<a href="https://videosdushoy.ru/footages">Футажи</a>
                                    
                            </div>

                        </div>
						
                </div>
                -->
               
<input type="checkbox" id="side-checkbox" />
<div class="side-panel">
    <label class="side-button-2" for="side-checkbox">+</label>  

   
		<?php 
			require $_SERVER['DOCUMENT_ROOT']."/wp-content/themes/pozdravitkrasivo/blocks/section_calc.php";
		?>		
		
		
      
     <!--   
        
      <div class="side-title">Выдвижная панель:</div>
    <p>Информация в панеле</p> 
    
    -->
</div> 

    <label  for="side-checkbox">
        
        <div class="btn-zakazat  bok2  side-open" >
       
        Рассчитать цену видео
       </div>
                      
    </label>

        <?php 
			require $_SERVER['DOCUMENT_ROOT']."/wp-content/themes/pozdravitkrasivo/blocks/block_modal.php";
		?>	

               
            </header>		