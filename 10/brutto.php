<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="number" name="netto" /> <br/>
        <select name="steuersatz" id="steuersatz">
            <option value="0.07">7%</option>
            <option value="0.19">19%</option>
        </select>
        <br/>

        <input type="submit" value="Abschicken" />
    </form>
    <?php 
        if(isset($_GET["netto"])){
            $ges = $_GET["netto"] * (1+$_GET["steuersatz"]);
            echo "Kostet: " . $ges;
        }
    ?>
    
</body>
</html>