<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/database.php';
require __DIR__ . '/../views/index.php';

$router = new \Bramus\Router\Router();

$router->get('/', function () {
    render('home');
});

$router->get('/about', function () {
    render('about');
});

$router->run();
