<?php 
if(! isset($_SESSION['curr_user_data'])){
    header("location: /login");
}
$curr_nav = "notifications";
// user_data
$user_data = toOneDArr($_SESSION['curr_user_data']);
view("notifications", compact("curr_nav", "user_data"));
