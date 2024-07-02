<?php
session_start();
ob_start();
require_once('./../db_connector.php');

$email = $_POST['email'];

$query  = "SELECT `email` FROM `car_user` WHERE `email`='". $email ."'";
$result = mysqli_query($con,$query);
$count  = mysqli_num_rows($result);

if($count <= 0){
    echo'0';
}else{
    echo('1');
}
		
?>