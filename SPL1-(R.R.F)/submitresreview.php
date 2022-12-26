<?php
session_start();
?>
<?php



  
  $review = $_POST['review'];
  $rating = $_POST['rating'];
  $rrusername = $_SESSION['username'];
  
 // $frestaurantname = $_SESSION['restaurantname'];
 // $_SESSION['foodname'] = $foodname;
 

  require 'dbConfig.php'; 

  if (!empty($review) && !empty($rating)){
    if(isset($_POST["submitreview"])){
      $sno = $_GET['resid'];
      
    
    $INSERT= "INSERT Into `res_reviews` (`rrusername`, `review`, `rating`, `reviewrid`) values ('$_SESSION[username]','$review','$rating', '$sno')";

   // mysqli_query($db, $INSERT);

    if(mysqli_query($db, $INSERT))
     {

    echo " inserted";
		exit();


     }
     else{
        echo "error";
     }
    


  

    $db->close();
}
  }
 



  

?>
