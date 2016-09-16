<?php
//.../02-select-with-error-controll.php?userid=0

// http://php.net/manual/es/pdo.error-handling.php
// http://www.phptherightway.com/#errors_and_exceptions

try {

  $servername = 'localhost';
  $username = 'root';
  $password = 'root';
  $database = 'test';
  $dbport = '';
  
  // Create connection
  $db = new PDO("mysql:host=$servername;dbname=$database;port=$dbport;charset=utf8",
			$username,
			$password);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $db->prepare('SELECT * FROM users WHERE userid = :userid');
	$userid = filter_input(INPUT_GET, 'userid', FILTER_VALIDATE_INT); 
	
	if ($userid === false) {
		echo "Error: not INPUT_GET userid";
	} else {
		$stmt->bindParam(':userid', $userid, PDO::PARAM_INT); // <-- Automatically sanitized for SQL by PDO
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($result);
	}
	
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>
