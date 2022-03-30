/*
1
//отфильтровать по частоте 
const arr =[1,1,2,3,3,4,5,6,7,7]

function aa(arr){
let cc =[];

for(let i=0;i<arr.length; i++){
let vv= arr[i];
console.log(arr[i])
let count=0
for(let j=0;j<arr.length; j++){
    if(arr[j]===vv){
        console.log(arr[j])
      count++
    }
}
if(count==1){
    cc.push(vv)
}
}
return console.log(cc);
}
aa(arr);
*/

/*
2
const hh = document.getElementById('hh');


console.dir(hh);

let a = hh.children.length;
for(let i =0;i<=a;i++){
 let aa=i;
 
console.log(aa.children.length);
}*/
/*
3
let salaries = {
    John: 100,
    Ann: 160,
    Pete: 130
  }
let sum = 0;
for(let key in salaries ){
 sum += salaries[key];

}
console.log(sum );
*/
/*
4
let menu = {
    width: 200,
    height: 300,
    title: "My menu"
  };

function  multiplyNumeric(obj){
    for(let key in obj ){
        sum = obj[key];
       
       if(typeof sum == 'number'){
       
        let result = sum*2;
       console.log(result);
       }
      
       }
       console.log(menu);
}
multiplyNumeric(menu)

*/
/*
5
let user = { name: "Иван" };

let permissions1 = { canView: true };
let permissions2 = { canEdit: true };
let permissions3 = { canEdit: true };
let permissions4 = { canEdit: true };
let permissions5 = { canEdit: true };

// копируем все свойства из permissions1 и permissions2 в user
Object.assign(user, permissions1, permissions2,permissions3,permissions4,permissions5);
console.log(user)
// теперь user = { name: "Иван", canView: true, canEdit: true }
*/
//Создайте объект calculator (калькулятор) с тремя методами:

//read() (читать) запрашивает два значения и сохраняет их как свойства объекта.
//sum() (суммировать) возвращает сумму сохранённых значений.
//mul() (умножить) перемножает сохранённые значения и возвращает результат.

/*
6
let calculator = {
 
   read(a,b){
        this.a=a;
        this.b=b;
        console.log(a,b);
     

    },
    sum(){
     let res = this.a+this.b;
      return console.log(res);
    },
    mul(){
        let res = this.a*this.b;
        return console.log(res);
    }
};
  calculator.read(3,5);
 calculator.sum() 
  calculator.mul() 

  */
 /*
7
  let ladder = {
    step: 0,
     up: function() {
      this.step++;
     return this
    },
    down: function() {
      this.step--;
      return this
    },
    showStep: function() { // показывает текущую ступеньку
      console.log( this.step );
    }
  };
  
ladder.up().up().down().showStep();
*/
/*
8
function Calculator(a,b){
    this.a=a; 
    this.b=b;
this.read =function(){
    this.a = +prompt('a?', 0);
    this.b = +prompt('b?', 0);
   
};
this.sum = function(a,b){
 let res1 =   this.a + this.b;
return console.log( "Sum=" + res1 );
};
this.mul = function(a,b){
 let res2 =  this.a * this.b ;
 
return console.log( "Mul=" +  res2 );
};
}
let calculator = new Calculator();
calculator.read();

  calculator.sum() 
 calculator.mul() 
*/
/*
 9
 function Accumulator(value){
this.value = value;

this.read =function(){
    let a = +prompt('a?', 0);
   let res = this.value + a;
  return console.log( res);
   
   
};
}
let accumulator = new Accumulator(3); // начальное значение 1
accumulator.read(); // прибавит ввод prompt к текущему значению
accumulator.read(); // прибавит ввод prompt к текущему значению
accumulator.read(); // прибавит ввод prompt к текущему значению
accumulator.read(); // прибавит ввод prompt к текущему значению
accumulator.read(); // прибавит ввод prompt к текущему значению
accumulator.read(); // прибавит ввод prompt к текущему значению
accumulator.read(); // прибавит ввод prompt к текущему значению
alert(accumulator.value); // выведет сумму этих значений
*/
/*
10
let salaries = {
    "John": 100,
    "Pete": 300,
    "Mary": 250
  };


 function sumSalaries(obj){
  let values =  Object.values(obj)
  let result = 0
  for( key  of values  ){
    result += key

   
  }
  console.log(result )
  }
sumSalaries(salaries)  // 650

// как вариант 
function sumSalaries(salaries) {
  return Object.values(salaries).reduce((a, b) => a + b, 0) // 650
}

*/
/*
11
let user = {
    name: 'John',
    age: 30
  };
  
 function count(user){
    let res = Object.entries(user);
    console.log(res.length);
 }  // 2

 count(user)

 */

/*
let date = new Date();

console.dir(date);
*/

/*
12
let name = "John";

function sayHi() {
  alert("Hi, " + name);
}

name = "Pete";

sayHi(); // что будет показано: "John" или "Pete"?
*/
//13 факториал
/*
function factorial(n){
    if(n===1){
        return 1 
    }

    return n* factorial(n-1)
}

console.log(factorial(5))
*/
/*
//14  рекурсивное возведение в n-ю степень



function vozvvstepen(x,n){
    if(n===1){
        return 1 
    }

    return x * vozvvstepen(x, n-1)
}

console.log(vozvvstepen(3,3))

*/


/*

//15 алгоритм ленейного поиска


const list=[1,2,3,43,2,4,34,23,-4,5324,-3,-1,2];

let c;
let count= 0;
function linearsearch(arr,n){
   if(arr===undefined){
    return console.log('не найдено') 
   }
for(let i = 0;  i <= arr.length; i++){
       count+=1
       
    if(arr[i]===n){
        
        return console.log('вот этот индекс '+ i) 
    }
  
}
return -1
}


console.log(linearsearch(list,-4));

console.log(count);

//cложность O(n)
*/
/*
//16
//функция определения числа фибоначи 
//0 1 1 2 3 5 8  13 21
   //1 2 3 4 5 6  7  8
 function fib(n) {
 if( n === 1 || n === 2){
         return 1 
     }

    return fib(n-1) + fib(n-2)

   }


   console.log(fib(5))

 */

//итеративное возведение в степень

/*

17
let stepen=(x,n)=>{
let result =1;

for(let i=0; i<n; i++){
    result*=x
}
return result
}

console.log(stepen(2,3))


*/
/*
18
function askPassword(ok, fail) {
    let password = prompt("Password?", '');
    if (password == "rockstar") ok();
    else fail();
  }
  
  let user = {
    name: 'Вася',
  
    loginOk() {
      alert(`${this.name} logged in`);
    },
  
    loginFail() {
      alert(`${this.name} failed to log in`);
    },
  
  };
  askPassword(user.loginOk.bind(user), user.loginFail.bind(user));
*/
/*
19
 function askPassword(ok, fail) {
    let password = prompt("Password?", '');
    if (password == "rockstar") ok();
    else fail();
  }
  
  let user = {
    name: 'John',
  
    login(result) {
      alert( this.name + (result ? ' logged in' : ' failed to log in') );
    }
  };
  
  askPassword(user.login.bind(user,true),user.login.bind(user,false)); // ?
*/
/* 
20
декоратор
function slow(x) {
    // здесь могут быть ресурсоёмкие вычисления
    alert(`Called with ${x}`);
    return x;
  }
  
  function cachingDecorator(func) {
    let cache = new Map();
  
    return function(x) {
      if (cache.has(x)) {    // если кеш содержит такой x,
        return cache.get(x); // читаем из него результат
      }
  
      let result = func(x); // иначе, вызываем функцию
  
      cache.set(x, result); // и кешируем (запоминаем) результат
      return result;
    };
  }
  
  slow = cachingDecorator(slow);
  
  alert( slow(1) ); // slow(1) кешируем
  alert( "Again: " + slow(1) ); // возвращаем из кеша
  
  alert( slow(2) ); // slow(2) кешируем
  alert( "Again: " + slow(2) ); // возвращаем из кеша
*/
/*
// ДЕКОРАТОР И КОНТЕКСТ 

//21
// сделаем worker.slow кеширующим
let worker = {
    someMethod() {
      return 1;
    },
  
    slow(x) {
      // здесь может быть страшно тяжёлая задача для процессора
      alert("Called with " + x);
      return x * this.someMethod(); // (*)
    }
  };
  
  // тот же код, что и выше
  function cachingDecorator(func) {
    let cache = new Map();
    return function(x) {
      if (cache.has(x)) {
        return cache.get(x);
      }
      let result = func(x); // (**)
      cache.set(x, result);
      return result;
    };
  }
  

  
  worker.slow = cachingDecorator.call(worker,worker.slow); // теперь сделаем его кеширующим
  
  alert( worker.slow(2) ); // Ой! Ошибка: не удаётся прочитать свойство 'someMethod' из 'undefined'

  */
/*
22
  function work(a, b) {
    alert( a + b ); // произвольная функция или метод
    
  }
function spy(fun){
моя попытка реализовать неудачно

    let arg = arguments;
  let calls={ };
  for(key of calls){
    if(key==arg){
        return key
    }else{
       
        const obj = calls.reduce((newObj, item) => {
            newObj[item] = [].join.call(arguments);
            return newObj;
            
          }, {});
          fun()
    }
 }
 
}
 
function spy(func) {
   
    function wrapper(...args) {
        
      wrapper.calls.push(args);
     
      return func.apply(this, arguments);
    }
  
    wrapper.calls = [];
    
    return wrapper;
  }
work = spy(work);
  
  work(1, 2); // 3
  work(4, 5); // 9
  
  for (let args of work.calls) {
    alert( 'call:' + args.join() ); // "call:1,2", "call:4,5"
  }
*/
/* 23
  function f(x) {
    alert(x);
  }
  
function delay(f, ms) {

    return function() {
      setTimeout(() => f.apply(this, arguments), ms);
    };
  
  }
  // создаём обёртки
  let f1000 = delay(f, 1000);
  let f1500 = delay(f, 1500);
  
  f1000("test"); // показывает "test" после 1000 мс
  f1500("test"); // показывает "test" после 1500 мс
*/

/*
//сумировние реккурсией 24
function   sumTo(n){
    if(n===1){
        return 1 
    }


    return n + sumTo(n-1)
}

console.log(sumTo(5));
*/
/*
//сумировние итеративный  25

function   sumTo(n){
let sum = 0
 for(let i = 1; i<=n; i++){
       
 sum+=i

 }

 return sum
}
console.log(sumTo(5));
*/
/*
//26 обход и вывод связного списка рукурсивный и итеративный

let list = {
    value: 1,
    next: {
      value: 2,
      next: {
        value: 3,
        next: {
          value: 4,
          next: null
        }
      }
    }
  };
 function printList(list) {

    console.log(list.value); // выводим текущий элемент
  console.log(Boolean(list.next))
    if (list.next) {
      printList(list.next); // делаем то же самое для остальной части списка
    }
  
  }

  function printList(list) {
   let c = list;

    while( c){
        console.log(c.value)
        
        c=c.next
    

    }
   }
printList(list)
*/
 /*27
  function f() {
    alert("Hello!");
  }
  Function.prototype.defer=function(ms){

    setTimeout(this,ms);
};
f.defer(1000) 
*/
/*
28
 class Clock {
    constructor(template,width,height,background,color) {
      this.template = template;
      this.width = width;
      this.height = height;
      this.background= background;
      this.color = color;
      
    }
    gettamplate(){
       

      let temp =document.getElementById('output')  //default
      this.template=temp;
      this.setsizes(this.width,this.height ,this.background,this.color)

    }
    setsizes(width,height,background,color){
        this.template.style.width= width;
        this.template.style.height=height;
        this.template.style.background=background;
        this.template.style.color=color;
        this.template.style.display='flex'
        this.template.style.justifyContent='center'
        this.template.style.flexDirection='column'
        this.template.style.alignItems='center'

        this.render()

    }
  
    render() {
      let date = new Date();
  
      let hours = date.getHours();
      
      if (hours < 10) hours = '0' + hours;
  
      let mins = date.getMinutes();
      if (mins < 10) mins = '0' + mins;
  
      let secs = date.getSeconds();
      if (secs < 10) secs = '0' + secs;
  
      let output = this.template;
      let div = document.createElement('div');
      div.innerHTML = `
      <div id="setit">
      <h1 id="a">${'hours: '+hours}</h1>
      <h1 id="aa" >${'mins: '+mins}</h1>
      <h1  id="aaa">${'secs: '+secs}</h1>
      </div>
      
      `;

      output.append(div);
      
      let div1 = document.getElementById('setit');
      let h1 = document.querySelector('#a');
      let h12 = document.querySelector('#aa');
      let h13 = document.querySelector('#aaa');
      div1.style.backgroundColor='green'
      div1.style.width='150px'
      div1.style.height='150px'
      div1.style.color='white'
      div1.style.fontSize='15px'
      div1.style.display='flex'
      div1.style.justifyContent='center'
      div1.style.flexDirection='column'
      div1.style.alignItems='center'
      h1.style.background='grey'
      h1.style.width='100%'
      h12.style.background='grey'
      h12.style.width='100%'
      h13.style.background='grey'
      h13.style.width='100%'

    }

  }
  class Declaret{

    constructor(timer) {
      this.timer=timer
        
      }
    create(){
    let clock = new Clock(null,'700px','500px','red','white')


    clock.gettamplate()
    this.stop()
   } 
     
   stop() {
    clearInterval(this.timer=0);
  }
 start() {
    setInterval(() => this.create(), this.timer);
  }
}
Create= new Declaret(1000)
Create.start()
*/
/*
29
let display=document.getElementById('display');
let input=document.getElementById('input').value;

input.addEventListener("submit",(event)=>{
    event.preventDefault();
   let name = input
})
let randomgreencard=Math.random(Math.floor())*10000000
display.style.width='1000px';
display.style.height='500px';
display.style.background='green';
display.style.color='white';
display.style.textAlign='center';
display.style.fontSize='22px';
display.style.paddingTop='77px';
function greencard(name,score) {
    console.log(score);
    let yourName = name;
    if(score<100000) display.textContent=`success you are winner, my concradulatcion ${yourName}!!!`;
    else{
        return display.textContent=`не в этот раз ${yourName} но все получиться!!!`;  
    }
  
}
greencard('Ruslan Bayakhmetov', randomgreencard)
*/
/*30
let loadScript =(cx, cy, radius,ms, callback) =>{
 //setTimeout((cx, cy, radius, callback)=>{
 let circle = document.body.children[2];
        circle.classList.add('circle');
        circle.style.top=cx +'px';
        circle.style.left=cy +'px';
        circle.style.width=radius*2 +'px';
        circle.style.height=radius*2 +'px';
        callback(circle)
       

  //  },ms)
};
loadScript(150, 150, 100, 3000 , div => {
    div.classList.add('message-ball');
    div.append("Hello, world!");
  });
*/
/*
31
function delay(ms) {
   return new Promise(function(resolve){
    let name = 'gary';
    setTimeout(()=>alert('первый этап'), 1000);
    setTimeout(()=>resolve(name), ms);
})
 }
  delay(3000).then((name) => setTimeout( alert(`выполнилось через 3 секунды, как тебе такое ${name}`,2000))).then((name)=>alert(`its done ${name}`,2000))
*/
/*
32
let showCircle =(cx, cy, radius) =>{
    return new Promise(function(resolve){
        
        setTimeout(()=>{
        let circle = document.body.children[2];
        circle.classList.add('circle');
        circle.style.top=cx +'px';
        circle.style.left=cy +'px';
        circle.style.width=radius*2 +'px';
        circle.style.height=radius*2 +'px';
           setTimeout(()=>resolve(circle),1400);
        },1000);
       
    })
}

showCircle(150, 150, 100).then(div => {
    div.classList.add('message-ball');
    div.append("Hello, world!");
  });  
*/


