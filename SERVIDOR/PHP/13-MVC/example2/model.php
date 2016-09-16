<?php
class Model
{
    public $tstring;

    public $template;

    public function __construct(){
        $this->tstring = "The string has been loaded through the template.";
        $this->template = "template.php";
    }
}