<?php

error_reporting(0);

  $foodname = $_POST['foodname'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $subject = $_POST['subject'];


require_once 'dbConfig.php'; 
 
$status = $statusMsg = ''; 

if(!empty($foodname) && !empty($price)  && !empty($category))

{
  require_once 'dbConfig.php';

  if(isset($_POST["submit"])){

   
    $INSERT= "INSERT Into food (foodname, price, category, subject) values ('$foodname','$price','$category','$subject')";

    mysqli_query($db, $INSERT);

    if(mysqli_query($db, $INSERT))
     {

    header("Location: foodimage.html");
		exit();


     }
    


  }

    $db->close();
}
 



  

?>