<?php get_header();?>

   
   <!-- Content
   ================================================== -->
   <div  id="panel" class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

            <article class="post">

               <div class="entry-header cf">

                  <h1><?php the_title();  ?></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y');  ?></time>
                     /
                     <span class="categories"><?php the_category($separator='/');  ?></span>

                  </p>

               </div>

               <div class="post-thumb">
                <?php the_post_thumbnail(/*'thumbnails'*/'post-thumb') ?>
               </div>

               <div class="post-content lh">
               <?php the_content();  ?>
                  <p class="tags">
  			            <span>Теги </span>:
                       <?php the_tags($before=null, $separator = ' ', $after='');  ?>
  			         </p>

                
            </article> <!-- post end -->
                    <!-- respond -->
               <div class="respond">

                  

                  <!-- form -->
                 <?php comment_form( the_id()); ?>
                 <!-- <form name="contactForm" id="contactForm" method="post" action="">
                     
                  <fieldset>

                     <div class="cf">
                        <label for="cName">Name <span class="required">*</span></label>
                        <input name="cName" type="text" id="cName" size="35" value="" />
                     </div>

                     <div class="cf">
                        <label for="cEmail">Email <span class="required">*</span></label>
                        <input name="cEmail" type="text" id="cEmail" size="35" value="" />
                     </div>

                     <div class="cf">
                        <label for="cWebsite">Website</label>
                        <input name="cWebsite" type="text" id="cWebsite" size="35" value="" />
                     </div>

                     <div class="message cf">
                        <label  for="cMessage">Message <span class="required">*</span></label>
                        <textarea name="cMessage"  id="cMessage" rows="10" cols="50" ></textarea>
                     </div>

                     <button type="submit" class="submit">Submit</button>

                  </fieldset>
                  </form> <!-- Form End -->

                  </div> <!-- Respond End -->
            <!-- Comments
            ================================================== -->
            <h3 class="comments-num-text">комментариев всего: <?php get_comments_number( the_id() ); ?> </h3>
            <div id="comments" class="cm-list">
                <!-- commentlist -->
                <ol class="commentlist">

               <?php 
               $comments = get_comments();
                wp_list_comments( $comments );
                
                 ?>
                           <?php comments_template();  ?>
                           
                        
                   
                  </ol> <!-- Commentlist End -->
                

              

            </div>  <!-- Comments End -->

         </div>

         <div id="secondary" class="four columns end">

         <?php  get_sidebar(); ?>


         </div> <!-- Comments End -->

      </div>

   </div> <!-- Content End-->


   <?php get_footer();?>