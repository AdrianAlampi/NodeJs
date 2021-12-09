<?php
    function connDB($dati){
        $servername = $_POST["hostName"];
        $username= $_POST["username"];
        $password = $_POST["pw"];
        $nameDB = $_POST["NameDB"];
        $conn = new mysqli($servername, $username, $password, $NameDB);
        return $conn;

    }
?>

