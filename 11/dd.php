<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DropDown</h1>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <select name="hersteller" id="hersteller">
            <option value="Quantum">Quantum</option>
            <option value="Seagate">Seagate</option>
            <option value="Fujitsu">Fujitsu</option>
            <option value="IBM Corporation">IBM Corporation</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    
    <?php

    if(isset($_POST["hersteller"])){
        echo "<h1>isset</h1>";
        $rr = $_POST["hersteller"];

        $con = mysqli_connect("", "root", "rootpw");
        mysqli_select_db($con, "uni");

        $res = mysqli_query($con, "select * from fp where hersteller =  '$rr'");
    
        echo "<table border='1'>" .
                    "<tr>".
                        "<td>artnummer</td>". 
                        "<td>hersteller</td>". 
                        "<td>typ</td>". 
                        "<td>prod</td>". 
                        "<td>preis</td>". 
                    "</tr>";
    
        while($data = mysqli_fetch_assoc($res)){
            echo "<tr>" . 
                "<td>". $data["artnummer"] . "</td>".
                "<td>". $data["hersteller"] ."</td>".
                "<td>". $data["typ"] ."</td>".
                "<td>". $data["prod"] . "</td>". 
                "<td>". $data["preis"] . "€</td>". 
                "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>