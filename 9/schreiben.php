<?php
    if(!file_exists("u_lesen.txt")){
        exit("Exit");
    }
    $id = 0;
    $a = 0;
    $b = 0;

    $file = @fopen("u_lesen.txt", "r");

    while(!feof($file)){
        $file_a;
        $i++;
        $num = fgets($file);
        if($num < 1000){
            $file_a = @fopen("u_schreiben_a.txt", "a");
            $a++;
        } else {
            $file_a = @fopen("u_schreiben_b.txt", "a");
            $b++;
        }
        fputs($file_a, $num);
        fputs($file_a, fgets($file));
        fputs($file_a, fgets($file));
        fclose($file_a);
    }

    echo "$i Daten gefunden. <br />";
    echo "$a unter 1000, $b über 1000";
    fclose($file);
?>