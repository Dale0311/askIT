<?php

use Core\App;


if(!$_GET['id']?? false){
   header("location: /");
}
$db = App::resolver("Database");

// // question
$data = getQuestion($db, $_GET['id']);
if(empty($data)){
   abort();
}
$data = toOneDArr($data);
$user_data = toOneDArr($_SESSION['curr_user_data']);

$isOwned = $data['user_id'] === $user_data['user_id']? true: false;
$curr_nav = null;

$existing_comments = serialize($data['comments']?? []);
$encoded=htmlentities($existing_comments);
view("question", compact("data", "curr_nav", "isOwned", "user_data", "encoded"));