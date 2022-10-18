<div class="container">
      <div class="row gy-3 my-3">

      <?php

      require  ;

      $query = "SELECT * FROM restaurant";
      $query_run = mysqli_query($connection, $query);
      $check_user = mysqli_num_rows($query_run) > 0;

      if($check_user){

        while($row = mysqli_fetch_assoc($query_run)){
             
            ?>
            <div class="col-sm-6 col-md-3">
            <div class="card"> 
             <img src="<?php echo $row['images']; ?>" width="255px" height="200px" alt="image">
             <div class="card-body">
                 <h5 class="card-title"><?php echo $row['restaurantname']; ?></h5>
                 <p class="card-text"><?php echo $row['location']; ?></p>
                 <a href="#" class="btn btn-primary">details</a>
             </div>
             </div>
       </div>
       <?php
    

        }
      }

      ?>
     
      </div>
      </div> 

        