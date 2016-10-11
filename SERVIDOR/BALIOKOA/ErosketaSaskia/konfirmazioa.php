<?php
$konexioa=mysql_connect('localhost','root','') or die ('ezin da datubasera konektatu');
$datubasea=mysql_select_db('saskia') or die ('ezin da datubasea aukeratu');
$produktua_id=$_REQUEST['produktua_id'];
$query=("delete from produktuak where produktua_id=$produktua_id") or die ('deletea gaizki dago');
$datuak=mysql_query($query, $konexioa) or die ('deletea gaizki ejekutatu da');
echo $produktua_id.' id-a duen produktua ondo ezabatu da';
echo ('<br><br><a href="admin.php"> itzuli </a>');
?>