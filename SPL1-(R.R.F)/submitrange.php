<!-- $sort_option = "";
                                if(isset($_GET['sort_numeric']))
                                {
                                    if($_GET['sort_numeric'] == "low-high"){
                                        $sort_option = "ASC";
                                    }elseif($_GET['sort_numeric'] == "high-low"){
                                        $sort_option = "DESC";
                                    }
                                } -->
                                

<?php



  
  $price = $_POST['price'];
  
  
 // $frestaurantname = $_SESSION['restaurantname'];
 // $_SESSION['foodname'] = $foodname;
 

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

//   $query = "SELECT * FROM food_new ORDER BY price $sort_option";
//                                 $query_run = mysqli_query($con, $query);


  
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
                            
                                      
                                    
                                    <?php
                                    echo '
                                       <a class="cbtnn1" href="RateReviewFood.php?fid='. $sno2 .'">Review Here</a>
                                       <a class="cbtnn2" href="ViewReviews.php?fid='. $sno2 .'">See Reviews</a>
                                    ';
                                       ?>
                                    
                                    
                            
                              
                                      </div>
                                      </div>
                                      </div>
                            
                                      <?php
                                    }
                                  }
                                  else{
                                       echo "no";
                                  }
                            
                                  

?>
