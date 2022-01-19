<?php
/* Template Name: Шаблон Главной
Template Post Type: post, page, single
*/
?>

<?php include 'header.php'; ?>
<!-- END header -->






<div class="wrapper">
    <div class="prize-wrapper container">
      <div class="block-prize d-flex align-items-md-center justify-content-between flex-column-reverse flex-md-row">
        <div class="d-flex flex-row-reverse flex-md-row">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prize.png" class="d-block me-3" alt="">
          <p>
            <span class="fw-bold"><?php the_field('заголовок_блока_с_таймером'); ?></span>
            <br><?php the_field('описание_блока_с_таймером'); ?>
          </p>
        </div>
        <div id="countdown" class="countdown d-flex justify-content-md-end">
          <div class="countdown-number">
            <span class="days countdown-time"></span>
            <span>д: </span>
          </div>
          <div class="countdown-number">
            <span class="hours countdown-time"></span>
            <span>ч: </span>
          </div>
          <div class="countdown-number">
            <span class="minutes countdown-time"></span>
            <span>м: </span>
          </div>
          <div class="countdown-number">
            <span class="seconds countdown-time"></span>
            <span>с </span>
          </div>
        </div>
      </div>
    </div> <!-- end container prize-wrapper -->

    <span class="blur2"></span>
    <div class="box1 position-relative ">
      <span class="blur1"></span>
      <div class="container">
        <h1 class="title fw-bold mb-3">
        <?php the_field('заголовок_блока_1'); ?>
        </h1>
        <ul class="ul-box1 position-relative">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box1/arrow.svg" class="arrow" alt="">
          <li class="text-grey fs-30 d-flex">
            <p class="me-1">•</p> <?php the_field('описание_пункта_1'); ?>
          </li>
          <li class="text-grey fs-30 d-flex">
            <p class="me-1">•</p> <?php the_field('описание_пункта_2'); ?>
          </li>
          <li class="text-grey fs-30 d-flex">
            <p class="me-1">•</p> <?php the_field('описание_пункта_3'); ?>
          </li>
        </ul>
        <div class="d-flex btn-box1">
          <a href="<?php the_field('ссылка_кнопки_1'); ?>" class="btn btn-gold d-block mb-3 mb-md-0 me-2 me-md-4 fw-bold">
            <p>
            <?php the_field('наименование_кнопки_1'); ?>
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/check-list.svg" class="check-list" alt="">
          </a>
          <a href="<?php the_field('ссылка_кнопки_2'); ?>" class="btn btn-outline-gold d-block  fw-bold">
            <p>
            <?php the_field('наименование_кнопки_2'); ?>
            </p>
          </a>
        </div>
        <div class="d-flex align-items-center">
          <img src="<?php the_field('изображение_под_кнопками'); ?>" class="user me-2 d-block" alt="">
          <p class="fw-bold user-p">
          <?php the_field('описание_возле_изображения'); ?>
          </p>
        </div>
      </div>
      <div class="hand">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box1/hand.png" alt="">
      </div>
    </div><!-- end box1 -->


    <div class="box2  position-relative mb-3 mb-md-5 pb-xl-5">
      <div class="container">
        <h2 class="title text-center fw-bold mb-1 mb-md-4">
          <?php the_field('заголовок_блока_2'); ?>
        </h2>
        <p class="description text-center mb-3 mb-md-4 mb-lg-5">
          <?php the_field('описание_пункта_1_блок_2'); ?>
        </p>


        <div class="slider-company mb-3 mb-md-4 mb-lg-5">

          <div class="slide mt-lg-5">
            <div class="d-flex justify-content-center align-items-center flex-column">
              <div class="block-company bg-white">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box2/logo1.svg" class="company1" alt="">
              </div>
              <p class="proc">+83.97%</p>
              <p class="price">+72.000₽</p>
            </div>
          </div>
          <div class="slide ">
            <div class="d-flex justify-content-center align-items-center flex-column">
              <div class="block-company bg-white">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box2/logo2.svg" class="company2" alt="">
              </div>
              <p class="proc">+83.97%</p>
              <p class="price">+72.000₽</p>
            </div>
          </div>
          <div class="slide mt-lg-5">
            <div class="d-flex justify-content-center align-items-center flex-column">
              <div class="block-company bg-white">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box2/logo3.svg" class="company3" alt="">
              </div>
              <p class="proc">+83.97%</p>
              <p class="price">+72.000₽</p>
            </div>
          </div>
          <div class="slide ">
            <div class="d-flex justify-content-center align-items-center flex-column">
              <div class="block-company bg-white">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box2/logo4.svg" class="company4" alt="">
              </div>
              <p class="proc">+83.97%</p>
              <p class="price">+72.000₽</p>
            </div>
          </div>
          <div class="slide mt-lg-5">
            <div class="d-flex justify-content-center align-items-center flex-column">
              <div class="block-company bg-white">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box2/logo5.svg" class="company5" alt="">
              </div>
              <p class="proc">+83.97%</p>
              <p class="price">+72.000₽</p>
            </div>
          </div>
          <div class="slide  ">
            <div class="d-flex justify-content-center align-items-center flex-column">
              <div class="block-company bg-white">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box2/logo6.svg" class="company6" alt="">
              </div>
              <p class="proc">+83.97%</p>
              <p class="price">+72.000₽</p>
            </div>
          </div>
        </div> <!-- end slider -->

        <p class="description text-center mb-3 mb-md-4 mb-lg-5">
          <?php the_field('описание_пункта_2_блок_2'); ?>
        </p>

        <div class="d-flex justify-content-center align-items-center mb-5 mb-md-0">
          <a href="<?php the_field('ссылка_кнопки_3'); ?>" class="btn btn-gold fw-bold">
            <p>
            <?php the_field('текст_кнопки_блок_2'); ?> 
            </p>
          </a>
        </div>

      </div> <!-- end container -->
    </div><!-- end box2 -->

    <div class="box3  position-relative mb-3 mb-md-5 pb-xl-5">

      <div class="container">
        <h2 class="title text-center fw-bold mb-1 mb-md-4">
          Инвестиции доступные каждому
        </h2>
        <p class="description text-center mb-3 mb-md-4 mb-lg-5">
          Простой сервис с подсказками и поддержкой 24/7 на каждом этапе
        </p>


        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-lg-5 col-xl-4 mb-3 mb-md-4 mb-xl-0">
            <div class="block-box3 position-relative">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box3/img1.png" alt="">
              <p class="step text-uppercase">шаг 1</p>
              <p class="subtitle">
                Заполнить <br> регистрационную <br> анкету
              </p>
              <p class="description">
                Нужно указать основные данные о себе: имя, номер телефона, e-mail и пароль для входа.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-5 col-xl-4 mb-3 mb-md-4 mb-xl-0">
            <div class="block-box3 position-relative">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box3/img2.png" alt="">
              <p class="step text-uppercase">шаг 2</p>
              <p class="subtitle">
                Внести деньги <br> на счет
              </p>
              <p class="description">
                Вы можете использовать несколько платежных систем для пополнения депозита, включая систему MidexPay и
                кошелек Bitcoin.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-5 col-xl-4 mb-3 mb-md-4 mb-xl-0">
            <div class="block-box3 position-relative">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box3/img3.png" alt="">
              <p class="step text-uppercase">шаг 3</p>
              <p class="subtitle">
                Приступить <br>
                к онлайн-трейдингу
              </p>
              <p class="description">
                Сразу после пополнения депозита торговля через веб-терминал или мобильную платформу будет доступна.
              </p>
            </div>
          </div>
        </div><!-- end slider -->
      </div> <!-- end container -->
    </div><!-- end box3 -->

    <div class="box4  position-relative mb-5 pb-5 pt-4">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box4/img-left.png" alt="" class="podarok-left">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box4/img-right.png" alt="" class="podarok-right">
      <div class="container mb-md-4 pb-xl-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box4/bonus.svg" class="bonus mx-auto d-block position-relative" alt="">
        <h2 class="title text-center fw-bold mb-1 mb-md-4">
          Каждый достоин <br> второго шанса
        </h2>
        <p class="description text-center mb-3 mb-md-4 mb-lg-5">
          Купите свои первые акции без риска, <br class="d-md-none"> мы вернем <br class="d-none d-md-inline">
          вам 100$ на счет в случае проигрыша
        </p>
        <div class="d-flex justify-content-center align-items-center">
          <a href="<?php the_field('ссылка_кнопки_8'); ?>" class="btn btn-gold fw-bold me-2 me-md-3">
            <p>
              Получить бонус
            </p>
          </a>
          <a href="http://cs06542-wordpress-juhkn.tw1.ru/?page_id=987" class="btn btn-outline-gold fw-bold ns">
            <p>
              Открыть демо-счёт
            </p>
          </a>
        </div>

      </div> <!-- end container -->
    </div><!-- end box4 -->
     
    

    <div class="box5 margin-top-space position-relative mb-3 mb-md-5 pb-xl-5">
      <div class="container">
        <h2 class="title text-center fw-bold mb-4 mb-md-5 pb-xl-2">
          Преимущества торговли с  Leader classic
        </h2> 
        <p class="description text-center mb-3 mb-md-4 mb-lg-5">
        Обладая более чем 15 - летним опытом работы и инноваций, мы обеспечиваем<br>
        высококачественный доступ к финансовым рынкам с помощью нашей передовой модели<br>
        исполнения. Откройте для себя мир онлайн-торговли CFD на тысячи инструментов в 6<br>
        классах активов.
        </p>
        <div class="stl">
          <div class="stl2">
            <div class="wrap-1">
              <div class="hov-on col-md-6 col-lg-3 col-xl-3 mb-3">
                <div class=" centr-content">
                  <div class="aquare-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon6.svg" alt="">
                  </div>
                  <p class="subtitle">
                     Форекс
                  </p>
                  <p class="description fnt">
                  Торгуйте 70 основными,второстепенными
                  и экзотическими валютными парами с конкурентоспособными торговыми условиями.
                 
                  </p>
             
                </div>
              </div>
    
              <div class="hov-on col-md-6 col-lg-3 col-xl-3 mb-3 hgt">
                <div class=" centr-content">
                  <div class="aquare-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon6.svg" alt="">
                  </div>
                  <p class="subtitle">
                   Металлы
                  </p>
                  <p class="description  fnt">
                  МеталлыТоргуйте металлическими товарами,такими как Золото, Серебро и платина.
                  
                 
                  </p>
             
                </div>
              </div>
              <div class="hov-on col-md-6 col-lg-3 col-xl-3 mb-3">
                <div class=" centr-content">
                  <div class="aquare-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon6.svg" alt="">
                  </div>
                  <p class="subtitle">
                    Индексы
                  </p>
                  <p class="description  fnt ">
                  Торгуйте спотовыми и фьючерсами на
                  основные и второстепенные индексы
                  CFD со всего мира.
                  </p>
                
                </div>
              </div>
            </div>
            <div class="wrap-2">
              <div class="hov-on col-md-6 col-lg-3 col-xl-3 mb-3">
                <div class=" centr-content">
                  <div class="aquare-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon6.svg" alt="">
                  </div>
                  <p class="subtitle">
                  Криптовалюты
                  </p>
                  <p class="description  fnt">
                 Торгуйте биткоинами, эфиром, Doge и
                  другими CFD на крипто-и альткоины
                
                </p>
              </div>
              </div>
              <div class="hov-on col-md-6 col-lg-3 col-xl-3 mb-3">
                <div class=" centr-content">
                  <div class="aquare-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon6.svg" alt="">
                  </div>
                  <p class="subtitle">
                  Доли
                  </p>
                  <p class="description  fnt">
                  Сотни публичных компаний из США,
                  Великобритании, Франции и Германии
                  доступны для торговли.
                  </p>
              
                </div>
              </div>
              <div class="hov-on col-md-6 col-lg-3 col-xl-3 mb-3">
                <div class=" centr-content">
                 <div class="aquare-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon6.svg" alt="">
                  </div>
                  <p class="subtitle">
                  Энергии
                  </p>
                  <p class="description  fnt">
                  Откройте для себя возможности по
                  сырой нефти Великобритании и США, а
                  также спотовым контрактам на
                  природный газ и будущим контрактам
                  на разницу цен.
                  </p>
               
                </div>
              </div>
      
            </div>
          </div>
        </div>



      </div> <!-- end container -->
    </div><!-- end box5 -->





    <div class="box5  position-relative mb-3 mb-md-5 pb-xl-5">
      <div class="container">
        <h2 class="title text-center fw-bold mb-4 mb-md-5 pb-xl-2">
          100 000+ клиентов <br class="d-md-none"> уже <br class="d-none d-md-inline"> инвестируют с нами
        </h2>
        <div class="row justify-content-center d-none d-md-flex">
          <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon1.svg" alt="">
              <p class="subtitle">
                Представительство компании в Европе
              </p>
              <p class="description">
                В разных странах мира компания открывает собсвенные представительства.
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon1.svg" alt="">
              <p class="subtitle">
                Мгновенный ввод и вывод средств
              </p>
              <p class="description">
                0% комиссия с депозита
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon1.svg" alt="">
              <p class="subtitle">
                Кредитное плечо до 1:1000
              </p>

              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon4.svg" alt="">
              <p class="subtitle">
                Время выполнения заказа - 30 мс
              </p>
              <p class="description">
                Средний показатель по отрасли - 500 мс
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon5.svg" alt="">
              <p class="subtitle">
                250 торговых инструментов
              </p>
              <p class="description">
                Валютные пары, акции, металлы, индексы, облигации
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon6.svg" alt="">
              <p class="subtitle">
                Счета в евро, рублях, долларах США
              </p>
              <p class="description">
                Пополните свой счет и сэкономьте на сборах за конвертацию
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon7.svg" alt="">
              <p class="subtitle">
                15% бонус на первый депозит
              </p>
              <p class="description">
                Может использоваться в торговле и во время просадки
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon8.svg" alt="">
              <p class="subtitle">
                Инновационная торговая платформа МТ5
              </p>
              <p class="description">
                Доступно на IOS и Android
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
        </div>


        <div class="slider-card mb-4 mb-lg-5 pb-5 d-md-none">

          <div class="slide ">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon1.svg" alt="">
              <p class="subtitle">
                Представительство компании в Европе
              </p>
              <p class="description">
                В разных странах мира компания открывает собсвенные представительства.
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="slide ">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon1.svg" alt="">
              <p class="subtitle">
                Мгновенный ввод и вывод средств
              </p>
              <p class="description">
                0% комиссия с депозита
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="slide ">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon1.svg" alt="">
              <p class="subtitle">
                Кредитное плечо до 1:1000
              </p>

              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="slide ">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon4.svg" alt="">
              <p class="subtitle">
                Время выполнения заказа - 30 мс
              </p>
              <p class="description">
                Средний показатель по отрасли - 500 мс
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="slide ">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon5.svg" alt="">
              <p class="subtitle">
                250 торговых инструментов
              </p>
              <p class="description">
                Валютные пары, акции, металлы, индексы, облигации
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="slide ">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon6.svg" alt="">
              <p class="subtitle">
                Счета в евро, рублях, долларах США
              </p>
              <p class="description">
                Пополните свой счет и сэкономьте на сборах за конвертацию
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="slide ">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon7.svg" alt="">
              <p class="subtitle">
                15% бонус на первый депозит
              </p>
              <p class="description">
                Может использоваться в торговле и во время просадки
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>
          <div class="slide ">
            <div class="card-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box5/icon8.svg" alt="">
              <p class="subtitle">
                Инновационная торговая платформа МТ5
              </p>
              <p class="description">
                Доступно на IOS и Android
              </p>
              <div class="text-end">
                <a href="#">
                  Подробнее →
                </a>
              </div>
            </div>
          </div>

        </div> <!-- end slider -->


      </div> <!-- end container -->
    </div><!-- end box5 -->


    <div class="box6  position-relative mb-3 mb-md-5 pb-xl-5">
      <div class="container">
        <div class="row justify-content-center">
           <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center flex-column">
            

            <div class="d-none d-md-block">
                            <svg width="397" height="207"><path d="
                            M8 198.5C8 173.483 12.9274 148.711 22.5009 125.599C32.0745
                            102.486 46.1066 81.4857 63.7962 63.7962C81.4857
                            46.1066 102.486 32.0745 125.599 22.5009C148.711 12.9274
                            173.483 8 198.5 8C223.517 8 248.289 12.9274 271.401
                            22.501C294.514 32.0745 315.514 46.1066 333.204
                            63.7962C350.893 81.4857 364.926 102.486 374.499
                            125.599C384.073 148.711 389 173.483 389 198.5
                          " class="Graphstyled__StyledPath-sc-fej0qa-0 Graphstyled__StyledPathMain-sc-fej0qa-1 gddDMo kCEdyS"></path><path d="
                            M8 198.5C8 173.483 12.9274 148.711 22.5009 125.599C32.0745
                            102.486 46.1066 81.4857 63.7962 63.7962C81.4857
                            46.1066 102.486 32.0745 125.599 22.5009C148.711 12.9274
                            173.483 8 198.5 8C223.517 8 248.289 12.9274 271.401
                            22.501C294.514 32.0745 315.514 46.1066 333.204
                            63.7962C350.893 81.4857 364.926 102.486 374.499
                            125.599C384.073 148.711 389 173.483 389 198.5
                          " stroke="url(#graph_deposit)" class="Graphstyled__StyledPath-sc-fej0qa-0 Graphstyled__StyledPathGradient-sc-fej0qa-2 gddDMo gOkYaY" style="stroke-dashoffset: 600;"></path><defs xmlns="http://www.w3.org/2000/svg"><linearGradient id="graph_deposit" x1="256" y1="126.741" x2="-3.0511e-05" y2="126.741" gradientUnits="userSpaceOnUse"><stop stop-color="#EF2D1D"></stop><stop offset="0.5" stop-color="#FE9E00"></stop><stop offset="1" stop-color="#1BAF5D"></stop></linearGradient></defs></svg>
                        </div>


            <div class="range-box text-center">
              <p class="dohod">
                Доходность
              </p>
              <div class="d-flex align-items-center justify-content-center fs-proc">
                <p>
                  до
                </p>
                &nbsp;
                <p id="rangeValue">6</p>
                &nbsp;
                <p>
                  %
                </p>
              </div>
              <p class="risk">
                <span>
                  Низкий риск
                </span>
              </p>
              <Input class="range" id="input" type="range" name="erg" value="6" min="0" max="54" oninput="change1()"></Input>
              <div class="d-flex justify-content-center align-items-start flex-column">
                <div class="form-check d-flex justify-content-start align-items-center mb-2 mb-md-3">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                  <label class="form-check-label ms-1 ms-md-3" for="flexRadioDefault1">
                    Управляю деньгами сам
                  </label>
                </div>
                <div class="form-check d-flex justify-content-start align-items-center">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                  <label class="form-check-label ms-1 ms-md-3" for="flexRadioDefault2">
                    Доверяю управление
                  </label>
                </div>
              </div>
            </div>

            <div class="d-flex d-md-none justify-content-center justify-content-md-start mb-4">
              <a href="<?php the_field('ссылка_кнопки_3'); ?>" class="btn btn-gold  fw-bold ">
                Получить портфель
              </a>
            </div>


          </div>
          <script type="text/javascript">
            function rangeSlide(value) {
              document.getElementById('rangeValue').innerHTML = value;
            }
          </script>
          <div class="col-12 col-lg-6 text-center text-md-start">
            <h2 id="blockTitle" class="title mb-1 mb-md-4">
Рекомендуем открыть вклад
            </h2>
            <p id="blockText" class="description  mb-3 mb-md-4 mb-lg-5">
              Это самый нерисковый способ сохранить капитал, т.к. все вклады до 1,4 миллиона рублей застрахованы. Вы получите доходность, покрывающую инфляцию, не рискуя своими деньгами.

           </p>
            <div class="d-flex justify-content-center justify-content-md-start">
              <a href="#" class="btn btn-gold  fw-bold " id="blockBtn">
                Подобрать вклад
              </a>
            </div>
          </div>
        </div>
      </div> <!-- end container -->
    </div><!-- end box6 -->

 <div class="box8  position-relative mb-3 mb-md-5 pb-xl-5">
      <div class="container">
        <div class="row justify-content-center">
          
          <div class="col-12 col-md-6">
            <h2 class="title text-center text-md-start   mb-1 mb-md-4">
              Откройте демо счет
ОТТОЧИТЕ ТОРГОВЫЕ НАВЫКИ
            </h2>
            <p class="description text-center text-md-start  mb-3 mb-md-4 mb-lg-5">
              
тестируйте свои стратегии, изучайте самые прибыльные
стратегии из магазина торговых роботов
MetaTrader 5 на демо-счёте.
            </p>
            <div class="d-flex justify-content-center justify-content-md-start mb-5 mb-md-0">
              <a href="#" class="btn btn-outline-secondary d-flex justify-content-center align-items-center me-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box8/ios.svg" class="d-block me-2" alt="">
                <p>
                  Скачать для IOS
                </p>
              </a>
              <a href="#" class="btn btn-outline-secondary d-flex justify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box8/android.svg" class="d-block me-2" alt="">
                <p>
                  Скачать для Android
                </p>
              </a>
            </div>
          </div>
			<div class="col-12 col-md-6 position-relative mb-5">
            <span class="blur3"></span>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/12/all-devices-desktop@2x-1.webp" class="d-block w-100 position-relative" alt="">
          </div>
        </div>
      </div> <!-- end container -->
    </div><!-- end box8 -->



    <div class="box7  position-relative mb-3 mb-md-5 pb-xl-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
            <div class="text-center">
              <p class="title fw-bold">60 000</p>
              <p class="description">
                Активных инвесторов
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
            <div class="text-center">
              <p class="title fw-bold">150+</p>
              <p class="description">
                Торговых инструментов
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
            <div class="text-center">
              <p class="title fw-bold">183 000 USD</p>
              <p class="description">
                Финансовый результат одного из инвесторов
              </p>
            </div>
          </div>
        </div>
      </div> <!-- end container -->
    </div><!-- end box7 -->

	
	
    <div class="box8  position-relative mb-3 mb-md-5 pb-xl-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 position-relative mb-5">
            <span class="blur3"></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box8/phone.png" class="d-block w-100 position-relative" alt="">
          </div>
          <div class="col-12 col-md-6">
            <h2 class="title text-center text-md-start   mb-1 mb-md-4">
              Инвестируйте с телефона
            </h2>
            <p class="description text-center text-md-start  mb-3 mb-md-4 mb-lg-5">
              Покупайте российские и иностранные акции, облигации, валюту и другие продукты в простом и удобном
              мобильном приложении для iOS
              и Android.
            </p>
            <div class="d-flex justify-content-center justify-content-md-start mb-5 mb-md-0">
              <a href="#" class="btn btn-outline-secondary d-flex justify-content-center align-items-center me-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box8/ios.svg" class="d-block me-2" alt="">
                <p>
                  Скачать для IOS
                </p>
              </a>
              <a href="#" class="btn btn-outline-secondary d-flex justify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box8/android.svg" class="d-block me-2" alt="">
                <p>
                  Скачать для Android
                </p>
              </a>
            </div>
          </div>
        </div>
      </div> <!-- end container -->
    </div><!-- end box8 -->




    <div class="box9  position-relative mb-3 mb-md-5 pb-xl-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-4 position-relative d-flex flex-column justify-content-between">
            <div>
              <h2 class="title text-center text-md-start   mb-1 mb-md-4">
                Мне только <br> спросить
              </h2>
              <p class="description text-center text-md-start  mb-3 mb-md-4 mb-lg-5">
                Собрали в подсказках ответы на популярные вопросы
                об инвестициях и сервисе
              </p>
            </div>
            <div class="d-none d-lg-flex justify-content-center justify-content-md-start">
              <a href="<?php the_field('ссылка_кнопки_4'); ?>" class="btn btn-gold  fw-bold ">
                Получить консультацию
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-8">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <div class="d-flex align-items-center">
                      <p class="qtn fw-bold me-2 me-md-3 me-xl-4">?</p>
                      <p class="question">Есть ли плата за обслуживание?</p>
                    </div>
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius laudantium veritatis deleniti eveniet
                    neque ea ab ad ipsam rem repellat.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <div class="d-flex align-items-center">
                      <p class="qtn fw-bold me-2 me-md-3 me-xl-4">?</p>
                      <p class="question">Как вывести деньги со счёта?</p>
                    </div>
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                 Вывести деньги можно 24/7 на расчётный счёт в любом банке — в рублях и в валюте. Мы комиссию не берём, но при выводе валюты её могут взять система валютных переводов и банк получатель.
Деньги от продажи ценных бумаг и валюты поступают на счёт в режиме онлайн и доступны для вывода сразу.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <div class="d-flex align-items-center">
                      <p class="qtn fw-bold me-2 me-md-3 me-xl-4">?</p>
                      <p class="question">Какие налоги?</p>
                    </div>
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                   Налог возникает только тогда, когда вы получили прибыль от вложений. Он будет удержан автоматически — общаться с налоговой не придётся.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                    <div class="d-flex align-items-center">
                      <p class="qtn fw-bold me-2 me-md-3 me-xl-4">?</p>
                      <p class="question">Где хранятся деньги?</p>
                    </div>
                  </button>
                </h2>
                <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                   Ваши деньги будут храниться на брокерских счетах, открытых на ваше имя
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                    <div class="d-flex align-items-center">
                      <p class="qtn fw-bold me-2 me-md-3 me-xl-4">?</p>
                      <p class="question">Как открыть счёт?</p>
                    </div>
                  </button>
                </h2>
                <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Чтобы открыть счёт, войдите в аккаунт и заполните анкету на сайте. Понадобится паспорт гражданина  ИНН и СНИЛС.
Рассмотрение заявки занимает от получаса до пяти дней, после чего вам приходит СМС с результатом. Открыть счёт может только гражданин старше 18 лет. 
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                    <div class="d-flex align-items-center">
                      <p class="qtn fw-bold me-2 me-md-3 me-xl-4">?</p>
                      <p class="question">Как пополнить счёт?</p>
                    </div>
                  </button>
                </h2>
                <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius laudantium veritatis deleniti eveniet
                    neque ea ab ad ipsam rem repellat.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading7">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                    <div class="d-flex align-items-center">
                      <p class="qtn fw-bold me-2 me-md-3 me-xl-4">?</p>
                      <p class="question">Что купить?</p>
                    </div>
                  </button>
                </h2>
                <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Куда вложить — рекомендовать не можем. Но у нас есть Инвестшкола с подсказками, а ещё уровень риска и прогнозы на страницах акций и фондов. Может быть, это поможет вам сделать выбор.

                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex d-lg-none justify-content-center justify-content-md-start mt-3 mt-lg-0 mb-4 mt-lg-0">
              <a href="#" class="btn btn-gold  fw-bold ">
                Получить консультацию
              </a>
            </div>
          </div>
        </div>
      </div> <!-- end container -->
    </div><!-- end box9 -->

</div>
    <div class="box10  position-relative mb-3 mb-md-5 pb-xl-5">
      <div class="container">
        <h2 class="title text-start text-md-center fw-bold mb-4 mb-md-5 pb-xl-2">
          Оставьте заявку <br class="d-md-none"> на открытие счёта
        </h2>
        <div class="row justify-content-center px-3">
          <div class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
            <div class="card-box position-relative">
              <div class="row   align-items-center justify-content-center ">
                <div class="col-12 col-md-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box10/arrow-sm.svg" class="d-block d-md-none   arrow" alt="">
                  <div class="box-img box-img1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box10/icon1.svg" class="d-block" alt="">
                  </div>
                </div>
                <div class="col-12  col-md-8 position-relative">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box10/arrow.svg" class="d-none d-md-block   arrow" alt="">
                </div>
              </div>
              <p class="title ">
                Заполните заявку <br>
                онлайн
              </p>
              <p class="description">
                Необходимо: имя, номер телефона, e-mail и пароль
                для входа.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
            <div class="card-box position-relative">
              <div class="row   align-items-center justify-content-center ">
                <div class="col-12 col-md-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box10/arrow-sm.svg" class="d-block d-md-none   arrow" alt="">
                  <div class="box-img box-img2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box10/icon1.svg" class="d-block" alt="">
                  </div>
                </div>
                <div class="col-12  col-md-8 position-relative">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box10/arrow.svg" class="d-none d-md-block   arrow" alt="">
                </div>
              </div>
              <p class="title ">
                Откроем счет <br>
                за 5 минут
              </p>
              <p class="description">
                Вы можете использовать несколько платежных систем для пополнения депозита, включая систему MidexPay и
                кошелек Bitcoin.
              </p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
            <div class="card-box  position-relative">
              <div class="row   align-items-center justify-content-center ">
                <div class="col-12">
                  <div class="box-img box-img3 ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box10/icon3.svg" class="d-block" alt="">
                  </div>
                </div>

              </div>
              <p class="title ">
                Пополните счёт <br>
                и начните инвестировать
              </p>
              <p class="description">
                Сразу после пополнения депозита будет доступна торговля через веб-терминал или мобильную платформу.
              </p>
            </div>
          </div>
        </div>
      </div> <!-- end container -->
    </div><!-- end box10 -->

    <div class="form-box position-relative">
      <div class="blur-form"></div>
    <div class="container position-relative">
      <div class=" d-flex align-items-center justify-content-center">
      <?php echo do_shortcode( '[contact-form-7 id="929" title="Form_new"]' ); ?>
      </div> <!-- end form -->
    </div> <!-- end container -->
    </div>
  </div> <!-- end WRAPPER -->
 



<?php include 'footer.php'; ?>