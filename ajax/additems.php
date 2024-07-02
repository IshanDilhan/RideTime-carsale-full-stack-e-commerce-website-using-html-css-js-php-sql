<?php
session_start();
ob_start();
require_once('./../db_connector.php');
         
$carname = @trim(stripslashes($_POST['carname']));
$carbrand = @trim(stripslashes($_POST['carbrand']));
$carstatus = @trim(stripslashes($_POST['carstatus']));
$displayprice   = @trim(stripslashes($_POST['displayprice']));
$sellingprice = (@trim(stripslashes($_POST['sellingprice'])));
$enginepower = @trim(stripslashes($_POST['enginepower']));
$km = @trim(stripslashes($_POST['km']));
$giartype = @trim(stripslashes($_POST['giartype']));
$image = $_POST['image'];


$filename = preg_replace('/^C:\\\\fakepath\\\\/', '',$image);
$processedFilename = "../assets/images/" . $filename;


    $insertQ = "INSERT INTO `cars`(`car_name`,`car_brand`,`car_status`,`display_price`,`seling_price`,`engine_power`,`km`,`giar_type`,`car_image_url`) VALUES('$carname','$carbrand','$carstatus','$displayprice','$sellingprice','$enginepower','$km','$giartype','$processedFilename')";
    $insertRes = mysqli_query($con,$insertQ);
    
    
    if ($insertRes) {
        
        echo "1"; // Insertion was successful
    } else {
        echo "0"; // There was an error
    }