<?php


require __DIR__ . '/vendor/autoload.php';
use Krugozor\Database\Mysql;


$ParserController = new ParserController;



class DbParserConnector {

  static private $_instance = null;
  static public $db = null;

  static public function createConnection(){
    self::$db = Mysql::create("localhost", "root", "")->setDatabaseName("parser")->setCharset("utf8");
    
  }

    /**
     *  singleton
     */

  static public function getInstance(){
    if(self::$_instance == null){
      return self::$_instance = new self;
         
    }

    return self::$_instance;
  }

  public function insertParserList($cards){
   
    self::$db->query('INSERT INTO `cards` SET ?As', $cards);
  }

  
}

class ParserController {
 
  public $parserModelClass= null;

  public function __construct() {
    $this->Cors();
   // $parserClass = new Parser('https://belwood.kz/catalog/mezhkomnatnye_dveri/?utm_source=yandex&utm_medium=cpc&utm_campaign=search_almaty&utm_term=магазин%20дверей&roistat=direct3_search_9433701298_магазин%20дверей&roistat_referrer=none&roistat_pos=premium_1&yadclid=88032016&yadordid=34135772&yclid=12857280838015123455');
    $this->loadModel();
    $this->ParserAction();
  }
  
  //*************************************************************************
  //* Подключены заголовки для Cors
  //*************************************************************************

  public function Cors(){
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Credentials: true');
    header('Content-type: json/application');
    header('Content-Type: text/html; charset=utf-8');
    
  }

  public function loadModel() {
    $this->parserModelClass = new ParserModel();
  }

  public function ParserAction() {
    $this->parserModelClass->saveCardsInDb();
  }

}

class ParserModel {

  public $DbParser = null;

  public function __construct() {
    $this->DbParser = new DbParserConnector;
    $this->connection();
    
  }

  public function connection(){
    $this->DbParser::createConnection();
  }

  public function saveCardsInDb(){
    $jsonTakeData = file_get_contents( __DIR__  . "/data/json/json_data.txt");
    $arrDataCards = json_decode($jsonTakeData, true);
    foreach($arrDataCards as $cards){
      $this->DbParser->insertParserList($cards);
    }
  }


}

class Parser {

  public $siteURL = null;
  protected $dataCards = [];
  protected $cardsDataList = [];
 
  public function __construct(string $url) {
    $this->errorDetector();
    $this->siteURL = $url;
    $this->parserStarter();
    
  }

  public function errorDetector(){
    setlocale(LC_ALL, 'ru_RU.UTF-8');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

  }

  private function parserStarter() {
    $this->libConnections();
    $this->parserCards($this->ParserSiteRequest($this->siteURL));

  }

  private function libConnections(){
    require_once __DIR__ . '/libs/phpQuery/phpQuery/phpQuery.php';
  }

  private function ParserSiteRequest(string $url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_HEADER, false);
    /*$info = curl_getinfo($curl);
    print_r($info);*/
    $result = curl_exec($curl);
    return $result;
  }
  
  private function parserCards($result){
   
    if($result == false) {     
      echo "Ошибка CURL: " . curl_error($curl);
      return false;
    }else {
      $pq = phpQuery::newDocument('<meta charset="utf-8">' . $result); 
      $listlinks = $pq->find('.catalog-item .catalog-item__title-container a');
     
      foreach($listlinks as $link){
        $this->dataCards[] = pq($link)->attr('href');
      }

      /* получаем изображения */
      $listImages = $pq->find("a.js-varaint-image");
      foreach($listImages as $image) {
        $elemImage = pq($image);
        $arrListImages[] = $elemImage->attr("data-image");
      }

          
      foreach($this->dataCards as $dataCardlink){
        $resultCard = $this->ParserSiteRequest('https://belwood.kz'. $dataCardlink);
        $pq = phpQuery::newDocument('<meta charset="utf-8">' . $resultCard); 
       
        $this->cardsDataList[] = [
          "name" => $pq->find('.product-top__title')->text(),
          "price"=> intval(preg_replace('/[^0-9]/', '', $pq->find('.total-price')->text())),
          "oldprice" => preg_replace("/[^0-9]*/", "", $pq->find("#old-price-field")->text()),
          "currencyId" => 'RUR',
          "categoryId" => '21',
          "store" => 'false',
          "pickup" => 'true',
          "delivery" => 'true',
          "vendor" => 'Elektronika',
          "url" => "https://belwood.kz". $dataCardlink,
          "description" => $pq->find('.product-info__text p')->text()
         ];

      }

      

      $this->jsonSave();
    }
  
  }

  private function jsonSave(){
    $jsonData = json_encode($this->cardsDataList);
    file_put_contents("data/json/json_data.txt", $jsonData);

  }


}









/* получаем дополнительные параметры для  */
$listParamsProduct = $pq->find(".product-properties p");
foreach($listParamsProduct as $param) {
	$elemParam = pq($param);
	$arrElemParam = explode(":", $elemParam->text());

	if(count($arrElemParam) > 1) {
		$arrDopParams[] = [
			"name" => trim($arrElemParam[0]),
			"value" => trim($arrElemParam[1])
		];
	}
}




$offers = [
	[
		'id' => '123',
		'listImages' => $arrListImages,
		'listMainParams' => $arrMainParams,
		'listDopParams' => $arrDopParams
	]
];





// Создаём XML-документ
$dom = new DOMDocument('1.0', 'utf-8');
// Создаём корневой элемент <offers>
$root = $dom->createElement('offers');
$dom->appendChild($root);


foreach($offers as $valueParam) {

	// Создаём узел <offer>
	$offer = $dom->createElement('offer');

	// Добавляем дочерний элемент для <offers>
	$root->appendChild($offer);

	// Устанавливаем атрибут id для узла <offer>
	$offer->setAttribute('id', $valueParam['id']);

	foreach($valueParam["listMainParams"] as $key=>$val) {
		$params = $dom->createElement($key, $val);
		$offer->appendChild($params);
	}

	foreach($valueParam["listImages"] as $image) {
		$params = $dom->createElement("picture", $image);
		$offer->appendChild($params);
	}

	foreach($valueParam["listDopParams"] as $dopParam) {
		$params = $dom->createElement("param", $dopParam["value"]);
		$params->setAttribute('name', $dopParam["name"]);
		$offer->appendChild($params);
	}

}

// Сохраняем полученный XML-документ в файл
$dom->save('offers.xml');