<?php 
    session_start();
    include 'sc_shop.inc.php';
    global $abtname;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-Startseite</title>
</head>
<body>
    <h1>Wilommen im Webshop</h1>
    <p>Abteilungen:</p>

    <?php
        for($i=0; $i<sizeof($abtname); $i++){
            echo "<ul>";
                echo "<a href='/12/shop/abteilungen.php?abt=$i'>".$abtname[$i]."</a>";
            echo "</ul>";
        }
    ?>

    <a href="/12/shop/warenkorb.php"></a>
</body>
</html>