const arr = [0,3,2,5,6,8,1,9,4,2,1,2,9,6,4,1,7,-1, -5, 23,6,2,35,6,3,32] // [0,1,1,2,3.......]
let count = 0

function selectionSort(array) {
    for (let i = 0; i < array.length; i++) {
        indexMin = i;
        for (let j = i+1; j < array.length; j++) {
           
            if(array[j] < array[indexMin]){
                indexMin = j; 
            } 
            console.log(j );
            count += 1;
        }

       
       let  tmp = array[i]
            array[i] = array[indexMin]
            array[indexMin] = tmp

            
        
    }

    return array;
}



console.log(selectionSort(arr))
console.log(arr.length) 
console.log('count = ', count)


/* 

                                                                      1 
O(n*n) тоесь O n в квадрате на самом деле тут ещё есть кофициент типо -n2 так как в внутренем цикле идет сдвиг на один каждый раз, но он не учавствует в оценке
                                                                      2  
*/