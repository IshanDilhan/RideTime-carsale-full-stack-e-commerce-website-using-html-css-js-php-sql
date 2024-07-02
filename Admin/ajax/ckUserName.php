<?php
session_start();
ob_start();
require_once('./../db_connector.php');



// $query  = "SELECT `user_name` FROM `car_user` WHERE `user_name`='". $myUserName ."'";
// $result = mysql_query($query);
// $count  = mysql_num_rows($result);


$myUserName = $_POST['myUserName'];
$query  = "SELECT `user_name` FROM `car_user` WHERE `user_name`='". $myUserName ."'";
$result = mysqli_query($con,$query);
$count  = mysqli_num_rows($result);



if($count <= 0){
    echo'0';
}
else{
    echo('1');
}
		



?>