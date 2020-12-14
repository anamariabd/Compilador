buclepio(rangopio(1, 10), function (numero) {
     return pioimprecion(numero) 
})
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

function rangopio(comienzo , fin) {
  const resultado = [];
  for (let i = 0; i < fin; i++) {
    resultado.push(i);
  }
  return resultado;
}
function buclepio(array, funcion) {
  array.forEach(funcion);
}

function bluclepiodo(condicion , ejecucion) {
  do {
    ejecucion();
  } while (condicion());
}
