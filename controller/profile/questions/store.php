<?php

use Core\App;
$db = App::resolver("Database");

// query the database
$q = "INSERT INTO questions(question, user_id) VALUES(?, ?)";

// check if everythings worked.
$to_insert_question = $db->query($q, [htmlspecialchars($_POST['question']), $_POST['user_id']]);

if(! $to_insert_question){
    echo "failed to insert to the database";
    die();
}

// to follow last inserted id.
header("location: /profile");
die();
