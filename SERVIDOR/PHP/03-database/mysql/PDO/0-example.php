<?php
// PDO + MySQL
// http://www.phptherightway.com/#databases
//http://php.net/manual/en/pdostatement.fetchall.php

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
$statement = $pdo->query("SELECT * FROM users");
//$row = $statement->fetch(PDO::FETCH_ASSOC);
//echo htmlentities($row['email']);

//$result = $statement->fetchAll();
// //print_r($result);
//var_dump($result);

//$result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($result);

// Fetch all rows, some colums
echo "All rows <br>";
foreach ($statement->fetchAll() as $row) {
	echo "ID: {$row['userid']}, name: {$row['name']} <br/>";
}

// Fetching individual rows
echo "First row <br>";
$rows = $pdo->query('SELECT * FROM users');
$firstRow = $rows->fetch();
echo "ID: {$row['userid']}, name: {$row['name']} <br/>";

