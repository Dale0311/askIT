<?php 
function dd($val){
    var_dump($val);
    die();
}

function base_path($val){
    return BASEPATH.$val;
}

function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        return require "controller/".$routes[$uri];
    }
    else{
        abort(404);
    }
}
function abort($code = 404){
    return require base_path("view/{$code}.php");
}

function view($var, $data = []){
    extract($data);
    return require base_path("view/{$var}.php");
}