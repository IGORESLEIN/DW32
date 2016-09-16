<?php
require 'simpleclass.php';

$s = new SimpleClass();
$s->displayvar();

$s->var = 'other value';
$s->displayvar();

var_dump($s);
?>