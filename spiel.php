<?php
$eins = 0;
$zwei = 0;
$winner = "";

while($eins < 25 && $zwei < 25){
    $eins += rand(1, 6);
    $zwei += rand(1, 6);
}

if($eins >= 25){
    $winner = "eins";
} else if($zwei >= 25){
    $winner = "zwei";
} else {
    $winner = "beide";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Gewinner: " . $winner ?></title>
</head>
<body>
    
</body>
</html>