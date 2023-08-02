<?php

use Core\App;
$db = App::resolver("Database");

// get existing comments
$existing_comments = unserialize($_POST['existing_comments']);

// create a array of comment's keys
$comment_keys = array_keys($existing_comments[0]);
// create a array of new comment values
$comment_value = [$_POST['at'], $_POST['profile_pic'], $_POST['firstname'], $_POST['lastname'], htmlspecialchars($_POST['comment'])];
// combine keys and array
$newComment = array_combine($comment_keys, $comment_value);

// add the new comment to the existing array
$existing_comments[] = $newComment;

// json encode the existing comments
$encoded_existing_comments = json_encode($existing_comments);

// query the database
$q = "UPDATE questions SET comments = '{$encoded_existing_comments}' WHERE id = ?";

// check if everythings worked.
$inserted_comment = $db->query($q, [$_POST['question_id']]);

if(! $inserted_comment){
    echo "failed to insert";
    die();
}
header("location: /profile/questions?id={$_POST['question_id']}");
die();
