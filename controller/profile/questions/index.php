<?php 
use Core\Database;


if(!$_GET['id']?? false){
   header("location: /");
}
$config = require base_path("config.php");

$db = new Database($config['database']);

// // question
$data = getQuestion($db, $_GET['id']);
$curr_user = toOneDArr($_SESSION['curr_user_data']);

$isOwned = $data['user_id'] === $curr_user['user_id']? true: false;
$curr_nav = null;

$existing_comments = serialize($data['comments']); 
$encoded=htmlentities($existing_comments);
view("question", compact("data", "curr_nav", "isOwned", "curr_user", "encoded"));
