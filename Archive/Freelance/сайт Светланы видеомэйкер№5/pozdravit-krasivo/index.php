<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pozdravit-Krasivo
 */

get_header();
?>

   <div class="preloader">
		<svg class="preloader__image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
			<path fill="currentColor" d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z">
			</path>
		</svg>
	</div>

   <main class="main">

		<section class="central" id="central">
			<div class="central__slider">
				<div class="central__slider-item">
					<img class="central__img" src="<?php the_field('welcomeSlideImage1', "options"); ?>" alt="Счастливые молодожёны">
					<div class="central__box">
						<h2 class="central__title anim-item anim-no-hide">
                  <?php the_field('welcomeTitle1', "options"); ?>

						</h2>
						<p class="central__text anim-item anim-no-hide"><?php the_field('welcomeText1', "options"); ?></p>
						<a class="central__link" href="#">
							Посмотреть
						</a>
					</div>
				</div>
				<div class="central__slider-item">
					<img class="central__img" src="<?php the_field('welcomeSlideImage2', "options"); ?>" alt="Романтический сюрприз">
					<div class="central__box">
						<h2 class="central__title anim-item anim-no-hide">
                  <?php the_field('welcomeTitle2', "options"); ?>
						</h2>
						<p class="central__text anim-item anim-no-hide">
                  <?php the_field('welcomeText2', "options"); ?>
						</p>
						<a class="central__link" href="#">
							Посмотреть
						</a>
					</div>
				</div>
				<div class="central__slider-item">
					<img class="central__img" src="<?php the_field('welcomeSlideImage3', "options"); ?>" alt="Счастливые дети">
					<div class="central__box">
						<h2 class="central__title anim-item anim-no-hide">
                  <?php the_field('welcomeTitle3', "options"); ?>
						</h2>
						<p class="central__text anim-item anim-no-hide">
                  <?php the_field('welcomeText3', "options"); ?>
						</p>
						<a class="central__link" href="#">
							Посмотреть
						</a>
					</div>
				</div>
				<div class="central__slider-item">
					<img class="central__img" src="<?php the_field('welcomeSlideImage4', "options"); ?>" alt="Яркий день рождения">
					<div class="central__box">
						<h2 class="central__title anim-item anim-no-hide">
                  <?php the_field('welcomeTitle4', "options"); ?>
						</h2>
						<p class="central__text anim-item anim-no-hide">
                  <?php the_field('welcomeText4', "options"); ?>
						</p>
						<a class="central__link" href="#">
							Посмотреть
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="about" id="about">
			<div class="container">
				<div class="about__box-title title-box">
					<h2 class="about__title title anim-item anim-no-hide">
						О нас
					</h2>
				</div>
				<div class="about__wrapper">
					<div class="about__box-img anim-item anim-no-hide">
						<img class="about__img" src="<?php the_field('AboutUsImage', 'options'); ?>" alt="Свадьба">
					</div>
					<div class="about__box anim-item anim-no-hide">
						<h1 class="about__box-subtitle">
                  <?php the_field('AboutUsTitle', 'options'); ?>
						</h1>
						<p class="about__box-text">
                  <?php the_field('AboutUsText', 'options'); ?>
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="advantage">
			<div class="container">
				<div class="advantage__title anim-item anim-no-hide">
            <?php the_field('advantageWrapTitle', 'options'); ?>
				</div>
				<div class="advantage__items">
					<div class="advantage__item anim-item anim-no-hide">
						<img class="advantage__item-img" src="<?php the_field('advantageImage1', 'options'); ?>" alt="Люди работают за ноутбуками">
						<h3 class="advantage__item-title">
                  <?php the_field('advantageTitle1', 'options'); ?>
						</h3>
						<p class="advantage__item-text">
                  <?php the_field('advantageText1', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksYoutube', 'options'); ?>">Наш ютуб канал.</a>
						</p>
					</div>
					<div class="advantage__item anim-item anim-no-hide">
						<img class="advantage__item-img" src="<?php the_field('advantageImage2', 'options'); ?>" alt="Оператор готов помочь">
						<h3 class="advantage__item-title">
                  <?php the_field('advantageTitle2', 'options'); ?>
						</h3>
						<p class="advantage__item-text">
                  <?php the_field('advantageText2', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksContacts', 'options'); ?>">Сделать заказ</a>
						</p>
					</div>
					<div class="advantage__item anim-item anim-no-hide">
						<img class="advantage__item-img" src="<?php the_field('advantageImage3', 'options'); ?>" alt="маленькая продуктовая тележка на ноутбуке">
						<h3 class="advantage__item-title">
                  <?php the_field('advantageTitle3', 'options'); ?>
						</h3>
						<p class="advantage__item-text">
                  <?php the_field('advantageText3', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksContacts', 'options'); ?>">Сделать заказ</a>
						</p>
					</div>
					<div class="advantage__item anim-item anim-no-hide">
						<img class="advantage__item-img" src="<?php the_field('advantageImage4', 'options'); ?>" alt="Красивые подарки в коробке">
						<h3 class="advantage__item-title">
                  <?php the_field('advantageTitle4', 'options'); ?>
						</h3>
						<p class="advantage__item-text">
                  <?php the_field('advantageText4', 'options'); ?>
							<a class="advantage__item-link" href="<?php the_field('_linksContacts', 'options'); ?>">Сделать заказ</a>
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="price" id="price">
			<div class="container-max">
				<div class="price__box-title title-box">
					<h2 class="price__title title anim-item anim-no-hide">
               <?php the_field('servicesTitle', 'options'); ?>
					</h2>
				</div>
				<p class="price__text anim-item anim-no-hide fix-invisible"><?php the_field('servicesCall', 'options'); ?><a class="advantage__item-link" href="<?php the_field('_linksPortfolio', 'options'); ?>"><?php the_field('servicesLinkText', 'options'); ?></a>
				</p>
				<div class="price__items">
					<div class="price__item anim-item anim-no-hide">
						<div class="price__img-box">
							<img class="price__item-img" src="<?php the_field('servecesImage1', 'options'); ?>" alt="Свадьба">
							<h3 class="price__item-title">
                     <?php the_field('servicesTextElement1', 'options'); ?>
							</h3>
						</div>
						<div class="price__box">
							<p class="price__item-price">
                     <?php the_field('servicesPrice1', 'options'); ?>
							</p>
							<span class="price__item-date">
								<?php the_field('servicesReleaseTime1', 'options'); ?>
							</span>
						</div>
						<p class="price__item-text">
                  <?php the_field('servicesTextElementOnHover1', 'options'); ?>
						</p>
					</div>
					<div class="price__item anim-item anim-no-hide">
						<div class="price__img-box">
							<img class="price__item-img" src="<?php the_field('servecesImage2', 'options'); ?>" alt="День рождения">
							<h3 class="price__item-title">
                     <?php the_field('servicesTextElement2', 'options'); ?>
							</h3>
						</div>
						<div class="price__box">
							<p class="price__item-price">
                     <?php the_field('servicesPrice2', 'options'); ?>
							</p>
							<span class="price__item-date">
                     <?php the_field('servicesReleaseTime2', 'options'); ?>
							</span>
						</div>
						<p class="price__item-text">
                  <?php the_field('servicesTextElementOnHover2', 'options'); ?>
						</p>
					</div>
					<div class="price__item anim-item anim-no-hide">
						<div class="price__img-box">
							<img class="price__item-img" src="<?php the_field('servecesImage3', 'options'); ?>" alt="Годовщина">
							<h3 class="price__item-title">
                     <?php the_field('servicesTextElement3', 'options'); ?>
							</h3>
						</div>
						<div class="price__box">
							<p class="price__item-price">
                     <?php the_field('servicesPrice3', 'options'); ?>
							</p>
							<span class="price__item-date">
                     <?php the_field('servicesReleaseTime3', 'options'); ?>
							</span>
						</div>
						<p class="price__item-text">
                  <?php the_field('servicesTextElementOnHover3', 'options'); ?>
						</p>
					</div>
					<div class="price__item anim-item anim-no-hide">
						<div class="price__img-box">
							<img class="price__item-img" src="<?php the_field('servecesImage4', 'options'); ?>" alt="Романтика">
							<h3 class="price__item-title">
                     <?php the_field('servicesTextElement4', 'options'); ?>
							</h3>
						</div>
						<div class="price__box">
							<p class="price__item-price">
                     <?php the_field('servicesPrice4', 'options'); ?>
							</p>
							<span class="price__item-date">
                     <?php the_field('servicesReleaseTime4', 'options'); ?>
							</span>
						</div>
						<p class="price__item-text">
                  <?php the_field('servicesTextElementOnHover4', 'options'); ?>
						</p>
					</div>
					<div class="price__item anim-item anim-no-hide">
						<div class="price__img-box">
							<img class="price__item-img" src="<?php the_field('servecesImage5', 'options'); ?>" alt="Два довольных ребёнка играют">
							<h3 class="price__item-title">
                     <?php the_field('servicesTextElement5', 'options'); ?>
							</h3>
						</div>
						<div class="price__box">
							<p class="price__item-price">
                     <?php the_field('servicesPrice5', 'options'); ?>
							</p>
							<span class="price__item-date">
                     <?php the_field('servicesReleaseTime5', 'options'); ?>
							</span>
						</div>
						<p class="price__item-text">
                  <?php the_field('servicesTextElementOnHover5', 'options'); ?>
                  </p>
					</div>
					<div class="price__item anim-item anim-no-hide">
						<div class="price__img-box">
							<img class="price__item-img" src="<?php the_field('servecesImage6', 'options'); ?>" alt="Мрачные похороны">
							<h3 class="price__item-title">
                     <?php the_field('servicesTextElement6', 'options'); ?>
							</h3>
						</div>
						<div class="price__box">
							<p class="price__item-price">
                     <?php the_field('servicesPrice6', 'options'); ?>
							</p>
							<span class="price__item-date">
                     <?php the_field('servicesReleaseTime6', 'options'); ?>
							</span>
						</div>
						<p class="price__item-text">
                  <?php the_field('servicesTextElementOnHover6', 'options'); ?>
						</p>
					</div>
				</div>
				<div class="price__link-box">
					<a class="price__link-btn anim-item anim-no-hide" href="price.php">
						Посмотреть все
					</a>
				</div>
			</div>
		</section>

		<section class="gallery" id="gallery-link">
			<div class="container-max">
				<div class="gallery__box title-box">
					<h2 class="gallery__title title anim-item anim-no-hide">
						Галерея
					</h2>
				</div>
				<p class="gallery__subtitle anim-item anim-no-hide">
					Нажмите на изображение чтоб посмотреть в полном разрешении*
				</p>
				<div class="gallery__items">
					<a class="gallery__link anim-item anim-no-hide" data-fancybox="gallery" href="<?php the_field('GalleryImage1', 'options'); ?>">
						<img class="gallery__img" src="<?php the_field('GalleryImage1', 'options'); ?>" alt="Свадьба">
					</a>
					<a class="gallery__link anim-item anim-no-hide" data-fancybox="gallery" href="<?php the_field('GalleryImage2', 'options'); ?>">
						<img class="gallery__img" src="<?php the_field('GalleryImage2', 'options'); ?>"romance">
					</a>
					<a class="gallery__link anim-item anim-no-hide" data-fancybox="gallery" href="<?php the_field('GalleryImage3', 'options'); ?>">
						<img class="gallery__img" src="<?php the_field('GalleryImage3', 'options'); ?>" alt="Свадьба">
					</a>
					<a class="gallery__link anim-item anim-no-hide" data-fancybox="gallery" href="<?php the_field('GalleryImage4', 'options'); ?>">
						<img class="gallery__img" src="<?php the_field('GalleryImage4', 'options'); ?>"anniversary">
					</a>
					<a class="gallery__link anim-item anim-no-hide" data-fancybox="gallery" href="<?php the_field('GalleryImage5', 'options'); ?>">
						<img class="gallery__img" src="<?php the_field('GalleryImage5', 'options'); ?>" alt="ребёнок">
					</a>
					<a class="gallery__link anim-item anim-no-hide" data-fancybox="gallery" href="<?php the_field('GalleryImage6', 'options'); ?>">
						<img class="gallery__img" src="<?php the_field('GalleryImage6', 'options'); ?>"wedding">
					</a>
					<a class="gallery__link anim-item anim-no-hide" data-fancybox="gallery" href="<?php the_field('GalleryImage7', 'options'); ?>">
						<img class="gallery__img" src="<?php the_field('GalleryImage7', 'options'); ?>"school">
					</a>
					<a class="gallery__link anim-item anim-no-hide" data-fancybox="gallery" href="<?php the_field('GalleryImage8', 'options'); ?>">
						<img class="gallery__img" src="<?php the_field('GalleryImage8', 'options'); ?>" alt="ребёнок">
					</a>
				</div>
				<p class="gallery__text anim-item anim-no-hide">
					Посмотреть больше вы можете в нашем
					<a class="gallery__link-icon" href="<?php the_field('_linksInstagramm', 'options'); ?>">
						Instagram
					</a>
				</p>
			</div>
		</section>

		<section class="sentence" id="sentence">
			<div class="container">
				<div class="sentence__title-box title-box">
					<h2 class="sentence__title title anim-item anim-no-hide">
               <?php the_field('offerTitle', 'options'); ?>
					</h2>
				</div>
				<div class="sentence__wrapper">
					<div class="sentence__box anim-item anim-no-hide">
						<h3 class="sentence__box-subtitle">
                  <?php the_field('offerTitleText', 'options'); ?>
						</h3>
						<p class="sentence__box-text">
                  <?php the_field('offerText', 'options'); ?>
						<h3 class="sentence__box-subtitle">
							<a class="info__list-link-btn" href="<?php the_field('_linksContacts', 'options'); ?>"><?php the_field('offerConnect', 'options'); ?></a>
						</h3>
						</p>
					</div>
					<div class="sentence__box-img">
						<img class="sentence__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/sentence/victory-day.webp" alt="победа">
					</div>
				</div>
			</div>
		</section>

		<section class="portfolio" id="portfolio">
			<div class="container-max">
				<div class="portfolio__title-box title-box">
					<h2 class="portfolio__title title anim-item anim-no-hide">
						Портфолио
					</h2>
				</div>
				<div class="portfolio__buttons">
					<button class="portfolio__btn anim-item anim-no-hide" data-filter="all">
						Посмотреть все
					</button>
					<button class="portfolio__btn anim-item anim-no-hide" data-filter=".birthday">
						Юбилей и День рождения
					</button>
					<button class="portfolio__btn anim-item anim-no-hide" data-filter=".memory">
						Видео в память
					</button>
					<button class="portfolio__btn anim-item anim-no-hide" data-filter=".wedding">
						Свадебное видео
					</button>
					<button class="portfolio__btn anim-item anim-no-hide" data-filter=".baby">
						Детские видеопоздравления
					</button>
					<button class="portfolio__btn anim-item anim-no-hide" data-filter=".miscellanea">
						Разное
					</button>
				</div>
				<div class="portfolio__items anim-item anim-no-hide" id="portfolio__items">
				<?php 
					require "../serverParts/db.php";
					$itemsToDisplay = R::find("main_page_portfolio", "deleted = ?", ["0"]);
					foreach (array_reverse($itemsToDisplay) as $item) {
						$theme = "";
						// exit (var_dump($item->title));
						switch ($item->tag) {
							case "Юбилей и День рождения":
								$theme = "birthday";
								break;
							case "Свадебное видео":
								$theme = "wedding";
								break;
							case "Детские видеопоздравления":
								$theme = "baby";
								break;
							case "Видео в память":
								$theme = "memory";
								break;
							default:
								$theme = "miscellanea";
						}
						echo '<div class="portfolio__item mix '.$theme.'" data-id=\''.$item->id.'\'>';
							echo '<div class="portfolio__img-box">';
								echo '<img class="portfolio__item-img" src="'.$item->image.'" alt="wedding">';
							echo '</div>';
							echo '<div class="portfolio__box">';
								echo '<p class="portfolio__item-name">';
									echo $item->title;
								echo '</p>';
								echo '<div class="portfolio__inner">';
									echo '<p class="portfolio__tag">';
										echo $item->tag;
									echo '</p>';
									echo '<a class="portfolio__link" data-fancybox href="'.$item->utube_link.'">Смотреть</a>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}
				?>
				</div>
				<div class="portfolio__link-box">
					<a class="portfolio__link-btn anim-item anim-no-hide" href="<?php the_field('_linksPortfolio', 'options'); ?>">  
						Посмотреть все
					</a>
				</div>
			</div>
		</section>

		<section class="question" id="question">
			<div class="container">
				<div class="question__box-title title-box">
					<h2 class="question__title title anim-item anim-no-hide">
						Ответы на часто задаваемые вопросы
					</h2>
				</div>
				<p class="question__subtitle anim-item anim-no-hide">
					Ознакомиться со всеми часто задаваемыми вопросами вы можете
					<a class="question__subtitle-link" href="question.php">здесь</a>
				</p>
				<div class="question__list">
					<div class="question__list-item anim-item anim-no-hide">
						<h3 class="question__list-title">
							<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
								<path d="M12,24C5.4,24,0,18.6,0,12S5.4,0,12,0s12,5.4,12,12S18.6,24,12,24z M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10
									   S17.5,2,12,2z" />
								<path d="M12,16c-0.6,0-1-0.4-1-1v-0.7c0-1.5,0.8-2.8,2-3.5c0.8-0.4,1.2-1.3,1-2.1c-0.1-0.8-0.8-1.5-1.6-1.6
									   c-0.6-0.1-1.2,0-1.7,0.4C10.3,7.8,10,8.4,10,9c0,0.6-0.4,1-1,1S8,9.6,8,9c0-1.2,0.5-2.3,1.4-3.1c0.9-0.8,2.1-1.1,3.3-0.9
									   c1.6,0.3,2.9,1.6,3.2,3.2c0.3,1.7-0.5,3.4-2,4.2c-0.6,0.3-0.9,1-0.9,1.8V15C13,15.6,12.6,16,12,16z" />
								<circle cx="12" cy="18" r="1" />
								<path d="M12,19.5c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S12.8,19.5,12,19.5z M12,17.5c-0.3,0-0.5,0.2-0.5,0.5
									   s0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5S12.3,17.5,12,17.5z" />
							</svg>

							<?php the_field('questionsQuestion1', 'options'); ?>
						</h3>
						<p class="question__list-subtitle">
                  <?php the_field('questionsAnswer1', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksContacts', 'options'); ?>">Написать нам.</a>
							&nbsp;
						</p>
					</div>
					<div class="question__list-item anim-item anim-no-hide">
						<h3 class="question__list-title">
							<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
								<path d="M12,24C5.4,24,0,18.6,0,12S5.4,0,12,0s12,5.4,12,12S18.6,24,12,24z M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10
									   S17.5,2,12,2z" />
								<path d="M12,16c-0.6,0-1-0.4-1-1v-0.7c0-1.5,0.8-2.8,2-3.5c0.8-0.4,1.2-1.3,1-2.1c-0.1-0.8-0.8-1.5-1.6-1.6
									   c-0.6-0.1-1.2,0-1.7,0.4C10.3,7.8,10,8.4,10,9c0,0.6-0.4,1-1,1S8,9.6,8,9c0-1.2,0.5-2.3,1.4-3.1c0.9-0.8,2.1-1.1,3.3-0.9
									   c1.6,0.3,2.9,1.6,3.2,3.2c0.3,1.7-0.5,3.4-2,4.2c-0.6,0.3-0.9,1-0.9,1.8V15C13,15.6,12.6,16,12,16z" />
								<circle cx="12" cy="18" r="1" />
								<path d="M12,19.5c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S12.8,19.5,12,19.5z M12,17.5c-0.3,0-0.5,0.2-0.5,0.5
									   s0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5S12.3,17.5,12,17.5z" />
							</svg>

							<?php the_field('questionsQuestion2', 'options'); ?>
						</h3>
						<p class="question__list-subtitle">
                  <?php the_field('questionsAnswer2', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksPortfolio', 'options'); ?>">Наши примеры видео-поздравлений</a>
							<br>
							<a class="advantage__item-link" href="https://pozdravitkrasivo.ru/proshow.php">Готовые проекты для создания видео-поздравлений</a>
							<br>
							<a class="advantage__item-link" href="https://pozdravitkrasivo.ru/training.php">Обучение созданию поздравительного видео</a>
						</p>
					</div>
					<div class="question__list-item anim-item anim-no-hide">
						<h3 class="question__list-title">
							<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
								<path d="M12,24C5.4,24,0,18.6,0,12S5.4,0,12,0s12,5.4,12,12S18.6,24,12,24z M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10
									   S17.5,2,12,2z" />
								<path d="M12,16c-0.6,0-1-0.4-1-1v-0.7c0-1.5,0.8-2.8,2-3.5c0.8-0.4,1.2-1.3,1-2.1c-0.1-0.8-0.8-1.5-1.6-1.6
									   c-0.6-0.1-1.2,0-1.7,0.4C10.3,7.8,10,8.4,10,9c0,0.6-0.4,1-1,1S8,9.6,8,9c0-1.2,0.5-2.3,1.4-3.1c0.9-0.8,2.1-1.1,3.3-0.9
									   c1.6,0.3,2.9,1.6,3.2,3.2c0.3,1.7-0.5,3.4-2,4.2c-0.6,0.3-0.9,1-0.9,1.8V15C13,15.6,12.6,16,12,16z" />
								<circle cx="12" cy="18" r="1" />
								<path d="M12,19.5c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S12.8,19.5,12,19.5z M12,17.5c-0.3,0-0.5,0.2-0.5,0.5
									   s0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5S12.3,17.5,12,17.5z" />
							</svg>

							<?php the_field('questionsQuestion3', 'options'); ?>
						</h3>
						<p class="question__list-subtitle">
                  <?php the_field('questionsAnswer3', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksContacts', 'options'); ?>">Написать нам.</a>
							&nbsp;
						</p>
					</div>
					<div class="question__list-item anim-item anim-no-hide">
						<h3 class="question__list-title">
							<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
								<path d="M12,24C5.4,24,0,18.6,0,12S5.4,0,12,0s12,5.4,12,12S18.6,24,12,24z M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10
									   S17.5,2,12,2z" />
								<path d="M12,16c-0.6,0-1-0.4-1-1v-0.7c0-1.5,0.8-2.8,2-3.5c0.8-0.4,1.2-1.3,1-2.1c-0.1-0.8-0.8-1.5-1.6-1.6
									   c-0.6-0.1-1.2,0-1.7,0.4C10.3,7.8,10,8.4,10,9c0,0.6-0.4,1-1,1S8,9.6,8,9c0-1.2,0.5-2.3,1.4-3.1c0.9-0.8,2.1-1.1,3.3-0.9
									   c1.6,0.3,2.9,1.6,3.2,3.2c0.3,1.7-0.5,3.4-2,4.2c-0.6,0.3-0.9,1-0.9,1.8V15C13,15.6,12.6,16,12,16z" />
								<circle cx="12" cy="18" r="1" />
								<path d="M12,19.5c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S12.8,19.5,12,19.5z M12,17.5c-0.3,0-0.5,0.2-0.5,0.5
									   s0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5S12.3,17.5,12,17.5z" />
							</svg>

							<?php the_field('questionsQuestion4', 'options'); ?>
						</h3>
						<p class="question__list-subtitle">
                  <?php the_field('questionsAnswer4', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksPortfolio', 'options'); ?>">Наши работы.</a>
							&nbsp;
						</p>
					</div>
					<div class="question__list-item anim-item anim-no-hide">
						<h3 class="question__list-title">
							<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
								<path d="M12,24C5.4,24,0,18.6,0,12S5.4,0,12,0s12,5.4,12,12S18.6,24,12,24z M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10
									   S17.5,2,12,2z" />
								<path d="M12,16c-0.6,0-1-0.4-1-1v-0.7c0-1.5,0.8-2.8,2-3.5c0.8-0.4,1.2-1.3,1-2.1c-0.1-0.8-0.8-1.5-1.6-1.6
									   c-0.6-0.1-1.2,0-1.7,0.4C10.3,7.8,10,8.4,10,9c0,0.6-0.4,1-1,1S8,9.6,8,9c0-1.2,0.5-2.3,1.4-3.1c0.9-0.8,2.1-1.1,3.3-0.9
									   c1.6,0.3,2.9,1.6,3.2,3.2c0.3,1.7-0.5,3.4-2,4.2c-0.6,0.3-0.9,1-0.9,1.8V15C13,15.6,12.6,16,12,16z" />
								<circle cx="12" cy="18" r="1" />
								<path d="M12,19.5c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S12.8,19.5,12,19.5z M12,17.5c-0.3,0-0.5,0.2-0.5,0.5
									   s0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5S12.3,17.5,12,17.5z" />
							</svg>

							<?php the_field('questionsQuestion5', 'options'); ?>
						</h3>
						<p class="question__list-subtitle">
                  <?php the_field('questionsAnswer5', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksPortfolio', 'options'); ?>">Посмотреть какие видео заказывают клиенты.</a>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksContacts', 'options'); ?>">Написать нам.</a>
						</p>
					</div>
					<div class="question__list-item anim-item anim-no-hide">
						<h3 class="question__list-title">
							<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
								<path d="M12,24C5.4,24,0,18.6,0,12S5.4,0,12,0s12,5.4,12,12S18.6,24,12,24z M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10
									   S17.5,2,12,2z" />
								<path d="M12,16c-0.6,0-1-0.4-1-1v-0.7c0-1.5,0.8-2.8,2-3.5c0.8-0.4,1.2-1.3,1-2.1c-0.1-0.8-0.8-1.5-1.6-1.6
									   c-0.6-0.1-1.2,0-1.7,0.4C10.3,7.8,10,8.4,10,9c0,0.6-0.4,1-1,1S8,9.6,8,9c0-1.2,0.5-2.3,1.4-3.1c0.9-0.8,2.1-1.1,3.3-0.9
									   c1.6,0.3,2.9,1.6,3.2,3.2c0.3,1.7-0.5,3.4-2,4.2c-0.6,0.3-0.9,1-0.9,1.8V15C13,15.6,12.6,16,12,16z" />
								<circle cx="12" cy="18" r="1" />
								<path d="M12,19.5c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S12.8,19.5,12,19.5z M12,17.5c-0.3,0-0.5,0.2-0.5,0.5
									   s0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5S12.3,17.5,12,17.5z" />
							</svg>

							<?php the_field('questionsQuestion6', 'options'); ?>
						</h3>
						<p class="question__list-subtitle">
                  <?php the_field('questionsAnswer6', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksPortfolio', 'options'); ?>">Наши примеры видео-поздравлений</a>
							<br>
							<a class="advantage__item-link" href="https://pozdravitkrasivo.ru/proshow.php">Готовые проекты - только заменить фото на свои</a>
							<br>
							<a class="advantage__item-link" href="https://pozdravitkrasivo.ru/training.php">Обучение созданию поздравительного видео</a>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksContacts', 'options'); ?>">Написать нам.</a>
							&nbsp;
						</p>
					</div>
					<div class="question__list-item anim-item anim-no-hide">
						<h3 class="question__list-title">
							<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
								<path d="M12,24C5.4,24,0,18.6,0,12S5.4,0,12,0s12,5.4,12,12S18.6,24,12,24z M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10
									   S17.5,2,12,2z" />
								<path d="M12,16c-0.6,0-1-0.4-1-1v-0.7c0-1.5,0.8-2.8,2-3.5c0.8-0.4,1.2-1.3,1-2.1c-0.1-0.8-0.8-1.5-1.6-1.6
									   c-0.6-0.1-1.2,0-1.7,0.4C10.3,7.8,10,8.4,10,9c0,0.6-0.4,1-1,1S8,9.6,8,9c0-1.2,0.5-2.3,1.4-3.1c0.9-0.8,2.1-1.1,3.3-0.9
									   c1.6,0.3,2.9,1.6,3.2,3.2c0.3,1.7-0.5,3.4-2,4.2c-0.6,0.3-0.9,1-0.9,1.8V15C13,15.6,12.6,16,12,16z" />
								<circle cx="12" cy="18" r="1" />
								<path d="M12,19.5c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S12.8,19.5,12,19.5z M12,17.5c-0.3,0-0.5,0.2-0.5,0.5
									   s0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5S12.3,17.5,12,17.5z" />
							</svg>

							<?php the_field('questionsQuestion7', 'options'); ?>
						</h3>
						<p class="question__list-subtitle">
                  <?php the_field('questionsAnswer7', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="<?php the_field('_linksContacts', 'options'); ?>">Написать нам.</a>
						</p>
					</div>
					<div class="question__list-item anim-item anim-no-hide">
						<h3 class="question__list-title">
							<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
								<path d="M12,24C5.4,24,0,18.6,0,12S5.4,0,12,0s12,5.4,12,12S18.6,24,12,24z M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10
				S17.5,2,12,2z" />
								<path d="M12,16c-0.6,0-1-0.4-1-1v-0.7c0-1.5,0.8-2.8,2-3.5c0.8-0.4,1.2-1.3,1-2.1c-0.1-0.8-0.8-1.5-1.6-1.6
				c-0.6-0.1-1.2,0-1.7,0.4C10.3,7.8,10,8.4,10,9c0,0.6-0.4,1-1,1S8,9.6,8,9c0-1.2,0.5-2.3,1.4-3.1c0.9-0.8,2.1-1.1,3.3-0.9
				c1.6,0.3,2.9,1.6,3.2,3.2c0.3,1.7-0.5,3.4-2,4.2c-0.6,0.3-0.9,1-0.9,1.8V15C13,15.6,12.6,16,12,16z" />
								<circle cx="12" cy="18" r="1" />
								<path d="M12,19.5c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S12.8,19.5,12,19.5z M12,17.5c-0.3,0-0.5,0.2-0.5,0.5
				s0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5S12.3,17.5,12,17.5z" />
							</svg>
							<?php the_field('questionsQuestion8', 'options'); ?>
						</h3>
						<p class="question__list-subtitle">
                  <?php the_field('questionsAnswer8', 'options'); ?>
							<br>
							<a class="advantage__item-link" href="https://pozdravitkrasivo.ru/price.php">Стоимость и цена услуг на сайте</a>
							&nbsp;
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="contacts" id="contacts">
			<div class="container">
				<div class="contacts__title-box title-box">
					<h2 class="contacts__title title anim-item anim-no-hide">
						Контакты
					</h2>
				</div>
				<p class="contacts__form-title anim-item anim-no-hide">
					Напишите нам! Укажите свой телефон и почту, чтобы мы могли с Вами связаться *
				</p>
				<form class="contacts__form anim-item anim-no-hide" id="sendform" action="#" method="post" enctype="multipart/form-data">
					<div class="contacts__form-box">
						<input class="contacts__form-input required" type="text" name="name" placeholder="Имя">
						<input class="contacts__form-input required" type="tel" name="tel" placeholder="Телефон*">
						<input class="contacts__form-input required _req _email" type="email" name="email" placeholder="E-mail*">
					</div>
					<textarea class="contacts__form-textarea" name="message" placeholder="Ваш комментарий"></textarea>
					<div class="contacts__form-inner">
						<div class="contacts__wrapper">
							<div class="contacts__file-container">
								<input class="contacts__file" id="contacts__file" type="file" name="file">
								<label class="contacts__file-trigger" for="contacts__file" tabindex="0">
									Выберите файл
								</label>
							</div>
							<p class="contacts__file-return" id="contacts__file-return"></p>
						</div>
						<button class="contacts__form-btn" type="submit" value="Отправить" name="sendMail">
							Оставить заявку
						</button>
					</div>
					<div class="contacts__pop-up">
						<p class="contacts__text-send">
							Ваша заявка успешно отправлена
						</p>
						<p class="contacts__close">X</p>
					</div>
				</form>
				<div class="contacts__box anim-item anim-no-hide">
					<p class="contacts__adrres"></p>
					<a class="contacts__email" href="mailto:<?php the_field('_linksEmail', 'options'); ?>">
						E-mail: <span class="contacts__email-span"><?php the_field('_linksEmail', 'options'); ?></span> 
					</a>
					<a class="contacts__tel" href="tel:<?php the_field('_linksMobile', 'options'); ?>">
						
					</a>
				</div>
				<h3 class="contacts__item-title anim-item anim-no-hide">
					Вы можете получить скидку в <span class="contacts__item-span">10%</span> если выполните данные
					действия*
				</h3>
			</div>
			<div class="contacts__sentence">
				<div class="container">
					<div class="contacts__items">
						<div class="contacts__item anim-item anim-no-hide">
							<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 128 128">
								<g>
									<path d="M91.471,52.654A30.545,30.545,0,0,0,75.333,36.527a1.75,1.75,0,0,0-1.92.373l-7.141,7.14a1.75,1.75,0,0,0,.877,2.95A18.019,18.019,0,0,1,79.035,73.5a17.694,17.694,0,0,1-2.912,3.831L47.982,105.47A18,18,0,1,1,22.518,80.025l6.609-6.61a1.75,1.75,0,0,0,.465-1.646,35.966,35.966,0,0,1-.878-11.263,1.75,1.75,0,0,0-2.982-1.376L13.683,71.18a30.5,30.5,0,0,0,43.134,43.135l28.151-28.15a29.362,29.362,0,0,0,2.629-3.01A30.582,30.582,0,0,0,92.66,55.976,31.734,31.734,0,0,0,91.471,52.654ZM84.815,81.031a26,26,0,0,1-2.322,2.659l-28.15,28.15A27,27,0,0,1,16.157,73.655l8.965-8.965a39.32,39.32,0,0,0,.848,6.933L20.043,77.55a21.5,21.5,0,1,0,30.414,30.395L78.6,79.805a21.135,21.135,0,0,0,3.482-4.578A21.523,21.523,0,0,0,70.841,44.421l4.193-4.192A27.053,27.053,0,0,1,88.245,54.012,28.128,28.128,0,0,1,89.3,56.959h0A27.072,27.072,0,0,1,84.815,81.031Z" />
									<path d="M114.317,13.685a30.533,30.533,0,0,0-43.134,0L43.032,41.835a29.362,29.362,0,0,0-2.629,3.01A30.579,30.579,0,0,0,35.34,72.023a31.747,31.747,0,0,0,1.189,3.323A30.545,30.545,0,0,0,52.667,91.473a1.749,1.749,0,0,0,1.92-.373l7.141-7.14a1.75,1.75,0,0,0-.877-2.95A18.019,18.019,0,0,1,48.965,54.5a17.694,17.694,0,0,1,2.912-3.831L80.018,22.53a18,18,0,1,1,25.464,25.445l-6.609,6.61a1.75,1.75,0,0,0-.465,1.646,35.966,35.966,0,0,1,.878,11.263,1.75,1.75,0,0,0,2.982,1.376l12.049-12.05a30.5,30.5,0,0,0,0-43.135Zm-2.474,40.66-8.965,8.965a39.32,39.32,0,0,0-.848-6.933l5.927-5.927a21.5,21.5,0,1,0-30.414-30.4L49.4,48.2a21.135,21.135,0,0,0-3.482,4.578A21.523,21.523,0,0,0,57.159,83.579l-4.193,4.192A27.053,27.053,0,0,1,39.755,73.988,28.305,28.305,0,0,1,38.7,71.04a27.072,27.072,0,0,1,4.486-24.071,26,26,0,0,1,2.322-2.659l28.15-28.15a27,27,0,0,1,38.186,38.185Z" />
								</g>
							</svg>
							<p class="contacts__text">
								Посетите нашу
								<a class="contacts__item-link" href="https://invite.viber.com/?g2=AQB6lbXYP6Ovw02OEm3wBht4lvloEGzAdM%2FuGefUV1WZplEpSGqMYGnm%2FES815oO&lang=ru" target="_blank">
									ГРУППУ
								</a>
							</p>
						</div>
						<div class="contacts__item anim-item anim-no-hide">
							<svg viewBox="-42 0 512 512.001" xmlns="http://www.w3.org/2000/svg">
								<path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0" />
								<path
									d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0" />
							</svg>
							<p class="contacts__text">
								Отсканируйте QR-код, чтобы присоединиться к сообществу
							</p>
						</div>
						<div class="contacts__item anim-item anim-no-hide">
							<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 498.052 498.052" style="enable-background:new 0 0 498.052 498.052;" xml:space="preserve" width="512" height="512">
								<g>
									<path d="M337.021,37.84h-37.525c0-25.75-15.7-37.84-32.826-37.84H120.974c-16.623,0-32.837,11.519-32.837,37.84H47.602   c-21.416,0-38.837,17.43-38.837,38.846v382.529c0,21.417,17.42,38.837,38.837,38.837h289.419c21.417,0,38.837-17.42,38.837-38.837   V76.686C375.857,55.27,358.437,37.84,337.021,37.84z M118.645,32.826c0-1.281,1.047-2.318,2.329-2.318H266.67   c1.281,0,2.318,1.037,2.318,2.318v40.545c0,1.281-1.037,2.318-2.318,2.318H120.974c-1.281,0-2.329-1.037-2.329-2.318V32.826z    M345.349,459.215c0,4.597-3.732,8.329-8.329,8.329H47.602c-4.586,0-8.329-3.732-8.329-8.329V76.686   c0-4.597,3.742-8.339,8.329-8.339h40.535c0,25.221,15.161,37.85,32.837,37.85H266.67c17.232,0,32.826-12.143,32.826-37.85h37.525   c4.597,0,8.329,3.742,8.329,8.339V459.215z" />
									<path d="M293.842,121.147c-20.358,20.358-14.284,14.284-30.366,30.365l-13.037-13.037c-14.236-14.259-35.851,7.311-21.569,21.569   l23.827,23.827c5.968,5.967,15.631,5.938,21.569,0l41.145-41.145C329.659,128.478,308.13,106.883,293.842,121.147z" />
									<path d="M80.002,167.763h84.405c20.153,0,20.185-30.508,0-30.508H80.002C59.856,137.255,59.806,167.763,80.002,167.763z" />
									<path d="M293.842,201.779c-22.298,22.286-15.539,15.529-30.366,30.355c-8.467-8.468-8.188-8.188-13.037-13.037   c-14.244-14.244-35.842,7.307-21.569,21.579l23.827,23.816c6.017,6.018,15.682,5.888,21.569,0l41.145-41.145   C329.663,209.097,308.115,187.506,293.842,201.779z" />
									<path d="M80.002,248.385h84.405c20.153,0,20.185-30.508,0-30.508H80.002C59.856,217.877,59.805,248.385,80.002,248.385z" />
									<path d="M293.842,282.401c-22.298,22.286-15.552,15.542-30.366,30.355c-8.332-8.32-5.36-5.35-13.037-13.027   c-14.232-14.255-35.841,7.297-21.569,21.569l23.827,23.817c5.962,5.961,15.598,5.971,21.569,0l41.145-41.145   C329.658,289.724,308.119,268.125,293.842,282.401z" />
									<path d="M80.002,329.018h84.405c20.149,0,20.185-30.508,0-30.508H80.002C59.78,298.51,59.871,329.018,80.002,329.018z" />
									<path d="M404.372,145.095l0.61,225.698l27.203,93.558c4.238,14.602,25.047,14.614,29.288,0l27.203-93.558l0.61-225.698   c0-28.05-21.228-42.08-42.457-42.083C425.601,103.01,404.372,117.035,404.372,145.095z M458.778,351.278H434.88V191.284h23.898   V351.278z M453.714,381.786l-6.885,23.674l-6.885-23.674H453.714z M434.88,145.095c0-15.788,23.898-15.797,23.898,0v15.681H434.88   V145.095z" />
									<path d="M80.002,399.064h113.815c20.222,0,20.131-30.508,0-30.508H80.002C59.856,368.556,59.805,399.064,80.002,399.064z" />
									<path d="M272.141,419.87H80.002c-20.18,0-20.156,30.508,0,30.508h192.139C292.321,450.378,292.296,419.87,272.141,419.87z" />
								</g>
							</svg>
							<p class="contacts__text">
								Если нет приложения, установите его
							</p>
						</div>
						<div class="contacts__item anim-item anim-no-hide">
							<svg height="682pt" viewBox="-21 -47 682.66669 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
								<path d="m552.011719-1.332031h-464.023438c-48.515625 0-87.988281 39.464843-87.988281 87.988281v283.972656c0 48.414063 39.300781 87.816406 87.675781 87.988282v128.863281l185.191407-128.863281h279.144531c48.515625 0 87.988281-39.472657 87.988281-87.988282v-283.972656c0-48.523438-39.472656-87.988281-87.988281-87.988281zm50.488281 371.960937c0 27.835938-22.648438 50.488282-50.488281 50.488282h-290.910157l-135.925781 94.585937v-94.585937h-37.1875c-27.839843 0-50.488281-22.652344-50.488281-50.488282v-283.972656c0-27.84375 22.648438-50.488281 50.488281-50.488281h464.023438c27.839843 0 50.488281 22.644531 50.488281 50.488281zm0 0" />
								<path d="m171.292969 131.171875h297.414062v37.5h-297.414062zm0 0" />
								<path d="m171.292969 211.171875h297.414062v37.5h-297.414062zm0 0" />
								<path d="m171.292969 291.171875h297.414062v37.5h-297.414062zm0 0" />
							</svg>
							<p class="contacts__text">
								Вступите и напишите в группе, что решили сделать заказ со скидкой  
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="reviews" id="reviews">
			<div class="container">
				<div class="reviews__title-box title-box">
					<h2 class="reviews__title title anim-item anim-no-hide">
						Отзывы
					</h2>
				</div>
				<div class="reviews__slider">
					<div class="reviews__slider-item anim-item anim-no-hide">
						<h3 class="reviews__slider-title">
							Подарок маме на юбилей к пятидесяти пятилетием
						</h3>
						<img class="reviews__slider-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews/reviews-1.webp" alt="Довольные клиенты">
					</div>
					<div class="reviews__slider-item anim-item anim-no-hide">
						<h3 class="reviews__slider-title">
							Пятьдесят лет родителям
						</h3>
						<img class="reviews__slider-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews/reviews-2.webp" alt="reviews">
					</div>
					<div class="reviews__slider-item anim-item anim-no-hide">
						<h3 class="reviews__slider-title">
							Ролик для группы помощи "Лиде "
						</h3>
						<img class="reviews__slider-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews/reviews-3.webp" alt="reviews">
					</div>
					<div class="reviews__slider-item anim-item anim-no-hide">
						<h3 class="reviews__slider-title">
							Подарок двоюродной сестре
						</h3>
						<img class="reviews__slider-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews/reviews-4.webp" alt="reviews">
					</div>
					<div class="reviews__slider-item anim-item anim-no-hide">
						<h3 class="reviews__slider-title">
							Подарок матери на день рождения
						</h3>
						<img class="reviews__slider-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews/reviews-5.webp" alt="reviews">
					</div>
				</div>
			</div>
		</section>

		<section class="info" id="info">
			<div class="container">
				<div class="info__title-box title-box">
					<h2 class="info__title title anim-item anim-no-hide">
						Информация
					</h2>
				</div>
				<div class="info__items">
					<ul class=" info__list">
						<div class="logo">
							<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="100%" height="100%" viewBox="22.233999252319336 5 55.531463623046875 89.99999237060547">
								<g fill="#ddcb03">
									<path
										d="M77.743 55.792s-6.32 4.875-9.916 12.796a65.51 65.51 0 0 0-1.318 3.116l-1.808-4.81-.004-.013c.096-5.598.374-10.115.501-11.955 4.261-.177 7.687-3.62 7.823-7.954.034-1.029.378-11.972.378-11.972l-5.447 4.851-2.713-5.111-3.046 4.93-5.137-5.184-.326 10.358a326.232 326.232 0 0 0-3.623-8.678c5.398-2.756 7.877-9.199 5.616-14.966L52.37 5l-4.503 9.599-6.571-5.262-1.221 8.317-9.82-3.983 6.352 16.2c2.299 5.864 8.667 8.905 14.584 7.07.928 2.127 2.991 6.95 5.386 13.152-.451 1.469-2.327 8.25-1.114 15.845.551 3.45 1.327 6.595 2.19 9.103a200.092 200.092 0 0 0-6.015-7.086 240.223 240.223 0 0 0-9.118-9.711c2.771-3.119 2.746-7.871-.149-11.003l-8.132-8.796-.482 7.283L28.227 44l1.301 5.639-7.294-.094 8.132 8.796c2.943 3.184 7.788 3.538 11.122.88a239.03 239.03 0 0 1 9.088 9.678c2.124 2.392 3.996 4.6 5.647 6.632-2.122-1.42-4.788-2.904-7.767-4.269-7.907-3.625-15.876-3.165-15.876-3.165s4.852 6.338 12.759 9.963c7.299 3.346 15.568 3.54 15.568 3.54a99.97 99.97 0 0 1 2.988 4.33c.281 2.914.671 5.765 1.208 8.374l.145.696 1.393-.287-.143-.697a70.016 70.016 0 0 1-.856-5.269c.172.295.336.579.487.847l.348.62 1.24-.697-.348-.62a67.66 67.66 0 0 0-2.086-3.446c-.028-.297-.056-.587-.083-.896 0 0 .693-.631 1.737-1.744.752 3.348 1.233 6.082 1.537 8.253l.143 1.023 2.046-.287-.144-1.023c-.442-3.151-1.102-6.48-1.898-9.858 1.954-2.31 4.341-5.553 6.016-9.242 3.596-7.918 3.106-15.885 3.106-15.885zm-13.965-.926a231.451 231.451 0 0 0-.4 7.972 305.805 305.805 0 0 0-3.068-8.712l-.29-.779a8.085 8.085 0 0 0 3.758 1.519z">
									</path>
								</g>
							</svg>
							<svg id="logo-text" xmlns="http://www.w3.org/2000/svg" version="1.1" xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="100%" height="100%" viewBox="3.2300000190734863 -28.579999923706055 462 34.689998626708984">
								<g fill="#ddcb03">
									<path
										d="M26.01 -9.03L26.36 -28.15L3.23 -28.15L3.58 -8.33L3.23 0L10.34 0L10.04 -9.03L10.3 -22.74L19.29 -22.74L19.51 -8.33L19.2 0L26.27 0Z M53.81 -24.98C51.62 -27.38 48.53 -28.58 44.51 -28.58C40.18 -28.58 36.82 -27.29 34.45 -24.7C32.08 -22.11 30.9 -18.43 30.9 -13.66C30.9 -9.15 31.99 -5.67 34.17 -3.21C36.35 -0.75 39.43 0.48 43.42 0.48C47.75 0.48 51.12 -0.85 53.5 -3.51C55.89 -6.17 57.08 -9.92 57.08 -14.75C57.08 -19.17 55.99 -22.58 53.81 -24.98ZM40.63 -22.1C41.44 -22.64 42.53 -22.91 43.9 -22.91C45.35 -22.91 46.49 -22.61 47.3 -22.02C48.12 -21.42 48.71 -20.42 49.09 -19.03C49.47 -17.63 49.66 -15.71 49.66 -13.27C49.66 -11.14 49.48 -9.47 49.12 -8.25C48.75 -7.03 48.16 -6.15 47.35 -5.61C46.53 -5.07 45.43 -4.8 44.03 -4.8C42.61 -4.8 41.48 -5.11 40.65 -5.72C39.82 -6.33 39.22 -7.34 38.84 -8.75C38.46 -10.16 38.27 -12.1 38.27 -14.58C38.27 -16.64 38.46 -18.28 38.84 -19.48C39.22 -20.69 39.81 -21.56 40.63 -22.1Z M79.25 -12.24C78.35 -13.3 76.96 -14.08 75.1 -14.58C76.5 -15.22 77.58 -16.11 78.35 -17.26C79.12 -18.41 79.51 -19.71 79.51 -21.16C79.51 -23.49 78.54 -25.3 76.61 -26.6C74.67 -27.89 71.95 -28.54 68.43 -28.54C65.75 -28.54 63.29 -28.13 61.05 -27.32L60.48 -21.56L61.14 -21.21C63.84 -22.14 66.2 -22.6 68.21 -22.6C69.66 -22.6 70.71 -22.41 71.35 -22.02C71.99 -21.62 72.31 -20.96 72.31 -20.03C72.31 -19.36 72.14 -18.74 71.81 -18.18C71.47 -17.61 70.99 -17.16 70.35 -16.84L64.32 -16.93L63.89 -12.18L64.32 -11.65L70.87 -11.65C72.59 -11.16 73.44 -10.18 73.44 -8.73C73.44 -7.68 72.97 -6.86 72.03 -6.26C71.08 -5.67 69.81 -5.37 68.21 -5.37C67.07 -5.37 65.92 -5.52 64.76 -5.83C63.6 -6.13 62.55 -6.55 61.62 -7.07L61.09 -6.81L59.83 -1.05C60.9 -0.55 62.18 -0.17 63.65 0.09C65.12 0.35 66.65 0.48 68.25 0.48C72.18 0.48 75.22 -0.26 77.37 -1.75C79.52 -3.23 80.6 -5.34 80.6 -8.07C80.6 -9.79 80.15 -11.18 79.25 -12.24Z M112.02 -5.76L108.22 -5.76L108.14 -9.03L108.49 -28.15L91.6 -28.15L90.99 -22.56C90.55 -18.49 90.11 -15.38 89.68 -13.24C89.24 -11.11 88.67 -9.47 87.95 -8.33C87.24 -7.2 86.24 -6.34 84.96 -5.76L82.69 -5.76L82.69 6.11L87.93 5.72L88.8 0L105.91 0L106.87 6.11L112.02 5.72ZM101.59 -5.76L92.6 -5.76C93.74 -6.95 94.64 -8.73 95.31 -11.08C95.98 -13.44 96.56 -16.84 97.05 -21.3L97.23 -22.87L101.42 -22.87L101.68 -8.33Z M135.13 -25.92C133.48 -27.43 131.15 -28.19 128.12 -28.19L116.25 -28.15L116.65 -8.33L116.25 0L123.37 0L123.1 -8.55L125.64 -8.55C128.02 -8.55 130.12 -9 131.92 -9.91C133.72 -10.81 135.12 -12.08 136.11 -13.72C137.1 -15.37 137.59 -17.28 137.59 -19.46C137.59 -22.26 136.77 -24.41 135.13 -25.92ZM129.37 -15.47C128.83 -14.64 128.01 -14.04 126.9 -13.66L123.19 -13.83L123.41 -23L125.77 -23.13C127.28 -23.07 128.39 -22.69 129.1 -21.99C129.82 -21.3 130.17 -20.22 130.17 -18.76C130.17 -17.4 129.9 -16.3 129.37 -15.47Z M162.25 0L154 -28.15L145.49 -28.15L136.41 0L143.35 0L144.14 -4.49L144.49 -5.63L148.85 -5.76L153.91 -5.67L154.31 -4.06L155.05 0ZM152.56 -11L149.33 -10.91L146.1 -11L149.37 -21.69L149.81 -21.69Z M186.51 -12.24C185.64 -13.3 184.26 -14.07 182.36 -14.53C183.73 -15.17 184.79 -16.05 185.53 -17.17C186.27 -18.29 186.64 -19.59 186.64 -21.08C186.64 -23.38 185.8 -25.14 184.11 -26.36C182.42 -27.58 180.08 -28.19 177.08 -28.19L166 -28.15L166.39 -8.33L166 0L166.04 0C168.69 0.17 171.47 0.26 174.38 0.26C178.83 0.26 182.18 -0.41 184.44 -1.77C186.69 -3.12 187.82 -5.21 187.82 -8.03C187.82 -9.78 187.38 -11.18 186.51 -12.24ZM178.33 -22.6C179.07 -22.14 179.44 -21.31 179.44 -20.12C179.44 -19.07 179.2 -18.24 178.72 -17.63C178.24 -17.02 177.51 -16.57 176.52 -16.28L172.76 -16.45L172.94 -23.3L174.34 -23.3C176.26 -23.3 177.59 -23.07 178.33 -22.6ZM179.35 -5.59C178.48 -4.95 177.26 -4.63 175.69 -4.63C175.25 -4.63 174.28 -4.68 172.76 -4.8L172.63 -9.03L172.68 -11.61L177.26 -11.7C178.42 -11.43 179.28 -11.03 179.83 -10.5C180.39 -9.96 180.66 -9.24 180.66 -8.33C180.66 -7.14 180.23 -6.23 179.35 -5.59Z M192.84 -8.33L192.49 0L199.86 0L209.9 -17.54L210.34 -17.54L210.34 -8.33L209.99 0L217.06 0L216.8 -9.03L217.19 -28.15L209.64 -28.15L199.65 -10.65L199.21 -10.65L199.69 -28.32L192.49 -27.97Z M241.89 -27.62L241.5 -28.15L221.07 -28.15L220.64 -22.95L221.07 -22.43L226.61 -22.69L227.92 -22.69L228.14 -8.33L227.75 0L234.82 0L234.56 -9.03L234.77 -22.69L236 -22.69L241.5 -22.43Z M264.67 -15.78C263.15 -17.1 260.93 -17.76 257.99 -17.76L252.27 -17.76L252.45 -28.19L245.29 -28.19L245.68 -8.29L245.29 0L254.41 0C258.34 0 261.41 -0.89 263.62 -2.66C265.83 -4.44 266.94 -6.88 266.94 -9.99C266.94 -12.52 266.18 -14.45 264.67 -15.78ZM258.64 -6.33C258.06 -5.6 257.2 -5.11 256.07 -4.84L252.23 -5.06L252.1 -8.99L252.19 -12.74L255.59 -12.83C256.84 -12.86 257.81 -12.54 258.49 -11.87C259.18 -11.2 259.52 -10.27 259.52 -9.08C259.52 -7.97 259.23 -7.05 258.64 -6.33Z M279.77 -13.79L279.24 -14.27L268.9 -12.7L268.9 -8.42L269.42 -7.9L279.77 -9.51Z M306.65 -1.48C302.89 -6.02 299.53 -10.49 296.57 -14.88L305.82 -28.15L298.27 -28.15L296.7 -25.31L289.85 -15.58L290.06 -28.15L282.91 -28.15L283.26 -8.33L282.91 0L289.98 0L289.72 -9.03L289.8 -13.88C292.19 -9.83 295.17 -5.19 298.75 0.04L299.58 0.48C301.93 0.25 304.26 -0.15 306.56 -0.7Z M329.14 -25.92C327.5 -27.43 325.16 -28.19 322.14 -28.19L310.27 -28.15L310.66 -8.33L310.27 0L317.38 0L317.12 -8.55L319.65 -8.55C322.04 -8.55 324.13 -9 325.94 -9.91C327.74 -10.81 329.14 -12.08 330.12 -13.72C331.11 -15.37 331.61 -17.28 331.61 -19.46C331.61 -22.26 330.79 -24.41 329.14 -25.92ZM323.38 -15.47C322.84 -14.64 322.02 -14.04 320.92 -13.66L317.21 -13.83L317.43 -23L319.78 -23.13C321.3 -23.07 322.41 -22.69 323.12 -21.99C323.83 -21.3 324.19 -20.22 324.19 -18.76C324.19 -17.4 323.92 -16.3 323.38 -15.47Z M356.26 0L348.02 -28.15L339.51 -28.15L330.43 0L337.37 0L338.15 -4.49L338.5 -5.63L342.87 -5.76L347.93 -5.67L348.32 -4.06L349.06 0ZM346.58 -11L343.35 -10.91L340.12 -11L343.39 -21.69L343.83 -21.69Z M378.69 -27.1C376.51 -28.06 374.08 -28.54 371.41 -28.54C366.98 -28.54 363.57 -27.26 361.15 -24.7C358.74 -22.14 357.53 -18.52 357.53 -13.83C357.53 -9.21 358.66 -5.67 360.93 -3.23C363.2 -0.79 366.53 0.44 370.93 0.44C373.28 0.44 375.48 0.03 377.52 -0.79L378.08 -6.59L377.47 -6.94C376.6 -6.47 375.63 -6.11 374.55 -5.85C373.47 -5.59 372.45 -5.45 371.49 -5.45C367.16 -5.45 364.99 -8.51 364.99 -14.62C364.99 -17.44 365.49 -19.51 366.5 -20.82C367.5 -22.12 369.05 -22.78 371.14 -22.78C372.13 -22.78 373.14 -22.63 374.18 -22.32C375.21 -22.02 376.13 -21.59 376.95 -21.03L377.43 -21.3Z M383.49 -8.33L383.15 0L390.52 0L400.56 -17.54L400.99 -17.54L400.99 -8.33L400.64 0L407.71 0L407.45 -9.03L407.84 -28.15L400.3 -28.15L390.3 -10.65L389.87 -10.65L390.35 -28.32L383.15 -27.97Z M434.77 -12.24C433.9 -13.3 432.51 -14.07 430.62 -14.53C431.99 -15.17 433.05 -16.05 433.79 -17.17C434.53 -18.29 434.9 -19.59 434.9 -21.08C434.9 -23.38 434.06 -25.14 432.37 -26.36C430.68 -27.58 428.34 -28.19 425.34 -28.19L414.26 -28.15L414.65 -8.33L414.26 0L414.3 0C416.95 0.17 419.73 0.26 422.64 0.26C427.09 0.26 430.44 -0.41 432.7 -1.77C434.95 -3.12 436.08 -5.21 436.08 -8.03C436.08 -9.78 435.64 -11.18 434.77 -12.24ZM426.59 -22.6C427.33 -22.14 427.7 -21.31 427.7 -20.12C427.7 -19.07 427.46 -18.24 426.98 -17.63C426.5 -17.02 425.77 -16.57 424.78 -16.28L421.02 -16.45L421.2 -23.3L422.59 -23.3C424.51 -23.3 425.85 -23.07 426.59 -22.6ZM427.61 -5.59C426.74 -4.95 425.52 -4.63 423.95 -4.63C423.51 -4.63 422.54 -4.68 421.02 -4.8L420.89 -9.03L420.94 -11.61L425.52 -11.7C426.68 -11.43 427.54 -11.03 428.09 -10.5C428.65 -9.96 428.92 -9.24 428.92 -8.33C428.92 -7.14 428.49 -6.23 427.61 -5.59Z M461.96 -24.98C459.77 -27.38 456.68 -28.58 452.66 -28.58C448.33 -28.58 444.97 -27.29 442.6 -24.7C440.23 -22.11 439.05 -18.43 439.05 -13.66C439.05 -9.15 440.14 -5.67 442.32 -3.21C444.5 -0.75 447.58 0.48 451.57 0.48C455.91 0.48 459.27 -0.85 461.65 -3.51C464.04 -6.17 465.23 -9.92 465.23 -14.75C465.23 -19.17 464.14 -22.58 461.96 -24.98ZM448.78 -22.1C449.59 -22.64 450.68 -22.91 452.05 -22.91C453.51 -22.91 454.64 -22.61 455.45 -22.02C456.27 -21.42 456.87 -20.42 457.24 -19.03C457.62 -17.63 457.81 -15.71 457.81 -13.27C457.81 -11.14 457.63 -9.47 457.27 -8.25C456.9 -7.03 456.31 -6.15 455.5 -5.61C454.68 -5.07 453.58 -4.8 452.18 -4.8C450.76 -4.8 449.63 -5.11 448.8 -5.72C447.97 -6.33 447.37 -7.34 446.99 -8.75C446.61 -10.16 446.42 -12.1 446.42 -14.58C446.42 -16.64 446.61 -18.28 446.99 -19.48C447.37 -20.69 447.96 -21.56 448.78 -22.1Z">
									</path>
								</g>
							</svg>
						</div>
						<h3 class="info__list-title anim-item anim-no-hide">
							Навигация
						</h3>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link" href="#central">
								Главная
							</a>
						</li>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link" href="#about">
								О нас
							</a>
						</li>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link" href="#price">
								Услуги
							</a>
						</li>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link" href="#sentence">
								Предложения
							</a>
						</li>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link" href="#portfolio">
								Примеры робот
							</a>
						</li>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link" href="<?php the_field('_linksContacts', 'options'); ?>">
								Контакты
							</a>
						</li>
					</ul>
					<ul class="info__list">
						<h3 class="info__list-title anim-item anim-no-hide">
							Дополнительная
							<br>
							информация
						</h3>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link-btn" href="https://pozdravitkrasivo.ru/training.php">Учимся создавать видео из фото</a>
						</li>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link-btn" href="https://pozdravitkrasivo.ru/index.php#question">Ответы на часто задаваемые вопросы</a>
						</li>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link-btn" href="https://ok.ru/profile/581418301875/album/904592591027">Ваши отзывы</a>
						</li>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link-btn" href="mailto:<?php the_field('_linksEmail', 'options'); ?>">
								Партнерам
							</a>
						</li>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link-btn" href="mailto:<?php the_field('_linksEmail', 'options'); ?>">
								Юр. информация
							</a>
						</li>
						<li class="info__list-item anim-item anim-no-hide">
							<a class="info__list-link-btn" href="https://invite.viber.com/?g2=AQB6lbXYP6Ovw02OEm3wBht4lvloEGzAdM%2FuGefUV1WZplEpSGqMYGnm%2FES815oO&lang=ru" target="_blank">
								Наша группа в
								<span class="info__list-span">Viber</span>
							</a>
						</li>
					</ul>
					<div class="info__list-icons">
						<h3 class="info__list-title anim-item anim-no-hide">
							Мы в социальных сетях
						</h3>
						<div class="info__list-wrapper">
							<a class="info__link-icon anim-item anim-no-hide" href="<?php the_field('_linksYoutube', 'options'); ?>" target="_blank"> 
								<svg id="youtube" height="682pt" viewBox="-21 -117 682.66672 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
									<path d="m626.8125 64.035156c-7.375-27.417968-28.992188-49.03125-56.40625-56.414062-50.082031-13.703125-250.414062-13.703125-250.414062-13.703125s-200.324219 0-250.40625 13.183593c-26.886719 7.375-49.03125 29.519532-56.40625 56.933594-13.179688 50.078125-13.179688 153.933594-13.179688 153.933594s0 104.378906 13.179688 153.933594c7.382812 27.414062 28.992187 49.027344 56.410156 56.410156 50.605468 13.707031 250.410156 13.707031 250.410156 13.707031s200.324219 0 250.40625-13.183593c27.417969-7.378907 49.03125-28.992188 56.414062-56.40625 13.175782-50.082032 13.175782-153.933594 13.175782-153.933594s.527344-104.382813-13.183594-154.460938zm-370.601562 249.878906v-191.890624l166.585937 95.945312zm0 0" />
								</svg>
							</a>
							<a class="info__link-icon anim-item anim-no-hide" href="<?php the_field('_linksTelegram', 'options'); ?>" target="_blank">
								<svg id="telegram" width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z" />
								</svg>
							</a>
							<a class="info__link-icon anim-item anim-no-hide" href="<?php the_field('_linksVk', 'options'); ?>" target="_blank">
								<svg id="vk" height="512px" style="enable-background:new 0 0 512 512;" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
									<g>
										<g>
											<g>
												<g>
													<path
														d="M250.895,391.347h28.514c0,0,8.615-0.952,13.004-5.709c4.059-4.364,3.904-12.563,3.904-12.563      s-0.563-38.366,17.213-44.022c17.508-5.562,39.994,37.091,63.824,53.506c18.014,12.406,31.707,9.688,31.707,9.688l63.736-0.899      c0,0,33.342-2.062,17.535-28.349c-1.279-2.148-9.215-19.437-47.391-54.968c-39.967-37.204-34.604-31.164,13.537-95.492      c29.32-39.175,41.045-63.101,37.373-73.329c-3.49-9.749-25.049-7.175-25.049-7.175l-71.705,0.421c0,0-5.311-0.721-9.273,1.643      c-3.854,2.33-6.328,7.716-6.328,7.716s-11.361,30.321-26.512,56.108c-31.945,54.394-44.736,57.267-49.959,53.884      c-12.141-7.862-9.094-31.642-9.094-48.508c0-52.726,7.965-74.704-15.539-80.385c-7.818-1.885-13.541-3.142-33.492-3.348      c-25.594-0.272-47.277,0.088-59.531,6.097c-8.174,4.009-14.47,12.953-10.622,13.459c4.743,0.629,15.479,2.9,21.178,10.679      c7.369,10.017,7.098,32.569,7.098,32.569s4.232,62.048-9.875,69.77c-9.695,5.292-22.962-5.509-51.448-54.883      c-14.583-25.267-25.618-53.233-25.618-53.233s-2.117-5.197-5.905-7.98c-4.594-3.381-11.039-4.453-11.039-4.453l-68.175,0.413      c0,0-10.234,0.305-13.992,4.754c-3.338,3.984-0.268,12.176-0.268,12.176S72.09,274.148,132.522,337.276      C187.965,395.146,250.895,391.347,250.895,391.347L250.895,391.347z M250.895,391.347" />
												</g>
											</g>
										</g>
									</g>
									<g />
								</svg>
							</a>
							<a class="info__link-icon anim-item anim-no-hide" href="<?php the_field('_linksOk', 'options'); ?>" target="_blank">
								<svg id="ok" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M 8.2624472,9.720363 C 8.8999741,9.575357 9.5089991,9.323347 10.062522,8.975332 10.479539,8.696321 10.591544,8.132297 10.312533,7.71528 10.044521,7.314263 9.5104991,7.193258 9.0949821,7.438768 c -1.2750533,0.797534 -2.8951208,0.797534 -4.170174,0 C 4.5012905,7.171757 3.9422672,7.298762 3.674756,7.72128 c 0,10e-4 0,0.002 -10e-4,0.0025 -0.2670111,0.423518 -0.1400058,0.983041 0.2835118,1.250052 l 10e-4,10e-4 c 0.552523,0.347515 1.1610483,0.600025 1.7980749,0.744031 l -1.7325722,1.732572 c -0.3535147,0.347515 -0.360015,0.915039 -0.014001,1.268553 l 0.015001,0.015 C 4.1967778,12.911996 4.4297875,13 4.6617972,13 4.8943069,13 5.1268165,12.912 5.2993237,12.734989 l 1.7105713,-1.702071 1.7020711,1.703071 c 0.360015,0.347514 0.935039,0.338014 1.283053,-0.0225 0.3390139,-0.351515 0.3390139,-0.909038 0,-1.260052 L 8.2624472,9.720363 Z M 7.009895,7.194258 C 8.7199661,7.192258 10.105024,5.8072 10.107524,4.097629 10.107524,2.390058 8.7174661,1 7.009895,1 5.3023239,1 3.9122659,2.390058 3.9122659,4.098629 3.9147659,5.8087 5.3003238,7.193758 7.009895,7.194758 Z m 0,-4.378682 c 0.7080295,10e-4 1.2815534,0.575024 1.2820534,1.282553 0,0.70803 -0.5740239,1.281553 -1.2820534,1.282554 C 6.3023655,5.379683 5.7288416,4.806659 5.7273416,4.098629 5.7283416,3.3901 6.3023655,2.816576 7.009895,2.815076 Z" />
								</svg>
							</a>
							<a class="info__link-icon anim-item anim-no-hide" href="https://www.facebook.com/groups/3646455008698749" target="_blank">
								<svg id="facebook" width="12" height="21" viewBox="0 0 12 21" xmlns="http://www.w3.org/2000/svg">
									<path d="M3.85156 20.9839V12.0386H0.84375V8.48389H3.85156V5.67139C3.85156 4.18701 4.26823 3.04118 5.10156 2.23389C5.9349 1.40055 7.04167 0.983887 8.42188 0.983887C9.54167 0.983887 10.4531 1.03597 11.1562 1.14014V4.3042H9.28125C8.57812 4.3042 8.09635 4.46045 7.83594 4.77295C7.6276 5.03337 7.52344 5.45003 7.52344 6.02295V8.48389H10.8438L10.375 12.0386H7.52344V20.9839H3.85156Z" />
								</svg>
							</a>
						</div>
						<div class="info__wrapper">
							<p class="info__text">
								Способы оплаты:
							</p>
							<div class="info__box-img anim-item anim-no-hide">
								<svg id="visa" xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" viewBox="0 0 192.756 192.756">
									<g fill-rule="evenodd" clip-rule="evenodd">
										<path fill="transparent" d="M0 0h192.756v192.756H0V0z" />
										<path d="M189.922 50.809c0-8.986-4.67-13.444-13.729-13.444H16.562c-4.528 0-7.854 1.203-10.048 3.679-2.476 2.477-3.68 5.661-3.68 9.765v91.138c0 4.104 1.204 7.217 3.68 9.764 2.548 2.477 5.803 3.68 10.048 3.68h159.631c9.059 0 13.729-4.527 13.729-13.443V50.809zm-13.729-11.321c7.5 0 11.322 3.821 11.322 11.321v91.138c0 7.57-3.822 11.32-11.322 11.32H16.562c-3.609 0-6.368-1.061-8.42-3.184-2.123-2.053-3.184-4.883-3.184-8.137V50.809c0-7.5 3.75-11.321 11.604-11.321h159.631z" fill="#315881" />
										<path d="M17.835 44.724c-3.042 0-4.953.495-6.014 1.557-.92 1.203-1.344 3.184-1.344 6.085v19.741h171.802V52.366c0-5.165-2.549-7.642-7.643-7.642H17.835z" fill="#315881" />
										<path d="M10.477 140.107c0 5.234 2.476 7.924 7.358 7.924h156.801c5.094 0 7.643-2.689 7.643-7.924v-19.742H10.477v19.742z" fill="#dfa43b" />
										<path
											d="M67.367 80.528c0 .92-.142 1.627-.495 2.123l-12.383 21.582-.779-26.323H33.898l6.651 3.184c1.91 1.203 2.901 2.759 2.901 4.741l1.839 27.951h9.694l23.21-35.876H66.306c.707.637 1.061 1.627 1.061 2.618zM147.467 78.971l.777-1.062h-12.1c.424.424.566.637.566.778-.143.565-.426.92-.566 1.344l-17.619 32.124c-.424.566-.85 1.062-1.344 1.629h9.977l-.496-1.062c0-.92.496-2.617 1.557-5.023l2.123-3.963h10.26c.426 3.326.709 6.086.85 8.139l-.85 1.91h12.383l-1.84-2.689-3.678-32.125zm-7.36 19.742h-7.359l6.297-12.1 1.062 12.1zM109.539 76.07c-3.82 0-7.076 1.062-9.977 3.184-3.185 1.84-4.741 4.175-4.741 7.077 0 3.326 1.132 6.227 3.396 8.42l6.865 4.74c2.477 1.77 3.68 3.326 3.68 4.742 0 1.344-.639 2.547-1.84 3.467-1.203.92-2.549 1.344-4.246 1.344-2.477 0-6.722-1.768-12.595-5.023v6.58c4.599 2.76 9.058 4.176 13.373 4.176 4.105 0 7.572-1.133 10.545-3.68 3.184-2.336 4.74-5.094 4.74-8.137 0-2.549-1.133-4.883-3.68-7.36l-6.582-4.741c-2.191-1.769-3.395-3.326-3.395-4.528 0-2.759 1.627-4.175 4.953-4.175 2.264 0 5.59 1.274 10.047 3.963l1.346-6.864c-3.752-2.124-7.643-3.185-11.889-3.185zM83.217 113.785c-.142-1.486-.425-2.83-.567-4.246l8.987-29.011 2.123-2.618H80.811c.142.637.283 1.486.425 2.123 0 .637 0 1.416-.142 2.123l-8.986 28.728-1.84 2.902h12.949v-.001z"
											fill="#315881" />
									</g>
								</svg>
								<svg id="mastercard" xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" viewBox="0 0 192.756 192.756">
									<g fill-rule="evenodd" clip-rule="evenodd">
										<path fill="transparent" d="M0 0h192.756v192.756H0V0z" />
										<path fill="#1b3771" d="M8.504 151.977h175.748V40.78H8.504v111.197z" />
										<path d="M96.52 131.904c8.48 7.729 19.883 12.439 32.229 12.439 26.574 0 48.059-21.486 48.059-48.061 0-26.479-21.484-48.059-48.059-48.059-12.346 0-23.748 4.712-32.229 12.439-9.707 8.857-15.832 21.485-15.832 35.62 0 14.138 6.125 26.859 15.832 35.622z" fill="#e9b040" />
										<path d="M170.4 123.047c0-.848.658-1.508 1.602-1.508.848 0 1.508.66 1.508 1.508s-.66 1.602-1.508 1.602a1.589 1.589 0 0 1-1.602-1.602zm1.602 1.224c.564 0 1.131-.564 1.131-1.225s-.566-1.131-1.131-1.131c-.66 0-1.225.471-1.225 1.131s.565 1.225 1.225 1.225zm-.283-.47h-.283v-1.414h.566c.094 0 .283 0 .377.094.094.096.188.189.188.283 0 .189-.094.377-.281.377l.281.66h-.377l-.188-.566h-.283v.566zm0-.848h.377c.094 0 .094-.096.094-.189 0 0 0-.094-.094-.094h-.377v.283z" fill="#e9b040" />
										<path d="M112.068 91.195a47.818 47.818 0 0 0-.848-5.088H81.819a51.097 51.097 0 0 1 1.414-5.089h26.574a56.747 56.747 0 0 0-1.979-5.089H85.211a68.395 68.395 0 0 1 2.827-5.089H105a31.658 31.658 0 0 0-3.674-5.088h-9.613c1.414-1.791 3.11-3.487 4.806-5.088-8.481-7.728-19.79-12.439-32.229-12.439-26.574 0-48.06 21.58-48.06 48.059 0 26.574 21.486 48.061 48.06 48.061 12.439 0 23.747-4.711 32.229-12.439 1.695-1.602 3.393-3.297 4.9-5.088h-9.707a50.187 50.187 0 0 1-3.675-5.088H105a44.338 44.338 0 0 0 2.828-5.09H85.211a40.765 40.765 0 0 1-1.979-5.088h26.574a51.661 51.661 0 0 0 1.414-5.09c.377-1.695.658-3.393.848-5.088a45.936 45.936 0 0 0 0-10.179z" fill="#cc2131" />
										<path d="M170.4 107.404c0-.848.658-1.508 1.602-1.508.848 0 1.508.66 1.508 1.508s-.66 1.602-1.508 1.602a1.588 1.588 0 0 1-1.602-1.602zm1.602 1.225c.564 0 1.131-.566 1.131-1.225 0-.66-.566-1.131-1.131-1.131-.66 0-1.225.471-1.225 1.131 0 .658.565 1.225 1.225 1.225zm-.283-.471h-.283v-1.414h.566c.094 0 .283 0 .377.094.094.096.188.189.188.283 0 .189-.094.377-.281.377l.281.66h-.377l-.188-.566h-.283v.566zm0-.847h.377c.094 0 .094-.096.094-.189 0 0 0-.094-.094-.094h-.377v.283z" fill="#fff" />
										<path
											d="M80.217 110.137c-1.602.471-2.733.66-3.958.66-2.45 0-3.958-1.508-3.958-4.336 0-.564.094-1.131.188-1.789l.282-1.885.283-1.604 2.262-13.569h4.994l-.565 3.015h3.11l-.754 4.995h-3.109l-1.414 8.104c0 .283-.094.564-.094.754 0 1.037.565 1.508 1.791 1.508.66 0 1.037-.094 1.602-.189l-.66 4.336zM96.331 109.947a17.74 17.74 0 0 1-5.372.85c-5.56 0-8.858-3.016-8.858-8.859 0-6.784 3.864-11.873 9.141-11.873 4.241 0 6.973 2.827 6.973 7.256 0 1.414-.188 2.828-.658 4.9H87.19v.566c0 2.355 1.508 3.486 4.523 3.486 1.885 0 3.581-.377 5.466-1.225l-.848 4.899zm-3.11-11.779v-.941c0-1.602-.942-2.544-2.45-2.544-1.696 0-2.827 1.225-3.298 3.486h5.748v-.001zM40.355 110.42h-5.183l3.016-18.753-6.691 18.753h-3.58l-.377-18.659-3.205 18.659h-4.994l4.052-24.408h7.444l.284 15.078 4.994-15.078h8.293l-4.053 24.408zM52.889 101.561c-.565 0-.66-.094-1.037-.094-2.921 0-4.429 1.131-4.429 3.016 0 1.318.753 2.074 1.884 2.074 2.545 0 3.487-2.075 3.582-4.996zm4.146 8.859h-4.523l.094-2.074c-1.131 1.602-2.639 2.451-5.466 2.451-2.544 0-4.617-2.262-4.617-5.467 0-.941.188-1.789.376-2.543.848-3.111 3.958-4.996 8.67-5.09.565 0 1.508 0 2.261.094.188-.658.188-.941.188-1.318 0-1.319-1.036-1.696-3.486-1.696-1.508 0-3.109.283-4.335.565l-.659.283h-.377l.754-4.429c2.45-.754 4.146-1.037 6.031-1.037 4.523 0 6.879 1.979 6.879 5.843 0 .941.094 1.695-.283 3.863l-1.036 7.068-.188 1.225-.188 1.035v.66l-.095.567zM121.398 90.819c1.412 0 2.732.376 4.617 1.319l.848-5.372c-.471-.188-.566-.188-1.225-.471l-2.168-.471c-.66-.188-1.414-.282-2.355-.282-2.545 0-4.053 0-5.654 1.036-.848.471-1.885 1.225-3.109 2.545l-.566-.189-5.371 3.77.283-2.073h-5.561l-3.109 19.79h5.184l1.885-10.648s.754-1.508 1.131-1.98c.941-1.225 1.789-1.225 2.826-1.225h.377c-.094 1.131-.189 2.451-.189 3.77 0 6.502 3.676 10.555 9.33 10.555 1.414 0 2.639-.189 4.523-.754l.941-5.561c-1.695.85-3.109 1.225-4.428 1.225-3.016 0-4.807-2.166-4.807-5.936 0-5.279 2.638-9.048 6.597-9.048zM165.404 86.012l-1.131 6.974c-1.225-1.885-2.732-2.733-4.711-2.733-2.732 0-5.277 1.508-6.879 4.429l-3.299-1.979.283-2.073h-5.561l-3.203 19.79h5.277l1.695-10.648s1.32-1.508 1.697-1.98c.754-.941 1.602-1.225 2.262-1.225a18.507 18.507 0 0 0-.943 5.844c0 4.994 2.639 8.291 6.408 8.291 1.885 0 3.393-.658 4.807-2.26l-.283 1.979h4.994l3.959-24.408h-5.372v-.001zm-6.312 19.695c-1.791 0-2.639-1.225-2.639-3.863 0-3.863 1.602-6.69 4.051-6.69 1.791 0 2.734 1.413 2.734 3.958 0 3.863-1.697 6.595-4.146 6.595zM135.061 101.561c-.564 0-.658-.094-1.035-.094-2.922 0-4.43 1.131-4.43 3.016 0 1.318.754 2.074 1.885 2.074 2.544 0 3.486-2.075 3.58-4.996zm4.146 8.859h-4.521l.094-2.074c-1.131 1.602-2.639 2.451-5.467 2.451-2.543 0-4.805-2.168-4.805-5.467.094-4.711 3.58-7.633 9.234-7.633.566 0 1.508 0 2.262.094.189-.658.189-.941.189-1.318 0-1.319-1.037-1.696-3.488-1.696-1.508 0-3.203.283-4.334.565l-.754.283h-.283l.754-4.429c2.451-.754 4.146-1.037 6.031-1.037 4.523 0 6.879 1.979 6.879 5.843 0 .941.094 1.695-.283 3.863l-1.035 7.068-.189 1.225-.188 1.035-.096.66v.567zM67.872 94.871c1.037 0 2.45.094 3.958.283l.754-4.618c-1.508-.188-3.486-.377-4.711-.377-5.749 0-7.727 3.11-7.727 6.785 0 2.355 1.13 4.146 3.863 5.371 2.167 1.037 2.544 1.227 2.544 2.074 0 1.225-1.131 1.979-3.204 1.979-1.507 0-2.921-.283-4.618-.754l-.565 4.523h.095l.942.189c.282.094.754.188 1.319.188 1.319.188 2.355.188 3.015.188 5.749 0 8.199-2.166 8.199-6.596 0-2.732-1.319-4.334-3.958-5.465-2.167-1.037-2.45-1.131-2.45-2.074 0-.942.942-1.696 2.544-1.696z"
											fill="#1b3771" />
										<path
											d="M128.277 85.259l-.85 5.277c-1.885-.942-3.203-1.319-4.617-1.319-3.957 0-6.689 3.77-6.689 9.141 0 3.676 1.885 5.936 4.898 5.936 1.32 0 2.734-.375 4.43-1.225l-.941 5.561c-1.885.471-3.109.66-4.617.66-5.561 0-9.047-3.959-9.047-10.461 0-8.764 4.805-14.794 11.684-14.794.943 0 1.697.094 2.357.188l2.166.565c.66.282.754.282 1.226.471zM111.598 88.934c-.189-.094-.377-.094-.566-.094-1.695 0-2.639.848-4.24 3.204l.471-3.016h-4.805l-3.111 19.884h5.184c1.885-12.156 2.355-14.23 4.9-14.23h.377c.471-2.356 1.037-4.146 1.979-5.749h-.189v.001zM81.536 108.629c-1.414.471-2.544.66-3.77.66-2.639 0-4.146-1.508-4.146-4.336 0-.564.094-1.131.188-1.789l.282-1.98.283-1.508 2.262-13.569h5.183l-.565 2.921h2.639l-.754 4.9H80.5l-1.414 8.199c0 .377-.094.66-.094.848 0 1.037.565 1.508 1.791 1.508.66 0 1.037-.094 1.414-.189l-.661 4.335zM61.464 95.342c0 2.449 1.225 4.24 3.958 5.465 2.167 1.037 2.45 1.32 2.45 2.262 0 1.225-.942 1.791-3.016 1.791-1.508 0-2.921-.283-4.618-.848l-.754 4.617h.283l.943.189a4.37 4.37 0 0 0 1.319.188c1.225.094 2.262.188 2.921.188 5.466 0 8.01-2.072 8.01-6.596 0-2.732-1.036-4.334-3.675-5.561-2.168-.941-2.45-1.224-2.45-2.072 0-1.131.848-1.696 2.544-1.696 1.037 0 2.45.188 3.769.377l.754-4.618c-1.319-.188-3.393-.377-4.617-.377-5.842 0-7.821 3.016-7.821 6.691zM168.139 108.912h-4.994l.281-1.979c-1.414 1.508-2.922 2.166-4.807 2.166-3.768 0-6.312-3.203-6.312-8.197 0-6.597 3.863-12.157 8.48-12.157 2.074 0 3.582.848 4.994 2.733l1.131-6.974h5.184l-3.957 24.408zm-7.729-4.713c2.451 0 4.146-2.732 4.146-6.689 0-2.451-.941-3.864-2.732-3.864-2.355 0-4.053 2.732-4.053 6.69 0 2.545.848 3.863 2.639 3.863zM97.461 108.441c-1.79.564-3.486.848-5.371.848-5.843 0-8.858-3.111-8.858-8.859 0-6.878 3.864-11.873 9.141-11.873 4.241 0 6.973 2.827 6.973 7.256 0 1.414-.188 2.828-.564 4.9H88.416c-.095.283-.095.377-.095.566 0 2.262 1.508 3.486 4.618 3.486 1.791 0 3.487-.377 5.372-1.225l-.85 4.901zm-2.92-11.781v-1.036c0-1.602-.849-2.544-2.45-2.544s-2.827 1.319-3.298 3.58h5.748zM41.675 108.912h-5.183l3.015-18.753-6.691 18.753h-3.58l-.377-18.659-3.204 18.659h-4.806l4.052-24.408h7.444l.283 15.078 4.995-15.078h8.104l-4.052 24.408zM54.585 100.053c-.566-.094-.848-.094-1.225-.094-2.921 0-4.429 1.037-4.429 3.016 0 1.225.753 2.074 1.884 2.074 2.168 0 3.676-2.074 3.77-4.996zm3.769 8.859h-4.335l.095-2.074c-1.319 1.604-3.016 2.355-5.466 2.355-2.827 0-4.712-2.166-4.712-5.371 0-4.805 3.299-7.633 9.141-7.633.565 0 1.319 0 2.073.094.188-.565.188-.847.188-1.224 0-1.319-.848-1.791-3.298-1.791-1.508 0-3.204.188-4.335.565l-.754.188-.471.094.754-4.429c2.638-.754 4.334-1.037 6.219-1.037 4.523 0 6.879 1.979 6.879 5.749 0 1.037-.095 1.79-.472 3.958l-1.036 7.068-.188 1.225-.095 1.035-.094.66-.093.568zM136.758 100.053c-.564-.094-.848-.094-1.225-.094-2.922 0-4.43 1.037-4.43 3.016 0 1.225.754 2.074 1.885 2.074 2.073 0 3.676-2.074 3.77-4.996zm3.769 8.859h-4.334l.094-2.074c-1.32 1.604-3.109 2.355-5.467 2.355-2.826 0-4.805-2.166-4.805-5.371 0-4.805 3.393-7.633 9.234-7.633.564 0 1.32 0 2.072.094.189-.565.189-.847.189-1.224 0-1.319-.848-1.791-3.299-1.791-1.508 0-3.203.188-4.334.565l-.754.188-.471.094.754-4.429c2.637-.754 4.334-1.037 6.219-1.037 4.523 0 6.879 1.979 6.879 5.749 0 1.037-.094 1.79-.471 3.958l-1.037 7.068-.188 1.225-.189 1.035-.094.66v.568h.002zM154.475 88.934c-.096-.094-.283-.094-.473-.094-1.695 0-2.732.848-4.334 3.204l.471-3.016h-4.711l-3.205 19.884h5.277c1.791-12.156 2.357-14.23 4.807-14.23h.377c.471-2.356 1.131-4.146 1.979-5.749h-.188v.001z"
											fill="#fff" />
									</g>
								</svg>
								<svg id="yandex" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 367 106" style="enable-background:new 0 0 367 106;" xml:space="preserve">
									<style type="text/css">
										.st0 {
											fill: #FC3F1D;
										}
									</style>
									<path d="M349.9,92.3c7.2,0,12.3-1.3,16.1-4.1V75.5c-3.9,2.7-8.6,4.4-15.2,4.4c-11.1,0-15.7-8.6-15.7-22.2
																			c0-14.3,5.6-21.6,15.8-21.6c6,0,11.9,2.1,15,4.1V27c-3.3-1.8-9-3.1-16.8-3.1c-19.9,0-30.2,14.3-30.2,34.3
																			C319,80.1,329.1,92.3,349.9,92.3z M252.6,86.5V73.8c-4.8,3.3-13,6.2-20.5,6.2c-11.4,0-15.7-5.4-16.4-16.4h37.6v-8.2
																			c0-22.9-10.1-31.5-25.6-31.5c-19,0-28,14.5-28,34.4c0,22.9,11.3,34,31.1,34C240.7,92.3,248,89.6,252.6,86.5z M109.9,25.1v26H89.1
																			v-26H73.5V91h15.6V63.5h20.8V91h15.6V25.1H109.9z M195.8,78.6h-6.9V25.1h-45.4v5.6c0,16.1-1,36.9-6.5,47.9h-5V106h14.4V91h34.9v15
																			h14.4V78.6H195.8z M302.3,91H320l-25-35.5l22-30.4h-15.7l-22,30.4V25.1h-15.6V91h15.6V58.6L302.3,91z M227.3,36.1
																			c7.7,0,10.1,6.4,10.1,14.7v1.3h-21.7C216.1,41.6,219.9,36.1,227.3,36.1z M173.3,78.6h-22c4.3-9.9,5.5-27.9,5.5-39.3v-2h16.5V78.6z" />
									<path id="Glyph" class="st0" d="M60.5,91H44.6V12.3h-7.1c-13,0-19.8,6.5-19.8,16.2c0,11,4.7,16.1,14.4,22.6l8,5.4L17.1,91H0
																			l20.7-30.8C8.8,51.7,2.1,43.4,2.1,29.4C2.1,11.9,14.3,0,37.4,0h23L60.5,91L60.5,91z" />
								</svg>
								<svg id="webmoney" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200pt" height="200pt" viewBox="0 0 200 200" version="1.1">
									<g id="surface1">
										<rect x="0" y="0" width="200" height="200" style="fill: transparent;fill-opacity:1;stroke:none;" />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 26.851563 74.148438 C 30.910156 74.148438 34.753906 75.09375 38.179688 76.769531 C 38.714844 77.027344 39.253906 77.308594 39.789063 77.613281 L 37.410156 79.746094 L 33.835938 76.050781 L 27.800781 81.433594 L 24.214844 77.519531 L 12.972656 87.652344 L 20.183594 95.59375 L 17.351563 98.085938 L 24.449219 106.042969 L 21.632813 108.527344 L 31.777344 119.816406 L 37.796875 114.273438 L 43.003906 120.214844 C 41.96875 121.019531 40.839844 121.777344 39.597656 122.476563 C 35.832031 124.625 31.480469 125.851563 26.851563 125.851563 C 12.613281 125.851563 1 114.238281 1 100 C 1 85.761719 12.613281 74.148438 26.851563 74.148438 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 22.140625 98.367188 L 28.289063 92.828125 L 33.824219 98.976563 L 27.675781 104.515625 L 22.140625 98.367188 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 26.511719 108.988281 L 32.660156 103.453125 L 38.195313 109.601563 L 32.046875 115.136719 L 26.511719 108.988281 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 17.742188 87.867188 L 23.890625 82.332031 L 29.421875 88.480469 L 23.277344 94.015625 L 17.742188 87.867188 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 29.023438 84.890625 L 33.632813 80.738281 L 37.785156 85.347656 L 33.175781 89.5 L 29.023438 84.890625 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 37.214844 103.902344 L 41.828125 99.753906 L 45.976563 104.363281 L 41.367188 108.515625 L 37.214844 103.902344 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 41.269531 113.214844 L 45.882813 109.066406 L 50.03125 113.675781 L 45.421875 117.828125 L 41.269531 113.214844 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 43.128906 91.871094 L 46.203125 89.105469 L 48.96875 92.179688 L 45.898438 94.945313 L 43.128906 91.871094 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 39.199219 82.738281 L 42.273438 79.972656 L 45.042969 83.046875 L 41.96875 85.8125 L 39.199219 82.738281 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 47.058594 101.003906 L 50.132813 98.234375 L 52.898438 101.308594 L 49.824219 104.078125 L 47.058594 101.003906 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 33.273438 94.160156 L 37.882813 90.007813 L 42.035156 94.621094 L 37.425781 98.769531 L 33.273438 94.160156 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;"
											d="M 123.917969 90.070313 L 123.773438 90.164063 L 123.628906 90.070313 C 122.570313 89.105469 121.410156 88.71875 119.96875 88.71875 C 116.640625 88.71875 114.472656 91.035156 114.472656 94.648438 C 114.472656 94.648438 114.472656 111.175781 114.472656 111.5625 C 114.8125 111.5625 117.460938 111.5625 117.796875 111.5625 C 117.796875 111.175781 117.796875 94.648438 117.796875 94.648438 C 117.796875 92.238281 119.4375 92.046875 119.96875 92.046875 C 120.351563 92.046875 120.929688 92.140625 121.410156 92.527344 C 121.894531 93.007813 122.136719 93.683594 122.136719 94.648438 C 122.136719 94.648438 122.136719 111.175781 122.136719 111.5625 C 122.472656 111.5625 125.121094 111.5625 125.460938 111.5625 C 125.460938 111.175781 125.460938 94.648438 125.460938 94.648438 C 125.460938 92.238281 127.101563 92.046875 127.628906 92.046875 C 128.015625 92.046875 128.59375 92.140625 129.074219 92.527344 C 129.558594 93.007813 129.796875 93.683594 129.796875 94.648438 C 129.796875 94.648438 129.796875 111.175781 129.796875 111.5625 C 130.136719 111.5625 132.785156 111.5625 133.121094 111.5625 C 133.121094 111.175781 133.121094 94.648438 133.121094 94.648438 C 133.121094 92.769531 132.546875 91.226563 131.484375 90.164063 C 130.519531 89.25 129.171875 88.71875 127.628906 88.71875 C 126.136719 88.71875 124.929688 89.152344 123.917969 90.070313 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;"
											d="M 148.160156 96.527344 C 147.050781 95.371094 145.21875 94.359375 142.714844 94.359375 C 140.304688 94.359375 138.472656 95.371094 137.363281 96.527344 C 135.628906 98.40625 135.289063 101.058594 135.289063 103.128906 C 135.289063 105.152344 135.628906 107.804688 137.363281 109.683594 C 138.472656 110.839844 140.304688 111.851563 142.714844 111.851563 C 145.21875 111.851563 147.050781 110.839844 148.160156 109.683594 C 149.894531 107.804688 150.230469 105.152344 150.230469 103.128906 C 150.230469 101.058594 149.894531 98.40625 148.160156 96.527344 Z M 146.855469 103.851563 C 146.855469 105.441406 146.855469 107.226563 145.652344 108.527344 C 145.171875 109.007813 144.253906 109.636719 142.714844 109.636719 C 141.265625 109.636719 140.351563 109.007813 139.867188 108.527344 C 138.664063 107.226563 138.664063 105.441406 138.664063 103.851563 L 138.664063 102.359375 C 138.664063 100.769531 138.664063 98.984375 139.867188 97.730469 C 140.351563 97.203125 141.265625 96.574219 142.714844 96.574219 C 144.253906 96.574219 145.171875 97.203125 145.652344 97.730469 C 146.855469 98.984375 146.855469 100.769531 146.855469 102.359375 L 146.855469 103.851563 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;" d="M 152.976563 94.648438 L 155.773438 94.695313 L 155.773438 96.191406 C 156.59375 95.613281 157.3125 95.179688 158.136719 94.890625 C 159.144531 94.453125 159.867188 94.359375 160.882813 94.359375 C 162.328125 94.359375 163.820313 94.648438 165.023438 95.996094 C 166.183594 97.347656 166.421875 98.9375 166.421875 100.285156 L 166.421875 111.515625 L 163.339844 111.515625 L 163.339844 100.042969 C 163.339844 97.300781 161.605469 96.574219 160.15625 96.574219 C 158.710938 96.574219 157.21875 97.203125 156.015625 98.308594 L 156.015625 111.515625 L 152.976563 111.515625 L 152.976563 94.648438 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;"
											d="M 181.507813 108.238281 C 180.929688 108.527344 180.300781 108.769531 179.53125 109.007813 C 178.613281 109.296875 177.894531 109.441406 176.929688 109.441406 C 175.339844 109.441406 173.894531 108.914063 173.121094 108.042969 C 172.542969 107.46875 171.917969 106.308594 171.917969 104.285156 L 171.917969 103.851563 L 182.324219 103.851563 L 182.324219 103.082031 C 182.324219 100.382813 182.230469 98.164063 180.542969 96.382813 C 179.433594 95.179688 177.746094 94.359375 175.628906 94.359375 C 173.265625 94.359375 171.53125 95.371094 170.472656 96.574219 C 168.734375 98.550781 168.542969 101.152344 168.542969 102.839844 C 168.542969 104.71875 168.832031 107.515625 170.566406 109.441406 C 171.675781 110.742188 173.652344 111.851563 176.445313 111.851563 C 177.699219 111.851563 179.050781 111.707031 180.398438 111.175781 C 181.121094 110.886719 181.941406 110.503906 182.472656 110.214844 Z M 171.917969 101.25 C 171.917969 99.320313 172.542969 98.214844 173.027344 97.683594 C 173.507813 97.152344 174.277344 96.574219 175.578125 96.574219 C 176.445313 96.574219 177.3125 96.769531 177.941406 97.394531 C 179.050781 98.453125 179.050781 99.757813 179.050781 100.914063 L 179.050781 101.636719 L 171.917969 101.636719 L 171.917969 101.25 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;"
											d="M 199 94.695313 L 192.398438 114.550781 C 192.15625 115.417969 191.53125 116.863281 190.808594 117.683594 C 189.941406 118.648438 188.785156 119.082031 187.480469 119.082031 C 186.566406 119.082031 185.699219 118.886719 184.832031 118.40625 C 184.304688 118.070313 183.769531 117.730469 183.433594 117.34375 L 184.878906 115.515625 C 185.121094 115.757813 185.457031 115.996094 185.746094 116.1875 C 186.230469 116.476563 186.808594 116.621094 187.339844 116.621094 C 188.253906 116.621094 188.832031 116.140625 189.121094 115.757813 C 189.457031 115.324219 189.796875 114.308594 190.035156 113.683594 L 190.421875 112.335938 L 183.339844 94.695313 L 186.664063 94.695313 L 190.902344 105.25 C 191.339844 106.261719 191.769531 107.804688 191.867188 108.238281 L 192.011719 108.238281 C 192.542969 106.214844 192.785156 105.539063 193.21875 104.285156 L 196.253906 94.695313 L 199 94.695313 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;"
											d="M 69.316406 110.550781 L 69.414063 110.40625 L 69.558594 110.550781 C 70.667969 111.46875 71.777344 111.902344 73.269531 111.902344 C 76.59375 111.902344 78.761719 109.539063 78.761719 105.972656 C 78.761719 105.972656 78.761719 89.394531 78.761719 89.058594 C 78.425781 89.058594 75.726563 89.058594 75.390625 89.058594 C 75.390625 89.394531 75.390625 105.972656 75.390625 105.972656 C 75.390625 108.382813 73.75 108.527344 73.269531 108.527344 C 72.835938 108.527344 72.257813 108.476563 71.824219 108.042969 C 71.339844 107.609375 71.101563 106.890625 71.101563 105.972656 C 71.101563 105.972656 71.101563 89.394531 71.101563 89.058594 C 70.761719 89.058594 68.066406 89.058594 67.726563 89.058594 C 67.726563 89.394531 67.726563 105.972656 67.726563 105.972656 C 67.726563 108.382813 66.089844 108.527344 65.558594 108.527344 C 65.171875 108.527344 64.59375 108.476563 64.160156 108.042969 C 63.679688 107.609375 63.4375 106.890625 63.4375 105.972656 C 63.4375 105.972656 63.4375 89.394531 63.4375 89.058594 C 63.101563 89.058594 60.402344 89.058594 60.066406 89.058594 C 60.066406 89.394531 60.066406 105.972656 60.066406 105.972656 C 60.066406 107.804688 60.644531 109.34375 61.703125 110.40625 C 62.667969 111.371094 64.066406 111.902344 65.558594 111.902344 C 67.050781 111.902344 68.257813 111.417969 69.316406 110.550781 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;"
											d="M 94.234375 108.238281 C 93.703125 108.476563 93.078125 108.769531 92.304688 109.007813 C 91.390625 109.296875 90.664063 109.441406 89.703125 109.441406 C 88.113281 109.441406 86.664063 108.914063 85.894531 108.042969 C 85.363281 107.46875 84.738281 106.308594 84.738281 104.285156 L 84.738281 103.851563 L 95.050781 103.851563 L 95.050781 103.082031 C 95.050781 100.382813 94.957031 98.164063 93.316406 96.382813 C 92.207031 95.226563 90.523438 94.40625 88.351563 94.40625 C 86.089844 94.40625 84.351563 95.417969 83.292969 96.574219 C 81.511719 98.601563 81.363281 101.203125 81.363281 102.839844 C 81.363281 104.71875 81.605469 107.515625 83.339844 109.441406 C 84.496094 110.695313 86.425781 111.851563 89.21875 111.851563 C 90.472656 111.851563 91.773438 111.660156 93.171875 111.128906 C 93.894531 110.886719 94.664063 110.453125 95.195313 110.164063 Z M 84.738281 101.25 C 84.738281 99.320313 85.316406 98.261719 85.847656 97.683594 C 86.28125 97.203125 87.050781 96.574219 88.351563 96.574219 C 89.21875 96.574219 90.089844 96.816406 90.714844 97.441406 C 91.824219 98.453125 91.824219 99.757813 91.824219 100.960938 L 91.824219 101.636719 L 84.738281 101.636719 L 84.738281 101.25 " />
										<path style=" stroke:none;fill-rule:evenodd;fill:rgb(2.745056%,38.038635%,68.626404%);fill-opacity:1;"
											d="M 109.363281 96.09375 C 108.160156 95.03125 106.472656 94.40625 104.738281 94.40625 C 103.96875 94.40625 103.148438 94.550781 102.570313 94.648438 C 102.089844 94.792969 101.460938 95.03125 100.929688 95.226563 L 100.929688 88.625 L 97.894531 88.625 L 97.894531 110.070313 C 99.679688 111.128906 101.800781 111.851563 104.207031 111.851563 C 105.988281 111.851563 108.402344 111.46875 110.136719 109.203125 C 111.53125 107.320313 111.820313 104.960938 111.820313 103.03125 C 111.820313 101.203125 111.679688 98.070313 109.363281 96.09375 Z M 104.160156 96.574219 C 105.363281 96.574219 106.617188 96.960938 107.390625 97.78125 C 108.449219 98.9375 108.449219 100.671875 108.449219 102.164063 L 108.449219 103.609375 C 108.449219 106.457031 107.96875 107.609375 107.53125 108.238281 C 107.050781 108.863281 106.039063 109.636719 104.304688 109.636719 C 103.679688 109.636719 102.90625 109.441406 102.328125 109.296875 C 101.894531 109.152344 101.363281 108.863281 100.929688 108.621094 L 100.929688 97.585938 " />
									</g>
								</svg>
								<svg id="qiwi" enable-background="new 0 0 840.8 360.4" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 840.8 360.4" xmlns="http://www.w3.org/2000/svg">
									<path
										d="m340 347.9c-1.6-4.4-4.5-7.4-6.6-11.3-5.1-6.7-11.1-12.5-17.1-18.3-2.1-.7-3-2.7-5-3.5-1.3-1.7-3.4-2.6-5.1-3.9-3.4-2.6-7.1-4.8-10.9-7-7.2-4.6-16.1-7.5-24.9-10.5-9.5-2.3-19.5-4-29.9-5.4-10.3-1.5-20.6-2.9-28.4-7-4.5-1.3-7.8-3.8-11.7-5.8-3.6-2.4-7.5-4.4-10.5-7.4-3.7-2.2-6-5.9-8.9-8.9-1-2-2.7-3.2-3.5-5.4-1-.4-1.3-1.6-1.9-2.3-.7-.8-.7-2.4-1.9-2.7-.6 4.1-.4 9 0 13.2.5 1.8.7 4 1.2 5.8.3 1.6 1.8 4.2 1.2 5.4-31.2-1.6-54-11.5-73.8-24.5-9.8-6.5-18.2-14.4-26-22.9-3.4-4.7-7.1-9.2-10.1-14.4-3.1-5.1-5.7-10.9-8.5-16.3-4.6-11.7-8.9-23.7-10.5-38.4-2.1-13.7-1.6-31.2 1.5-43.9 1.1-7 3.4-12.9 5.4-19 1.3-2.8 2.7-5.6 3.9-8.5 1.7-2.4 2.6-5.7 4.7-7.8 5.7-10.7 14.2-18.7 22.9-26.4 9.4-6.9 20.1-12.5 33-15.9 12.4-2.8 29.3-3.3 42.7-.4 27.2 5.6 47.7 17.8 64.9 33.4 17.4 15.3 30.8 34.7 40 58.3 9.5 22.4 12.8 57.3 4.3 82.7-3.5-2-7-3.9-10.5-5.8-4.2-1.2-8.3-2.6-13.2-3.1-5.9-.1-11.7 0-15.5 1.9 7.7-.8 13.9 1.3 18.7 3.1 2.8 1.1 4.4 1.8 6.6 3.1 4.3 2.5 8.1 4.8 11.3 8.2 9.1 8 15.6 18.6 18.7 32.6 0 .4.5.3.4-.4.4-.1.6-.4.8-.8.5-.6 1.1-1.2 1.6-1.9 1-1.2 2-2.4 2.7-3.9 2.1-2.5 3.8-5.3 5.4-8.2 3.7-5.4 6.5-11.6 9.7-17.5 5.5-12.6 10-26.2 12.8-41.6 5.6-34.2-1.1-66.6-12.8-90.5-12-24.1-28.8-43.4-50.5-57.9-21.9-14.4-47.5-25-82.7-26-.2-.7-.5.1-1.2 0-18.6-.6-33.6 2-48.5 5.8-6.9 2.3-14.1 4.3-20.2 7.4-7 2.3-12.6 6.1-19 8.9-2.3 2.2-5.8 3.3-8.2 5.4-3.1 1.5-5.4 3.9-8.5 5.4-5 4.4-10.3 8.3-15.2 12.8-4.8 4.4-9 9.4-13.6 14-.7 1.6-1.9 2.7-3.1 3.9-.8 1.5-1.8 2.8-3.1 3.9-.5 1.8-2.1 2.5-2.7 4.3-1.3 1-1.6 3-3.1 3.9-1.3 3.2-3.6 5.5-5.1 8.5-1.8 2.9-3.2 6.1-5 8.9-2.8 6.5-5.8 12.8-8.1 19.8-2.4 6.8-4.4 14-5.8 21.8-1.5 7.3-2.9 16.8-2.7 24.5-1 2.8-.2 8 0 11.3 0 .6-.4.8-.4 1.2 0 3.7 1 8.2 1.2 10.5.8 8.5 2.3 16.4 4.7 23.3 1.5 7.7 4.7 13.7 7 20.6 3.5 5.8 5.9 12.7 10.1 17.9 3.1 6.1 7.5 10.9 11.7 15.9 4.5 4.8 9 9.7 14.4 13.6 9.9 8.6 21.5 15.5 34.2 21.4 23.7 11.5 59.1 19 90.9 17.1 8.1-1.1 16.3-2.1 23.7-3.9 6.8-2.5 14.7-4 22.9-5 18.7-1.2 34.9.5 49.3 4.7 14.6 3.9 27.2 9.8 38.1 17.5 5.8 3.4 10.6 7.8 15.5 12 5 4.3 9 9.6 13.6 14.4.6 1.8 1.8 3.1 2.7 4.7 1.2 1.3.6 4.3 3.5 3.9 1.8-1.8-.3-4.4-.4-6.6-1.8-1.9-2.2-4.4-3.6-6z"
										fill="#fcb316" />
									<path d="m267.4 241.5c-.4 0-.5.3-.8.4-.7 1.5-.4 3.9 0 5.4 2.1 4.3 2.8 9.9 7.4 11.7 2.2-.7 2-3.9 1.9-7-1-3.8-2.4-7.2-4.7-9.7-1.6-.6-2.7-1.6-3.8-.8zm-27.2 10.9c0-.2-.3-.4-.4 0-3.8-.5-5.1 1.6-7 3.1-3.3 8.7 2 17.2 11.3 17.1 3.7-.9 6-3.3 6.6-7.4-.5-7.3-3.6-12-10.5-12.8z" fill="#fcb316" />
									<path
										d="m464.4 224.7c1.5 6.3 4.7 10.8 8.3 15s7.8 7.7 12.9 10.3c4.8 3 10 5.5 16 7.2 2.9 1 5.7 2.2 9.3 2.6 2.5 1.4 5.5 2.1 5.7 5.7-.1 4.3-3 5.9-6.7 6.7-3.7-.8-8.3-.7-11.4-2.1-7.8-.9-14.1-3.4-20.7-5.7-12.6-4.9-23.2-12-32-20.7-1.8-3-4.3-5.4-6.2-8.3s-3.2-6.4-5.2-9.3c-15.4-2-25.9-9-35.1-17.1-8.5-9.7-15.3-21.3-18.1-36.7-3.3-14.8-2.3-33.3 1.6-47.6 8.5-27.7 26.3-46.1 59.9-48.6 9.3.3 17.4 1.4 24.8 4.2 7.5 2.7 14.6 7.7 20.2 12.9.5.4.7.5 1 1 1.2 1.7 4.1 4.1 5.7 6.2.3.4.2 1.1.5 1.6.6.9 1.5 1.3 2.1 2.1.3.5.2 1.1.5 1.5.4.6.9 1.5 1.5 2.6.2.4.9.7 1 1 .9 1.7 1.3 3.8 2.1 5.7.8 2 1.9 3.7 2.6 5.7 2 5.9 3.3 12.9 4.1 20.1 2 20.8-2.1 39.4-9.8 53.2-3.6 7.2-8.6 13.1-14.5 18.1-5.4 5.7-12.8 9.1-20.1 12.7zm-24.8-130.2c-4.5.3-7.2 2.4-10.9 3.6-2.4 2.2-5.4 3.9-7.2 6.7-3 1.7-3.8 5.5-6.2 7.7-2 5-3.9 10.6-5.2 17.1-1.2 6.4-2 13.6-2.1 20.7-.1 17.8 3.7 35.5 10.8 46 4.2 5.1 9.3 9.3 15.5 12.4 3.6.3 6.4 1.5 10.3 1.6 2.2-.8 5.8 0 7.2-1.6 3.2.2 3.9-1.9 6.7-2.1 1.5-1.5 3.1-2.7 5.2-3.6 1.9-2.1 3.7-4.2 5.7-6.2 1-1.5 1.6-3.6 3.1-4.7 9-17.2 10-48.7 4.1-68.7-2.2-7.3-5.3-13.2-8.8-18.1-3.8-3.9-8.3-7.2-13.4-9.8-4.1-.9-8-2-13.4-1.5-.3 0-.6.1-.5.5-.2 0-.5 0-.9 0zm109.1-14.5c8.1.3 17.6-.7 24.8.5 1.6 2.5 1 5.5 1 8.3.6 37.9 0 78.6 0 117.3 0 3.1.1 6.3 0 9.3-.1 2.6.6 5.4-1 7.8-3.6.9-8.8.5-13.4.5-4.9 0-9.7.7-12.9-1-.9-45.8-.9-95.2 0-141.1.2-.8.7-1.3 1.5-1.6zm62 0h24.3c2.2 3 2.9 7.5 3.6 11.9 7.3 27.8 14.5 55.7 21.2 84.2 1.6.2 1.1-1.7 1.6-2.6.7-.7.3-2.4 1-3.1.3-2.3 1.7-3.5 1.6-6.2 1.8-3.5 2.4-8.3 4.1-11.9 2.1-8.4 4.9-16.2 7.3-24.3 2.3-8.4 5.4-16 7.2-24.8 3.4-7.1 4.2-16.8 8.3-23.2h10.3c3.7 7 5.1 16.3 8.3 23.8 2.1 8.4 5 16 7.2 24.3 5.1 16.1 10.4 32 15 48.6 2.1-3.1 2.1-8.3 3.6-11.9.9-4.1 1.7-8.3 3.1-11.9 4-16.4 7.8-32.9 12.4-48.6 1.7-8.2 3.4-16.6 6.2-23.8 6-.9 15.2-.9 21.2 0 .5 6.1-2.3 12.7-4.1 18.1-1 6.6-3.4 11.7-4.7 18.1-3.7 11.7-6.5 24.1-10.3 35.7-2.9 12.4-6.8 23.8-9.8 36.2-2 5.7-3.4 12-5.2 18.1-2 5.6-2.7 12.5-5.7 17.1h-14.5c-3.7-6.5-5-15.3-8.3-22.2-7.2-22.8-15.2-44.7-22.2-67.7-2.4 2.5-2.4 7.6-4.1 10.8-1.1 3.9-2.2 7.8-3.6 11.4-2 7.9-5 14.6-6.7 22.7-2.9 7.1-5 15-7.2 22.8-3 6.8-4.1 15.5-7.8 21.7-3.8 1.2-9.8.2-14.5.5-3.6-4.1-4-11.5-6.2-17.1-1.7-5.8-2.9-12.2-5.1-17.6-2.8-12.6-7-23.7-9.8-36.2-3.7-11.6-6.9-23.7-10.3-35.7-1.9-5.7-3.3-11.8-5.2-17.6-.9-6.2-5.1-11.8-3.6-18.6.2-.5.8-.8 1.4-1zm204.1 0c8.1.3 17.5-.7 24.8.5 1.8 5.4 1 11.2 1 17v108.5c0 5.9.7 11.6-1 17.1-5.6.6-13.8.9-20.7.5-2-.1-4.4.5-5.7-1-1.8-5.4-1-11.1-1-17.1v-107.4c0-6.5-.6-12.8 1-17.1.4-.5 1-.8 1.6-1z"
										fill="#0269b3" />
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="info__inner">
					<h3 class="info__box-title anim-item anim-no-hide">
						Также вас может заинтересовать:
					</h3>
				</div>
			</div>
			<div class="container-max">
				<div class="info__box-wrapper">
					<div class="info__item anim-item anim-no-hide">
						<div class="info__img-box">
							<img class="info__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/info/slide.webp" alt="slide">
							<h3 class="info__item-title">
								Как самому создавать красочные видео и даже зарабатывать на этом
							</h3>
						</div>
						<div class="info__box">
							<p class="info__item-price">&nbsp;15 000 руб
							</p>
							<a class="info__item-link" href="training.php">Подробнее</a>
						</div>
						<p class="info__item-text">
							Желаете научиться создавать красочные видео и зарабатывать на этом!? Уметь монтировать видео - это вообще классно. Овладев нужными знаниями, вы максимум за 5 дней сможете делать красивейшие видео. Вы получите программы, уроки и готовые проекты с которыми вы сразу сможете выполнять заказы. Путь к ПРОФИ будет самый короткий.
						</p>
					</div>
					<div class="info__item anim-item anim-no-hide">
						<div class="info__img-box">
							<img class="info__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/info/camera.webp" alt="camera">
							<h3 class="info__item-title">
								Проекты ProShow Producer - Замени на свои фото и подарок готов
							</h3>
						</div>
						<div class="info__box">
							<p class="info__item-price">
								бесплатно
							</p>
							<a class="info__item-link" href="proshow.php">Подробнее</a>
						</div>
						<p class="info__item-text">
							Здесь вы найдете бесплатные и платные проекты ProShow Producer. Платные проекты созданы
							нами. Приобрести их можно только на нашем сайте. В сети вы их не найдете. Это лучшие работы.
							Они создавались специально под конкретный заказ. Но имея такой проект, можно легко создать
							видео под себя.</p>
					</div>
					<div class="info__item anim-item anim-no-hide">
						<div class="info__img-box">
							<img class="info__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/info/book.webp" alt="book">
							<h3 class="info__item-title">
								Красивые стихи на любой повод
							</h3>
						</div>
						<div class="info__box">
							<p class="info__item-price">
								бесплатно
							</p>
							<a class="info__item-link" href="poems.php">Подробнее</a>
						</div>
						<p class="info__item-text">
							Поздравления в стихах – это то, что радует душу и дает нам положительные эмоции, их невозможно
							потрогать руками, но реально прочувствовать всем сердцем! Не зря в народе говорят, что
							главным является не подарок, а внимание, выраженное в искренних и добрых словах. Именно из
							таких слов состоит наша коллекция.
						</p>
					</div>
				</div>
			</div>
		</section>

	</main>

<script>
		window.onload = function () {
			document.body.classList.add('loaded_hiding');
			window.setTimeout(function () {
				document.body.classList.add('loaded');
				document.body.classList.remove('loaded_hiding');
			}, 500);
		}
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js?n=1"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/form.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/question.js"></script>
	
	
<?php
get_footer();
