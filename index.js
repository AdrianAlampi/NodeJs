// server API  
const { response } = require("express");
var express = require("express");
var apiServer = express();
var fs = require("fs"); // serve per leggere e scrivere sui file

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
// restituisce il nome 
apiServer.get("/mioNome", (request, response) => {
    console.log("richiesta get su mioNome");
    response.send("Ciao; il mio nome è: "+ request.query.nome);
});
// somma di due stringhe a e b
apiServer.get("/somma", (request, response) => {
    console.log("somma request", request.query);
    response.send("risultato=  " +(request.query.a -(-request.query.b)));
});

// prende i dati dall'array studenti --> http://localhost:3000/student?id=1
apiServer.get("/student", (request, response) => {
    console.log("student id", request.query.id);
    // 1. leggere il file
    // 2. prelevare l'oggetto con id 1
    // 3. send 
    fs.readFile("studenti.json", (err, data)=> {
        if(err){
            console.log("errore: " + err);
        }else{
            var students = JSON.parse(data);
            for(let i=0; i<students.length; i++){
                if(request.query.id == students[i].id){
                    console.log("cognome studente: " + students[i].surname);
                    console.log("nome studente: " + students[i].name);
                    response.send("student: </br>" + "surname: "+(students[i].surname) +"</br>"+" name: "+(students[i].name));
                }
            }
            //oppure 
           // response.send(students.find(x => x.id === request.query.id));
           /*  var students = JSON.parse(data);
            console.log("studenti: " + students[0].surname); */
        }
    });
});

/* // http://localhost:3000/newStudent?id=3&name=Mattia&surname=Amati
apiServer.get("/newStudent", (request, response) => {
    // console.log("student", request.query);
    var student = {
        "surname": request.query.surname,
        "name":  request.query.name,
        "id":  request.query.id
    }
    fs.readFile("studenti.json", (err, data)=> {
        if(err){
            console.log("errore: " + err);
        }else{
            var students = JSON.parse(data);
            var studente = JSON.parse(data); 
            studente.push(student); 
            var json = JSON.stringify(studente); 
            fs.writeFile('studenti.json', json);
        }
    });
}); */

apiServer.get("/soap", (request, response) => { //formatta in json
    console.log("richiesta get");
    response.setHeader("Content-Type", "application/json");
    response.send(JSON.stringify({"nome": request.query.nome},null,3));
});

apiServer.post("/soap", (request, response) => { 
    console.log("richiesta post", request);
    response.setHeader("Content-Type", "application/json");
    response.send(JSON.stringify({"nome": request.query.nome},null,3));
});