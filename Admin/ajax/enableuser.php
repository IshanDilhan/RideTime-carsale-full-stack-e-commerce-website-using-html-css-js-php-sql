<?php 
session_start();
ob_start();
require_once('./../db_connector.php');

echo $itemId    = @trim(stripslashes($_POST['itemId']));
echo $enable  = @trim(stripslashes($_POST['enable']));

if($enable == 'd'){
    $updateQ = "UPDATE `car_user` SET `user_is_active`= 0 WHERE `user_id`=$itemId";
    mysqli_query($con,$updateQ);
    echo '1';
}
else{
    $updateQ = "UPDATE `car_user` SET `user_is_active`= 1 WHERE `user_id`=$itemId";
    mysqli_query($con,$updateQ);
}

?>