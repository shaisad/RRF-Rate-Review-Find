<?php
session_start();
?>
<?php



  $foodname = $_POST['foodname'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $subject = $_POST['subject'];
  $frestaurantname = $_SESSION['restaurantname'];
  $_SESSION['foodname'] = $foodname;
 

  require 'dbConfig.php'; 

  
  
  if (!empty($foodname) && !empty($price) && !empty($category)){
    if(isset($_POST["submit"])){
      $sno = $_GET['resid'];
      
    
    $INSERT= "INSERT Into `food_new` (`foodname`, `price`, `category`, `subject`, `frestaurantname`, `food_res_id`) values ('$foodname','$price','$category','$subject', '$_SESSION[restaurantname]', '$sno')";

   // mysqli_query($db, $INSERT);

    if(mysqli_query($db, $INSERT))
     {

    header("Location: foodimage.html");
		exit();


     }
    


  

    $db->close();
}
  }
 



  

?>