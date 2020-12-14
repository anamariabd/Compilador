@{%
const milexer = require("./lexer.js");
%}

@lexer milexer

programa
  -> _ml declaraciones _ml
      {%
        (data) => {
          return data[1];
        }
      %}

declaraciones
  -> declaracion (__lb_ declaracion):* 
      {%
          (data) => {
            const piezas = data[1];
            const restos = piezas.map(resto => resto[1]);
            return [data[0], ...restos];
          }
      %}

declaracion
  -> var_asignacion {% id %}
  | llamado_funcion {% id %}
  | %comentarios    {% id %}

var_asignacion
  -> %identificador _ "?>" _ exprecion
            {%
              (data) => {
                return {
                  type: "var_asignacion",
                  var_nombre: data[0],
                  valor: data[4]
                }
              }
            %}

llamado_funcion 
  -> %identificador _ "(" _ml (lsargumentos _ml):? ")"
        {%
          (data) => {
            return {
              type: "llamado_funcion",
              fun_nombre: data[0],
              argumentos: data[4] ? data[4][0] : []
            }
          }
        %}

lsargumentos
  -> exprecion
        {%
          (data) => {
            return [data[0]];
          }
        %}
  | lsargumentos __ml exprecion
        {%
          (data) => {
            return [...data[0], data[2]];
          }
        %}

exprecion
  -> %cadena {% id %}
  | %numerico {% id %}
  | %identificador {% id %}
  | llamado_funcion {% id %}
  | lambda {% id %}

lambda -> "(" _ (lsparametros _):? ")" _ "=>" _ml cuerpo_lambda
    {%
      (data) => {
        return{
          type: "lambda",
          parametro: data[2] ? data[2][0] : [],
          cuerpo: data[7]
        }
      }
    %}

lsparametros
  -> %identificador (__ %identificador):*
        {%
          (data) => {
            const piezas = data[1];
            const restos = piezas.map(pieza => pieza[1]);
            return [data[0], ...restos];
          }
        %}
cuerpo_lambda
  -> exprecion 
    {% 
      (data) => {
        return [data[0]];
      }
    %}
  | "{" __lb_ declaraciones __lb_ "}"
    {%
      (data) => {
        return data[2];
      }
    %}

# linea de separacion obligatoria

__lb_ -> (_ %NL):+ _


# espacio de linea opcional
_ml -> (%separador | %NL):*

# multi espacio de linea obligatorio
__ml -> (%separador | %NL):+

# espacios opcionales

_ -> %separador:*

# espacios obligatorios

__ -> %separador:+