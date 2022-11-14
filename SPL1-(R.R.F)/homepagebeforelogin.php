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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script>
      $(document).ready(function(){
          $('.search-box input[type="text"]').on("keyup input", function(){
              /* Get input value on change */
              var inputVal = $(this).val();
              var resultDropdown = $(this).siblings(".result");
              if(inputVal.length){
                  $.get("backend-search.php", {term: inputVal}).done(function(data){
                      // Display the returned data in browser
                      resultDropdown.html(data);
                  });
              } else{
                  resultDropdown.empty();
              }
          });
          
          // Set search input value on click of result item
          $(document).on("click", ".result p", function(){
              $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
              $(this).parent(".result").empty();
          });
      });
      </script>
</head>


<style>

@import url("https://fonts.googleapis.com/css??family=Poppins:wght@400;500;600;700&display=swap");


body{
    background-color: rgb(240, 221, 136);
    overflow-x: hidden;
}

.search{
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    position: relative;
    left: 250px;
    bottom: 70px;
}

.search-box input{
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    background: #fff;
    font-size: 18px;
    padding: 0 60px 0 20px;
}

.search-box {
    height: 50px;
    width: 600px;
    color: #fff;
}


.search-btn {
    position: relative;
    left: 630px;
    bottom: 33px;
    height: 50px;
    width: 70px;
    color: rgb(80, 31, 19) ;

}

.search-btn:hover {
    color: rgb(100, 91, 148);
}


.btnn {
  border: none;
  outline: none;
  padding: 8px 8px;
  cursor: pointer;
  color: rgb(80, 31, 19);
  position: relative;
  left: 200px;
  bottom: 100px;
  border-radius: 10px;
}


.btnn:hover {
  background-color: rgb(155, 113, 58) ;
  color: white;
}


.btnn.show {
  background-color: #666;
  color: white;
}

.container{
  position: relative;
  left: 5px;
  bottom: 10px;

} 

img {
    width: 180px;
    top: 300px;
    left: 100px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  position: relative;
  left: 200px;
  background-color: white;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
    position: relative;
    left: 25px;
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

.cardbtn {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: rgb(80, 31, 19);
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.cardbtn:hover
{
  opacity: 0.7;
}

</style>


<body>

    <div class="logo">

        <img class="rrflogo" src="cover.png" alt="logo">

    </div>
      
    <div class="search">
        
           <div class="search-box">
              <input type="text" placeholder="Type to search for restaurants and foods..."> </div>
              <div class = "result"></div> 
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
 
    <div class="card">
        <img src="#" alt="restimage" style="width:100%">
        <div class="container">
        <h4><b><?php echo $row['restaurantname']; ?></b></h4> 
          <p><?php echo $row['location']; ?></p> 
          <p><?php echo $row['foodcategory']; ?></p> 
          <p><button class="cardbtn">Rate Here
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

          </button></p>
          <p><button class="cardbtn">Write a review..
          </button></p>

          

        </div>
      </div>
      <?php
    

        }
      }
      ?> 
    
</body>


</html>





    

   