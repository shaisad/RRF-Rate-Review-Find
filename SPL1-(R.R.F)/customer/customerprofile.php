<?php
error_reporting();
  $sname= "localhost";
  $uname= "root";
  $password = "";
  
  $db_name = "rrf";
  
  $conn = mysqli_connect($sname, $uname, $password, $db_name);
  
  if (!$conn) {
    echo "Connection failed!";
  }
?>

<!DOCTYPE html>
<html>
  <head>
      <title>
        RRF User Profile
      </title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body>

  <style>

@import url("https://fonts.googleapis.com/css??family=Poppins:wght@400;500;600;700&display=swap");


    body{
        background-color: rgb(17, 6, 4);
    }

    .attribute {
        font-size: 18px;
        font-style: normal;
        position: relative;
        top: 30px;
        }

    .banner{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  height: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: rgb(240, 221, 136);
  position: relative;
  top: 100px;
  border-radius: 5px;
    }

    img {
    width: 180px;
    height: 80px;
    top: 350px;
    left: 100px;
}

.btn a {
  float: left;
  display: block;
  color: rgb(219, 216, 216);
  text-align: center;
  padding: 8px;
  text-decoration:none;
  font-size: 13px;
  background-color: rgb(46, 16, 9);
  margin: 10px;
  border-radius: 5px;
  position: relative;
  top: 45px;
  left: 150px;
}

.btn :hover{
  opacity: 0.7;
}



  </style>


      <div class = "banner">
          
        <div class="logo">

            <img class="rrflogo" src="image/navbarlogo.png" alt="logo">
    
        </div>

          <div class = "attribute">
            <label>User's Name:</label>
            <?php
              session_start();
              echo $_SESSION['username'];
            ?>
          </div>

          <div class = "attribute">
            <label>Location:</label>
            <?php
              echo $_SESSION['ulocation'];
            ?>
          </div>

          <div class = "attribute">
            <label>Email:</label>
            <?php
              echo $_SESSION['useremail'];
            ?>
          </div> 

           <div class = "attribute">
            <label>Favourite Cuisine:</label>
            <?php
              echo $_SESSION['userfavcuisine'];
            ?>
          </div>
           
            <div class="btn" id="btn">
            
             <a href="customer/customerupdate.html" target="_self">Update Profile</a>
             <div class="btn" id="btn">
            
             <a href="customer/customercuisine.html" target="_self">Add Cuisine Preference</a>
          
        </div> 
          

</div>
      </div>

  </body>
</html>