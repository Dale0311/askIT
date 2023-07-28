<?php
 
$router->get("/", "index");
$router->get("/notifications", "notifications");
$router->get("/profile", "profile/index");
$router->get("/profile/questions", "profile/questions/index");