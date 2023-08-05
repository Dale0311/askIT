<?php 

// validation for new acc- ughjhhh okay maybe @2:30pm
use Core\App;

$db = App::resolver("Database");
$auth = App::resolver("Authenticator");
$arrError = [];
$fileError = [];
$q = "INSERT INTO users(email, password, at, firstname, lastname, sex) VALUES(?, ?, ?, ?, ?, ?)";

$email = htmlspecialchars($_POST['email']?? "");
$password = htmlspecialchars($_POST['password']?? "");
$at = htmlspecialchars($_POST['at']?? "");
$firstname = htmlspecialchars($_POST['firstname']?? "");
$lastname = htmlspecialchars($_POST['lastname']?? "");
$sex = htmlspecialchars($_POST['sex']?? "");


// if there's an error

// validation --- 
if(! $auth->string($email, 1, 100)){
    $arrError['email'] = "Email with a maximum of 100 characters is required";
}
elseif(! $auth->email($email)){
    $arrError['email'] = "Email is not valid";
}
if(! $auth->string($password, 1, 50)){
    $arrError['password'] = "password with a maximum of 50 characters is required";
}
if(! $auth->string($at, 1, 20)){
    $arrError['at'] = "at with a maximum of 20 characters is required";
}
if(! $auth->string($firstname, 1, 50)){
    $arrError['firstname'] = "firstname with a maximum of 50 characters is required";
}
if(! $auth->string($lastname, 1, 50)){
    $arrError['lastname'] = "lastname with a maximum of 50 characters is required";
}
if(! $auth->string($sex, 1, 50)){
    $arrError['sex'] = "sex with a maximum of 50 characters is required";
}

// if arrError is not empty
if(! empty($arrError)){
    view("register", compact("arrError"));
    die();
}
    
// // if query is successful
if($db->query($q, [$email, md5($password), $at, $firstname, $lastname, $sex])){
    $temp_id = $db->getLastInsertedID();
    $db_user = App::resolver("Database");
    $q = "SELECT * from users WHERE user_id = ?";
    $_SESSION['curr_user_data'] = $db_user->query($q, [$temp_id])->fetch();
    header("location: /");
    die();
}
dd("failed to add to the db");