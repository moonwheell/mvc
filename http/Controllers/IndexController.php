<?php

namespace Controllers;

class IndexController extends \App\Controller
{

    public function index ()
    {

        return $this->render('Home');

    }

}