<?php

use Core\App;

$db = App::resolver("Database");
if(! isset($_SESSION['curr_user_data'])){
    header("location: /login");
}
$curr_nav = "profile";

// user_data
$user_data = toOneDArr($_SESSION['curr_user_data']);

// questions
$data = getUserQuestions($db, $user_data['user_id']);
view("profile", compact("curr_nav", "data", "user_data"));
