<?php

use Core\App;

$db = App::resolver("Database");
$curr_nav = "profile";

// questions
$data = getQuestion($db, $_SESSION['curr_user_id']);

// user_data
$user_data = toOneDArr($_SESSION['curr_user_data']);
view("profile", compact("curr_nav", "data", "user_data"));
