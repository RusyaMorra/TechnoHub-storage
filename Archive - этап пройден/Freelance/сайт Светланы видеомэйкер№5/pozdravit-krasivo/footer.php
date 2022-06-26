<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pozdravit-Krasivo
 */

?>

<footer class="footer">
		<div class="container">
			<p class="footer__text anim-item anim-no-hide">
				© 2021 Поздравить Красиво
			</p>
         <div class="footer__admin-custom-panel footer__text">
				Вы админ?
			</div>
			<div class="formAdminContainer">
				<form action="https://pozdravitkrasivo.ru/handler/indexHandler.php" id="formForAdmin" method="POST">
					<p>
						<p><strong>Ваш логин</strong></p>
						<input type="text" name="login" value="">
					</p>
					<p>
						<p><strong>Ваш пароль</strong></p>
						<input type="password" name="password" value="">
					</p>
					<p> 
						<button type="submit" name="do_login">войти</button>
					</p>
					<div class="closeFormContainer">
						<div class="closeForm">&times;</div>
					</div>
				</form>
			</div>
		</div>
			<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=85832988&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/85832988/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="85832988" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(85832988, "init", {
      clickmap:true,
      trackLinks:true,
      accurateTrackBounce:true,
      webvisor:true
   });
</script>
<script src="js/admin-custom-panel.js"></script>

<?php
//authorization by session
$sessionUser = R::findOne("admin", "login = ?", ["Sveta"]);
if((@$_SESSION["AdminPassword"] == $sessionUser->password) and (@$_SESSION["AdminLogin"] == $sessionUser->login)) {
	echo "<script src=\"js/admin-panel-opened-main.js\"></script>";
}
?>

<noscript><div><img src="https://mc.yandex.ru/watch/85832988" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- uSocial -->
<script async src="https://usocial.pro/usocial/usocial.js?uid=a754e23b6df43965&v=6.1.5" data-script="usocial" charset="utf-8"></script>
<div class="uSocial-Share" data-pid="8cc2040b6b6ab789353f954e72fec7b0" data-type="share" data-options="round-rect,style1,default,left,slide-down,size32,eachCounter1,eachCounter-bottom,counter0,mobile_position_left" data-social="vk,ok,pinterest,vi,wa,twi,fb,mail,bookmarks"></div>
<!-- /uSocial -->
	</footer>
	
   <?php wp_footer(); ?>
   
</body>
</html>
