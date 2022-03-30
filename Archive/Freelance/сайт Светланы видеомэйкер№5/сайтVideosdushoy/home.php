<?php
/**
 * Template Name: Главная страница
 */

get_header();
?>



                <div class="BlocksLogo">
                    <h1><?php the_field('title-gl-h1')?></h1>
                </div>
                
                 <div class="container-text-gl">

                      <div class="text-gl">
                            <h2><?php the_field('title-gl-h2')?></h2>
                            
                            <div data-aos="zoom-in" class="AboutUsPic-2"> <img src="<?php the_field('img-gl')?>" alt=""> <p class="qr-viber" src="" alt=""><span>Viber Qr</span> </p> </div>
                            <h1  data-aos="fade-up" class="heading-how-to">Как заказать <span>видео открытку</span> у нас!?</h1>
                            <div class="section-block">
                                <div data-aos="zoom-in" class="left-img"></div>
                                <div class="rigth-step-plan">
                                    <h2 data-aos="fade-left">Посмотреть примеры на  нашем сайте</h2>
                                    <p data-aos="zoom-in">
                                    Зайдите в разделы работ, услуг и посмотрите<br>
                                    варианты  шаблонов, видео открыток,<br> 
                                    стихов, услуг которые подходят  <br>
                                    к тематики для вашего события. 
                                    </p>
                                    <h2 data-aos="fade-left">Посмотреть  примеры шаблонов  которые вам подходят </h2>
                                    <p data-aos="zoom-in">
                                    В шаблонах есть множество тем в категориях  пример которых доступен<br>
                                    для просмотра, ознакомьтесь по лучше выбор достаточно большой, думаю<br>
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
                            <h1 data-aos="fade-up"  class="heading-for-who ">Для кого создан <span> наш сайт!?</span></h1>
							<p data-aos="zoom-in" class="text-about"><?php the_field('text-gl')?></p>
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
                                    <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card2.jpg" alt=""> 
                                    <p data-aos="fade-right" class= "p-num-2">
                                    
                                    Вы можете задать нам вопрос, если вам что то не понятно. 
                                    Или же посмотреть их в разделе вопрос-ответ и найти ответы на
                                    интересующие вас вопросы.Мы с удовольствием на них ответим.
                                    </p>
                                    <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card3.jpg" alt=""> 
                                    <p data-aos="fade-right" class= "p-num-4">
                                    Калькулятор расчета поможет вам узнать цену на наши услуги,
                                    или же вы можете просто зайти в раздел услуги. 
                                    </p>
                                    <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card4.jpg" alt=""> 
                                    <p data-aos="fade-right" class= "p-num-6">
                                    Во вкладке "Проекты" вы можете найти большое количество работ сделанных нами.
                                    </p>
                                    </div>
                                    <div class="rigth-card-place">
                                        <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card1.jpg" alt="">
                                        <p data-aos="fade-left" class= "p-num-1">
                                        Видео открытка, по факту, это такой, своеобразный видео 
                                    ролик с присутствием анимированной графики, в том числе,
                                    всевозможных визуальных эффектов, продолжительность этого творения,
                                    как правило 5- 15 минут.При желании, любой может научится создавать
                                    такие видео открытки, если вам интересно переходите во владку
                                    обучение и оставляйте свои данные.
                                    </p>
                                    <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card5.jpg" alt="">
                                    <p data-aos="fade-left" class= "p-num-3">
                                    В разделе наши работы где находиться портфолио. 
                                    каждый проект по созданию открытки, за который мы беремся,
                                    мы пытаемься сделать особенным что бы ваши близкие получили 
                                    не забываемые впечатления. 

                                    </p>
                                    <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card6.jpg" alt="">
                                    <p data-aos="fade-left" class= "p-num-5">
                                    Программа для создания слайд-шоу из фотографий
                                    и видео ориентирована на решение задач самой разной
                                    сложности. Если нужно в короткий срок подготовить
                                    красивый ролик, доступен режим «Слайд-шоу за 5 минут».
                                    Достаточно выбрать подходящий шаблон и указать фотографии,
                                    которые будете использовать. Если же хочется самостоятельно
                                    поколдовать над уникальным проектом.
                                    </p>
                                    <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card7.jpg" alt="">
                                    </div>
                                </div>



                                <div class="cards-what-we-are-making  for-adaptiv-none">
                                    <div class="left-cards-place">
                                        <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card1.jpg" alt="">
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
                                            <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card2.jpg" alt=""> 
                                            <p data-aos="fade-left" class= "p-num-1">
                                            Видео открытка, по факту, это такой, своеобразный видео 
                                            ролик с присутствием анимированной графики, в том числе,
                                            всевозможных визуальных эффектов, продолжительность этого творения,
                                            как правило 5- 15 минут.При желании, любой может научится создавать
                                            такие видео открытки, если вам интересно переходите во владку
                                            обучение и оставляйте свои данные.
                                            </p>
                                            <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card5.jpg" alt="">
                                        <p data-aos="fade-right" class= "p-num-2">
                                            
                                            Вы можете задать нам вопрос, если вам что то не понятно. 
                                            Или же посмотреть их в разделе вопрос-ответ и найти ответы на
                                            интересующие вас вопросы.Мы с удовольствием на них ответим.
                                            </p>


                                        <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card3.jpg" alt=""> 

                                        <p data-aos="fade-left" class= "p-num-3">
                                        В разделе наши работы где находиться портфолио. 
                                        каждый проект по созданию открытки, за который мы беремся,
                                        мы пытаемься сделать особенным что бы ваши близкие получили 
                                        не забываемые впечатления. 

                                        </p>
                                        <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card6.jpg" alt="">
                                       <p data-aos="fade-right" class= "p-num-4">
                                        Калькулятор расчета поможет вам узнать цену на наши услуги,
                                        или же вы можете просто зайти в раздел услуги. 
                                        </p>
                                        <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card4.jpg" alt=""> 
                                        <p data-aos="fade-left" class= "p-num-5">
                                        Программа для создания слайд-шоу из фотографий
                                        и видео ориентирована на решение задач самой разной
                                        сложности. Если нужно в короткий срок подготовить
                                        красивый ролик, доступен режим «Слайд-шоу за 5 минут».
                                        Достаточно выбрать подходящий шаблон и указать фотографии,
                                        которые будете использовать. Если же хочется самостоятельно
                                        поколдовать над уникальным проектом.
                                        </p>
                                    
                                       
                                       
                                        <img data-aos="flip-down" src="<?php echo get_template_directory_uri();?>/img/card7.jpg" alt="">
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
                        
                        <div data-aos="fade-up" class="Product">
                            <div class="ProductLogo"><?php the_field('service_name')?></div>
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
                        
                        <input type="hidden" name="art" id="art" value="С главной"/>
                        <input type="text" name="name" required="required"  size="18"   placeholder="Ваше имя  *">
                        <input type="email" name="email"   size="18"    placeholder="Ваш Email">
                        <input type="tel" name="phone" required="required"   size="16"   placeholder="Ваш телефон  *">
                          </div>   

                         <div class="ContactFormItem"> 
                         <textarea name="message" placeholder="Ваше сообщение:"></textarea>
                         
                         <input class="SubmitButton" type="submit" placeholder="Отправить" >
                        </div>

                    </div>
	</form> 
</div> 
<?php
get_footer();
?>









