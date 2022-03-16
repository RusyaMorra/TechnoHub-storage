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

  <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a herf="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" data-toggle="modal" data-target="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ml-1">Select Region</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/assets/js/bundle.js?ver=2.9.0"></script>
    <script src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/assets/js/scripts.js?ver=2.9.0"></script>
    <script src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/assets/js/charts/gd-invest.js?ver=2.9.0"></script>
</body>

</html>



<?php wp_footer(); ?>

  
  <script src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
      </div> 
    </div>
 
    <!-- latest jquery-->

    <!-- feather icon js-->
   
   
    <!-- Sidebar jquery-->
   
 
    <!-- Bootstrap js-->
  
   
    <!-- Plugins JS start
    <script src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/assets/js/prism/prism.min.js"></script>
    <script src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/assets/js/clipboard/clipboard.min.js"></script>
    <script src="<?php echo get_home_url();?>/wp-content/wp-recall/add-on/theme-LeaderClassic-2/assets/js/custom-card/custom-card.js"></script>-->

    <!-- Plugins JS Ends-->
    <!-- Theme js-->
  

   
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>