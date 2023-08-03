<?php

use Core\App;
use Core\Container;
use Core\Database;
use Core\Authenticator;
$container = new Container;

$container->bind("Database", function(){
    $config = require base_path("config.php");
    return new Database($config['database']);
});
$container->bind("Authenticator", function(){
    return new Authenticator();
});

App::setContainer($container);