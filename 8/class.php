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
        class Fahrzeug {
            public string $name;
            public string $hersteller;

            function __construct(string $name,string $hersteller){
                $this->name = $name;
                $this->hersteller = $hersteller;
            }
        }

        $auto1 = new Fahrzeug("Brummi", "Mercedes");

        echo "<h1>" . 
            $auto1->name 
        . "</h1>"
    ?>
</body>
</html>