const nearley = require("nearley");
const grammar = require("./pio.js");
const generate = require("./generate.js");

async function parsear(code) {
  const parser = new nearley.Parser(nearley.Grammar.fromCompiled(grammar));
  parser.feed(code);
  
  if (parser.results.length > 1) {
    return "ERROR: Tu sigtagsis pio esta mala :v";
  }else if (parser.results.length == 1) {
    const ast = parser.results[0];
    const codigoast = await JSON.stringify(ast,null,"  ");
    const codigojs =  await generate(codigoast);
    return {
          codigopio: code,
          codigoast: codigoast,
          codigojs: codigojs
    }
    // mostrar despues en la api
  }else{
    return "ERROR: hay varios casos de parseo";
  }
}
module.exports = parsear;
