<htlm>
    <body>
        <form method = "POST">        
            <fieldset>
                <legend>
                Connection to DataBase:
                </legend>
                <p>HOSTNAME (cognome.nome.tave.osdb.it): <input type="text" name="hostname"></p>
                <p>USER (utente database): <input type="text" name="user"></p>
                <p>PW (password utente database): <input type="password" name="pw"></p>
                <p>DB NAME (nome del database): <input type="text" name="db"></p>
                <input type="submit" value="Compila">
            </fieldset>
        </form>

</htlm>

<?php
   include "FunzioneConDB.php";
   $hostname=$_POST['hostname'];
   $user=$_POST['user'];
   $pw=$_POST['pw'];
   $db=$_POST['db'];
   
    if(!empty($_POST['hostname']&&$_POST['user']&& $_POST['pw']&&$_POST['db'] )){
        $conne = connessioneDB($_POST['hostname'], $_POST['user'], $_POST['pw'], $_POST['db']);
        if ($conne -> connect_error) { 
            die('connessione fallita: '.$conne->connect_error); 
        }else{ 
            echo 'CONNESSIONE RIUSCITA!';
            $file = fopen("configuration.php", "w");
            $testo ='<?php 
                     $db = array(
                    "hostname" =>  '."$hostname".',
                    "user" => '."$user".',
                    "pw" => '."$pw".',
                    "db" =>'."$db".',)
            ;?>';

        fwrite($file, $testo);
        fclose($file);
        header('Location: '.dirname($_SERVER['HTTP_REFERER'])."/Insert.php");
    }    
    } 
?>

