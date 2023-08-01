<?php

use Core\Database;
$config = require base_path("config.php");
// kapag may auth nako
$_SESSION['curr_user_id'] = 1;

// Select * from questions
$db = new Database($config['database']);
$data = getQuestion($db);

$qUser = "SELECT * FROM users WHERE user_id=?";
$_SESSION['curr_user_data'] = $db->query($qUser, [$_SESSION['curr_user_id']])->fetch();
$curr_user = toOneDArr($_SESSION['curr_user_data']);
$curr_nav = "index";
view("index", compact("curr_nav", "data", "curr_user"));