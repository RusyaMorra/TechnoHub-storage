
/*
const arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20] 

let itter = 0


function binerSearch(arr, num) {
let start = 0
let and = arr.length
let find = false
let middle

let position = -1

while(find === false && start <=  and){
   itter+=1
    
    middle = Math.floor((start + and)/2)
    if(arr[middle]===num){
        find = true
        position = middle
        return position
    }
    if(num < arr[middle]){
      console.log(and = middle - 1 )  
    }else{
        start = middle - 1
    } 
}

return position


}


binerSearch(arr, 5)

console.log(binerSearch(arr, 5))
console.log(itter)

*/





const arr = [1,2,4,5,6,7,8,9,10,11,1213,1415,16,17,1819,20] 


function selectionSort(arr){

    for(let i = 0; i <= arr.length; i++ ){
       
        if(arr[i] < arr[i] + 1 ){
           continue
        }else{
            arr[i] = arr[i] + 1
        }
    }


}



console.log(selectionSort(arr))