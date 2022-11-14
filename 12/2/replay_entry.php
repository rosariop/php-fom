<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<?php
  $id=$_POST['forums_id'];
  $user=$_POST['user'];
  $mail=$_POST['mail'];
  $betreff=$_POST['betreff'];
  $forumsbeitrag=$_POST['forumsbeitrag'];

  //Zuerst Datum und Uhrzeit generieren:
  $punkt=".";
  $datum = date("d");
  $datum .=$punkt;
  $datum .=date("m");
  $datum .=$punkt;
  $datum .=date("Y");
  $zeit = date("G");
  $zeit .=$punkt;
  $zeit .=date("i");
  $zeit .=$punkt;
  $zeit .=date("s");
  
  //Sonderzeichen beachten:
  $user=htmlspecialchars ($user);
  $user=htmlentities($user);
  $betreff=htmlspecialchars ($betreff);
  $betreff=htmlentities($betreff);
  $forumsbeitrag=htmlspecialchars ($forumsbeitrag);
  $forumsbeitrag=htmlentities($forumsbeitrag);
  $forumsbeitrag=nl2br($forumsbeitrag);
  
  //Antwort in die DB schreiben:
  $db=mysql_connect("localhost","root","")
    or die ("<b>Zur Zeit kein Connect zum Datenbankserver!</b>");
  mysql_select_db("manitu")
    or die ("<b>Datenbank konnte nicht angesprochen werden</b>");
  $anfrage="INSERT INTO forum VALUES ('0','0','";
  $anfrage.=$user;
  $anfrage.="', '";
  $anfrage.=$mail;
  $anfrage.="', '";
  $anfrage.=$datum;
  $anfrage.="', '";
  $anfrage.=$zeit;
  $anfrage.="', '";
  $anfrage.=$betreff;
  $anfrage.="', '";
  $anfrage.=$forumsbeitrag;
  $anfrage.="', 'true')";
  mysql_query($anfrage)
   or die ("<b>Fehler bei der Datenbankanfrage: </b>".mysql_error());
  //Jetzt die neue beitrags_id der soeben eingetargenen Antwort ermitteln:
  $antwort_id=mysql_insert_id($db);
  //Usprungsbeitrag, auf dem die Antwort geschrieben wurde,
  // aktualisieren:
  $anfrage="SELECT * FROM forum WHERE beitrags_id LIKE '";
  $anfrage.=$id;
  $anfrage.="'";
  $ergebnis=mysql_query($anfrage);
  $zeile=mysql_fetch_row($ergebnis);
  $update="UPDATE forum SET bezugs_id='";
  $update.=$antwort_id;
  $update.="' WHERE beitrags_id='";
  $update.=$id;
  $update.="'";
  mysql_query($update)
    or die (mysql_errno().": ".mysql_error());
   
   
 mysql_close($db);
 print ("<p>Vielen Dank f&uuml;r Ihren Beitrag!</p>");
 print ("<a href='index.php'>Zur&uuml;ck zum Forums&uuml;berblick</a>");

?>
</body></html>
