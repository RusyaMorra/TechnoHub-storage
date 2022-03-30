<?php
/**
 * Template Name: Все услуги
 *
**/
get_header();
?>

<div class="BlocksLogo">
                    <h1>
                        Все наши услуги</h1>
                </div>
                    
                <div class="ProductsPage">
                <?php                   
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

<?php
get_footer();