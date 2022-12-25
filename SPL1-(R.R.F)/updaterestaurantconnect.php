<?php

session_start(); 

require 'dbConfig.php';

if (!$db) {
	echo "Connection failed!";
}

if (isset($_POST['submitname']))
{
    $restaurantname = $_POST['restaurantname'];
    
    
    $query = "update restaurant set restaurantname='$restaurantname' where restaurantname = '$_SESSION[restaurantname]'";
    //$query2 = "update fn set food_new.frestaurantname='$restaurantname' from food_new fn inner join restaurant res on fn.restaurantname='$_POST[restaurantname]' and  res.restaurantname = '$_SESSION[restaurantname]'";
    //$query3 = "update foodimage set foodimage.irestaurantname='$restaurantname' where restaurant.restaurantname = '$_SESSION[restaurantname]'";
   
    // if ($db->query($query) === TRUE && $db->query($query3) === TRUE) {
    //     echo "Record updated successfully";
    //   } else {
    //     echo "Error updating record: " . $db->error;
    //   }
      
    //   $db->close();      

}

if (isset($_POST['submitemail']))
{
    $restaurantemail = $_POST['restaurantemail'];

    $query = "update restaurant set restaurantemail='$restaurantemail' where restaurantname = '$_SESSION[restaurantname]'";
    //$query2 = "update food_new set restaurantemail='$restaurantemail' where restaurantname = '$_SESSION[restaurantname]'";
    if ($db->query($query) === TRUE) {
      
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $db->error;
      }
      
      $db->close();      

}


?>


    

