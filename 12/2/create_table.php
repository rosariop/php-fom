<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><body>
<h3>Diskussions-Tabelle erstellen</h3>
<?php
    $con = mysqli_connect("mysql", "root", "rootpw");
    mysqli_select_db($con, "uni");
	$anfrage="CREATE TABLE forum (beitrags_id INT AUTO_INCREMENT, 
                                     bezugs_id INT,user VARCHAR(50),
                                     email VARCHAR(50), datum VARCHAR(10),
                                     uhrzeit VARCHAR(10),betreff VARCHAR(255),
                                     beitragstext TEXT, antwort VARCHAR(10), 
                                     PRIMARY KEY (beitrags_id))";
	
	mysqli_query($con,$anfrage);
	mysqli_close($con); 
?>
</body></html>
