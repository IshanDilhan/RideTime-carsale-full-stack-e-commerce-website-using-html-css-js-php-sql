<?php
session_start();
ob_start();
require_once('./../db_connector.php');
         
$fname = @trim(stripslashes($_POST['fname']));
// $lname = @trim(stripslashes($_POST['lname']));
$userName = @trim(stripslashes($_POST['userName']));
$email    = @trim(stripslashes($_POST['email']));
$password = md5(@trim(stripslashes($_POST['password2'])));



$query  = "SELECT `user_id` FROM `car_user` WHERE `user_name`='" + $userName + "' OR `email_address`='" + $password + "'";
$result = mysqli_query($con,$query);
$count  = mysqli_num_rows($result);

if($count <= 0){
    //Registe user
    $insertQ = "INSERT INTO `car_user`(`user_name`, `pwd`, `email`) VALUES('$userName','$password','$email')";
    $insertRes = mysqli_query($con,$insertQ);
    echo('1');

}else{
    //display error message
    echo('0');
}
		
?>