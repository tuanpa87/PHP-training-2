<?php 

require 'core/functions.php';

$query = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

$uri = str_replace('/PHP-training-2/', '', $_SERVER['REQUEST_URI']) ;
$uri = trim($uri, '/');


require $router->direct($uri);
