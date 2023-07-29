<?php 
use Core\Database;
$config = require base_path("config.php");

$db = new Database($config['database']);

// questions
$q = $q = "SELECT questions.*, users.at, users.firstname, users.lastname, users.profile_pic FROM questions LEFT JOIN users ON questions.user_id = users.user_id WHERE questions.id=?";
$curr_user = toOneDArr($_SESSION['curr_user_data']);

$data = $db->query($q, [$_GET['id']])->fetch();
if(! $data){
   abort(404);
}

$data = decodeComment($data);
$data = toOneDArr($data);
$isOwned = $data['user_id'] === $curr_user['user_id']? true: false;
$curr_nav = null;
view("question", compact("data", "curr_nav", "isOwned", "curr_user"));
