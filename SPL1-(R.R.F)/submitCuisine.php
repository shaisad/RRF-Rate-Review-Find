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
  
    <title>RRF Filter By Cuisine</title>
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
  position: relative;
  top: 50px;
  right: 20px;
}


.heading{
  position: relative;
  left: 200px;
  top : 80px;
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
.alert{
  position: relative;
  top: 40px;
  right: 10px;
}
.rrflogo{
  height:80px;

}
.fix{
  position: relative;
  bottom: 50;
}
.card-body img{
  width:200px;
}



</style>

<body>

<div class="logo">

        
<img class="rrflogo" src="cover.png" alt="logo">
            

    </div>

    

    <?php

    require 'dbConfig.php'; 

  //   if(!empty($_POST['check_list'])) {
  //     foreach($_POST['check_list'] as $check) {
  //             //echoes the value set in the HTML form for each checked checkbox.
  //                          //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
  //                          //in your case, it would echo whatever $row['Report ID'] is equivalent to.
  //     }
  // }
    
    if(isset($_GET['cuisine']))
    {
    ?> <p class = heading> All restaurants</p><?php
      foreach($_GET['cuisine'] as $check) {
    
    
  
    
                                  ?>
                                  </div>
                                  </div>
                                  </div>
                                  
<div class="fix">
<!-- card -->
<div class="cardfix">
<div class="container py-2">
<div class="row mt-3">
   <?php 
  require 'dbConfig.php';

  $query = "select * from restaurant where restaurant.status=1 and cuisine = '$check'";
  $query_run = mysqli_query($db, $query);
  

  if (mysqli_num_rows($query_run) > 0) {
    $row_cnt = $query_run->num_rows;

    
    echo "<div class='alert alert-success mt-3 text-center' role='alert'>$row_cnt restaurant(s) of $check cuisine found ! </div>";
  
  
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
       require_once 'dbConfig.php'; 

       $queryy = "SELECT image, imageid,resimageid, cuisine from images, restaurant where images.imageid=restaurant.resimageid and restaurant.restaurantname= '$row[restaurantname]'";
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
      </div>                        
                                      
                                      
                              
                                
                                        
                              
                                        <?php
                                      }
                                    }
                                    else {
                                      echo "
                                        <div class='alert alert-danger mt-3 text-center' role='alert'>
                                            No restaurant of $check cuisine found!
                                        </div>
                                        ";
                                    
                                    }
                              
                                  }
                                  
                                }
                                else{
                                  ?>      
                                  <script>alert("Error! Cuisine field must be filled!")</script>
                                  <?php
                                
                                }
                                    
                                    
  
  ?>
  

</body>
</html>