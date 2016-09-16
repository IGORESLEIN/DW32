<?php
require 'vendor/autoload.php';

//require 'Slim/Slim.php';
//\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->config('debug', false);

// template
$view = $app->view();
$view->setTemplatesDirectory('./templates');


$app->get('/', function () {
    echo "Use: http://server/index.php/";
});



$app->get('/main', function () use ($app) {
    // echo "ffff";
    $app->render('main.html');
});

$app->get('/mainphp', function () use ($app) {
    $app->render('main.php');
});


$app->get('/mainphp/:id', function ($id) use ($app) {
    $app->render('main.php', array('id' => $id));
});


$app->get('/main-idphp', function ($id) use ($app) {
    $app->render('main-id.php', array('id' => $id));
});


$app->get('/mytemplate', function () use ($app) {
    $app->render(
        'myTemplate.php',
        array( 'name' => 'Josh' ),
        404
    );
});


$app->run();

?>