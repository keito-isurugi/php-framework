<?php
require '../vendor/autoload.php';

// $views = '/var/www/framework/views';
// $cache = '/var/www/framework/cache';
// echo $views;
// $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
// echo $blade->run("hello", array("variable1" => "value1")); // it calls /views/hello.blade.php

require_once '../bootstrap/bootstrap.php';
$app = new App();
$app->run();
