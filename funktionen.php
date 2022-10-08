<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function vermerk($vorname, $nachname, $abteilung){
            return $vorname . "." . $nachname . "@" . $abteilung . ".phpdevel.de";
        }

        function row($content){
            
            echo "<tr>";
            echo "<td>";
            echo $content;
            echo "</td>";
            echo "</tr>";

        }
        echo "<table border=1>";
        row(vermerk("rosi", "bert", "zuhause"));
        row(vermerk("matze", "john", "ubi"));
        echo "<table>";
    ?>
</body>
</html>