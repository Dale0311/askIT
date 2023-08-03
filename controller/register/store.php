<?php 

// validation for new acc- ughjhhh okay maybe @2:30pm
use Core\App;

$db = App::resolver("Database");

$q = "INSERT INTO users(email, password, at, firstname, lastname, sex) VALUES(?, ?, ?, ?, ?, ?)";

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$at = htmlspecialchars($_POST['at']);
$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$sex = htmlspecialchars($_POST['sex']);

$arrError = [];
$fileError = [];
// if there's an error
$auth = App::resolver("Authenticator");

// validation --- 
if(! $auth->string($email, 1, 100)){
    $arrError['email'] = "Email with a maximum of 100 is required";
}
if(! $auth->email($email)){
    $arrError['email'] = "Email is not valid";
}
if(! $auth->string($password, 1, 50)){
    $arrError['password'] = "password with a maximum of 50 is required";
}
if(! $auth->string($at, 1, 20)){
    $arrError['at'] = "at with a maximum of 20 is required";
}
if(! $auth->string($firstname, 1, 50)){
    $arrError['firstname'] = "firstname with a maximum of 50 is required";
}
if(! $auth->string($lastname, 1, 50)){
    $arrError['lastname'] = "lastname with a maximum of 50 is required";
}
if(! $auth->string($sex, 1, 50)){
    $arrError['sex'] = "sex with a maximum of 50 is required";
}
// img validation
if(($_FILES['profile_pic']['name'])?? false){
    $file_name = $_FILES['profile_pic']['name'];
    $file_size = $_FILES['profile_pic']['size'];
    $file_temp = $_FILES['profile_pic']['tmp_name'];
    $file_type = $_FILES['profile_pic']['type'];
    
    $file_ext_temp = explode(".", $file_name);
    $file_ext = end($file_ext_temp);
    $allowedExt = ['jpg', 'jpeg', 'png'];
    
    if(! in_array($file_ext, $allowedExt)){
        $arrError['file_extension'] = "File extension is not valid, please only choose png, jpg/jpeg";
    }
    if($file_size >= 5000000){
        $arrError['file_size'] = "File size should be 5Mb maximum";
    }
}
else{
    $arrError['file'] = "Please input a file";
}

// if arrError is not empty
if(! empty($arrError)){
    view("register", compact("arrError"));
}

// $db->query($q, []);