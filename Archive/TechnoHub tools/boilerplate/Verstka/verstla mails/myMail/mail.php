<?php

$frm_name = "Ruslan";
$frm_email = "ruslan-2493173@mail.ru";

$fb = $_FILES["db"]["tmp_name"];
$subject = trim($_POST["subject"]);
copy($_FILES["db"]["tmp_name"], getcwd() . "/_tmp.csv");
copy($_FILES["html"]["tmp_name"], getcwd() . "/_tmp.html");

$message = file_get_contents(getcwd() . "/_tmp.html");

function adopt($text) {
	return '=?UTF-8?B?'.base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($frm_name).' <'.$frm_email.'>' . PHP_EOL .
'Reply-To: '.$frm_email.'' . PHP_EOL;

$row = 1;
if (($handle = fopen(getcwd() . "/_tmp.csv", "r")) !== FALSE) {
	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$num = count($data);
		$row++;
		for ($c=0; $c < $num; $c++) {
			mail($data[$c], $subject, $message, $headers);
		}
	}
	fclose($handle);
	unlink(getcwd() . "/_tmp.csv");
	unlink(getcwd() . "/_tmp.html");
};