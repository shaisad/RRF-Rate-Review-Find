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
    right: 125px;
    background-color: aliceblue;
    width: 1023px;
    overflow-y: scroll;
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

</style>

<body>

    <div class="logo">

        <p>
            <img class="handrice" src="handrice.png" alt="logo">

            <h1 class="restname"><span id="restnameresult"></span></h1>
            <h4 class="restlocation"><span id="restlocationresult"></span></h1>


                 <img src="<span id=restimageresult></span>" class="img-fluid"/>
                 
            <img class="rrflogo" src="cover.png" alt="logo">
        </p>

    </div>

    <script>
      document.getElementById("restnameresult").innerHTML=localStorage.getItem("rnamevalue");
      document.getElementById("restlocationresult").innerHTML=localStorage.getItem("rlocationvalue");
      document.getElementById("restimageresult").innerHTML=localStorage.getItem("rimagevalue");
    </script>

   

<div class="cardi">

  <div class="foodcard">
    <!-- <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img class="foodimg" src="Photos 18_10_2022 8_31_57 PM.png" class="img-fluid rounded-start" alt="..."/>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Food's Name</h5>
              <p>Food Description</p>
              <p>Category</p>
              <p>Price</p>
              <a class="card-link stretched-link" href="FoodProfile.html"></a>
              <p>
                <p>Totalrates  Totalreviews</p>
              </p>

            <p>
               Rate Here:
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div>
                <p>
                    <div class="cardbtn">
                    <a href="#" target="_self">Write a review</a>
                    <a href="FoodProfile.html" target="_self">See Details</a>
                    </div>
                </p>
             
            </div>
          </div>
        </div>
    </div>
  </div> -->

   
         

<!-- card -->

<div class="cardfix">
  <div class="container py-5">
   <div class="row mt-3">
    <div class="col-md-6 mt-3">
          
        <div class="col-md-4">
          <?php 
              require 'dbConfig.php';
        
              $query = "SELECT * FROM food where food.foodname= '$row[foodname]'";
              $query_run = mysqli_query($db, $query);
              $check_user = mysqli_num_rows($query_run) > 0;
              
              if($check_user)
              {
                while($row = mysqli_fetch_assoc($query_run))
                {
                  ?>
              
                  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  class="img-fluid rounded-start"/>
                  
               <?php
             }
            }
         ?>
        </div>
           <div class="card">

         <div class="card-body">
         <h5 class="card-title"><?php echo $row['foodname']; ?></h5>
              <p><?php echo $row['subject']; ?></p>
              <p><?php echo $row['category']; ?></p>
              <p><?php echo $row['price']; ?></p>
              <p>
                <p>Totalrates  Totalreviews</p>
              </p>
        
              <p>
               Rate Here:
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div>
                <p>
                    <div class="cardbtn">
                        <a href="#" target="_self">Write a review</a>
                        <a href="FoodProfile.html" target="_self">See Details</a>
                        </div>
                </p>
        

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

         <?php

?>
  </div>
</div>

   
</body>

</html>