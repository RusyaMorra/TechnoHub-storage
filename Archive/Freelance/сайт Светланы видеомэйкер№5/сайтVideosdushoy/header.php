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
<html>
    <head>
        <meta charset="utf-8">
         <?php wp_head(); ?> 
        <script src="shou.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css"> 
        <script src="<?php echo get_template_directory_uri();?>/js/modernizr.js"></script> 
          <link media="screen" href="<?php echo get_template_directory_uri();?>/demo/styles/demo.css" type="text/css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/Home page.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/Gallery.css">
		        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/training.min.css">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


          <!-- слайд видео -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/videoslide.css">

          <!-- слайд видео -->
         
        <link rel="stylesheet" href="/Home2 page.css" type="text/css"/>
         
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/цветок.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,400;1,600&display=swap" rel="stylesheet"    >
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- Yandex.Metrika counter -->
          <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(87516187, "init", {
                  clickmap:true,
                  trackLinks:true,
                  accurateTrackBounce:true,
                  webvisor:true
            });
          </script>
          <noscript><div><img src="https://mc.yandex.ru/watch/87516187" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        
      
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
    <div class="social_media-fixed">
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
  <div class="AdressLogo">
                       <div class="pict-header" >
                        <a href="<?php echo get_site_url();?>"> <img src="<?php echo get_template_directory_uri();?>/img/cam.png" alt="123" width="250px"class="congratulate"></a>
                      </div>
        <div class="MenuAccordionButtons">
        <!--
                     <button class="accordion-menu">Меню</button> 
                    
         -->           
                  <?php $url = $_SERVER["REQUEST_URI"];?>
		  
		<?php 
		
         $urls = substr ($url, 1, 6); 
          $urls5 = substr ($url, -8);  
		 
		?>   
                  <div class="panel-menu-block">  
                    <div class="panel-menu">
                    
                    <ul>
                    
                    <li <?php if ($url == "/") {echo 'class="activ a"';}?>      ><a    href="/"  >Главная</a></li>
                    
                    
                    <li <?php if ($urls5 == "ll_poems") {echo 'class="activ a"';}?>  ><a href="<?php echo get_template_directory_uri();?>/all_poems">Стихи</a></li>       
                    
                    <li <?php if ($urls5 == "ur_works") {echo 'class="activ a"';}?>  ><a href="<?php echo get_template_directory_uri();?>/our_works">Наши работы</a></li>       
                                
                            <li <?php if ($urls5 == "t_videos") {echo 'class="activ a"';}?>  ><a href="<?php echo get_template_directory_uri();?>/project_videos">Проекты</a></li>         
                            
                            
							<li <?php if ($urls5 == "ject_gif") {echo 'class="activ a"';}?>  ><a href="<?php echo get_template_directory_uri();?>/video_templates">Слайд-шоу</a></li>   	
                    
                    <li <?php if ($urls5 == "training") {echo 'class="activ a"';}?>  ><a href="<?php echo get_template_directory_uri();?>/training">Обучение</a></li>   	
                    
                    
                    <li  <?php if (($urls5 == "ntact_us") || ($urls5 == "uestions") || ($urls5 == "services") || ($urls5 == "articles")){echo 'class="activ a"';}?>   >
                         <div class="dropdown "   id="onas"     >
                         <a   href="<?php echo get_template_directory_uri();?>/about_us">О нас</a>
                         <div class="dropdown-content" id="onas1"  >
                            <a style="background:white" class="get-it-white" href="<?php echo get_template_directory_uri();?>/answer_questions">Вопрос-ответ</a>
                            <a style="background:white" class="get-it-white" href="<?php echo get_template_directory_uri();?>/all_articles">Наш блог</a>
                            <a style="background:white" class="get-it-white" href="<?php echo get_template_directory_uri();?>/contacts">Контакты</a>
                            <a style="background:white" class="get-it-white" href="<?php echo get_template_directory_uri();?>/all_services">Цены</a>
                            
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
                      
              $(document).ready(function() {
	
  
	$(".menu-add1")
		.click (function() {
            
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
        
/* $(".panel-menu-block")
		.click (function() {
 $(".panel-menu-block").css({
               

                "position": "fixed",
                "width": "100%",
				"zIndex": "9900",
                //"top": "-190px",
            });
});
        */

/*
window.setTimeout(function() {
	document.querySelector('.preloader').classList.add("preloader-remove");
}, 2000);
 */

window.onload = function() {
  document.querySelector('.preloader').classList.add("preloader-remove");
  document.querySelector('.google-loader').classList.add("google-loader-remove");
}; 
                  
      
//const  onas = document.querySelector('#onas>a');
//const  onas1 = document.getElementById('onas1');

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
        
			
			/* $('.wrapper').css({
                
                "position": "relative",
                "top": "230px",
				
            });
			
			$('.vv-tel').css({
                
               "display": "block", 
				
            }); */
			
		
			
        }

        

        if ($(this).scrollTop() <= 182 && screen.width >= 700)  {
          
            $('.panel-menu-block').css({
                "position": "relative",
                "width": "100%",
                "background-color":	"rgba(0, 0, 0, 0.2)",
				"zIndex": "9900",
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
            
  let bg = document.querySelector('.pict-header');
window.addEventListener('mousemove', function(e) {
    let x = e.clientX / window.innerWidth;
    let y = e.clientY / window.innerHeight; 

 
    bg.style.transform = 'translate(-' + x * 100 + 'px, -' + y * 10 + 'px)';


});
  
            
            </script>
<!--						
                        <div class="Adress">
                            <div class="AdressItem"><Span class="AdressH">Еmail: </Span>pozdravit.krasivo@gmail.com</div>
                            <div class="AdressItem"><Span class="AdressH"><a href="https://invite.viber.com/?g2=AQB6lbXYP6Ovw02OEm3wBht4lvloEGzAdM%2FuGefUV1WZplEpSGqMYGnm%2FES815oO&lang=ru">Наша группа в viber</a></Span></div>
                        </div> 
-->
                    </div>

        <div class="AllContent">

        <div class="MainContent">


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