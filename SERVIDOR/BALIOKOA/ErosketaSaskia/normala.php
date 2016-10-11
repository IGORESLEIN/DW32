<?php
session_start();
echo('Erabiltzailea:' . $_SESSION['erabiltzailea'] . '<br>');
echo('Mota:' . $_SESSION['mota'] . '<br><br>');
echo ('<br><br><a href="datuak.php"> itzuli </a>');
echo ('<br><a href="erosketa.php"> itzuli </a>');
?>