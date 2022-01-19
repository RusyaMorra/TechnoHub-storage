     <?php get_header() ?>
        <main id="panel" >
        <!--start main--> 
        <div class="main" id="_up">
            <section class="intro-section">
                <div class="section-wrapper">
                    <div class="container">
                        <div class="leg-wrapper">
                            <img class="intro-section__img" src="<?php   bloginfo('template_url');  ?>/assets/images/нога1.png" alt="">
                        </div>
                        <div class="left-item__outer">
                            <div class="left-item__wrapper-inner">
                                <h1 data-aos="fade-right" class="left-item__title title"><?php the_field('left-item__title') ?> </h1>
                                <div class="table-wrapper">
                                    <div class="table-wrapper__content">
                                        <h2 class="table-wrapper__text"><?php the_field('table-wrapper__text') ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </section>
            <div class="background-gold">
                <div class="container">
                    <img class="background-gold__img-plate" src="<?php   bloginfo('template_url');  ?>/assets/images/плашка.jpg" alt="">
                    <div class="link-wrapper">
                        <a  href="#popup" class="background-gold__button-offer">Услуги</a>
                        <a  href="#popup2" class="background-gold__button-offer">Записаться</a>
                    </div>
                </div>
            </div>
            <section class="section-maddle">
                <div class="section-wrapper-center">
                    <div class="section-midsetivikat"><div class="sertificats">Сертификаты</div></div>
                    <div class="container">
                        <div class="container-wrapper">
                            <div class="content-wrapper-left">
                                <h2 data-aos="fade-right" class="container-wrapper__heading-text"><?php the_field('container-wrapper__heading-text') ?> <span class="span1">“клеопатра”</span> </h2>
                                <div class="container-wrapper__down-text">
                                    <?php the_field('container-wrapper__down-text') ?>
                                   
                                </div>
                                <div data-aos="fade-right" class="call-text"><a class="btn-call" href="tel:<?php the_field('phone') ?>" >ПОЗВОНИТЬ</a> </div>
                                </div>
                            <div class="container-wrapper__img-left">
                                   <img class="container-wrapper__arrow" src="<?php   bloginfo('template_url');  ?>/assets/images/podolog-new.png" alt="">
                                   <div class="inst-podologist">inst@svetlana__svet47""</div>
                            </div>
                        </div>
                        <div class="container-wrapper-arrow">
                            <img class="container-wrapper__arrow-img" src="<?php   bloginfo('template_url');  ?>/assets/images/arrow.png" alt=""> 
                        </div>
                        <div class="container-wrapper-number">
                            <div class="container-wrapper__contact-items">
                                <a class="link" href="tel:<?php the_field('phone') ?>" ><?php the_field('phone') ?> ''</a>
                                <div class="name">Баяхметова Cветлана Сергеевна</div>
                                <div class="prof">Подолог-миколог</div>
                            </div>
                            <div class="finger-wrapper">
                                 <div class="finger-wrapper-content">
                                    <div class="finger-wrapper__title">Вам срочно нужна запись если у вас:</div>
                                    <div class="finger-wrapper__images">
                                       <img class="finger-wrapper__img-finger finger-wrapper__img-finger--animate" src="<?php   bloginfo('template_url');  ?>/assets/images/палец.jpg" alt="">
                                       <img class="finger-wrapper__img-finger" src="<?php   bloginfo('template_url');  ?>/assets/images/скоба.jpg" alt="">
                                       <img class="finger-wrapper__img-finger finger-wrapper__img-finger--animate" src="<?php   bloginfo('template_url');  ?>/assets/images/грибок.jpg" alt="">
                                       <img class="finger-wrapper__img-finger" src="<?php   bloginfo('template_url');  ?>/assets/images/натоптыш.jpg" alt="">
                                       <img class="finger-wrapper__img-finger finger-wrapper__img-finger--animate" src="<?php   bloginfo('template_url');  ?>/assets/images/диабетическая.jpg" alt="">
                                    </div> 
                                 </div>
                            </div>
                            <div class="adress-wrapper">
                                <img class="container-wrapper__arrow-img2" src="<?php   bloginfo('template_url');  ?>/assets/images/arrow.png" alt=""> 
                                <div class="adress"><?php the_field('Adress') ?>  ''</div>
                            </div>
                        </div>
                        <div class="slider-wrapper">
                            <div class="slider">
                                <div class="slider__item"> 
                                    <img class="slider__item-img" src="<?php   bloginfo('template_url');  ?>/assets/images/Screenshot_15.jpg" alt="" >
                                    <img class="sertificat-real" src="<?php   bloginfo('template_url');  ?>/assets/images/" alt="">
                                </div> 
                                <div class="slider__item"> 
                                    <img class="slider__item-img" src="<?php   bloginfo('template_url');  ?>/assets/images/Screenshot_15.jpg" alt="" >
                                </div> 
                                <div class="slider__item"> 
                                    <img class="slider__item-img" src="<?php   bloginfo('template_url');  ?>/assets/images/Screenshot_15.jpg" alt="" >
                                </div> 
                                <div class="slider__item"> 
                                    <img class="slider__item-img" src="<?php   bloginfo('template_url');  ?>/assets/images/Screenshot_15.jpg" alt="" >
                                </div> 
                                <div class="slider__item"> 
                                    <img class="slider__item-img" src="<?php   bloginfo('template_url');  ?>/assets/images/Screenshot_15.jpg" alt="" >
                                </div> 
                                <div class="slider__item"> 
                                    <img class="slider__item-img" src="<?php   bloginfo('template_url');  ?>/assets/images/Screenshot_15.jpg" alt="" >
                                </div> 
                            </div>
                        </div>
                    </div>   
                </div>
            </section>
            <section class="section-fixed">
               <div class="container">
                    <div class="text-wrapper-fixed-section">
                        <h2 class="text-wrapper-fixed-section__slogans-heading"><?php the_field('three-title') ?></h2>   
                        <div class="text-wrapper-fixed-section__inner-wrapper">
                            <div  class="text-wrapper-fixed-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" ><?php the_field('three-slogans') ?> </div>
                            <div  class="text-wrapper-fixed-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" ><?php the_field('three-slogans2') ?> </div>
                            <div  class="text-wrapper-fixed-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" ><?php the_field('three-slogans3') ?> </div>
                            <div  class="text-wrapper-fixed-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" ><?php the_field('three-slogans4') ?> </div>
                            <div  class="text-wrapper-fixed-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" ><?php the_field('three-slogans5') ?> </div>
                            <div  class="text-wrapper-fixed-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" ><?php the_field('three-slogans6') ?> </div>
                        </div>
                    </div>
               </div>
            </section>
            <section class="gallery-section">
                <div class="container">
                    <div class="apper-content">
                        <div class="apper-content-text-wrapper">
                            <h2 data-aos="fade-right" class="apper-content__text apper-content__text--text1">Галерея</h2>
                            <h2 data-aos="fade-right"  class="apper-content__text apper-content__text--text2">Наших</h2>
                            <h2 data-aos="fade-right" class="apper-content__text apper-content__text--text3">Работ</h2>
                        </div>
                        <div class="apper-content-img-wrapper">
                            <img  data-aos="zoom-in" class="img-rotate" src="<?php   bloginfo('template_url');  ?>/assets/images/Screenshot_134.jpg" alt="" >
                        </div>
                    </div>
                    <div class="down-content">
                        <div class="grid">
                            <a href="<?php the_field('photo-gallery')  ?>" class="item"><div class="grid-item"><img class="imgmesonry" src="<?php the_field('photo-gallery') ?> "  alt=""></div></a>
                            <a href="<?php the_field('photo-gallery2') ?> " class="item"><div class="grid-item grid-item--width2"><img class="imgmesonry" src="<?php the_field('photo-gallery2') ?> "  alt=""></div></a>
                            <a href="<?php the_field('photo-gallery3') ?> " class="item"><div class="grid-item"><img class="imgmesonry" src="<?php the_field('photo-gallery3') ?> " alt=""></div></a>
                            <a href="<?php the_field('photo-gallery4') ?> " class="item"><div class="grid-item"><img class="imgmesonry" src="<?php the_field('photo-gallery4') ?> " alt=""></div></a>
                            <a href="<?php the_field('photo-gallery5') ?> " class="item"><div class="grid-item grid-item--width2"><img class="imgmesonry" src="<?php the_field('photo-gallery5') ?> " alt=""></div></a>
                            <a href="<?php the_field('photo-gallery6') ?> " class="item"><div class="grid-item"><img class="imgmesonry" src="<?php the_field('photo-gallery6') ?> " alt=""></div></a>
                            <a href="<?php the_field('photo-gallery7') ?> " class="item"><div class="grid-item grid-item--width2"><img class="imgmesonry" src="<?php the_field('photo-gallery7') ?> " alt=""></div></a>
                            <a href="<?php the_field('photo-gallery8') ?> " class="item"><div class="grid-item"><img class="imgmesonry" src="<?php the_field('photo-gallery8') ?> " alt=""></div></a>
                            <a href="<?php the_field('photo-gallery9') ?> " class="item item-hidden"> <div class="grid-item grid-item--width2"><img class="imgmesonry" src="<?php the_field('photo-gallery9') ?> " alt=""></div></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="why-we-are-better">
                <div class="container">
                    <div class="whole-wrapper">
                        <div class="better-wrapper-left">
                            <h2  data-aos="zoom-in" class="better-wrapper-left__text1">Почему</h2>
                            <h2  data-aos="zoom-in" class="better-wrapper-left__text2">мы лучшие</h2>
                        </div>
                        <div class="better-wrapper-right">
                            <div  data-aos="zoom-in" class="better-wrapper-righ__text1">Мы ищем для вас лучший<br>
                                 вариант решения проблемы
                             </div>
                            <div  data-aos="zoom-in" class="better-wrapper-righ__text2">Сертифирированные <br>
                                 подологи</div>
                            <div  data-aos="zoom-in" class="better-wrapper-righ__text2">Все время работаем <br>
                                 над нашим сервисом</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="offer-section">
                <div class="container">
                    <div class="text-wrapper-offer-section">
                        <div class="text-wrapper-offer-section__inner-wrapper">
                            <h2 class="text-wrapper-offer-section__slogans-heading">Наши услуги:</h2>
                            <div class="text-wrapper-offer-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" > <?php the_field('offer') ?></div>
                            <div class="text-wrapper-offer-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" > <?php the_field('offer2') ?></div>
                            <div class="text-wrapper-offer-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" > <?php the_field('offer3') ?></div>
                            <div class="text-wrapper-offer-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" > <?php the_field('offer4') ?></div>
                            <div class="text-wrapper-offer-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" > <?php the_field('offer5') ?></div>
                            <div class="text-wrapper-offer-section__slogan-item"><img class="img-margin" src="<?php   bloginfo('template_url');  ?>/assets/images/pngwing.com.png" alt="" > <?php the_field('offer6') ?></div>
                        </div>
                        <div class="text-wrapper-offer-section__img-wrapper">
                            <img src="<?php   bloginfo('template_url');  ?>/assets/images/Mengobati-cantengan.jpg" alt="" class="text-wrapper-offer-section__img" >
                        </div>
                    </div>
                    <div class="link-wrapper333"><a  data-aos="zoom-in" href="#popup" class="background-gold__button-offer333  pos-offer">Услуги</a></div>
                </div>
            </section>
            <section class="contacts">
                <div class="container">
                    <div class="contacts-background" id="contacts">
                        <h2 class="contacts-background__contacts-text heading adress  ">Контакты</h2>
                        <div class="contacts-background__contacts-text name adress font-query"><img  data-aos="zoom-in" class="offset" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-врач-женщина-80.png" alt=""><?php the_field('name2') ?></div>
                        <div class="contacts-background__contacts-text number adress font-query"><img data-aos="zoom-in"  class="offset" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-телефон-30.png" alt=""><?php the_field('phone2') ?></div>
                        <div class="contacts-background__contacts-text number adress font-query"><img data-aos="zoom-in"  class="offset" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-whatsapp-50.png" alt=""> <?php the_field('phone2') ?></div>
                        <div class="contacts-background__contacts-text adress font-query"><img  data-aos="zoom-in" class="offset" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-адрес-50.png" alt=""><?php the_field('Adress2') ?> </div>
                        <div class="contacts-background__contacts-text adress font-query"><img  data-aos="zoom-in"  class="offset" src="<?php   bloginfo('template_url');  ?>/assets/images/icons8-instagram-96.png" alt=""><?php the_field('instagram') ?></div>
                    </div>
                </div>
            </section>
            <section class="about-us" id="about">
                <div class="container">
                    <h2 class="about-us__text" data-aos="fade-left">О нас</h2>
                    <div class="about-us__main-text" data-aos="fade-right">
                     <?php the_field('text-about-us') ?> 
                    </div>
                </div>
            </section>
            <section class="map-and-form">
                <div class="container">
                    <div class="map-and-form-wrapper">
                        <div class="map-left"><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1fBfxW_hmV9TcIn9yzp05BzXvCFKtw_Sx" width="640" height="480"></iframe> </div>
                        <div class="form-rigth">
                      
                        <?php echo  do_shortcode('[contact-form-7 id="226" title="form-main"]') ?>
                            <!--<form id="form" action="#" novalidate class="guruweba_example_form form-body" name="feedback"  >
                                <h2 class="guruweba_example_caption">Вы можите оставить заявку</h2>
                                <div class="form__name">Ваше имя</div>
                                <input type="text" class="_name _req" name="name"  placeholder="Ваше имя...">
                                <div class="form__email">Ваш email</div>
                                <input type="email" class="_email _req" name="email" placeholder="Ваш email...">
                                <div class="form__email">Ваш телефон</div>
                                <input type="tel" class="_phone _req " name="phone" placeholder="Ваш телефон...">
                                <div class="form__massage" >Сообщение</div>
                                <textarea id="_massage" name="details" cols="30" rows="3" placeholder="Сообщение не обязательно..."></textarea>
                                <button class="btn-call btn-form" type="submit" name="submit_btn" value="" >Отправить</button>
                              </form>-->
                        </div>
                    </div>
                </div>
            </section>
        </div> 
        <!--and main-->   
        <?php get_footer() ?>