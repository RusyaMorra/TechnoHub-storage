<?php
/**
 * Template Name: О нас
 *
**/
get_header();
?>
                    <div class="BlocksLogo">
                    <h1>О нас</h1>
                </div>
                <div class="AboutUs">

                    <div class="AboutUsPic">
                        <img src="<?php the_field('main_image')?>" alt="">
                    </div>
                    <div class="AboutUsText">
                        <div class="AboutUsLogo">
                            <h2><?php the_field('text_logo')?></h2>
                        </div>
                        <div class="AboutUsContent">
                        <?php the_field('main_text')?>
                        </div>
                    </div>
                </div>
            <div class="AccordionButtons">

            <?php 

// параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => 5,
	'category_name'    => 'about_us',
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

<button class="accordion"><?php the_field('about_us_logo')?></button>
                    <div class="panel">
                      <p><?php the_field('about_us_text')?></p>
                    </div>

<?php 
}

wp_reset_postdata(); // сброс
?>
                  <p></p>
                </div>

<!--
                  <script>
                var acc = document.getElementsByClassName("accordion");
                var i;
                for (i = 0; i < acc.length; i++) {
                  acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                      panel.style.maxHeight = null;
                    } else {
                      panel.style.maxHeight = panel.scrollHeight + "px";
                    } 
                  });
                }
                </script> 
                 -->
            </div>


<?php
get_footer();