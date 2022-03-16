<?php

//*************************************************************************
//*  В отличии от single_article получает 3  дополнительных поля 
//*************************************************************************

$artical_title_img_object = array(
    array(
        'id'=> 1,  //Но дополнительно требуется сортировка перетаскиванием. Просто по тому что удобно.                     
        'name' => 'Имя статьи',   //* -название  (ок)
        'body' => array(
            'content' =>array( 
                'text' =>  'This two day intensive course is dedicated to fine art  nude photography. It is open for everybody who has a passion to photography and art nude in particular and  interested in my working methods and tricks. This two ',
                'limit-for-preview' => 220 // ограничение для превью статьи  (ок)         
                ),
            'photoforpreview'=> array(
                'defaulttype'=> array(
                    'circleimg'=> true, //круглое превью (ок)
                    'squareimg'=> false //квадратное превью (ок)
                ),
                'imagesize'=>array(
                    'class'=>'.img-1',
                    'minsize'=>array('width'=>120,'heigth'=>120),//минимальный  размер (ок)
                    'maxsize'=>array('width'=>200,'heigth'=>200) //максимальный размер (ок)
                ),  
            ),
            'video' => array(
            'video-path-1'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-2'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-3'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-4'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-5'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-6'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-7'=> 'src/video/пример-видео.mp4'  //путь к видео  (ок)
            ),
            'photo' => array(
            'main'=> 'media/placeholder-1.jpg', //путь к видео    (ок)
            'photo-path-2'=> 'src/img/пример-фото.jpeg', //путь к видео    (ок)
            'photo-path-3'=> 'src/img/пример-фото.jpeg', //путь к видео    (ок)
            'photo-path-4'=> 'src/img/пример-фото.jpeg', //путь к видео    (ок)
            'photo-path-5'=> 'src/img/пример-фото.jpeg', //путь к видео    (ок)
            'photo-path-6'=> 'src/img/пример-фото.jpeg', //путь к видео    (ок)
            'photo-path-7'=> 'src/img/пример-фото.jpeg'  //путь к видео    (ок) 
            ),
            'tags' => array(
            //require '../../auxiliary-data-types/tag_list_title_img/tag_list_title_img_object.php';  //подключение нужных тегов  (ок)
        
            )
        
            
        )
    ),
    array(
        'id'=> 2,  //Но дополнительно требуется сортировка перетаскиванием. Просто по тому что удобно.                     
        'name' => 'Имя статьи',   //* -название  (ок)
        'body' => array(
            'content' =>array( 
                'text' =>  'This two day intensive course is dedicated to fine art nude photography. It is open for everybody who has a passion to photography and art nude in particular and  interested in my working methods and tricks. This two ',
                'limit-for-preview' => 220 // ограничение для превью статьи  (ок)         
                ),
            'photoforpreview'=> array(
                'default-type'=> array(
                    'circleimg'=> true, //круглое превью (ок)
                    'squareimg'=> false //квадратное превью (ок)
                ),
                'imagesize'=>array(
                    'class'=>'.img-1',
                    'minsize'=>array('width'=>120,'heigth'=>120),//минимальный  размер (ок)
                    'maxsize'=>array('width'=>200,'heigth'=>200) //максимальный размер (ок)
                ),  
            ),
            'video' => array(
            'video-path-1'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-2'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-3'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-4'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-5'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-6'=> 'src/video/пример-видео.mp4', //путь к видео  (ок)
            'video-path-7'=> 'src/video/пример-видео.mp4'  //путь к видео  (ок)
            ),
            'photo' => array(
            'main'=> 'media/placeholder-1.jpg', //путь к видео    (ок)
            'photo-path-2'=> 'src/img/пример-фото.jpeg', //путь к видео    (ок)
            'photo-path-3'=> 'src/img/пример-фото.jpeg', //путь к видео    (ок)
            'photo-path-4'=> 'src/img/пример-фото.jpeg', //путь к видео    (ок)
            'photo-path-5'=> 'src/img/пример-фото.jpeg', //путь к видео    (ок)
            'photo-path-6'=> 'src/img/пример-фото.jpeg', //путь к видео    (ок)
            'photo-path-7'=> 'src/img/пример-фото.jpeg'  //путь к видео    (ок) 
            ),
            'tags' => true
        
            
        )
    ),


);



?>