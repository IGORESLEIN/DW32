<?php
session_start();
echo('Erabiltzailea:' . $_SESSION['erabiltzailea'] . '<br>');
echo('Mota:' . $_SESSION['mota'] . '<br><br>');
$konexioa=mysql_connect('localhost','root','') or die ('ezin da datubasera konektatu');
$datubasea=mysql_select_db('saskia') or die ('datu basea ezin izan da hautatu');
$query="select * from produktuak" or die ('selektak huts egin du');
$datuak=mysql_query($query, $konexioa) or die ('selekta gaizki exekutatu da');

echo ('<h1> Gure Produktuak </h1><br><br>');
echo ('<table>');
echo ('<tr>');		
echo ('<td><center>Produktua</center></td>');
echo ('<td><center>Deskribapena</center></td>');
echo ('<td><center>Prezioa</center></td>');
echo ('</tr>');
while ($row=mysql_fetch_row($datuak))
{
echo ('<tr>');
echo ('<td>'.$row[0].'</td>');
echo ('<td>'.$row[1].'</td>');
echo ('<td>'.$row[2].'</td>');
echo ("<td>"."<a href='konfirmazioa.php?produktua_id=".$row[3]."'>"."Borratu"."</a>"."</td>"."\n");
echo ('</tr>');
} 
echo ('</table>');
echo ('<br><br><a href="admin.php"> itzuli </a>');
?>