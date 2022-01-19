<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php' ;
require 'PHPMailer/src/Exception.php' ;

$mail = new PHPMailer(true);
$mail->CharSet='UTF-8';                                          
$mail->setLanguage('ru','PHPMailer/language/')       = 'smtp.example.com';                    
$mail->IsHTML = true;    


$mail->setForm('ggadwf@mail.ru', 'чел');
$mail->addAddress('muso-123@mail.ru');
$mail->Subject='привет';


$body='<h1>Привет!</h1>';

if(trim(!empty($_POST['name']))){
	$body.='<p><strong>Имя:</strong>'.$_POST['name'].'</p>'
}
if(trim(!empty($_POST['email']))){
	$body.='<p><strong>E-mail:</strong>'.$_POST['email'].'</p>'
}
if(trim(!empty($_POST['phone']))){
	$body.='<p><strong>Phone:</strong>'.$_POST['phone'].'</p>'
}
if(trim(!empty($_POST['massage']))){
	$body.='<p><strong>Massage:</strong>'.$_POST['massage'].'</p>'
}

$mail->Body=$body;

if(!mail->send()){
	$massage='ошибка'
}else{
	$massage='данные отправлены!'
	
}


$response=['massage'=>$massage];
header('Content-type: application/json');
echo json_encode($response);


?>