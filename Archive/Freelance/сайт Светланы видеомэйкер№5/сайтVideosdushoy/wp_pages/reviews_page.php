<?php
/**
 * Template Name: Отзывы о нас
 *
**/
get_header();
?>
<head>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/slider.css">
</head>
 <div class="BlocksLogo">
 <h1>Обзоры</h1>
</div>

<div class="cd-testimonials-wrapper cd-container" id="sl-d">


  <ul class="cd-testimonials">
   


    <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'reviews',
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

<li>

      <p><?php the_field('text_review') ?></p>
      <div class="cd-author">
        <img src="<?php the_field('avatar') ?>" alt="Author image">
        <ul class="cd-author-info">
          <li><?php the_field('name_and_surname') ?></li>
        </ul>
      </div>
    </li>

<?php 
}

wp_reset_postdata(); // сброс
?>    



  </ul>
  <!-- cd-testimonials -->

  <a href="#0" class="cd-see-all">Читать все</a>
</div>
<!-- cd-testimonials-wrapper -->

<div class="cd-testimonials-all">
  <div class="cd-testimonials-all-wrapper">
    <ul>


    <?php 
// параметры по умолчанию
$my_posts = get_posts( array(
	'category_name'    => 'reviews',
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


<li class="cd-testimonials-item">
        <p><?php the_field('text_review') ?></p>
        <div class="cd-author">
          <img src=" <?php the_field('avatar') ?> " alt="Author image">
          <ul class="cd-author-info">
            <li> <?php the_field('name_and_surname') ?> </li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>

<?php 
}

wp_reset_postdata(); // сброс
?> 

    </ul>
  </div>
  <!-- cd-testimonials-all-wrapper -->

  <a style="font-size: 22px;" href="#0" class="close-btn">Close</a>
</div>
<!-- cd-testimonials-all -->
<script src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.1.js"></script>
                <script src="<?php echo get_template_directory_uri();?>/js/masonry.pkgd.min.js"></script>
                <script src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider-min.js"></script>
                <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script> <!-- Resource jQuery -->
<?php
get_footer();