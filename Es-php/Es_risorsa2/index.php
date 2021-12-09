<html>
    <head>
        <title>Es File2</title>
    </head>
    <body>
    <form action="index.php" method="post">
        <p>Path:<input type="text" name="path"></p>
        <input type="submit" values="submit">
    </form>
    </body>
</html>
 
<?php
if(!empty($_POST['path'])){
$hn = opendir($_POST['path']);
while($file = readdir($hn)){
if(is_dir($_POST['path']."/".$file)){
 //  echo "$file è una cartella</br>";
    echo "<a href=ardizzone.pietro.tave.osdb.it/".$_POST['path']."/".$file.">".$file."</a> è una cartella</br>";
}else{
    
    //echo "$file è un file</br>";
    echo "<a href=".$_POST['path']."/".$file.">".$file."</a> è un file</br>";
}
}
closedir($hn);
}
?>