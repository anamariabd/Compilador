const parser = require("./libs/parser.js");

async function convertirPioToJs(codigo) {
  return await parser(codigo);
}

module.exports = convertirPioToJs;