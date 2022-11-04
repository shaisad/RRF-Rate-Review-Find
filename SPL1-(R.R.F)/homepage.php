<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!-- Bootstrap CSS -->

<link href="/css/bootstrap.min.css" rel="stylesheet">

    <title>RRF Home Page</title>
</head>


<style>

/* @import url("https://fonts.googleapis.com/css??family=Poppins:wght@400;500;600;700&display=swap"); */


body{
    background-color: rgb(112, 195, 206);
}

.search{
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    position: relative;
    left: 80px;
    bottom: 0;
    top:20px;
}



.search-box input{
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    background: #fff;
    font-size: 18px;
    border-radius: 50px;
    padding: 0 60px 0 20px;
}

.search-box {
    height: 50px;
    width: 600px;
    color: #fff;
}


.search-btn {
    position: relative;
    left: 560px;
    bottom: 33px;
    height: 50px;
    width: 70px;
    color:#664AFF ;

}

.search-btn:hover {
    color: black;
}

.btnn {
  border: none;
  outline: none;
  padding: 5px 5px;
  background-color: rgb(35, 97, 155);
  cursor: pointer;
  color: white;
  position: relative;
  left: 160px;
  bottom: 20px;
  border-radius: 50px;
}


.btnn:hover {
  background-color:rgb(70, 90, 145) ;
}


.btnn.show {
  background-color: #666;
  color: white;
}

 
/*.dropbtn {
  background-color: rgb(35, 97, 155);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: rgb(35, 97, 155);} */

.container{
  position: relative;
  left: 50px;
  bottom: 70px;
  top: 5px;
  color: black;
  

}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  background-color: white;
  margin: 10px 10px;
  padding: 10px 10px;
  column-gap: 50px;
  float: left;
  width: 25%;
  
  
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}


</style>


<body>

  <!-- <div class="dropdown">
    <button class="dropbtn">Dashboard</button>
    <div class="dropdown-content">
      <a href="#userprofile">User Profile</a>
      <a href="#updateprofile">Update Profile</a>
      <a href="#reset">Reset Password</a>
      <a href="#logout">Log Out</a>
    </div> -->
  

    <div class="search">
        
           <div class="search-box">
            <<form action="search.php" method="post">
              <input type="text" placeholder="Type to search...">
           </form>
           </div>
           <div class="search-btn">
              <i class="fa fa-search"></i> </div>
    </div>


    <div id="myBtnContainer">
       
        <button class="btnn show" onclick="filterSelection('all')"> Show all</button>
        <button class="btnn" onclick="filterSelection('top rated')"> Top Rated</button>
        <button class="btnn" onclick="filterSelection('price')"> Price Range</button>
        <button class="btnn" onclick="filterSelection('location')"> Location</button>
        <button class="btnn" onclick="filterSelection('food catagory')"> Food Catagory</button>
        
    </div>
 
    <div class="container">
      <div class="row gy-3 my-3">

<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "rrf";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error())
{
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}

      $query = "SELECT * FROM restaurant where status=1";
      $query_run = mysqli_query($conn, $query);
      $check_user = mysqli_num_rows($query_run) > 0;

      if($check_user){

        while($row = mysqli_fetch_assoc($query_run)){
             
            ?>
            <div class="col-sm-6 col-md-3">
            <div class="card"> 
             
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
    
    
</body>


</html>