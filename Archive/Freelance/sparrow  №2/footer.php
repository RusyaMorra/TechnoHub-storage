 <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="footer-nav">
            <?php
                 wp_nav_menu( array(
                'theme_location'  => 'down',           // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                'menu'            => 'нижнее меню',  // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
                                                    // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
            'container'       => 'ul',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
            //	'container_class' => 'nav-wrap',      // (string) class контейнера (div тега)
            //	'container_id'    => 'nav-wrap',      // (string) id контейнера (div тега)
            //   'menu_class'      => '',           // (string) class самого меню (ul тега)
            //    'menu_id'         => '',           // (string) id самого меню (ul тега)
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
	
            <ul class="footer-social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>Copyright &copy; 2014 Sparrow</li> 
               <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>               
            </ul>

         </div>

         <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

      </div>

   </footer> <!-- Footer End-->

   <?php wp_footer(); ?>

</body>

</html>