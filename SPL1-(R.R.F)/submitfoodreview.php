<?php
session_start();
?>
<?php



  
  $review = $_POST['review'];
  $rating = $_POST['rating'];
  $rfusername = $_SESSION['username'];
  
 // $frestaurantname = $_SESSION['restaurantname'];
 // $_SESSION['foodname'] = $foodname;
 

  require 'dbConfig.php'; 

  if (!empty($review) && !empty($rating)){
    if(isset($_POST["submitreview"])){
      $sno2 = $_GET['fid'];
      
    
    $INSERT= "INSERT Into `food_reviews` (`rfusername`, `review`, `rating`, `reviewfid`) values ('$_SESSION[username]','$review','$rating', '$sno2')";

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
