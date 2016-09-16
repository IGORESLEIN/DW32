http://socketo.me/

http://www.sitepoint.com/how-to-quickly-build-a-chat-app-with-ratchet/

##Install

```
$ composer require cboden/ratchet
```

##HelloWorld

http://socketo.me/docs/hello-world

Execute server app
```bash
$ php index.php
```
Clients:

TO TEST!

Run the shell script again, open a couple web browser windows, and open a javascript console or a page with the following javascript:
```
var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};
```
Once you see the console message "Connection established!" you can start sending messages to other connected browsers:
```
conn.send('Hello World!');
```

