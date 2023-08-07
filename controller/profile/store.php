<?php 
use Core\App;

$arrError=[];

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

if(! empty($arrError)){
    header("location: /profile");
    die();
}

$db = App::resolver("Database");
$curr_user_id = $_POST['user_id'];
$q = "UPDATE users SET profile_pic = ? WHERE user_id = $curr_user_id";

// new dir
$dir = "img/user{$curr_user_id}";
if(! file_exists(base_path("public/{$dir}"))){
    mkdir(base_path("public/{$dir}"));
}

// rename the file to profile
$new_pic_name = "profile.";
$profile_name = $new_pic_name . $file_ext;


// path to insert to db;
$profile = "/{$dir}/{$profile_name}";

// what if i want to update my existing profile?
// if(file_exists("{$dir}/$profile"))

$qued = $db->query($q, [$profile]);
if(! $qued){
    header("location: /profile");
    die();
}

// move the uploaded file
move_uploaded_file($file_temp, base_path("public{$profile}"));

$db_user = App::resolver("Database");
$q = "SELECT * from users WHERE user_id = ?";
$_SESSION['curr_user_data'] = $db_user->query($q, [$curr_user_id])->fetch();
header("location: /profile");
die();