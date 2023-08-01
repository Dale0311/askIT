<?php
session_start();
use Core\Router;

const BASEPATH = __DIR__ . "/../";
require BASEPATH. "functions.php";

spl_autoload_register(function($class){
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});
require base_path("serviceContainer.php");
// routing
$uri = parse_url($_SERVER['REQUEST_URI'])["path"];
$method = $_POST['_method']?? $_SERVER['REQUEST_METHOD'];
$router = new Router;
require base_path("routes.php");
$router->route($uri, $method);