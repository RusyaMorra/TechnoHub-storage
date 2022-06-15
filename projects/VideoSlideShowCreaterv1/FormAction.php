<?php




function addPost($connect, $dataText, $dataFiles){
    //тект
    $text = $dataText['text'];
    //файл музыки mp3
    $filemusic = $dataFiles['music'];
    //массив файлов
    $resFilearray = [];
    //id футажа
    $footageID = 2 .'.mp4';
    //id с wordpress
    $IDwp = 134;
    
    $count = count($_FILES['fileToUpload']['name']);
    for ($i = 0; $i < $count; $i++) {
        $resFilearray[] =  $_FILES['fileToUpload']['name'][$i];
        $resFilearray[] =  $_FILES['fileToUpload']['size'][$i];
        $resFilearray[] =  $_FILES['fileToUpload']['tmp_name'][$i];
     
    }

   
     
    http_response_code(201);


    $res = [
        "status"=>true,
        "dataText"=> $text,
        "pic"=> $resFilearray ,
        "music"=> $filemusic,
    ];

    echo json_encode($res);

  /*

    if (!empty($text) && !empty($filemusic) && !empty($resFilearray) ){
        $filemusic = time() . $filemusic['name'];
        $fileimg = time() .  $resFilearray[0]['name'];
        
        insert_post($footageID, $IDwp, $text, $filemusic, $fileimg);
        buildFolder();

        $path = __DIR__ .'/ffmpeg/data/users/ID'. get_last_id()['id'] . '/img//'. time().  $_FILES['fileimg']['name'];
        $pathmusic = __DIR__ .'/ffmpeg/data/users/ID'. get_last_id()['id'] . '/music//'. time().  $_FILES['filemusic']['name'];

        if( !$_FILES['fileimg']['size'] < 3*1024*1024 && !$_FILES['filemusic']['size'] < 3*1024*1024  ){
            $filesimg = glob(__DIR__ .'/ffmpeg/data/users/ID'. get_last_id()['id'] . '/img//' . '*.*'); 
            $filesmusic = glob(__DIR__ .'/ffmpeg/data/users/ID'. get_last_id()['id'] . '/music//' . '*.*'); 
        
            
            if(empty($filesimg)){
                move_uploaded_file( $_FILES['fileimg']['tmp_name'], $path);
            // header('location: ../userprofile.php');
            }else{
                
            echo 'уже загруженно';
        
            }

            if(empty($filesmusic)){
                move_uploaded_file( $_FILES['filemusic']['tmp_name'], $pathmusic);
                echo 'ура';
            // header('location: ../userprofile.php');
            }else{
                
                echo 'уже загруженно аудиофайл';
        
            }

        }

    
    }*/
}







   


   
    
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
   
    $arr_3 = [];
   
 for( $i = 0; $i < $arr.length; $i=$i+3){
          
            $tmp_arr = [];
            $tmp_arr.push($arr[$i]);
          
          
             if(typeof $arr[$i+1] != 'undefined'){
                $tmp_arr.push($arr[$i+1]);
            }
          
            if(typeof $arr[$i+2] != 'undefined'){
                $tmp_arr.push($arr[$i+2]);
             }
          
            $arr_3.push($tmp_arr);
        }
      
    

    
