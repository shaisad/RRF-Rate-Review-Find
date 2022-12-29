<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
   rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
   integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
   crossorigin="anonymous"
  />
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <title>RRF Filter By Price Range</title>
</head>

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
.headingall{
  position: relative;
  left: 120px;
  top : 30px;
  font-size: 25px;
  color: rgb(80, 31, 19);
  font-family: 'Times New Roman', Times, serif;
}


.cardifix{
  height: 400px;
  position: relative;
  left: 200px;
  width: 80%;
  cursor : pointer;
}

.cardifix .card {
  height: 410px;
  position: relative;
  right: 100px;
  bottom: 50px;
}

.cardifix img {
  width: 180px;
  height: 120px;
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


.wholefix{
  position: relative;
  top: 40px;
}

.rrflogo{
  height:80px;

}





</style>

<body>


<div class="logo">

        
<img class="rrflogo" src="cover.png" alt="logo">
            

    </div>



    <?php

    require 'dbConfig.php'; 
  
    $sort_option = "";
    if(isset($_GET['sort_numeric']))
    {
        if($_GET['sort_numeric'] == "low-high"){
            $sort_option = "ASC";
        }elseif($_GET['sort_numeric'] == "high-low"){
            $sort_option = "DESC";
        }
    }
  
    
                                  ?>
                                  <div class="wholefix">
                                  <p class ="headingall"> All food items sorted from <?php echo "$_GET[sort_numeric]";?></p>
                                  <div class="cardifix">
                                 <div class="container py-5">
                                  <div class="row mt-3">
                                     <?php 
                                    require 'dbConfig.php';
                                    // $sno = $_GET['resid'];
                                    $query = "SELECT * FROM food_new ORDER BY price $sort_option";
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
        <p class="card-text" id="rlocation"><?php echo '৳'. $row['price']; ?></p>
        <p class="card-text2" id="rlocation"><i class="fas fa-star"></i><b><?php echo sprintf('%0.1f',$row2['overall_rating']).'/5.0' .' '.'('.$row2['total_reviews'].'+'.')'
        ; ?></b></p>

                                        
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
                                    else{
                                      ?>      
                                      <script>alert("Error! Price sorting field must be filled!")</script>
                                      <?php
                                    
                                    }
                              
                                    
  
  ?>
  
                                  </div>
</body>
</html>