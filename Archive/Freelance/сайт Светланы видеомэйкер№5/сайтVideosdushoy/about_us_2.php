<?php
/**
 * Template Name: Контакты
 *
**/
get_header();
?>
                   <section class="teacher">
			<div class="container">
			<!--
				<div class="teacher__wrapper">
				
					<img class="teacher__img" src="<?php the_field('teacher_image')?>" alt="teacher">
				-->	
					 <div class="teacher__box" style="max-width: 90%; margin: 0 auto"> 
						<h2 class="teacher__title">
							Преподаватель
						</h2>
						<p class="teacher__subtitle">&nbsp;Светлана Катасик
						</p>
						<p class="teacher__text">
							Здравствуйте! Меня зовут Светлана, я являюсь преподавателем на курсе создания видео из фото. За моей
							спиной десятилетний опыт работы в этой сфере. Я занимаюсь видеосъемкой презентационных
							фильмов, рекламных роликов и свадеб. В данное время я занимаюсь обучением и продолжаю монтировать видео. Курс обучения создан так, чтобы вы буквально за три дня получили максимум практических знаний. Минимум теории и максимум практики. Вы будете делать то, что делаю я при создании видео. Выполнив набор этих действий вы сможете полностью понять и монтировать самостоятельно свои фильмы, клипы, презентации и тд. <br> <br>Заинтересовало, - желаете научиться делать свои видео!? Тогда чуть ниже, в разделе Контакты, напишите "Хочу пройти обучение".&nbsp;
						</p>
					</div>
				</div>
			<!--	
			</div>
			-->
		</section>

		<section class="contacts" id="contacts">
			<div class="container">
				<div class="contacts__title-box title-box">
					<h2 class="contacts__title title">
						Контакты
					</h2>
				</div>
				<p class="contacts__form-title">
					Оставьте заявку и мы свяжемся с вами для уточнения всех деталей заказа *
				</p>
				
			


				<form class="contacts__form" id="" action="<?php echo get_site_url().'/mail.php';?>" method="post" > 
				
					<div class="contacts__form-box">
					<input type="hidden" name="art" id="art" value="Обучение"/>
						<input class="contacts__form-input" required="required"  size="18" type="text" name="name" placeholder="Имя  *">
						<input class="contacts__form-input " type="tel" required="required"  size="18"  name="phone" placeholder="Телефон  *">
						<input class="contacts__form-input " type="email" name="email" placeholder="E-mail">
						
						
						
					</div>
					<textarea class="contacts__form-textarea" name="comments" placeholder="Ваш комментарий"></textarea>
					<div class="contacts__form-inner">
						<div class="contacts__wrapper">
						<!--
							<div class="contacts__file-container">
								<input class="contacts__file" id="contacts__file" type="file" name="file">
								<label class="contacts__file-trigger" for="contacts__file" tabindex="0">
									Выберите файл
								</label>
							</div>
						-->	
							<p class="contacts__file-return" id="contacts__file-return"></p>
						</div>
						<button class="contacts__form-btn" type="submit" value="Отправить" name="sendMail">
							Оставить заявку
						</button>
					</div>
					<!--
					 <div class="contacts__pop-up">
						<p class="contacts__text-send">
							Ваша заявка успешно отправлена
						</p>
						<p class="contacts__close">X</p>
					</div> 
					-->
				</form>
				<div class="contacts__inner">
					<div class="contacts__box">
						<p class="contacts__adrres"></p>
						<a class="contacts__email" href="mailto:pozdravit.krasivo@gmail.com">
							E-mail: <span class="contacts__email-span">pozdravit.krasivo@gmail.com</span>
						</a>
						<a class="contacts__tel" href="tel:+375256444106">
							Телефон: <span class="contacts__tel-span">+375 25-644-41-06</span>
						</a>
					</div>
					<div class="contacts__list-icons">
						<h3 class="contacts__list-title">
							Мы в социальных сетях
						</h3>
						<div class="contacts__list-wrapper">
							<a class="contacts__link-icon"
								href="https://www.youtube.com/channel/UCkhObP0P5sME1jO98yfHb7Q" target="_blank">
								<svg id="youtube" height="682pt" viewBox="-21 -117 682.66672 682" width="682pt"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="m626.8125 64.035156c-7.375-27.417968-28.992188-49.03125-56.40625-56.414062-50.082031-13.703125-250.414062-13.703125-250.414062-13.703125s-200.324219 0-250.40625 13.183593c-26.886719 7.375-49.03125 29.519532-56.40625 56.933594-13.179688 50.078125-13.179688 153.933594-13.179688 153.933594s0 104.378906 13.179688 153.933594c7.382812 27.414062 28.992187 49.027344 56.410156 56.410156 50.605468 13.707031 250.410156 13.707031 250.410156 13.707031s200.324219 0 250.40625-13.183593c27.417969-7.378907 49.03125-28.992188 56.414062-56.40625 13.175782-50.082032 13.175782-153.933594 13.175782-153.933594s.527344-104.382813-13.183594-154.460938zm-370.601562 249.878906v-191.890624l166.585937 95.945312zm0 0" />
								</svg>
							</a>
							<a class="contacts__link-icon" href="https://t.me/aleks099977" target="_blank">
								<svg id="telegram" width="20" height="20" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z" />
								</svg>
							</a>
							<a class="contacts__link-icon" href="https://vk.com/club185842468" target="_blank">
								<svg id="vk" height="512px" style="enable-background:new 0 0 512 512;"
									viewBox="0 0 512 512" width="512px" xml:space="preserve"
									xmlns="http://www.w3.org/2000/svg">
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
							<a class="contacts__link-icon" href="https://ok.ru/profile/581418301875" target="_blank">
								<svg id="ok" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M 8.2624472,9.720363 C 8.8999741,9.575357 9.5089991,9.323347 10.062522,8.975332 10.479539,8.696321 10.591544,8.132297 10.312533,7.71528 10.044521,7.314263 9.5104991,7.193258 9.0949821,7.438768 c -1.2750533,0.797534 -2.8951208,0.797534 -4.170174,0 C 4.5012905,7.171757 3.9422672,7.298762 3.674756,7.72128 c 0,10e-4 0,0.002 -10e-4,0.0025 -0.2670111,0.423518 -0.1400058,0.983041 0.2835118,1.250052 l 10e-4,10e-4 c 0.552523,0.347515 1.1610483,0.600025 1.7980749,0.744031 l -1.7325722,1.732572 c -0.3535147,0.347515 -0.360015,0.915039 -0.014001,1.268553 l 0.015001,0.015 C 4.1967778,12.911996 4.4297875,13 4.6617972,13 4.8943069,13 5.1268165,12.912 5.2993237,12.734989 l 1.7105713,-1.702071 1.7020711,1.703071 c 0.360015,0.347514 0.935039,0.338014 1.283053,-0.0225 0.3390139,-0.351515 0.3390139,-0.909038 0,-1.260052 L 8.2624472,9.720363 Z M 7.009895,7.194258 C 8.7199661,7.192258 10.105024,5.8072 10.107524,4.097629 10.107524,2.390058 8.7174661,1 7.009895,1 5.3023239,1 3.9122659,2.390058 3.9122659,4.098629 3.9147659,5.8087 5.3003238,7.193758 7.009895,7.194758 Z m 0,-4.378682 c 0.7080295,10e-4 1.2815534,0.575024 1.2820534,1.282553 0,0.70803 -0.5740239,1.281553 -1.2820534,1.282554 C 6.3023655,5.379683 5.7288416,4.806659 5.7273416,4.098629 5.7283416,3.3901 6.3023655,2.816576 7.009895,2.815076 Z" />
								</svg>
							</a>
							<a class="contacts__link-icon" href="https://www.facebook.com/groups/3646455008698749"
								target="_blank">
								<svg id="facebook" width="12" height="21" viewBox="0 0 12 21"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M3.85156 20.9839V12.0386H0.84375V8.48389H3.85156V5.67139C3.85156 4.18701 4.26823 3.04118 5.10156 2.23389C5.9349 1.40055 7.04167 0.983887 8.42188 0.983887C9.54167 0.983887 10.4531 1.03597 11.1562 1.14014V4.3042H9.28125C8.57812 4.3042 8.09635 4.46045 7.83594 4.77295C7.6276 5.03337 7.52344 5.45003 7.52344 6.02295V8.48389H10.8438L10.375 12.0386H7.52344V20.9839H3.85156Z" />
								</svg>
							</a>
						</div>
					</div>
				</div>
		</section>

	</main>


	<script language="JavaScript" src="<?php
echo get_template_directory_uri();
?>/js/main.min.js?n=1"></script>
	<script src="<?php
echo get_template_directory_uri();
?>/js/form.js"></script>
	<script src="<?php
echo get_template_directory_uri();
?>/js/question_training.js"></script>
<script src="<?php
echo get_template_directory_uri();
?>/js/PopUp.js"></script>
<?php
get_footer();