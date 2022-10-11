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
        $date = date("N");

        if($date > 5){
            echo "Schönes Wochenende";
        } else {
            echo "Schönen Arbeitstag to looser!";
        }
    ?>
    
</body>
</html>