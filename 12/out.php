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
        if(isset($_COOKIE["name"])){
            echo "Hallo " . $_COOKIE["name"];
        }else {
            echo "<h1>KEIN COOKIE GESETZT BRO</h1>";
        }
    ?>
</body>
</html>