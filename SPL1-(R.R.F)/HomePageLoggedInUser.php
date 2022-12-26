<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!-- Bootstrap CSS -->

<link href="/css/bootstrap.min.css" rel="stylesheet">

    <title>RRF Home Page</title>
    



<style>

@import url("https://fonts.googleapis.com/css??family=Poppins:wght@400;500;600;700&display=swap");


body{
    background-color: rgb(240, 221, 136);
    overflow-x: hidden;
}

 .search{
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    position: relative;
    left: 30px ;
    
}

.search-box input[type="text"]{
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    background: #fff;
    font-size: 18px;
    padding: 0 60px 0 20px;
}

.search-box {
    height: 50px;
    width: 600px;
    color: #fff;
    position: relative;
    left: 100px;
    bottom: 15px;
}


.result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }

.result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }

.result p:hover{
        background: #f2f2f2;
    }


.search-btn {
    position: relative;
    left: 550px;
    bottom: 35px;
    height: 50px;
    width: 70px;
    color: rgb(80, 31, 19) ;

}

.search-btn:hover {
    color: rgb(100, 91, 148);
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

.cbtnn1 {
  border: none;
  outline: none;
  padding: 8px 8px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration : none;
  top: 20px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
}


.cbtnn1:hover {
  opacity: 0.7; 
  text-decoration : none;
}

.cbtnn2 {
  border: none;
  outline: none;
  padding: 8px 8px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration : none;
  left: 6px;
  top: 20px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
}


.cbtnn2 a:hover {
  opacity: 0.7; 
  text-decoration : none;
}




img {
    width: 180px;
    top: 300px;
    left: 100px;
}

.sidebar {
  height: 100%;
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  background-color: rgb(241, 191, 114);
  
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: rgb(80, 31, 19);
  display: block;
  position: relative;
  top: 10px;
  left: 5px;
}

.updbn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: rgb(80, 31, 19);
  display: block;
  position: relative;
  top: 10px;
  left: 5px;
}

.sidebar a:hover {
  color: gray;
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

.cardfix {
  position: relative;
  left: 200px;
  width: 80%;
  cursor : pointer;
}

.card:hover {
  box-shadow: 0 8px 16px 0 grey;
  transform: translate3D(0,-1px,0) scale(1.03);
} 

.card{
  height: 300px;
}


.heading{
  position: relative;
  left: 220px;
  top : 70px;
  font-size: 25px;
  color: rgb(80, 31, 19);
}

.heading1{
  position: relative;
  left: 220px;
  top : 70px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  animation-name: example;
  animation-duration: 3s;
  animation-iteration-count: 1;

}

@keyframes example {
  0%   { left:0px; top:30px;}
  15%  { left:200px; top:30px;}
}

.cardifix{
  height: 400px;
  position: relative;
  left: 200px;
  width: 80%;
  cursor : pointer;
}

.cardifix .card {
  height: 350px;
}

.cardifix img {
  width: 180px;
  height: 120px;
}
 .dropbtn {
  background-color:rgb(80, 31, 19);
  color: white;
  padding: 16px;
  font-size: 22px;
  border: none;
  cursor: pointer;
  border-radius: 30px;
}
 .dropdown {
  position: relative;
  display: inline-block;
  left: 1100px;
  bottom: 40px;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color :rgb(80, 31, 19);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content a {
  color: white;
  padding: 12px 12px;
  text-decoration: none;
  display: block;
  
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
  color :rgb(80, 31, 19);
}


.dropdown:hover .dropdown-content {
  display: block;
}





</style>

</head>


<body>

    
     <div class="sidebar">

    <div class="logo">

        <img class="rrflogo" src="cover.png" alt="logo">

    </div>
        <a href="UserProfile.php"><i class="fa fa-fw fa-user"></i>My Profile</a>
        <a href="enter-useremail.html"><i class="fa fa-fw fa-key"></i>Reset Password</a>
  
  <!-- <div class="updbn">
        <select name="upbtn" onchange="location = this.value;">
          <option value="UserUpdateName.html">Update Name</option>
          <option value="UserUpdateEmail.html">Update Email</option>
        </select>
      </div> -->
        <a href="userlogout.php"><i class="fa fa-fw fa-sign-out"></i>Log Out</a>

        
      </div> 

  
    <div class="container mt-5">
        
            <div class="search">
              <div class="search-box"> 
                 <input type="text" class="form-control" name="live_search" id="live_search" autocomplete="off" placeholder="Search for food, restaurant, location...">
                    <div class="search-btn">
                       <i class="fa fa-search"></i> </div>
              </div>
        
         <div id="search_result"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'backend-search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#search_result').html(data);
                            $('#search_result').css('display', 'block').css('color', 'black').css('background-color', 'white').css('width', '600px').css('position', 'relative').css('left', '100px').css('bottom', '10px');
                            $("#live_search").focusout(function () {
                                $('#search_result').css('display', 'none').css('color', 'black').css('background-color', 'white').css('width', '600px').css('position', 'relative').css('left', '100px').css('bottom', '10px');
                            });
                            $("#live_search").focusin(function () {
                                $('#search_result').css('display', 'block').css('color', 'black').css('background-color', 'white').css('width', '600px').css('position', 'relative').css('left', '100px').css('bottom', '10px');
                            });
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
        });
    </script>

       
        <button class="btnn show" onclick="filterSelection('all')"> Show all</button>
        <button class="btnn" onclick="filterSelection('top rated')"> Top Rated</button>
        <button class="btnn" onclick="filterSelection('price')"> Price Range</button>
        <button class="btnn" onclick="filterSelection('location')"> Location</button>
        <button class="btnn" onclick="filterSelection('food category')"> Food Category</button>
        
    </div>
    <p class = heading1><b>Welcome, <?php  echo $_SESSION['username']; ?>!</b></p>

    <p class = heading> Restaurants Around You </p>

    <!-- card -->
   <div class="cardfix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'dbConfig.php';

      $query = "SELECT restaurantname, location, ulocation, restaurantid FROM restaurant, user where restaurant.status=1 and restaurant.location = user.ulocation and user.ulocation = '$_SESSION[ulocation]'";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?><?php
          $sno = $row['restaurantid'];
          ?>
          <div class="col-md-3 mt-3">
            <div class="card">
            
          <div class="card-body">
            <h5 class="card-title" id="rname"><?php echo $row['restaurantname']; ?></h5>
            <p class="card-text" id="rlocation"><?php echo $row['location']; ?></p>
         
            <!-- image fetch -->
              <?php 
          // Include the database configuration file  
           require_once 'dbConfig.php'; 

           $queryy = "SELECT image, imageid,resimageid from images, restaurant, user where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]' and restaurant.location = user.ulocation";
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

        
        <!-- <button class="cbtnn1" onclick="window.location.href='reviewsection.php'">All Reviews</button>
        <button class="cbtnn2" onclick="window.location.href='RestaurantInfo.php?resid='. $sno .''">See Details</button> -->
        <?php
        echo '
           <a class="cbtnn1" href="reviewsection.php">All Reviews</a>
           <a class="cbtnn2" href="RestaurantInfo.php?resid='. $sno .'">See Details</a>';
           ?>
        <!-- <button class="cbtnn2" id="btn2" onclick="passvalues();">
          <a href="RestaurantInfo.php"> See Details </a>
          </button> -->
        
        

        <!-- <form action="RestaurantInfo.php">

        <input type="submit" value="Show Details" onclick="passvalues();"/>

        </form> -->

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
    <p class = heading> All restaurants </p>

    <!-- card -->
   <div class="cardfix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'dbConfig.php';

      $query = "SELECT * FROM restaurant where status=1";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?><?php
          $sno = $row['restaurantid'];
          ?>
          <div class="col-md-3 mt-3">
            <div class="card">
            
          <div class="card-body">
            <h5 class="card-title" id="rname"><?php echo $row['restaurantname']; ?></h5>
            <p class="card-text" id="rlocation"><?php echo $row['location']; ?></p>
         
            <!-- image fetch -->
              <?php 
          // Include the database configuration file  
           require_once 'dbConfig.php'; 

           $queryy = "SELECT image, imageid,resimageid from images, restaurant where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]'";
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

        
        <!-- <button class="cbtnn1" onclick="window.location.href='reviewsection.php'">All Reviews</button>
        <button class="cbtnn2" onclick="window.location.href='RestaurantInfo.php?resid='. $sno .''">See Details</button> -->
        <?php
        echo '
           <a class="cbtnn1" href="RateReviewRes.php?resid='. $sno .'">All Reviews</a>
           <a class="cbtnn2" href="RestaurantInfo.php?resid='. $sno .'">See Details</a>';
           ?>
        <!-- <button class="cbtnn2" id="btn2" onclick="passvalues();">
          <a href="RestaurantInfo.php"> See Details </a>
          </button> -->
        
        

        <!-- <form action="RestaurantInfo.php">

        <input type="submit" value="Show Details" onclick="passvalues();"/>

        </form> -->

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
    <p class = heading> All food items</p>
    <div class="cardifix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'dbConfig.php';
      // $sno = $_GET['resid'];
      $query = "SELECT * FROM food_new";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          <?php
          $sno2 = $row['foodid'];
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

           $queryy = "SELECT image from foodimage, restaurant where foodname = '$row[foodname]' and foodimage.irestaurantname = restaurant.restaurantname and restaurant.status =1  ";
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

          
        <!-- <?php echo `<a href="RateReviewFood.php?fid='. $sno2 .'">Show all reviews</a>`?> -->
        <!-- <button class="cbtnn1" onclick="window.location.href='reviewsection.php';">Show all reviews</button> -->
        <?php
        echo '
           <a class="cbtnn1" href="RateReviewFood.php?fid='. $sno2 .'">Review here</a>
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
   
    <p class = heading> Pizza </p>

<!-- card -->
<div class="cardfix">
<div class="container py-5">
<div class="row mt-3">
   <?php 
  require 'dbConfig.php';

  $query = "select * from restaurant, food_new where restaurant.status=1 and food_new.category = 'Pizza' and food_new.food_res_id = restaurant.restaurantid";
  $query_run = mysqli_query($db, $query);
  $check_user = mysqli_num_rows($query_run) > 0;
  
  if($check_user)
  {
    while($row = mysqli_fetch_assoc($query_run))
    {
      ?><?php
      $sno = $row['restaurantid'];
      ?>
      <div class="col-md-3 mt-3">
        <div class="card">
        
      <div class="card-body">
        <h5 class="card-title" id="rname"><?php echo $row['restaurantname']; ?></h5>
        <p class="card-text" id="rlocation"><?php echo $row['location']; ?></p>
     
        <!-- image fetch -->
          <?php 
      // Include the database configuration file  
       require_once 'dbConfig.php'; 

       $queryy = "SELECT image, imageid,resimageid, category from images, restaurant, food_new where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]' and food_new.category = 'Pizza'";
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

    
    <!-- <button class="cbtnn1" onclick="window.location.href='reviewsection.php'">All Reviews</button>
    <button class="cbtnn2" onclick="window.location.href='RestaurantInfo.php?resid='. $sno .''">See Details</button> -->
    <?php
    echo '
       <a class="cbtnn1" href="reviewsection.php">All Reviews</a>
       <a class="cbtnn2" href="RestaurantInfo.php?resid='. $sno .'">See Details</a>';
       ?>
    <!-- <button class="cbtnn2" id="btn2" onclick="passvalues();">
      <a href="RestaurantInfo.php"> See Details </a>
      </button> -->
    
    

    <!-- <form action="RestaurantInfo.php">

    <input type="submit" value="Show Details" onclick="passvalues();"/>

    </form> -->

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
<p class = heading> Burger </p>

<!-- card -->
<div class="cardfix">
<div class="container py-5">
<div class="row mt-3">
   <?php 
  require 'dbConfig.php';

  $query = "select * from restaurant, food_new where restaurant.status=1 and food_new.category = 'Burger' and food_new.food_res_id = restaurant.restaurantid";
  $query_run = mysqli_query($db, $query);
  $check_user = mysqli_num_rows($query_run) > 0;
  
  if($check_user)
  {
    while($row = mysqli_fetch_assoc($query_run))
    {
      ?><?php
      $sno = $row['restaurantid'];
      ?>
      <div class="col-md-3 mt-3">
        <div class="card">
        
      <div class="card-body">
        <h5 class="card-title" id="rname"><?php echo $row['restaurantname']; ?></h5>
        <p class="card-text" id="rlocation"><?php echo $row['location']; ?></p>
     
        <!-- image fetch -->
          <?php 
      // Include the database configuration file  
       require_once 'dbConfig.php'; 

       $queryy = "SELECT image, imageid,resimageid, category from images, restaurant, food_new where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]' and food_new.category = 'Burger'";
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

    
    <!-- <button class="cbtnn1" onclick="window.location.href='reviewsection.php'">All Reviews</button>
    <button class="cbtnn2" onclick="window.location.href='RestaurantInfo.php?resid='. $sno .''">See Details</button> -->
    <?php
    echo '
       <a class="cbtnn1" href="reviewsection.php">All Reviews</a>
       <a class="cbtnn2" href="RestaurantInfo.php?resid='. $sno .'">See Details</a>';
       ?>
    <!-- <button class="cbtnn2" id="btn2" onclick="passvalues();">
      <a href="RestaurantInfo.php"> See Details </a>
      </button> -->
    
    

    <!-- <form action="RestaurantInfo.php">

    <input type="submit" value="Show Details" onclick="passvalues();"/>

    </form> -->

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
<p class = heading> Naan </p>

<!-- card -->
<div class="cardfix">
<div class="container py-5">
<div class="row mt-3">
   <?php 
  require 'dbConfig.php';

  $query = "select * from restaurant, food_new where restaurant.status=1 and food_new.category = 'Naan' and food_new.food_res_id = restaurant.restaurantid";
  $query_run = mysqli_query($db, $query);
  $check_user = mysqli_num_rows($query_run) > 0;
  
  if($check_user)
  {
    while($row = mysqli_fetch_assoc($query_run))
    {
      ?><?php
      $sno = $row['restaurantid'];
      ?>
      <div class="col-md-3 mt-3">
        <div class="card">
        
      <div class="card-body">
        <h5 class="card-title" id="rname"><?php echo $row['restaurantname']; ?></h5>
        <p class="card-text" id="rlocation"><?php echo $row['location']; ?></p>
     
        <!-- image fetch -->
          <?php 
      // Include the database configuration file  
       require_once 'dbConfig.php'; 

       $queryy = "SELECT image, imageid,resimageid, category from images, restaurant, food_new where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]' and food_new.category = 'Naan'";
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

    
    <!-- <button class="cbtnn1" onclick="window.location.href='reviewsection.php'">All Reviews</button>
    <button class="cbtnn2" onclick="window.location.href='RestaurantInfo.php?resid='. $sno .''">See Details</button> -->
    <?php
    echo '
       <a class="cbtnn1" href="reviewsection.php">All Reviews</a>
       <a class="cbtnn2" href="RestaurantInfo.php?resid='. $sno .'">See Details</a>';
       ?>
    <!-- <button class="cbtnn2" id="btn2" onclick="passvalues();">
      <a href="RestaurantInfo.php"> See Details </a>
      </button> -->
    
    

    <!-- <form action="RestaurantInfo.php">

    <input type="submit" value="Show Details" onclick="passvalues();"/>

    </form> -->

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
<p class = heading> Italian </p>

<!-- card -->
<div class="cardfix">
<div class="container py-5">
<div class="row mt-3">
   <?php 
  require 'dbConfig.php';

  $query = "select * from restaurant where restaurant.status=1 and restaurant.cuisine = 'Italian'";
  $query_run = mysqli_query($db, $query);
  $check_user = mysqli_num_rows($query_run) > 0;
  
  if($check_user)
  {
    while($row = mysqli_fetch_assoc($query_run))
    {
      ?><?php
      $sno = $row['restaurantid'];
      ?>
      <div class="col-md-3 mt-3">
        <div class="card">
        
      <div class="card-body">
        <h5 class="card-title" id="rname"><?php echo $row['restaurantname']; ?></h5>
        <p class="card-text" id="rlocation"><?php echo $row['location']; ?></p>
     
        <!-- image fetch -->
          <?php 
      // Include the database configuration file  
       require_once 'dbConfig.php'; 

       $queryy = "SELECT image, imageid,resimageid, cuisine from images, restaurant where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]' and restaurant.cuisine = 'Italian'";
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

    
    <!-- <button class="cbtnn1" onclick="window.location.href='reviewsection.php'">All Reviews</button>
    <button class="cbtnn2" onclick="window.location.href='RestaurantInfo.php?resid='. $sno .''">See Details</button> -->
    <?php
    echo '
       <a class="cbtnn1" href="reviewsection.php">All Reviews</a>
       <a class="cbtnn2" href="RestaurantInfo.php?resid='. $sno .'">See Details</a>';
       ?>
    <!-- <button class="cbtnn2" id="btn2" onclick="passvalues();">
      <a href="RestaurantInfo.php"> See Details </a>
      </button> -->
    
    

    <!-- <form action="RestaurantInfo.php">

    <input type="submit" value="Show Details" onclick="passvalues();"/>

    </form> -->

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

<p class = heading> Bengali </p>

<!-- card -->
<div class="cardfix">
<div class="container py-5">
<div class="row mt-3">
   <?php 
  require 'dbConfig.php';

  $query = "select * from restaurant where restaurant.status=1 and restaurant.cuisine = 'Bengali'";
  $query_run = mysqli_query($db, $query);
  $check_user = mysqli_num_rows($query_run) > 0;
  
  if($check_user)
  {
    while($row = mysqli_fetch_assoc($query_run))
    {
      ?><?php
      $sno = $row['restaurantid'];
      ?>
      <div class="col-md-3 mt-3">
        <div class="card">
        
      <div class="card-body">
        <h5 class="card-title" id="rname"><?php echo $row['restaurantname']; ?></h5>
        <p class="card-text" id="rlocation"><?php echo $row['location']; ?></p>
     
        <!-- image fetch -->
          <?php 
      // Include the database configuration file  
       require_once 'dbConfig.php'; 

       $queryy = "SELECT image, imageid,resimageid, cuisine from images, restaurant where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]' and restaurant.cuisine = 'Bengali'";
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

    
    <!-- <button class="cbtnn1" onclick="window.location.href='reviewsection.php'">All Reviews</button>
    <button class="cbtnn2" onclick="window.location.href='RestaurantInfo.php?resid='. $sno .''">See Details</button> -->
    <?php
    echo '
       <a class="cbtnn1" href="reviewsection.php">All Reviews</a>
       <a class="cbtnn2" href="RestaurantInfo.php?resid='. $sno .'">See Details</a>';
       ?>
    <!-- <button class="cbtnn2" id="btn2" onclick="passvalues();">
      <a href="RestaurantInfo.php"> See Details </a>
      </button> -->
    
    

    <!-- <form action="RestaurantInfo.php">

    <input type="submit" value="Show Details" onclick="passvalues();"/>

    </form> -->

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
