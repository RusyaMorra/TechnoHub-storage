<?php get_header();?>
 <main   >
   <!-- Page Title
   ================================================== -->
 <!--  <div id="page-title" >

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>categories<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>-->

   </div> <!-- Page Title End-->

    <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">
         <?php if (have_posts()) {while (have_posts()) {the_post(); ?>
            <article class="post">

               <div class="entry-header cf">

               <h1 class = "h1-a"><a href="<?php the_permalink();  ?>" title=""><?php the_field('article_logo')?></a></h1>

               <p class="post-meta">

                  <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y');  ?></time>
                  
                  <span class="categories">Категории<?php the_category($separator='/');  ?></span> 
                  <span class="dauthor">Author: <?php the_author(); ?></span>
               </p>

               </div>

               <div class="post-thumb">
               <a href="<?php the_permalink();  ?>" title=""> <img src="<?php the_field('article_image') ?>" alt=""></a>
               </div>

               <div class="post-content">

               <?php the_field('article_short_text') ?>

               </div>
               <div class="tags-meta"><?php the_tags($before=null, $separator = ' ', $after='');  ?></div>
               <div class="btn-read-wrapper"><a class="btn-read-next" href="<?php the_permalink();  ?>">Читать далее...</a></div>
              

               
                 
              
            </article> <!-- post end -->
          <?php } //конец if ?>
               <!-- Pagination -->

               <?php the_posts_pagination()?>
          <!--  <nav class="col full pagination">
  			      <ul>
                  <li><span class="page-numbers prev inactive">Prev</span></li>
  				      <li><span class="page-numbers current">1</span></li>
  				      <li><a href="#" class="page-numbers">2</a></li>
                  <li><a href="#" class="page-numbers">3</a></li>
                  <li><a href="#" class="page-numbers">4</a></li>
                  <li><a href="#" class="page-numbers">5</a></li>
                  <li><a href="#" class="page-numbers">6</a></li>
                  <li><a href="#" class="page-numbers">7</a></li>
                  <li><a href="#" class="page-numbers">8</a></li>
                  <li><a href="#" class="page-numbers">9</a></li>
  				      <li><a href="#" class="page-numbers next">Next</a></li>
  			      </ul>
  		      </nav>-->
          <?php } //конец while ?>
              

           
           
          
           

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

          <?php  get_sidebar(); ?>

         </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->


   </main>
 
   <?php get_footer();?>