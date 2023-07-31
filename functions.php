<?php

use Core\Database;

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
    return require base_path("view/{$code}.view.php");
    die();
}

function view($var, $data = []){
    extract($data);
    return require base_path("view/{$var}.view.php");
}

function decodeComment($record){
    foreach ($record as &$row) {
        if(array_key_exists("comments", $row)){
            $comments = json_decode($row['comments'], true);
            $row['comments'] = $comments;
        }
    }
    return $record;
}

function dateFormatter($date){
    $date = date_create($date);
    return date_format($date, "F d, Y");
}

function toOneDArr($arr){
    return $arr[0];
}

function getQuestion(Database $db, int $id){
    // question
    $q = $q = "SELECT questions.*, users.at, users.firstname, users.lastname, users.profile_pic FROM questions LEFT JOIN users ON questions.user_id = users.user_id WHERE questions.id=?";

    $data = $db->query($q, [$id])->fetch();
    if(! $data){
        abort(404);
    }
    $data = decodeComment($data);
    $data = toOneDArr($data);

    return $data;
}