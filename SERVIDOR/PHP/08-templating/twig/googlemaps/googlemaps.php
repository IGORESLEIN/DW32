<?php

// twig template example

require_once 'vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);


// Class Books
class m {
	public $lat = 0.0;
	public $lng = 0.0;
	public $text = "";

	public function __construct ($lat, $lng, $text) {
		$this->lat = $lat;
		$this->lng = $lng;
		$this->text = $text;
	} 
};

$m1 = new m(-25.363, 131.044, "Hello");
$m2 = new m(-25.463, 131.144, "Hello2");
$m3 = new m(-25.563, 131.144, "Hello3");

$markers = array($m1, $m2, $m3);

// render
echo $twig->render('index.html', array('markers' => $markers));

?>