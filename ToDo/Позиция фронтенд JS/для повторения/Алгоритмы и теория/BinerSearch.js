

const Array = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]  // работает только с упорядоченными списками
let iter = 0
var{log}= console;


function Binersearch(arr, num){
    let start = 0;
    let middle;
    let and = arr.length;
    let found = false;
    let position = -1;
    



    while(found === false && start <= and){
        iter +=1
        middle =  Math.floor((start + and) /2 )
        
                
            if(arr[middle] === num){
                found = true;
                position = middle;
                return  position
            }
            
            if(num < arr[ middle]){
                and = middle - 1  
                
            }else{

                start = middle + 1
            
            }

            
            
    }

    return  position
   
}

//log(Binersearch(Array,13))
//log(iter)


//O(log2n) о большое от лагорифм n пооснованию 2     логорифм это обратное возмедение в степень функция  ... попросту говоря, логарифм — это степень, в которую нужно возвести a для получения b. 

/*
Задаем вопрос: в какую степень нужно возвести 7, чтобы получить 49?

Ответ: во вторую степень. Значит, \log_7{49}=2

*/
const array = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]  // работает только с упорядоченными списками
let count = 0
function recursiveBinarySearch(array, item, start, end) {
    let middle = Math.floor((start + end) / 2);
    count+= 1

    if(item === array[middle]){
        return middle
    }
    if(item < array[middle]){
        return recursiveBinarySearch(array, item, 0, middle - 1 ) 
    }  else{
        return recursiveBinarySearch(array, item, middle + 1 ,end )  
       
    }
}




console.log(recursiveBinarySearch(array, 10, 0, array.length))
console.log(count)