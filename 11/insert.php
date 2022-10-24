<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form  { display: table;      }
        p     { display: table-row;  }
        label { display: table-cell; }
        input { display: table-cell; }
    </style>
</head>
<body>
    <h1>Eingabe</h1>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            <label for="hersteller">Hersteller:</label>
            <input type="text" name="hersteller" id="hersteller" required>
        <br>

        <p>
            <label for="typ">Typ:</label>
            <input type="text" name="typ" id="typ" required>
        </p>

        <p>
            <label for="gb">GB:</label>
            <input type="number" step="1" name="gb" id="gb" required>
        </p>

        <p>
            <label for="artnummer">Art-Nummer:</label>
            <input type="text" name="artnummer" id="artnummer" required>
        </p>

        <p>
            <label for="preis">preis:</label>
            <input type="number" step="0.01" name="preis" id="preis" required>
        </p>
        
        <br>

        <p>
            <label for="date">Prod Datum</label>
            <input type="date" name="prod" id="date" required>
        </p>
        <br>
        <button type="submit">Submit</button>

    </form>
    
    <?php
        if(isset($_POST["prod"])){
            $hersteller = $_POST["hersteller"];
            $typ = $_POST["typ"];
            $gb = $_POST["gb"];
            $preis = $_POST["preis"];
            $artNum = $_POST["artnummer"];
            $prod = $_POST["prod"];



            $con = mysqli_connect("", "root", "rootpw");
            mysqli_select_db($con, "uni");
            
            try{
                $res = mysqli_query($con, "insert into fp (hersteller, typ, gb, preis, artnummer, prod) VALUES
                ('$hersteller', '$typ', $gb, $preis, '$artNum', '$prod')");
                echo "<p style=\"color: green\">Works!</p>";
            }catch(Exception $e){
                echo "<p style=\"color: red\">Fehler!</p>";
            }
            

            if($num > 0){
                echo "<p style='color: red'> Inserted! </p>";
            }
        }
    ?>
</body>
</html>