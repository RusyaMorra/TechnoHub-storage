const Array = [1,2,3,4,5,6,7,8,9,10]

var{log}= console;
count = 0
function linersearch(arr, num){

    for(let i= 0; i < arr.length; i++){\
        count+= 1
        if(arr[i]=== num){
            return  i;
        } 
    }
    return null
}

log(linersearch(Array,8))


//o (n)