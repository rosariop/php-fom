<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>
<h3>Der Forumsbeitrag</h3>
<div style="width: 400px">
<?php
 $id=$_GET['forums_id'];
 $db=mysql_connect("localhost","root","");
 mysql_select_db("manitu");
 $anfrage="SELECT * FROM forum WHERE beitrags_id LIKE '";
 $anfrage.=$id;
 $anfrage.="'";
 $ergebnis=mysql_query($anfrage);
 $zeile=mysql_fetch_row($ergebnis);
 print ("<br><br><b>Betreff: </b>");
 print ($zeile[6]);
 print ("<br><b>von: </b>");
 print ($zeile[2]);
 print ("<br><b>E-Mail: </b>");
 print ("<a href='mailto:");
 print ($zeile[3]);
 print ("'>");
 print ($zeile[3]);
 print ("</a><br><b>Geschrieben am: </b>");
 print ($zeile[4]);
 print (" um ");
 print ($zeile[5]);
 print ("<br><br><hr><br><br>");
 print ($zeile[7]);
  if ($zeile[1]>0) {
    print ("<hr>");
    print ("<br><b>Die Antworten auf diesen Beitrag:</b><br><br>");
    print ("<table>");
    antwort_holen($zeile[1]); 
    print ("</table>"); 
  }
 mysql_close($db);
 print ("<br><hr><br>");
 print ("<a href='replay.php?forums_id=");
 print ($id);
 print ("'>Schreiben Sie hier eine Antwort auf diesen Beitrag!</a>");

function antwort_holen($id) {
 $anf="SELECT * FROM forum WHERE beitrags_id='";
 $anf.=$id;
 $anf.="'";
 $er=mysql_query($anf);
 $z=mysql_fetch_row($er);
 ausgabe($z);
}
function ausgabe($datensatz) {
 print ("<tr align='left'>");
 print ("<td>");
 print ("<a href='read.php?forums_id=");
 print ($datensatz[0]);
 print ("'>");
 print ($datensatz[6]);
 print ("</a>");
 print ("</td>");
 print ("<td> von ");
 print ($datensatz[2]);
 print ("</td>");
 print ("<td> am ");
 print ($datensatz[4]);
 print (" um ");
 print ($datensatz[5]);
 print ("</td>");
 print ("</tr>");
 if ($datensatz[1]>0) {
  antwort_holen($datensatz[1]);  
 }
}
?>
</div>
</body></html>
