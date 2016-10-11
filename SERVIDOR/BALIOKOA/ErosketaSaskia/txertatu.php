<?php
$konexioa=mysql_connect('localhost','root','') or die ('ezin da datubasera konektatu');
$datubasea=mysql_select_db('saskia') or die ('datu basea ezin izan da hautatu');
$izena=$_POST['izena'];
$deskribapena=$_POST['deskribapena'];
$prezioa=$_POST['prezioa'];
$query="INSERT INTO `saskia`.`produktuak` (`izena`, `deskribapena`, `prezioa`, `produktua_id`) VALUES ('$izena', '$deskribapena', '$prezioa', NULL);" 
or die ('insertak huts egin du');
$datuak=mysql_query($query, $konexioa);
echo ('Produktua ondo txertatu da');
echo ('<br><br><a href="admin.php"> itzuli </a>');
?>