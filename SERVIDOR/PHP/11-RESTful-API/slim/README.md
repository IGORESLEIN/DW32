http://docs.slimframework.com/

http://coenraets.org/blog/2011/12/restful-services-with-jquery-php-and-the-slim-framework/

Install:
```
$ composer install
```
Run:
```
$ php5 -S localhost:8000
(OR Apache)
``` 
Test:

Confgure apache rewrite: http://docs.slimframework.com/routing/rewrite/

```
With rewrite:
http://[IP]:8000/hello/xxxxxxxx
http://[IP]:8000/hello2/xxxxxxxx
OR
Without rewrite:
http://localhost:8000/index.php/hello/xxxxxxxxx
```
If you use filename.php in order of index.php, then:
```
http://[IP]:8000/filename.php/hello/xxxxxxxx
```
