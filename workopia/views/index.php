<?php

require '../helpers.php';
require basePath('Router.php');
require basePath('Database.php');


$router =  new Router();
$routes = require basePath('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

// verificar erros de caminho e ver se a conexão com o bd deu certo