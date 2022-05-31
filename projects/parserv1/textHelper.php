<?php 
/*Получение информации о запросе
curl_getinfo() возвращает массив. В этом массиве вы можете найти значения .

url — адрес на который был послан запрос
content_type — тип документа на который был послан запрос и его кодировка
http_code — код запроса. Обычно имеет значение 200, это означает что запрос прошел успешно
header_size — суммарный размер всех заголовков
request_size — суммарный размер всех отправленных запросов
filetime
ssl_verify_result — присутствует ли ssl протокол
redirect_count — количество редиректов
total_time — общее время
namelookup_time
connect_time — время соединения
pretransfer_time — предварительное время передачи
size_upload — размер загрузки
size_download — размер скачивания
speed_download — скорость скачивания
speed_upload — скорость загрузки
download_content_length — длина загружаемого содержимого
upload_content_length — длина скачиваемого содержимого
starttransfer_time — время начала передачи
redirect_time — время редиректа

писать сюда 

другой метод
$url = 'https://belwood.kz/catalog/mezhkomnatnye_dveri/?utm_source=yandex&utm_medium=cpc&utm_campaign=search_almaty&utm_term=магазин%20дверей&roistat=direct3_search_9433701298_магазин%20дверей&roistat_referrer=none&roistat_pos=premium_1&yadclid=88032016&yadordid=34135772&yclid=12857280838015123455';
$file = file_get_contents($url);
$pq = phpQuery::newDocument('<meta charset="utf-8">' . $file ); 
$pattern = '#<article class="catalog-item__image ".+?</article>#s';
$tbl = $pq->find('.catalog-item__image');
echo $tbl;
?>

работа с прокси:
$proxy = '165.34.122.179:8080';
$ch = curl_init('https://prog-time.ru');
curl_setopt($ch, CURLOPT_TIMEOUT, 400);
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$html = curl_exec($ch);
curl_close($ch);

работа с post запросами:
$array = array(
	'chat_id' => 5088556180,
	'text'	=> 'Проверка работы'
);		
$ch = curl_init('https://api.telegram.org/');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($array, '', '&'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$html = curl_exec($ch);
curl_close($ch);

Отправка файлов с помощью Curl:
$array = array(
    'chat_id' => 5088556180,
    'text' => 'Проверка работы',
    'photo' => curl_file_create(__DIR__ . '/image_1.png', 'image/png' , 'image_1.png')
);		
$ch = curl_init('https://api.telegram.org/bot/sendPhoto');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $array);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);


 Все значения curl_setopt
Советую скопировать написанный ниже текст и распечатать, чтобы держать его всегда под рукой.

CURLOPT_INFILESIZE: Если вы выгружаете файл на удалённый сайт, эта опция должна использоваться, для того чтобы сообщит PHP, какой будет ожидаемый размер infile.
CURLOPT_VERBOSE: Установите эту опцию в значение true, если вы хотите, чтобы CURL сообщала обо всех действиях.
CURLOPT_HEADER: Установите эту опцию в значение true , если вы хотите, чтобы шапка/header включалась в вывод.
CURLOPT_NOPROGRESS: Установите эту опцию в значение true , если вы не хотите, чтобы PHP выводил индикатор процесса CURL-трансфера. (PHP автоматически устанавливает эту опцию в ненулевое значение, изменять её необходимо лишь при отладке.)
CURLOPT_NOBODY: Установите эту опцию в значение true , если вы не хотите, чтобы тело/body включалось в вывод.
CURLOPT_FAILONERROR: Установите эту опцию в значение true , если вы хотите, чтобы PHP завершал работу скрыто, если возвращаемый HTTP-код имеет значение выше 300. По умолчанию страница возвращается нормально с игнорированием кода.
CURLOPT_UPLOAD: Установите эту опцию в значение true , если вы хотите, чтобы PHP подготавливал файл к выгрузке.
CURLOPT_POST: Установите эту опцию в значение true , если вы хотите, чтобы PHP выполнял регулярный HTTP POST. Этот POST имеет нормальный вид application/x-www-form-urlencoded, чаще всего используемый HTML-формами.
CURLOPT_FTPLISTONLY: Установите эту опцию в значение true , и PHP будет выводит листинг имён FTP-директории.
CURLOPT_FTPAPPEND: Установите эту опцию в значение true , и PHP будет присоединять к удалённому/remote файлу, вместо его перезаписи.
CURLOPT_NETRC: Установите эту опцию в значение true , и PHP будет сканировать ваш файл~./netrc с целью поиска ваших username и password для удалённого сайта, с которым вы устанавливаете соединение.
CURLOPT_FOLLOWLOCATION: Установите эту опцию
значение true, чтобы следовать любому «Location: » header, который сервер высылает как часть HTTP header»а (заметьте, что это рекурсия, PHP будет следовать за всеми «Location: «-header»ами, которые высылаются.)
CURLOPT_PUT: Установите эту опцию в значение true, чтобы HTTP PUT файл. Файл для PUT обязан быть установлен с помощью CURLOPT_INFILE и CURLOPT_INFILESIZE.
CURLOPT_MUTE: Установите эту опцию в значение true , и PHP будет работать скрыто в отношении CURL-функций.
CURLOPT_TIMEOUT: Передаёт long как параметр, который содержит максимальное время в секундах, которое вы отводите для работы CURL-функций.
CURLOPT_CONNECTTIMEOUT: Передаёт long как параметр, который содержит максимальное время в секундах, которое вы отводите для ожидания при попытке подключения. Используйте 0 чтобы ждать бесконечно.
CURLOPT_LOW_SPEED_LIMIT: Передаёт long как параметр, который содержит скорость трансфера в байтах в секунду, ниже которого трансфер должен работать в процессе выполнения CURLOPT_LOW_SPEED_TIME, в секундах, чтобы PHP считал его слишком медленным и прерывал его.
CURLOPT_LOW_SPEED_TIME: Передаёт long как параметр, который содержит время в секундах, ниже которого трансфер должен работать в процессе выполнения CURLOPT_LOW_SPEED_LIMIT, чтобы PHP считал его слишком медленным и прерывал его.
CURLOPT_RESUME_FROM: Передаёт long как параметр, который содержит смещение в байтах, с которого трансфер должен стартовать.
CURLOPT_SSLVERSION: Передаёт long как параметр, который содержит используемую версию SSL (2 или 3). По умолчанию PHP пытается определить это сам, хотя в некоторых случаях вы обязаны устанавливать это вручную.
CURLOPT_SSL_VERIFYHOST: Передаёт long, если CURL должна проверять Common-имя peer-сертификата в SSL handshake/»рукопожатие». Значение 1 указывает, что мы должны проверить существование общего /common имени, значение 2 указывает, что мы должны убедиться в совпадении с предоставленным hostname.
CURLOPT_TIMECONDITION: Передаёт long как параметр, который определяет, как рассматривается CURLOPT_TIMEVALUE. Вы можете установить этот параметр для TIMECOND_IFMODSINCE или TIMECOND_ISUNMODSINCE. Это действует только для HTTP.
CURLOPT_TIMEVALUE: Передаёт long как параметр, который является временем в секундах, прошедшим после 1 января 1970. Это время используется, как специфицировано опцией CURLOPT_TIMEVALUE, или по умолчанию будет использоваться TIMECOND_IFMODSINCE.
CURLOPT_RETURNTRANSFER: Передаёт значение true , если вы хотите, чтобы CURL непосредственно возвращала полученную информацию, вместо её печати напрямую.
Параметр value должен быть строкой для следующих значений параметра option:

CURLOPT_URL: Это URL, который PHP должен получать. Вы можете также устанавливать эту опцию при инициализации сессии функцией curl_init().
CURLOPT_USERPWD: Передаёт в РНР строку, отформатированную в виде [username]:[password], для использования при соединении.
CURLOPT_PROXYUSERPWD: Передаёт в РНР строку, отформатированную в виде [username]:[password], для соединения с HTTP-прокси.
CURLOPT_RANGE: Передаёт специфицированный вами диапазон. Он должен быть в формате «X-Y», где X или Y могут отсутствовать. HTTP-трансферы поддерживают также различные интервалы, разделённые запятыми, как, например, X-Y,N-M.
CURLOPT_POSTFIELDS: Передаёт строку, содержащую полные данные для передачи операцией HTTP «POST».
CURLOPT_REFERER: Передаёт строку, содержащую «referer/ссылающийся» header, используемый в HTTP-запросе.
CURLOPT_USERAGENT: Передаёт строку, содержащую «user-agent» header, используемый в HTTP-запросе.
CURLOPT_FTPPORT: Передаёт строку, содержащую значение, которое будет использоваться для получения IP-адреса для инструкции ftp «POST». POST-инструкция указывает удалённому серверу: соединиться со специфицированным IP-адресом. Строка может быть обычным IP-адресом, hostname/именем хоста, именем сетевого интерфейса (под UNIX), или просто обычным «-«, используемым для системного IP-адреса по умолчанию.
CURLOPT_COOKIE: Передаёт строку с содержимым куки/cookie, установленным в HTTP header»е.
CURLOPT_SSLCERT: Передаёт строку, содержащую filename форматированного сертификата PEM.
CURLOPT_SSLCERTPASSWD: Передаёт строку, содержащую password, необходимый для работы сертификата CURLOPT_SSLCERT.
CURLOPT_COOKIEFILE: Передаёт строку, содержащую имя файла с данными куки. Этот cookie-файл может иметь формат Netscape, или содержать обычные шапки/headers в HTTP-стиле, забитые в файл.
CURLOPT_CUSTOMREQUEST: Передаёт строку, используемую вместо GET или HEAD при выполнении HTTP-запроса. Это делается для выполнения DELETE или других, более скрытых HTTP-запросов. Верными значениями являются GET, POST и так далее; то есть не вводите здесь полную строку HTTP-запроса. Например, ввод «GET /index.html HTTP/1.0» будет некорректным. (не делайте это, если не уверены, что ваш сервер поддерживает эту команду.)
CURLOPT_PROXY: Передаёт имя HTTP-прокси туннельным запросам.
CURLOPT_INTERFACE: Передаёт имя исходящего сетевого интерфейса для использования. Это может быть имя интерфейса, IP-адрес или имя хоста.
CURLOPT_KRB4LEVEL: Передаёт KRB4 (Kerberos 4) уровень секретности. Это любая из следующих строк (в порядке от менее до более мощной): «clear», «safe», «confidential», «private».
Если эта строка не совпадает с какой-либо из указанных, то используется «private». Если вы установите здесь NULL, это отключит KRB4-безопасность. KRB4-безопасность работает в настоящее время только с транзакциями FTP.
CURLOPT_HTTPHEADER: Передаёт массив полей HTTP-header»а для установки.
CURLOPT_QUOTE: Передаёт массив FTP-команд для выполнения на сервере до выполнения FTP-запроса.
CURLOPT_POSTQUOTE: Передаёт массив FTP-команд для выполнения на сервере после выполнения FTP-запроса.
Следующие опции ожидают дескриптора файла, который получается с помощью функции fopen():

CURLOPT_FILE: Файл, куда должен быть помещён вывод вашего трансфера, по умолчанию это STDOUT.
CURLOPT_INFILE: Файл, из которого приходит ввод вашего трансфера.
CURLOPT_WRITEHEADER: Файл для записи header-части вывода.
CURLOPT_STDERR: Файл для записи ошибок, вместо stderr.






пример для xml:


$urlPage = "https://elektronika.store/product/apple-iphone-11-64gb-product-red";
$result = parser($urlPage);

$pq = phpQuery::newDocument($result);

/* важные параметры для товара */
// $arrMainParams = [
// 	"url" => "https://prog-time.ru",
// 	"price" => preg_replace("/[^0-9]*/", "", $pq->find("#price-field")->text()),
// 	"oldprice" => preg_replace("/[^0-9]*/", "", $pq->find("#old-price-field")->text()),
// 	'currencyId' => 'RUR',
// 	'categoryId' => '21',
// 	'store' => 'false',
// 	'pickup' => 'true',
// 	'delivery' => 'true',
// 	'vendor' => 'Elektronika',
// 	'name' => $pq->find("h1")->text(),
// 	'description' => trim($pq->find("#tab-description-content")->text()),
// ];

// /* получаем дополнительные параметры для  */
// $listParamsProduct = $pq->find(".product-properties p");
// foreach($listParamsProduct as $param) {
// 	$elemParam = pq($param);
// 	$arrElemParam = explode(":", $elemParam->text());

// 	if(count($arrElemParam) > 1) {
// 		$arrDopParams[] = [
// 			"name" => trim($arrElemParam[0]),
// 			"value" => trim($arrElemParam[1])
// 		];
// 	}
// }


// /* получаем изображения */
// $listImages = $pq->find("a.js-varaint-image");
// foreach($listImages as $image) {
// 	$elemImage = pq($image);
// 	$arrListImages[] = $elemImage->attr("data-image");
// }

// $offers = [
// 	[
// 		'id' => '123',
// 		'listImages' => $arrListImages,
// 		'listMainParams' => $arrMainParams,
// 		'listDopParams' => $arrDopParams
// 	]
// ];





// // Создаём XML-документ
// $dom = new DOMDocument('1.0', 'utf-8');
// // Создаём корневой элемент <offers>
// $root = $dom->createElement('offers');
// $dom->appendChild($root);


// foreach($offers as $valueParam) {

// 	// Создаём узел <offer>
// 	$offer = $dom->createElement('offer');

// 	// Добавляем дочерний элемент для <offers>
// 	$root->appendChild($offer);

// 	// Устанавливаем атрибут id для узла <offer>
// 	$offer->setAttribute('id', $valueParam['id']);

// 	foreach($valueParam["listMainParams"] as $key=>$val) {
// 		$params = $dom->createElement($key, $val);
// 		$offer->appendChild($params);
// 	}

// 	foreach($valueParam["listImages"] as $image) {
// 		$params = $dom->createElement("picture", $image);
// 		$offer->appendChild($params);
// 	}

// 	foreach($valueParam["listDopParams"] as $dopParam) {
// 		$params = $dom->createElement("param", $dopParam["value"]);
// 		$params->setAttribute('name', $dopParam["name"]);
// 		$offer->appendChild($params);
// 	}

// }

// // Сохраняем полученный XML-документ в файл
// $dom->save('offers.xml');

// */
//  echo "<pre>";
//  var_dump($this->cardsDataList);
//  echo "</pre>";

