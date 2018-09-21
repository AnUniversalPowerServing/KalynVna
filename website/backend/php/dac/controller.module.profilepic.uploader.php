<?php
session_start();
$target_dir = "uploads/";
$user_Id=$_POST["AUTH_USER_ID"];
if(!is_dir($target_dir.$user_Id)){ mkdir($target_dir.$user_Id); }
$target_file = $target_dir .$user_Id.'/'. basename($_FILES["uploadprofilepic1"]["name"]);
if (move_uploaded_file($_FILES["uploadprofilepic1"]["tmp_name"], $target_file)) {
 echo "The file ". basename( $_FILES["uploadprofilepic1"]["name"]). " has been uploaded.";
} else { echo "Sorry, there was an error uploading your file.";  }

?>