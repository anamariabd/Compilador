// Generated automatically by nearley, version 2.20.1
// http://github.com/Hardmath123/nearley
(function () {
function id(x) { return x[0]; }

const milexer = require("./lexer.js");
var grammar = {
    Lexer: milexer,
    ParserRules: [
    {"name": "programa", "symbols": ["_ml", "declaraciones", "_ml"], "postprocess": 
        (data) => {
          return data[1];
        }
              },
    {"name": "declaraciones$ebnf$1", "symbols": []},
    {"name": "declaraciones$ebnf$1$subexpression$1", "symbols": ["__lb_", "declaracion"]},
    {"name": "declaraciones$ebnf$1", "symbols": ["declaraciones$ebnf$1", "declaraciones$ebnf$1$subexpression$1"], "postprocess": function arrpush(d) {return d[0].concat([d[1]]);}},
    {"name": "declaraciones", "symbols": ["declaracion", "declaraciones$ebnf$1"], "postprocess": 
        (data) => {
          const piezas = data[1];
          const restos = piezas.map(resto => resto[1]);
          return [data[0], ...restos];
        }
              },
    {"name": "declaracion", "symbols": ["var_asignacion"], "postprocess": id},
    {"name": "declaracion", "symbols": ["llamado_funcion"], "postprocess": id},
    {"name": "declaracion", "symbols": [(milexer.has("comentarios") ? {type: "comentarios"} : comentarios)], "postprocess": id},
    {"name": "var_asignacion", "symbols": [(milexer.has("identificador") ? {type: "identificador"} : identificador), "_", {"literal":"?>"}, "_", "exprecion"], "postprocess": 
        (data) => {
          return {
            type: "var_asignacion",
            var_nombre: data[0],
            valor: data[4]
          }
        }
                    },
    {"name": "llamado_funcion$ebnf$1$subexpression$1", "symbols": ["lsargumentos", "_ml"]},
    {"name": "llamado_funcion$ebnf$1", "symbols": ["llamado_funcion$ebnf$1$subexpression$1"], "postprocess": id},
    {"name": "llamado_funcion$ebnf$1", "symbols": [], "postprocess": function(d) {return null;}},
    {"name": "llamado_funcion", "symbols": [(milexer.has("identificador") ? {type: "identificador"} : identificador), "_", {"literal":"("}, "_ml", "llamado_funcion$ebnf$1", {"literal":")"}], "postprocess": 
        (data) => {
          return {
            type: "llamado_funcion",
            fun_nombre: data[0],
            argumentos: data[4] ? data[4][0] : []
          }
        }
                },
    {"name": "lsargumentos", "symbols": ["exprecion"], "postprocess": 
        (data) => {
          return [data[0]];
        }
                },
    {"name": "lsargumentos", "symbols": ["lsargumentos", "__ml", "exprecion"], "postprocess": 
        (data) => {
          return [...data[0], data[2]];
        }
                },
    {"name": "exprecion", "symbols": [(milexer.has("cadena") ? {type: "cadena"} : cadena)], "postprocess": id},
    {"name": "exprecion", "symbols": [(milexer.has("numerico") ? {type: "numerico"} : numerico)], "postprocess": id},
    {"name": "exprecion", "symbols": [(milexer.has("identificador") ? {type: "identificador"} : identificador)], "postprocess": id},
    {"name": "exprecion", "symbols": ["llamado_funcion"], "postprocess": id},
    {"name": "exprecion", "symbols": ["lambda"], "postprocess": id},
    {"name": "lambda$ebnf$1$subexpression$1", "symbols": ["lsparametros", "_"]},
    {"name": "lambda$ebnf$1", "symbols": ["lambda$ebnf$1$subexpression$1"], "postprocess": id},
    {"name": "lambda$ebnf$1", "symbols": [], "postprocess": function(d) {return null;}},
    {"name": "lambda", "symbols": [{"literal":"("}, "_", "lambda$ebnf$1", {"literal":")"}, "_", {"literal":"=>"}, "_ml", "cuerpo_lambda"], "postprocess": 
        (data) => {
          return{
            type: "lambda",
            parametro: data[2] ? data[2][0] : [],
            cuerpo: data[7]
          }
        }
            },
    {"name": "lsparametros$ebnf$1", "symbols": []},
    {"name": "lsparametros$ebnf$1$subexpression$1", "symbols": ["__", (milexer.has("identificador") ? {type: "identificador"} : identificador)]},
    {"name": "lsparametros$ebnf$1", "symbols": ["lsparametros$ebnf$1", "lsparametros$ebnf$1$subexpression$1"], "postprocess": function arrpush(d) {return d[0].concat([d[1]]);}},
    {"name": "lsparametros", "symbols": [(milexer.has("identificador") ? {type: "identificador"} : identificador), "lsparametros$ebnf$1"], "postprocess": 
        (data) => {
          const piezas = data[1];
          const restos = piezas.map(pieza => pieza[1]);
          return [data[0], ...restos];
        }
                },
    {"name": "cuerpo_lambda", "symbols": ["exprecion"], "postprocess":  
        (data) => {
          return [data[0]];
        }
            },
    {"name": "cuerpo_lambda", "symbols": [{"literal":"{"}, "__lb_", "declaraciones", "__lb_", {"literal":"}"}], "postprocess": 
        (data) => {
          return data[2];
        }
            },
    {"name": "__lb_$ebnf$1$subexpression$1", "symbols": ["_", (milexer.has("NL") ? {type: "NL"} : NL)]},
    {"name": "__lb_$ebnf$1", "symbols": ["__lb_$ebnf$1$subexpression$1"]},
    {"name": "__lb_$ebnf$1$subexpression$2", "symbols": ["_", (milexer.has("NL") ? {type: "NL"} : NL)]},
    {"name": "__lb_$ebnf$1", "symbols": ["__lb_$ebnf$1", "__lb_$ebnf$1$subexpression$2"], "postprocess": function arrpush(d) {return d[0].concat([d[1]]);}},
    {"name": "__lb_", "symbols": ["__lb_$ebnf$1", "_"]},
    {"name": "_ml$ebnf$1", "symbols": []},
    {"name": "_ml$ebnf$1$subexpression$1", "symbols": [(milexer.has("separador") ? {type: "separador"} : separador)]},
    {"name": "_ml$ebnf$1$subexpression$1", "symbols": [(milexer.has("NL") ? {type: "NL"} : NL)]},
    {"name": "_ml$ebnf$1", "symbols": ["_ml$ebnf$1", "_ml$ebnf$1$subexpression$1"], "postprocess": function arrpush(d) {return d[0].concat([d[1]]);}},
    {"name": "_ml", "symbols": ["_ml$ebnf$1"]},
    {"name": "__ml$ebnf$1$subexpression$1", "symbols": [(milexer.has("separador") ? {type: "separador"} : separador)]},
    {"name": "__ml$ebnf$1$subexpression$1", "symbols": [(milexer.has("NL") ? {type: "NL"} : NL)]},
    {"name": "__ml$ebnf$1", "symbols": ["__ml$ebnf$1$subexpression$1"]},
    {"name": "__ml$ebnf$1$subexpression$2", "symbols": [(milexer.has("separador") ? {type: "separador"} : separador)]},
    {"name": "__ml$ebnf$1$subexpression$2", "symbols": [(milexer.has("NL") ? {type: "NL"} : NL)]},
    {"name": "__ml$ebnf$1", "symbols": ["__ml$ebnf$1", "__ml$ebnf$1$subexpression$2"], "postprocess": function arrpush(d) {return d[0].concat([d[1]]);}},
    {"name": "__ml", "symbols": ["__ml$ebnf$1"]},
    {"name": "_$ebnf$1", "symbols": []},
    {"name": "_$ebnf$1", "symbols": ["_$ebnf$1", (milexer.has("separador") ? {type: "separador"} : separador)], "postprocess": function arrpush(d) {return d[0].concat([d[1]]);}},
    {"name": "_", "symbols": ["_$ebnf$1"]},
    {"name": "__$ebnf$1", "symbols": [(milexer.has("separador") ? {type: "separador"} : separador)]},
    {"name": "__$ebnf$1", "symbols": ["__$ebnf$1", (milexer.has("separador") ? {type: "separador"} : separador)], "postprocess": function arrpush(d) {return d[0].concat([d[1]]);}},
    {"name": "__", "symbols": ["__$ebnf$1"]}
]
  , ParserStart: "programa"
}
if (typeof module !== 'undefined'&& typeof module.exports !== 'undefined') {
   module.exports = grammar;
} else {
   window.grammar = grammar;
}
})();
