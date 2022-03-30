<?php
/**
 * script name: Find and Replace (FAR)
 * author:      Bordyzhan Sergey
 * author mail: bordyzhan@gmail.com
 * author URI:  http://cmsdev.org/
 * script URI:  http://secu.ru/scripts/find-and-replace
 * version:     1.4
 * copyright:   Copyright (C) 2013 secu.ru. All rights reserved.
 * license:     GNU General Public License version 2 or later
*/

//Параметры
define('PASS', '123'); //пароль (желательно поменять на свой). Для запуска скрипта, в браузер введите адрес http://example.com/far.php?pass=123, где example.com - адрес вашего сайта, Dr57fd - ваш пароль
define('EXT', 'gif,jpg,jpeg,png,zip,rar,pdf,css,flv,mp3,mp4,swf'); //расширения файлов, в которых не производить поиск
define('CNT_STR', 100); //количество выводимых символов в результате поиска (до искомой фразы и после)

define('BASE_NAME', basename(__FILE__));
define('DIR_NAME', dirname(__FILE__));

//защита от несанкционированного доступа и хакерских сканеров :)
if ($_GET['pass'] != PASS) {
	header('HTTP/1.0 404 Not Found');
	header('Status: 404 Not Found'); 
	die();
}

//поддержка старых версий PHP
if (!function_exists('file_put_contents')) {
	function file_put_contents($filename, $data) {
		
		$f = fopen($filename, 'w');
		
		if (!$f) {
			return false;
		} else {
			$bytes = fwrite($f, $data);
			fclose($f);
			
			return $bytes;
		}
	}
}

//поддержка старых версий PHP
if (!function_exists('file_get_contents')) {
	function file_get_contents($filename) {
		
		$f = fopen($filename, 'r');
		$fcontents = fread($f, filesize($filename));
		
		fclose($f);
		
		return $fcontents;
	}
}

//функция поиска
function scan_dir($dirname) { 
	
	global $text, $replace, $ext, $cnt, $html, $regex, $regis;
				
	$dir = opendir($dirname);
				
	while (($file = readdir($dir)) !== false) {
		
		if ($file != '.' && $file != '..') {
			$file_name = $dirname.DIRECTORY_SEPARATOR.$file;
			
			if (is_file($file_name)) {
				$ext_name = substr(strrchr($file_name, '.'), 1);
				
				if (in_array($ext_name, $ext) || $file_name == '.'.DIRECTORY_SEPARATOR.BASE_NAME) {
					continue;
				}
							
				$content = encoding(file_get_contents($file_name));
				$str = '';
				
				if ($regex) {
					if (preg_match('/'.$text.'/s'.$regis, $content, $res, PREG_OFFSET_CAPTURE)) {
						$str = preg_replace('/('.$text.')/s'.$regis, "%find%\$1%/find%", mysubstr($content, $res[0][1], $res[0][0]));
					}
				} else {
					if (($pos = strpos($content, $text)) !== false) {
						$str = str_replace($text, '%find%'.$text.'%/find%', mysubstr($content, $pos, $text));
					}
				}
				
				if ($str != '') {
					$cnt++;
					
					if ($replace) {
						replace($content, $file_name, $regex);
					}
					
					$arg = urlencode(DIR_NAME.DIRECTORY_SEPARATOR.$file_name);
					$html .= '<div class="result-item"><div class="left"><b>'.$cnt.':</b> <span class="file">'.encoding($file_name).'</span></div><div onClick="del(this, \''.$arg.'\')" title="Удалить файл" class="btn btn-danger btn-mini right">x</div><div onClick="edit(\''.$arg.'\')" class="btn btn-info btn-mini right">Редактировать</div><div class="clear"></div><code title="Щелкните два раза, чтоб увидеть полный текст файла" ondblclick="seeAll(this, \''.$arg.'\')">...'.htmlspecialchars($str).'...</code></div>';
				}
			}
		
			if (is_dir($file_name)) {
				scan_dir($file_name);
			}
		}			
	}
				
	closedir($dir);
}

//удаляем экранирование если нужно
function mystripslashes($string) {
	
	if (get_magic_quotes_gpc()) {
		return stripslashes($string);
	} else {
		return $string;
    }
}

//функция замены
function replace($content, $file_name, $regex) {
	
	global $retext, $text, $regis;
	
	if ($regex) {
		$content = preg_replace('/'.$text.'/s'.$regis, $retext, $content);
	} else {
		$content = str_replace($text, $retext, $content); 
	}
						
	if (!is_writable($file_name)) {
		chmod($file_name, 0644);
	}
									
	return file_put_contents($file_name, $content);
}


function mysubstr($content, $pos, $find_str, $cnt_str = CNT_STR) {
	
	$pos_start = $pos - $cnt_str;
					
	if ($pos_start <= 0) {
		$pos_start = 0;
	}
					
	$pos_end = ($pos - $pos_start) + strlen($find_str) + $cnt_str;
						
	return substr($content, $pos_start, $pos_end);
}

function encoding($content) {
	
	if (mb_check_encoding($content, 'windows-1251') && !mb_check_encoding($content, 'utf-8')) {
		return mb_convert_encoding($content, 'utf-8', 'windows-1251');
	} else {
		return $content;
	}
}

function tree($dirname) {
	
	if (is_readable($dirname)) {
		$dir = opendir($dirname);
		
		while (($item = readdir($dir)) !== false) {
			if ($item != '.' && $item != '..') {
				$path = $dirname.DIRECTORY_SEPARATOR.$item;
				
				if (is_dir($path)) {
					echo '<div><span onClick="getDirs(this)">+</span><a rel="'.$path.'" onClick="document.getElementById(\'dir\').value = this.getAttribute(\'rel\');" href="javascript: void(0)">'.$item.'</a><div class="tree-items"></div></div>';
				}
			}
		}
	} else {
		echo '<div>Директория не доступна для чтения</div>';	
	}
}

header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
set_time_limit(0);
ini_set('max_execution_time', '1800');
ini_set('memory_limit', '256M');

$err_arr = array(0 => '', 1 => '');

if (isset($_POST['submit'])) {
	
	$err = '';
	
	if (empty($_POST['text'])) {
		$err .= '<div>Введите текст для поиска</div>';
		$err_arr[0] = ' class="error"';
	} else {
		$text = mystripslashes($_POST['text']);
	}
	
	if (trim($_POST['dir']) == '') {
		$err .= '<div>Введите имя директории, в которой производить поиск</div>';
		$err_arr[1] = ' class="error"';
	} else {
		$dir = trim($_POST['dir']);
	}
	
	$retext = mystripslashes($_POST['retext']);
	$replace = isset($_POST['replace']) ? 1 : 0;
	$regex = isset($_POST['regex']) ? 1 : 0;
	$regis = isset($_POST['regis']) ? '' : 'i';
		
	if (empty($err)) {
		$cnt = 0;
		$ext = explode(',', $_POST['ext']);
		$start_time = microtime(true);
			
		$html = '<div class="result">';

		if ($replace) {
			$html .= '<h2>Заданный текст заменен в файлах:</h2>';
		} else {
			$html .= '<h2>Заданный текст найден в файлах:</h2> ';
		}
		
		if (is_readable($dir)) {
			scan_dir($dir);	
		} else {
			$err .= '<div>Директория не доступна для чтения</div>';
			$err_arr[1] = ' class="error"';
		}
		
		if (!$cnt) {
			$html .= 'Нет совпадений';
		}
				
		$exec_time = round(microtime(true) - $start_time, 3);
		$html .= '<br><b>Время выполнения: '.$exec_time.' сек.</b></div>';
	}
}

if (isset($_POST['quote'])) {
	echo preg_quote(mystripslashes($_POST['quote']), '/');
	exit();
}

if (isset($_POST['all'])) {
	$file = $_POST['all'];
	
	if (is_file($file) == true) {
		$content = encoding(file_get_contents($file));
		
		$text = mystripslashes($_POST['text_e']);
		
		if ($_POST['regex_e']) {
			$content = preg_replace('/('.$text.')/s'.$_POST['regis_e'], "%find%\$1%/find%", $content);
		} else {
			$content = str_replace($text, '%find%'.$text.'%/find%', $content);
		}
		
		echo nl2br(str_replace(array('%find%', '%/find%'), array('<b>', '</b>'), htmlspecialchars($content)));
	} else {
		echo 'Ошибка: файл не найден';
	}
	
	exit();
}

if (isset($_POST['del'])) {
	$file = $_POST['del'];
	
	if (is_file($file) == true) {
		chmod($file, 0644);
		
		if (@unlink($file) == false) {
			echo 'Ошибка: не удалось удалить файл';
		} else {
			echo 'ok';	
		}
	} else {
		echo 'Ошибка: не удалось удалить файл';
	}
	
	exit();
}

if (isset($_POST['save'])) {
	$file = $_POST['save'];
	
	if (is_file($file) == true) {
		$result = file_put_contents($file, mystripslashes($_POST['source']));
		
		if ($result === false) {
			echo 'Ошибка записи';
		} else {
			echo 'ok';
		}
	} else {
		echo 'Ошибка: файл не найден';
	}
	
	exit();
}

if (isset($_POST['tree'])) {
	echo tree($_POST['tree']);
	
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Поиск и замена текста в содержимом файлов</title>
<script type="text/javascript">
	var req;
	var handlerPath = '<?php echo BASE_NAME.'?pass='.$_GET['pass']; ?>';

	function createRequest() {
		
		if (window.XMLHttpRequest)
			req = new XMLHttpRequest();
		else if (window.ActiveXObject) {
			try {
				req = new ActiveXObject('Msxml2.XMLHTTP');
			} catch (e) {}
			
			try {
				req = new ActiveXObject('Microsoft.XMLHTTP');
			} catch (e) {}
		}
		
		return req;
	}

	function getData(handlerPath, parameters) {

		req = createRequest();
		
		if (req) {
			req.open("POST", handlerPath, false);
			req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			req.send(parameters);

			if (req.status == 200) {
				var eData = req.responseText;
				var eArray = new Object(eData);
			} else {
				alert("Не удалось получить данные:\n" + req.statusText);
			}
		} else {
			alert("Браузер не поддерживает AJAX");
		}
		
		return eArray;
	}
	
	function getQuote() {
		
		var res_str;
		var str = document.getElementById('quote').value;
		
		res_str = getData(handlerPath, 'quote=' + str);
		document.getElementById('quote').value = res_str;
	}
	
	function getDirs(obj) {
		
		var res_str, dirname;
		var ds = '<?php echo urlencode(DIRECTORY_SEPARATOR); ?>';
		
		if (obj.innerHTML == '..') {
			dirname = obj.getAttribute('rel');
			res_str = getData(handlerPath, 'tree=' + dirname);
			obj.parentNode.childNodes[1].innerHTML = res_str;
			obj.setAttribute('rel', dirname + ds + '..');
			
			return;
		}
		
		var child = obj.parentNode.childNodes[2];
		
		if (obj.innerHTML == '+') {
			dirname = encodeURIComponent(obj.parentNode.childNodes[1].getAttribute('rel'));
			res_str = getData(handlerPath, 'tree=' + dirname);
			child.innerHTML = res_str;
			child.style.display = 'block';
			obj.innerHTML = '-';
		} else {
			child.style.display = 'none';
			obj.innerHTML = '+';
		}
	}
	
	function display(obj) {
		
		if (obj.checked) {
			document.getElementById('regex-block').style.display = 'block';
			document.getElementById('regis-block').style.display = 'block';
		} else {
			document.getElementById('regex-block').style.display = 'none';
			document.getElementById('regis-block').style.display = 'none';
		}
	}
	
	function loader() {
		
		document.getElementById('loader-block').style.display = 'block';
	}
	<?php if (!isset($_GET['edit'])) { ?>
	window.onload = function(){display(document.getElementById('regex'))};
	<?php } else { ?>
	function save(file_name) {

		var res_str;
		var source = document.getElementById('source').value;

		res_str = getData(handlerPath, 'save=' + file_name + '&source=' + encodeURIComponent(source));
			
		if (res_str != 'ok') {
			alert(res_str);
		} else {
			alert('Файл сохранен успешно');
		}
	}
	
	<?php } if (isset($_POST['submit']) && empty($err)) { ?>
	function seeAll(obj, file_name) {
		
		var res_str;
		var handler = function(event) {
			var evnt = event;
			
			if (evnt === undefined) {
				evnt = window.event;
			}
			
			var e = evnt.toElement || evnt.relatedTarget;
        
			if (e.parentNode == this || e == this) {
			   return;
			}
			
			exitCode(obj, file_name);
			return false;
		};
		
		res_str = getData(handlerPath, 'all=' + file_name + '&regex_e=<?php echo $regex; ?>&regis_e=<?php echo $regis; ?>&text_e=<?php echo urlencode($text); ?>');
		document.getElementById('hold').value = obj.innerHTML;
		obj.innerHTML = res_str;
		obj.style.height = '200px';
		obj.style.overflow = 'scroll';
		obj.scrollTop = 0;
		obj.ondblclick = '';
		obj.onmouseout = handler;
	}
	
	function exitCode(obj, file_name) {
		
		var handler = function() {
			seeAll(obj, file_name);
			return false;
		};
		
		obj.innerHTML = document.getElementById('hold').value;
		obj.style.height = 'auto';
		obj.style.overflow = 'inherit';
		obj.ondblclick = handler;
		obj.onmouseout = '';
	}
	
	function del(obj, file_name) {

		if (confirm('Вы действительно хотите удалить этот файл?')) {
			var res_str;
			
			res_str = getData(handlerPath, 'del=' + file_name);
			
			if (res_str != 'ok') {
				alert(res_str);
			} else {
				obj.parentNode.innerHTML = '<div class="alert-error del-msg"><h4>Удалено</h4></div>'
			}
		}
	}
	
	function edit(file_name) {
		
		window.open(handlerPath + '&edit=' + file_name, 'editwindow', 'width=600,height=750,toolbar=0,location=0,menubar=0,scrollbars=0,status=0');
	}
	<?php } ?>
</script>
<style>
body {
	margin: 0;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 14px;
	line-height: 20px;
	color: #333333;
	background-color: #F5F5F5;
	padding: 0px 20px;
}

a {
	color: #0088cc;
	text-decoration: none;
}

a:hover {
	color: #005580;
	text-decoration: underline;
}

table {
	border-collapse: collapse;
	border-spacing: 0;
	width: 100%;
}

td {
	padding: 0px 10px 10px 0px;
}

.header {
	border-bottom: 1px solid #E5E5E5;
	padding: 10px 20px;
}

.logo {
	font-size: 36px;
	float: left;
}

.logo a {
	display: block;
	height: 23px;
	line-height: 17px;
}

.logo a:hover {
	text-decoration: none;
}

.slogan {
	font-size: 12px;
	letter-spacing: 4px;
	line-height: 11px;
}

.version {
	float: right;
	margin-top: 5px;
}

.wrapper, .result, .tree {
	background-color: #FFFFFF;
    border: 1px solid #E5E5E5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
	-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    margin: 40px auto 0;
    max-width: 703px;
    min-width: 326px;
    padding: 19px 29px 29px;
}

textarea, input[type="text"] {
	background-color: #ffffff;
	border: 1px solid #cccccc;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	-webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
	-moz-transition: border linear 0.2s, box-shadow linear 0.2s;
	-o-transition: border linear 0.2s, box-shadow linear 0.2s;
	transition: border linear 0.2s, box-shadow linear 0.2s;
	display: inline-block;
	height: 20px;
	padding: 4px 6px;
	font-size: 14px;
	line-height: 20px;
	color: #555555;
	vertical-align: middle;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	width: 95%;
}

textarea:focus, input[type="text"]:focus {
	border-color: rgba(82, 168, 236, 0.8);
	outline: 0;
	outline: thin dotted \9;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
}

textarea {
	height: auto;
	height: 100px;
}

.error {
	color: #B94A48;
}

.error textarea, .error input[type="text"] {
	border-color: #b94a48;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.error textarea:focus, .error input[type="text"]:focus {
	border-color: #953b39;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #d59392;
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #d59392;
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #d59392;
}

.alert-error {
	padding: 8px 35px 8px 14px;
	margin-bottom: 20px;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	background-color: #fcf8e3;
	border: 1px solid #fbeed5;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	color: #b94a48;
	background-color: #f2dede;
	border-color: #eed3d7;
}

code {
	padding: 0 3px 2px;
	font-family: Monaco, Menlo, Consolas, "Courier New", monospace;
	font-size: 12px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	padding: 2px 4px;
	color: #d14;
	background-color: #f7f7f9;
	border: 1px solid #e1e1e8;
	display: block;
}

code b {
	color: #333;
	background: #FF5;
}

.alert-error h4 {
	margin: 0px;
}

.help {
	cursor: pointer;
	color: #3A87AD;	
}

.help:hover {
	font-weight: bold;
}

label {
	line-height: 14px;
	color: #999999;
	white-space: nowrap;
	vertical-align: baseline;
}

.left {
	float: left;
}

.right {
	float: right;
	margin-right: 20px;	
}

.clear {
	clear: both;
}

#regex-block, #regis-block {
	display: none;	
}

#regex-block {
	text-align: center;
}

.btn {
	display: inline-block;
	*display: inline;
	padding: 4px 12px;
	margin-bottom: 0;
	*margin-left: .3em;
	font-size: 14px;
	line-height: 20px;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	border: 1px solid #bbbbbb;
	*border: 0;
	border-bottom-color: #a2a2a2;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	*zoom: 1;
	-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
	-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn:first-child {
	*margin-left: 0;
}

.btn:hover {
	text-decoration: none;
	background-position: 0 -15px;
	-webkit-transition: background-position 0.1s linear;
	-moz-transition: background-position 0.1s linear;
	-o-transition: background-position 0.1s linear;
	transition: background-position 0.1s linear;
}

.btn:focus {
	outline: thin dotted #333;
	outline: 5px auto -webkit-focus-ring-color;
	outline-offset: -2px;
}

.btn:active {
	background-image: none;
	outline: 0;
	-webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
	-moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
	box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn-success {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #5bb75b;
	*background-color: #51a351;
	background-image: -moz-linear-gradient(top, #62c462, #51a351);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
	background-image: -webkit-linear-gradient(top, #62c462, #51a351);
	background-image: -o-linear-gradient(top, #62c462, #51a351);
	background-image: linear-gradient(to bottom, #62c462, #51a351);
	background-repeat: repeat-x;
	border-color: #51a351 #51a351 #387038;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
	filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-success:hover, .btn-success:active {
	color: #ffffff;
	background-color: #51a351;
	*background-color: #499249;
}

.btn-danger {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #da4f49;
	*background-color: #bd362f;
	background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
	background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
	background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
	background-image: linear-gradient(to bottom, #ee5f5b, #bd362f);
	background-repeat: repeat-x;
	border-color: #bd362f #bd362f #802420;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0);
	filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-danger:hover, .btn-danger:active {
	color: #ffffff;
	background-color: #bd362f;
	*background-color: #a9302a;
}

.btn-danger:active {
	background-color: #942a25 \9;
}

.btn-danger.right {
	margin-right: 0px;	
}

.btn-info {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #49afcd;
	*background-color: #2f96b4;
	background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
	background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
	background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
	background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
	background-repeat: repeat-x;
	border-color: #2f96b4 #2f96b4 #1f6377;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
	filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.btn-info:hover, .btn-info:active {
	color: #ffffff;
	background-color: #2f96b4;
	*background-color: #2a85a0;
}

.btn-info:active {
	background-color: #24748c \9;
}

.btn-info.right {
	margin-right: 2px;	
}

#loader-block {
	color: #333;
	display: none;
	font-size: 12px;
}

#loader {
	width: 30px;
	height: 30px;
	margin: 40px 0 0 0;
	border: 8px solid #333;
	border-right-color: transparent;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-webkit-box-shadow: 0 0 25px 2px #000;
	-moz-box-shadow: 0 0 25px 2px #000;
	box-shadow: 0 0 25px 2px #000;
	-webkit-animation: spin 1s linear infinite;
	-moz-animation: spin 1s linear infinite;
	-ms-animation: spin 1s linear infinite;
	-o-animation: spin 1s linear infinite;
	animation: spin 1s linear infinite;
}

@-webkit-keyframes spin {
	from {-webkit-transform: rotate(0deg); opacity: 0.4;}
	50% {-webkit-transform: rotate(180deg); opacity: 1;}
	to {-webkit-transform: rotate(360deg); opacity: 0.4;}
}

@-moz-keyframes spin {
	from {-moz-transform: rotate(0deg); opacity: 0.4;}
	50% {-moz-transform: rotate(180deg); opacity: 1;}
	to {-moz-transform: rotate(360deg); opacity: 0.4;}
}

@-ms-keyframes spin {
	from {-ms-transform: rotate(0deg); opacity: 0.4;}
	50% {-ms-transform: rotate(180deg); opacity: 1;}
	to {-ms-transform: rotate(360deg); opacity: 0.4;}
}

@-o-keyframes spin {
	from {-o-transform: rotate(0deg); opacity: 0.4;}
	50% {-o-transform: rotate(180deg); opacity: 1;}
	to {-o-transform: rotate(360deg); opacity: 0.4;}
}

@keyframes spin {
	from {transform: rotate(0deg); opacity: 0.2;}
	50% {transform: rotate(180deg); opacity: 1;}
	to {transform: rotate(360deg); opacity: 0.2;}
} 

.result {
	max-width: 100%;
}

.footer {
	margin-top: 30px;
}

.footer .copy {
	margin: 0 auto;
	width: 100px;
	color: #ccc;
	font-size: 12px;
}

#hold {
	display: none;
}

.btn-mini {
	padding: 0 6px;
	font-size: 10.5px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	margin-bottom: 3px;
}

.file {
	color: #0088CC;
}

.result-item {
	margin-bottom: 25px;
}

.result-item .left {
	height: 25px;
}

.result-item .btn {
	display: none;	
}

.result-item:hover .btn {
	display: block;
}

.result-item:hover code {
	border: 1px solid #cdcdce;
}

#source {
	height: 500px;
	margin-bottom: 10px;
}

.alert-error.del-msg {
	text-align: center;
}

.tree {
	height: 150px;
	width: 95%;
	overflow: auto;
	margin: 0px 0px 10px 0px;
	padding: 5px 10px;
}

.tree span {
	margin-right: 5px;
	cursor: pointer;
	color: #333333;
}

.tree-items {
	margin-left: 10px;
}
</style>
</head>
<body>
<div class="header">
	<div class="logo">
		<a title="secu.ru" href="http://secu.ru/">secu.ru</a>
		<div class="slogan">site security</div>
	</div>
    <div class="version">
    	<a href="http://secu.ru/scripts/find-and-replace">Версия 1.4</a>
    </div>
    <div class="clear"></div>
</div>
<div class="wrapper">
<?php 
	if (isset($_GET['edit'])) {
		$file = $_GET['edit'];
			
		if (is_file($file) == true) {
			$text = htmlspecialchars(encoding(file_get_contents($file)));
			
			echo '<textarea id="source">'.$text.'</textarea>';
			echo '<div class="clear"></div><a class="btn btn-danger right" href="javascript:window.close()">Закрыть</a>&nbsp;';
			echo '<a onClick="save(\''.urlencode($file).'\')" class="btn btn-info right" href="#">Сохранить</a>';
		} else {
			echo '<div class="alert-error"><h4>Ошибка!</h4>Файл не найден</div>';	
		}
	} else {
        if (!empty($err)) {
            echo '<div class="alert-error"><h4>Ошибка!</h4>'.$err.'</div>';	
        }
    ?>
    <form method="post" action="">
        <table border="0">
            <tr<?php echo $err_arr[0]; ?>>
                <td align="right">
                    <label>Текст поиска *</label>
                </td>
                <td>
                    <textarea name="text" id="quote"><?php echo isset($text) ? $text : ''; ?></textarea>
                    <div class="left">
                    	<span class="help" title="Если отметить этот пункт, то в поле «Текст поиска» можно вводить регулярные выражения">[?]</span>
                    	<label for="regex">Искать по маске</label>
                    	<input onClick="display(this)" type="checkbox"<?php echo isset($regex) && $regex == 1 ? ' checked' : ''; ?> name="regex" id="regex" value="1" />
                    </div>
                    <div class="right" id="regis-block">
                    	<label for="regis">Учитывать регистр</label>
                    	<input type="checkbox"<?php echo isset($regis) && $regis == '' ? ' checked' : ''; ?> name="regis" id="regis" value="1" />
                    </div>
                    <div class="clear"></div>
                    <div id="regex-block">
                    	<span class="help" title='Эта кнопка помогает в построении маски, например, нужно найти все, что начинается на <iframe height="100" width="100" style="display: none"> и заканчивается на </iframe>, чтоб не думать какие символы экранировать, просто нажмите кнопку, получится \<iframe height\="100" width\="100" style\="display\: none"\>\<\/iframe\>, дальше добавьте метасимволы регулярного выражения, например \<iframe height\="100" width\="100" style\="display\: none"\>.*?\<\/iframe\>'>[?]</span>
                    	<a class="btn btn-success btn-mini" href="javascript:getQuote();void(0)">Экранировать</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label>Текст замены</label>
                </td>
                <td>
                    <textarea name="retext"><?php echo isset($retext) ? $retext : ''; ?></textarea>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label>Замена</label>
                </td>
                <td>
                    <input type="checkbox"<?php echo isset($replace) && $replace == 1 ? ' checked' : ''; ?> name="replace" value="1" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label>Не искать в файлах</label>
                </td>
                <td>
                    <input type="text" name="ext" value="<?php echo isset($_POST['ext']) ? $_POST['ext'] : EXT; ?>" />
                </td>
            </tr>
            <tr<?php echo $err_arr[1]; ?>>
                <td align="right">
                    <span class="help" title="Выберите из списка или введите имя директории, в которой производить поиск, или '.' если поиск в директории, где размещен <?php echo BASE_NAME; ?>">[?]</span>
                    <label>Директория *</label>
                </td>
                <td>
                	<div class="tree" id="tree"><div><span onClick="getDirs(this)" title="На уровень выше" rel="..">..</span><div class="tree-items"><?php echo tree('.'); ?></div></div></div>
                    <input type="text" name="dir" id="dir" value="<?php echo isset($dir) ? $dir : '.'; ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" onClick="loader()" class="btn btn-success" name="submit" value="Искать\Заменить" />
                    <div id="loader-block">
                    	<div id="loader"></div>
                        Поиск...
                    </div>
                </td>
            </tr>
        </table>
    </form>
    <textarea id="hold"></textarea>
<?php } ?>
</div>
<?php
	if (isset($html)) {
		echo str_replace(array('%find%', '%/find%'), array('<b>', '</b>'), $html);
	}
?>
<div class="footer">
	<div class="copy">
    	&copy; <?php echo date('Y'); ?> <a href="http://secu.ru/">secu.ru</a>
	</div>
</div>
</body>
</html>