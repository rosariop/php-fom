<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eingabe</h1>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="radio" id="u120" name="range" value="<=120">
        <label for="u120">unter 120€</label>

        <input type="radio" id="120-140" name="range" value="BETWEEN 120 AND 140">
        <label for="120-140">zwischen 120€ u. 140€</label>

        <input type="radio" id="140" name="range" value=">=140">
        <label for="140">ü. 140€</label>

        <button type="submit">Submit</button>

    </form>
    
    <?php

    if(isset($_POST["range"])){
        echo "<h1>isset</h1>";
        $rr = $_POST["range"];

        $con = mysqli_connect("", "root", "rootpw");
        mysqli_select_db($con, "uni");
        $res = mysqli_query($con, "select * from fp where preis $rr");
    
        $num = mysqli_num_rows($res);
    
    
        echo "<table border='1'>" .
                    "<tr>".
                        "<td>artnummer</td>". 
                        "<td>hersteller</td>". 
                        "<td>typ</td>". 
                        "<td>prod</td>". 
                    "</tr>";
    
        while($data = mysqli_fetch_assoc($res)){
            echo "<tr>" . 
                "<td>". $data["artnummer"] . "</td>".
                "<td>". $data["hersteller"] ."</td>".
                "<td>". $data["typ"] ."</td>".
                "<td>". $data["prod"] . "</td>". 
                "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>