<?php

$mysqli = new mysqli("localhost", "root", "root", "test");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// echo $mysqli->host_info . "\n";


$res = $mysqli->query("SELECT * FROM users");

// var_dump($res);

$res->data_seek(0);
while ($row = $res->fetch_assoc()) {
    echo " id = " . $row['idusers'] . "\n";
}

?>