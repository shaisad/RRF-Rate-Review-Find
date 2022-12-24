<?php

session_start(); 

require 'dbConfig.php';

if (!$db) {
	echo "Connection failed!";
}

if (isset($_POST['submitname']))
{
    $restaurantname = $_POST['restaurantname'];

    $query = "update restaurant set restaurantname='$restaurantname'";

    if ($db->query($query) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $db->error;
      }
      
      $db->close();      

}

if (isset($_POST['submitemail']))
{
    $restaurantemail = $_POST['restaurantemail'];

    $query = "update restaurant set restaurantemail='$restaurantemail'";
    
    if ($db->query($query) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $db->error;
      }
      
      $db->close();      

}


?>


    

