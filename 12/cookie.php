<?php 
        if(isset($_POST["name"])){
            setcookie("name", $_POST["name"], time()+7200);  
        };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" id="name" name="name" required>
        <label for="name">Name</label>

        <button type="submit">Submit</button>
    </form>
    <a href='/12/out.php'>output</a>;
</body>
</html>