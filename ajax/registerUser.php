<?php
session_start();
ob_start();
require_once('./../db_connector.php');
// require_once 'password.php';
         
$fname = trim(stripslashes($_POST['fname']));
// $lname = @trim(stripslashes($_POST['lname']));
$userName = trim(stripslashes($_POST['userName']));
$email = trim(stripslashes($_POST['email']));
// $password = password_hash(trim($_POST['password2']), PASSWORD_BCRYPT);
//$password = md5(@trim(stripslashes($_POST['password2'])));
$password = md5($_POST['pwd']);

$query  = "SELECT `user_id` FROM `car_user` WHERE `user_name`='$userName' OR `email`='$email'";
$result = mysqli_query($con, $query);
$count  = mysqli_num_rows($result);

if ($count <= 0) {
    // Register user
    $insertQ = "INSERT INTO `car_user` (`user_name`, `pwd`, `email`) VALUES ('$userName', '$password', '$email')";
    $insertRes = mysqli_query($con, $insertQ);
    echo('1');
} else {
    // Display error message
    echo('0');
}

		
?>