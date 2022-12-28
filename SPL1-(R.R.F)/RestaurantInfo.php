 
<?php
session_start();
?>
<?php

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
  padding: 8px 8px;
  cursor: pointer;
  color: white;
  position: relative;
  
  top: 10px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
}


.cbtnn1:hover {
  opacity: 0.7; ;
}

.cbtnn2 {
  border: none;
  outline: none;
  padding: 8px 8px;
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
  height: 380px;
  position: relative;
  left: 50px;
  width: 80%;
  cursor : pointer;
  bottom: 220px;
}

.cardfix .card {
  height: 335px;
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

</style>

<body>

        <p>
              <img class="handrice" src="handrice.png" alt="logo"> 
            <?php

            require 'dbConfig.php';
           // $category = $_POST['category'];
      $sno = $_GET['resid'];
      $query = "SELECT restaurantname, location, restaurantid FROM restaurant where status = 1 and restaurantid = $sno";
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
           
            
        </p>

  

    
   <!-- card -->
<p class = heading><u> Menu </p></u> 
<?php if ($_GET['category'] == 'Pizza' )?>{
  <p class = heading> Pizza </p>
<div class="cardfix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'dbConfig.php';

      $query = "SELECT * FROM food_new, restaurant where frestaurantname = restaurantname and food_res_id = $sno";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          
          <div class="col-md-3 mt-3">
            <div class="card">
            
          <div class="card-body">
            <h5 class="card-title" id="rname"><?php echo $row['foodname']; ?></h5>
            <p class="card-text" id="rlocation"><?php echo $row['subject']; ?></p>
            <p class="card-text" id="rlocation"><?php echo '৳'. $row['price']; ?></p>
         
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

          
        <button class="cbtnn1" onclick="window.location.href='reviewsection.php';">Write a review</button>
        
        

  
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