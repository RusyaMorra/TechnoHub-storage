
<?php
/* Template Name: Archive Page Custom */
get_header(); ?>

<main class="bonus-page">
       <div class="bonus-wrapper">
            <h2 class="title text-center fw-bold mb-1 mb-md-4 mb">
           Новости компании
            </h2>
            
            <span class="blur2 position-difcenter"></span>
            <span class="blur2 position-difcenter2"></span>
            
       <div class="box8  position-relative mb-3 mb-md-5 pb-xl-5">
                    <div class="container">
                        <?php echo do_shortcode('[bdp_post_slider design="design-7"]');?>
                </div>  </div><!-- end container -->
                <div class="box8  position-relative mb-3 mb-md-5 pb-xl-5">
                    <div class="container">
                        <?php echo do_shortcode('[bdp_post grid="3"]');?>
                </div> <!-- end container -->
             </div><!-- end box4 -->
            

            <span class="blur3 position-dif2"></span>
        </div> 
      
    </main>

        

     
  <div class="sidebar-wrap col-md-3 content-left-wrap">
    <?php get_sidebar(); ?>
  </div>

</div><!-- .container -->

<?php get_footer(); ?>