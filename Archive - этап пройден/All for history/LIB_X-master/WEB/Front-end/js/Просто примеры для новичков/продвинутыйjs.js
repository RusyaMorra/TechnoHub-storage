// scope


function funcA() {
    let a = 1
  
    function funcB() {
      let b = 2
  
      function funcC() {
        let c = 3
  
        console.log('funcC:',a, b, c)
      }
  
      funcC()
      console.log('funcB:', a, b)
    }
  
    funcB()
    console.log('funcA:', a)
  }
  
  funcA()





______________________________________________________________________________________________________________________________________________________________________






//hoisting



// console.log(sum(1, 41))
//
// function sum(a, b) {
//   return a + b
// }

// var i
// console.log(i)
// i = 42
// console.log(i)

// console.log(num)
// let num = 42
// console.log(num)

// Function Expression & Function Declaration


// function square(num) {
//   return num ** 2
// }

var square = function(num) {
    return num ** 2
  }
  
  console.log(square(25))






















  //IIFE

// Immediate Invoked Function Expression
let result = []
// for (var i = 0; i < 5; i++) {
//   result.push( function() {
//     console.log(i)
//   } )
// }
//
// result[2]()
// result[4]()

for (var i = 0; i < 5; i++) {
  (function() {
    var j = i
    result.push( function() { console.log(j) } )
  })()
}

result[2]()
result[4]()
