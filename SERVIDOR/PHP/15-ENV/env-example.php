<?php
// Example use of getenv()
$ip = getenv('REMOTE_ADDR');

// Or simply use a Superglobal ($_SERVER or $_ENV)
$ip = $_SERVER['REMOTE_ADDR'];
?>
