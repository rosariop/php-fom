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
        $artikels = array(
            1 => ["apfel", 10],
            2 => ["birne", 100],
            3 => ["Mais", 1000]
        ); 

        $umsatzsteuer = 1.19;
        count($artikels);
        foreach($artikels as $artikel){
            echo $artikel[0] . " - " . "Bruttopreis: " .  $artikel[1] . " Nettopreis: " .  $artikel[1] * $umsatzsteuer. "<br/>";
        }
    ?>
    
</body>
</html>