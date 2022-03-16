<?php
/* Template Name: riski
Template Post Type: post, page, single
*/
  
?>
<?php include 'header.php'; ?>
    <main class="ref-page rinki">
    <div class="ref-wrapper">
         
            <span class="blur2 position-dif11"></span>
            <div class="box2  position-relative mb-3 mb-md-5 pb-xl-5">
            <div class="container">
                <h2 class="title text-center fw-bold mb-1 mb-md-4 ">
                   <?php the_field('заголовок_рынка'); ?>
                </h2> 
                <div class="box7  position-relative mb-3 mb-md-5 pb-xl-5">
             <div class="container">
                    <div class="row justify-content-center">
                    
                </div> <!-- end conta
                </div><!-- end box7 -->
               <p id="blockText"  class="description &nbsp;mb-3 mb-md-4 mb-lg-5" style="text-align: center;">   <?php the_field('описание_рынка');  ?> </p> </div>          </div>           </div> <!-- end container --></div> </main>
   <?php    
   $shortcode  = get_field('список_акций');
      $shortcoderinka  = get_field('шорткод_рынка');
      
      echo do_shortcode( '[stock_market_widget type="ticker-quotes" template="chart2" color="#38443E" assets="'.$shortcode.'" animation="true" api="yf" speed="50" direction="left" pause="true"] ' ); 
   
 
      ?>
               
            <main class="rinki ref-page">
    <div class="ref-wrapper">
              
              
                <div class="box2  position-relative mb-3 mb-md-5 pb-xl-5">

                  
                <?php echo do_shortcode('[stock_market_widget type="comparison" template="cards" color="#7EAC93" assets="'.$shortcode.'" fields="'. $shortcoderinka.'" api="yf" chart_range="1mo" chart_interval="1d"]'); ?>
                  
               
            
               
                <div class="d-flex justify-content-center align-items-center mb-5 mb-md-0">
                <a href="#" class="btn btn-gold fw-bold rs">
                    <p>
                        Участвовать
                    </p>
                </a>
                </div>

              </div> <!-- end container --></div> </main>
            <span class="blur1 position-dif"></span>
            <p class="description text-center mb-3 mb-md-4 mb-lg-5">
             15% от брокерской комиссии по всем клиентам партнера. Выплачивается ежемесячно в течении года с момента регистрации клиента.
            </p>

            <span class="blur3 position-dif2"></span>
       
   
<?php include 'footer.php'; ?>
<!-- END header -->






















