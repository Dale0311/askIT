<?php
namespace Core;
class Authenticator{
    function string(string $string, int $min = 1, int $max = INF){
        $string = trim($string);
        // return bol
        return strlen($string) >= $min && strlen($string) <= $max;
    }

    function email($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}