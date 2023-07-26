<?php 
const BASEPATH = __DIR__ . "/../";
require BASEPATH. "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];
$routes = require base_path("routes.php");
routeToController($uri, $routes);