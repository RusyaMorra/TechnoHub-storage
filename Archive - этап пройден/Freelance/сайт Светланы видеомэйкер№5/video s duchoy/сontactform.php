<?php
/**
 * Template Name: Форма обратной связи
 *
**/
get_header();
?>
                    <div class="ContactForm">
                    
                    <div class="ContactFormLogo">
                        <h1>Связаться с нами</h1>
                    </div>
                    
                    <div class="ContactFormLogoText">Оставьте заявку и мы свяжемся с вами для уточнения всех деталей заказа *</div>                        
                    <input type="text" name="text" placeholder="Ваше имя">
                    <input type="email" name="email" placeholder="Ваш Email">
                    <input type="text" name="text" placeholder="Ваш телефон">
                    <input class="SubmitButton" type="submit" placeholder="Отправить" >
                    <textarea name="message" placeholder="Ваше сообщение:"></textarea>
                    

                </div>

<?php
get_footer();