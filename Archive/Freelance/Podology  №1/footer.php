 <!--start footer-->   
 <footer class="footer">
            <div class="container">
                <div class="content-footer-wrapper">
                    <div class="left-part-footer-wrapper" >
                        <div class="logo">
                            <a class="logo__link" href="" > <img class="logo-img-footer" src="<?php   bloginfo('template_url');  ?>/assets/images/logoready.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="right-part-footer-wrapper">
                    <?php   wp_nav_menu( array(
                            'theme_location'  => 'top',           // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                            'menu'            => 'верхнее меню',  // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
                                                        // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                            'container'       => 'nav',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                            'container_class' => 'menu',      // (string) class контейнера (div тега)
                            'container_id'    => 'navbar',      // (string) id контейнера (div тега)
                            'menu_class'      => 'header__menu',           // (string) class самого меню (ul тега)
                            'menu_id'         => 'ul',           // (string) id самого меню (ul тега)
                            //	'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                            //	'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                            //	'before'          => '',              // (string) Текст перед <a> каждой ссылки
                            //	'after'           => '',              // (string) Текст после </a> каждой ссылки
                            //	'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
                            //	'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
                            //	'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                            //	'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu

                            ) );
                            ?>
                        <!--<nav class="menu menu-position"  >
                            <ul class="header__menu footer-podition">
                                <li class="itemi menu-item menu-item--current"><a href="#" class="header__menu-link">главная</a></li>
                                <li class="itemi menu-item"><a href="#" class="header__menu-link">Статьи</a></li>
                                <li class="itemi menu-item"><a href="#" class="header__menu-link">Магазин</a></li>
                                <li class="itemi menu-item"><a href="#popup" class="header__menu-link">услуги</a></li>
                                <li class="itemi menu-item"><a href="#contacts" class="header__menu-link">контакты</a></li>
                                <li class="itemi menu-item "><a href="#about" class="header__menu-link">О нас</a></li>
                           </ul>
                        </nav>-->
                        <div class="contacts-footer" >
                            <div class="footer-contact-text"><img data-aos="zoom-in"  class="offset imgfooter" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-врач-женщина-80.png" alt="">Баяхметова Светлана Сергеевна</div>
                            <div class="footer-contact-text"><img data-aos="zoom-in"  class="offset imgfooter" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-телефон-30.png" alt="">8(777)-285-73-41</div>
                            <div class="footer-contact-text"><img data-aos="zoom-in" class="offset imgfooter" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-whatsapp-50.png" alt="">8(777)-285-73-41</div>
                            <div class="footer-contact-text"><img data-aos="zoom-in"  class="offset imgfooter" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-адрес-50.png" alt="">Кабдолова  2-этаж 208a кабинет </div>
                           <a class="inst-link" href=""><div class="footer-contact-text"><img data-aos="zoom-in"  class="offset imgfooter" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-instagram-96.png" alt="">Podostudiocleopatra</div></a> 
                        </div>
                    </div>
                </div>
            </div>    
            <div class="author-div">
                <div class="container">
                    <div class="footer2-wrapper">
                        <div class="footer2">Copyright ©2021 All rights reserved | This template is made by <span class="span2">RusyaMorra</span></div>
                    </div>
                </div>
            </div>
        </footer>
      
      
        </main>  
        <div  id="popup" class="popup">
            <a href="#header" target="_self" class="popup__area"></a>
            <div class="popup__body">
                <div class="popup__content">
                    <div class="white-upper"></div>
                    <a target="_self" href="#header" class="popup__close"><img class="cross" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-крестик-xbox-50.png"  alt=""></a>
                    <div class="logo logo-popup">
                        <a class="logo__link" href="" > <img class="logo-img-footer" src="<?php   bloginfo('template_url');  ?>/assets/images/logoready.jpg" alt=""></a>
                    </div>
                    <div class="popup-text-offers">
                        <div class="offer-popup">Аппаратный медицинский педикюр</div>        
                        <div class="offer-popup">Медицинский маникюр с микозом</div>        
                        <div class="offer-popup">Аппаратный медицинский маникюр</div>        
                        <div class="offer-popup">Обработка одного микозного ногтя</div>        
                        <div class="offer-popup">Обработка всех микозных ногтей (ноги)</div>        
                        <div class="offer-popup">Обработка всех микозных ногтей (руки)</div>        
                        <div class="offer-popup">Обработка  микозных ногтей и стоп</div>        
                        <div class="offer-popup">Обработка  стоп</div>        
                        <div class="offer-popup">Удаление стержневой  мозоли</div>        
                        <div class="offer-popup">Лечение межпальцевой мозоли</div>        
                        <div class="offer-popup">Установка тампонады</div>        
                        <div class="offer-popup">Лечение ВПЧ(бородавки)(Исп.кислотой)</div>        
                        <div class="offer-popup">Лечение ВПЧ(бородавки)(Herbitas, Verrugal)</div>        
                        <div class="offer-popup">Лечение вросшего ногтя(I-II стадия)</div>        
                        <div class="offer-popup">Лечение вросшего ногтя(III-IV стадия)</div>        
                        <div class="offer-popup">Установка титановой нити(1ноготь)</div>        
                        <div class="offer-popup">Установка скобы ЗТО(1ноготь) </div>        
                        <div class="offer-popup">Установка скобы фрезера(1ноготь)</div>        
                        <div class="offer-popup">Обработка после установки(т.н  - 1ноготь)</div>        
                        <div class="offer-popup">Обработка после установки(скобы -1 ноготь)</div>        
                    </div>
                </div>
            </div>
        </div>
        <div  id="popup2" class="popup2">
            <a href="#header" target="_self" class="popup__area2"></a>
            <div class="popup__body2">
                <div class="popup__content2">
                    <a target="_self" href="#header" class="popup__close2"><img class="cross" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-крестик-xbox-50.png"  alt=""></a>
                    <div class="logo logo-popup">
                        <a class="logo__link" href="" > <img class="logo-img-footer" src="<?php   bloginfo('template_url');  ?>/assets/images/logoready.jpg" alt=""></a>
                    </div>
                    <div class="form-rigth2">
                    <?php echo  do_shortcode('[contact-form-7 id="225" title="Контактная форма 1"]') ?>
                       <!-- <form id="form" class="guruweba_example_form2" name="feedback"  novalidate>
                            <div class="form__name">Ваше имя</div>
                            <input type="text" name="name"  class="_name _req"   required="required" placeholder="Ваше имя...">
                            <div class="form__email">Ваш email</div>
                            <input type="email" name="email"  class="_email _req"  required="required" placeholder="Ваш email...">
                            <div class="form__email">Ваш телефон</div>
                            <input type="phone" name="phone"  class="_phone _req"  required="required" placeholder="Ваш телефон...">
                            <div class="form__massage" >Сообщение</div>
                            <textarea name="details" id="_massage" cols="30" rows="3" placeholder="Сообщение не обязательно..."></textarea>
                            <button class="btn-call btn-form2" type="submit" name="submit_btn">Отправить</button>
                          </form>-->
                    </div>
                </div>
            </div>
        </div>
        <a href="#_up"><img src="<?php   bloginfo('template_url');  ?>/assets/images/arrowup.png" alt="" class="arrow-up"></a>

        
       <!-- <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/masonry-docs.min.js"></script>  
        <script src="assets/js/slideout.min.js"></script> 
        <script src="assets/js/script.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>-->
                <!--библиотека-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
       
      <?php wp_footer()?> 
    </body>
    <!--and body-->
</html>
<!--and html-->