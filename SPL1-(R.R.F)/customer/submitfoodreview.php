<?php
session_start();
?>
<?php



  
  $review = $_POST['review'];
  $rating = $_POST['rating'];
  $rfusername = $_SESSION['username'];
  
 // $frestaurantname = $_SESSION['restaurantname'];
 // $_SESSION['foodname'] = $foodname;
 

  require 'config/dbConfig.php'; 

  if (!empty($review) && !empty($rating)){
    if(isset($_POST["submitreview"])){
      $sno2 = $_GET['fid'];
      
    
    $INSERT= "INSERT Into `food_reviews` (`rfusername`, `review`, `rating`, `reviewfid`) values ('$_SESSION[username]','$review','$rating', '$sno2')";

   // mysqli_query($db, $INSERT);

   if(mysqli_query($db, $INSERT))
   {

    header("Location:popup/pop17.php?resid='.$sno.'");
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
