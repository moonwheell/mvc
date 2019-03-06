<?php

echo 'Controller.php';

class Controller
{
    public $model;
    public $view;
    public $pageData = array();

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
    }


}