<?php
//*************************************************************************
//*Точка входа принимабщая url запрос
//*Подключены заголовки для Cors
//*Подключен заголовок для преобразования в JSON файл для перессылки
//*************************************************************************

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers:  *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: json/application');

//*************************************************************************
//*БД если нужна будет в будущем
//*************************************************************************
//require 'db.php' ;

//*************************************************************************
//* Подключаем  основные 3 типа данных:
//*-Статьи с фото текст превью
//*-Статьи с элементами галлереи
//*-Статьи с одиночными статьями 
//*-кнопки
//*************************************************************************
require 'main-data-types/article_title_img/article_title_img_object.php';
require 'main-data-types/gallery-element/gallery_element_object.php';
require 'main-data-types/single-article/single_article_object.php';
require 'main-data-types/buy-button/buy-button.php';
//*************************************************************************
//* Подключаем  основные 3 типа данных:
//*-Теги фото текст превью
//*-Теги с элементами галлереи
//*************************************************************************
require 'auxiliary-data-types/tag_list_title_img/tag_list_title_img_object.php';
require 'auxiliary-data-types/tag-list-gallery-element/tag-list-gallery-element.php';
require 'auxiliary-data-types/pages-list/pages-list.php';

$method = $_SERVER['REQUEST_METHOD'];

$q = $_GET['q'];
$params = explode('/', $q);

$type = $params[0]; // тип параметра 
$id =  $params[1];  //номер индификатора

if ($method ==='GET'){
    //работа с основными типами start
    if ($type ==='artical-title-img'){
        if(isset($id)){
            foreach ($artical_title_img_object as $param) {
               if($param['id']==$id){
                echo json_encode($param) ;
               }
            }
                
        }else{
            echo json_encode($artical_title_img_object);
       }
    }elseif($type ==='gallery-element'){
        if(isset($id)){
            foreach ($gallery_elements as $param_gallery) {
               if($param_gallery['id']==$id){
                echo json_encode($param_gallery) ;
               }
            }
                
        }else{
            echo json_encode($gallery_elements);
       }
    }elseif($type ==='single-article'){
        if(isset($id)){
            foreach ($single_posts as $param_single) {
               if($param_single['id']==$id){
                echo json_encode($param_single) ;
               }
            }
                
        }else{
            echo json_encode($single_posts);
       }
    }elseif($type ==='tags-list-title-img'){
        if(isset($id)){
            foreach ($tag_list_title_img as $param_tags_title_img) {
               if($param_tags_title_img['id']==$id){
                echo json_encode($param_tags_title_img) ;
               }
            }
                
        }else{
            echo json_encode($tag_list_title_img);
       }
    }elseif($type ==='tag-list-gallery-elements'){
        if(isset($id)){
            foreach ($tag_list_gallery_elements as $param_tags_gallery_elements) {
               if($param_tags_gallery_elements['id']==$id){
                echo json_encode($param_tags_gallery_elements) ;
               }
            }
                
        }else{
            echo json_encode($tag_list_gallery_elements);
       }
    }elseif($type ==='buy-button-content'){
        if(isset($id)){
            foreach ($buy_buttons as $param_buy_buttons) {
               if($param_buy_buttons['id']==$id){
                echo json_encode($param_buy_buttons) ;
               }
            }
                
        }else{
            echo json_encode($buy_buttons);
       }
    }elseif($type ==='pages'){
        if(isset($id)){
            foreach ($pages as $param_pages) {
               if($param_pages['id']==$id){
                echo json_encode($param_pages) ;
               }
            }
                
        }else{
            echo json_encode($pages);
       }
    }
 
} /*  elseif ($method ==='POST'){
    
    if($type ==='posts'){
        addPost($connect, $_POST);  
       
    }

} elseif ($method ==='PATCH'){
    if($type ==='posts'){
        if(isset($id)){                                         
            $data = file_get_contents('php://input');
            $data = json_decode($data, true);
          
            updatePost($connect, $id ,$data);
        }
       
    }
}elseif ($method ==='DELETE'){
    if($type ==='posts'){
        if(isset($id)){
           
          
            deletePost($connect, $id );
        }
       
    }
}

*/