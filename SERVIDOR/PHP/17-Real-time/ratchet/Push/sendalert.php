<?php
// https://github.com/Textalk/websocket-php
require('vendor/autoload.php');

use WebSocket\Client;

//$client = new Client("ws://echo.websocket.org/");
$client = new Client("ws://localhost:8081/");
$client->send('{"user":"containerX", "text":"Alert!!"}');

echo $client->receive(); // Will output 'Hello WebSocket.org!'