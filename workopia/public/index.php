<?php

require '../helpers.php';

$routes = [
    '/php/workopia/public/' => 'controllers/home.php',
    '/php/controllers/listings' => 'controllers/listings/index.php',
    '/php/controllers/listings' => 'controllers/listings/create.php',
    '/php/controllers/error/404' => 'controllers/error/404.php'
];

$uri = $_SERVER['REQUEST_URI'];

// inspectAndDie($uri);

if(array_key_exists($uri, $routes)){
    require(basePath($routes[$uri]));
} else{
    require basePath($routes['/php/controllers/error/404']);
}

