<?php
session_start();
ob_start();
require_once('./../db_connector.php');
         
$name = @trim(stripslashes($_POST['name']));
$email = @trim(stripslashes($_POST['email']));
$comsubject = @trim(stripslashes($_POST['subject']));
$message  = @trim(stripslashes($_POST['message']));






    $insertQ = "INSERT INTO `comments`(`com_name`,`email`,`_comsubject`,`massage`) VALUES('$name','$email','$comsubject','$message')";
    $insertRes = mysqli_query($con,$insertQ);
    
    
    if ($insertRes) {
        echo "1"; // Insertion was successful
    } else {
        echo "0"; // There was an error
    }