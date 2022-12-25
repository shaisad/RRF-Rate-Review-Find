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
        User's Profile
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
  left: 190px;
}

.btn :hover{
  opacity: 0.7;
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


      <div class = "banner">
          
        <div class="logo">

            <img class="rrflogo" src="cover.png" alt="logo">
    
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
              echo $_SESSION['location'];
            ?>
          </div>

          <div class = "attribute">
            <label>Email:</label>
            <?php
              echo $_SESSION['useremail'];
            ?>
          </div> 
          
          <!-- <div class="btn" id="btn">
            <div class="dropdown-content">
             <a href="UserUpdate.html" target="_self">Update Profile</a>
          </div> 
        </div> -->


<div class="dropdown">
  <button class="dropbtn">Update</button>
  <div class="dropdown-content">
    <a href="UserUpdateName.html">Update Name</a>
    <a href="UserUpdateEmail.html">Update Email</a>
  </div>
  </div>

          

</div>
      </div>

  </body>
</html>