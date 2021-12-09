<html>
    <head>
        <title>Indovina il numero</title>
    </head>
    <body>
        Indovina un numero compreso tra 0 e 100.
        <?php
           $numGenerato = rand(0,100);
           $numTentativo = 0;
            
            if (isset($_POST["numeroGenerato"])) {
                $numGenerato = $_POST["numeroGenerato"];
                echo $numGenerato;
            }
            if (isset($_POST["tentativo"])) {
                $numTentativo = $_POST["tentativo"];
            }
            $correct = false;
            if(isset($_POST["numero"])) {
                $correct = $_POST["numero"] == $numGenerato;
                if ($correct) {
                    $numGenerato = rand(0,100);
                }
            } 
        ?>
        <form action="ricevi.php" method="POST">
            <input type="number" name="numero" min="0" max="100">
            <input type="hidden" name="numeroGenerato" value="<?php echo $numGenerato; ?>" >
            
            <?php
                if(isset($_POST["numero"])) {
                    if ($correct) {
                        echo "<p> HAI VINTO IN " .$numTentativo. " tentativi </p>";
                    } else if ($_POST["numero"] < $numGenerato) {
                        $numTentativo++;
                        echo "MAGGIORE <br><br>";
                    } else  {
                        $numTentativo++;
                        echo "PICCOLO <br><br>";
                    }
                }
            ?>

            <input type="hidden" name="tentativo" value="<?php echo $numTentativo; ?>" />
            <input type="submit">
        </form>
    </body>
</html>