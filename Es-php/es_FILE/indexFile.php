<html>
    <head>
        <title>Es File</title>
    </head>
    <body>
    <form action="indexFile.php" method="post">
        <p>Path:<input type="text" name="path"></p>
        <p>Nome File:<input type="text" name="NomeFile"></p>
        <p>Testo: <input type="text" name="Testo"></p>
        <input type="submit" values="Invia">
    </form>
    </body>
</html>
 
<?php
include ("lib/creaFile.php");
    if(!empty($_POST['path']) ){
       newFile($_POST['path'],$_POST['NomeFile'],$_POST['Testo']);
    }
?>