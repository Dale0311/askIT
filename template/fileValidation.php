<?php
// if(($_FILES['profile_pic']['name'])?? false){
//     $file_name = $_FILES['profile_pic']['name'];
//     $file_size = $_FILES['profile_pic']['size'];
//     $file_temp = $_FILES['profile_pic']['tmp_name'];
//     $file_type = $_FILES['profile_pic']['type'];

//     $file_ext_temp = explode(".", $file_name);
//     $file_ext = end($file_ext_temp);
//     $allowedExt = ['jpg', 'jpeg', 'png'];

//     if(! in_array($file_ext, $allowedExt)){
//         $arrError['file_extension'] = "File extension is not valid, please only choose png, jpg/jpeg";
//     }
//     if($file_size >= 5000000){
//         $arrError['file_size'] = "File size should be 5Mb maximum";
//     }
// }
// else{
//     $arrError['file'] = "Please input a file";
// }

// ////
// if($db->query($q, [$email, md5($password), $at, $firstname, $lastname, $sex, $profile_pic])){
//     $registered_user_id = $db->getLastInsertedID();
//     $new_dir = base_path("public/img/user{$registered_user_id}");
//     if(mkdir($new_dir)){
//         $new_pic_name = "profile.";
//         $profile_name = $new_pic_name . $file_ext;
//         move_uploaded_file($file_temp, "{$new_dir}/{$profile_name}");
//     }
//     $temp_id = $db->getLastInsertedID();
//     $db_user = App::resolver("Database");
//     $q = "SELECT * from users WHERE user_id = ?";
//     $_SESSION['curr_user_data'] = $db_user->query($q, [$temp_id])->fetch();
//     header("location: /");
//     die();
// }
?>

<div class="pt-5 w-1/2">
    <p class="text-xs text-gray-500">Upload your profile picture</p>
    <label class="block">
        <span class="sr-only">Choose profile photo</span>
        <input type="file" name="profile_pic" class="block w-full text-sm text-gray-500
file:mr-4 file:py-2 file:px-4
file:rounded-md file:border-0
file:text-sm file:font-semibold
file:bg-blue-500 file:text-white
hover:file:bg-blue-600
" />
    </label>
</div>