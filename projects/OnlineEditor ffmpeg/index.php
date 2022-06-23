<?php

 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Methods: *');
 header('Access-Control-Allow-Headers: *');
 header('Access-Control-Allow-Credentials: true');
 header('Content-type: json/application');

require 'db.php';
require 'queries.php';
require 'buildIDfolders.php' ;
require 'FormAction.php';
//require 'ffmpeg/startPython.php';

$method = $_SERVER['REQUEST_METHOD'];


$q = $_GET['q'];
$params = explode('/', $q);

$Api = $params[0];
$version = $params[1];
$type = $params[2];
$id = $params[3];

if ($method ==='GET'){


    if($Api ==='api'){
        if($version = 'v1'){
            if($type ==='formdata'){
                
                var_dump( $_SERVER['Request_uri']);
                
               // addPost($connect, $_POST);  
            
            }

        }
       
    }

   /*if ($type ==='posts'){
        if(isset($id)){
            getPost($connect, $id);
    }else{
            getPosts($connect);
    }
       
    }*/
    
} elseif ($method ==='POST'){
    if($Api ==='api'){
        if($version = 'v1'){
            if($type ==='formdata'){
                
                addPost($db, $_POST, $_FILES); 
                
            }

        }
       
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




/*

<?php

function getPosts($connect){
   
        $posts = mysqli_query($connect, "SELECT * FROM  `posts` ") ;
        $postList=[];
        while($post = mysqli_fetch_assoc($posts)){
            
         $postList[]=$post;
        }
        echo json_encode($postList);


    }

function getPost($connect,$id){
    $post = mysqli_query($connect, "SELECT * FROM  `posts` WHERE `id`= '$id' ") ;
    if(mysqli_num_rows($post) === 0){
        http_response_code(404);
         $res = [
             "status"=>false,
             "massage"=>"Post not found"
         ];
         echo json_encode( $res);
    }else{
        $post= mysqli_fetch_assoc($post);
        echo json_encode($post);
    } 

}







function   updatePost($connect, $id ,$data){
    $title= $data['title'];
    $body= $data['body'];
    mysqli_query($connect, "UPDATE `posts` SET `title` = '$title', `body`= '$body' WHERE `posts`.`id`= $id   ");
    http_response_code(200);


    $res = [
        "status"=>true,
        "massage"=>"Post is updated"
    ];

    echo json_encode($res);
}





function deletePost($connect, $id ){
    mysqli_query($connect, " DELETE FROM `posts` WHERE `posts`.`id` = '$id'");
    http_response_code(200);


    $res = [
        "status"=>true,
        "massage"=>"Post is deleted"
    ];

    echo json_encode($res);
}


*/