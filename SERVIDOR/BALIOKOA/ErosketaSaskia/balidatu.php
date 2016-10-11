<?php
session_start();
$_SESSION['erabiltzailea']=$_POST['erabiltzailea'];
$_SESSION['mota']=$_POST['mota'];
$user=$_POST['erabiltzailea'];
$pass=$_POST['pasahitza'];
$mota=$_POST['mota'];
$konexioa=mysql_connect('localhost','root','') or die ('ezin da datubasera konektatu');
$datubasea=mysql_select_db('saskia') or die ('datu basea ezin izan da hautatu');
$query="select izena, pasahitza from erabiltzaileak where izena='$user' and pasahitza='$pass'" or die ('selektak huts egin du');
$datuak=mysql_query($query, $konexioa) or die ('selekta gaizki exekutatu da');
//kontsulta egin, bertan num rows erabili existitzen den ala ez frogatzeko
$exis=mysql_num_rows ($datuak);
if ($exis>0) {
if ($mota=="admin") {header("location: admin.php");}
else {header("location: normala.php");}
}
else {header ("location: index.html");}
//falta da if bat motak diferentziatzeko
/*
header ("location: bistaratu.php");
*/
?>
