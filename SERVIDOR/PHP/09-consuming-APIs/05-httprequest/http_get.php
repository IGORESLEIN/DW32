<?php
// http://php.net/manual/en/function.http-get.php
$url = 'http://localhost?val=12345';

$response = http_get($url, array("timeout"=>1), $info);
print_r($info);
?>	