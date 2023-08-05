<?php

use Core\App;

if(isset($_SESSION['curr_user_data'])){
    header("location: /");
}

$auth = App::resolver("Authenticator");
$db = App::resolver("Database");

// scrub
$at = htmlspecialchars($_POST['at']);
$password = htmlspecialchars($_POST['password']);
$arrError = [];

// validation
if(! $auth->string($at, 1, 100)){
    $arrError['at'] = "No At/@ inputted, please provide your At/@";
}
if(! $auth->string($at, 1, 100)){
    $arrError['password'] = "No password inputted, please provide password";
}

// query the db
$q = "SELECT * FROM users WHERE at=? && password=?";
$record = $db->query($q, [$at, md5($password)])->fetch();

if(empty($record)){
    $arrError['invalid'] = "Invalid credentials";
    $arrError['inputted_at'] = $at;
}

if(! empty($arrError)){
    view("login", compact("arrError"));
    die();
}

$_SESSION['curr_user_data'] = $record;
header("location: /");
die();