<html>
    <head>
        <title>Esplora Risorse</title>
    </head>
    <body>
        <table align=center>
            <tr>
                <th>
                    <t1>benvenuto</t1>
                </th>
            </tr>
            <tr>
                <th>
                    <form action= index.php method=post>
                </th>
            </tr>
            <tr>
                <th>
                    dimmi un path: <input type = text name=path>
                </th>
            </tr>
            <tr>
                <th>
                    <input type=submit value=submit>
                </th>
            </tr>
        </table></form>
    </body>
</html>
<?php
    if(!empty($_POST['path'])){
        $content[] = scandir($_POST['path']);
        echo "<table align=center>";
        for($i=0; $i<count(scandir($_POST['path'])); $i++){
            if(is_dir($_POST['path']."/".scandir($_POST['path'])[$i])){
                echo "<tr><th><a href=".$_POST['path']."/".scandir($_POST['path'])[$i].">".scandir($_POST['path'])[$i]."</a> è una cartella</th></tr>";
            }else{
                echo "<tr><th><a href=".$_POST['path']."/".scandir($_POST['path'])[$i].">".scandir($_POST['path'])[$i]."</a> è un file</th></tr>";
            }
        }
        closedir($hn);
    }
?>