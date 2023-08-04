<?php 
if(! isset($_SESSION['curr_user_data'])){
    header("location: /login");
}
$curr_nav = "notifications";
view("notifications", compact("curr_nav"));
