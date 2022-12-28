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

    <title>RRF Top Rated Restaurants & Food Items</title>
    



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
  padding: 4px 4px;
  cursor: pointer;
  color: white;
  position: relative;
  text-decoration : none;
  top: 20px;
  border-radius: 5px;
  background-color: rgb(80, 31, 19) ;
  right: 2px;
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

.cbtnn3 {
      background-color:rgb(80, 31, 19);
      color: white;
      padding: 4px 80px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
      text-decoration : none;
      position: relative;
      left: 8px;
      top: 30px;
      outline: none;   
}


.cbtnn3 a:hover {
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
  height: 330px;
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

    
     

    <div class="logo">

        <img class="rrflogo" src="cover.png" alt="logo">

    

        
      

  
   
       
        
    
   
    <p class = heading> Top-rated restaurants </p>

    <!-- card -->
   <div class="cardfix">
   <div class="container py-5">
    <div class="row mt-3">
       <?php 
      require 'dbConfig.php';

      $query = "SELECT restaurantname, location, reviewrid, restaurantid, avg(rating) as overall_rating FROM restaurant, res_reviews where 
      res_reviews.reviewrid = restaurant.restaurantid and restaurant.status=1 ";
      
//       SELECT ROWNUM as RANK, last_name, salary
// FROM (SELECT last_name, salary
// FROM employees
// ORDER BY salary DESC)
// WHERE ROWNUM <= 5;

$i = 0;

      
      $query_run = mysqli_query($db, $query);
      
      $i = mysqli_num_rows($query_run) > 0;

      
      
      if($i)
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

        
<?php
        echo '
           <a class="cbtnn1" href="RateReviewRes.php?resid='. $sno .'">Review Here</a>
           <a class="cbtnn2" href="ViewReviewsRes.php?resid='. $sno .'">See Reviews</a>
           <a class="cbtnn3" href="RestaurantInfo.php?resid='. $sno .'">Details</a>
           
           ';
           ?>

        
          </div>
          </div>
          </div>

          <?php
        }
        
        if ($i= 3){
          return false;
        }
        $i++;

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
      require 'dbConfig.php';
      // $sno = $_GET['resid'];
      $query = "SELECT foodname, price, subject, reviewfid, foodid, avg(rating) as overall_rating FROM food_new, food_reviews where 
      food_reviews.reviewfid = food_new.foodid and rating between 4.70 and 5.00";
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
            <p class="card-text" id="rlocation"><?php echo $row['frestaurantname']; ?></p>
            <p class="card-text" id="rlocation"><i><?php echo $row['subject']; ?></p></i>
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

          
        
        <?php
        echo '
           <a class="cbtnn1" href="RateReviewFood.php?fid='. $sno2 .'">Review Here</a>
           <a class="cbtnn2" href="ViewReviewsFood.php?fid='. $sno2 .'">See Reviews</a>
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
