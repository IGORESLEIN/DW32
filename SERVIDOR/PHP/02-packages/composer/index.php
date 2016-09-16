<?php
// composer: load all modules defined in composer.json
require 'vendor/autoload.php';

// ./vendor/monolog/monolog/src/Monolog/Logger.php
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');

?>
