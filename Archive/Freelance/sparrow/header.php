<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   




   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" > 

    <?php wp_head(); ?>
</head>

<body>

   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
           
              
               <a href="<?php  bloginfo('url'); ?>">
                  <div>  <?php  bloginfo('name'); ?></div>
                  <!-- <img alt="" src="<?php // bloginfo('template_uri') ?> /assets/images/logo.png">-->
                   
                </a>
            </div>


          
            <nav id="nav-wrap">
            <?php
            wp_nav_menu( array(
               'theme_location'  => 'top',           // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
               'menu'            => 'верхнее меню',  // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
                                          // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
               //'container'       => 'nav',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
            //	'container_class' => 'nav-wrap',      // (string) class контейнера (div тега)
            //	'container_id'    => 'nav-wrap',      // (string) id контейнера (div тега)
               'menu_class'      => 'nav',           // (string) class самого меню (ul тега)
               'menu_id'         => 'nav',           // (string) id самого меню (ul тега)
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
               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

            

            </nav> <!-- end #nav-wrap --> 

         </div>

      </div>

   </header> <!-- Header End -->