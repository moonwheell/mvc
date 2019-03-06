<?php

//echo '<pre>';
//var_dump(123);
//echo '</pre>';
//die;

define('ROOTPATH', __DIR__);

require __DIR__.'/App/App.php';

App::init();
App::$kernel->launch();

