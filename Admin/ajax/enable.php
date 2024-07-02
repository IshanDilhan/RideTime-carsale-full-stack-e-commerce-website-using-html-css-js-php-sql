<?php 
session_start();
ob_start();
require_once('./../db_connector.php');

echo $itemId    = @trim(stripslashes($_POST['itemId']));
echo $enable  = @trim(stripslashes($_POST['enable']));

if($enable == 'e'){
    $updateQ = "UPDATE `cars` SET `car_is_enable` = 1 WHERE `car_id`=$itemId";
    mysqli_query($con,$updateQ);
    echo '1';
}
else{
    $updateQ = "UPDATE `cars` SET `car_is_enable` = 0 WHERE `car_id`=$itemId";
    mysqli_query($con,$updateQ);
}

?>