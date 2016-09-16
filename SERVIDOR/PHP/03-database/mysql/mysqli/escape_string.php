<?php
$mysqli = new mysqli("localhost", "mi_usuario", "mi_contraseña", "world");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->query("CREATE TEMPORARY TABLE miCiudad LIKE City");

$ciudad = "'s Hertogenbosch";

/* esta consulta fallará debido a que no escapa $ciudad */
if (!$mysqli->query("INSERT into miCiudad (Name) VALUES ('$ciudad')")) {
    printf("Error: %s\n", $mysqli->sqlstate);
}

$ciudad = $mysqli->real_escape_string($ciudad);

/* esta consulta con $ciudad escapada funcionará */
if ($mysqli->query("INSERT into miCiudad (Name) VALUES ('$ciudad')")) {
    printf("%d fila insertada.\n", $mysqli->affected_rows);
}

$mysqli->close();
?>