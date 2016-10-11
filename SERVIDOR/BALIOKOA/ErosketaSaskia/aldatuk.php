<?php
$konexioa=mysql_connect('localhost','root','') or die ('ezin da datubasera konektatu');
$datubasea=mysql_select_db('saskia') or die ('ezin da datubasea aukeratu');
$produktua_id=$_REQUEST['produktua_id'];
$query=("SELECT * FROM produktuak WHERE produktua_id=$produktua_id") or die ('selekta gaizki dago');
$datuak=mysql_query($query, $konexioa) or die ('selekta gaizki exekutatu da');
$lerroak=mysql_num_rows($datuak);
for ($i=0;$i<$lerroak;$i++){
$row=mysql_fetch_array ($datuak);
$izena=$row[0];
$deskribapena=$row[1];
$prezioa=$row[2];
$produktua_id=$row[3];
}
echo("<form action='aldaketa.php' method='POST'>");
echo ("Izena:");
echo ("<br><input name='izena' type=text value=" . $izena . ">");
echo ("<br><br>Deskribapena:");
echo ("<br><textarea name='deskribapena' cols='60' rows='6' >" . $deskribapena . "</textarea>");
echo ("<br>Prezioa:");
echo ("<br><br><input type=text name='prezioa' value=" . $prezioa . ">");
echo ("<br>Produktuaren id:");
echo ("<br><br><input type=text name='produktua_id' value=" . $produktua_id . ">");
echo ("<br><br><br><input type=submit name='aldatu'/>");
echo ("</form>");
?>
