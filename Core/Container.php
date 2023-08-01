<?php 

namespace Core;

class Container{
    protected $bindings = [];

    function bind($key, $fn){
        $this->bindings[$key] =  $fn;
    }

    function resolver($key){
        if(! array_key_exists($key, $this->bindings)){
            echo "No class in that key instance";
            die();
        }
        return call_user_func($this->bindings[$key]);
    }
}