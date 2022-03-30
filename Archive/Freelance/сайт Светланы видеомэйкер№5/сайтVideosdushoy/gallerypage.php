<?php
/**
 * Template Name: Галлерея
 *
**/
get_header();
?>
                   <div class="BlocksLogo">
                <h1>Галерея</h1>
            </div>     
                <section class="gallery">
                <div class="gallery-list">
                <?php 

// параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name'    => 'pictures_gallery',
	'orderby'     => 'date',
	'order'       => 'DESC',
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


           
                      <a href="<?php the_field('picture')?>" class="gallery-item">
                        <div class="gallery-item-hover">Посмотреть</div>
                        <img src="<?php the_field('picture')?>" alt="alt">
                      </a>
                    

<?php 
}

wp_reset_postdata(); // сброс
?>

</div>
                  </section>
                
                
                  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
                    crossorigin="anonymous"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
                  <script>
                    $(".gallery-list").magnificPopup({
                      delegate: "a",
                      type: "image",
                      gallery: {
                        enabled: true
                      }
                    });
                  </script>

<?php
get_footer();