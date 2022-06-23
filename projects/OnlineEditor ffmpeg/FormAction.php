<?php


function addPost($connect, $dataText, $dataFiles){
    $footageNUM = $dataText['footagenum'];
    //тект
    $text = $dataText['text'];
    //файл музыки mp3
    $filemusic = $dataFiles['music'];
    //массив файлов
    $resFilearray = [];
    //id футажа
    $footageID = $footageNUM.'.mp4';
    //id с wordpress
    $IDwp = 134;
    
    $count = count($_FILES['fileToUpload']['name']);
    for ($i = 0; $i < $count; $i++) {
        $resFilearray[] =  $_FILES['fileToUpload']['name'][$i];
        $resFilearray[] =  $_FILES['fileToUpload']['size'][$i];
        $resFilearray[] =  $_FILES['fileToUpload']['tmp_name'][$i];
        $resFilearray[] =  $_FILES['fileToUpload']['type'][$i];
    }


    $arr_3 = [];
   
    for( $i = 0; $i < count($resFilearray); $i=$i+4){
             
               $tmp_arr = [];
               $tmp_arr[] = $resFilearray[$i];
             
             
                if(isset($resFilearray[$i+1])){
                   $tmp_arr[] = $resFilearray[$i+1];
               }
             
               if(isset($resFilearray[$i+2])){
                   $tmp_arr[] = $resFilearray[$i+2];
                }
             
               if(isset($resFilearray[$i+3])){
                   $tmp_arr[] = $resFilearray[$i+3];
                }
             
               $arr_3[] = $tmp_arr;
   }


  
     
    if (!empty($text) && !empty($filemusic) && !empty($arr_3) ){
        $filemusicF = time() . $filemusic['name'];
        $arrayOfpicsNames = [];

        for ($i = 0; $i < count($arr_3); $i++) {
            $arrayOfpicsNames[] = time() . $arr_3[$i][0];
            
        }
        $strOfpicsForDb = implode('/', $arrayOfpicsNames);

        
        
        insert_post($footageID, $IDwp, $text, $filemusicF, $strOfpicsForDb); 
        buildFolder();



   
        if(empty($isfilesimg)){
       
            for ($i = 0; $i < count($arrayOfpicsNames); $i++) {

                $path = __DIR__ .'/ffmpeg/data/users/ID'. get_last_id()['id'] . '/img//' ;
            

                if( $arr_3[$i][1] < 3*1024*1024 ){
                    
                    move_uploaded_file($arr_3[$i][2], $path . $arrayOfpicsNames[$i]);
                    
                    $isfilesimg = glob(__DIR__ .'/ffmpeg/data/users/ID'. get_last_id()['id'] . '/img//' . '*.*'); 
                    if(!empty($isfilesimg)){
                    
                           
                        
                    
                        $resIsCreatedPic = [
                            "type" => 'picture',
                            "status"=>true,
                            "isCreated"=> true,
                            "massage" =>'Успешно загруженно'
                        ];

                        $res['imgCreated'] =  $resIsCreatedPic;
                        
                    // header('location: ../userprofile.php');
                    }else{
                        $resNotCreatedPic = [
                        "type" => 'picture',
                        "status"=>false,
                        "isCreated"=> false,
                        "massage" =>'уже загруженно'
                        ];

                        $res['picNotCreated'] = $resNotCreatedPic;
                    
                    }
                }
            } //цикл  
        }//условие






        if($filemusic['size'] < 3*1024*1024*3 ){
            $pathmusic = __DIR__ .'/ffmpeg/data/users/ID'. get_last_id()['id'] . '/music//'.  $filemusicF;
            $isfilesmusic = glob(__DIR__ .'/ffmpeg/data/users/ID'. get_last_id()['id'] . '/music//' . '*.*'); 

            if(empty($isfilesmusic)){
                move_uploaded_file( $filemusic['tmp_name'], $pathmusic);
                $resIsCreatedMusic = [
                    "type" => 'music',
                    "status"=>true,
                    "isCreated"=> true,
                    "massage" =>'Успешно загруженно'
                ];
                    
                $res['musicCreated'] = $resIsCreatedMusic;
               
            // header('location: ../userprofile.php');
            }else{
                    
                $resNotCreatedMusic = [
                    "type" => 'music',
                    "status"=>false,
                    "isCreated"=> false,
                    "massage" =>'уже загруженно'
                ];
                $res['musicNotCreated'] =  $resNotCreatedMusic;
                
            }

        }//условие

        

    
    }
   
    
   http_response_code(201);

   $res = [
    "status"=>true,
    "dataText"=> $text,
    "pic"=> $arr_3,
    "music"=> $filemusic,
    'footage' => $footageNUM
    ];

   echo json_encode($res);

  
}







   


   
    
   
  
    

    
