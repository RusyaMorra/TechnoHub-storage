<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TestSite
 */

get_header();
?>
            <div class="Content"></div>
                  
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
                        
                        <div class="Product">
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
                    
 <form method="post" action="#"   id="form1"   class="form1">   
                   
                    <div class="ContactForm">
                    
                        
                        
                        <div class="ContactFormLogoText">Мы свяжемся с вами для уточнения всех деталей заказа  </div>  
                        <div class="ContactFormItem">
                        <input type="text" name="text" placeholder="Ваше имя">
                        <input type="email" name="email"    placeholder="Ваш Email">
                        <input type="text" name="text" required="required"   placeholder="Ваш телефон *">
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
