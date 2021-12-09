var user= "ADMIN";
var pw= "ADMINISTRATOR";
var d=true;
var n=0;



$("#btn").click(function(){
    if(n){
        localStorage.setItem("tabella",  "");
        $("#table").append(localStorage.getItem("tabella"));  
    }
    var input1 = document.getElementById('user').value;
    var input2 = document.getElementById('pw').value;
    console.log("USER: "+input1);
    console.log("PASSWORD: "+input2);

    if((user===input1) && (pw===input2)){
        $('#div').css("background-color" , "green");
        $('#div').text("BENVENUTO ADMIN");
        document.getElementById('user').value="";
        document.getElementById('pw').value="";
        d= true;
    }else{
        $('#div1').css("background-color" , "red");
        $('#div1').text("CREDENZIALI ERRATE");
        document.getElementById('user').value="";
        document.getElementById('pw').value="";
        d=false;
    }
    if(d===true){
        var string = "<tr id="+ n +"><td>" + Date().toLocaleString() +"</td><td> ACCESSO CONSENTITO </td></tr>";
        //$('#table').append(string)
        var table = localStorage.getItem("tabella")
        localStorage.setItem("tabella", table + string);
        $('#table').append(string);
        n++;
    }else{
        var string = "<tr id="+n+"><td>" + Date().toLocaleString() +"</td><td> ACCESSO NEGATO </td></tr>";
        //$('#table').append(string)
        localStorage.setItem("tabella", table + string);
        $('#table').append(string);
        n++;
    }
});