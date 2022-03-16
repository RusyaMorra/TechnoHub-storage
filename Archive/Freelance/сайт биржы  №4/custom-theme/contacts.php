<?php
/* Template Name: contacts
Template Post Type: post, page, single
*/
?>
<?php include 'header.php'; ?>
 <!-- END header -->
 <main class="demo-page">
       <div class="bonus-wrapper">
            
        
            <div class="box2  position-relative mb-3 mb-md-5 pb-xl-5">
            <div class="container">
                <h2 class="title text-center fw-bold mb-1 mb-md-4 ">
                Наши контакты:
                </h2>
               
                  
               <p class="description text-center mb-3 mb-md-4 mb-lg-5 mar-top">
                    За получением информации по различным вопросам деятельности Leader classic просим <br>
                    обращаться по следующим телефонам
                </p>
 

                    
                <p class="description text-center mb-3 mb-md-4 mb-lg-5 mar-top">
                Членство - тел.: +7 (xxx) xxx xx xx<br>
                Листинг - тел.: +7 (xxx) xxx xx xx<br>
                Биржевой рынок - тел.: +7 (xxx) xxx xx xx<br>
                Жалобы и предложения - тел.: +7 (xxx) xxx xx xx
                </p>

                <p class="description text-center mb-3 mb-md-4 mb-lg-5 mar-top">
                Общие вопросы деятельности биржи  тел.: +7 (xxx) xxx xx xx
                </p>
                <p class="description text-center mb-3 mb-md-4 mb-lg-5">
                e-mail: xxxxxxx@XX.ru
                </p>

                <div class="d-flex justify-content-center align-items-center mb-5 mb-md-0 mar-top">
                    <div class="d-flex flex-column justify-content-between align-items-start h-100">        
                        <div class="d-flex mb-3">
                            <a href="#" class="d-block social">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/insta.png" alt="" class="d-block me-2">
                            </a>
                            <a href="#" class="d-block social">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/facebook.png" alt="" class="d-block me-2">
                            </a>
                            <a href="#" class="d-block social">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/vk.png" alt="" class="d-block me-2">
                            </a>
                            <a href="#" class="d-block social">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/youtube.png" alt="" class="d-block">
                            </a>
                        </div>
                    </div>
                </div>
         
            </div> <!-- end container -->
            </div><!-- end box2 -->    
            <span class="blur1 position-dif"></span>
            <div class="form-box position-relative mar-top">
                <div class="blur-form"></div>
                <div class="container position-relative">
                <div class=" d-flex align-items-center justify-content-center">
                <?php echo do_shortcode( '[contact-form-7 id="929" title="Form_new"]' ); ?>
                </div> <!-- end form -->
                </div> <!-- end container -->
                </div>
            </div> <!-- end WRAPPER -->
 
            <span class="blur3 position-dif2"></span>
        </div> 
      
    </main>
<?php include 'footer.php'; ?>
<!-- END header -->






















