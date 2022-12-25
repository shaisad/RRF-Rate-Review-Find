<?php

session_start(); 

require 'dbConfig.php';

if (!$db) {
	echo "Connection failed!";
}

if (isset($_POST['submitname']))
{
    $username = $_POST['username'];

    $query = "update user set username='$username' where username = '$_SESSION[username]'";

    if ($db->query($query) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $db->error;
      }
      
      $db->close();      

}

if (isset($_POST['submitemail']))
{
    $useremail = $_POST['useremail'];

    $query = "update user set useremail='$useremail' where username = '$_SESSION[username]'";
    
    if ($db->query($query) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $db->error;
      }
      
      $db->close();      

}


?>


    

