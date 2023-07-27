<?php 
const BASEPATH = __DIR__ . "/../";
require BASEPATH. "functions.php";

spl_autoload_register(function($class){
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];
$routes = require base_path("routes.php");
routeToController($uri, $routes);