<?php

// http://be2.php.net/manual/en/language.constants.syntax.php

define("CONSTANT", "Hello world.");
echo CONSTANT; // outputs "Hello world."
echo Constant; // outputs "Constant" and issues a notice.

/*
// Works as of PHP 5.3.0
const CONSTANT = 'Hello World';

echo CONSTANT;

// Works as of PHP 5.6.0

const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // outputs "cat"

// Works as of PHP 7
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // outputs "cat"
*/
?>