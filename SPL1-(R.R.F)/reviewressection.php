<?php
session_start();
?>
<?php



  
  
    require 'dbConfig.php';
    $sno = $_GET['resid'];
    
    $getr= "SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM res_reviews WHERE reviewrid ='$sno'";
    $result = mysqli_query($db, $getr);

    $row = mysqli_fetch_array($result);
echo $row['overall_rating'].'/5'."<br/>";
echo 'Total:'.$row['total_reviews'].' '.'reviews'."<br/>";
   // mysqli_query($db, $INSERT);
//    $tourresult = $result->fetch_array()[0] ?? '';
//    echo '<strong>Per room amount:  </strong>'.$tourresult;
   

$showr = "SELECT review, rating, rrusername, submitdate  FROM res_reviews WHERE reviewrid = '$sno'  ORDER BY submitdate DESC";
$result = mysqli_query($db, $showr);

while($row = mysqli_fetch_array($result)) {
    echo $row['rrusername']."<br/>";
    echo $row['rating']."<br/>";
    echo $row['review']."<br/>";
    echo $row['submitdate']."<br/>";
}

   
    
 

    

  

?>
