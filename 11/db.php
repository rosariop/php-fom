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
    $con = mysqli_connect("", "root", "rootpw");
    mysqli_select_db($con, "uni");
    $res = mysqli_query($con, "select * from fp where prod > '2007-12-31' AND prod < '2008-07-01'");

    $num = mysqli_num_rows($res);

    echo "$num: Zeilen gefunden <br/>";

    while($data = mysqli_fetch_assoc($res)){
        echo $data["hersteller"] . ", ".
             $data["typ"] .", ".
             $data["artnummer"] .", ".
             $data["prod"] .
        "<br/>";
    }

?>
    
</body>
</html>