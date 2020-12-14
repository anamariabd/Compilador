const parser = require("./libs/parser.js");
const generate = require("./libs/generate.js");

async function main(archivo) {
  await parser(archivo + ".pio");
  await generate(archivo + ".ast");
}

main("comentarios").catch(err => console.log(err.stack))