const arr = [0,3,2,5,6,8,23,9,4,2,1,2,9,6,4,1,7,-1, -5, 23,6,2,35,6,3,32,9,4,2,1,2,9,6,4,1,7,-1, -5, 23,9,4,2,1,2,9,6,4,1,7,-1, -5, 23,]
let count = 0

function bubbleSort(array) {

    for (let i = 0; i < array.length; i++) {
        console.log(i)
        for (let j = i+1; j < array.length; j++) {
           
            if(array[j] < array[i]){
               let tmp =  array[i]
               array[i] = array[j] 
               array[j] = tmp

            } 
            count+=1
        }
        
    }

    return  array
}





console.log('length', arr.length)
console.log(bubbleSort(arr)) // O(n*n) тоже самое что  и в сортировке выбором но тут не кофициента
console.log('count = ', count)