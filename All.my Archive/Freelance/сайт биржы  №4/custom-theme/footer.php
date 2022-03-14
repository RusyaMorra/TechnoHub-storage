<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-theme
 */

?>

<footer class="footer-home" id="footer-home">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
          <div class="d-flex flex-column justify-content-between align-items-start h-100">
            <a href="/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Group_374.svg" class="logo-footer mb-3" alt="">
            </a>
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
            <a href="#" class="text-white d-block">
              <span class="border-bottom border-white">
                Политика передачи данных
              </span>
            </a>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="d-flex flex-column justify-content-between align-items-start align-items-sm-center h-100">
            <p class="text-grey mb-3">
              Звонок по России бесплатный
            </p>
            <a href="tel:+74952121671" class="fs-4 text-white d-block mb-4">
              8 (495) 212-16-71
            </a>
            <a href="#" class="btn btn-gold fw-bold">
              Перезвоните мне
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->

  <?php wp_footer(); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

</body>

</html>
