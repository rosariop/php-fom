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
        class Math{
            public static function wurzel($num){
                echo sqrt($num);
            }

            public static function absolut($num){
                echo abs($num);
            }
        }

        $num1 = 36;
        $num2 = -42;
        Math::wurzel($num1);
        echo "<br/>";
        Math::absolut($num2);
    ?>
    
</body>
</html>