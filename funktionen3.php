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
        function printArray($antworten){
            echo "<pre>";
            print_r($antworten);
            echo "</pre>";

        }
        
        $someArray = ["a", "b", "c"];
        printArray($someArray);
    ?>
    
</body>
</html>