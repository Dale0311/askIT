<?php
 
$router->get("/", "index");
$router->get("/notifications", "notifications");
$router->get("/profile", "profile/index");
$router->get("/profile/questions", "profile/questions/index");
$router->post("/profile/questions", "profile/questions/store");
$router->post("/profile/questions/comments", "profile/questions/comments/store");

// auth
$router->get("/register", "register/index");
$router->post("/register", "register/store");
$router->get("/login", "login/index");