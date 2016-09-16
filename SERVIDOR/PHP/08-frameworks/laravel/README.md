#Laravel

http://laravel.com/

##Install

http://laravel.com/docs/4.2/installation

```
$ composer global require "laravel/installer=~1.1"
```
This install Laravel in ~/.composer/vendor/bin

Change the system path in .bashrc:
```
export PATH=~/.composer/vendor/bin:$PATH
```
##Then you can run Laravel:

```
$ laravel
```
Create a new proyect called 'test':
```
$ laravel new test
```
###Run using php5 command line:
```
# install dependencies. Only once
$ sudo apt-get install php5-mcrypt
$ sudo php5enmod mcrypt
```
```
$ cd test
$ php artisan serve
```
```
http://localhost:8000
```
To access to 'users' route
```
http://localhost:8000/users
```

###Run using apache
```
$ sudo service apache2 restart
$ cd test
$ chgrp -R www-data app/storage
```
```
http://localhost/test/public/
```
To access to a 'users' route:
```
http://localhost/test/public/index.php/users
```