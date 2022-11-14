<?php 
    session_start();
    include 'sc_shop.inc.php';
    global $abtname;
    global $aname;
    global $artnr;
    global $preis;

    global $index;
    $index = $_GET["abt"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abteilungen</title>
</head>
<body>
    <h1><?php echo $abtname[$index];?></h1>
    <form action="/12/shop/warenkorb.php" method="post">
    <table border="1">
        <tr>
            <td>Artikel</td>
            <td>Nr.</td>
            <td>Preis</td>
            <td>Anzahl</td>
        </tr>

        <?php
            for($i = 0; $i<sizeof($aname[$index]); $i++){
                echo "<tr>" .
                "<td>". $aname[$index][$i] ."</td>".
                "<td>". $artnr[$index][$i] ."</td>".
                "<td>". $preis[$index][$i] ."</td>".
                "<td><input type='text' name='art_anzahl_$i' id='anzahl_$i'></td>".
                "</tr>";
            }
        ?>
    </table>
    <button type="submit">submit</button>
    </form>
</body>
</html>