<?php
require 'vendor/autoload.php';
require "Chat.php";

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
//use MyApp\Chat;

// 8081 port number for c9.io https://docs.c9.io/docs/multiple-ports
    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new Chat()
            )
        ),
        8081
    );

    $server->run();
