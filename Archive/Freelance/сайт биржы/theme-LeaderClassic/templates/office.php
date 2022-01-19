<div id="lk-conteyner">
   <body>
        <link href="http://fonts.cdnfonts.com/css/gotham-pro" rel="stylesheet">
        <div class="main-wrapper">
            <div class="down-blur-wrapper"><span class="blur-turquoise blur-down"></span></div>
            <div class="down-blur-wrapper2"><span class="blur-turquoise blur-down"></span></div>
            <header class="header">
                <?php do_action( 'rcl_area_top' ); ?>
                <div class="main-content-wrapper-header">
                    <div class="part-content-wrapper0">
                        <div class="header__logo">
                          <div class="burger-top-menu" id="top-wrapper2"> <img src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/icon-brgmenu.png" alt="" class="brg-mn"></div>
                          <!-- <a href="/"> <img src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/Group_374.svg" alt="" class="header-logo-img-profile-page"></a>-->
                        <button class="top-button btn-sp-rg">Торговля</button>
                        <button class="top-button btn-sp-rg2">Создать обращение</button>
                        </div>
                        <div class="logo-adaptiv-wrapper">
                                <a href="/"> <img src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/Group_414.svg" alt="" class="header-logo-img-profile-page getout-rgt"></a>
                        </div>   
                        <div class="profile-meta-wrapper">
                            <div class="wrapper-meta-icons">
                            <div class="cab_header">
                                <?php do_action( 'rcl_area_top' ); ?>
                            </div>
                            <div class="cab_content">
                                <div class="cab_center">
                                    <div class="lk-sidebar">
                                        <?php// rcl_avatar( 200 ); ?>
                                    </div>
                                    <div class="cab_title">
                                        <h2><?php rcl_username(); ?></h2>
                                    <div class="rcl-action"><?php rcl_action(); ?></div>
                                </div>
                            </div>

                                <div class="cab_footer">
                                    <div class="cab_bttn">
                                        <?php do_action( 'rcl_area_actions' ); ?>
                                    </div>
                                    <div class="cab_bttn_lite">
                                        <?php do_action( 'rcl_area_counters' ); ?>
                                    </div>
                                </div>
                            </div>
                                                     
                              <div class="header-button-wrapper">
                                <button class="header__button-add"><img class="btn__cross" src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/cross.png" alt=""></button>
                                <div class="button-wrapper__text">342$</div>
                              </div>
                              <div class="blinking"><img src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/icons8-облако-диалога-с-точками-32.png" alt="" class="notification-profile"></div>
                               <div class="blinking2"><img src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/icons8-колокол-100.png" alt="" class="notification-profile2 "></div>
                                <?php rcl_avatar( 200 ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main class="main-content" id="main-content">
            <div class="part-content-wrapper1">
              
                    <div class="lower-wrapper-block">
                            <div id="rcl-tabs">
                                <?php if ( is_active_sidebar( 'cab_15_sidebar' ) ) { // если в сайтбаре(виджете) есть контент выводим и контент и сайтбар обернутыми в div cab_content_blk ?>
                                    <div class="cab_content_blk">

                                        <?php do_action( 'rcl_area_tabs' ); ?>

                                        <div class="cab_sidebar">
                                            <?php
                                            if ( function_exists( 'dynamic_sidebar' ) ) {
                                                dynamic_sidebar( 'cab_15_sidebar' );
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php } else { // если нет - выводим только контент и не оборачиваем в див ?>
                                    <?php do_action( 'rcl_area_tabs' ); ?>
                                <?php } ?>
                            </div> 


                        <!-- <div class="lower-wrapper-block__box  lower-wrapper-block__box--grey-one"></div>
                        <div class="lower-wrapper-block__box  lower-wrapper-block__box--turquoise-one"></div>
                        <div class="lower-wrapper-block__box  lower-wrapper-block__box--blue-one"></div>
                        <div class="lower-wrapper-block__box  lower-wrapper-block__box--ligth-gray-one"></div> -->
                    </div>
                </div>
                <!--<div class="part-content-wrapper2">
                        <div class="grafs-wrapper">
                            <img src="<?php// define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/grafs.png" class="grafs-tamplate" alt="">
                        </div>
                </div>-->
            </main>
            <nav class="sidenav" id="sidenav">
                <div class="nav-wrapper" id="nav-wrapper">
                    <div class="top-wrapper" >
                        <!-- <div class="burger"></div>-->
                       <a href="/"> <img src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/Group_414.svg" alt="" class="header-logo-img-profile-page"></a>
                       <a href="/"> <img src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/logo-text.png" alt="" class="header-logo-img-text"></a>
                    </div>
                    <div class="middle-wrapper" id="middle-wrapper">
                         <?php do_action( 'rcl_area_menu' ); ?>
                         
                    </div>
                    <div class="balance-wrapper">
                             <div class="balance">
                                 <div class="balance-txt">Баланс</div>
                                 <div class="balance-rates"><img src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/Rectangle12.png" alt="" class="flag-img-text"> 1,250.00 USD</div>
                                 <div class="balance-rates"><img src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/Rectangle13.png" alt="" class="flag-img-text"> 2,250.00 EUR</div>
                                 <div class="balance-rates"><img src="<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/Rectangle14.png" alt="" class="flag-img-text"> 4,810.15 AZN</div>
                             </div>
                     </div>
                    <div class="down-wrapper">
                        <div class="wrap-txt-img">
                            <img src="<?php  define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/Group_19.svg" class="filter-item__img1" alt="">
                            <div class="txt-support">Поддержка</div>
                        </div>
                       <img src="<?php  define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/fullscreen_icon_144319.svg" class="filter-item__img1" id="top-wrapper" alt="">
                    </div>
                </div>
            </nav>
        </div>
    </body>
</div> 



<script>
//.children[0]
const imginsert  = document.getElementById('tab-button-profile');

const c = imginsert.children[0];

const result = c.innerHTML = `<img src='<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/3232.svg' class='hov-btn-cursor' > 
<div class="txt-cab">Личный кабинет <img src='<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/pngwing.com.png' class='arrow-drop' >
    <div class="droping-menu"> 
        <div class="drop-menu-item">Настройки</div>
        <div class="drop-menu-item exit">Выйти</div>
    </div>
 </div>`;


const imginsert2  = document.getElementById('tab-button-chat');

const c2 = imginsert2.children[0];

const result2 = c2.innerHTML = `<img src='<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/Mask_Group.svg' class='hov-btn-cursor2' >

<div class="txt-cab2">Консоль</div>`;


const imginsert3  = document.getElementById('tab-button-publics');

const c3 = imginsert3.children[0];

const result3 = c3.innerHTML = `<img src='<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/Transfer.svg' class='hov-btn-cursor3'>
<div class="txt-cab3">Операции</div>`;


const imginsert4  = document.getElementById('tab-button-postform');

const c4 = imginsert4.children[0];

const result4 = c4.innerHTML = `<img src='<?php define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');?>/wp-content/themes/custom-theme/assets/img/profile/Group.svg' class='hov-btn-cursor4' >
<div class="txt-cab4">Настройки</div>`;




const sidenav  = document.getElementById('sidenav');
const topwrapper  = document.getElementById('top-wrapper');
const navwrapper  = document.getElementById('nav-wrapper');
const middlewrapper  = document.getElementById('middle-wrapper');
const maincontent  = document.getElementById('main-content');
const txtcab = document.querySelector('.txt-cab');
const txtcab2 = document.querySelector('.txt-cab2');
const txtcab3 = document.querySelector('.txt-cab3');
const txtcab4 = document.querySelector('.txt-cab4');
const hovbtncursor = document.querySelector('.hov-btn-cursor');
const hovbtncursor2 = document.querySelector('.hov-btn-cursor2');
const hovbtncursor3 = document.querySelector('.hov-btn-cursor3');
const hovbtncursor4 = document.querySelector('.hov-btn-cursor4');
const headerlogoimgtext = document.querySelector('.header-logo-img-text');
const wraptxtimg = document.querySelector('.wrap-txt-img');
const downwrapper = document.querySelector('.down-wrapper');
const arrowdrop = document.querySelector('.arrow-drop');
const dropingmenu = document.querySelector('.droping-menu');
const balance = document.querySelector('.balance');



imginsert.addEventListener('mousemove',appear);
imginsert.addEventListener('mousemove',onhover);
imginsert2.addEventListener('mousemove',appear);
imginsert2.addEventListener('mousemove',onhover2);
imginsert3.addEventListener('mousemove',appear);
imginsert3.addEventListener('mousemove',onhover3);
imginsert4.addEventListener('mousemove',appear);
imginsert4.addEventListener('mousemove',onhover4);




imginsert.addEventListener('mouseout', disappear);
imginsert.addEventListener('mouseout', outhover);
imginsert2.addEventListener('mouseout', disappear);
imginsert2.addEventListener('mouseout', outhover2);
imginsert3.addEventListener('mouseout', disappear);
imginsert3.addEventListener('mouseout', outhover3);
imginsert4.addEventListener('mouseout', disappear);
imginsert4.addEventListener('mouseout', outhover4);

topwrapper.addEventListener('click', appear);
arrowdrop.addEventListener('click', appearitems);
arrowdrop.addEventListener('mouseout', desapearitems);


function appear(){
    sidenav.style.width='15%';
    txtcab.style.display = 'inline'; 
    txtcab2.style.display = 'inline'; 
    txtcab3.style.display = 'inline'; 
    txtcab4.style.display = 'inline'; 
    navwrapper.style.width = '90%'; 
    middlewrapper.style.width = '200px';
    hovbtncursor.style.marginLeft = '50px';
    hovbtncursor2.style.marginLeft = '50px';
    hovbtncursor3.style.marginLeft = '50px';
    hovbtncursor4.style.marginLeft = '50px';
    headerlogoimgtext.style.display = 'block';
    wraptxtimg.style.display = 'flex';
    downwrapper.style.justifyContent ='space-between'
    balance.style.display = 'block';

    

}


maincontent.addEventListener('mousemove', disappear);

function disappear (){
  
    sidenav.style.width='5%';
    txtcab.style.display = 'none';
    txtcab2.style.display = 'none';
    txtcab3.style.display = 'none';
    txtcab4.style.display = 'none';
    hovbtncursor.style.marginLeft = '0px';
    hovbtncursor2.style.marginLeft = '0px';
    hovbtncursor3.style.marginLeft = '0px';
    hovbtncursor4.style.marginLeft = '0px';
    headerlogoimgtext.style.display = 'none';
    wraptxtimg.style.display = 'none';
    downwrapper.style.justifyContent='center'
    balance.style.display = 'none';
    


}

function onhover(){
   
    txtcab.style.color = '#6EBB20'; 
  //  hovbtncursor.style.boxShadow='4px 4px 8px 0px  #6EBB20';
  
}
function outhover(){
   
    txtcab.style.color = 'white'; 
    hovbtncursor.style.boxShadow='none';
  
}
function onhover2(){
   
    txtcab2.style.color = '#6EBB20'; 
   // hovbtncursor2.style.boxShadow='4px 4px 8px 0px  #6EBB20';
  
}
function outhover2(){
   
    txtcab2.style.color = 'white'; 
    hovbtncursor2.style.boxShadow='none';
  
}
function onhover3(){
   
    txtcab3.style.color = '#6EBB20'; 
   // hovbtncursor3.style.boxShadow='4px 4px 8px 0px  #6EBB20';
  
}
function outhover3(){
   
    txtcab3.style.color = 'white'; 
   // hovbtncursor3.style.boxShadow='none';
  
}
function onhover4(){
   
    txtcab4.style.color = '#6EBB20'; 
   // hovbtncursor4.style.boxShadow='4px 4px 8px 0px  #6EBB20';
  
}
function outhover4(){
   
    txtcab4.style.color = 'white'; 
   // hovbtncursor4.style.boxShadow='none';
  
}



function appearitems(){
    dropingmenu.style.display = 'block';
   // hovbtncursor.style.marginBottom= '70px ';
}
function desapearitems(){
    dropingmenu.style.display = 'none';
  //  hovbtncursor.style.marginBottom= '0px ';
}
</script>









