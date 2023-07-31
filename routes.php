<?php
 
$router->get("/", "index");
$router->get("/notifications", "notifications");
$router->get("/profile", "profile/index");
$router->get("/profile/questions", "profile/questions/index");
$router->post("/profile/questions", "profile/questions/store");