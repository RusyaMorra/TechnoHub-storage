<?php
/**
 * Template Name: Главная страница
 */

get_header();


?>

<style>
    .slick-prev{
    width: 50px;
    height: 50px;
    border-radius:50px;
    font-size:0px;
    padding: 0px;
    position: absolute;
    left:0px;
    top: 50%;
    z-index: 100;
    background-image: url(/wp-content/themes/pozdravitkrasivo/img/arrowicon.png);
    background-size: cover;
    transform: rotate(180deg);
    }
    .slick-next{
     top: 50%;   
    width: 50px;
    height: 50px;
    border-radius:50px;
    font-size:0px;
    padding: 0px;
    position: absolute;
    right: 0px;
    background-size: cover;
    background-image: url(/wp-content/themes/pozdravitkrasivo/img/arrowicon.png);
    }
   .Productsingle{
      width: 300px;
      height: 250px;
      border-radius: 10px;
      margin-left: 30px;
      margin-right: 30px;
      border: 2px solid #FF8A00;
      display: flex;
      flex-derection:column;
   }



   .ProductLogo{
    
      font-size: 19px ;
      cursor: pointer;
      margin-bottom: 70px;
      padding: 0px 13px;
      line-height: 24px !important;
   }
   .ProductLogo:hover{
      color: #0084c9;
   }

   .slider2{
  height: 505px;
  margin-buttom: 130px;
   }
  .ProjectPreview img{
      width: 90%;
      height: 80%;
      border-radius:7px;
  }


  .slick-dots{
        display: none !important;
    }
    .w-less{
        width: 100%;
    }

    .block {
	
	
	border-radius: 10px;
	position: relative; 
}
.block:after {
	content: '';
    height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	border-radius: 10px;
	background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
	z-index: -1;
	animation: blockanimate 3s ease alternate infinite;
	background-size: 300% 300%;
	clip-path: polygon(0% 100%, 3px 100%, 3px 3px, calc(100% - 3px) 3px, calc(100% - 3px) calc(100% - 3px), 3px calc(100% - 3px), 3px 100%, 100% 100%, 100% 0%, 0% 0%);
}
 
@keyframes blockanimate {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}


.ProductLogo:hover {
    color: #FF8A00;
}



.gradient-text {
  font-family: 'Rubik One', sans-serif;
  font-size: 18px;
  text-transform: uppercase;
  background: linear-gradient(45deg, #FF8A00 66%, yellow);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  color:#FF8A00;
  display: table;
  margin: 20px auto;
}

.Projectfrontpage{
    border: 2px solid #FF8A00;
    border-radius: 10px;
}

.slider-preview{
    width: 100%;
   
    
}

.slider-previews-item{
    width: 100%;
    background: black;
    position: relative;
    

}
.slider-previews-item img{
    width: 100%;
    height: 1000px;
    object-fit: cover;
    filter: brightness(70%)
}
.pd-off{
    padding:0px !important; 
}

.central__box {
    position: absolute;
    left: 100px;
    top: 35%;
    z-index: 10;
    color: white;
}


.central__title._active {
    opacity: 1;
    -webkit-transition: all 0.6s;
    -o-transition: all 0.6s;
    transition: all 0.6s;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
}


.central__title {
    max-width: 980px;
    padding-right: 40px;
    margin-bottom: 40px;
    font-size: 50px;
    
    opacity: 0;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    -webkit-transform: translateX(10%);
    -ms-transform: translateX(10%);
    transform: translateX(10%);
}

.central__text._active {
    opacity: 1;
    -webkit-transition: all 0.8s;
    -o-transition: all 0.8s;
    transition: all 0.8s;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
}
.central__text {
    max-width: 760px;
    padding-right: 40px;
    margin-bottom: 20px;
    font-size: 30px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    -webkit-transform: translateX(10%);
    -ms-transform: translateX(10%);
    transform: translateX(10%);
}
</style>

</div>
</div>
</div>
<!--
<div class="slider-preview">
<div class="slider-previews-item">
<div class="central__box">
	<h2 class="central__title anim-item anim-no-hide _active"> Видео поздравление на Юбилей с днем рождения из фото	</h2>
    <p class="central__text anim-item anim-no-hide _active">Видео поздравление для родных и близких из фотографий — красивый фильм на любой повод! Здесь вы сможете заказать видео из ваших фото на юбилей, день рождение и поздравить красивым и душевным подарком — фильмом из фотографий. Заказать поздравительное видео для родных и близких можно на нашем сайте нажав пункт в меню "Сделать Заказ"</p>
</div>
<img src="<?php echo get_template_directory_uri();?>/img/sliderprev/birthday.webp" alt="">
</div>
<div class="slider-previews-item">
<div class="central__box">
	<h2 class="central__title anim-item anim-no-hide _active"> Видео на школьную тему</h2>
    <p class="central__text anim-item anim-no-hide _active">
                  Слайд-шоу для ребенка из фотографий и видео может кардинально изменить Ваше отношение к фотографиям, появится новый смысл в том, чтобы просматривать их в новом формате под музыку, а значит в новом качестве. Тематика слайд-шоу для детей может быть разная. День рождение, первый видеоальбом, крещение и так далее. Заказать детский фильм из фото можно на нашем сайте нажав пункт в меню "Сделать Заказ"
												</p>
</div>
<img src="<?php echo get_template_directory_uri();?>/img/sliderprev/children.webp" alt="">
</div>
<div class="slider-previews-item">
<div class="central__box">
	<h2 class="central__title anim-item anim-no-hide _active"> Видео в память - поминальное видео на 40 дней, годовщину, с Земным ДР</h2>
    <p class="central__text anim-item anim-no-hide _active"> Пусть траурные, но красочные поминальные видео из фотографий и видео на 9 дней, 40 дней, годовщину, на земной день рождения. Для заказа нужно от 10 фото. Заказать памятное видео можно на нашем сайте нажав пункт в меню "Сделать Заказ"</p>
</div>
<img src="<?php echo get_template_directory_uri();?>/img/sliderprev/v_pamiat.webp" alt="">
</div>
<div class="slider-previews-item">
<div class="central__box">
	<h2 class="central__title anim-item anim-no-hide _active">Свадебный видео подарок фильм ролик из фотографий к свадьбе</h2>
    <p class="central__text anim-item anim-no-hide _active">Свадебный фильм на заказ — это увлекательное и романтическое видео из фото, которое расскажет вам о тех незабываемых моментах свадебного праздника. Свадебное видео несомненно станет лучшей памятью того события, которое так трепетно все переживали. Молодых пар впереди ждут немало свадебных юбилеев и годовщин. Заказать свадебное видео можно на нашем сайте нажав пункт в меню "Сделать Заказ"</p>
</div>
<img src="<?php echo get_template_directory_uri();?>/img/sliderprev/wedding.webp" alt="">

</div>
</div>
-->







<div class="AllContent">

<div class="MainContent ">


        <div class="LOGO" >
            

 <!-- <script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=5udrv9f4ooc&amp;m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>-->

                            <div class="btn-get-order-top">
                                <a data-aos="zoom-in" href="https://videosdushoy.ru/all_services" class="btn-write-in-viber  get-less">Наши услуги</a>
                                <a data-aos="zoom-in" href = "https://videosdushoy.ru/our_works" class="btn-get-constructor  mr-off get-less">Наши работы</a>
                            
                            </div>     
                <div class="BlocksLogo">
                    <h1><?php the_field('title-gl-h1')?></h1>
                </div>
                
                 <div class="container-text-gl">

                      <div class="text-gl">
 
                            <h2><?php the_field('title-gl-h2')?></h2>
                            
                            
                            <div data-aos="zoom-in" class="AboutUsPic-2"> 
                           <!-- <div class="slider-preview2">
                              <div class="slider-pre2-item"><img src="<?php echo get_template_directory_uri();?>/img/sliderprev2/item1.jpg" alt=""></div>
                              <div class="slider-pre2-item"><img src="<?php echo get_template_directory_uri();?>/img/sliderprev2/item2.jpg" alt=""></div>
                              <div class="slider-pre2-item"><img src="<?php echo get_template_directory_uri();?>/img/sliderprev2/item3.jpg" alt=""></div>
                              <div class="slider-pre2-item"><img src="<?php echo get_template_directory_uri();?>/img/sliderprev2/item4.jpg" alt=""></div>
                              <div class="slider-pre2-item"><img src="<?php echo get_template_directory_uri();?>/img/sliderprev2/item5.jpg" alt=""></div>
                              <div class="slider-pre2-item"><img src="<?php echo get_template_directory_uri();?>/img/sliderprev2/item6.jpg" alt=""></div>
                              <div class="slider-pre2-item"><img src="<?php echo get_template_directory_uri();?>/img/sliderprev2/item7.jpg" alt=""></div>
                            </div>-->
                               <!-- <img src="<?php// the_field('img-gl')?>" alt=""> -->
                             </div>
                            <h1 data-aos="fade-up"  class="heading-for-who ">Для кого создан <span> наш сайт!?</span></h1>
							<p data-aos="zoom-in" class="text-about"><?php the_field('text-gl')?></p>
                           
                       
                            <h1  data-aos="fade-up" class="heading-how-to">Как заказать <span>видео открытку</span> у нас!?</h1>
                            <div class="section-block">
                                <div data-aos="zoom-in" class="left-img"></div>
                                <div class="rigth-step-plan">
                                    <h2 data-aos="fade-left">Посмотреть примеры на  нашем сайте</h2>
                                    <p data-aos="zoom-in">
                                    Зайдите в разделы работ, услуг и посмотрите
                                    варианты  шаблонов, видео открыток,
                                    стихов, услуг которые подходят  
                                    к тематики для вашего события. 
                                    </p>
                                    <h2 data-aos="fade-left">Посмотреть  примеры шаблонов  которые вам подходят </h2>
                                    <p data-aos="zoom-in">
                                    В шаблонах есть множество тем в категориях  пример которых доступен
                                    для просмотра, ознакомьтесь по лучше выбор достаточно большой, думаю
                                    вашим близкие будут в восторге от такого подарка. 
                                    </p>
                                    <h2 data-aos="fade-left">Вы можете сделать свой шаблон сами на нашем сайте </h2>
                                    <p data-aos="zoom-in">
                                     Так же у нас доступен свой конструктор шаблонов, вроявите фантазию</h2>
                                     и вам понравиться результат!
                                    </p>
                                    <h2 data-aos="fade-left">Закажите у нас, написав нам в Viber или другие соц сети!</h2>
                                    <p data-aos="zoom-in">
                                    Обратиться к нам вы можете любым удобным вам способом.
                                    </p>
                                </div>
                            </div>
                            <div class="btn-get-order">
                            <a data-aos="zoom-in" href="https://invite.viber.com/?g2=AQB6lbXYP6Ovw02OEm3wBht4lvloEGzAdM%2FuGefUV1WZplEpSGqMYGnm%2FES815oO" class="btn-write-in-viber">Написать нам в Viber</a>
                            <a data-aos="zoom-in" href = "https://videosdushoy.ru/video_templates" class="btn-get-constructor">Сделать открытку </a>
                            
                            </div>

                            <h1  data-aos="fade-up" class="heading-how-to">Примеры <span>наших работ</span> </h1>
                            <img class="swipe-not"  src="<?php echo get_template_directory_uri();?>/img/swipe.png" alt="">
                               <!--slider start-->
                      <div class="slider2 ">

<?php                   
$my_posts = get_posts( array(
'posts_per_page' => 10,
'numberposts' => -1,
'category_name'    => 'our_works',
'orderby'     => 'rand',
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

                        <div class="Projectfrontpage">
                            <div class="ProjectLogo ProjectLogo-front-page">
                                    <h2><?php the_field('work_logo')?></h2>
                            </div>
                            <div class="ProjectPreview mr-r-off">
                                <img  src="<?php the_field('work_image')?>" alt="">
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
<!--slider and-->
                           
                            <h1 data-aos="fade-up"  class="heading-how-to">Сделайте не обычный <span>подарок</span></h1>
                                <div class="cards-what-we-are-making    for-adaptiv-block">
                                    <div class="left-cards-place">
                                    <p data-aos="fade-right" class="pad-top-off">
                                    Сегодня очень сложно удивить человека обыкновенным 
                                    подарком, поэтому люди стараются в дополнение к основному
                                    презенту, добавить какой-то оригинальный элемент. И чаще
                                    всего выбирают именно открытку. Но простая «машинная»
                                    открытка – это так просто и банально. А ведь нужно добавить
                                    оригинальности и креатива. В связи с этим люди выбирают видео
                                    открытки которые ценятся куда больше и выглядят очень интересно.
                                    Чтобы выбрать и купить видео открытки , достаточно перейти на сайт.
                                    На странице каждый заинтересованный пользователь сможет найти огромный
                                    ассортимент поздравлений на любой праздник. Кликнув по открытке, которая больше
                                    всего понравилась, можно прочесть её полное описание и сделать для
                                    себя вывод – подходит она, или нет и после написать нам в Viber.
                                    </p>
                                    <a href="/training">  <img  data-aos="flip-down" src="<?php the_field('card2')?>" alt=""> </a>
                                    <p data-aos="fade-right" class= "p-num-2">
                                    
                                    Вы можете задать нам вопрос, если вам что то не понятно. 
                                    Или же посмотреть их в разделе вопрос-ответ и найти ответы на
                                    интересующие вас вопросы.Мы с удовольствием на них ответим.
                                    </p>
                                    <a href="/our_works">   <img data-aos="flip-down" src="<?php the_field('card3')?>" alt=""> </a> 
                                    <p data-aos="fade-right" class= "p-num-4">
                                    Калькулятор расчета поможет вам узнать цену на наши услуги,
                                    или же вы можете просто зайти в раздел услуги. 
                                    </p>
                                    <a href="/video_templates"> <img data-aos="flip-down" src="<?php the_field('card4')?>" alt=""> </a> 
                                    <p data-aos="fade-right" class= "p-num-6">
                                    Во вкладке "Проекты" вы можете найти большое количество работ сделанных нами.
                                    </p>
                                    </div>
                                    <div class="rigth-card-place">
                                        <img data-aos="flip-down" src="<?php the_field('card1')?>" alt="">
                                        <p data-aos="fade-left" class= "p-num-1">
                                        Видео открытка, по факту, это такой, своеобразный видео 
                                    ролик с присутствием анимированной графики, в том числе,
                                    всевозможных визуальных эффектов, продолжительность этого творения,
                                    как правило 5- 15 минут.При желании, любой может научится создавать
                                    такие видео открытки, если вам интересно переходите во владку
                                    обучение и оставляйте свои данные.
                                    </p>
                                    <a  href="/answer_questions">  <img data-aos="flip-down" src="<?php the_field('card5')?>" alt=""> </a>
                                    <p data-aos="fade-left" class= "p-num-3">
                                    В разделе наши работы где находиться портфолио. 
                                    каждый проект по созданию открытки, за который мы беремся,
                                    мы пытаемься сделать особенным что бы ваши близкие получили 
                                    не забываемые впечатления. 

                                    </p>
                                    <img data-aos="flip-down" src="<?php the_field('card6')?>" alt="">
                                    <p data-aos="fade-left" class= "p-num-5">
                                    Программа для создания слайд-шоу из фотографий
                                    и видео ориентирована на решение задач самой разной
                                    сложности. Если нужно в короткий срок подготовить
                                    красивый ролик, доступен режим «Слайд-шоу за 5 минут».
                                    Достаточно выбрать подходящий шаблон и указать фотографии,
                                    которые будете использовать. Если же хочется самостоятельно
                                    поколдовать над уникальным проектом.
                                    </p>
                                    <a href="/project_videos">  <img data-aos="flip-down" src="<?php the_field('card7')?>" alt=""></a>
                                    </div>
                                </div>



                                <div class="cards-what-we-are-making  for-adaptiv-none">
                                    <div class="left-cards-place">
                                    <a href="#">  <img data-aos="flip-down" src="<?php the_field('card1')?>" alt=""></a>
                                        <p data-aos="fade-right" class="pad-top-off">
                                        Сегодня очень сложно удивить человека обыкновенным 
                                        подарком, поэтому люди стараются в дополнение к основному
                                        презенту, добавить какой-то оригинальный элемент. И чаще
                                        всего выбирают именно открытку. Но простая «машинная»
                                        открытка – это так просто и банально. А ведь нужно добавить
                                        оригинальности и креатива. В связи с этим люди выбирают видео
                                        открытки которые ценятся куда больше и выглядят очень интересно.
                                        
                                        Чтобы выбрать и купить видео открытки , достаточно перейти на сайт.
                                        На странице каждый заинтересованный пользователь сможет найти огромный
                                        ассортимент поздравлений на любой праздник. Кликнув по открытке, которая больше
                                        всего понравилась, можно прочесть её полное описание и сделать для
                                        себя вывод – подходит она, или нет и после написать нам в Viber.
                                        </p>
                                        <a href="/training">   <img data-aos="flip-down" src="<?php the_field('card2')?>" alt=""> </a>
                                            <p data-aos="fade-left" class= "p-num-1">
                                            Видео открытка, по факту, это такой, своеобразный видео 
                                            ролик с присутствием анимированной графики, в том числе,
                                            всевозможных визуальных эффектов, продолжительность этого творения,
                                            как правило 5- 15 минут.При желании, любой может научится создавать
                                            такие видео открытки, если вам интересно переходите во владку
                                            обучение и оставляйте свои данные.
                                            </p>
                                            <a  href="/answer_questions">  <img data-aos="flip-down" src="<?php the_field('card5')?>" alt=""></a>
                                        <p data-aos="fade-right" class= "p-num-2">
                                            
                                            Вы можете задать нам вопрос, если вам что то не понятно. 
                                            Или же посмотреть их в разделе вопрос-ответ и найти ответы на
                                            интересующие вас вопросы.Мы с удовольствием на них ответим.
                                            </p>


                                            <a href="/our_works"> <img data-aos="flip-down" src="<?php the_field('card3')?>" alt=""> </a>

                                        <p data-aos="fade-left" class= "p-num-3">
                                        В разделе наши работы где находиться портфолио. 
                                        каждый проект по созданию открытки, за который мы беремся,
                                        мы пытаемься сделать особенным что бы ваши близкие получили 
                                        не забываемые впечатления. 

                                        </p>
                                        <a href="#"> <img data-aos="flip-down" src="<?php the_field('card6')?>" alt=""></a>
                                       <p data-aos="fade-right" class= "p-num-4">
                                        Калькулятор расчета поможет вам узнать цену на наши услуги,
                                        или же вы можете просто зайти в раздел услуги. 
                                        </p>
                                        <a href="/video_templates"> <img data-aos="flip-down" src="<?php the_field('card4')?>" alt=""> </a>
                                        <p data-aos="fade-left" class= "p-num-5">
                                        Программа для создания слайд-шоу из фотографий
                                        и видео ориентирована на решение задач самой разной
                                        сложности. Если нужно в короткий срок подготовить
                                        красивый ролик, доступен режим «Слайд-шоу за 5 минут».
                                        Достаточно выбрать подходящий шаблон и указать фотографии,
                                        которые будете использовать. Если же хочется самостоятельно
                                        поколдовать над уникальным проектом.
                                        </p>
                                    
                                       
                                       
                                        <a href="/project_videos">  <img data-aos="flip-down" src="<?php the_field('card7')?>" alt=""></a>
                                        <p data-aos="fade-right" class= "p-num-6">
                                        Во вкладке "Проекты" вы можете найти большое количество работ сделанных нами.
                                        </p>
                                        
                                    </div>
                                       
                                </div>
                                   
                        </div>
                    
                 </div>           
                
                    <div class="BlocksLogo">
                    <p>Наши услуги</p>
                </div>
                                                
                    <div class="Products">
						

                    <?php 

// параметры по умолчанию
$my_posts = get_posts( array(
    
	'numberposts' => -1,
	'category_name'    => 'services',
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
                        
                        <div data-aos="fade-up" class="Product block"  >
                            <div class="ProductLogo gradient-text"><?php the_field('service_name')?></div>
                            <div class="ProductImg"><img src="<?php the_field('service_img')?>" alt=""></div>
                            <div class="ProductPrice"><?php the_field('service_price')?> &#8381;</div>
                            <div class="ProductHref"><a  href="<?php echo get_permalink();?>" class="ProductButton" style="text-decoration:none;">Подробнее</a></div>
                            
                        </div>

<?php 
}

wp_reset_postdata(); // сброс
?>
                        


                    </div>
                    
      <div class="ContactFormLogo">
                            <p>Оставьте заявку</p>
                        </div>              
 



 <form method="post" action="<?php echo get_site_url().'/mail.php';?>"   id="form1"   class="form1">   
                   
                    <div class="ContactForm">
                    
                        
                        
                        <div class="ContactFormLogoText">Мы свяжемся с вами для уточнения всех деталей заказа</div>  
                        <div class="ContactFormItem">
                        <input type="hidden" name="urlback" id="urlback" value="https://videosdushoy.ru/"/>
                        <input type="text" name="name" required="required"  size="18"   placeholder="Ваше имя  *">
                        <input type="email" name="email"   size="18"    placeholder="Ваш Email">
                        <input type="tel" name="phone" required="required"   size="16"   placeholder="Ваш телефон  *">
                          </div>   

                         <div class="ContactFormItem"> 
                         <textarea name="message" placeholder="Ваше сообщение:"></textarea>
                         
                         <button class="SubmitButton" type="submit" placeholder="Отправить" >Отправить</button>
                        </div>

                    </div>
	</form> 


            
</div> 

<div class="text-gl">
<h1  data-aos="fade-up" class="heading-how-to">Читать <span>записи блога</span> </h1>
<img class="swipe-not"  src="<?php echo get_template_directory_uri();?>/img/swipe.png" alt="">
                            <!--slider start-->
                      <div class="slider2">

<?php                   
$my_posts = get_posts( array(
'posts_per_page' => 10,
'numberposts' => -1,
'category_name'    => 'blog',
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

            <div class="Productsingle ">
            <div class="ProductLogo w-less"><a  class="a-link-blog" href="<?php the_permalink();  ?>" title=""><?php the_field('article_logo')?></a></div>
                <div class="ProductImg w-100"><img src="<?php the_field('article_image') ?>" alt=""></div>
                
                <div class="ProductHref"><a  href="<?php echo get_permalink();?>" class="ProductButton" style="text-decoration:none;">читать...</a></div>
            
            </div>

<?php 
}

wp_reset_postdata(); // сброс
?>

</div>
<!--slider and-->
</div>
<h1  data-aos="fade-up" class="heading-how-to">Оставьте <span> комментарий!</span> </h1>
<div class="reviews-comments-wrapper"> 
 

<?php 

if ( is_user_logged_in() ) {
	echo 'Вы авторизованы на сайте!';
}
else {
	echo '<a href="https://videosdushoy.ru/wp-login.php?action=register" target="_parent" title="WordPress" class="anycomment-login-with-list-wordpress cl" rel="disallow"> <div class="mr-top-reg">Регистрация</div> <span title="WordPress" class="sc-AxjAm fxcduN"><svg width="30px" height="30px" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="20" height="20" rx="10" fill="#00A0D2"></rect><path d="M10 4.6875C11.0312 4.6875 12.0156 4.96875 12.9062 5.48438C13.7969 6 14.5 6.70312 15.0156 7.59375C15.5312 8.48438 15.8125 9.46875 15.8125 10.5C15.8125 11.5547 15.5312 12.5156 15.0156 13.4062C14.5 14.2969 13.7969 15.0234 12.9062 15.5391C12.0156 16.0547 11.0312 16.3125 10 16.3125C8.94531 16.3125 7.98438 16.0547 7.09375 15.5391C6.20312 15.0234 5.47656 14.2969 4.96094 13.4062C4.44531 12.5156 4.1875 11.5547 4.1875 10.5C4.1875 9.46875 4.44531 8.48438 4.96094 7.59375C5.47656 6.70312 6.20312 6 7.09375 5.48438C7.98438 4.96875 8.94531 4.6875 10 4.6875ZM4.77344 10.5C4.77344 11.5312 5.03125 12.4453 5.57031 13.2891C6.10938 14.1328 6.83594 14.7891 7.72656 15.2109L5.21875 8.36719C4.91406 9.04688 4.77344 9.75 4.77344 10.5ZM10 15.7266C10.5859 15.7266 11.1719 15.6328 11.7344 15.4219L11.6875 15.3516L10.0938 10.9453L8.52344 15.5156C8.99219 15.6562 9.48438 15.7266 10 15.7266ZM10.7266 8.03906L12.6016 13.6641L13.1641 11.8125C13.2812 11.3906 13.375 11.1094 13.4219 10.9219C13.4922 10.6641 13.5391 10.4297 13.5391 10.2422C13.5391 9.96094 13.4922 9.67969 13.3984 9.39844C13.3281 9.23438 13.2344 9.02344 13.0938 8.78906L13.0234 8.69531C12.8828 8.46094 12.7656 8.27344 12.7188 8.13281C12.625 7.94531 12.5781 7.75781 12.5781 7.57031C12.5781 7.33594 12.6484 7.10156 12.8359 6.91406C13 6.72656 13.2109 6.63281 13.4688 6.63281L13.5391 6.65625C13.0469 6.23438 12.5078 5.88281 11.8984 5.64844C11.2891 5.41406 10.6562 5.27344 10 5.27344C9.10938 5.27344 8.26562 5.48438 7.49219 5.90625C6.71875 6.32812 6.10938 6.91406 5.64062 7.61719L5.96875 7.64062C6.20312 7.64062 6.50781 7.64062 6.88281 7.59375L7.35156 7.57031C7.44531 7.57031 7.49219 7.61719 7.53906 7.66406C7.58594 7.73438 7.58594 7.80469 7.5625 7.875C7.53906 7.96875 7.49219 7.99219 7.39844 7.99219L6.78906 8.03906L8.71094 13.7109L9.83594 10.2891L9.03906 8.0625L8.47656 7.99219C8.38281 7.99219 8.33594 7.96875 8.3125 7.89844C8.26562 7.82812 8.26562 7.75781 8.3125 7.6875C8.35938 7.61719 8.42969 7.57031 8.52344 7.57031L9.01562 7.59375C9.39062 7.64062 9.67188 7.64062 9.90625 7.64062C10.1172 7.64062 10.4219 7.64062 10.7969 7.59375L11.2891 7.57031C11.3594 7.57031 11.4297 7.61719 11.4766 7.66406C11.5234 7.73438 11.5234 7.80469 11.5 7.875C11.4531 7.96875 11.4062 7.99219 11.3125 7.99219C11.1016 8.01562 10.9141 8.03906 10.7266 8.03906ZM12.625 15.0234C13.4219 14.5547 14.0547 13.9219 14.5234 13.125C14.9922 12.3281 15.2266 11.4609 15.2266 10.5C15.2266 9.60938 15.0156 8.78906 14.5938 7.99219C14.5938 8.17969 14.6172 8.34375 14.6172 8.53125C14.6172 9.11719 14.4766 9.75 14.2188 10.4062L12.625 15.0234Z" fill="#fff"></path></svg></span></a>' ;
}


?> 

 <?php echo do_shortcode("[anycomment ]"); ?> 


 
 
 
 



</div>




<?php
get_footer();
?>









