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

    ?>      
          <script>alert("Your review has been submitted successfully! Check out the review section to see your review!")</script>
          <?php

		exit();


     }
     else{
        
        ?>      
        <script>alert("Erorr while submitting review! Please try again!")</script>
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
    <script>alert("Rate and review fields must be filled to submit a review")</script>
    <?php

exit();
  }
 



  

?>
