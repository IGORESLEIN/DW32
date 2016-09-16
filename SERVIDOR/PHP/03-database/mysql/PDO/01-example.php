<?php

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
// $pdo->query("SELECT name FROM users WHERE userid = " . $_GET['userid']); // <-- NO!

// YES -->
$stmt = $pdo->prepare('SELECT * FROM users WHERE userid = :userid');

// $userid = filter_input(INPUT_GET, 'userid', FILTER_SANITIZE_NUMBER_INT); // <-- filter your data first (see [Data Filtering](#data_filtering)), especially important for INSERT, UPDATE, etc.

$userid = filter_input(INPUT_GET, 'userid', FILTER_VALIDATE_INT); 

// var_dump($userid);
if ($userid === false) {
	echo "Error";
} else {

	$stmt->bindParam(':userid', $userid, PDO::PARAM_INT); // <-- Automatically sanitized for SQL by PDO
	$stmt->execute();

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($result);
}