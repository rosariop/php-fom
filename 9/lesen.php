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
    if(!file_exists("u_lesen.txt")){
        exit("Exit");
    }
    $id = 1;
    $file = @fopen("u_lesen.txt", "r");
    
    echo "<table>";
    echo "<th>id</th>";
    echo "<th>Nachname</th>";
    echo "<th>Vorname</th>";
    while(!feof($file)){
        $vorname = fgets($file);
        $nachname = fgets($file);
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $nachname . "</td>";
        echo "<td>" . $vorname . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    fclose($file)
?>
    
</body>
</html>