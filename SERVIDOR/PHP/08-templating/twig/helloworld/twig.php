<?php

// twig template example

require_once 'vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);


// Class Books
class books {
	public $title = "";

	public function __construct ($title) {
		$this->title = $title;
	} 
};

$book1 = new books("1984");
$book2 = new books("Animal Farm");

$books = array($book1, $book2);

// render
echo $twig->render('index.html', 
					array(
						'members' => 'Students',
						'users' => array('Koxme','Peru','Bartolo'),
						'books' => array($book1, $book2)));

?>