const express = require("express");
const convertidor = require("./app.js");
const bodyParser = require("body-parser");

const app = express();

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

app.post("/getjs", async (request, response) => {
  if (request.body.piocode){
    try {
      const resultado = await convertidor(request.body.piocode);
      response.status(200)
      response.json({ bloque: resultado });
    } catch (error) {
      response.status(404);
      response.json({ bloque: "mala sintagsis pio" });
    }
  }else{
    response.status(404);
    response.json({ bloque:"no se envio el codigo pio"});
  }
});

app.listen("8010");
