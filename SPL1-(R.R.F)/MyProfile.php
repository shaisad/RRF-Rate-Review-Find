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
        My Profile
      </title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body>

  <style>

    body{
        background-color: rgb(112, 195, 206) ;
    }

    .attribute {
        font-size: 17px;
        font-style: normal;
        

    }

    .banner{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
    }


  </style>


      <div class = "banner">
          
        
          <div class = "attribute">
            <label>Restaurant's Name:</label>
            <?php
              session_start();
              echo $_SESSION['restaurantname'];
            ?>
          </div>

          <div class = "attribute">
            <label>Location:</label>
            <?php
              echo $_SESSION['location'];
            ?>
          </div>

          <div class = "attribute">
            <label>Email:</label>
            <?php
              echo $_SESSION['email'];
            ?>
          </div>

          <div class = "attribute">
            <label>Food Category:</label>
            <?php
              echo $_SESSION['foodcategory'];
            ?>
          </div>
          
          
          
      </div>

  </body>
</html>
