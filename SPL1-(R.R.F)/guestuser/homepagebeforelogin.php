<?php
error_reporting(0);
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
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>


    <title>RRF Home Page</title>
    



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
}

.search-box {
    height: 50px;
    width: 600px;
    color: #fff;
    position: relative;
    left: 100px;
    bottom: 105px;
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
    left: 610px;
    bottom: 50px;
    height: 50px;
    width: 70px;
    color: rgb(80, 31, 19) ;
    border-radius: 4px;
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
  left: 120px;
  border-radius: 10px;
  bottom: 90px;
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
  padding: 4px 4px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration : none;
  top: 20px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
  left: 10px;
}


.cbtnn1:hover {
  opacity: 0.7; 
  text-decoration : none;
}

.cbtnn2 {
  border: none;
  outline: none;
  padding: 4px 4px;
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

.cbtnnd {
  border: none;
  outline: none;
  padding: 4px 4px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration : none;
  left: 25px;
  top: 20px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
}


.cbtnnd a:hover {
  opacity: 0.7; 
  text-decoration : none;
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
  left: 2px;
  bottom : 120px;
  width: 90%;
  cursor : pointer;
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 grey;
  transform: translate3D(0,-1px,0) scale(1.03);
}

.card{
  height: 335px;
}

.cardifix{
  height: 440px;
  position: relative;
  left: 2px;
  bottom : 140px;
  width: 90%;
  cursor : pointer;
}

.cardifix .card {
  height: 410px;
}

.cardifix img {
  width: 180px;
  height: 120px;
}

.heading{
  position: relative;
  left: 20px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  bottom:55px;
  font-family: 'Times New Roman', Times, serif;
}
.headingnan{
  position: relative;
  left: 20px;
  bottom: 40px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
}
.headingitalian{
  position: relative;
  left: 20px;
  bottom: 100px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
}
.headingpizza{
  position: relative;
  left: 20px;
  bottom: 30px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
}


.headingbengali{
  position: relative;
  left: 20px;
  bottom: 60px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
}
.headingburger{
  position: relative;
  left: 20px;
  bottom: 40px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
}


.headingfav{
  position: relative;
  left: 220px;
  top : 10px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
}

.headingall{
  position: relative;
  left: 30px;
  bottom: 70px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
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



</style>
</head>


<body>

    
    
     <div class="sidebar">

    <div class="logo">

        <img class="rrflogo" src="image/navbarlogo.png" alt="logo">

    

        <?php
        require 'config/dbConfig.php';
    $sno = $_GET['resid'];
    ?>
    <div class="container mt-5">
        <?php
        echo '<form action = "customer/searchresult.php?resid = '.$sno.'" method = "post">
            <div class="search">
              <div class="search-box"> 
                 <input type="text" class="form-control" name="live_search" id="live_search" autocomplete="off" placeholder="Search for food, restaurant, location...">
                    <div class="search-btn">
                    <input type ="submit" name = "submit" value="Search" class="btn btn-info btn-lg rounded-0">
                    </div>
              </div>
        
         <div id="search_result"></div>
         </form>';?>
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
                            $('#search_result').css('display', 'block').css('color', 'black').css('background-color', 'white').css('width', '600px').css('position', 'relative').css('left', '100px').css('bottom', '10px').css('text-decoration', 'none');
                            $("#live_search").focusout(function () {
                                $('#search_result').css('display', 'none').css('color', 'black').css('background-color', 'white').css('width', '600px').css('position', 'relative').css('left', '100px').css('bottom', '10px').css('text-decoration', 'none');
                            });
                            $("#live_search").focusin(function () {
                                $('#search_result').css('display', 'block').css('color', 'black').css('background-color', 'white').css('width', '600px').css('position', 'relative').css('left', '100px').css('bottom', '10px').css('text-decoration', 'none');
                            });
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
            $(document).on("click", "a", function () {
      $("#live_search").val($(this).text());
      $("#search_result").html("");
    });
  });
        
    </script>
       
<button class="btnn show" onclick="window.location.href='customer/showAll.php';"> Show All</button>
        <button class="btnn" onclick="window.location.href='customer/topRated.php';"> Top Rated</button>
        <button class="btnn" onclick="window.location.href='customer/checkRange.php';"> Price Range</button>
        <button class="btnn" onclick="window.location.href='customer/checkLocation.php';"> Location</button>
        <button class="btnn" onclick="window.location.href='customer/checkCuisine.php';">Cuisine</button>
        <button class="btnn" onclick="window.location.href='customer/checkCategory.php';">Food Category</button>
        <button class="btnn" onclick="window.location.href='customer/checkSpice.php';">Spiciness</button>
        

        <p class = heading> Top-rated restaurants </p>

    <!-- card -->
   <div class="cardfix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'config/dbConfig.php';

      $query = "select restaurantname, location, reviewrid, restaurantid, avg(rating) as overall_rating from restaurant, res_reviews where 
      res_reviews.reviewrid = restaurant.restaurantid and restaurant.status=1 group by restaurantname order by overall_rating desc LIMIT 4";
      




      
      $query_run = mysqli_query($db, $query);
      
      $i = mysqli_num_rows($query_run) > 0;

      
      
      if($i)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?><?php
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
        <h5 class="card-title" id="rname"><?php echo $row['restaurantname']; ?></h5>
        <p class="card-text" id="rlocation"><?php echo $row['location']; ?></p>
        <p class="card-texti" id="rlocation"><i class="fas fa-star"></i><b><?php echo sprintf('%0.1f',$row2['overall_rating']).'/5.0' .' '.'('.$row2['total_reviews'].'+'.')'
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
                 <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top" id="rimage"/>
                 
              <?php
            }
           }
           ?>

        
<?php
        echo '
           
           <a class="cbtnn2" href="customer/ViewReviewsRes.php?resid='. $sno .'">See Reviews</a>
           <a class="cbtnn1" href="customer/viewrestaurantinfo.php?resid='. $sno .'">Details</a>
           
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
    <p class = heading> Top-rated food items</p>
    <div class="cardifix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'config/dbConfig.php';
      // $sno = $_GET['resid'];
      $query = "SELECT foodname, frestaurantname, price, subject, reviewfid, foodid, avg(rating) as overall_rating FROM food_new, food_reviews where 
      food_reviews.reviewfid = food_new.foodid group by foodname order by overall_rating desc LIMIT 4";
      $query_run = mysqli_query($db, $query);
      $check_user = mysqli_num_rows($query_run) > 0;
      
      if($check_user)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          <?php
          $sno2 = $row['foodid'];
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
           require_once 'config/dbConfig.php'; 

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

          
        
        <?php
        echo '
           <a class="cbtnn2" href="customer/ViewReviewsFood.php?fid='. $sno2 .'">See Reviews</a>
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
        <p class = heading> All restaurants </p>

<!-- card -->
<div class="cardfix">
<div class="container py-5">
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
      ?><?php
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
        <h5 class="card-title" id="rname"><?php echo $row['restaurantname']; ?></h5>
        <p class="card-text" id="rlocation"><?php echo $row['location']; ?></p>
        <p class="card-texti" id="rlocation"><i class="fas fa-star"></i><b><?php echo sprintf('%0.1f',$row2['overall_rating']).'/5.0' .' '.'('.$row2['total_reviews'].'+'.')'
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
             <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top" id="rimage"/>
             
          <?php
        }
       }
       ?>

    
    <!-- <button class="cbtnn1" onclick="window.location.href='reviewsection.php'">All Reviews</button>
    <button class="cbtnn2" onclick="window.location.href='RestaurantInfo.php?resid='. $sno .''">See Details</button> -->
    <?php
    echo '
       <a class="cbtnn1" href="customer/ViewReviewsRes.php?resid='. $sno .'">See Reviews</a>
       ?>
    <!-- <button class="cbtnn2" id="btn2" onclick="passvalues();">
      <a href="RestaurantInfo.php"> See Details </a>
      </button> -->
    
    

    <!-- <form action="viewRestaurantInfo.php">
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

    
        
   
<p class = headingall> All food items</p>
    <div class="cardifix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'config/dbConfig.php';
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
          $sno = $row['foodid'];
          $sno2 = $row['foodid'];
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
            <p class="card-text" id="rlocation"><?php echo '৳'. $row['price']; ?></p>
            <p class="card-text2" id="rlocation"><i class="fas fa-star"></i><b><?php echo sprintf('%0.1f',$row2['overall_rating']).'/5.0' .' '.'('.$row2['total_reviews'].'+'.')'
            ; ?></b></p>

            <!-- image fetch -->
              <?php 
          // Include the database configuration file  
           require_once 'config/dbConfig.php'; 

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

          
<?php
       echo '
       <a class="cbtnn1" align = "centre " href="customer/ViewReviewsFood.php?fid='. $sno2 .'">See Reviews</a>
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
