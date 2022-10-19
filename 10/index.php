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
        if(isset($_POST["vorname"])){
            echo "Vorname: " . $_POST["vorname"] . "<br/>";
            echo "Nachname: " . $_POST["nachname"];
        }else{
            echo "<form action=\"index.php\" method=\"post\">
            Ihr Vorname: <br />
            <input type=\"text\" name=\"vorname\" size=\"20\" maxlength=\"30\" value=\"hallo\" />
            <br />
            Ihr Nachname: <br />
            <input type=\"text\" name=\"nachname\" size=\"20\" maxlength=\"30\" />
            <br />
            <input type=\"submit\" value=\"Abschicken\" />
            </form>";
        }
?>
</body>
</html>