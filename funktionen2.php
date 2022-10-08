k k<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function math($a, $b, &$sum, &$prod){
            $sum = $a + $b;
            $prod = $a * $b;
        }

        $sum = 0;
        $prod = 0;
        math(3,4,$sum, $prod);
        echo "Summe aus 3 u. 4: " . $sum;
        echo "<br/>";
        echo "Produkt aus 3 u. 4: " . $prod;
    ?>
</body>
</html>