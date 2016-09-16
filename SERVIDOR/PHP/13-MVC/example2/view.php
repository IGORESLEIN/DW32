<?php
class View
{
    private $model;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output(){
        $data = $this->model->tstring;
        require_once($this->model->template);
    }
}