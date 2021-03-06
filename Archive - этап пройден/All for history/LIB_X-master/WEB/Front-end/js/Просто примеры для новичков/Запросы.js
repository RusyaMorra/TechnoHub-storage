//Запросы 






//Ещё сайт где есть способы создания запросов: http://falbar.ru/article/samye-populyarnye-sposoby-sozdaniya-http-zaprosov-v-javascript


//XMLHttpRequest



/*XMLHttpRequest – это встроенный в браузер объект, который даёт возможность делать HTTP-запросы к серверу без перезагрузки страницы.

Несмотря на наличие слова «XML» в названии, XMLHttpRequest может работать с любыми данными, а не только с XML. Мы можем загружать/скачивать 
файлы, отслеживать прогресс и многое другое.

На сегодняшний день не обязательно использовать XMLHttpRequest, так как существует другой, более современный метод fetch.

В современной веб-разработке XMLHttpRequest используется по трём причинам:

По историческим причинам: существует много кода, использующего XMLHttpRequest, который нужно поддерживать.
Необходимость поддерживать старые браузеры и нежелание использовать полифилы (например, чтобы уменьшить количество кода).
Потребность в функциональности, которую fetch пока что не может предоставить, к примеру, отслеживание прогресса отправки на сервер.
Что-то из этого списка звучит знакомо? Если да, тогда вперёд, приятного знакомства с XMLHttpRequest. Если же нет, возможно, имеет смысл изучать сразу Fetch.*/








_____________________________________________________________________________________________________________________________________________________________________________
           //|
Основы:    //|
           //|
_____________________________________________________________________________________________________________________________________________________________________________







/*XMLHttpRequest имеет два режима работы: синхронный и асинхронный.

Сначала рассмотрим асинхронный, так как в большинстве случаев используется именно он.

Чтобы сделать запрос, нам нужно выполнить три шага:*/

//Создать XMLHttpRequest.

let xhr = new XMLHttpRequest(); // у конструктора нет аргументов
//Инициализировать его.

xhr.open(method, URL, [async, user, password])
/*Этот метод обычно вызывается сразу после new XMLHttpRequest. В него передаются основные параметры запроса:

method – HTTP-метод. Обычно это "GET" или "POST".
URL – URL, куда отправляется запрос: строка, может быть и объект URL.
async – если указать false, тогда запрос будет выполнен синхронно, это мы рассмотрим чуть позже.
user, password – логин и пароль для базовой HTTP-авторизации (если требуется).
Заметим, что вызов open, вопреки своему названию, не открывает соединение. Он лишь конфигурирует запрос, но непосредственно отсылается
 запрос только лишь после вызова send.

Послать запрос.*/

xhr.send([body])

/*Этот метод устанавливает соединение и отсылает запрос к серверу. Необязательный параметр body содержит тело запроса.

Некоторые типы запросов, такие как GET, не имеют тела. А некоторые, как, например, POST, используют body, чтобы отправлять данные на сервер.
 Мы позже увидим примеры.

Слушать события на xhr, чтобы получить ответ.

Три наиболее используемых события:

load – происходит, когда получен какой-либо ответ, включая ответы с HTTP-ошибкой, например 404.
error – когда запрос не может быть выполнен, например, нет соединения или невалидный URL.
progress – происходит периодически во время загрузки ответа, сообщает о прогрессе.*/

xhr.onload = function() {
  alert(`Загружено: ${xhr.status} ${xhr.response}`);
};

xhr.onerror = function() { // происходит, только когда запрос совсем не получилось выполнить
  alert(`Ошибка соединения`);
};

xhr.onprogress = function(event) { // запускается периодически
  // event.loaded - количество загруженных байт
  // event.lengthComputable = равно true, если сервер присылает заголовок Content-Length
  // event.total - количество байт всего (только если lengthComputable равно true)
  alert(`Загружено ${event.loaded} из ${event.total}`);
};
/*Вот полный пример. Код ниже загружает /article/xmlhttprequest/example/load с сервера и сообщает о прогрессе:*/

// 1. Создаём новый XMLHttpRequest-объект
let xhr = new XMLHttpRequest();

// 2. Настраиваем его: GET-запрос по URL /article/.../load
xhr.open('GET', '/article/xmlhttprequest/example/load');

// 3. Отсылаем запрос
xhr.send();

// 4. Этот код сработает после того, как мы получим ответ сервера
xhr.onload = function() {
  if (xhr.status != 200) { // анализируем HTTP-статус ответа, если статус не 200, то произошла ошибка
    alert(`Ошибка ${xhr.status}: ${xhr.statusText}`); // Например, 404: Not Found
  } else { // если всё прошло гладко, выводим результат
    alert(`Готово, получили ${xhr.response.length} байт`); // response -- это ответ сервера
  }
};

xhr.onprogress = function(event) {
  if (event.lengthComputable) {
    alert(`Получено ${event.loaded} из ${event.total} байт`);
  } else {
    alert(`Получено ${event.loaded} байт`); // если в ответе нет заголовка Content-Length
  }

};

xhr.onerror = function() {
  alert("Запрос не удался");
};




/*После ответа сервера мы можем получить результат запроса в следующих свойствах xhr:

status
Код состояния HTTP (число): 200, 404, 403 и так далее, может быть 0 в случае, если ошибка не связана с HTTP.
statusText
Сообщение о состоянии ответа HTTP (строка): обычно OK для 200, Not Found для 404, Forbidden для 403, и так далее.
response (в старом коде может встречаться как responseText)
Тело ответа сервера.
Мы можем также указать таймаут – промежуток времени, который мы готовы ждать ответ:*/

xhr.timeout = 10000; // таймаут указывается в миллисекундах, т.е. 10 секунд


/*Если запрос не успевает выполниться в установленное время, то он прерывается, и происходит событие timeout.

URL с параметрами
Чтобы добавить к URL параметры, вида ?name=value, и корректно закодировать их, можно использовать объект URL:*/

let url = new URL('https://google.com/search');
url.searchParams.set('q', 'test me!');

// параметр 'q' закодирован
xhr.open('GET', url); // https://google.com/search?q=test+me%21










______________________________________________________________________________________________________________________________________________________________________________
              //|
//Тип ответа  //|
              //|
______________________________________________________________________________________________________________________________________________________________________________


/*
Мы можем использовать свойство xhr.responseType, чтобы указать ожидаемый тип ответа:

"" (по умолчанию) – строка,
"text" – строка,
"arraybuffer" – ArrayBuffer (для бинарных данных, смотрите в ArrayBuffer, бинарные массивы),
"blob" – Blob (для бинарных данных, смотрите в Blob),
"document" – XML-документ (может использовать XPath и другие XML-методы),
"json" – JSON (парсится автоматически).
К примеру, давайте получим ответ в формате JSON:*/

let xhr = new XMLHttpRequest();

xhr.open('GET', '/article/xmlhttprequest/example/json');

xhr.responseType = 'json';

xhr.send();

// тело ответа {"сообщение": "Привет, мир!"}
xhr.onload = function() {
  let responseObj = xhr.response;
  alert(responseObj.message); // Привет, мир!
};



/*На заметку:
В старом коде вы можете встретить свойства xhr.responseText и даже xhr.responseXML.

Они существуют по историческим причинам, раньше с их помощью получали строки или XML-документы. Сегодня следует устанавливать желаемый
 тип объекта в xhr.responseType и получать xhr.response, как показано выше.*/








_____________________________________________________________________________________________________________________________________________________________________________
                      //|
//Состояния запроса:  //|
                      //|
_____________________________________________________________________________________________________________________________________________________________________________




/*У XMLHttpRequest есть состояния, которые меняются по мере выполнения запроса. Текущее состояние можно посмотреть в свойстве xhr.readyState.

Список всех состояний, указанных в спецификации:

UNSENT = 0; // исходное состояние
OPENED = 1; // вызван метод open
HEADERS_RECEIVED = 2; // получены заголовки ответа
LOADING = 3; // ответ в процессе передачи (данные частично получены)
DONE = 4; // запрос завершён
Состояния объекта XMLHttpRequest меняются в таком порядке: 0 → 1 → 2 → 3 → … → 3 → 4. Состояние 3 повторяется каждый раз, когда получена часть данных.

Изменения в состоянии объекта запроса генерируют событие readystatechange:*/



xhr.onreadystatechange = function() {
  if (xhr.readyState == 3) {
    // загрузка
  }
  if (xhr.readyState == 4) {
    // запрос завершён
  }
};


/*Вы можете наткнуться на обработчики события readystatechange в очень старом коде, так уж сложилось исторически, когда-то не было событий load и других. 
Сегодня из-за существования событий load/error/progress можно сказать, что событие readystatechange «морально устарело».*/








_____________________________________________________________________________________________________________________________________________________________________________
                      //|
//Отмена запроса:     //|
                      //|
_____________________________________________________________________________________________________________________________________________________________________________





/*Если мы передумали делать запрос, можно отменить его вызовом xhr.abort():

xhr.abort(); // завершить запрос
При этом генерируется событие abort, а xhr.status устанавливается в 0.*/














_____________________________________________________________________________________________________________________________________________________________________________
                      //|
//Синхронные запросы: //|
                      //|
_____________________________________________________________________________________________________________________________________________________________________________








/*Если в методе open третий параметр async установлен на false, запрос выполняется синхронно.

Другими словами, выполнение JavaScript останавливается на send() и возобновляется после получения ответа. Так ведут себя, например, 
функции alert или prompt.

Вот переписанный пример с параметром async, равным false: */

let xhr = new XMLHttpRequest();

xhr.open('GET', '/article/xmlhttprequest/hello.txt', false);

try {
  xhr.send();
  if (xhr.status != 200) {
    alert(`Ошибка ${xhr.status}: ${xhr.statusText}`);
  } else {
    alert(xhr.response);
  }
} catch(err) { // для отлова ошибок используем конструкцию try...catch вместо onerror
  alert("Запрос не удался");
}



/*Выглядит, может быть, и неплохо, но синхронные запросы используются редко, так как они блокируют выполнение JavaScript до тех пор, пока загрузка не завершена. В некоторых браузерах нельзя прокручивать страницу, пока идёт синхронный запрос. Ну а если же синхронный запрос по какой-то причине выполняется слишком долго, браузер предложит закрыть «зависшую» страницу.

Многие продвинутые возможности XMLHttpRequest, такие как выполнение запроса на другой домен или установка таймаута, недоступны для синхронных запросов. Также, как вы могли заметить, ни о какой индикации прогресса речь тут не идёт.

Из-за всего этого синхронные запросы используют очень редко. Мы более не будем рассматривать их.*/







_____________________________________________________________________________________________________________________________________________________________________________
                      //|
//HTTP-заголовки:     //|
                      //|
_____________________________________________________________________________________________________________________________________________________________________________









/*XMLHttpRequest умеет как указывать свои заголовки в запросе, так и читать присланные в ответ.

Для работы с HTTP-заголовками есть 3 метода:*/



/*setRequestHeader(name, value)
Устанавливает заголовок запроса с именем name и значением value.

Например:

xhr.setRequestHeader('Content-Type', 'application/json');
Ограничения на заголовки
Некоторые заголовки управляются исключительно браузером, например Referer или Host, а также ряд других. Полный список тут.

XMLHttpRequest не разрешено изменять их ради безопасности пользователей и для обеспечения корректности HTTP-запроса.

Поставленный заголовок нельзя снять
Ещё одной особенностью XMLHttpRequest является то, что отменить setRequestHeader невозможно.

Если заголовок определён, то его нельзя снять. Повторные вызовы лишь добавляют информацию к заголовку, а не перезаписывают его.

Например:*/

xhr.setRequestHeader('X-Auth', '123');
xhr.setRequestHeader('X-Auth', '456');

// заголовок получится такой:
// X-Auth: 123, 456
getResponseHeader(name)
//Возвращает значение заголовка ответа name (кроме Set-Cookie и Set-Cookie2).

//Например:

xhr.getResponseHeader('Content-Type')
getAllResponseHeaders()
//Возвращает все заголовки ответа, кроме Set-Cookie и Set-Cookie2.

//Заголовки возвращаются в виде единой строки, например:

/*Cache-Control: max-age=31536000
Content-Length: 4260
Content-Type: image/png
Date: Sat, 08 Sep 2012 16:53:16 GMT*/

/*Между заголовками всегда стоит перевод строки в два символа "\r\n" (независимо от ОС), так что мы можем легко разделить их на отдельные заголовки. 
Значение заголовка всегда отделено двоеточием с пробелом ": ". Этот формат задан стандартом.

Таким образом, если хочется получить объект с парами заголовок-значение, нам нужно задействовать немного JS.

Вот так (предполагается, что если два заголовка имеют одинаковое имя, то последний перезаписывает предыдущий):*/

let headers = xhr
  .getAllResponseHeaders()
  .split('\r\n')
  .reduce((result, current) => {
    let [name, value] = current.split(': ');
    result[name] = value;
    return result;
  }, {});

// headers['Content-Type'] = 'image/png'







_____________________________________________________________________________________________________________________________________________________________________________
                      //|
//POST, FormData:     //|
                      //|
_____________________________________________________________________________________________________________________________________________________________________________







/*Чтобы сделать POST-запрос, мы можем использовать встроенный объект FormData.

Синтаксис:*/

let formData = new FormData([form]); // создаём объект, по желанию берём данные формы <form>
formData.append(name, value); // добавляем поле

/*Мы создаём объект, при желании указываем, из какой формы form взять данные, затем, если нужно, с помощью метода append добавляем дополнительные поля, после чего:*/

xhr.open('POST', )// – создаём POST-запрос.
xhr.send(formData)// – отсылаем форму серверу.

//Например:

/*<form name="person">
  <input name="name" value="Петя">
  <input name="surname" value="Васечкин">
</form>*/

/*<script>
  // заполним FormData данными из формы
  let formData = new FormData(document.forms.person);

  // добавим ещё одно поле
  formData.append("middle", "Иванович");

  // отправим данные
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "/article/xmlhttprequest/post/user");
  xhr.send(formData);

  xhr.onload = () => alert(xhr.response);
</script>*/




/*Обычно форма отсылается в кодировке multipart/form-data.

Если нам больше нравится формат JSON, то используем JSON.stringify и отправляем данные как строку.

Важно не забыть поставить соответствующий заголовок Content-Type: application/json, многие серверные фреймворки автоматически декодируют JSON при его наличии:*/

let xhr = new XMLHttpRequest();

let json = JSON.stringify({
  name: "Вася",
  surname: "Петров"
});

xhr.open("POST", '/submit')
xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');

xhr.send(json);
Метод .send(body)
/* весьма всеяден. Он может отправить практически что угодно в body, включая объекты типа Blob и BufferSource.*/



_____________________________________________________________________________________________________________________________________________________________________________
                      //|
//Прогресс отправки:  //|
                      //|
_____________________________________________________________________________________________________________________________________________________________________________





/*Событие progress срабатывает только на стадии загрузки ответа с сервера.

А именно: если мы отправляем что-то через POST-запрос, XMLHttpRequest сперва отправит наши данные (тело запроса) на сервер, а потом загрузит ответ сервера. И событие progress будет срабатывать только во время загрузки ответа.

Если мы отправляем что-то большое, то нас гораздо больше интересует прогресс отправки данных на сервер. Но xhr.onprogress тут не поможет.

Существует другой объект, без методов, только для отслеживания событий отправки: xhr.upload.

Он генерирует события, похожие на события xhr, но только во время отправки данных на сервер:

loadstart – начало загрузки данных.
progress – генерируется периодически во время отправки на сервер.
abort – загрузка прервана.
error – ошибка, не связанная с HTTP.
load – загрузка успешно завершена.
timeout – вышло время, отведённое на загрузку (при установленном свойстве timeout).
loadend – загрузка завершена, вне зависимости от того, как – успешно или нет.
Примеры обработчиков для этих событий:*/

xhr.upload.onprogress = function(event) {
  alert(`Отправлено ${event.loaded} из ${event.total} байт`);
};

xhr.upload.onload = function() {
  alert(`Данные успешно отправлены.`);
};

xhr.upload.onerror = function() {
  alert(`Произошла ошибка во время отправки: ${xhr.status}`);
};



/*Пример из реальной жизни: загрузка файла на сервер с индикацией прогресса:*/

//<input type="file" onchange="upload(this.files[0])">

//<script>
function upload(file) {
  let xhr = new XMLHttpRequest();

  // отслеживаем процесс отправки
  xhr.upload.onprogress = function(event) {
    console.log(`Отправлено ${event.loaded} из ${event.total}`);
  };

  // Ждём завершения: неважно, успешного или нет
  xhr.onloadend = function() {
    if (xhr.status == 200) {
      console.log("Успех");
    } else {
      console.log("Ошибка " + this.status);
    }
  };

  xhr.open("POST", "/article/xmlhttprequest/post/upload");
  xhr.send(file);
}
//</script>

















_____________________________________________________________________________________________________________________________________________________________________________
                               //|
//Запросы на другой источник:  //|
                               //|
_____________________________________________________________________________________________________________________________________________________________________________







/*XMLHttpRequest может осуществлять запросы на другие сайты, используя ту же политику CORS, что и fetch.

Точно так же, как и при работе с fetch, по умолчанию на другой источник не отсылаются куки и заголовки HTTP-авторизации. Чтобы это изменить, 
установите xhr.withCredentials в true:*/

let xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.open('POST', 'http://anywhere.com/request');



//Детали по заголовкам, которые при этом необходимы, смотрите в главе fetch.













_____________________________________________________________________________________________________________________________________________________________________________
          //|
//Итого:  //|
          //|
_____________________________________________________________________________________________________________________________________________________________________________













/*Типичный код GET-запроса с использованием XMLHttpRequest:*/

let xhr = new XMLHttpRequest();

xhr.open('GET', '/my/url');

xhr.send();

xhr.onload = function() {
  if (xhr.status != 200) { // HTTP ошибка?
    // обработаем ошибку
    alert( 'Ошибка: ' + xhr.status);
    return;
  }

  // получим ответ из xhr.response
};

xhr.onprogress = function(event) {
  // выведем прогресс
  alert(`Загружено ${event.loaded} из ${event.total}`);
};

xhr.onerror = function() {
  // обработаем ошибку, не связанную с HTTP (например, нет соединения)
};






/*Событий на самом деле больше, в современной спецификации они все перечислены в том порядке, в каком генерируются во время запроса:

loadstart – начало запроса.
progress – прибыла часть данных ответа, тело ответа полностью на данный момент можно получить из свойства responseText.
abort – запрос был прерван вызовом xhr.abort().
error – произошла ошибка соединения, например неправильное доменное имя. Событие не генерируется для HTTP-ошибок как, например, 404.
load – запрос успешно завершён.
timeout – запрос был отменён по причине истечения отведённого для него времени (происходит, только если был установлен таймаут).
loadend – срабатывает после load, error, timeout или abort.
События error, abort, timeout и load взаимно исключают друг друга – может произойти только одно из них.

Наиболее часто используют события завершения загрузки (load), ошибки загрузки (error), или мы можем использовать единый обработчик loadend для всего и 
смотреть в свойствах объекта запроса xhr детали произошедшего.

Также мы уже видели событие: readystatechange. Исторически оно появилось одним из первых, даже раньше, чем была составлена спецификация. Сегодня нет
 необходимости использовать его, так как оно может быть заменено современными событиями, но на него можно часто наткнуться в старом коде.

Если же нам нужно следить именно за процессом отправки данных на сервер, тогда можно использовать те же события, но для объекта xhr.upload.*/












_____________________________________________________________________________________________________________________________________________________________________________


//Fetch









//Fetch


/*JavaScript может отправлять сетевые запросы на сервер и подгружать новую информацию по мере необходимости.

Например, мы можем использовать сетевой запрос, чтобы:

Отправить заказ,
Загрузить информацию о пользователе,
Запросить последние обновления с сервера,
…и т.п.
Для сетевых запросов из JavaScript есть широко известный термин «AJAX» (аббревиатура от Asynchronous JavaScript And XML).
 XML мы использовать не обязаны, просто термин старый, поэтому в нём есть это слово. Возможно, вы его уже где-то слышали.

Есть несколько способов делать сетевые запросы и получать информацию с сервера.

Метод fetch() — современный и очень мощный, поэтому начнём с него. Он не поддерживается старыми (можно использовать полифил), 
но поддерживается всеми современными браузерами.

Базовый синтаксис:*/







let promise = fetch(url, [options])

/*url – URL для отправки запроса.
options – дополнительные параметры: метод, заголовки и так далее.
Без options это простой GET-запрос, скачивающий содержимое по адресу url.

Браузер сразу же начинает запрос и возвращает промис, который внешний код использует для получения результата.

Процесс получения ответа обычно происходит в два этапа.

Во-первых, promise выполняется с объектом встроенного класса Response в качестве результата, как только сервер пришлёт заголовки ответа.

На этом этапе мы можем проверить статус HTTP-запроса и определить, выполнился ли он успешно, а также посмотреть заголовки, но пока без тела ответа.

Промис завершается с ошибкой, если fetch не смог выполнить HTTP-запрос, например при ошибке сети или если нет такого сайта. HTTP-статусы 404 и 500 не являются ошибкой.

Мы можем увидеть HTTP-статус в свойствах ответа:*/





/*status – код статуса HTTP-запроса, например 200.
ok – логическое значение: будет true, если код HTTP-статуса в диапазоне 200-299.
Например:*/





let response = await fetch(url);

if (response.ok) { // если HTTP-статус в диапазоне 200-299
  // получаем тело ответа (см. про этот метод ниже)
  let json = await response.json();
} else {
  alert("Ошибка HTTP: " + response.status);
}



/*Во-вторых, для получения тела ответа нам нужно использовать дополнительный вызов метода.

Response предоставляет несколько методов, основанных на промисах, для доступа к телу ответа в различных форматах:*/

response.text() //– читает ответ и возвращает как обычный текст,
response.json() //– декодирует ответ в формате JSON,
response.formData()// – возвращает ответ как объект FormData (разберём его в следующей главе),
response.blob()// – возвращает объект как Blob (бинарные данные с типом),
response.arrayBuffer()// – возвращает ответ как ArrayBuffer (низкоуровневое представление бинарных данных),
//помимо этого, response.body// – это объект ReadableStream, с помощью которого можно считывать тело запроса по частям. Мы рассмотрим и такой пример несколько позже.
//Например, получим JSON-объект с последними коммитами из репозитория на GitHub:

let url = 'https://api.github.com/repos/javascript-tutorial/en.javascript.info/commits';
let response = await fetch(url);

let commits = await response.json(); // читаем ответ в формате JSON

alert(commits[0].author.login);



//То же самое без await, с использованием промисов:

fetch('https://api.github.com/repos/javascript-tutorial/en.javascript.info/commits')
  .then(response => response.json())
  .then(commits => alert(commits[0].author.login));


//  Для получения ответа в виде текста используем await response.text() вместо .json():



let response = await fetch('https://api.github.com/repos/javascript-tutorial/en.javascript.info/commits');

let text = await response.text(); // прочитать тело ответа как текст

alert(text.slice(0, 80) + '...');
//В качестве примера работы с бинарными данными, давайте запросим и выведем на экран логотип спецификации «fetch» (см. главу Blob, чтобы узнать про операции с Blob):

let response = await fetch('/article/fetch/logo-fetch.svg');

let blob = await response.blob(); // скачиваем как Blob-объект

// создаём <img>
let img = document.createElement('img');
img.style = 'position:fixed;top:10px;left:10px;width:100px';
document.body.append(img);

// выводим на экран
img.src = URL.createObjectURL(blob);

setTimeout(() => { // прячем через три секунды
  img.remove();
  URL.revokeObjectURL(img.src);
}, 3000);


/*Важно:
Мы можем выбрать только один метод чтения ответа.

Если мы уже получили ответ с response.text(), тогда response.json() не сработает, так как данные уже были обработаны.

let text = await response.text(); // тело ответа обработано
let parsed = await response.json(); // ошибка (данные уже были обработаны)*/






_____________________________________________________________________________________________________________________________________________________________________________
                      //|
//Заголовки ответа:   //|
                      //|
_____________________________________________________________________________________________________________________________________________________________________________



/*Заголовки ответа хранятся в похожем на Map объекте response.headers.

Это не совсем Map, но мы можем использовать такие же методы, как с Map, чтобы получить заголовок по его имени или перебрать заголовки в цикле:*/

let response = await fetch('https://api.github.com/repos/javascript-tutorial/en.javascript.info/commits');

// получить один заголовок
alert(response.headers.get('Content-Type')); // application/json; charset=utf-8

// перебрать все заголовки
for (let [key, value] of response.headers) {
  alert(`${key} = ${value}`);
}





_____________________________________________________________________________________________________________________________________________________________________________
                      //|
//Заголовки запроса:  //|
                      //|
_____________________________________________________________________________________________________________________________________________________________________________


/*Для установки заголовка запроса в fetch мы можем использовать опцию headers. Она содержит объект с исходящими заголовками, например:*/

let response = fetch(protectedUrl, {
  headers: {
    Authentication: 'secret'
  }
});


/*Есть список запрещённых HTTP-заголовков, которые мы не можем установить:

Accept-Charset, Accept-Encoding
Access-Control-Request-Headers
Access-Control-Request-Method
Connection
Content-Length
Cookie, Cookie2
Date
DNT
Expect
Host
Keep-Alive
Origin
Referer
TE
Trailer
Transfer-Encoding
Upgrade
Via
Proxy-*
Sec-*
Эти заголовки обеспечивают достоверность данных и корректную работу протокола HTTP, поэтому они контролируются исключительно браузером.*/








_____________________________________________________________________________________________________________________________________________________________________________
                      //|
//POST-запросы:       //|
                      //|
_____________________________________________________________________________________________________________________________________________________________________________



/*Для отправки POST-запроса или запроса с другим методом, нам необходимо использовать fetch параметры:

method – HTTP метод, например POST,
body – тело запроса, одно из списка:
строка (например, в формате JSON),
объект FormData для отправки данных как form/multipart,
Blob/BufferSource для отправки бинарных данных,
URLSearchParams для отправки данных в кодировке x-www-form-urlencoded, используется редко.
Чаще всего используется JSON.

Например, этот код отправляет объект user как JSON:*/

let user = {
  name: 'John',
  surname: 'Smith'
};

let response = await fetch('/article/fetch/post/user', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json;charset=utf-8'
  },
  body: JSON.stringify(user)
});

let result = await response.json();
alert(result.message);



/*Заметим, что так как тело запроса body – строка, то заголовок Content-Type по умолчанию будет text/plain;charset=UTF-8.

Но, так как мы посылаем JSON, то используем параметр headers для отправки вместо этого application/json, правильный Content-Type для JSON.*/




_____________________________________________________________________________________________________________________________________________________________________________
                              //|
//Отправка изображения:       //|
                              //|
_____________________________________________________________________________________________________________________________________________________________________________



/*Мы можем отправить бинарные данные при помощи fetch, используя объекты Blob или BufferSource.

В этом примере есть элемент <canvas>, на котором мы можем рисовать движением мыши. При нажатии на кнопку «Отправить» изображение отправляется на сервер:*/


//<body style="margin:0">
 // <canvas id="canvasElem" width="100" height="80" style="border:1px solid"></canvas>

 // <input type="button" value="Отправить" onclick="submit()">

  //<script>
    canvasElem.onmousemove = function(e) {
      let ctx = canvasElem.getContext('2d');
      ctx.lineTo(e.clientX, e.clientY);
      ctx.stroke();
    };

    async function submit() {
      let blob = await new Promise(resolve => canvasElem.toBlob(resolve, 'image/png'));
      let response = await fetch('/article/fetch/post/image', {
        method: 'POST',
        body: blob
      });

      // сервер ответит подтверждением и размером изображения
      let result = await response.json();
      alert(result.message);
    }

  //</script>


/*  </body>

Заметим, что здесь нам не нужно вручную устанавливать заголовок Content-Type, потому что объект Blob имеет встроенный тип (image/png, заданный в toBlob). При отправке объектов Blob он автоматически становится значением Content-Type.

Функция submit() может быть переписана без async/await, например, так:*/


function submit() {
  canvasElem.toBlob(function(blob) {
    fetch('/article/fetch/post/image', {
      method: 'POST',
      body: blob
    })
      .then(response => response.json())
      .then(result => alert(JSON.stringify(result, null, 2)))
  }, 'image/png');
}






_____________________________________________________________________________________________________________________________________________________________________________
                              //|
//Итого:                      //|
                              //|
_____________________________________________________________________________________________________________________________________________________________________________






/*Типичный запрос с помощью fetch состоит из двух операторов await:

let response = await fetch(url, options); // завершается с заголовками ответа
let result = await response.json(); // читать тело ответа в формате JSON
Или, без await:*/

fetch(url, options)
  .then(response => response.json())
  //.then(result => ) // обрабатываем результат 

/*Параметры ответа:

response.status – HTTP-код ответа,
response.ok – true, если статус ответа в диапазоне 200-299.
response.headers – похожий на Map объект с HTTP-заголовками.
Методы для получения тела ответа:

response.text() – возвращает ответ как обычный текст,
response.json() – преобразовывает ответ в JSON-объект,
response.formData() – возвращает ответ как объект FormData (кодировка form/multipart, см. следующую главу),
response.blob() – возвращает объект как Blob (бинарные данные с типом),
response.arrayBuffer() – возвращает ответ как ArrayBuffer (низкоуровневые бинарные данные),
Опции fetch, которые мы изучили на данный момент:

/*method – HTTP-метод,
headers – объект с запрашиваемыми заголовками (не все заголовки разрешены),
body – данные для отправки (тело запроса) в виде текста, FormData, BufferSource, Blob или UrlSearchParams.
В следующих главах мы рассмотрим больше параметров и вариантов использования fetch.*/