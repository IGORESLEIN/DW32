<?php
$mysqli = new mysqli("localhost", "root", "root", "test");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// $nombre = "koxme";

$res = $mysqli->query("SELECT * FROM users");


// $res = $mysqli->query("SELECT * FROM users WHERE name='".$nombre."'");

// $res = $mysqli->query("SELECT * FROM users WHERE name='$nombre'");

// http://stackoverflow.com/questions/19146922/php-dynamically-generate-json
$json = array();
while($row = $res->fetch_assoc()) {
    $user = array(
        'idusers' => $row['idusers'],
        'name' => $row['name']
    );
    array_push($json, $user);
}


// $json = $res->fetch_all( MYSQLI_ASSOC );

// while ( $row = $res->fetch_assoc() ){
//     $json[] = json_encode($row);
// }

header('Content-Type: application/json');
echo json_encode($json);
?>