 <?php
$to = 'pozdravit.krasivo@gmail.com';

if ( isset( $_POST['sendMail'] ) ) {
  $name  = substr( $_POST['name'], 0, 64 );
  $tel = substr( $_POST['tel'], 0, 64 );
  $email   = substr( $_POST['email'], 0, 64 );
  $message = substr( $_POST['message'], 0, 250 );
 
  if ( !empty( $_FILES['file']['tmp_name'] ) and $_FILES['file']['error'] == 0 ) {
    $filepath = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
  } else {
    $filepath = '';
    $filename = '';
  }
 
  $body = "Имя:\r\n".$name."\r\n\r\n";
  $body .= "Контактный номер:\r\n".$tel."\r\n\r\n";
  $body .= "E-mail:\r\n".$email."\r\n\r\n";
  $body .= "Описание заказа:\r\n".$message;
 
  send_mail($to, $body, $email, $filepath, $filename);
}

function send_mail($to, $body, $email, $filepath, $filename)
{
  $subject = 'Форма с сайта "Поздравить красиво - это сайт яркого и оригинального видео для всех праздников"';
  $boundary = "--".md5(uniqid(time())); 
  $headers = "From: ".$email."\r\n";   
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .="Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";
  $multipart = "--".$boundary."\r\n";
  $multipart .= "Content-type: text/plain; charset=\"utf-8\"\r\n";
  $multipart .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";

  $body = $body."\r\n\r\n";
 
  $multipart .= $body;
 
  $file = '';
  if ( !empty( $filepath ) ) {
    $fp = fopen($filepath, "r");
    if ( $fp ) {
      $content = fread($fp, filesize($filepath));
      fclose($fp);
      $file .= "--".$boundary."\r\n";
      $file .= "Content-Type: application/octet-stream\r\n";
      $file .= "Content-Transfer-Encoding: base64\r\n";
      $file .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
      $file .= chunk_split(base64_encode($content))."\r\n";
    }
  }
  $multipart .= $file."--".$boundary."--\r\n";
	mail($to, $subject, $multipart, $headers);
}

?>


