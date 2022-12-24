<?php
session_start();
?> 
<?php
$irestaurantname = $_SESSION['restaurantname']; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

.card{
    background-color:rgb(240, 221, 136);;

}

.foodimg{
    width: 325px;
    height: 325px;
    object-fit: cover;
}

.card-body{
    position: relative;
    right: 100px;
    background-color: aliceblue;
    width: 1023px;
    overflow-y: hidden;
}

.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
    position: relative;
    bottom: 50px;
    left: 80px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

.cardbtn a {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 9px;
  margin-right: 10px;
  color: white;
  background-color: rgb(80, 31, 19);
  text-align: center;
  cursor: pointer;
  width: 200px;
  font-size: 18px;
  position: relative;
  right: 170px;
  top: 5px;
}

.cardbtn a:hover
{
  opacity: 0.7;
}

.restname{
    color: rgb(80, 31, 19);
    text-align: left;
    position: relative;
    left: 470px;
}

.cardi{
    position: relative;
    bottom: 50px;

}

.handrice{
    width: 60px;
    position: relative;
    left: 400px;
    top: 65px;
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

            <h1 class="restname"><span id="restnameresult"></span></h1>
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

      $query = "SELECT * FROM restaurant where status=1";
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
            <h5 class="card-title"><?php echo $row['foodname']; ?></h5>
            <p class="card-text"><?php echo $row['subject']; ?></p>
            <p class="card-text"><?php echo $row['price']; ?></p>
         
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
                 <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top"/>
                 
              <?php
            }
           }
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