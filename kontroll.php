<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php
        $color = "green";

        date_default_timezone_set("Europe/Berlin");
        $uhrzeit = date("H");
        if ($uhrzeit < 5 || $uhrzeit > 20) {
        $color = "blue";
        $gruss = "Gute Nacht";
        } elseif ($uhrzeit < 11) {
        $color="pink";
        $gruss = "Guten Morgen";
        } elseif ($uhrzeit < 15) {
        $color = "orange";
        $gruss = "Guten Mittag";
        } elseif ($uhrzeit < 18) {
            $color = "yellow";
        $gruss = "Guten Nachmittag";
        } else {
        $color = "red";
        $gruss = "Guten Abend";
        }
        ?>
        <style>
            body{
                background-color: <?php echo $color ?>;
            }
        </style>
    </head>
    <body>
            <h1><?php echo $gruss ?></h1>
    </body>
</html>