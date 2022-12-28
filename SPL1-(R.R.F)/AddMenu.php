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
    <title>RRF Add Menu</title>
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

    <?php 
    require 'dbConfig.php';
    
    $query = "SELECT * FROM restaurant where restaurantname = '$_SESSION[restaurantname]'";
    $query_run = mysqli_query($db, $query);
    $check_user = mysqli_num_rows($query_run) > 0;
    if($check_user){
      while($row = mysqli_fetch_assoc($query_run)){
        $sno = $row['restaurantid'];
      }
    }
    ?>

<?php
echo '
<div class="container">
  <form action="foodconnect.php?resid= '. $sno .'" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="foodname">Foods Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="foodname" placeholder="Food&#39;s name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="price">Price</label>
      </div>
      <div class="col-75">
        <input type="number" id="price" name="price" placeholder="... in BDT">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="category">Category</label>
      </div>
      <div class="col-75">
        <select id="category" name="category">
          <option value="Pizza">Pizza</option>
          <option value="Pasta">Pasta</option>
          <option value="Burger">Burger</option>
          <option value="Cake">Cake</option>
          <option value="Meatbox">Meatbox</option>
          <option value="Rice">Rice</option>
          <option value="Chicken">Chicken</option>
          <option value="Salad">Salad</option>
          <option value="Drinks">Drinks</option>
          <option value="Naan">Naan</option>
          <option value="Chowmein">Chowmein</option>
          <option value="Wings">Wings</option>
        </select>
      </div>
     <div class="row">
      <div class="col-25">
        <label for="category">Spice Level</label>
      </div>
      <div class="col-75">
        <select id="category" name="spicelevel">
        <option value="Non-Spicy">Non-Spicy</option>
        
          <option value="Regular">Regular</option>
          <option value="Mild">Mild</option>
          <option value="Spicy">Spicy</option>
          <option value="Extremely Spicy"> Extremely Spicy</option>

          
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

  
    <div class="row">
      <input type="submit" name="submit" value="Submit">
      
    </div>
   
 </form>
</div>';
?>

</body>
</html>