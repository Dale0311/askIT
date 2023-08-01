<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);
$existing_comments = unserialize($_POST['existing_comments']);
$comment_keys = array_keys($existing_comments[0]);
$comment_value = [$_POST['at'], $_POST['profile_pic'], $_POST['firstname'], $_POST['lastname'], htmlspecialchars($_POST['comment'])];
$newComment = array_combine($comment_keys, $comment_value);

// add the new comment 
$existing_comments[] = $newComment;

// json encode the value
$encoded_existing_comments = json_encode($existing_comments);

// query the database
$q = "UPDATE questions SET comments = '{$encoded_existing_comments}' WHERE id = ?";
$inserted_comment = $db->query($q, [$_POST['question_id']]);
if($inserted_comment){
    header("location: /profile/questions?id={$_POST['question_id']}");
    die();
}

echo "failed to insert";
die();