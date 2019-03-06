<?php

echo 'Routing.php';

class Routing
{
    public static function buildRoute()
    {
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

        $route = explode("/", $_SERVER['REQUEST_URI']);

        if ($route[1] != '') {
            $controllerName = ucfirst($route[1] . "Controller");
            $modelName = ucfirst($route[1] . "Model");
        }

        require CONTROLLER_PATH . $controllerName . "php"; //IndexConteroller.php
        require MODEL_PATH . $modelName . "php"; //IndexModel.php

        if (isset($route[2]) && $route[2] != '') {
            $action = $route[2];
        }

        $controller = new $controllerName();
        $controller->$action(); //$controller->index();
    }


}