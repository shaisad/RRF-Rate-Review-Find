<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRF Alert </title>
    </head>

    <style>

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
  font-family: 'Times New Roman', Times, serif;
  background-color: rgb(240, 221, 136);
  position: relative;
  top: 100px;
  border-radius: 5px;
    }

img {
    width: 180px;
    top: 300px;
    left: 100px;
}
label {
    position: relative;
    right: 80px;
    color: rgb(80, 31, 19);
font-family: 'Times New Roman', Times, serif;
font-size: 20px;
top: 25px;
}
.cbtnn1 {
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
  font-family: 'Times New Roman', Times, serif;
  border: none;
  position: relative;
  top: 90px;
  left: 220px;

}
.cbtnn2 {
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
  font-family: 'Times New Roman', Times, serif;
  border: none;
  position: relative;
  top: 90px;
  left: 220px;


}
label{
    position: relative;
    right: 25px;
    font-family: 'Times New Roman', Times, serif;
}


    </style>

<body>
<?php
require 'config/dbConfig.php'; 


    $sno = $_GET['fid'];
    ?>

    <div class = "banner">

          
        <div class="logo">

            <img class="rrflogo" src="image/navbarlogo.png" alt="logo">
    
        </div>

        

        <div class = "attribute">
        <label>Your review has been submitted successfully!</label>

    
        
           
           <a class="cbtnn2" href="customer/customerhomepage.php">Home Page</a>
           
           
           
        

       
       
        
        </div>

    </div>


</body>
</html>