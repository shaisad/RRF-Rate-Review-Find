<?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Add Menu</title>
</head>

<style>
    * {
      box-sizing: border-box;
    }

    body{
        background-color: rgb(240, 221, 136);
        overflow: hidden;
    }
    
    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    
    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }
    
    input[type=submit] {
      background-color:rgb(80, 31, 19);
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }
    
    input[type=submit]:hover {
      background-color: rgb(87, 57, 49)9;
    }
    
    .container {
      border-radius: 5px;
      background-color: rgb(241, 228, 166);
      padding: 20px;
      position: relative;
      bottom: 70px;
    }
    
    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }
    
    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    .handrice{
    width: 60px;
    position: relative;
    left: 400px;
    top: 65px;
}

.rrflogo {
    width: 200px;
    position: relative;
    bottom: 100px;
    /* padding-bottom: 20px;
    margin-bottom: 40px; */
}

.restname{
    color: rgb(80, 31, 19);
    text-align: left;
    position: relative;
    left: 470px;
}

.btn a {
  float: left;
  display: block;
  color: rgb(219, 216, 216);
  text-align: center;
  padding: 12px 20px;
  text-decoration:none;
  font-size: 16px;
  background-color:rgb(80, 31, 19);
  margin: 10px;
  border-radius: 5px;
  position: relative;
  top: 10px;
  right: 20px;
  width: 1120px;
}

.btn :hover{
  opacity: 0.7;
}
 
</style>

<body>

    <div class="logo">

        <p>
            <img class="handrice" src="handrice.png" alt="logo">
            <h1 class="restname"><?php echo $_SESSION['restaurantname'];?></h1>
            <img class="rrflogo" src="cover.png" alt="logo">
        </p>

    </div>

<div class="container">
  <form action="foodconnect.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="foodname">Food's Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="foodname" placeholder="Food's name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="price">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price" placeholder="... in BDT">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="category">Category</label>
      </div>
      <div class="col-75">
        <select id="category" name="category">
          <option value="bengali">Bengali</option>
          <option value="italian">Italian</option>
          <option value="asian">Asian</option>
          <option value="indian">Italian</option>
          <option value="chinese">AChinese</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Description</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something about food.." style="height:50px"></textarea>
      </div>
    </div>

   <!-- <form action="foodupload.php" method="post" enctype="multipart/form-data"></form>
    <div class="row">
      <div class="col-25">
          <label for="foodimage">Food's Image</label>
        </div>
        <div class="col-75">
          <input type="file" id="image" name="image">
        </div>
    </div> -->
    <div class="row">
      <input type="submit" name="submit" value="Upload">
      <div class="btn" id="btn">
         <a href="HomePageLoggedInRest.php" target="_self">Exit</a>
       </div>
    </div>
   <!-- </form> -->
 </form>
</div>

</body>
</html>