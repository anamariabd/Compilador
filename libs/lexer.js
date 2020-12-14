const moo = require("moo")
let lexer = moo.compile({
  separador: /[ \t]+/,
  comentarios: /\/\/.*?$/,
  numerico: /0|[1-9][0-9]*/,
  cadena: /"(?:\\["\\]|[^\n"\\])*"/,
  lparen: "(",
  rparen: ")",
  lcorche: "}",
  rcorche: "{",
  asignacion: "?>",
  flecha: "=>",
  identificador: /[a-zA-Z][a-zA-Z_0-9]*/,
  NL: { match: /[\r\n]+/, lineBreaks: true },
});

module.exports = lexer;

