<?php

//*************************************************************************
//*  -Изображение (высота не более 900px  ширина не более 1300 px)     (ок)
//* При сохранении желательно сразу генерировать превьюшки с высотами  (ок)
//* 450 px (ок)
//* 300 px (ок)
//* 200 px (ок)
//* -Качество строго 100     (ок)
//* -Название - строка       (ок)
//* -Год создания  - 4 цифры (ок)
//* -Список тегов (категорий) У элемента галереи два тега название категории и цветнойе или ч/б изображение
//* -Описание — текст неизвестной длинны И информация о принте (ок)
//* -есть ли принт или нет (ок)
//* -размер - строка       (ок)
//* -открытый тираж илии ограниченый  (ок)
//* -доступно или продано (ок)
//* -количество экземпляров в тираже - строка  (ок)
//* -текущий  экземпляр — строка  (ок)
//* -цена
//*************************************************************************** 

 $gallery_elements =array( 
    array(    
        'id'=> 1,    //-Но дополнительно требуется сортировка перетаскиванием. Просто по тому что удобно.    (ок)        
        'gallery-element-name' => 'Имя элемента галереи',  //* -текущий  экземпляр — строка //* -Название - строка       (ок)
        'gallery-element-body' => array(
            'text-content' =>array( 
                'text-about-print' => 'Текст о принте  бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла
                            бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла бла
                            бла бла бла бла бла бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла бла   
                            бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла бла
                            бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла
                            бла бла бла блабла бла бла бла бламбла бла бла бла бла', //* -Описание — текст неизвестной длинны И информация о принте (ок)
                    
                ),
            'image-size'=>array(
                    'min-size'=>array('width'=>null,'heigth'=>null), //Минимальный размер
                    'max-size'=>array('width'=>1300,'heigth'=>900)   //максимальный размер
                ),    
            'photo-for-preview'=> array(
            'image-preview-size'=>array(
                    'size-1'=>array('width'=>null,'heigth'=>450),  //* 450 px (ок)
                    'size-2'=>array('width'=>null,'heigth'=>300),  //* 300 px (ок)
                    'size-3'=>array('width'=>null,'heigth'=>200)   //* 200 px (ок)
                ),  
            ),
            'year-of-creation' => 2020,       //* -Год создания  - 4 цифры (ок)
            'photo' => array(
            'photo-path-1'=> 'src/img/пример-фото.jpeg', //путь к фотографии
            ),
            'is-print' => true,               //* -есть ли принт или нет (ок)
            'tirage-is-open'=>true,           //* -открытый тираж илии ограниченый  (ок)
            'is-available'=> true,            //* -доступно или продано (ок)
            'number of instances'=> 30,        //* -количество экземпляров в тираже - строка  (ок)
            'tags' => array(
           // require '../../auxiliary-data-types/tag_list_title_img/tag_list_title_img_object.php';  //подключение нужных тегов  (ок)
        
            ),
            'size'=> '60 cm * 90 cm', //* -размер - строка       (ок)
            'price'=> 3000     //* -цена
        
            
        )
    ),
    array(    
        'id'=> 2,    //-Но дополнительно требуется сортировка перетаскиванием. Просто по тому что удобно.    (ок)        
        'gallery-element-name' => 'Имя элемента галереи',  //* -текущий  экземпляр — строка //* -Название - строка       (ок)
        'gallery-element-body' => array(
            'text-content' =>array( 
                'text-about-print' => 'Текст о принте  бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла
                            бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла бла
                            бла бла бла бла бла бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла бла   
                            бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла бла
                            бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла
                            бла бла бла блабла бла бла бла бламбла бла бла бла бла', //* -Описание — текст неизвестной длинны И информация о принте (ок)
                    
                ),
            'image-size'=>array(
                    'min-size'=>array('width'=>null,'heigth'=>null), //Минимальный размер
                    'max-size'=>array('width'=>1300,'heigth'=>900)   //максимальный размер
                ),    
            'photo-for-preview'=> array(
            'image-preview-size'=>array(
                    'size-1'=>array('width'=>null,'heigth'=>450),  //* 450 px (ок)
                    'size-2'=>array('width'=>null,'heigth'=>300),  //* 300 px (ок)
                    'size-3'=>array('width'=>null,'heigth'=>200)   //* 200 px (ок)
                ),  
            ),
            'year-of-creation' => 2020,       //* -Год создания  - 4 цифры (ок)
            'photo' => array(
            'photo-path-1'=> 'src/img/пример-фото.jpeg', //путь к фотографии
            ),
            'is-print' => true,               //* -есть ли принт или нет (ок)
            'tirage-is-open'=>true,           //* -открытый тираж илии ограниченый  (ок)
            'is-available'=> true,            //* -доступно или продано (ок)
            'number of instances'=> 30,        //* -количество экземпляров в тираже - строка  (ок)
            'tags' =>true,
            'size'=> '60 cm * 90 cm', //* -размер - строка       (ок)
            'price'=> 3000,     //* -цена
            
        
            
        )
    ),
    array(    
        'id'=> 3,    //-Но дополнительно требуется сортировка перетаскиванием. Просто по тому что удобно.    (ок)        
        'gallery-element-name' => 'Имя элемента галереи',  //* -текущий  экземпляр — строка //* -Название - строка       (ок)
        'gallery-element-body' => array(
            'text-content' =>array( 
                'text-about-print' => 'Текст о принте  бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла
                            бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла бла
                            бла бла бла бла бла бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла бла   
                            бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла бла
                            бла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла бла бла бла блабла
                            бла бла бла блабла бла бла бла бламбла бла бла бла бла', //* -Описание — текст неизвестной длинны И информация о принте (ок)
                    
                ),
            'image-size'=>array(
                    'min-size'=>array('width'=>null,'heigth'=>null), //Минимальный размер
                    'max-size'=>array('width'=>1300,'heigth'=>900)   //максимальный размер
                ),    
            'photo-for-preview'=> array(
            'image-preview-size'=>array(
                    'size-1'=>array('width'=>null,'heigth'=>450),  //* 450 px (ок)
                    'size-2'=>array('width'=>null,'heigth'=>300),  //* 300 px (ок)
                    'size-3'=>array('width'=>null,'heigth'=>200)   //* 200 px (ок)
                ),  
            ),
            'year-of-creation' => 2020,       //* -Год создания  - 4 цифры (ок)
            'photo' => array(
            'photo-path-1'=> 'src/img/пример-фото.jpeg', //путь к фотографии
            ),
            'is-print' => true,               //* -есть ли принт или нет (ок)
            'tirage-is-open'=>true,           //* -открытый тираж илии ограниченый  (ок)
            'is-available'=> true,            //* -доступно или продано (ок)
            'number of instances'=> 30,        //* -количество экземпляров в тираже - строка  (ок)
            'tags' => array(
            //require '../../auxiliary-data-types/tag_list_title_img/tag_list_title_img_object.php';  //подключение нужных тегов  (ок)
        
            ),
            'size'=> '60 cm * 90 cm', //* -размер - строка       (ок)
            'price'=> 3000     //* -цена
        
            
        )
    ),
);


?>