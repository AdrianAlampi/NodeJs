// server API  
const { response } = require("express");
var express = require("express");
var apiServer = express();

console.log("funziona");
var a = 5;
var b = "3";
console.log(a + b);

var port = 3000;
var host = "localhost";
// port= porta, host = host, () = funzione che viene eseguita
apiServer.listen(port, host, () => {
    console.log("server running at http://%s:%d", host, port);
});

apiServer.get("/", (request, response) => {
    console.log("sono in get /", request);
    response.send("<h1>Ciao client sei in home</h1>");
});

var nome = "Alampi";
apiServer.get("/nome", (request, response) => {
    console.log("richiesta get su nome");
    response.send("ciao il mio nome è: " + nome);
});

apiServer.get("/mioNome", (request, response) => {
    console.log("richiesta get su mioNome");
    response.send("Ciao; il mio nome è: "+ request.query.nome);
});

apiServer.get("/somma", (request, response) => {
    console.log("richiesta get su somma");
    response.send("Ciao; il mio nome è: " +( request.query.a) + ( request.query.b));
});
