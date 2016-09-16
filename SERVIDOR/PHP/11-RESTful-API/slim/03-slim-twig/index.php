<?php
require 'vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$app = new \Slim\Slim();
$app->config('debug', false);


$app->get('/', function () use ($twig) {
    echo $twig->render('index.html', array('members' => 'Students'));

    // var_dump($twig);
    // echo "hello";
});

$app->get('/test/test2/', function () use ($twig) {
    echo $twig->render('index.html', array('url' => '/test/test2/'));

    // var_dump($twig);
    // echo "hello";
});


$app->run();

?>