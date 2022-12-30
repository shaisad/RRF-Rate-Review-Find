<?php
session_start();
error_reporting(0);
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
     // $sno3 = $_GET['resid'];
      
    
    $INSERT= "INSERT Into `res_reviews` (`rrusername`, `review`, `rating`, `reviewrid`) values ('$_SESSION[username]','$review','$rating', '$sno')";

   // mysqli_query($db, $INSERT);

    if(mysqli_query($db, $INSERT))
     {

      header("Location:pop16.php?resid='.$sno.'");
      exit();
  
     }
     else{
        
        ?>      
        <script>alert("Error while submitting review! Please try again!")</script>
        <?php

  exit();
     }
    


  

    $db->close();
}
else{
  ?>      
  <script>alert("Must click the Post button to submit a review!")</script>
  <?php

exit();
}
  }
  else{
    ?>      
    <script>alert("Rate and review fields must be filled to submit a review!")</script>
    <?php

exit();
  }
 



  

?>
