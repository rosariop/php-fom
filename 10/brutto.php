<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="number" name="netto" /> <br/>
        <select name="steuersatz" id="steuersatz">
            <option value="0.07">7%</option>
            <option value="0.19">19%</option>
        </select>
        <br/>

        <input type="checkbox" name="thema[]" value="HTML" />HTML
        <input type="checkbox" name="thema[]" value="CSS" />CSS
        <input type="checkbox" name="thema[]" value="JavaScript"/>JavaScript
        <input type="checkbox" name="thema[]" value="PHP" />PHP<br />

        <input type="submit" value="Abschicken" />
    </form>
    <?php 
        if(isset($_POST["netto"])){
            $ges = $_POST["netto"] * (1+$_POST["steuersatz"]);
            echo "Kostet: " . $ges;
        }

        if(isset($_POST["thema"])){
            foreach ($_POST["thema"] as $thema){
                echo "<br/>";
                echo $thema;
            }
        }
    ?>
    
</body>
</html>