<?php
echo "Hello2";

// http://php.net/manual/en/function.http-get.php
$url = 'http://api.openweathermap.org/data/2.5/weather?lat=43.3276658&lon=-1.9711435';

$response = http_get($url, array("timeout"=>1), $info);
print_r($info);
?>	