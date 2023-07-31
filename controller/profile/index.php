<?php
use Core\Database;
$config = require base_path("config.php");

$curr_nav = "profile";
$db = new Database($config['database']);

// questions
$q = $q = "SELECT questions.*, users.at, users.firstname, users.lastname, users.profile_pic FROM questions LEFT JOIN users ON questions.user_id = users.user_id WHERE users.user_id=?";
$data = $db->query($q, [$_SESSION['curr_user_id']])->fetch();
$data = decodeComment($data);
// user_data
$user_data = toOneDArr($_SESSION['curr_user_data']);
view("profile", compact("curr_nav", "data", "user_data"));
