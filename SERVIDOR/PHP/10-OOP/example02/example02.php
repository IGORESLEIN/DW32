<?php

class SimpleClass
{
    // property declaration
    public $var = 'default value';

	//construct
	public function __construct ($var) {
		$this->var = $var;
	}

    // method declaration
    public function displayVar() {
        var_dump($this->var);
    }

}	

// http://php.net/manual/en/language.oop5.inheritance.php
class otherSimplClass extends SimpleClass {
	public function displayVar($var) {
		parent::displayVar();
        // var_dump($this->var);
    }
}

$s = new SimpleClass("hello");
$s->displayvar();

$s2 = new otherSimplClass();
$s2->displayvar();


