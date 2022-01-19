<?php
if( have_comments() ){ 
   if( get_comments_number() ){ ?>
      
      <ol>
         <?php
            wp_list_comments(
               array(
                  'style' => 'ol', // формировать список элементов для тега <ol>
                  'per_page' => 10, // количество комментариев на странице
                  'avatar_size' => 74, // размер аватара пользователя
               )
            );
         ?>
      </ol>
   <?php }else{?> 
      Нет комментариев к этой публикации
   <?php }?> 
<?php }?>
