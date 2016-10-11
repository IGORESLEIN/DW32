<?php
session_start();
echo('Erabiltzailea:' . $_SESSION['erabiltzailea'] . '<br>');
echo('Mota:' . $_SESSION['mota'] . '<br><br>');
echo ('<br><br><a href="datuak.php"> Datuak aldatu </a>');
echo ('<br><a href="bistaratu.php"> Produktuak bistaratu </a>');
echo ('<br><a href="txertatu.html"> Produktuak txertatu </a>');
echo ('<br><a href="aldatu.php"> Produktuak aldatu </a>');
echo ('<br><a href="ezabatu.php"> Produktuak ezabatu </a>');
echo ('<br><a href="bilatu.php"> Produktuak bilatu </a>');
?>