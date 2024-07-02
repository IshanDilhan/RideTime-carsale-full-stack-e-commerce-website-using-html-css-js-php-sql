<?php 
session_start();
ob_start();
require_once('./../db_connector.php');

echo $itemId    = @trim(stripslashes($_POST['itemId']));
echo $enable  = @trim(stripslashes($_POST['enable']));

if($enable == 'e'){
    $updateQ = "UPDATE `comments` SET `comment_available`= 1 WHERE `comment_id`=$itemId";
    mysqli_query($con,$updateQ);
    echo '1';
}
else{
    $updateQ = "UPDATE `comments` SET `comment_available`= 0 WHERE `comment_id`=$itemId";
    mysqli_query($con,$updateQ);
}

?>