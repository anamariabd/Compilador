const fs = require("mz/fs");

async function generarArchivoJS(archivo) {
  const filename = archivo;
  if (!filename) {
    console.log("dame un archivo .ast");
    return;
  }
  const astjson = (await fs.readFile("./generate_code_ast/"+filename)).toString();
  const defFunciones =  (await fs.readFile("./libs/defFunciones.js")).toString();
  const declaraciones = JSON.parse(astjson);
  const jscode = generatejs(declaraciones) + "\n" + defFunciones;
  const outputFilename = filename.replace(".ast", ".js");
  await fs.writeFile("./generate_code_js/"+outputFilename, jscode);
  console.log(`se escribio ${outputFilename}`);
}

function generatejs(declaraciones) {
  const lineas = []
  for(let declaracion of declaraciones){
    const linea = generarJsPorlinea(declaracion);
    lineas.push(linea);
  }
  return lineas.join("\n");
}

function generarJsPorlinea(nodo) {
  if (nodo.type === "var_asignacion") {
    let var_nombre = nodo.var_nombre.value;
    let valor = generarJsPorlinea(nodo.valor);
    const js = `var ${var_nombre} = ${valor}`;
    return js;
  } else if (nodo.type === "llamado_funcion") {
    let nombre_funcion = nodo.fun_nombre.value;
    if (nombre_funcion === "sipollito" || nombre_funcion === "if") {
      nombre_funcion = "$if";
    }
    const argumentos = nodo.argumentos
      .map((argumento) => {
        return generarJsPorlinea(argumento);
      })
      .join(", ");
    return `${nombre_funcion}(${argumentos})`;
  } else if (nodo.type === "cadena") {
    return nodo.value;
  } else if (nodo.type === "numerico") {
    return nodo.value;
  } else if (nodo.type === "identificador") {
    return nodo.value;
  } else if (nodo.type === "lambda") {
    const lsparametros = nodo.parametro.map((param) => param.value).join(", ");
    const jscuerpo = nodo.cuerpo
      .map((arg, i) => {
        const jscodigo = generarJsPorlinea(arg);
        if (i === nodo.cuerpo.length - 1) {
          return "return " + jscodigo;
        } else {
          return jscodigo;
        }
      })
      .join(";\n");
    return `function (${lsparametros}) {\n ${identar(jscuerpo)} \n}`;
  } else if (nodo.type === "comentarios") {
    return '';
  } else {
    console.log(nodo);
    throw new Error("este tipo aun no esta manejado por pio" + nodo.value);
  }
}

function identar(cadena) {
  return cadena.split("\n").map( linea => "    " + linea).join("\n");
}

module.exports = generarArchivoJS;