<html>
    <head> 
        <title>CONVERTITORE ARABO - ROMANO</title>
    </head>
    <body>
        <form action="ConvertitoreMain.php" method = "get">
            <p>numero:<input type="number" name="numArabo"></p>
            <p>romano:<input type="text" name="numRomano"></p>
            <input type="submit" style="background-color: inherit; border: 3px #000 solid; padding: 5px;" values="submit">
        </form>
    <?php
    $num_Arabo= intval($_GET['numArabo']);
        include "ConvertitoreFunzione.php";
        echo convertitoreArabo($num_Arabo);
    ?>
    </body>
</html>