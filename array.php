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
        $antworten = ["a", "b"];
        echo "PrintR: ";
        print_r($antworten);
        echo "<br/>";
        
        echo "vardump: ";
        var_dump($antworten);
        echo "<br/>";

        echo "hashmap:";
        $hash_map = array("a" => "b");
        echo $hash_map["a"];
        echo "<br/>";
        echo "{$hash_map["a"]}";

        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";

        $texte = array("Hallo", "Tschüss", "Geh Weg", "Du nervst");
        $max = count($texte) -1 ;
        $zufall = rand(0, $max);
        echo "<h1>$texte[$zufall]</h1>"
    ?>
</body>
</html>