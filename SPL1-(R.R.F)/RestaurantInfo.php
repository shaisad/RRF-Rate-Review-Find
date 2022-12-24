<?php
session_start();
?> 
<?php
$irestaurantname = $_SESSION['restaurantname']; 
$foodname = $_SESSION['foodname'];
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

    <title>Restaurant's Info Page</title>
</head>

<style>

body{
    background-color: rgb(240, 221, 136);
    overflow-x: hidden;
}

.rrflogo {
    width: 200px;
    position: relative;
    bottom: 100px;
    /* padding-bottom: 20px;
    margin-bottom: 40px; */
}

 .foodcard {
    margin-bottom: 40px;
    max-height: 218x;
    }  


.foodimg{
    width: 325px;
    height: 325px;
    object-fit: cover;
}



.restname{
    color: rgb(80, 31, 19);
    text-align: left;
    position: relative;
    left: 470px;
}



.handrice{
    width: 60px;
    position: relative;
    left: 400px;
    top: 65px;
}


.btnn {
  border: none;
  outline: none;
  padding: 8px 8px;
  cursor: pointer;
  color: rgb(80, 31, 19);
  position: relative;
  left: 125px;
  top: 10px;
  border-radius: 10px;
}


.btnn:hover {
  background-color: rgb(155, 113, 58) ;
  color: white;
}


.btnn.show {
  background-color: #666;
  color: white;
}


img {
    width: 50px;
    top: 300px;
    left: 100px;
}

.cardbtn {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: rgb(80, 31, 19);
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.cardbtn:hover
{
  opacity: 0.7;
}

.cardfix {
  position: relative;
  left: 200px;
  width: 80%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 grey;
  transform: translate3D(0,-1px,0) scale(1.03);
} 

</style>

<body>

    <script>
      document.getElementById("restnameresult").innerHTML=localStorage.getItem("rnamevalue");
      document.getElementById("restlocationresult").innerHTML=localStorage.getItem("rlocationvalue");
      document.getElementById("restimageresult").innerHTML=localStorage.getItem("rimagevalue");
    </script>


    <div class="logo">

        <p>
            <img class="handrice" src="handrice.png" alt="logo">

            <h1 class="restname"><?php echo $_SESSION['restaurantname'];?></h1>
            <h4 class="restlocation"><span id="restlocationresult"></span></h1>


                <span id=restimageresult></span>
                 
            <img class="rrflogo" src="cover.png" alt="logo">
        </p>

    </div>

    
   

      

<!-- card -->

<div class="cardfix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'dbConfig.php';

      $query = "SELECT * FROM food_new";
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
            <p class="card-text" id="rlocation"><?php echo $row['price']; ?></p>
         
            <!-- image fetch -->
              <?php 
          // Include the database configuration file  
           require_once 'dbConfig.php'; 

           $queryy = "SELECT image from foodimage";
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