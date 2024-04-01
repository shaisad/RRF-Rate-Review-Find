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
  
    <title>RRF Filter By Category</title>
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
    height: 145px;
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
  left: 100px;
  width: 80%;
  cursor : pointer;
  top: 30px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 grey;
  transform: translate3D(0,-1px,0) scale(1.03);
} 

.card{
  height: 440px;
  position: relative;
  top: 40px;
}


.heading{
  position: relative;
  left: 120px;
  top : 200px;
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
  bottom: 20px;
}
.card .card-body .card-text1 i{
    bottom: 50px;
}
.rrflogo{
  height:80px;

}
.wholefix{
  left : 100px;
}






</style>

<body>
<div class = "wholefix">
<div class="logo">

        
<img class="rrflogo" src="image/navbarlogo.png" alt="logo">
            

    </div>

    <?php

    require 'config/dbConfig.php'; 

  //   if(!empty($_POST['check_list'])) {
  //     foreach($_POST['check_list'] as $check) {
  //             //echoes the value set in the HTML form for each checked checkbox.
  //                          //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
  //                          //in your case, it would echo whatever $row['Report ID'] is equivalent to.
  //     }
  // }
    
    if(isset($_GET['category']))
    {
    ?> <p class = heading> All food items </p><?php
      foreach($_GET['category'] as $check) {
    
    
  
    
                                  ?>
                                  </div>
                                  </div>
                                  </div>
                                  

<!-- card -->
<div class="cardfix">
<div class="container py-2">
<div class="row mt-3">
   <?php 
  require 'config/dbConfig.php';

  $query = "SELECT * FROM food_new where category = '$check'";
      $query_run = mysqli_query($db, $query);
      

  if (mysqli_num_rows($query_run) > 0) {
    $row_cnt = $query_run->num_rows;

    
    echo "<div class='alert alert-success mt-3 text-center' role='alert'>$row_cnt food item(s) of $check category found ! </div>";
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
           <a class="cbtnn1" href="customer/ratereviewfood.php?fid='. $sno2 .'">Review Here</a>
           <a class="cbtnn2" href="customer/ViewReviewsFood.php?fid='. $sno2 .'">See Reviews</a>
        ';
           ?>
        
        

  
          </div>
          </div>
          </div>
                                  
                                      
                                      
                              
                                
                                        
                              
                                        <?php
                                      }
                                    }
                                    else {
                                      echo "
                                        <div class='alert alert-danger mt-3 text-center' role='alert'>
                                            No restaurant of $check category found!
                                        </div>
                                        ";
                                    
                                    }
                              
                                  }
                                  
                                }
                                else{
                                  ?>      
                                  <script>alert("Error! Category field must be filled!")</script>
                                  <?php
                                
                                }
                                    
                                    
  
  ?>
  
                              </div>
</body>
</html>