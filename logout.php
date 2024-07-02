<?php

include_once "header.php";

// Set the login session variable to false to log the user out
$_SESSION['login'] = false;

// Redirect to index.php or any other desired page after logout
header("Location: index.php");
exit; // Ensure script termination after redirection.
?>
