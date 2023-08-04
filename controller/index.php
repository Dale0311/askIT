<?php

use Core\App;
// kapag may auth nako
if(! isset($_SESSION['curr_user_data'])){
    header("location: /login");
}

$db = App::resolver("Database");
$data = getQuestion($db);
$user_data = toOneDArr($_SESSION['curr_user_data']);
$curr_nav = "index";
view("index", compact("curr_nav", "data", "user_data"));