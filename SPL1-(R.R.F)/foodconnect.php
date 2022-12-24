<?php
session_start();
?>
<?php

error_reporting(0);

  // $foodname = $_POST['foodname'];
  // $price = $_POST['price'];
  // $category = $_POST['category'];
  // $subject = $_POST['subject'];
  $frestaurantname = $_SESSION['restaurantname'];


require_once 'dbConfig.php'; 
 
$status = $statusMsg = ''; 


  require_once 'dbConfig.php';

  if(isset($_POST["submit"])){

   
    $INSERT= "INSERT Into food (foodname, price, category, subject, frestaurantname) values ('$foodname','$price','$category','$subject', '$_SESSION[restaurantname]')";

    mysqli_query($db, $INSERT);

    if(mysqli_query($db, $INSERT))
     {

    header("Location: foodimage.html");
		exit();


     }
    


  

    $db->close();
}
 



  

?>