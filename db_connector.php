<?php



$myServer = 'localhost';
$myUser   = 'root';
$myPass   = '';
$myDB     = 'ride time';

// Create a connection
$con = mysqli_connect($myServer, $myUser, $myPass, $myDB);

// Check the connection


if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// No need to select the database separately, as it's already selected in the connection.

// Now you can perform database operations using the $con variable.
// For example, execute queries with mysqli_query($con, $query).


// Don't forget to close the connection when you are done.
// mysqli_close($con);
?>






