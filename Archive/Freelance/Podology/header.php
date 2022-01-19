<!DOCTYPE html>
<!--start html-->
<html lang="ru" >
<!--start head-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php   bloginfo('description');  ?></title>
        <link rel="icon" href="<?php   bloginfo('template_url');  ?>/assets/images/favicon.ico?v=1.1">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       <?php wp_head()?>
    </head>
    <!--and head-->
    
    <!--start body-->
    <body >
        <!--slideout-->
        <nav id="menu" class="slide-menu">
            <div class="logo2">
                <a class="logo__link" href="<?php the_permalink(); ?>" >
                     <img class="logo-img2" src="<?php   bloginfo('template_url');  ?>/assets/images/logo.jpg" alt="">
                </a>
            </div>
            <div class="wrapper-right2">
                <div class="wrapper-right__log-reg-wrapper2" >
                    <div class="wrapper-right__sign"><a href="<?php  get_template_directory_uri(); ?>/wp-login.php?loggedout=true&wp_lang=ru_RU" class="header__menu-link">Вход</a></div>
                    <div class="wrapper-right__sign mr-buttom"><a href="<?php  get_template_directory_uri(); ?>/wp-login.php?action=register" class="header__menu-link">Регистрация</a></div>
                </div>
                <div class="wrapper-right__language-options2">
         
                           
                </div>
            </div>
            
            <?php   wp_nav_menu( array(
                            'theme_location'  => 'top',           // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                            'menu'            => 'верхнее меню',  // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
                                                        // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                            'container'       => 'nav',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                            'container_class' => 'menu',      // (string) class контейнера (div тега)
                           // 'container_id'    => 'navbar',      // (string) id контейнера (div тега)
                            'menu_class'      => 'header__menu2',           // (string) class самого меню (ul тега)
                          //  'menu_id'         => 'ul',           // (string) id самого меню (ul тега)
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
                           
         
        </nav>
        <!--slideout and -->
      
        <!--start header-->     
        <header class="header" id="header" >
            <div class="container">
                <div class="burgerwrapper toggle-button"> <div id="clickonburger" class="burger "></div> </div>
                <div class="header-wrapper" >
                    <div class="logo">
                    <a class="logo__link" href="<?php the_permalink(); ?>" > 
                        <img class="logo-img" src="<?php   bloginfo('template_url');  ?>/assets/images/logo.jpg" alt="">
                    </a>
                    </div>
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
                           
                    <div class="wrapper-right flexself">
                        <div class="wrapper-right__log-reg-wrapper" id="sign">
                            <div class="wrapper-right__sign"><a href="<?php  get_template_directory_uri(); ?>/wp-login.php?loggedout=true&wp_lang=ru_RU" class="header__menu-link">Вход</a></div>
                            <div class="wrapper-right__sign"><a href="<?php  get_template_directory_uri(); ?>/wp-login.php?action=register" class="header__menu-link">Регистрация</a></div>
                            <div class="wrapper-right__language-options">
                            <div id="hov" class="hov" ></div>
                            <?php   wp_nav_menu( array(
                            'theme_location'  => 'top',           // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                            'menu'            => 'menu lang',  // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
                                                        // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                            'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                            'container_class' => 'lang',      // (string) class контейнера (div тега)
                            // 'container_id'    => 'navbar',      // (string) id контейнера (div тега)
                            // 'menu_class'      => 'header__menu',           // (string) class самого меню (ul тега)
                            // 'menu_id'         => 'ul',           // (string) id самого меню (ul тега)
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
                           
                         
                           </div>
                        </div>
                    </div>
                </div>   
            </div>
        </header>
        <!--and header-->