


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
  padding: 3px 3px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration: none;
  top: 20px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
  right : 2px;
}


.cbtnn1:hover {
  opacity: 0.7; 
  text-decoration : none;
}

.cbtnn2 {
  border: none;
  outline: none;
  padding: 3px 3px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration : none;
  left: 10px;
  top: 20px;
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
  width: 77%;
  cursor : pointer;
  bottom: 50px;
}

.cardifix .card {
  height: 370px;
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

.cbtnn3 {
      background-color:rgb(80, 31, 19);
      color: white;
      padding: 3px 72px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      float: right;
      text-decoration : none;
      position: relative;
      left: 4px;
      top: 30px;
      outline: none;   
}


.cbtnn3 a:hover {
  opacity: 0.7; 
  text-decoration : none;
}

.logo .rrflogo{
 width : 190px;
    bottom: 20px;
}

</style>

<body>
   <div class="logo">

        <img class="rrflogo" src="cover.png" alt="logo">

    </div>
  <?php require 'dbConfig.php';
  
     
    ?>
        <p>
               
            <?php

            require 'dbConfig.php';
           // $category = $_POST['category'];
      $sno = $_GET['resid'];
      
      

       

      ?>

         
           
            
        
        <?php




    
  ?>

  



<div class="cardifix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'dbConfig.php';

      $query = "SELECT * FROM restaurant where restaurantid = '$sno'";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>

<?php
          $sno = $row['restaurantid'];

         // $sno2 = $row['foodid'];
          
              $getr= "SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM res_reviews WHERE reviewrid ='$sno'";
    $result = mysqli_query($db, $getr);
    $row2 = mysqli_fetch_array($result);

    $showr = "SELECT review, rating, rrusername, submitdate  FROM res_reviews WHERE reviewrid = '$sno'  ORDER BY submitdate DESC";
$result2 = mysqli_query($db, $showr);
$row3 = mysqli_fetch_array($result2);

    ?>
          
          <div class="col-md-3 mt-3">
            <div class="card">
            
            <div class="card-body">
            <h5 class="card-title" id="rname"><?php echo $row['restaurantname']; ?></h5>
            <p class="card-text" id="rname"><?php echo $row['location']; ?></p>
            
            <p class="card-text2" id="rlocation"><i class="fas fa-star"></i><b><?php echo sprintf('%0.1f',$row2['overall_rating']).'/5.0' .' '.'('.$row2['total_reviews'].'+'.')'
            ; ?></b></p>

            <!-- image fetch -->
              <?php 
          // Include the database configuration file  
           require_once 'dbConfig.php'; 

           $queryy = "SELECT image, imageid, resimageid, restaurantname from restaurant, images where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]'";
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

          
       
        <?php
         echo '
           <a class="cbtnn1" href="RateReviewRes.php?resid='. $sno .'">Review Here</a>
           <a class="cbtnn2" href="ViewReviewsRes.php?resid='. $sno .'"> All Reviews</a>
           <a class="cbtnn3" href="RestaurantInfo.php?resid='. $sno .'">Details</a>
           
           ';
           ?>

  
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