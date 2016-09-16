[client]-->(POST)-->[PHP Server]-->(ZMQ socket send msg)-->[Ratchet Server]-->(Send all clients)-->[clients]

http://socketo.me/docs/push

http://zguide.zeromq.org/php:all

https://github.com/reactphp/zmq

https://github.com/Textalk/websocket-php

#Test

##Install
```
$ composer install
```

##Run
####Server(s)
Chat-Server:
```
$ php chat-server.php
```
PHP server: as usual
####Client
Chat client:
```
http://[IP]/index.html
```
Send a msg to the chat
```
http://[IP]/sendalert.php
```

