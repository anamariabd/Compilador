const express = require("express");
const convertidor = require("./app.js");
const port = process.env.PORT || 3977;
const bodyParser = require("body-parser");

const app = express();

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// Configure Header HTTP
app.use((req, res, next) => {
  res.header("Access-Control-Allow-Origin", "*");
  res.header(
    "Access-Control-Allow-Headers",
    "Authorization, X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Allow-Request-Method"
  );
  res.header("Access-Control-Allow-Methods", "GET, POST, OPTIONS, PUT, DELETE");
  res.header("Allow", "GET, POST, OPTIONS, PUT, DELETE");
  next();
});



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
app.get("/", async (request, response) => {
  response.send("hola mundo");
});

app.listen(port , () => {
  console.log("######################");
  console.log("###### API REST ######");
  console.log("######################");
});
