<!DOCTYPE html>
<html>
<head>
	<!-- azpiko meta lerroa ñ karakterea inprimatzeko -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HelloWorld</title>
</head>
<body>

<?php

$izena = "Koxme";
$abizena = "Mendia";

$izenAbizena = $izena . $abizena;

echo "El nombre es: $izena y tiene 30 años";
echo "<br>";
echo 'El nombre es: $izena y tiene 30 años';
echo "<br>";
echo "$izena" . " " . "$abizena";
echo "<br>";
echo "$izenAbizena";
?>

</body>
</html>