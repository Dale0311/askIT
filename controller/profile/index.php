<?php
use Core\Database;
$config = require base_path("config.php");

$curr_nav = "profile";
$db = new Database($config['database']);

// questions
$data = getQuestion($db, $_SESSION['curr_user_id']);

// user_data
$user_data = toOneDArr($_SESSION['curr_user_data']);
view("profile", compact("curr_nav", "data", "user_data"));
