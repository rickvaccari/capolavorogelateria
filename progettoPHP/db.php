<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}  
 
function isLoggedIn() {
    return isset($_SESSION['id']);
}

function redirectIfNotLoggedIn() {
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit();
    }
}
 

// Create array to hold error messages (if any)
$ErrorMsgs = array();

// Create new mysql connection object
$Dbconn =  mysqli_connect("localhost", "root", "root", "gelateria");

// Check to see if connection errno data member is not 0 (indicating an error)
if ($Dbconn->connect_errno) {

    // Add error to errors array
    $ErrorMsgs[]="The database server is not available.".
               " Connect Error is ".$Dbconn->connect_errno." ".
               $Dbconn->connect_error.".";
}
    
?>
