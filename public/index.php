<?php
require '../vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function ($req, $res, $args) {
    $res->write("Hello World");
    return $res;
});
$app->run();
