<?php
include_once("model.php");
include_once("controller.php");
include_once("view.php");

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

echo $view->output();