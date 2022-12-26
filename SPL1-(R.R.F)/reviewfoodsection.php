<?php
session_start();
?>
<?php



  
  
    require 'dbConfig.php';
    $sno2 = $_GET['fid'];
    
    $getr= "SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM food_reviews WHERE reviewfid ='$sno2'";
    $result = mysqli_query($db, $getr);

    $row = mysqli_fetch_array($result);
echo $row['overall_rating'].'/5'."<br/>";
echo 'Total:'.$row['total_reviews'].' '.'reviews'."<br/>";
   // mysqli_query($db, $INSERT);
//    $tourresult = $result->fetch_array()[0] ?? '';
//    echo '<strong>Per room amount:  </strong>'.$tourresult;
   

$showr = "SELECT review, rating, rfusername, submitdate  FROM food_reviews WHERE reviewfid = '$sno2'  ORDER BY submitdate DESC";
$result = mysqli_query($db, $showr);

while($row = mysqli_fetch_array($result)) {
    echo $row['rfusername']."<br/>";
    echo $row['rating']."<br/>";
    echo $row['review']."<br/>";
    echo $row['submitdate']."<br/>";
}

   
    
 

    

  

?>
