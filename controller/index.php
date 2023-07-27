<?php

use Core\Database;
$config = require base_path("config.php");

$q = "SELECT questions.*, users.at, users.firstname, users.lastname, users.profile_pic FROM questions LEFT JOIN users ON questions.user_id = users.user_id";

$db = new Database($config['database']);

$data = $db->query($q)->fetch();
foreach ($data as $key => &$row) {
    if(array_key_exists("comments", $row)){
        $comments = json_decode($row['comments'], true);
        $row['comments'] = $comments;
    }
}
$curr_nav = "index";
view("index", compact("curr_nav", "data"));