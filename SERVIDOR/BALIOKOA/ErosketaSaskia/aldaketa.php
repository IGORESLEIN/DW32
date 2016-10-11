<?php
$konexioa=mysql_connect('localhost','root','') or die ('ezin da datubasera konektatu');
$datubasea=mysql_select_db('saskia') or die ('datu basea ezin izan da hautatu');
$izena=$_POST['izena'];
$deskribapena=$_POST['deskribapena'];
$prezioa=$_POST['prezioa'];
$produktua_id=$_POST['produktua_id'];
$query=("update saskia.produktuak set izena='$izena', deskribapena='$deskribapena', prezioa='$prezioa', produktua_id='$produktua_id' where produktuak.produktua_id=$produktua_id") 
or die ('updateak huts egin du');
$datuak=mysql_query($query, $konexioa);
echo ('Produktua ondo aldatu da');
echo ('<br><br><a href="admin.php"> itzuli </a>');
?>