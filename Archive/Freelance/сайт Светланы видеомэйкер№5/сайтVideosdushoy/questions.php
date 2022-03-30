<?php
/**
 * Template Name: Ответы на вопросы
 *
**/
get_header();




?>

        
<div class="BlocksLogo">
                    <h1>Ответы на часто-задаваемые вопросы</h1>
                </div>
                <div class="AccordionButtons">

<?php 

// параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name'    => 'questions',
	'orderby'     => 'date',
	'order'       => 'ASC',
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

<button class="accordion"><?php the_field('question')?> </button>
                    <div class="panel">
                      <p><?php the_field('answer_question')?></p>
                    </div>

<?php 
}

wp_reset_postdata(); // сброс
?>
                    <script>
                   
                    var acc = document.getElementsByClassName("accordion");
                    
                    var i;
                    for (i = 0; i < acc.length; i++) {
                      acc[i].addEventListener("click", function() {
                       // this.classList.toggle("active");
                       
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight) {
                          panel.style.maxHeight = null;
                        } else {
                          panel.style.maxHeight = panel.scrollHeight + "px";
                        } 
                      });
                    }
                    </script>
                 
                
                    
                    
                    
                    </div>
<div class="BlocksLogo">
                    <h1>Вопросы об ценах</h1>
                </div>

              <div class="AccordionButtons">

<?php 

// параметры по умолчанию
$my_posts = get_posts( array(
	'numberposts' => -1,
	'category_name'    => 'questions_2',
	'orderby'     => 'date',
	'order'       => 'ASC',
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

<button class="accordion" name="accordion"><?php the_field('head')?></button>
                    <div class="panel">
                      <p><?php the_field('accordion_text')?></p>
                    </div>

<?php 
}

wp_reset_postdata(); // сброс
?>
<script>
        var acc = document.getElementsByName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
           // this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          });
        }
        </script>
     
</div>

<?php
get_footer();