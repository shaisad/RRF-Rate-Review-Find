<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!-- Bootstrap CSS -->

<link href="/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    <title>RRF Restaurant Home Page</title>
    



<style>

@import url("https://fonts.googleapis.com/css??family=Poppins:wght@400;500;600;700&display=swap");


body{
    background-color: rgb(240, 221, 136);
    overflow-x: hidden;
}

 .search{
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
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
    font-family: 'Times New Roman', Times, serif;
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


img {
    width: 180px;
    height: 145px;
    top: 300px;
    left: 100px;
}
.logo .rrflogo{
  width: 180px;
  height: 80px;
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
  font-family: 'Times New Roman', Times, serif;
}

.sidebar a:hover {
  color: gray;
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
  font-family: 'Times New Roman', Times, serif;
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

.heading{
  position: relative;
  left: 220px;
  top : 70px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
}
.heading11{
  position: relative;
  left: 220px;
  top : 80px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
}

.heading1{
  position: relative;
  left: 220px;
  top : 65px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  animation-name: example;
  animation-duration: 3s;
  animation-iteration-count: 1;
  font-family: 'Times New Roman', Times, serif;

}

@keyframes example {
  0%   { left:0px; top:30px;}
  15%  { left:200px; top:30px;}
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
.cbtnn222 {
  border: none;
  outline: none;
  padding: 8px 22px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration : none;
  left: 6px;
  top: 20px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
}


.cbtnn222 a:hover {
  opacity: 0.7; 
  text-decoration : none;
}


.cbtnn11 {
  border: none;
  outline: none;
  padding: 8px 8px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration : none;
  top: 10px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
}


.cbtnn11:hover {
  opacity: 0.7; 
  text-decoration : none;
}

.cbtnn22 {
  border: none;
  outline: none;
  padding: 8px 8px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration : none;
  left: 6px;
  top: 10px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
}


.cbtnn22 a:hover {
  opacity: 0.7; 
  text-decoration : none;
}

.cardfix {
  position: relative;
  left: 200px;
  width: 80%;
  cursor : pointer;
  top: 25px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 grey;
  transform: translate3D(0,-1px,0) scale(1.03);
} 

.card{
  height: 335px;
}
.cardfix{
  height: 360px;
  position: relative;
  top: 20px;
}
.card-body .card-text i{
  color: rgba(248, 197, 70, 0.964);
}

.ffix{
  position: relative;
  
}
</style>
</head>


<body>

    
    
     <div class="sidebar">

    <div class="logo">

        <img class="rrflogo" src="image/navbarlogo.png" alt="logo">

    </div>
        <a href="restaurant/restaurantprofile.php"><i class="fa fa-fw fa-user"></i>Restaurant's Profile</a>
        <a href="restaurant/restaurantemailresetpassword.html"><i class="fa fa-fw fa-key"></i>Reset Password</a>
        <a href="restaurant/restaurantlogout.php"><i class="fa fa-fw fa-sign-out"></i>Log Out</a>
      </div> 

  <div class="ffix"> 
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

       
<!-- <button class="btnn show" onclick="window.location.href='showAll.php';"> Show all</button>
        <button class="btnn" onclick="window.location.href='topRated.php';"> Top Rated</button>
        <button class="btnn" onclick="window.location.href='checkRange.php';"> Price Range</button>
        <button class="btnn" onclick="window.location.href='checkLocation.php';"> Location</button>
        <button class="btnn" onclick="window.location.href='checkCuisine.php';">Cuisine</button>
        <button class="btnn" onclick="window.location.href='checkCategory.php';">Food Category</button>
        <button class="btnn" onclick="window.location.href='checkSpice.php';">Spiciness</button> -->
        
    </div>
    <p class = heading1><b>Welcome, <?php  echo $_SESSION['restaurantname']; ?>!</b></p>

    <p class = heading11> Your restaurant </p>
    <!-- card -->
   <div class="cardfix">
   <div class="container py-2">
    <div class="row mt-3">
       <?php 
      require 'config/dbConfig.php';

      $query = "SELECT * FROM restaurant where status=1 and restaurantname = '$_SESSION[restaurantname]'";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          <?php
          $sno = $row['restaurantid'];
          $getr= "SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM res_reviews WHERE reviewrid ='$sno'";
          $result = mysqli_query($db, $getr);
          $row2 = mysqli_fetch_array($result);
      
          $showr = "SELECT review, rating, rrusername, submitdate  FROM res_reviews WHERE reviewrid = '$sno'  ORDER BY submitdate DESC";
      $result2 = mysqli_query($db, $showr);
      $row3 = mysqli_fetch_array($result2);
      ?>
          
          <div class="col-md-3 mt-3">
            <div class="cardifix">
            <div class="card">

          <div class="card-body">
            <h5 class="card-title"><?php echo $row['restaurantname']; ?></h5>
            <p class="card-text"><?php echo $row['location']; ?></p>
            <p class="card-text" id="rlocation"><i class="fas fa-star"></i><b><?php echo sprintf('%0.1f',$row2['overall_rating']).'/5.0' .' '.'('.$row2['total_reviews'].'+'.')'
            ; ?></b></p>
         
            <!-- image fetch -->
              <?php 
          // Include the database configuration file  
           require_once 'config/dbConfig.php'; 

           $queryy = "SELECT image, imageid,resimageid from images, restaurant where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$_SESSION[restaurantname]'";
           $queryy_run = mysqli_query($db, $queryy);
           $check_userr = mysqli_num_rows($queryy_run) > 0;

           if($check_userr){
            while($row = mysqli_fetch_assoc($queryy_run)){
              ?>
                 <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top"/>
                 
              <?php
            }
           }
        ?>
        <?php
        echo '
           <a class="cbtnn1" href="customer/ViewReviewsRes.php?resid='. $sno .'">All Reviews</a>
           <a class="cbtnn222" href="restaurant/restaurantmenu.php?resid='. $sno .'">Menu </a>';
      ?>

          </div>
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
   <div class="container py-2">
    <div class="row mt-3">
       <?php 
      require 'config/dbConfig.php';
     
      $query = "SELECT * FROM restaurant where status=1";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          <?php
      $sno = $row['restaurantid'];
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
            <h5 class="card-title"><?php echo $row['restaurantname']; ?></h5>
            <p class="card-text"><?php echo $row['location']; ?></p>
            <p class="card-text" id="rlocation"><i class="fas fa-star"></i><b><?php echo sprintf('%0.1f',$row2['overall_rating']).'/5.0' .' '.'('.$row2['total_reviews'].'+'.')'
            ; ?></b></p>
            <!-- image fetch -->
              <?php 
          // Include the database configuration file  
           require_once 'config/dbConfig.php'; 

           $queryy = "SELECT image, imageid,resimageid from images, restaurant where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]'";
           $queryy_run = mysqli_query($db, $queryy);
           $check_userr = mysqli_num_rows($queryy_run) > 0;

           if($check_userr){
            while($row = mysqli_fetch_assoc($queryy_run)){
              ?>
                 <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top"/>
                 
              <?php
            }
           }
        ?>

         <?php
        echo '
           <a class="cbtnn1" href="customer/ViewReviewsRes.php?resid='. $sno .'">All Reviews</a>
           <a class="cbtnn2" href="customer/viewrestaurantinfo.php?resid='. $sno .'">See Details </a>';
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
   
    </div>
    
</body>


</html>



