
const  factorial = (n) =>{

    if(n === 1){
        return 1
    }

    return n* factorial(n - 1  )
}



//console.log(factorial(5));




const  fibanachi = (n) =>{

    if(n === 1 || n === 2){
        return 1
    }

    return  fibanachi(n - 1) + fibanachi(n-2)
}



console.log(fibanachi(8));