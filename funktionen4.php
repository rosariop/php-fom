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
        $only_jpg = ".jpg";
        $png = "some.png";

        $jpg = "some.jpg";
        $jpeg = "some.jpeg";

        function isJpeg($text){
            $pattern = '/\.jp[e]?g$/';
            if(preg_match($pattern, $text)){
                echo "true";
            }
            else {
                echo "false";
            }
        }

        echo "Matches jpg: ";
        echo isJpeg($jpg);
        echo "<br/>";
        echo "Matches jpg: ";
        echo isJpeg($jpeg);

        echo "<br/>";
        echo "Matches png: ";
        echo isJpeg($png);
    ?>
    
</body>
</html>