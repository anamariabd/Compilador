
var fib = function (n) {
     return $if(pollitosiguales(n, 1), function () {
         return 1 
    }, function () {
         return $if(pollitosiguales(n, 2), function () {
             return 1 
        }, function () {
             return sumapollitos(fib(restarpollitos(n, 1)), fib(restarpollitos(n, 2))) 
        }) 
    }) 
}

pioimprecion(fib(7))
function pioimprecion(...args) {
  console.log("el pollito pio dice: " ,...args);
}

function sumapollitos(a , b) {
  return a + b;
}

function multiplicarpollitos(a , b) {
  return a * b;
}

function restarpollitos(a , b) {
  return a - b;
}

function difidirpollitos(a , b) {
  return a / b;
}

function  pollitoraiz(a) {
  return Math.sqrt(x);
}

function pollitoelevado(a,b) {
  return Math.pow(a,b);
}

function $if(cond , consecuencia , alternativa) {
  if(cond){
    return consecuencia();
  }else{
    return alternativa();
  }
}

function pollitosiguales(x , y) {
  return x === y;
}
