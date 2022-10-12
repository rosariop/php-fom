<?php

function fkt(){
    ini_set("error_reporting", 32767);
    /* Variable unbekannt */
    try{
        if(!isset($a)){
            throw new Exception("\$a nicht gesetzt.");
        }
        $c = 2 * $a;
        echo "<p>$c</p>";
    }catch(Exception $e2){
        echo $e2->getMessage() . "<br/>";
    }


    /* Division durch 0 */
    $x = 24;
        for($y=4; $y>-3; $y--) {
            try{
                if($y === 0){
                    throw new Exception("Div by 0");
                }
                $z = $x / $y;
                echo "$x / $y = $z<br />";
            }catch(Exception $e2){
                echo $e2->getMessage() . " <br/>";
            }
        }
    }
/* Zugriff auf Funktion */
fkt();
echo "Ende";
?>