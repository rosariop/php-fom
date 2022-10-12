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
            public string $farbe;
            public string $hersteller;
            private bool $gestartet = false;

            function __construct(string $farbe,string $hersteller){
                $this->farbe = $farbe;
                $this->hersteller = $hersteller;
            }

            public function starten(){
                $this->gestartet = true;
                echo "gestartet: " . $this->gestartet;;
            }

            public function stoppen(){
                $this->gestartet = false;
                echo "gestoppt: " . $this->gestartet;
            }
        }

        $auto1 = new Fahrzeug("Gelb", "Mercedes");
        echo "<h1>" . 
            $auto1->farbe . " " .
            $auto1->hersteller
        . "</h1>";

        $auto1->starten();
        echo "<br/>";

        $auto1->stoppen();

?>
</body>
</html>