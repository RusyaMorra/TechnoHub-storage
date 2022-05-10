
<?php 

/**
 * Template Name: Наш блог
 */
get_header();



?>
<style>
    @media (max-width: 700px) {
     .btn-blog {
    font-size: 15px !important;

  }
 
  .contact-blog {
    margin-top: 55px;
    }

.btn-write-in-viber {
    margin-right: 0;
    margin-top: 20px;
    padding: 13px 4px;
    text-align: center;
}
    }
</style>
 

   <!-- Content
   ================================================== -->
   <div class="content-outer">
        <div class="meta-info">
            <div class="meta-left">
                videosdushoy.ru 
                <span>мы делаем с душой!</span> 
            </div>
            <div class="meta-rigth">
                <div class="btn-get-order-blog btn-blog-wrapper ">
                                    <a data-aos="zoom-in" href="https://invite.viber.com/?g2=AQB6lbXYP6Ovw02OEm3wBht4lvloEGzAdM%2FuGefUV1WZplEpSGqMYGnm%2FES815oO" class="btn-write-in-viber   change-in-blog btn-blog">Написать нам в Viber</a>
                                    <a data-aos="zoom-in" href = "https://videosdushoy.ru/video_templates" class="btn-get-constructor change-in-blog btn-blog">Сделать открытку </a><br>
                                  
                </div> 
                                  
                                
            
                <div class="contact-blog">
                    <div class="gmail-blog">pozdravit.krasivo@gmail.com</div>
                   <a href="https://t.me/VideoSdushoy" class="phone-blog">Telegram@VideoSdushoy</a>
                </div> 
            </div>
        
        </div>
     
      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

         <?php // параметры по умолчанию
            // На какой мы странице?
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            // Параметры запроса и запрос
            $args = array( 
                'posts_per_page' => 10, 
                'category_name' => 'blog', // тут имя категории
                'paged' => $paged,
                'post_type' => 'post' 
            );
            $posts = new WP_Query( $args );

            // Луп
            if ( $posts->have_posts() ) :

                while ( $posts->have_posts() ) : $posts->the_post(); 

        ?> 

            <article class="post">

            <div class="entry-header cf">

            <h1 class = "h1-a"><a href="<?php the_permalink();  ?>" title=""><?php the_field('article_logo')?></a></h1>

            <p class="post-meta">
            
               
                    <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y');  ?></time>
                    <span class="dauthor"> <?php if(function_exists('the_views')) { the_views(); } ?></span><br>
               
                <span class="categories">Категории<?php the_category($separator='/');  ?></span> 
                
                <span class="dauthor">Автор: <?php the_author(); ?></span>
            </p>

            </div>

            <div class="post-thumb">
            <a href="<?php the_permalink();  ?>" title=""> <img src="<?php the_field('article_image') ?>" alt=""></a>
            </div>

            <div class="post-content">
            <?php the_content(); ?>
            <?php the_field('article_short_text') ?>
            
            </div>
            <div class="tags-meta"><?php the_tags($before=null, $separator = ' ', $after='');  ?></div>
            <div class="btn-read-wrapper"><a class="btn-read-next" href="<?php the_permalink();  ?>">Читать далее...</a></div>
            </article> <!-- post end -->
       
         
            
            <?php
            endwhile;  
           
            // Ссылки вперед-назад
            the_posts_pagination();

            wp_reset_postdata();

            endif; ?>
            
                    
        

                    </div> <!-- Primary End-->

                    <div id="secondary" class="four columns end">

                    <?php  get_sidebar(); ?>

                    </div> <!-- Secondary End-->

                </div>

            </div> <!-- Content End-->






 
   <?php get_footer();?>

