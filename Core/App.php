<?php

namespace Core;

class App{
    public static $container;

    static function setContainer($container){
        self::$container = $container;
    }

    static function resolver($key){
        return self::$container->resolver($key);
    }
}