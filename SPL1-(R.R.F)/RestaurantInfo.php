 

<?php
$category = null;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<!-- Bootstrap CSS -->

<link href="/css/bootstrap.min.css" rel="stylesheet">

    <title>RRF Restaurant Info Page</title>
</head>

<style>

@import url("https://fonts.googleapis.com/css??family=Poppins:wght@400;500;600;700&display=swap");


body{
    background-color: rgb(240, 221, 136);
    overflow-x: hidden;
}

 

.cbtnn1 {
  border: none;
  outline: none;
  padding: 4px 4px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration: none;
  top: 20px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
}


.cbtnn1:hover {
  opacity: 0.7; ;
}

.cbtnn2 {
  border: none;
  outline: none;
  padding: 4px 4px;
  cursor: pointer;
  color: white;
  position: relative;
  left: 10px;
  top: 10px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
}


.cbtnn2:hover {
  opacity: 0.7; ;
}




.cardfix img {
    width: 180px;
    top: 300px;
    left: 100px;
}


.cardbtn a {
  border: none;
  outline: none;
  padding: 8px 8px;
  cursor: pointer;
  color: rgb(80, 31, 19);
  }

.cardbtn a:hover
{
  opacity: 0.7;
}


.cardfix{
  height: 370px;
  position: relative;
  left: 50px;
  width: 80%;
  cursor : pointer;
  bottom: 220px;
}

.cardfix .card {
  height: 325px;
}

.cardfix img {
  width: 180px;
  height: 120px;
}


.card:hover {
  box-shadow: 0 8px 16px 0 grey;
  transform: translate3D(0,-1px,0) scale(1.03);
} 

.heading{
  position: relative;
  left: 62px;
  bottom : 175px;
  font-size: 25px;
  color: rgb(80, 31, 19);

}


.handrice{
  width: 150px;
  height: 150px;
  position: relative;
  left: 350px;
}
.rrflogo{
  width: 200px;
  height: 100px;
  position: relative;
  bottom: 250px;
}
.credentials{
  color: rgb(80, 31, 19);
  position: relative;
  left: 515px;
  bottom: 130px;
}
.card-body .card-text2 i{
  color: rgba(248, 197, 70, 0.964);
}
.card-body .card-texti i{
  color: rgba(248, 197, 70, 0.964);
}

.card .card-body .card-textrn {
  font-family: 'Times New Roman', Times, serif;
  font-size: 18px;
  color: rgb(80, 31, 19);
  font-weight: 600;
}
.cardifix{
  position: relative;
  left: 100px;
  width: 80%;
  cursor : pointer;
  bottom: 220px;
}

.cardifix .card {
  height: 420px;
  position: relative;
}

.cardifix img {
  width: 180px;
  height: 120px;
}
.heading u{
  position: relative;
  left: 53px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
}


</style>

<body>

        <p>
              <img class="handrice" src="handrice.png" alt="logo"> 
            <?php

            require 'dbConfig.php';
           // $category = $_POST['category'];
      $sno = $_GET['resid'];
      $query = "SELECT restaurantname, location, restaurantid FROM restaurant where status = 1 and restaurantid = '$sno'";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          
          $restaurantname = $row['restaurantname'];
          $location = $row['location'];
         //echo $restaurantname;
          
         }
       }

       

      ?>

    <div class=credentials>
            <h1 class="restname"> <?php echo $restaurantname; ?></h1> 
            <h4 class="restlocation"><?php echo $location; ?></h1>
            
    </div>

    <img class="rrflogo" src="cover.png" alt="logo">           
           
            
        
      

        <!-- while ($new_row = mysql_fetch_array($new_result)) {
    if ($new_row['category'] != $category) {
        echo "<h1>$new_row[category]</h1>";
        $category = $new_row['category'];
    } -->

    
   <!-- card -->
<p class = heading><u> Menu </p></u> 

<div class="cardifix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'dbConfig.php';
      //$snof = $_GET['fname'];

      $query = "SELECT * FROM food_new, restaurant where frestaurantname = restaurantname and food_res_id = '$sno'";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>

<?php
          $sno = $row['restaurantid'];
          $sno2 = $row['foodid'];
          //$snof = $row['foodname'];
          
          
              $getr= "SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM food_reviews WHERE reviewfid ='$sno2'";
    $result = mysqli_query($db, $getr);
    $row2 = mysqli_fetch_array($result);

    $showr = "SELECT review, rating, rfusername, submitdate  FROM food_reviews WHERE reviewfid = '$sno2'  ORDER BY submitdate DESC";
$result2 = mysqli_query($db, $showr);
$row3 = mysqli_fetch_array($result2);

    ?>
          
          <div class="col-md-3 mt-3">
            <div class="card">
            
            <div class="card-body">
            <h5 class="card-title" id="rname"><?php echo $row['foodname'].','; ?></h5>
            <p class="card-textrn" id="rname"><?php echo $row['frestaurantname']; ?></p>
            <p class="card-text1" id="rlocation"><i><?php echo $row['subject']; ?></p></i>
            <p class="card-textl" id="rlocation"><?php echo '৳'. $row['price']; ?></p>
            <p class="card-text2" id="rlocation"><i class="fas fa-star"></i><b><?php echo sprintf('%0.1f',$row2['overall_rating']).'/5.0' .' '.'('.$row2['total_reviews'].'+'.')'
            ; ?></b></p>

            <!-- image fetch -->
              <?php 
          // Include the database configuration file  
           require_once 'dbConfig.php'; 

           $queryy = "SELECT image, restaurantname from foodimage, restaurant where foodname = '$row[foodname]' and irestaurantname = restaurantname ";
           $queryy_run = mysqli_query($db, $queryy);
           $check_userr = mysqli_num_rows($queryy_run) > 0;

           if($check_userr){
            while($row = mysqli_fetch_assoc($queryy_run)){
              ?>
                 <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top" id="rimage"/>
                 
              <?php
            }
           }
           
           ?>

          
       <?php echo '<a class="cbtnn1" href="ViewReviewsFood.php?fid='. $sno2 .'">All Reviews</a>
       <a class="cbtnn1" href="RateReviewFood.php?fid='. $sno2 .'">Review Here</a>'?>
        
        

  
          </div>
          </div>
          </div>

          <?php
        }
      }
    

      ?>
    </div>
    </div>
    </div>
   


      


</body>

</html>