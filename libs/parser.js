const nearley = require("nearley");
const grammar = require("./pio.js");
const fs = require("mz/fs");


async function parsear(archivo) {
  const filename = archivo;
  if(!filename){
    console.log("dame un archivo");
    return;
  }
  const code = (await fs.readFile("./ejemplos/"+filename)).toString();
  const parser = new nearley.Parser(nearley.Grammar.fromCompiled(grammar));
  


  parser.feed(code);
  
  if (parser.results.length > 1) {
    console.log("ERROR: Tu sigtagsis pio esta mala :v")
  }else if (parser.results.length == 1) {
    const ast = parser.results[0];
    const salida = filename.replace(".pio", ".ast");
    await fs.writeFile("./generate_code_ast/"+salida,JSON.stringify(ast,null,"  "));
    console.log(`el documento de salida es ${salida}`);
  }else{
    console.log("ERROR: no se encontro un parseo");
  }

  console.log(parser.results); // [[[[ "foo" ],"\n" ]]]
}

module.exports = parsear;
