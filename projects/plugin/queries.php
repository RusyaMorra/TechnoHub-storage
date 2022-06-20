<?php



function get_last_id(){
    global  $db;
    $Users = $db->query("SELECT * FROM users ORDER BY id DESC LIMIT 1;");
   
   foreach($Users as $User){
     return $User;
    }

}


 

//insert in posts
function insert_post($footageID,$IDwp,$text,$filemusic,$fileimg){
    global  $db;
    $insertpost  = $db->query ("INSERT INTO `users`(`id`, `userIDwp`, `imgUrls`, `musicUrl`, `footageIDurl`, `text`) VALUES (NULL,'$IDwp','$fileimg','$filemusic','$footageID','$text')");
  
    
 
}


